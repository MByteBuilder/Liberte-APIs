$('#hero').owlCarousel({
  loop:true,
  margin:0,
  nav:false,
  dots:true,
  autoplay:true,
  autoplayTimeout:6000,
  smartSpeed:5000,
  transitionStyle : "fade",
  animateIn: 'fadeIn',
  animateOut: 'fadeOut',
  responsive:{
      0:{
          items:1
      }
  }
});

$('#hotelBanner').owlCarousel({
  loop:true,
  margin:10,
  nav:false,
  dots:false,
  autoplay:true,
  autoplayTimeout:5000,
  smartSpeed:1000,
  responsive:{
      0:{
          items:1
      },
      600:{
          items:1
      },
      1000:{
          items:1
      }
  }
});

$('#hotelBanner2').owlCarousel({
  loop:true,
  margin:10,
  nav:false,
  dots:false,
  autoplay:true,
  autoplayTimeout:5000,
  smartSpeed:500,
  responsive:{
      0:{
          items:1
      },
      600:{
          items:1
      },
      1000:{
          items:1
      }
  }
});



$("#back").click(function(){
  $(".catagoryMenu").hide();
});

$(".hero .catagoryMenuBtn").click(function(){
  $(".catagoryMenu").show();
});

$('#brands').owlCarousel({
  loop:true,
  margin:20,
  nav:true,
  navText: ["<i class='ti-arrow-circle-left'></i>","<i class='ti-arrow-circle-right'></i>"],
  dots:false,
  autoplay:true,
  autoplayTimeout:4000,
  smartSpeed:2000,
  autoplayHoverPause: true,
  responsive:{
      0:{
          items:2
      },
      600:{
  items:3
},
1000:{
  items:5
}
  }
});

$('#brandsMore').owlCarousel({
  loop:true,
  margin:30,
  nav:true,
  navText: ["<i class='ti-arrow-circle-left'></i>","<i class='ti-arrow-circle-right'></i>"],
  dots:false,
  autoplay:true,
  autoplayTimeout:3000,
  smartSpeed:1500,
  autoplayHoverPause: true,
  responsive:{
      0:{
          items:2
      },
      600:{
  items:3
},
1000:{
  items:5
}
  }
});

$('#discount').owlCarousel({
  loop:true,
  margin:30,
  nav:true,
  navText: ["<i class='ti-arrow-circle-left'></i>","<i class='ti-arrow-circle-right'></i>"],
  dots:false,
  autoplay:true,
  autoplayTimeout:3000,
  smartSpeed:1500,
  autoplayHoverPause: true,
  responsive:{
      0:{
          items:1
      },
      600:{
  items:3
},
1000:{
  items:3
},
1440:{
  items:4
}
  }
});

$('#fun').owlCarousel({
  loop:true,
  margin:0,
  nav:true,
  navText: ["<i class='ti-arrow-circle-left'></i>","<i class='ti-arrow-circle-right'></i>"],
  dots:false,
  autoplay:true,
  autoplayTimeout:3000,
  smartSpeed:1500,
  autoplayHoverPause: true,
  responsive:{
      0:{
          items:2
      },
      600:{
  items:3
},
1000:{
  items:4
}
  }
});

$('#hotel').owlCarousel({
  loop:true,
  margin:30,
  nav:true,
  navText: ["<i class='ti-arrow-circle-left'></i>","<i class='ti-arrow-circle-right'></i>"],
  dots:false,
  autoplay:true,
  autoplayTimeout:3000,
  smartSpeed:1500,
  autoplayHoverPause: true,
  responsive:{
      0:{
          items:1
      },
      600:{
  items:3
},
1000:{
  items:3
}
  }
});

$('#offer').owlCarousel({
  loop:true,
  margin:30,
  nav:true,
  navText: ["<i class='ti-arrow-circle-left'></i>","<i class='ti-arrow-circle-right'></i>"],
  dots:false,
  autoplay:true,
  autoplayTimeout:3000,
  smartSpeed:1500,
  autoplayHoverPause: true,
  responsive:{
      0:{
          items:1
      },
      600:{
  items:3
},
1000:{
  items:3
}
  }
});

$('#resturent').owlCarousel({
  loop:true,
  margin:30,
  nav:true,
  navText: ["<i class='ti-arrow-circle-left'></i>","<i class='ti-arrow-circle-right'></i>"],
  dots:false,
  autoplay:true,
  autoplayTimeout:3000,
  smartSpeed:1500,
  responsive:{
      0:{
          items:1
      },
      600:{
  items:3
},
1000:{
  items:3
}
  }
});


$('#testimonial1').owlCarousel({
  loop:true,
  margin:30,
  nav:true,
  navText: ["<i class='ti-arrow-circle-left'></i>","<i class='ti-arrow-circle-right'></i>"],
  dots:false,
  autoplay:true,
  autoplayTimeout:3000,
  smartSpeed:1500,
  responsive:{
      0:{
          items:1
      }
  }
});

$('#testimonial2').owlCarousel({
  loop:true,
  margin:30,
  nav:true,
  navText: ["<i class='ti-arrow-circle-left'></i>","<i class='ti-arrow-circle-right'></i>"],
  dots:false,
  autoplay:true,
  autoplayTimeout:3000,
  smartSpeed:1500,
  responsive:{
      0:{
          items:1
      }
  }
});

$('#events').owlCarousel({
  loop:true,
  margin:30,
  nav:true,
  navText: ["<i class='ti-arrow-circle-left'></i>","<i class='ti-arrow-circle-right'></i>"],
  dots:false,
  autoplay:false,
  autoplayTimeout:5000,
  smartSpeed:2500,
  autoplayHoverPause: true,
  responsive:{
      0:{
          items:1
      },
      600:{
          items:2
      },
      1000:{
          items:4
      },
  }
});

$('#news').owlCarousel({
  loop:true,
  margin:30,
  nav:false,
  dots:false,
  autoplay:true,
  autoplayTimeout:5000,
  smartSpeed:2500,
  autoplayHoverPause: true,
  responsive:{
      0:{
          items:1
      },
      600:{
          items:2
      },
      1000:{
          items:4
      },
  }
});

$('#news-two').owlCarousel({
  loop:true,
  margin:30,
  nav:false,
  dots:false,
  autoplay:true,
  autoplayTimeout:6000,
  smartSpeed:2500,
  autoplayHoverPause: true,
  responsive:{
      0:{
          items:1
      },
      600:{
          items:2
      },
      1000:{
          items:4
      },
  }
});



$("header .right i").click(function(){
$(".sideNav").toggle(500);
});

$(".menu").click(function(){
$(".mobileMenu").show();
});

$(".close").click(function(){
$(".mobileMenu").hide();
});

$('#brandIcons').owlCarousel({
  loop:true,
  margin:10,
  dots:false,
  nav:false,
  autoplay:true,
  autoplayTimeout:5000,
  smartSpeed:2500,
  autoplayHoverPause: true,
  responsive:{
      0:{
          items:2
      },
      600:{
          items:3
      },
      1000:{
          items:7
      }
  }
})

new WOW().init();

$("#triggerSecond").hide();
$("#triggerThird").hide();
$("#triggerFourth").hide();
$("#triggerFifth").hide();

$(".catagories .inner .preview ul .active").click(function(){
  $("#triggerFirst").show();
  $("#triggerSecond").hide();
  $("#triggerThird").hide();
  $("#triggerFifth").hide();
  $("#triggerFifth").hide();
  $(".catagories .inner .preview ul .active").css('color','red');
  $(".catagories .inner .preview ul .secnd").css('color','#212529');
  $(".catagories .inner .preview ul .third").css('color','#212529');
  $(".catagories .inner .preview ul .fifth").css('color','#212529');
});

$(".catagories .inner .preview ul .secnd").click(function(){
  $("#triggerFirst").hide();
  $("#triggerSecond").show();
  $("#triggerThird").hide();
  $("#triggerFourth").hide();
  $("#triggerFifth").hide();
  $(".catagories .inner .preview ul .secnd").css('color','red');
  $(".catagories .inner .preview ul .active").css('color','#212529');
  $(".catagories .inner .preview ul .third").css('color','#212529');
  $(".catagories .inner .preview ul .fifth").css('color','#212529');
});

$(".catagories .inner .preview ul .third").click(function(){
  $("#triggerFirst").hide();
  $("#triggerSecond").hide();
  $("#triggerThird").show();
  $("#triggerFourth").hide();
  $("#triggerFifth").hide();
  $(".catagories .inner .preview ul .third").css('color','red');
  $(".catagories .inner .preview ul .active").css('color','#212529');
  $(".catagories .inner .preview ul .secnd").css('color','#212529');
  $(".catagories .inner .preview ul .fifth").css('color','#212529');
  $(".catagories .inner .preview ul .fourth").css('color','#212529');
});

$(".catagories .inner .preview ul .fourth").click(function(){
  $("#triggerFirst").hide();
  $("#triggerSecond").hide();
  $("#triggerThird").hide();
  $("#triggerFourth").show();
  $("#triggerFifth").hide();
  $(".catagories .inner .preview ul .fourth").css('color','red');
  $(".catagories .inner .preview ul .third").css('color','#212529');
  $(".catagories .inner .preview ul .active").css('color','#212529');
  $(".catagories .inner .preview ul .secnd").css('color','#212529');
  $(".catagories .inner .preview ul .fifth").css('color','#212529');
});

$(".catagories .inner .preview ul .fifth").click(function(){
  $("#triggerFirst").hide();
  $("#triggerSecond").hide();
  $("#triggerThird").hide();
  $("#triggerFourth").hide();
  $("#triggerFifth").show();
  $(".catagories .inner .preview ul .fifth").css('color','red');
  $(".catagories .inner .preview ul .fourth").css('color','#212529');
  $(".catagories .inner .preview ul .third").css('color','#212529');
  $(".catagories .inner .preview ul .active").css('color','#212529');
  $(".catagories .inner .preview ul .secnd").css('color','#212529');
});


$('#triggerFirst').owlCarousel({
  loop:true,
  margin:30,
  nav:true,
  navText: ["<i class='ti-arrow-circle-left'></i>","<i class='ti-arrow-circle-right'></i>"],
  responsive:{
      0:{
          items:1
      },
      600:{
          items:4
      },
      1000:{
          items:4
      }
  }
});

$('#triggerSecond').owlCarousel({
  loop:true,
  margin:30,
  nav:true,
  navText: ["<i class='ti-arrow-circle-left'></i>","<i class='ti-arrow-circle-right'></i>"],
  responsive:{
      0:{
          items:1
      },
      600:{
          items:4
      },
      1000:{
          items:4
      }
  }
});

$('#triggerThird').owlCarousel({
  loop:true,
  margin:30,
  nav:true,
  navText: ["<i class='ti-arrow-circle-left'></i>","<i class='ti-arrow-circle-right'></i>"],
  responsive:{
      0:{
          items:1
      },
      600:{
          items:4
      },
      1000:{
          items:4
      }
  }
});

$('#triggerFourth').owlCarousel({
  loop:true,
  margin:30,
  nav:true,
  navText: ["<i class='ti-arrow-circle-left'></i>","<i class='ti-arrow-circle-right'></i>"],
  responsive:{
      0:{
          items:1
      },
      600:{
          items:4
      },
      1000:{
          items:4
      }
  }
});

$('#triggerFifth').owlCarousel({
  loop:true,
  margin:30,
  nav:true,
  navText: ["<i class='ti-arrow-circle-left'></i>","<i class='ti-arrow-circle-right'></i>"],
  responsive:{
      0:{
          items:1
      },
      600:{
          items:4
      },
      1000:{
          items:4
      }
  }
});


$('#coupons').owlCarousel({
  loop:true,
  margin:20,
  nav:false,
  autoplay:true,
  autoplayTimeout:3000,
  smartSpeed:1500,
  responsive:{
      0:{
          items:1
      },
      600:{
          items:3
      },
      1000:{
          items:5
      }
  }
});


$(".allCaragories").hide();
$(".catagories .btn").click(function(){
  $(".allCaragories").fadeIn(500);
});

$(".allCaragories .btn-close").click(function(){
  $(".allCaragories").fadeOut(500);
});


$('#drops').owlCarousel({
  loop:true,
  margin:20,
  nav:true,
  dots:true,
  navText: ["<i class='bi bi-chevron-left'></i>","<i class='bi bi-chevron-right'></i>"],
  responsive:{
      0:{
          items:1
      },
      600:{
          items:3
      },
      1000:{
          items:3
      }
  }
})

$('#resorce').owlCarousel({
  loop:true,
  margin:20,
  nav:true,
  dots:true,
  navText: ["<i class='bi bi-chevron-left'></i>","<i class='bi bi-chevron-right'></i>"],
  responsive:{
      0:{
          items:1
      },
      600:{
          items:3
      },
      1000:{
          items:3
      }
  }
})