// JS fragment import example

import {isWebp,addLoadedClass} from './modules/functions.js';
isWebp();
/* Добавление loaded для HTML после полной загрузки страницы */
addLoadedClass();

const button = document.querySelector('.menu__mobile_button');
const mobileListMenu = document.querySelector('.header__mobile-list');
const mobileItemMenu = document.querySelectorAll('.header__mobile-item')

mobileItemMenu.forEach( item => {
  item.addEventListener('click', (e)=>{
    if(e.currentTarget){
      mobileListMenu.style.top = '-100%'
      button.classList.remove('active');
    }else{
      mobileListMenu.style.top = '0'
      button.classList.add('active');
    }
  })
})

button.addEventListener('click', (e) => {
	button.classList.toggle('active');
  if(button.classList.contains('active')){
    mobileListMenu.style.top = '0'
  }else{
    mobileListMenu.style.top = '-100%'
  }
})