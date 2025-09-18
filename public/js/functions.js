function loading(){
  body.style.opacity = '1';
  body.style.transition = 'opacity 750ms';


}


window.addEventListener('load',()=>{
  body.style.opacity = '0';
  setTimeout(() => {
    loading();
  }, 0)
})