

const buttonMobile = document.querySelector('.menu__mobile_button');
const mobileListMenu = document.querySelector('.header__mobile-list');
const mobileItemMenu = document.querySelectorAll('.header__mobile-list li');

mobileItemMenu.forEach( item => {
 
  item.addEventListener('click', (e)=>{
    if(e.currentTarget){
      mobileListMenu.style.top = '-200%'
      buttonMobile.classList.remove('active');
      document.body.style.overflow = 'visible'
    }else{
      mobileListMenu.style.top = '0'
      buttonMobile.classList.add('active');
      document.body.style.overflow = 'hidden'
    }
  })
})

buttonMobile.addEventListener('click', (e) => {
	buttonMobile.classList.toggle('active');
  if(buttonMobile.classList.contains('active')){
    mobileListMenu.style.top = '0'
    document.body.style.overflow = 'hidden'
  }else{
    mobileListMenu.style.top = '-200%';
    document.body.style.overflow = 'visible'
  }
})