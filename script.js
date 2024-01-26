let menubar = document.querySelector('#menu-bar')
let mynav = document.querySelector('.navbar')




  menubar.onclick = ()=>{
	 menubar.classList.toggle('fa-bar')
	 mynav.classList.toggle('active')
}

var swiper = new Swiper(".mySwiper", {
  slidesPerView: 3,
  spaceBetween: 30,
  slidesPerGroup: 3,
  loop: true,
  loopFillGroupWithBlank: true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});
