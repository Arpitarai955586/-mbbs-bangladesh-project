(function ($) {
  "use strict";

  $(window).on("load", function () {
    preloader();
    wowAnimation();
  });

  /*------------------------------------------
	= preloader
	-------------------------------------------*/
  function preloader() {
    $("#preloader").fadeOut("slow", function () {
      $(this).remove();
    });
  }

  /*------------------------------------------
	= back to top
	-------------------------------------------*/
  $(window).scroll(function () {
    if ($(this).scrollTop() > 500) {
      $(".xb-backtotop").addClass("active");
    } else {
      $(".xb-backtotop").removeClass("active");
    }
  });
  $(function () {
    $(".scroll").on("click", function () {
      $("html,body").animate({ scrollTop: 0 }, "slow");
      return false;
    });
  });

  $(window).scroll(function () {
    if ($(this).scrollTop() > 500) {
      $(".xb-backtotop").addClass("active");
    } else {
      $(".xb-backtotop").removeClass(".active");
    }
  });

  /*------------------------------------------
	= sticky header
	-------------------------------------------*/
  function stickyHeader() {
    var scrollDirection = "";
    var lastScrollPosition = 0;

    // Clone and make header sticky if the element with class 'xb-header' exists
    if ($(".xb-header").length) {
      $(".xb-header")
        .addClass("original")
        .clone(true)
        .insertAfter(".xb-header")
        .addClass("xb-header-area-sticky xb-sticky-stt")
        .removeClass("original");
    }

    // Handle scroll events
    $(window).on("scroll", function () {
      var currentScrollPosition = $(window).scrollTop();

      // Determine scroll direction
      scrollDirection =
        currentScrollPosition < lastScrollPosition ? "up" : "down";
      lastScrollPosition = currentScrollPosition;

      // Check if element with ID 'xb-header-area' has class 'is-sticky'
      if ($("#xb-header-area").hasClass("is-sticky")) {
        // Add or remove classes based on scroll position for sticky header and mobile header
        if (lastScrollPosition > 100) {
          $(".xb-header-area-sticky.xb-sticky-stb").addClass("xb-header-fixed");
        } else {
          $(".xb-header-area-sticky.xb-sticky-stb").removeClass(
            "xb-header-fixed"
          );
        }

        // Add or remove classes for sticky header based on scroll direction
        if (scrollDirection === "up" && lastScrollPosition > 100) {
          $(".xb-header-area-sticky.xb-sticky-stt").addClass("xb-header-fixed");
        } else {
          $(".xb-header-area-sticky.xb-sticky-stt").removeClass(
            "xb-header-fixed"
          );
        }
      }
    });
  }
  stickyHeader();

  //=======================
  // header search
  $(".header-search-btn").on("click", function (e) {
    e.preventDefault();
    $(".header-search-form-wrapper").addClass("open");
    $('.header-search-form-wrapper input[type="search"]').focus();
    $(".body-overlay").addClass("active");
  });
  $(".xb-search-close").on("click", function (e) {
    e.preventDefault();
    $(".header-search-form-wrapper").removeClass("open");
    $("body").removeClass("active");
    $(".body-overlay").removeClass("active");
  });

  /*------------------------------------------
	= sidebar
	-------------------------------------------*/
  $(".sidebar-menu-close, .body-overlay").on("click", function () {
    $(".offcanvas-sidebar").removeClass("active");
    $(".body-overlay").removeClass("active");
  });

  $(".offcanvas-sidebar-btn").on("click", function () {
    $(".offcanvas-sidebar").addClass("active");
    $(".body-overlay").addClass("active");
  });
  $(".body-overlay").on("click", function () {
    $(this).removeClass("active");
    $(".header-search-form-wrapper").removeClass("open");
  });

  /*------------------------------------------
	= mobile menu
	-------------------------------------------*/
  $(".xb-nav-hidden li.menu-item-has-children > a").append(
    '<span class="xb-menu-toggle"></span>'
  );
  $(
    ".xb-header-menu li.menu-item-has-children, .xb-menu-primary li.menu-item-has-children"
  ).append('<span class="xb-menu-toggle"></span>');
  $(".xb-menu-toggle").on("click", function () {
    if (!$(this).hasClass("active")) {
      $(this)
        .closest("ul")
        .find(".xb-menu-toggle.active")
        .toggleClass("active");
      $(this)
        .closest("ul")
        .find(".sub-menu.active")
        .toggleClass("active")
        .slideToggle();
    }
    $(this).toggleClass("active");
    $(this).closest(".menu-item").find("> .sub-menu").toggleClass("active");
    $(this).closest(".menu-item").find("> .sub-menu").slideToggle();
  });

  $(".xb-nav-hidden li.menu-item-has-children > a").click(function (e) {
    var target = $(e.target);
    if ($(this).attr("href") === "#" && !target.is(".xb-menu-toggle")) {
      e.stopPropagation();
      if (!$(this).find(".xb-menu-toggle").hasClass("active")) {
        $(this)
          .closest("ul")
          .find(".xb-menu-toggle.active")
          .toggleClass("active");
        $(this)
          .closest("ul")
          .find(".sub-menu.active")
          .toggleClass("active")
          .slideToggle();
      }
      $(this).find(".xb-menu-toggle").toggleClass("active");
      $(this).closest(".menu-item").find("> .sub-menu").toggleClass("active");
      $(this).closest(".menu-item").find("> .sub-menu").slideToggle();
    }
  });
  $(".xb-nav-mobile").on("click", function () {
    $(this).toggleClass("active");
    $(".xb-header-menu").toggleClass("active");
  });

  $(".xb-menu-close, .xb-header-menu-backdrop").on("click", function () {
    $(this).removeClass("active");
    $(".xb-header-menu").removeClass("active");
  });

  /*------------------------------------------
	= data background and bg color
	-------------------------------------------*/
  $("[data-background]").each(function () {
    $(this).css(
      "background-image",
      "url(" + $(this).attr("data-background") + ") "
    );
  });
  $("[data-bg-color]").each(function () {
    $(this).css("background-color", $(this).attr("data-bg-color"));
  });

  /*------------------------------------------
	= aos animation
	-------------------------------------------*/
  function wowAnimation() {
    var wow = new WOW({
      boxClass: "wow",
      animateClass: "animated",
      offset: 0,
      mobile: false,
      live: true,
    });
    wow.init();
  }

  /*------------------------------------------
	= counter
	-------------------------------------------*/
  if ($(".xbo").length) {
    $(".xbo").appear();
    $(document.body).on("appear", ".xbo", function (e) {
      var odo = $(".xbo");
      odo.each(function () {
        var countNumber = $(this).attr("data-count");
        $(this).html(countNumber);
      });
      window.xboOptions = {
        format: "d",
      };
    });
  }

  /*------------------------------------------
	= feature slider
	-------------------------------------------*/
  var slider = new Swiper(".fanfact-slider", {
    slidesPerView: 1,
    roundLengths: true,
    loop: true,
    loopAdditionalSlides: 30,
    effect: "fade",
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    autoplay: {
      enabled: true,
      delay: 6000,
    },
    speed: 400,
    breakpoints: {
      1600: {
        slidesPerView: 1,
      },
      1200: {
        slidesPerView: 1,
      },
      992: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 1,
      },
      576: {
        slidesPerView: 1,
      },
      0: {
        slidesPerView: 1,
      },
    },
  });

  /*------------------------------------------
	= campus-slider
	-------------------------------------------*/
  var slider = new Swiper(".campus-slider", {
    slidesPerView: 3,
    roundLengths: true,
    loop: true,
    spaceBetween: 30,
    centeredSlides: true,
    loopAdditionalSlides: 30,
    speed: 400,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    autoplay: {
      enabled: true,
      delay: 6000,
    },
    breakpoints: {
      1600: {
        slidesPerView: 3,
      },
      1200: {
        slidesPerView: 3,
      },
      992: {
        slidesPerView: 2,
      },
      768: {
        slidesPerView: 2,
      },
      576: {
        slidesPerView: 1,
      },
      0: {
        slidesPerView: 1,
      },
    },
  });

  /*------------------------------------------
	= program-slider
	-------------------------------------------*/
  var slider = new Swiper(".program-slider", {
    slidesPerView: 3,
    spaceBetween: 30,
    roundLengths: true,
    loop: true,
    centeredSlides: true,
    loopAdditionalSlides: 30,
    speed: 400,
    autoplay: {
      enabled: true,
      delay: 6000,
    },
    navigation: {
      nextEl: ".xb-program-next",
      prevEl: ".xb-program-prev",
    },
    breakpoints: {
      1600: {
        slidesPerView: 3,
      },
      1200: {
        slidesPerView: 3,
      },
      992: {
        slidesPerView: 2,
      },
      768: {
        slidesPerView: 2,
      },
      576: {
        slidesPerView: 2,
      },
      0: {
        slidesPerView: 1,
      },
    },
  });

  /*------------------------------------------
	= testimonial slide
	-------------------------------------------*/
  var dcTestimonialSwiper = new Swiper(".testimonial-slider-nav", {
    loop: true,
    spaceBetween: 20,
    speed: 500,
    slidesPerView: 2,
    direction: "vertical",
    navigation: {
      nextEl: ".xb-swiper-arrow-next",
      prevEl: ".xb-swiper-arrow-prev",
    },
  });
  var swiper2 = new Swiper(".testimonial-slider", {
    loop: true,
    spaceBetween: 10,
    effect: "fade",
    navigation: {
      nextEl: ".xb-swiper-arrow-next",
      prevEl: ".xb-swiper-arrow-prev",
    },
    thumbs: {
      swiper: dcTestimonialSwiper,
    },
  });

  /*------------------------------------------
	= clg-testimonial slide
	-------------------------------------------*/
  var clgTestimonialSwiper = new Swiper(".clg-tes-slider_nav", {
    loop: true,
    spaceBetween: 20,
    speed: 500,
    slidesPerView: 5,
    navigation: {
      nextEl: ".tm-swiper-arrow-next",
      prevEl: ".tm-swiper-arrow-prev",
    },
    breakpoints: {
      1600: {
        slidesPerView: 5,
      },
      1200: {
        slidesPerView: 5,
      },
      992: {
        slidesPerView: 5,
      },
      768: {
        slidesPerView: 3,
      },
      576: {
        slidesPerView: 3,
      },
      0: {
        slidesPerView: 2,
      },
    },
  });
  var swiper3 = new Swiper(".clg-testimonial-slider", {
    loop: true,
    spaceBetween: 10,
    navigation: {
      nextEl: ".tm-swiper-arrow-next",
      prevEl: ".tm-swiper-arrow-prev",
    },
    thumbs: {
      swiper: clgTestimonialSwiper,
    },
  });

  /*------------------------------------------
	= hs-testimonial slider
	-------------------------------------------*/
  var slider = new Swiper(".hs-testimonial-slider", {
    slidesPerView: 5,
    spaceBetween: 30,
    roundLengths: true,
    loop: true,
    loopAdditionalSlides: 30,
    autoplay: {
      enabled: true,
      delay: 6000,
    },
    speed: 400,
    breakpoints: {
      1600: {
        slidesPerView: 5,
      },
      1200: {
        slidesPerView: 4,
      },
      992: {
        slidesPerView: 4,
      },
      768: {
        slidesPerView: 2,
      },
      576: {
        slidesPerView: 2,
      },
      0: {
        slidesPerView: 1,
      },
    },
  });
  /*------------------------------------------
	= team slider
	-------------------------------------------*/
  var slider = new Swiper(".team-slider", {
    slidesPerView: 5,
    spaceBetween: 30,
    roundLengths: true,
    loop: true,
    loopAdditionalSlides: 30,
    autoplay: {
      enabled: true,
      delay: 6000,
    },
    speed: 400,
    navigation: {
      nextEl: ".xb-program-next",
      prevEl: ".xb-program-prev",
    },
    breakpoints: {
      1600: {
        slidesPerView: 5,
      },
      1200: {
        slidesPerView: 4,
      },
      992: {
        slidesPerView: 4,
      },
      768: {
        slidesPerView: 2,
      },
      576: {
        slidesPerView: 2,
      },
      0: {
        slidesPerView: 1,
      },
    },
  });

  /*------------------------------------------
	= inhover active
	-------------------------------------------*/
  $(".xb-mouseenter").on("mouseenter", function () {
    $(".xb-mouseenter").removeClass("active");
    $(this).addClass("active");
  });
  $(".xb-mouseenter2").on("mouseenter", function () {
    $(".xb-mouseenter2").removeClass("active");
    $(this).addClass("active");
  });

  /*------------------------------------------
	= magnificPopup
	-------------------------------------------*/
  $(".popup-image").magnificPopup({
    type: "image",
    gallery: {
      enabled: true,
    },
  });
  $(".popup-video").magnificPopup({
    type: "iframe",
    mainClass: "mfp-zoom-in",
  });

  /*------------------------------------------
	= Accordion Box
	-------------------------------------------*/
  if ($(".accordion_box").length) {
    $(".accordion_box").on("click", ".acc-btn", function () {
      var outerBox = $(this).parents(".accordion_box");
      var target = $(this).parents(".accordion");

      if ($(this).next(".acc_body").is(":visible")) {
        $(this).removeClass("active");
        $(this).next(".acc_body").slideUp(300);
        $(outerBox).children(".accordion").removeClass("active-block");
      } else {
        $(outerBox).find(".accordion .acc-btn").removeClass("active");
        $(this).addClass("active");
        $(outerBox).children(".accordion").removeClass("active-block");
        $(outerBox).find(".accordion").children(".acc_body").slideUp(300);
        target.addClass("active-block");
        $(this).next(".acc_body").slideDown(300);
      }
    });
  }

  /*------------------------------------------
	= Blog Carousel
	-------------------------------------------*/
  var blogOneColCarousel = new Swiper(".blog_onecol_carousel", {
    loop: true,
    speed: 1000,
    slidesPerView: 1,
    spaceBetween: 10,
    navigation: {
      nextEl: ".b1cc-swiper-button-next",
      prevEl: ".b1cc-swiper-button-prev",
    },
    autoplay: {
      delay: 4000,
      disableOnInteraction: true,
    },
    pagination: {
      el: ".b1cc-swiper-pagination",
      clickable: true,
    },
  });

  /*------------------------------------------
	= isotop
	-------------------------------------------*/
  $(".grid").imagesLoaded(function () {
    var $grid = $(".grid").isotope({
      itemSelector: ".grid-item",
      percentPosition: true,
      masonry: {
        // use outer width of grid-sizer for columnWidth
        columnWidth: ".grid-item",
      },
    });

    // filter items on button click
    $(".program-menu").on("click", "button", function () {
      var filterValue = $(this).attr("data-filter");
      $grid.isotope({ filter: filterValue });
    });
  });

  //for menu active class
  $(".program-menu button").on("click", function (event) {
    $(this).siblings(".active").removeClass("active");
    $(this).addClass("active");
    event.preventDefault();
  });

  //  Countdown
  $("[data-countdown]").each(function () {
    var $this = $(this),
      finalDate = $(this).data("countdown");
    if (!$this.hasClass("countdown-full-format")) {
      $this.countdown(finalDate, function (event) {
        $this.html(
          event.strftime(
            '<div class="single"><h1>%D</h1><p>Days</p></div> <div class="single"><h1>%H</h1><p>Hours</p></div> <div class="single"><h1>%M</h1><p>Mins</p></div> <div class="single"><h1>%S</h1><p>Sec</p></div>'
          )
        );
      });
    } else {
      $this.countdown(finalDate, function (event) {
        $this.html(
          event.strftime(
            '<div class="single"><h1>%Y</h1><p>Years</p></div> <div class="single"><h1>%m</h1><p>Months</p></div> <div class="single"><h1>%W</h1><p>Weeks</p></div> <div class="single"><h1>%d</h1><p>Days</p></div> <div class="single"><h1>%H</h1><p>Hours</p></div> <div class="single"><h1>%M</h1><p>Mins</p></div> <div class="single"><h1>%S</h1><p>Sec</p></div>'
          )
        );
      });
    }
  });
})(jQuery);

var gradsSlider = new Swiper(".gradsSwiper", {
  slidesPerView: 1,
  loop: true,
  roundLengths: true,
  effect: "slide",
  pagination: {
    el: ".gradsSwiper .swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".gradsSwiper .swiper-button-next",
    prevEl: ".gradsSwiper .swiper-button-prev",
  },
  autoplay: {
    enabled: true,
    delay: 4000,
  },
  speed: 600,
});

document.addEventListener("DOMContentLoaded", function () {
  document.querySelectorAll(".accordion.block .acc-btn").forEach((btn) => {
    btn.addEventListener("click", () => {
      const parent = btn.closest(".accordion.block");
      parent.classList.toggle("active-block");
      const body = parent.querySelector(".acc_body");
      body.classList.toggle("current");
    });
  });
});

document.addEventListener("DOMContentLoaded", () => {
  const lazyImgs = document.querySelectorAll(".lazy-campus-img");
  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        const img = entry.target;
        img.src = img.dataset.src;
        img.onload = () => img.classList.add("loaded");
        observer.unobserve(img);
      }
    });
  });
  lazyImgs.forEach((img) => observer.observe(img));
});
// Ensure Swiper JS is included
const highlightsSwiper = new Swiper(".highlightsSwiper", {
  slidesPerView: 1.2,
  slidesPerColumn: 1.2,
  spaceBetween: 30,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  breakpoints: {
    576: { slidesPerView: 1.2, slidesPerColumn: 1 },
    992: { slidesPerView: 2, slidesPerColumn: 2 },
    1200: { slidesPerView: 2, slidesPerColumn: 2 },
  },
  loop: true,
  autoplay: {
    delay: 3500,
    disableOnInteraction: false,
  },
});

const testimonialsSwiper = new Swiper(".testimonialsSwiper", {
  loop: true,
  spaceBetween: 30,
  autoplay: { delay: 3500 },
  pagination: { el: ".swiper-pagination", clickable: true },
  navigation: { nextEl: ".swiper-button-next", prevEl: ".swiper-button-prev" },
  breakpoints: {
    1200: { slidesPerView: 3 },
    992: { slidesPerView: 2 },
    0: { slidesPerView: 1 },
  },
});

const gallerySwiper = new Swiper(".gallerySwiper", {
  loop: true,
  spaceBetween: 20,
  slidesPerView: 4,
  autoplay: { delay: 3000 },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  breakpoints: {
    1200: { slidesPerView: 4 },
    992: { slidesPerView: 3 },
    576: { slidesPerView: 2 },
    0: { slidesPerView: 1 },
  },
});

const swiperAd = new Swiper(".admissionSwiper", {
  slidesPerView: 1,
  spaceBetween: 20,
  loop: true,
  breakpoints: {
    768: { slidesPerView: 2 },
    1200: { slidesPerView: 3 },
  },
});

document.addEventListener("DOMContentLoaded", function () {
  const toggle = document.getElementById("menuToggle");
  const closeBtn = document.getElementById("menuClose");
  const menu = document.getElementById("mobileMenu");
  const backdrop = document.getElementById("menuBackdrop");

  function openMenu() {
    menu.classList.add("active");
    backdrop.classList.add("active");
    toggle.classList.add("active");
    document.body.style.overflow = "hidden";
  }

  function closeMenu() {
    menu.classList.remove("active");
    backdrop.classList.remove("active");
    toggle.classList.remove("active");
    document.body.style.overflow = "";
  }

  toggle.addEventListener("click", function () {
    const isOpen = menu.classList.contains("active");
    if (isOpen) closeMenu();
    else openMenu();
  });

  backdrop.addEventListener("click", closeMenu);
  document.querySelectorAll(".mobile-nav a").forEach((link) => {
    link.addEventListener("click", closeMenu);
  });
});
const swiperHighlights = new Swiper(".programHighlightsSwiper", {
  slidesPerView: 1,
  spaceBetween: 25,
  loop: true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  autoplay: {
    delay: 4000,
    disableOnInteraction: false,
  },
  breakpoints: {
    768: { slidesPerView: 2 },
    1200: { slidesPerView: 3 },
  },
});

document.addEventListener("DOMContentLoaded", function () {
  const counters = document.querySelectorAll(".statNumber");
  const speed = 200;

  const animateCounter = (counter) => {
    const updateCount = () => {
      const target = +counter.getAttribute("data-count");
      const current = +counter.innerText;
      const increment = target / speed;
      if (current < target) {
        counter.innerText = Math.ceil(current + increment);
        setTimeout(updateCount, 10);
      } else {
        counter.innerText = target;
      }
    };
    updateCount();
  };

  // Trigger animation when visible
  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          animateCounter(entry.target);
          observer.unobserve(entry.target);
        }
      });
    },
    { threshold: 0.4 }
  );

  counters.forEach((counter) => observer.observe(counter));
});

// === JSON DATA ===
const heroData = {
  hero_slider: [
    {
      id: 1,
      banner: "assets/img/banners/1.jpg",
      title: "Driven by Purpose,<br>Defined by Excellence.",
      description:
        "IIEBM offers industry-aligned PGDM programs with dual specializations, equipping students with strong domain expertise and leadership skills. With certifications, internships, live projects, and global collaborations, our programs prepare graduates to be battle-ready for the corporate world.",
      button_text: "Explore Our Programmes",
      button_link: "#programs",
    },
    {
      id: 2,
      banner: "assets/img/banners/2.jpg",
      title: "Your Future Starts Here<br>Admissions Open",
      description:
        "Join a diverse cohort, unlock scholarships, and begin your journey toward transformative education. Admissions for 2025–26 are now open.",
      button_text: "Apply Now",
      button_link: "#apply",
    },
    {
      id: 3,
      banner: "assets/img/banners/3.jpg",
      title: "A Home Beyond Classrooms<br>Culture, Community & Campus Life",
      description:
        "At IIEBM, you'll find more than classrooms — a vibrant culture of collaboration, innovation, support, and life-long friendships.",
      button_text: "Discover Student Life",
      button_link: "#campuslife",
    },
    {
      id: 4,
      banner: "assets/img/banners/4.jpg",
      title: "From Classroom to<br>Global Careers",
      description:
        "Our alumni are making an impact in corporations, startups, and NGOs worldwide. Join IIEBM and launch your journey to leadership and innovation.",
      button_text: "Discover Student Life",
      button_link: "#form",
    },
  ],
};

// === Render Slides ===
const slidesContainer = document.getElementById("heroSlides");
heroData.hero_slider.forEach((slide) => {
  const slideHTML = `
    <div class="swiper-slide" style="background-image: url('${slide.banner}');">
    <div class="hero-slide">
      <div class="hero-content">
        <h1>${slide.title}</h1>
        <p>${slide.description}</p>
        <a href="${slide.button_link}" class="btn btn-primary-custom">${slide.button_text}</a>
      </div>
      </div>
    </div>`;
  slidesContainer.insertAdjacentHTML("beforeend", slideHTML);
});

// === Initialize Swiper ===
const swiper = new Swiper(".hero-slider", {
  loop: true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },

  effect: "fade",
});
document.addEventListener("DOMContentLoaded", function() {
  new Swiper(".recognitionsSwiper", {
    loop: true,
    spaceBetween: 25,
    autoplay: {
      delay: 4000,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    breakpoints: {
      320: { slidesPerView: 1 },
      576: { slidesPerView: 2 },
      992: { slidesPerView: 3 },
      1200: { slidesPerView: 4 },
    },
  });
});


