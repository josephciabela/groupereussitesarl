// Main JS for site — restored clean IIFE with optional partners animation
(function() {
  "use strict";

  /* ------------ Scrolled class handling ------------ */
  (function() {
    const selectBody = document.body;
    const selectHeader = document.querySelector('#header');
    if (!selectHeader) return;

    let ticking = false;

    function updateScrolled() {
      const scrollY = window.scrollY || window.pageYOffset;
      if (scrollY > 0) selectBody.classList.add('scrolled');
      else selectBody.classList.remove('scrolled');
      ticking = false;
    }

    function onScroll() {
      if (!ticking) {
        window.requestAnimationFrame(updateScrolled);
        ticking = true;
      }
    }

    document.addEventListener('scroll', onScroll, { passive: true });
    window.addEventListener('load', updateScrolled);
  })();


  /* ------------ Mobile nav toggle ------------ */
  const mobileNavToggleBtn = document.querySelector('.mobile-nav-toggle');

  function mobileNavToogle() {
    document.querySelector('body').classList.toggle('mobile-nav-active');
    if (mobileNavToggleBtn) {
      mobileNavToggleBtn.classList.toggle('bi-list');
      mobileNavToggleBtn.classList.toggle('bi-x');
    }
  }
  if (mobileNavToggleBtn) {
    mobileNavToggleBtn.addEventListener('click', mobileNavToogle);
  }


  /* ------------ Hide mobile nav on same-page/hash links ------------ */
  document.querySelectorAll('#navmenu a').forEach(navmenu => {
    navmenu.addEventListener('click', () => {
      if (document.querySelector('.mobile-nav-active')) {
        mobileNavToogle();
      }
    });
  });


  /* ------------ Toggle mobile nav dropdowns ------------ */
  document.querySelectorAll('.navmenu .toggle-dropdown').forEach(navmenu => {
    navmenu.addEventListener('click', function(e) {
      e.preventDefault();
      this.parentNode.classList.toggle('active');
      this.parentNode.nextElementSibling.classList.toggle('dropdown-active');
      e.stopImmediatePropagation();
    });
  });


  /* ------------ Preloader ------------ */
  const preloader = document.querySelector('#preloader');
  if (preloader) {
    window.addEventListener('load', () => {
      preloader.remove();
    });
  }


  /* ------------ Scroll top button (guarded) ------------ */
  let scrollTop = document.querySelector('.scroll-top');

  function toggleScrollTop() {
    if (scrollTop) {
      window.scrollY > 100 ? scrollTop.classList.add('active') : scrollTop.classList.remove('active');
    }
  }
  if (scrollTop) {
    scrollTop.addEventListener('click', (e) => {
      e.preventDefault();
      window.scrollTo({
        top: 0,
        behavior: 'smooth'
      });
    });

    window.addEventListener('load', toggleScrollTop);
    document.addEventListener('scroll', toggleScrollTop);
  }


  /* ------------ AOS init ------------ */
  function aosInit() {
    if (typeof AOS !== 'undefined') {
      AOS.init({
        duration: 600,
        easing: 'ease-in-out',
        once: true,
        mirror: false
      });
    }
  }
  window.addEventListener('load', aosInit);


  /* ------------ Init swiper sliders ------------ */
  function initSwiper() {
    document.querySelectorAll(".init-swiper").forEach(function(swiperElement) {
      const cfgEl = swiperElement.querySelector(".swiper-config");
      if (!cfgEl) return;
      let config = {};
      try {
        config = JSON.parse(cfgEl.innerHTML.trim());
      } catch (e) {
        console.error('Swiper config parse error', e);
        return;
      }

      if (swiperElement.classList.contains("swiper-tab")) {
        initSwiperWithCustomPagination(swiperElement, config);
      } else {
        new Swiper(swiperElement, config);
      }
    });
  }

  window.addEventListener("load", initSwiper);


  /* ------------ GLightbox init ------------ */
  if (typeof GLightbox !== 'undefined') {
    const glightbox = GLightbox({ selector: '.glightbox' });
  }


  /* ------------ Partners animation (present but disabled) ------------ */
  // Toggle this flag to true to enable the sequential zoom animation
  const ENABLE_PARTNERS_ANIMATION = false;

  function initPartnersAnimation() {
    const logos = document.querySelectorAll('.partner-logo');
    if (!logos.length) return;
    let currentIndex = 0;

    function animateLogos() {
      logos.forEach(logo => logo.classList.remove('active'));
      logos[currentIndex].classList.add('active');

      currentIndex++;
      if (currentIndex >= logos.length) currentIndex = 0;
    }

    animateLogos();
    setInterval(animateLogos, 1200);
  }

  if (ENABLE_PARTNERS_ANIMATION) {
    window.addEventListener('DOMContentLoaded', initPartnersAnimation);
  }

})();


/*-- Maquettes Slider Gallery --*/
const swiper = new Swiper('.swiper-container', {
  effect: 'coverflow',
  grabCursor: true,
  centeredSlides: true,
  slidesPerView: 5,       // afficher 3 slides visibles à la fois
  spaceBetween: 30,       // espace entre les slides
  loop: true,             // loop infini
  coverflowEffect: {
    rotate: 0,
    stretch: 20,
    depth: 100,
    modifier: 1,
    slideShadows: false,
  },
  autoplay: {
    delay: 2000,
    disableOnInteraction: false,
  },
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
  breakpoints: {
    640: { slidesPerView: 1 },
    768: { slidesPerView: 2 },
    1024: { slidesPerView: 3 }
  }
});

/*-- Actu Modal ---*/
// Elements
const openModalBtn = document.getElementById('openModal');
const modal = document.getElementById('videoModal');
const closeModalBtn = document.querySelector('.close-btn');
const youtubeVideo = document.getElementById('youtubeVideo');

// Remplace cette ID par ta vidéo YouTube
const youtubeID = "Q-yfjKZ5_Sk"; // <- mets ici ton ID

openModalBtn.addEventListener('click', (e) => {
  e.preventDefault();
  modal.style.display = "block";
  
  // Charge la vidéo au moment de l’ouverture
  youtubeVideo.src = "https://www.youtube.com/embed/" + youtubeID + "?autoplay=1&rel=0";
});

// Fermer
closeModalBtn.addEventListener('click', () => {
  modal.style.display = "none";
  youtubeVideo.src = "";  // Stoppe la vidéo
});

// Fermer si clic à l’extérieur
window.addEventListener('click', (e) => {
  if (e.target == modal) {
    modal.style.display = "none";
    youtubeVideo.src = "";
  }
});