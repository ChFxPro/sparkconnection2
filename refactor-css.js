const fs = require('fs');
const path = require('path');

const themeDir = path.join(__dirname, 'helene-clean');
const landingCssPath = path.join(themeDir, 'helene-landing.css');
const styleCssPath = path.join(themeDir, 'style.css');
const functionsPath = path.join(themeDir, 'functions.php');

function assertFile(p) {
  if (!fs.existsSync(p)) {
    console.error(`Missing required file: ${p}`);
    process.exit(1);
  }
}

[landingCssPath, styleCssPath, functionsPath].forEach(assertFile);

function backup(file) {
  const backup = file + '.bak';
  if (!fs.existsSync(backup)) {
    fs.copyFileSync(file, backup);
    console.log(`Backed up ${path.basename(file)} to ${path.basename(backup)}`);
  } else {
    console.log(`Backup already exists for ${path.basename(file)}`);
  }
}

backup(landingCssPath);
backup(styleCssPath);
backup(functionsPath);

let landingCss = fs.readFileSync(landingCssPath, 'utf8');
const startMarker = '/* === Helene Landing Header and Footer Styling === */';
const startIdx = landingCss.indexOf(startMarker);
let endIdx = -1;
if (startIdx !== -1) {
  endIdx = landingCss.indexOf('footer.brand-footer', startIdx);
  if (endIdx === -1) {
    endIdx = landingCss.length;
  }
}

let extracted = '';
if (startIdx !== -1 && endIdx !== -1 && startIdx < endIdx) {
  extracted = landingCss.slice(startIdx, endIdx).trimEnd();
} else {
  console.log('No header/nav block found for extraction');
}

// Append to style.css if not already present
if (extracted) {
  let styleCss = fs.readFileSync(styleCssPath, 'utf8');
  if (!styleCss.includes(startMarker)) {
    const headerMatch = styleCss.match(/\.site-header\s*\{[^}]*\}/s);
    if (!headerMatch) {
      console.error('Unable to locate .site-header block in style.css');
      process.exit(1);
    }
    const insertPos = styleCss.indexOf(headerMatch[0]) + headerMatch[0].length;
    const newStyle = styleCss.slice(0, insertPos) + '\n\n' + extracted + '\n' + styleCss.slice(insertPos);
    fs.writeFileSync(styleCssPath, newStyle);
    console.log('Appended CSS block to style.css');
  } else {
    console.log('style.css already contains the header/nav block');
  }

  // Remove block from landing css
  if (landingCss.includes(startMarker)) {
    const newLanding = landingCss.slice(0, startIdx) + landingCss.slice(endIdx);
    fs.writeFileSync(landingCssPath, newLanding);
    console.log('Pruned header/nav CSS from helene-landing.css');
  }
}

// Scope enqueue in functions.php
let functionsCode = fs.readFileSync(functionsPath, 'utf8');
const scopedRegex = /if\s*\(\s*is_page_template\(\s*'page-helene\.php'\s*\)\s*\)\s*\{[\s\S]*?wp_enqueue_style\(\s*'helene-landing-style'/;
if (scopedRegex.test(functionsCode)) {
  console.log('helene-landing.css enqueue already scoped');
} else {
  const lineRegex = /(\s*wp_enqueue_style\([^\n]*helene-landing[^\n]*;)/;
  const match = functionsCode.match(lineRegex);
  if (match) {
    const indent = match[1].match(/^\s*/)[0];
    const replacement = `${indent}if ( is_page_template( 'page-helene.php' ) ) {\n${indent}    ${match[1].trim()}\n${indent}}`;
    functionsCode = functionsCode.replace(lineRegex, replacement);
    fs.writeFileSync(functionsPath, functionsCode);
    console.log('Scoped helene-landing.css to page-helene template');
  } else {
    console.log('helene-landing style enqueue not found');
  }
}

console.log('Refactor complete');
