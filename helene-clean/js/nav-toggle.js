(function(){
  document.addEventListener('DOMContentLoaded',function(){
    const toggle = document.getElementById('nav-toggle');
    const nav = document.getElementById('site-navigation');
    if(!toggle||!nav) return;
    toggle.addEventListener('click',()=>{
      toggle.classList.toggle('open');
      nav.classList.toggle('toggled');
      const expanded = toggle.classList.contains('open');
      toggle.setAttribute('aria-expanded',expanded);
      console.log('Toggle open:',expanded,'Nav toggled:',nav.classList.contains('toggled'));
    });
  });
})();
