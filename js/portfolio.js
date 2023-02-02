$("#menu").click(()=>{
    console.log("sdsd");
    if($(".menu").hasClass("active")){
        $(".ankith").removeClass("active")
    $(".sidebar").removeClass("active")
     $(".menu").removeClass("active")
    }else{
        $(".ankith").addClass("active")
        $(".sidebar").addClass("active")
         $(".menu").addClass("active")
    } 
});

$('.who-am-i #slider').slick({
    centerMode: true,
    centerPadding: '0',
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 1000,
    slidesToShow:3,
    responsive: [
        {
            breakpoint: 1280,
            settings: {
              arrows: false,
              centerMode: true,
              centerPadding: '0',
              slidesToShow: 2
            }
          },
      {
        breakpoint: 900,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '0',
          slidesToShow: 1,
        }
      },
      {
        breakpoint: 200,
        settings: {
          arrows: true,
          centerMode: true,
          centerPadding: '0',
          slidesToShow: 1,
          autoplaySpeed: 700
        }
      },
      {
        breakpoint: 0,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '0',
          slidesToShow: 1,
          autoplaySpeed: 700
        }
      }
    ]
  });
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

