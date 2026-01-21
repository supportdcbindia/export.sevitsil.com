/*=== Javascript function indexing hear===========

1.counterUp ----------(Its use for counting number)
2.stickyHeader -------(header class sticky)
3.wowActive ----------( Waw js plugins activation)
4.swiperJs -----------(All swiper in this website hear)
5.salActive ----------(Sal animation for card and all text)
6.textChanger --------(Text flip for banner section)
7.timeLine -----------(History Time line)
8.datePicker ---------(On click date calender)
9.timePicker ---------(On click time picker)
10.timeLineStory -----(History page time line)
11.vedioActivation----(Vedio activation)
12.searchOption ------(search open)
13.cartBarshow -------(Cart sode bar)
14.sideMenu ----------(Open side menu for desktop)
15.Back to top -------(back to top)
16.filterPrice -------(Price filtering)

==================================================*/

(function ($) {
  "use strict";
  let device_width = window.innerWidth;
  var rtsJs = {
    m: function (e) {
      rtsJs.d();
      rtsJs.methods();
    },
    d: function (e) {
      (this._window = $(window)),
        (this._document = $(document)),
        (this._body = $("body")),
        (this._html = $("html"));
    },
    methods: function (e) {
      rtsJs.rtlToggle();
      rtsJs.preloader();
      rtsJs.smoothScroll();
      rtsJs.countDown();
      rtsJs.metismenu();
      rtsJs.galleryPopUp();
      rtsJs.cartNumberIncDec();
      rtsJs.sideMenu();
      rtsJs.searchOption();
      rtsJs.vedioActivation();
      rtsJs.portfoliobounceAnimation();
      rtsJs.commonAnimation();
      rtsJs.imageSlideGsap();
      rtsJs.swiperActivation();
      rtsJs.odoMeter();
      rtsJs.splitText();
      rtsJs.backToTopInit();
      rtsJs.stickyHeader();
      rtsJs.galleryPopUpmag();
      rtsJs.gsapAnimationImageScale();
      rtsJs.radialProgress();
    },
    rtlToggle: function () {
      $(document).ready(function () {
        // Retrieve the saved direction from localStorage
        const savedDir = localStorage.getItem("pageDirection") || "ltr"; // Default to "ltr"
        $("body").attr("dir", savedDir);

        // Update button visibility based on saved direction
        if (savedDir === "rtl") {
          $(".rtl").removeClass("show");
          $(".ltr").addClass("show");
        } else {
          $(".rtl").addClass("show");
          $(".ltr").removeClass("show");
        }

        // Toggle direction and save state on button click
        $(".rtl-ltr-switcher-btn").on("click", function () {
          const currentDir = $("body").attr("dir");
          const newDir = currentDir === "rtl" ? "ltr" : "rtl";

          // Update body direction
          $("body").attr("dir", newDir);

          // Toggle button visibility
          $(".rtl").toggleClass("show");
          $(".ltr").toggleClass("show");

          // Save the new direction in localStorage
          localStorage.setItem("pageDirection", newDir);
        });
      });
    },
    preloader: function () {
      window.addEventListener("load", function () {
        document.querySelector("body").classList.add("loaded");
      });
    },
    smoothScroll: function (e) {
      $(document).on("click", '.onepage a[href^="#"]', function (event) {
        event.preventDefault();

        $("html, body").animate(
          {
            scrollTop: $($.attr(this, "href")).offset().top,
          },
          300
        );
      });
    },

    countDown: function () {
      let countDown = document.getElementsByClassName("countdown");
      if (countDown.length) {
        document.addEventListener("DOMContentLoaded", function () {
          // Get the countdown element and the end date from its attribute
          const countdownElement = document.getElementById("countdown");
          const endDate = countdownElement.getAttribute("data-end-date");
          const endTime = new Date(endDate).getTime();

          if (isNaN(endTime)) {
            document.querySelector(".timer-section").innerHTML =
              "Invalid end date!";
            return;
          }

          // Get references to the time unit elements
          const daysElement = document.getElementById("days");
          const hoursElement = document.getElementById("hours");
          const minutesElement = document.getElementById("minutes");
          const secondsElement = document.getElementById("seconds");

          // Update the countdown every second
          const countdownInterval = setInterval(() => {
            const currentTime = new Date().getTime();
            const timeDifference = endTime - currentTime;

            // Calculate days, hours, minutes, and seconds
            const days = Math.floor(timeDifference / (1000 * 60 * 60 * 24));
            const hours = Math.floor(
              (timeDifference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
            );
            const minutes = Math.floor(
              (timeDifference % (1000 * 60 * 60)) / (1000 * 60)
            );
            const seconds = Math.floor((timeDifference % (1000 * 60)) / 1000);

            // Update the timer elements
            if (timeDifference > 0) {
              daysElement.textContent = days;
              hoursElement.textContent = hours;
              minutesElement.textContent = minutes;
              secondsElement.textContent = seconds;
            } else {
              // Clear the interval and display "Time's up" when countdown ends
              clearInterval(countdownInterval);
              document.querySelector(".timer-section").innerHTML = "Time's up!";
            }
          }, 1000);
        });
      }
    },

    metismenu: function () {
      $("#mobile-menu-active").metisMenu();
    },

    galleryPopUp: function (e) {
      // Gallery image hover
      $(".img-wrapper").hover(
        function () {
          $(this).find(".img-overlay").animate({ opacity: 1 }, 600);
        },
        function () {
          $(this).find(".img-overlay").animate({ opacity: 0 }, 600);
        }
      );

      // Lightbox
      var $overlay = $('<div id="overlay"></div>');
      var $image = $("<img>");
      var $prevButton = $(
        '<div id="prevButton"><i class="fa fa-chevron-left"></i></div>'
      );
      var $nextButton = $(
        '<div id="nextButton"><i class="fa fa-chevron-right"></i></div>'
      );
      var $exitButton = $(
        '<div id="exitButton"><i class="fa fa-times"></i></div>'
      );

      // Add overlay
      $overlay
        .append($image)
        .prepend($prevButton)
        .append($nextButton)
        .append($exitButton);
      $("#gallery").append($overlay);

      // Hide overlay on default
      $overlay.hide();

      // When an image is clicked
      $(".img-overlay").click(function (event) {
        // Prevents default behavior
        event.preventDefault();
        // Adds href attribute to variable
        var imageLocation = $(this).prev().attr("href");
        // Add the image src to $image
        $image.attr("src", imageLocation);
        // Fade in the overlay
        $overlay.fadeIn("slow");
      });

      // When the overlay is clicked
      $overlay.click(function () {
        // Fade out the overlay
        $(this).fadeOut("slow");
      });

      // When next button is clicked
      $nextButton.click(function (event) {
        // Hide the current image
        $("#overlay img").hide();
        // Overlay image location
        var $currentImgSrc = $("#overlay img").attr("src");
        // Image with matching location of the overlay image
        var $currentImg = $('#image-gallery img[src="' + $currentImgSrc + '"]');
        // Finds the next image
        var $nextImg = $($currentImg.closest(".image").next().find("img"));
        // All of the images in the gallery
        var $images = $("#image-gallery img");
        // If there is a next image
        if ($nextImg.length > 0) {
          // Fade in the next image
          $("#overlay img").attr("src", $nextImg.attr("src")).fadeIn(800);
        } else {
          // Otherwise fade in the first image
          $("#overlay img").attr("src", $($images[0]).attr("src")).fadeIn(800);
        }
        // Prevents overlay from being hidden
        event.stopPropagation();
      });

      // When previous button is clicked
      $prevButton.click(function (event) {
        // Hide the current image
        $("#overlay img").hide();
        // Overlay image location
        var $currentImgSrc = $("#overlay img").attr("src");
        // Image with matching location of the overlay image
        var $currentImg = $('#image-gallery img[src="' + $currentImgSrc + '"]');
        // Finds the next image
        var $nextImg = $($currentImg.closest(".image").prev().find("img"));
        // Fade in the next image
        $("#overlay img").attr("src", $nextImg.attr("src")).fadeIn(800);
        // Prevents overlay from being hidden
        event.stopPropagation();
      });

      // When the exit button is clicked
      $exitButton.click(function () {
        // Fade out the overlay
        $("#overlay").fadeOut("slow");
      });
    },
    cartNumberIncDec: function () {
      $(document).ready(function () {
        $(function () {
          $(".button").on("click", function () {
            var $button = $(this);
            var $parent = $button.parent();
            var oldValue = $parent.find(".input").val();

            if ($button.text() == "+") {
              var newVal = parseFloat(oldValue) + 1;
            } else {
              // Don't allow decrementing below zero
              if (oldValue > 1) {
                var newVal = parseFloat(oldValue) - 1;
              } else {
                newVal = 1;
              }
            }
            $parent.find("a.add-to-cart").attr("data-quantity", newVal);
            $parent.find(".input").val(newVal);
          });
        });
      });
      /* magnificPopup img view */
    },

    sideMenu: function () {
      // collups menu side right
      $(document).on("click", ".menu-btn", function () {
        $("#side-bar").addClass("show");
        $("#anywhere-home").addClass("bgshow");
      });
      $(document).on("click", ".close-icon-menu", function () {
        $("#side-bar").removeClass("show");
        $("#anywhere-home").removeClass("bgshow");
      });
      $(document).on("click", "#anywhere-home", function () {
        $("#side-bar").removeClass("show");
        $("#anywhere-home").removeClass("bgshow");
      });
      $(document).on("click", ".onepage .mainmenu li a", function () {
        $("#side-bar").removeClass("show");
        $("#anywhere-home").removeClass("bgshow");
      });
    },
    searchOption: function () {
      $(document).on("click", ".search", function () {
        $(".search-input-area").addClass("show");
        $("#anywhere-home").addClass("bgshow");
      });
      $(document).on("click", "#close", function () {
        $(".search-input-area").removeClass("show");
        $("#anywhere-home").removeClass("bgshow");
      });
      $(document).on("click", "#anywhere-home", function () {
        $(".search-input-area").removeClass("show");
        $("#anywhere-home").removeClass("bgshow");
      });
    },
    vedioActivation: function () {
      $(document).ready(function () {
      
          $('.popup-youtube').magnificPopup({
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,
        fixedContentPos: false,
        iframe: {
          markup: '<div class="mfp-iframe-scaler">'+
                    '<div class="mfp-close"></div>'+
                    '<iframe class="mfp-iframe" frameborder="0" allowfullscreen allow="autoplay; encrypted-media"></iframe>'+
                  '</div>',
          patterns: {
            youtube: {
              index: 'youtube.com/',
              id: 'v=',
              src: 'https://www.youtube.com/embed/%id%?autoplay=1&mute=1&rel=0&playsinline=1'
            },
            youtu: {
              index: 'youtu.be/',
              id: '/',
              src: 'https://www.youtube.com/embed/%id%?autoplay=1&mute=1&rel=0&playsinline=1'
            }
          }
        }
      });

      });
    },
    portfoliobounceAnimation: function () {
      if (device_width > 991) {
        gsap.set(".rts_jump_animation-wrapper .rts-jump__item", {
          opacity: 0,
          scale: 1.15,
          rotation: 0,
        });
        gsap.to(".rts_jump_animation-wrapper .rts-jump__item", {
          scrollTrigger: {
            trigger: ".rts_jump_animation-wrapper .rts-jump__item",
            start: "top 95%",
          },
          opacity: 1.3,
          scale: 1,
          duration: 1,
          ease: "bounce",
          stagger: 0.3,
          rotation: 0,
        });
      }
      if (device_width > 991) {
        gsap.set(".rts-jump__item-2", { opacity: 0, scale: 1.15, rotation: 0 });
        gsap.to(".rts-jump__item-2", {
          scrollTrigger: {
            trigger: ".rts-jump__item-2",
            start: "top center+=200",
          },
          opacity: 1,
          scale: 1,
          duration: 1.5,
          ease: "bounce",
          stagger: 0.9,
          rotation: 0,
        });
      }
    },
    commonAnimation: function () {
      gsap.registerPlugin(ScrollTrigger);

      document.querySelectorAll("[data-animation]").forEach((element) => {
        let animationType = element.getAttribute("data-animation");
        let delay = parseFloat(element.getAttribute("data-delay")) || 0; // Default 0s
        let duration = parseFloat(element.getAttribute("data-duration")) || 1; // Default 1s

        if (animationType === "fadeInUp") {
          gsap.fromTo(
            element,
            { opacity: 0, y: 50 },
            {
              opacity: 1,
              y: 0,
              duration: duration,
              ease: "power3.out",
              delay: delay,
              scrollTrigger: {
                trigger: element,
                start: "top 95%",
                once: false,
              },
            }
          );
        } else if (animationType === "fadeInRight") {
          gsap.fromTo(
            element,
            { opacity: 0, x: 100 },
            {
              opacity: 1,
              x: 0,
              duration: duration,
              ease: "power3.out",
              delay: delay,
              scrollTrigger: {
                trigger: element,
                start: "top 95%",
                once: false,
              },
            }
          );
        } else if (animationType === "fadeInLeft") {
          gsap.fromTo(
            element,
            { opacity: 0, x: -100 },
            {
              opacity: 1,
              x: 0,
              duration: duration,
              ease: "power3.out",
              delay: delay,
              scrollTrigger: {
                trigger: element,
                start: "top 95%",
                once: false,
              },
            }
          );
        } else if (animationType === "fadeInDown") {
          gsap.fromTo(
            element,
            { opacity: 0, y: -50 },
            {
              opacity: 1,
              y: 0,
              duration: duration,
              ease: "power3.out",
              delay: delay,
              scrollTrigger: {
                trigger: element,
                start: "top 95%",
                once: false,
              },
            }
          );
        } else if (animationType === "zoomIn") {
          gsap.fromTo(
            element,
            { opacity: 0, scale: 0.5 },
            {
              opacity: 1,
              scale: 1,
              duration: duration,
              ease: "power3.out",
              delay: delay,
              scrollTrigger: {
                trigger: element,
                start: "top 95%",
                once: false,
              },
            }
          );
        } else if (animationType === "zoomOut") {
          gsap.fromTo(
            element,
            { opacity: 0, scale: 1.5 },
            {
              opacity: 1,
              scale: 1,
              duration: duration,
              ease: "power3.out",
              delay: delay,
              scrollTrigger: {
                trigger: element,
                start: "top 95%",
                once: false,
              },
            }
          );
        }
      });
    },
    imageSlideGsap: function () {
      $(document).ready(function () {
        gsap.to(".images", {
          scrollTrigger: {
            // trigger: ".images",
            start: "top bottom",
            end: "bottom top",
            scrub: 1,
            // markers: true
          },
          x: -250,
        });
      });
      $(document).ready(function () {
        gsap.to(".images-r", {
          scrollTrigger: {
            // trigger: ".images",
            start: "top bottom",
            end: "bottom top",
            scrub: 1,
            // markers: true
          },
          x: 250,
        });
      });
      $(document).ready(function () {
        gsap.to(".images-2", {
          scrollTrigger: {
            // trigger: ".images",
            start: "top bottom",
            end: "bottom top",
            scrub: 1,
            // markers: true
          },
          y: -290,
        });
      });
    },
    swiperActivation: function () {
     
    },
    odoMeter: function () {
      $(document).ready(function () {
        function isInViewport(element) {
          const rect = element.getBoundingClientRect();
          return (
            rect.top >= 0 &&
            rect.bottom <=
              (window.innerHeight || document.documentElement.clientHeight)
          );
        }

        function triggerOdometer(element) {
          const $element = $(element);
          if (!$element.hasClass("odometer-triggered")) {
            const countNumber = $element.attr("data-count");
            $element.html(countNumber);
            $element.addClass("odometer-triggered"); // Add a class to prevent re-triggering
          }
        }

        function handleOdometer() {
          $(".odometer").each(function () {
            if (isInViewport(this)) {
              triggerOdometer(this);
            }
          });
        }

        // Check on page load
        handleOdometer();

        // Check on scroll
        $(window).on("scroll", function () {
          handleOdometer();
        });
      });
    },
    splitText: function (e) {
      if ($(".rts-text-anime-style-1").length) {
        let animatedTextElements = document.querySelectorAll(
          ".rts-text-anime-style-1"
        );

        animatedTextElements.forEach((element) => {
          //Reset if needed
          if (element.animation) {
            element.animation.progress(1).kill();
            element.split.revert();
          }

          element.split = new SplitText(element, {
            type: "lines,words,chars",
            linesClass: "split-line",
          });
          gsap.set(element, { perspective: 400 });

          gsap.set(element.split.chars, {
            opacity: 0,
            x: "50",
          });

          element.animation = gsap.to(element.split.chars, {
            scrollTrigger: { trigger: element, start: "top 95%" },
            x: "0",
            y: "0",
            rotateX: "0",
            opacity: 1,
            duration: 1,
            ease: Back.easeOut,
            stagger: 0.02,
          });
        });
      }
    },
    backToTopInit: function () {
      $(document).ready(function () {
        "use strict";

        var progressPath = document.querySelector(".progress-wrap path");
        var pathLength = progressPath.getTotalLength();
        progressPath.style.transition = progressPath.style.WebkitTransition =
          "none";
        progressPath.style.strokeDasharray = pathLength + " " + pathLength;
        progressPath.style.strokeDashoffset = pathLength;
        progressPath.getBoundingClientRect();
        progressPath.style.transition = progressPath.style.WebkitTransition =
          "stroke-dashoffset 10ms linear";
        var updateProgress = function () {
          var scroll = $(window).scrollTop();
          var height = $(document).height() - $(window).height();
          var progress = pathLength - (scroll * pathLength) / height;
          progressPath.style.strokeDashoffset = progress;
        };
        updateProgress();
        $(window).scroll(updateProgress);
        var offset = 50;
        var duration = 550;
        jQuery(window).on("scroll", function () {
          if (jQuery(this).scrollTop() > offset) {
            jQuery(".progress-wrap").addClass("active-progress");
          } else {
            jQuery(".progress-wrap").removeClass("active-progress");
          }
        });

        jQuery(".progress-wrap").on("click", function (event) {
          event.preventDefault();
          jQuery("html, body").animate({ scrollTop: 0 }, duration);
          return false;
        });
      });
    },

    stickyHeader: function (e) {
      $(window).scroll(function () {
        if ($(this).scrollTop() > 150) {
          $(".header--sticky").addClass("sticky");
        } else {
          $(".header--sticky").removeClass("sticky");
        }
      });
    },
    galleryPopUpmag: function () {
      $(".gallery-image").magnificPopup({
        type: "image",
        gallery: {
          enabled: true,
        },
      });
    },

    gsapAnimationImageScale: function (e) {
      $(document).ready(function () {
        gsap.registerPlugin(ScrollTrigger);

        let revealContainers = document.querySelectorAll(".rts-reveal-one");

        revealContainers.forEach((container) => {
          let image = container.querySelector(".rts-reveal-image-one");
          let rts = gsap.timeline({
            scrollTrigger: {
              trigger: container,
              toggleActions: "play none none none", // Play once when it enters the viewport
              start: "top 100%",
              end: "top 0%",
              once: true, // Ensures it only plays once
            },
          });

          rts.set(container, {
            autoAlpha: 1,
          });
          rts.from(container, 1.5, {
            xPercent: 100,
            ease: Power2.out,
          });
          rts.from(image, 1.5, {
            xPercent: -100,
            scale: 1.3,
            delay: -1.5,
            ease: Power2.out,
          });
        });
      });

      $(document).ready(function () {
        let growActive = document.getElementsByClassName("grow");
        if (growActive.length) {
          const growTl = gsap.timeline({
            scrollTrigger: {
              trigger: ".grow",
              scrub: 1,
              start: "top 90%",
              end: "+=1000",
              ease: "power1.out",
              y: -60,
            },
          });
          growTl.to(".grow", {
            duration: 1,
            y: 60,
          });
        }
      });
    },

    radialProgress: function () {
      function radial_animate() {
        $("svg.radial-progress").each(function (index, value) {
          $(this).find($("circle.bar--animated")).removeAttr("style");
          // Get element in Veiw port
          var elementTop = $(this).offset().top;
          var elementBottom = elementTop + $(this).outerHeight();
          var viewportTop = $(window).scrollTop();
          var viewportBottom = viewportTop + $(window).height();

          if (elementBottom > viewportTop && elementTop < viewportBottom) {
            var percent = $(value).data("countervalue");
            var radius = $(this).find($("circle.bar--animated")).attr("r");
            var circumference = 2 * Math.PI * radius;
            var strokeDashOffset =
              circumference - (percent * circumference) / 100;
            $(this)
              .find($("circle.bar--animated"))
              .animate({ "stroke-dashoffset": strokeDashOffset }, 2800);
          }
        });
      }
      // To check If it is in Viewport
      var $window = $(window);
      function check_if_in_view() {
        $(".countervalue").each(function () {
          if ($(this).hasClass("start")) {
            var elementTop = $(this).offset().top;
            var elementBottom = elementTop + $(this).outerHeight();

            var viewportTop = $(window).scrollTop();
            var viewportBottom = viewportTop + $(window).height();

            if (elementBottom > viewportTop && elementTop < viewportBottom) {
              $(this).removeClass("start");
              $(".countervalue").text();
              var myNumbers = $(this).text();
              if (myNumbers == Math.floor(myNumbers)) {
                $(this).animate(
                  {
                    Counter: $(this).text(),
                  },
                  {
                    duration: 2800,
                    easing: "swing",
                    step: function (now) {
                      $(this).text(Math.ceil(now) + "%");
                    },
                  }
                );
              } else {
                $(this).animate(
                  {
                    Counter: $(this).text(),
                  },
                  {
                    duration: 2800,
                    easing: "swing",
                    step: function (now) {
                      $(this).text(now.toFixed(2) + "$");
                    },
                  }
                );
              }

              radial_animate();
            }
          }
        });
      }

      $window.on("scroll", check_if_in_view);
      $window.on("load", check_if_in_view);
    },
  };

  document.querySelectorAll('a[href^="#"]').forEach((link) => {
    link.addEventListener("click", function (e) {
      e.preventDefault();
      const targetId = this.getAttribute("href").substring(1);
      const el = document.getElementById(targetId);
      const yOffset = -100; // Scroll offset
      const y = el.getBoundingClientRect().top + window.pageYOffset + yOffset;
      window.scrollTo({ top: y, behavior: "smooth" });
    });
  });


  // tabbed content
    // http://www.entheosweb.com/tutorials/css/tabs.asp
   // Hide all content except first
// Hide all content except first
$(".tab_content").hide();
$(".tab_content:first").show();

// Initialize icons (first one open)
$(".tab_drawer_heading").each(function(i) {
  if (i === 0) {
    $(this).append('<span class="icon">−</span>'); // minus for first
  } else {
    $(this).append('<span class="icon">+</span>'); // plus for others
  }
});

/* ===== Desktop Tab Click ===== */
$("ul.tabs li").click(function() {
  $(".tab_content").hide();
  var activeTab = $(this).attr("rel");
  $("#" + activeTab).fadeIn();

  $("ul.tabs li").removeClass("active");
  $(this).addClass("active");

  $(".tab_drawer_heading").removeClass("d_active")
    .find(".icon").text("+");
  $(".tab_drawer_heading[rel^='" + activeTab + "']")
    .addClass("d_active").find(".icon").text("−");
});

/* ===== Mobile Drawer Click (with close on second click) ===== */
$(".tab_drawer_heading").click(function() {
  var d_activeTab = $(this).attr("rel");

  // If already active, close it
  if ($(this).hasClass("d_active")) {
    $(this).removeClass("d_active").find(".icon").text("+");
    $("#" + d_activeTab).slideUp();
    $("ul.tabs li[rel^='" + d_activeTab + "']").removeClass("active");
    return; // stop here
  }

  // Otherwise open it
  $(".tab_content").slideUp();
  $("#" + d_activeTab).slideDown();

  $(".tab_drawer_heading").removeClass("d_active")
    .find(".icon").text("+");
  $(this).addClass("d_active").find(".icon").text("−");

  $("ul.tabs li").removeClass("active");
  $("ul.tabs li[rel^='" + d_activeTab + "']").addClass("active");
});

/* ===== Add extra class to last tab ===== */
$('ul.tabs li').last().addClass("tab_last");





   jQuery('.producy-multipal').slick({
            slidesToShow: 1,
            margin: 0,
            autoplay: true,
            arrows:true,
            dots: false,
        });


         jQuery('.slide-banner').slick({
            slidesToShow: 1,
            autoplaySpeed: 1000,
            margin: 10,
            autoplay: true,
            arrows: true,
            dots: false,
            nextArrow: '<button type="button" class="btn  button-left"><i class="fa-solid fa-arrow-right"></i></button>',
            prevArrow: '<button type="button" class="btn   button-right"><i class="fa-solid fa-arrow-left"></i></button>',


            responsive: [{
                breakpoint: 768, // below 768px
                settings: {
                    dots: true, // show dots
                    arrows: false // hide arrows if desired
                }
            }]
        });


          jQuery('.responsive-slider').slick({
            slidesToShow: 12,
            margin: 10,
            slidesToScroll: 1,
            cssEase: 'linear',
            autoplaySpeed: 0,
            speed: 2000,
            autoplay: true,
            arrows: false,
            dots: false,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 3
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 2
                    }
                }
            ]
        });


         jQuery('.ind-slider').slick({
            slidesToShow: 3,
            margin: 10,
            cssEase: 'linear',
            autoplaySpeed: 1000,
            slidesToScroll: 1,
            autoplayTimeout: 1,
            autoplay: false,
            smartSpeed: 1000,

            arrows: false,
            dots: true,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2
                    }
                },
                {
                    breakpoint: 576,
                    settings: {
                        slidesToShow: 1
                    }
                }
            ]
        });


         function openTab(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }

        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }

        document.getElementById(cityName).style.display = "block";
        if (evt && evt.currentTarget) {
            evt.currentTarget.className += " active";
        }
    }

    // Attach hover listener to each tab
    document.querySelectorAll(".tablinks").forEach((tablink, index) => {
        tablink.addEventListener("mouseenter", (e) => {
            openTab(e, tablink.getAttribute('data-city'));
        });

        // ✅ Activate the first tab by default
        if (index === 0) {
            tablink.className += " active";
            document.getElementById(tablink.getAttribute('data-city')).style.display = "block";
        }
    });


  rtsJs.m();
})(jQuery, window);
