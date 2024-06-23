function outsideClick(event){
  targetElement = event.target;
  if(targetElement.classList.contains('modal')){
    targetElement.classList.remove('active');
  }
}

function activeModal(){
  const html = document.documentElement;
  const modal = document.querySelector('.modal');
  modal.classList.add('active');
  html.addEventListener('click', outsideClick);
}

const modalBtn = document.querySelector('.add-btn');
modalBtn.addEventListener('click', activeModal);