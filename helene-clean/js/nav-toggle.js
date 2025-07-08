document.addEventListener('DOMContentLoaded',function(){
  const header=document.getElementById('masthead');
  const toggle=document.getElementById('nav-toggle');
  if(toggle){
    toggle.addEventListener('click',()=>{
      toggle.classList.toggle('open');
    });
  }
  if(header){
    window.addEventListener('scroll',()=>{
      if(window.scrollY>0){
        header.classList.add('scrolled');
      }else{
        header.classList.remove('scrolled');
      }
    });
  }
});
