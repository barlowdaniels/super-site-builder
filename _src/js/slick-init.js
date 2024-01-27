jQuery(document).ready(function($) {

  // ------------------
  // Block: Carousel - Images
  // ------------------
  $('.carousel.images').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    infinite: true,
    autoplay: true,
    speed: 500,
    fade: false,
    cssEase: 'linear',
    pauseOnFocus: false,
    pauseOnHover: false,
    autoplaySpeed: 5000,
    dots: true,
    arrows: false,
    adaptiveHeight: false,
  });

  // ------------------
  // Block: Carousel - Testimonials
  // ------------------
  $('.carousel.testimonials').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    infinite: true,
    autoplay: true,
    speed: 200,
    fade: true,
    cssEase: 'linear',
    pauseOnFocus: false,
    pauseOnHover: false,
    autoplaySpeed: 5000,
    dots: true,
    arrows: false,
    adaptiveHeight: false,
  });
  // ------------------
  // Block: Hero - Carousel
  // ------------------
  $('.hero_block.carousel').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    infinite: true,
    autoplay: false,
    speed: 200,
    fade: false,
    cssEase: 'linear',
    pauseOnFocus: false,
    pauseOnHover: false,
    autoplaySpeed: 5000,
    dots: false,
    arrows: true,
    adaptiveHeight: false,
  });

  // ------------------
  // Block: Split content
  // ------------------
  $('.split-content-carousel').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    infinite: true,
    autoplay: false,
    pauseOnFocus: false,
    pauseOnHover: false,
    autoplaySpeed: 4000,
    dots: false,
    arrows: true,
    adaptiveHeight: false,
  });
    
});