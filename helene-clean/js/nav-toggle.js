document.addEventListener('DOMContentLoaded', function () {
  const header = document.getElementById('masthead');
  const toggle = document.getElementById('nav-toggle');
  const nav = document.getElementById('site-navigation');

  if (toggle && nav) {
    toggle.addEventListener('click', function () {
      toggle.classList.toggle('open');
    });

    document.addEventListener('click', function (e) {
      if (!nav.contains(e.target) && e.target !== toggle) {
        toggle.classList.remove('open');
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
