const puppeteer = require('puppeteer-core');
(async () => {
  const browser = await puppeteer.launch({
    executablePath: 'chromium-browser',
    args: ['--no-sandbox','--disable-setuid-sandbox']
  });
  const page = await browser.newPage();
  await page.setViewport({ width: 375, height: 667 });
  await page.goto('http://localhost:8888/sparkconnection-local/spark-connection/');
  console.log('Checking toggle button…');
  await page.waitForSelector('#nav-toggle');
  const nav = await page.$('#site-navigation');
  const initialClasses = await page.evaluate(el => el.className, nav);
  if (initialClasses.includes('toggled')) throw new Error('Nav should start closed');
  await page.click('#nav-toggle');
  const toggledClasses = await page.evaluate(el => el.className, nav);
  if (!toggledClasses.includes('toggled')) throw new Error('Nav did not toggle open');
  const menuVisible = await page.evaluate(() => {
    const m = document.querySelector('#primary-menu');
    return window.getComputedStyle(m).display !== 'none';
  });
  if (!menuVisible) throw new Error('Primary menu still hidden after toggle');
  console.log('Smoke test passed!');
  await browser.close();
  process.exit(0);
})().catch(e => {
  console.error('Smoke test failed:', e.message);
  process.exit(1);
});
