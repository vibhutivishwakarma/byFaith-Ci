

$(document).ready(function(){
    
    $('.testimonial').slick({
        centerMode: true,
        centerPadding: '60px',
        slidesToShow: 2,
        slidesToScroll: 1,
        dots: false,
        arrows: true,
        prevArrow: '<i class="fa fa-long-arrow-left left-arrow" aria-hidden="true"></i>',
        nextArrow: '<i class="fa fa-long-arrow-right right-arrow" aria-hidden="true"></i>',
        // slide: 'div',  
        // nextArrow: '<button class="slick-next">Next >',
        //     prevArrow: '<button class="slick-prev">previous >',  
        responsive: [
          {
            breakpoint: 768,
            settings: {
              arrows: true,
              centerMode: true,
              centerPadding: '40px',
              slidesToShow: 3
            }
          },
          {
            breakpoint: 480,
            settings: {
              arrows: true,
              centerMode: true,
              centerPadding: '40px',
              slidesToShow: 1
            }
          }
        ]
      });

});


