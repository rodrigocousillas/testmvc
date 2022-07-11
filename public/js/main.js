$(document).ready(function() {

  $(".variable").slick({
    arrows: true,  
    dots: false,
    autoplay: false, /* this is the new line */
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplaySpeed: 5000
  });


  $('.sliderCenter').slick({
    centerMode: true,
    centerPadding: '450px',
    slidesToShow: 1,
    arrows: true,
    responsive: [
      {
        breakpoint: 1441,
        settings: {
            centerPadding: '350px',
        }
    },

    {
      breakpoint: 1369,
      settings: {
          centerPadding: '350px',
      }
  },
        {
            breakpoint: 1025,
            settings: {
                centerPadding: '150px',
            }
        },
        {
            breakpoint: 780,
            settings: {
                centerPadding: '50px',
            }
        },

        {
            breakpoint: 500,
            settings: {
                centerPadding: '0px',
            }
        },

    ]
});

  

}); 


$(".scroll").on('click', function(event) {
  $('.scroll').removeClass('active');
  $(this).addClass('active');

  if (this.hash !== "") {
    event.preventDefault();
    var hash = this.hash;
    $('html, body').animate({
      scrollTop: $(hash).offset().top - 300
    }, 1000, function(){
      window.location.hash = hash;
    });
  } 
});