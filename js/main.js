const menuBtn = document.querySelector('.mobile__btn');
const menu = document.querySelector('.mobile-nav');
const closeBtn = document.querySelector('.close__btn');



menuBtn.addEventListener('click', function(){
    menu.classList.toggle('active');
})

closeBtn.addEventListener('click', function(){
    menu.classList.remove('active');
  })


const langBtn = document.getElementById("langBtn");
const langBtnInActive = document.getElementById("langBtnInActive");


langBtn.addEventListener('click', function(){
    langBtn.classList.add('gray');
    langBtnInActive.classList.remove('gray')
})

langBtnInActive.addEventListener('click', function(){
    langBtn.classList.remove('gray');
    langBtnInActive.classList.add('gray')
})


const langBtnMobile = document.getElementById("langBtn-mobile");
const langBtnInActiveMobile = document.getElementById("langBtnInActiveMobile");


console.log(langBtnMobile);
console.log(langBtnInActiveMobile);



langBtnMobile.addEventListener('click', function(){
    langBtnMobile.classList.add('gray');
    langBtnInActiveMobile.classList.remove('gray');
})

langBtnInActiveMobile.addEventListener('click', function(){
    langBtnMobile.classList.remove('gray');
    langBtnInActiveMobile.classList.add('gray');
})

