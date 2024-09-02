/*=============== SHOW MENU ===============*/
const navMenu = document.getElementById('nav-menu'),
      navToggle = document.getElementById('nav-toggle'),
      navClose = document.getElementById('nav-close')
if(navToggle){
    navToggle.addEventListener('click',()=>{
        navMenu.classList.add('show-menu')
    })
}
if(navClose){
    navClose.addEventListener('click',()=>{
        navMenu.classList.remove('show-menu')
    })
}
/*=============== REMOVE MENU MOBILE ===============*/
const navLink = document.querySelectorAll('.nav__link')

const linkAction = () =>{
    const navMenu = document.getElementById('nav-menu')
    // When we click on each nav__link, we remove the show-menu class
    navMenu.classList.remove('show-menu')
}
navLink.forEach(n => n.addEventListener('click', linkAction))
/*=============== SWIPER SHOE ===============*/
let swiperShoes = new Swiper('.home__swiper', {
    loop: true,
    spaceBetween: 32,
    grabCursor: true,
    effect: 'creative',
    creativeEffect:{
        prev:{
            tranlate:[-100,0,-500],
            opacity:0,
        },
        next:{
            tranlate:[100,0,-500],
            opacity:0,
        },
    },
  
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
});

/*=============== SHADOW HEADER ===============*/
const shadowHeader = () =>{
    const header = document.getElementById('header')
    // Add a class if the bottom offset is greater than 50 of the viewport
    this.scrollY >= 50 ? header.classList.add('shadow-header') 
                       : header.classList.remove('shadow-header')
}
window.addEventListener('scroll', shadowHeader)
// transisi
window.onload = () => {
    // const anchors = document.querySelectorAll('a');
    const transition_el = document.querySelector('.transition');
  
    setTimeout(() => {
      transition_el.classList.remove('is-active');
    }, 500);
    for (let i = 0; i < anchors.length; i++) {
        const anchor = anchors[i];
    
        anchor.addEventListener('click', e => {
          e.preventDefault();
          // let target = e.target.href;
    
          console.log(transition_el);
    
          transition_el.classList.add('is-active');
    
          console.log(transition_el);
    
          setInterval(() => {
            window.location.href = target;
          }, 500);
        })
      }
  }
