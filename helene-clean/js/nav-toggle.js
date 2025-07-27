;(function() {
  document.addEventListener('DOMContentLoaded', function() {
    const toggle = document.getElementById('nav-toggle');
    const nav = document.getElementById('site-navigation');
    if (!toggle || !nav) return;

    toggle.addEventListener('click', function() {
      // Toggle the ARIA state on the button
      const expanded = this.getAttribute('aria-expanded') === 'true';
      this.setAttribute('aria-expanded', String(!expanded));
      // Toggle the nav visibility class
      nav.classList.toggle('toggled');
    });
  });
})();