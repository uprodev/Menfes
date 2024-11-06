// lenis
const lenis = new Lenis({
  lerp: 0.06,
});

function raf(time) {
  lenis.raf(time);
  requestAnimationFrame(raf);
}

requestAnimationFrame(raf);

jQuery(document).ready(function ($) {
  // headroom
  var header = document.querySelector(".header");
  var headroom = new Headroom(header, {
    offset: 0,
  });
  headroom.init();

  // lang
  $(".lang-toggler").on("click", function () {
    $(this).toggleClass("active");
    $(".lang-wrapper ul").toggle(100);
  });

  // menu
  $(".menu-item-has-children").each(function () {
    var btn = $('<button class="submenu-toggler" />');
    btn.append('<i class="fa-regular fa-chevron-down" />');
    $(this).find("ul").before(btn);
  });
  $(document).on("click", ".menu-item-has-children .submenu-toggler", function () {
    if (!$(this).parent("li").hasClass("show")) {
      $(this).parent("li").addClass("show");
      $(this).next("ul").slideDown(300);
    } else {
      $(this).parent("li").removeClass("show");
      $(this).next("ul").slideUp(300);
    }
  });

  $("#navbarContent").on("shown.bs.collapse", function () {
    $("html").addClass("hide-scroll");
    lenis.stop();
  });
  $("#navbarContent").on("hide.bs.collapse", function () {
    $("html").removeClass("hide-scroll");
    lenis.start();
  });

  // swiper
  if ($(".banner-panel").length) {
    const panelSwiper = new Swiper(".banner-panel .swiper", {
      loop: true,
      spaceBetween: 0,
      autoplay: {
        delay: 5000,
      },
      breakpoints: {
        768: {
          slidesPerView: 3,
          spaceBetween: 18,
          autoplay: false,
          allowTouchMove: false,
          loop: false,
        },
      },
    });
  }

  if ($(".list-slider").length) {
    const listSwiper = new Swiper(".list-slider", {
      loop: true,
      spaceBetween: 20,
      breakpoints: {
        768: {
          slidesPerView: 3,
          spaceBetween: 0,
          allowTouchMove: false,
          loop: false,
        },
      },
      pagination: {
        el: ".list-slider .swiper-pagination",
        clickable: true,
      },
      navigation: {
        prevEl: ".list-slider .swiper-button-prev",
        nextEl: ".list-slider .swiper-button-next",
      },
    });
  }

  if ($(".reviews-slider").length) {
    const swiperThumbnail = new Swiper(".reviews-slider .swiper-thumbs", {
      slidesPerView: "auto",
    });

    const swiper = new Swiper(".reviews-slider .swiper-main", {
      loop: true,
      spaceBetween: 0,
      speed: 1000,
      autoHeight: true,
      navigation: {
        prevEl: ".reviews-slider .swiper-button-prev",
        nextEl: ".reviews-slider .swiper-button-next",
      },
      thumbs: {
        swiper: swiperThumbnail,
      },
      pagination: {
        el: ".reviews-slider .swiper-pagination",
        clickable: true,
      },
      breakpoints: {
        768: {
          autoHeight: false,
        },
      },
    });

    $(".swiper-overlay-right").on("click", function () {
      swiper.slideNext();
    });
    $(".swiper-overlay-left").on("click", function () {
      swiper.slidePrev();
    });
  }

  if ($(".logos-slider").length) {
    const logoSlides = $(".logos-slider .swiper-slide").length;

    if ($(".logos-slider .swiper-slide").length > 4) {
      const logosSwiper = new Swiper(".logos-slider .swiper", {
        loop: true,
        spaceBetween: 30,
        speed: 10000,
        slidesPerView: "auto",
        autoplay: {
          delay: 0,
        },
        breakpoints: {
          768: {
            spaceBetween: 55,
          },
        },
      });
    } else {
      $(".logos-slider .swiper").addClass("no-slider");
    }
  }

  if ($(".news-slider").length) {
    const newsSwiper = new Swiper(".news-slider .swiper", {
      loop: false,
      spaceBetween: 15,
      speed: 700,
      slidesPerView: 1,
      navigation: {
        prevEl: ".news-slider .swiper-button-prev",
        nextEl: ".news-slider .swiper-button-next",
      },
      pagination: {
        el: ".news-slider .swiper-pagination",
        clickable: true,
      },
      breakpoints: {
        600: {
          slidesPerView: 2.2,
        },
        992: {
          slidesPerView: 3,
        },
      },

      on: {
        init: function (swiper) {
          var scale = (100 / swiper.slides.length / 100) * (swiper.realIndex + 3);
          $(".news-slider .swiper-pagination-progressbar-fill").css({ transform: "scaleX(" + scale + ")" });
        },
        realIndexChange: function (swiper) {
          var scale = (100 / swiper.slides.length / 100) * (swiper.realIndex + 3);
          $(".news-slider .swiper-pagination-progressbar-fill").css({ transform: "scaleX(" + scale + ")" });
        },
      },
    });

    $(".swiper-overlay-right").on("click", function () {
      swiper.slideNext();
    });
    $(".swiper-overlay-left").on("click", function () {
      swiper.slidePrev();
    });
  }
});
