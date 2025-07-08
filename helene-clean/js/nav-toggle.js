document.addEventListener('DOMContentLoaded', function () {
  const header = document.getElementById('masthead');
  const toggle = document.getElementById('nav-toggle');
  const nav = document.getElementById('site-navigation');

  if (toggle && nav) {
    toggle.addEventListener('click', function () {
      const expanded = toggle.getAttribute('aria-expanded') === 'true';
      toggle.setAttribute('aria-expanded', expanded ? 'false' : 'true');
      toggle.classList.toggle('open');
      nav.classList.toggle('toggled');
    });

    document.addEventListener('click', function (e) {
      const link = e.target.closest ? e.target.closest('#site-navigation a') : null;
      if ((link || !nav.contains(e.target)) && e.target !== toggle) {
        toggle.classList.remove('open');
        nav.classList.remove('toggled');
        toggle.setAttribute('aria-expanded', 'false');
      }
    });
  }

  if (header) {
    window.addEventListener('scroll', function () {
      if (window.scrollY > 0) {
        header.classList.add('scrolled');
      } else {
        header.classList.remove('scrolled');
      }
    });
  }
});