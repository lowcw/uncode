
var swiper = new Swiper(".mySwiper", {
  loop: true,
  slidesPerView:3.5,
  spaceBetween: 20,
  freeMode: true,
  centeredSlides: true,
  freeModeMomentum: false,

  navigation: {
          nextEl: ".swiper-button-next-custom",
          prevEl: ".swiper-button-prev-custom",
        },
         // Responsive breakpoints
  breakpoints: {
    320: {  // Mobile
      slidesPerView: 1,
      spaceBetween: 10,
      freeMode: false,       // optional: make snap scroll
      centeredSlides: false, // optional: show full slide
       pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    },
    768: { // Tablet
      slidesPerView: 2,
      spaceBetween: 20,
      freeMode: true,
      centeredSlides: true,
       pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    },
    1024: { // Desktop
      slidesPerView: 3.5,
      spaceBetween: 20,
      freeMode: true,
      centeredSlides: true
    }
  }
});
var my_sec_Swiper = new Swiper(".my_sec_Swiper", {
  loop: true,
  slidesPerView:5.5,
  spaceBetween: 20,
  freeMode: true,
  centeredSlides: true,
  freeModeMomentum: false,

  navigation: {
          nextEl: ".swiper-button-next-custom",
          prevEl: ".swiper-button-prev-custom",
        },
                 // Responsive breakpoints
  breakpoints: {
    320: {  // Mobile
      slidesPerView: 2,
      spaceBetween: 10,
      freeMode: false,       // optional: make snap scroll
      centeredSlides: false, // optional: show full slide
       pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    },
    768: { // Tablet
      slidesPerView: 5.5,
      spaceBetween: 20,
      freeMode: true,
      centeredSlides: true,
       pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    },
    1024: { // Desktop
      slidesPerView: 5.5,
      spaceBetween: 20,
      freeMode: true,
      centeredSlides: true
    }
  }

});
var about_swiper = new Swiper(".about_swiper", {
  loop: true,
  slidesPerView: 1.5,
  centeredSlides: true,
  spaceBetween: 30,

  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  breakpoints: {
    320: {  // Mobile
      slidesPerView: 1,
      spaceBetween: 10,
      freeMode: false,       // optional: make snap scroll
      centeredSlides: false, // optional: show full slide
       pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    },
    768: { // Tablet
      slidesPerView: 1.5,
      spaceBetween: 20,
      freeMode: true,
      centeredSlides: true,
       pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    }
  }
});
var about_swiper = new Swiper(".s_portfolio_swiper", {
  loop: true,
  slidesPerView: 1.5,
  centeredSlides: true,
  spaceBetween: 30,
  speed:1000,

  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  autoplay: 
    {
      delay: 2000,
    },
  breakpoints: {
    320: {  // Mobile
      slidesPerView: 1,
      spaceBetween: 10,
      freeMode: false,       // optional: make snap scroll
      centeredSlides: false, // optional: show full slide
       pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    },
    768: { // Tablet
      slidesPerView: 1.5,
      spaceBetween: 20,
      freeMode: true,
      centeredSlides: true,
       pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    }
  }
});
  var swiper = new Swiper(".this_swiper", {
    direction: "vertical",
    slidesPerView: 1,
    grabCursor: true,
     mousewheel: true,
        mousewheel: { releaseOnEdges: true 
    }// <-- allows scrolling to page after last slide },
  });
let prevScroll = window.pageYOffset;
let navbar = document.getElementById("navbar_head");

window.onscroll = function () {

    let currentScroll = window.pageYOffset;
    // Only apply on desktop (example: width >= 768px)
    if (window.innerWidth > 768) {
    // change background
        if (window.scrollY > 100) {
            navbar.classList.add("scrolled");
        } else {
            navbar.classList.remove("scrolled");
        } 
        // hide when scroll down
        if (currentScroll > prevScroll) {
            navbar.style.top = "-200px";
        } 
        // show when scroll up
        else {
            navbar.style.top = "0";
          
        }
    }else{
        
        if (window.scrollY > 100) {
            navbar.classList.add("scrolled");
        } else {
            navbar.classList.remove("scrolled");
        } 
        navbar.style.top = "0";
    }

    prevScroll = currentScroll;

    
};


document.addEventListener('DOMContentLoaded', function () {

    const collapseEl = document.getElementById('collapseExample0');
    const button = document.querySelector('.trigger-more');
    const fadeText  = document.querySelector('.quote-text');

    collapseEl.addEventListener('shown.bs.collapse', function () {
        button.textContent = 'Close Section';
        fadeText.classList.remove('fade-text');
    });

    collapseEl.addEventListener('hidden.bs.collapse', function () {
        button.textContent = 'Open Section';
        fadeText.classList.add('fade-text');
    });

});
const buttons = document.querySelectorAll('[data-filter]');
const items = document.querySelectorAll('.item');

buttons.forEach(btn => {

    btn.addEventListener('click', () => {

        buttons.forEach(b => b.classList.remove('active'));
        btn.classList.add('active');

        const filter = btn.dataset.filter;

        items.forEach(item => {

            if(filter === 'all'){
                item.style.display = 'block';
            }
            else{

                if(item.classList.contains(filter)){
                    item.style.display = 'block';
                }else{
                    item.style.display = 'none';
                }

            }

        });

    });

});

var glightbox = GLightbox({
  loop: true,
  selector: ".glightbox",
  openEffect: "zoom",
  closeEffect: "fade",
  startAt: 0,
  closeOnOutsideClick: false,
  zoomable: true,
  height: "auto",
  touchNavigation: true
});