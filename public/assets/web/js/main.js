
$(document).ready(function () {

  // back-to
  var btn = $('#button');
  
  $(window).scroll(function () {
    if ($(window).scrollTop() > 300) {
      btn.addClass('show');
    } else {
      btn.removeClass('show');
    }
  });
  
  btn.on('click', function (e) {
    e.preventDefault();
    $('html, body').animate({ scrollTop: 0 }, '300');
  });
  
  
  // header-search-js-here
  const searchBox = document.querySelector(".searchBox");
  const searchBtn = document.querySelector(".search");
  const closeBtn = document.querySelector(".close");
  
  searchBtn.addEventListener("click", () => {
    searchBox.classList.add("active");
  });
  closeBtn.addEventListener("click", () => {
    searchBox.classList.remove("active");
  });

  
  // hero-slider-js-here
  
  $(document).ready(function () {
    $('.hero-slider').slick({
      dots:false,
      fade:true,
      arrows:true,
      infinite: true,
      speed: 1000,
      lazyLoad: 'ondemand',
      autoplay:true,
      slidesToShow: 1,
      slidesToScroll: 1,
      responsive: [
        {
          breakpoint: 1023,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            infinite: true,
            dots: true,
          }
        },
        {
          breakpoint: 992,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
  
      ]
  
    }).slickAnimation();
  
  
    // slider
    $(document).ready(function () {
      $('.testimonial').slick({
        dots: true,
        arrows: false,
        infinite: true,
        speed: 500,
        lazyLoad: 'ondemand',
        autoplay: true,
        fade: true,
        cssEase: 'linear',
        prevArrow: '<span class="priv_arrow"><i class="fas fa-chevron-left"></i></span>',
        nextArrow: '<span class="next_arrow"><i class="fas fa-chevron-right"></i></span>',
        slidesToShow: 1,
        slidesToScroll: 1,
        responsive: [
          {
            breakpoint: 1023,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              infinite: false,
            }
          },
          {
            breakpoint: 992,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          },
          {
            breakpoint: 768,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          },
          {
            breakpoint: 600,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
  
        ]
  
      });
    });
  });

   //  isotop-js-here

//  var $grid = $('.grid').isotope({
//   itemSelector: '.grid-item',
//   percentPosition: true,
//   masonry: {
//       columnWidth:2,
//   }
// })

// filter items on button click
$('.project-navbar').on('click', 'button', function() {
  var filterValue = $(this).attr('data-filter');
  $grid.isotope({ filter: filterValue });
});

//for menu active class
$('.project-navbar button').on('click', function(event) {
  $(this).siblings('.active').removeClass('active');
  $(this).addClass('active');
  event.preventDefault();
});
  

  
});

 // sticky-menu
 $(window).scroll(function () {
  if ($(window).scrollTop() > 20) {
    $(".main-menu").addClass('sticky');
  } else {
    $(".main-menu").removeClass('sticky');
  }
});