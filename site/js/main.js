$(function () {
  var s = skrollr.init();

  $(".input_cel").mask("(99) 9 9999-9999");

  var height = $(window).height();
  //$(".galeria_inicial .slideshow .owl-carousel .item").css('height', 540);
  $(".home.desck").css("height", height);
  $(".home.desck.acompanhamento").css("height", height + 200);
  $(".home .item").css("height", height);
  $(".menu").css("height", height);
  $(".video video").css("height", height - 80);
  $(".video_projetistas div iframe").css("height", height - 80);
  $(".area_comuns .slideshow .owl-carousel .item").css("height", 540);
  $(".plantas .slideshow .owl-carousel .item").css("height", 540);
  $(".bairro .slideshow .owl-carousel .item").css("height", 540);
  $(".acompanhamento_banner .slideshow .owl-carousel .item").css("height", 540);
  $("#thumbs .item").css("height", 230);

 // let infinite = 1
  
  
  $(".frase1").addClass('active');
  $(".frase1-mobile").addClass('active');

    setInterval(function () {
      
      if ($(".frase1").hasClass("active")) {

        $(".frase1").fadeOut("slow", function () {
          $(".frase1").removeClass("active");
          $(".frase2").addClass('active');
          $(".frase2").fadeIn("slow");
        });

        $(".frase1-mobile").fadeOut("slow", function () {
          $(".frase1-mobile").removeClass("active");
          $(".frase2-mobile").addClass('active');
          $(".frase2-mobile").fadeIn("slow");
        });

        

      }else{

          $(".frase2").fadeOut("slow", function () {
            $(".frase2").removeClass("active");
            $(".frase1").addClass('active');
            $(".frase1").fadeIn("slow");
          });

          $(".frase2-mobile").fadeOut("slow", function () {
            $(".frase2-mobile").removeClass("active");
            $(".frase1-mobile").addClass('active');
            $(".frase1-mobile").fadeIn("slow");
          });
  
      }
    },5000)

    $(".fade").fadeOut();
    $(".containerpopflex").fadeOut();

    $(".containerpopflex").delay(5000).fadeIn("slow");
    $(".fade").delay(5000).fadeIn("slow");

    $(".close").on("click", () => {
      $(".containerpopflex").fadeOut("slow");
      $(".fade").fadeOut("slow");
    })

    $(".fade").on("click", () => {
      $(".containerpopflex").fadeOut("slow");
      $(".fade").fadeOut("slow");
    })

    



  $(window).resize(function () {
    var height = $(window).height();
    $(".home .item").css("height", height);
    $(".menu").css("height", height);
  });
  $(window).resize(function () {
    var height = $(window).height();

    $(".menu").css("height", height);
  });

  $("#btn_menu_abre").on("click", function () {
    $("#menu").animate({ marginLeft: 0 }, 1000);
  });

  $("#btn_menu_abre_top").on("click", function () {
    $("#menu").animate({ marginLeft: 0 }, 1000);
  });

  $("#btn_fecha").on("click", function () {
    $("#menu").animate({ marginLeft: "-1000px" }, 1000);
  });

  $("#btn_menu_abre_mobile").on("click", function () {
    $("#menu").animate({ marginLeft: 0 }, 1000);
  });

  $("#btn_fecha_mobile").on("click", function () {
    $("#menu").animate({ marginLeft: "-1000px" }, 1000);
  });



  $(window).scroll(show_scrol);
  $(".hanburguer").css("color", "#fff");
  $(".hanburguer").css("border-top", "2px solid #fff");



  setTimeout(function () {
    $(".janela").fadeOut();
  }, 1000);



  var acomps = $("[class=periodos]");

  var arr = [];

  for (let index = 0; index < acomps.length; index++) {
    if (arr.includes(acomps[index].innerText.trim())) {
      console.log("tem");
    } else {
      arr.push(acomps[index].innerText.trim());
    }
  }

  
  let arrcorrect = [];
                let perio = [];

                //console.log('arr', arr)


                    for (let index2 = 0; index2 < arr.length; index2++) {
                        const element2 = arr[index2];

                        let nele = element2.trim()

                        let nar = nele.split(" DE ")
                        

                        if (!perio.includes(nar[0] + nar[1])) {

                          perio.push(nar[0] + nar[1]);

                          let obj = {
                              ano: nar[1],
                              mes: nar[0]
                          }

                          arrcorrect.push(obj);
                      }
                    }

                    

                let arrcorrectorder = [];
               
                const meses = [
                "Janeiro",
                "Fevereiro",
                "Março",
                "Abril",
                "Maio",
                "Junho",
                "Julho",
                "Agosto",
                "Setembro",
                "Outubro",
                "Novembro",
                "Dezembro"
                ];


                for (let index = 0; index < meses.length; index++) {
                    const element = meses[index].toUpperCase();

                    let found = arrcorrect.filter((ele) => ele.mes === element);

                    if(found.length > 0){
                        for (let index2 = 0; index2 < found.length; index2++) {
                            const element2 = found[index2];
                            arrcorrectorder.push(element2)
                        }
                        
                    }

                }

                
               function compararNumeros(a, b) {                   
                return a.ano - b.ano;
               }

               arrcorrectorder.sort(compararNumeros);

               arrcorrectorder.reverse()

               let noperioarr = []

               for (let index2 = 0; index2 < arrcorrectorder.length; index2++) {
                  const element2 = arrcorrectorder[index2];

                  let nstring = element2.mes +' DE '+ element2.ano

                  noperioarr.push(nstring)
              }

  $(".acompanhamento-menu li").remove();

  $(".acompanhamento-menu-mobile li").remove();

  $(".acompanhamento-selected-mobile").html(noperioarr[1]);

  for (let index = 0; index < noperioarr.length; index++) {
    $(".acompanhamento-menu").append(
      "<li class='periodos' data-acompanhamento='" +
      noperioarr[index] +
        "'>" +
        noperioarr[index] +
        "</li>"
    );
    
  }


  for (let index = 1; index < noperioarr.length; index++) {

    $(".acompanhamento-menu-mobile").append(
      "<li class='periodos' data-acompanhamento='" +
      noperioarr[index] +
        "'>" +
        noperioarr[index] +
       "</li>"
    );
    
  }
  
  $("#thumbsdesk1").owlCarousel({
    items:5,
    loop:false,
    margin:10,
    autoplay:false,
    nav: true,
    dots: false,
    navText: [
      '<img src="site/img/seta-nav-azul-esquerda.svg" />',
      '<img src="site/img/seta-nav-azul-direita.svg" />',
    ],
  });

  //$("#thumbsdesk1 .owl-nav").remove();


  function sincThumbs(){
    
      var sync1 = $("#bigdesk1");
      var sync2 = $("#thumbsdesk1");

    //var sync1 = $(".slider");
    //var sync2 = $(".navigation-thumbs");

    var thumbnailItemClass = '.owl-item';

    var slides = sync1.owlCarousel({
      video:true,
      startPosition: 12,
      items:1,
      loop:true,
      margin:10,
      autoplay:true,
      autoplayTimeout:6000,
      autoplayHoverPause:false,
      nav: true,
      dots: true,
      navText: [
        '<img src="site/img/seta-nav-branca-esquerda.svg" />',
        '<img src="site/img/seta-nav-branca-direita.svg" />',
      ],
    }).on('changed.owl.carousel', syncPosition);

    function syncPosition(el) {
      $owl_slider = $(this).data('owl.carousel');
      var loop = $owl_slider.options.loop;

      if(loop){
        var count = el.item.count-1;
        var current = Math.round(el.item.index - (el.item.count/2) - .5);
        if(current < 0) {
            current = count;
        }
        if(current > count) {
            current = 0;
        }
      }else{
        var current = el.item.index;
      }

      var owl_thumbnail = sync2.data('owl.carousel');
      var itemClass = "." + owl_thumbnail.options.itemClass;


      var thumbnailCurrentItem = sync2
      .find(itemClass)
      .removeClass("synced")
      .eq(current);

      thumbnailCurrentItem.addClass('synced');

      if (!thumbnailCurrentItem.hasClass('active')) {
        var duration = 300;
        sync2.trigger('to.owl.carousel',[current, duration, true]);
      }   
    }
    console.log('sincThumbs');
    var thumbs = sync2.owlCarousel({
      startPosition: 12,
      items:5,
      loop:false,
      margin:10,
      autoplay:false,
      nav: true,
      dots: false,
      onInitialized: function (e) {
        var thumbnailCurrentItem =  $(e.target).find(thumbnailItemClass).eq(this._current);
        thumbnailCurrentItem.addClass('synced');
      },
    })
    .on('click', thumbnailItemClass, function(e) {
        e.preventDefault();
        var duration = 300;
        var itemIndex =  $(e.target).parents(thumbnailItemClass).index();
        sync1.trigger('to.owl.carousel',[itemIndex, duration, true]);
    }).on("changed.owl.carousel", function (el) {
      var number = el.item.index;
      $owl_slider = sync1.data('owl.carousel');
      $owl_slider.to(number, 100, true);
    });    
  }


  $("#thumbs5").owlCarousel({
    items:3,
    loop:false,
    autoplay:false,
    nav: false,
    dots: false
  });
  
  $("#big5").owlCarousel({
    items:1,
    loop: false,
    rewind: true,
    autoplay:true,
    nav: true,
    dots: false,
    navText: [
      '<img src="site/img/seta-nav-branca-esquerda.svg" />',
      '<img src="site/img/seta-nav-branca-direita.svg" />',
    ],
  });
  
  function sincThumbs5(){
  
    var bigimage5 = $("#big5");
      var thumbs5 = $("#thumbs5");
      //var totalslides = 10;
      var syncedSecondary = true;
  
      bigimage5
        .owlCarousel({
        items: 1,
        slideSpeed: 2000,
        nav: true,
        autoplay: true,
        dots: false,
        loop: false,
        rewind: true,
        responsiveRefreshRate: 200,
        navText: [
          '<img src="site/img/seta-nav-branca-esquerda.svg" />',
          '<img src="site/img/seta-nav-branca-direita.svg" />',
        ],
      })
        .on("changed.owl.carousel", syncPosition5);
  
      thumbs5
        .on("initialized.owl.carousel", function() {
        thumbs5
          .find(".owl-item")
          .eq(0)
          .addClass("current");
      })
        .owlCarousel({
        items: 3,
        dots: false,
        nav: false,
        smartSpeed: 200,
        slideSpeed: 500,
        slideBy: 3,
        responsiveRefreshRate: 100
      })
        .on("changed.owl.carousel", syncThumb5);
  
  
      function syncPosition5(el) {
        //if loop is set to false, then you have to uncomment the next line
        //var current = el.item.index;
  
        //to disable loop, comment this block
        var count = el.item.count - 1;
        var current = Math.round(el.item.index - el.item.count / 2 - 0.5);
  
        if (current < 0) {
          current = count;
        }
        if (current > count) {
          current = 0;
        }
        //to this
        thumbs5
          .find(".owl-item")
          .removeClass("current")
          .eq(current)
          .addClass("current");
        var onscreen = thumbs5.find(".owl-item.active").length - 1;
        var start = thumbs5
        .find(".owl-item.active")
        .first()
        .index();
        var end = thumbs5
        .find(".owl-item.active")
        .last()
        .index();
  
        if (current > end) {
          thumbs5.data("owl.carousel").to(current, 100, true);
        }
        if (current < start) {
          thumbs5.data("owl.carousel").to(current - onscreen, 100, true);
        }
      }
  
      function syncThumb5(el) {
        if (syncedSecondary) {
          var number = el.item.index;
          bigimage5.data("owl.carousel").to(number, 100, true);
        }
      }
  
      thumbs5.on("click", ".owl-item", function(e) {
        e.preventDefault();
        var number = $(this).index();
        bigimage5.data("owl.carousel").to(number, 300, true);
      });
  }


  
    var bigimage1 = $("#big1");
    var thumbs1 = $("#thumbs1");
    if(bigimage1){
    //var totalslides = 10;
    var syncedSecondary = true;
  
    bigimage1
      .owlCarousel({
      items: 1,
      slideSpeed: 2000,
      nav: true,
      autoplay: true,
      dots: false,
      loop: false,
      rewind: true,
      responsiveRefreshRate: 200,
      navText: [
        '<img src="site/img/seta-nav-branca-esquerda.svg" />',
        '<img src="site/img/seta-nav-branca-direita.svg" />',
      ],
    })
      .on("changed.owl.carousel", syncPosition1);
  
    thumbs1
      .on("initialized.owl.carousel", function() {
      thumbs1
        .find(".owl-item")
        .eq(0)
        .addClass("current");
    })
      .owlCarousel({
      items: 3,
      dots: false,
      nav: false,
      smartSpeed: 200,
      slideSpeed: 500,
      slideBy: 3,
      responsiveRefreshRate: 100
    })
      .on("changed.owl.carousel", syncThumb1);

  
    function syncPosition1(el) {
      //if loop is set to false, then you have to uncomment the next line
      //var current = el.item.index;
  
      //to disable loop, comment this block
      var count = el.item.count - 1;
      var current = Math.round(el.item.index - el.item.count / 2 - 0.5);
  
      if (current < 0) {
        current = count;
      }
      if (current > count) {
        current = 0;
      }
      //to this
      thumbs1
        .find(".owl-item")
        .removeClass("current")
        .eq(current)
        .addClass("current");
      var onscreen = thumbs1.find(".owl-item.active").length - 1;
      var start = thumbs1
      .find(".owl-item.active")
      .first()
      .index();
      var end = thumbs1
      .find(".owl-item.active")
      .last()
      .index();
  
      if (current > end) {
        thumbs1.data("owl.carousel").to(current, 100, true);
      }
      if (current < start) {
        thumbs1.data("owl.carousel").to(current - onscreen, 100, true);
      }
    }
  
    function syncThumb1(el) {
      if (syncedSecondary) {
        var number = el.item.index;
        bigimage1.data("owl.carousel").to(number, 100, true);
      }
    }
  
    thumbs1.on("click", ".owl-item", function(e) {
      e.preventDefault();
      var number = $(this).index();
      bigimage1.data("owl.carousel").to(number, 300, true);
    });
  }


  var bigimage2 = $("#big2");
  var thumbs2 = $("#thumbs2");
  if(bigimage2){
  //var totalslides = 10;
  var syncedSecondary = true;

  bigimage2
    .owlCarousel({
    items: 1,
    slideSpeed: 2000,
    nav: true,
    autoplay: true,
    dots: false,
    loop: false,
    rewind: true,
    responsiveRefreshRate: 200,
    navText: [
      '<img src="site/img/seta-nav-branca-esquerda.svg" />',
      '<img src="site/img/seta-nav-branca-direita.svg" />',
    ],
  })
    .on("changed.owl.carousel", syncPosition2);

  thumbs2
    .on("initialized.owl.carousel", function() {
    thumbs2
      .find(".owl-item")
      .eq(0)
      .addClass("current");
  })
    .owlCarousel({
    items: 3,
    dots: false,
    nav: false,
    smartSpeed: 200,
    slideSpeed: 500,
    slideBy: 3,
    responsiveRefreshRate: 100
  })
    .on("changed.owl.carousel", syncThumb2);


  function syncPosition2(el) {
    //if loop is set to false, then you have to uncomment the next line
    //var current = el.item.index;

    //to disable loop, comment this block
    var count = el.item.count - 1;
    var current = Math.round(el.item.index - el.item.count / 2 - 0.5);

    if (current < 0) {
      current = count;
    }
    if (current > count) {
      current = 0;
    }
    //to this
    thumbs2
      .find(".owl-item")
      .removeClass("current")
      .eq(current)
      .addClass("current");
    var onscreen = thumbs2.find(".owl-item.active").length - 1;
    var start = thumbs2
    .find(".owl-item.active")
    .first()
    .index();
    var end = thumbs2
    .find(".owl-item.active")
    .last()
    .index();

    if (current > end) {
      thumbs2.data("owl.carousel").to(current, 100, true);
    }
    if (current < start) {
      thumbs2.data("owl.carousel").to(current - onscreen, 100, true);
    }
  }

  function syncThumb2(el) {
    if (syncedSecondary) {
      var number = el.item.index;
      bigimage2.data("owl.carousel").to(number, 100, true);
    }
  }

  thumbs2.on("click", ".owl-item", function(e) {
    e.preventDefault();
    var number = $(this).index();
    bigimage2.data("owl.carousel").to(number, 300, true);
  });
}


var bigimage3 = $("#big3");
  var thumbs3 = $("#thumbs3");
  if(bigimage3){
  //var totalslides = 10;
  var syncedSecondary = true;

  bigimage3
    .owlCarousel({
    items: 1,
    slideSpeed: 2000,
    nav: true,
    autoplay: true,
    dots: false,
    loop: false,
    rewind: true,
    responsiveRefreshRate: 200,
    navText: [
      '<img src="site/img/seta-nav-branca-esquerda.svg" />',
      '<img src="site/img/seta-nav-branca-direita.svg" />',
    ],
  })
    .on("changed.owl.carousel", syncPosition3);

  thumbs3
    .on("initialized.owl.carousel", function() {
    thumbs3
      .find(".owl-item")
      .eq(0)
      .addClass("current");
  })
    .owlCarousel({
    items: 3,
    dots: false,
    nav: false,
    smartSpeed: 200,
    slideSpeed: 500,
    slideBy: 3,
    responsiveRefreshRate: 100
  })
    .on("changed.owl.carousel", syncThumb3);


  function syncPosition3(el) {
    //if loop is set to false, then you have to uncomment the next line
    //var current = el.item.index;

    //to disable loop, comment this block
    var count = el.item.count - 1;
    var current = Math.round(el.item.index - el.item.count / 2 - 0.5);

    if (current < 0) {
      current = count;
    }
    if (current > count) {
      current = 0;
    }
    //to this
    thumbs3
      .find(".owl-item")
      .removeClass("current")
      .eq(current)
      .addClass("current");
    var onscreen = thumbs3.find(".owl-item.active").length - 1;
    var start = thumbs3
    .find(".owl-item.active")
    .first()
    .index();
    var end = thumbs3
    .find(".owl-item.active")
    .last()
    .index();

    if (current > end) {
      thumbs3.data("owl.carousel").to(current, 100, true);
    }
    if (current < start) {
      thumbs3.data("owl.carousel").to(current - onscreen, 100, true);
    }
  }

  function syncThumb3(el) {
    if (syncedSecondary) {
      var number = el.item.index;
      bigimage2.data("owl.carousel").to(number, 100, true);
    }
  }

  thumbs3.on("click", ".owl-item", function(e) {
    e.preventDefault();
    var number = $(this).index();
    bigimage3.data("owl.carousel").to(number, 300, true);
  });
}


  

  const url = window.location.href;

  if (url.includes("acompanhamento")) {
    $("body").css("background-color", "#fff");
    $(".top_mobile").css("background-color", "#fff");
    $(".logo_verde_mobile").css("display", "block");
    $(".logo_branco_mobile").css("display", "none");

    $(".menu_top_home").css("display", "none");
    

    $("header.fixo").css("background-color", "#fff");
    $("header.fixo").css("height", "60px");
    $("header.fixo").css("transition", "1s");
    $("#btn_fixo_top").css("background-color", "#003B4C");
    $("#btn_fixo_top").css("color", "#fff");
    $("#btn_fixo_top").css("fontSize", "12px");
    $("#btn_fixo_top").css("height", "37px");
    $("#btn_fixo_top").css("transition", "1.5");
    $(".top nav .contato").css("padding", "18px 0px 0px 0px");
    $(".hanburguer").css("color", "#003B4C");
    $(".hanburguer").css("border-top", "2px solid #003B4C");
    $(".top nav .btn_menu_abre button").css("padding", "30px 0px 0px 0px");
    $("header .logo_verde").css("height", "75px");
    $("header .logo_branco").css("height", "75px");
    $("header .logo_branco").css("padding", "0px 0px 0px 0px");
    $("header .logo_branco").css("opacity", "0");
    $("header .logo_verde").css("opacity", "1");
    $("header .logo_verde").css("width", "105px");
    $("header .logo_branco").css("width", "105px");
  }

  function show_scrol() {
    var tempScrollTop = $(window).scrollTop();

    if (url.includes("acompanhamento")) {
      $(".top_mobile").css("background-color", "#fff");
      $(".logo_verde_mobile").css("display", "block");
      $(".logo_branco_mobile").css("display", "none");

      $("header.fixo").css("background-color", "#fff");
      $("header.fixo").css("height", "60px");
      $("header.fixo").css("transition", "1s");
      $("#btn_fixo_top").css("background-color", "#003B4C");
      $("#btn_fixo_top").css("color", "#fff");
      $("#btn_fixo_top").css("fontSize", "12px");
      $("#btn_fixo_top").css("height", "37px");
      $("#btn_fixo_top").css("transition", "1.5");
      $(".top nav .contato").css("padding", "18px 0px 0px 0px");
      $(".hanburguer").css("color", "#003B4C");
      $(".hanburguer").css("border-top", "2px solid #003B4C");
      $(".top nav .btn_menu_abre button").css("padding", "30px 0px 0px 0px");
      $("header .logo_verde").css("height", "75px");
      $("header .logo_branco").css("height", "75px");
      $("header .logo_branco").css("padding", "0px 0px 0px 0px");
      $("header .logo_branco").css("opacity", "0");
      $("header .logo_verde").css("opacity", "1");
      $("header .logo_verde").css("width", "105px");
      $("header .logo_branco").css("width", "105px");
    } else {
      if (tempScrollTop == 0) {
        $(".top_mobile").css("background-color", "#fff0");
        $(".logo_verde_mobile").css("display", "none");
        $(".logo_branco_mobile").css("display", "block");

        $("header.fixo").css("background-color", "#fff0");
        $("header.fixo").css("height", "110px");
        $("header.fixo").css("transition", "1s");
        $("#btn_fixo_top").css("background-color", "#fff");
        $("span.hanburguer").css("color", "#003B4C");
        $("#btn_fixo_top").css("color", "#003B4C");
        $(".top nav .contato").css("padding", "43px 0px 0px 0px");
        $(".hanburguer").css("color", "#fff");
        $(".hanburguer").css("border-top", "2px solid #fff");
        $(".top nav .btn_menu_abre button").css("padding", "50px 0px 0px 0px");
        $("header .logo_branco").css("padding", "50px 0px 0px 0px");
        $("header .logo_branco").css("opacity", "1");
        $("header .logo_verde").css("opacity", "0");
        $("header .logo_verde").css("height", "105px");
        $("#btn_fixo_top").css("fontSize", "16px");
        $("#btn_fixo_top").css("height", "45px");
      } else {
        $(".top_mobile").css("background-color", "#fff");
        $(".logo_verde_mobile").css("display", "block");
        $(".logo_branco_mobile").css("display", "none");

        $("header.fixo").css("background-color", "#fff");
        $("header.fixo").css("height", "60px");
        $("header.fixo").css("transition", "1s");
        $("#btn_fixo_top").css("background-color", "#003B4C");
        $("#btn_fixo_top").css("color", "#fff");
        $("#btn_fixo_top").css("fontSize", "12px");
        $("#btn_fixo_top").css("height", "37px");
        $("#btn_fixo_top").css("transition", "1.5");
        $(".top nav .contato").css("padding", "18px 0px 0px 0px");
        $(".hanburguer").css("color", "#003B4C");
        $(".hanburguer").css("border-top", "2px solid #003B4C");
        $(".top nav .btn_menu_abre button").css("padding", "30px 0px 0px 0px");
        $("header .logo_verde").css("height", "75px");
        $("header .logo_branco").css("height", "75px");
        $("header .logo_branco").css("padding", "0px 0px 0px 0px");
        $("header .logo_branco").css("opacity", "0");
        $("header .logo_verde").css("opacity", "1");
        $("header .logo_verde").css("width", "105px");
        $("header .logo_branco").css("width", "105px");
      }
    }
  }

  $(".home .owl-carousel").owlCarousel({
    margin: 0,
    loop: false,
    rewind: true,
    items: 1,
    autoplay: true,
    autoplayTimeout: true,
    nav: true,
    autoplayTimeout: 6000,
    mouseDrag: false,
    animateIn: "fadeIn",
    animateOut: "fadeOut",
    navText: [
      '<img src="site/img/seta-nav-branca-esquerda.svg" />',
      '<img src="site/img/seta-nav-branca-direita.svg" />',
    ],
  });

  $(".galeria_inicial .mobile nav ul").slick({
    infinite: false,
    slidesToShow: 1.5,
    slidesToScroll: 1,
    adaptiveHeight: false,
    arrows: false,
    dots: false,
    mobileFirst: true,
    cssEase: "linear",
  });

  $(".galeria_inicial .slideshow .owl-carousel").owlCarousel({
    center: true,
    margin: 30,
    items: 2,
    loop: false,
    nav: true,
    slideTransition: "ease",
    smartSpeed: 3000,
    navSpeed: 3000,
    autoWidth: true,
    navText: [
      '<img src="site/img/seta-nav-azul-esquerda.svg" />',
      '<img src="site/img/seta-nav-azul-direita.svg" />',
    ],
  });

  $(".galeria_inicial .slideshow .owl-carousel .owl-next").on(
    "click",
    function () {
      console.log("teste");
      if ($(this).hasClass("next")) {
        console.log("next clico");

        var active = $(".galeria_inicial .active").html();
        console.log("active >", active);
        if (active === "FACHADA") {
          active = "paisagismo";
        }
        if (active === "PAISAGISMO") {
          active = "INTERIORES";
        }
        if (active === "INTERIORES") {
          active = "fachada";
        }

        console.log("active >", active);
        var categoria = active;
        var galeria = "galeria_inicial_banners";
        $(".galeria_inicial .cortina").fadeIn("slow", function () {
          $.ajax({
            type: "POST",
            data: { galeria: galeria, categoria: categoria },
            url: "home/carrega_galeria",
            success: function (data) {
              var galeria = $.parseJSON(data);
              var html = "";
              $.each(galeria, function (key, value) {
                if (isMobile()) {
                  html +=
                    '<div class="item" style="background-image:url(uploads/' +
                    value.mobile +
                    ');" href="uploads/' +
                    value.mobile +
                    '" data-fancybox="galeria_inicial_mobile" data-caption="' +
                    value.legenda +
                    '"></div>';
                } else {
                  html +=
                    '<div class="item" style="background-image:url(uploads/' +
                    value.imagem +
                    ');" href="uploads/' +
                    value.imagem +
                    '" data-fancybox="galeria_inicial_desktop" data-caption="' +
                    value.legenda +
                    '"></div>';
                }
              });
              $(".galeria_inicial .slideshow .owl-carousel")
                .trigger("replace.owl.carousel", html)
                .trigger("refresh.owl.carousel");
              $(".galeria_inicial .cortina").delay(1000).fadeOut();
              if (isMobile()) {
                $("#abrir_galeria_inicial").attr(
                  "href",
                  "uploads/" + galeria[0].mobile
                );
              } else {
                $("#abrir_galeria_inicial").attr(
                  "href",
                  "uploads/" + galeria[0].imagem
                );
              }
            },
          });
        });
      }

      if ($(this).hasClass("disabled")) {
        $(this).removeClass("disabled");
        //$(this).addClass('next')
        console.log("disabled");
      }
    }
  );

  $(".galeria_inicial nav ul li").on("click", function () {
    //$(".galeria_inicial nav ul li").removeClass('active')
    //$(this).addClass('active')
    var categoria = $(this).attr("data-galeria");
    var galeria = "galeria_inicial_banners";
    $(".galeria_inicial .cortina").fadeIn("slow", function () {
      $.ajax({
        type: "POST",
        data: { galeria: galeria, categoria: categoria },
        url: "home/carrega_galeria",
        success: function (data) {
          var galeria = $.parseJSON(data);
          var html = "";
          $.each(galeria, function (key, value) {
            if (isMobile()) {
              html +=
                '<div class="item" style="background-image:url(uploads/' +
                value.mobile +
                ');" href="uploads/' +
                value.mobile +
                '" data-fancybox="galeria_inicial_mobile" data-caption="' +
                value.legenda +
                '"></div>';
            } else {
              html +=
                '<div class="item" style="background-image:url(uploads/' +
                value.imagem +
                ');" href="uploads/' +
                value.imagem +
                '" data-fancybox="galeria_inicial_desktop" data-caption="' +
                value.legenda +
                '"></div>';
            }
          });
          $(".galeria_inicial .slideshow .owl-carousel")
            .trigger("replace.owl.carousel", html)
            .trigger("refresh.owl.carousel");
          $(".galeria_inicial .cortina").delay(1000).fadeOut();
          if (isMobile()) {
            $("#abrir_galeria_inicial").attr(
              "href",
              "uploads/" + galeria[0].mobile
            );
          } else {
            $("#abrir_galeria_inicial").attr(
              "href",
              "uploads/" + galeria[0].imagem
            );
          }
        },
      });
    });
  });

  var AcompanhaSlides = 1;
  if(AcompanhaSlides === 1){
    if (url.includes("acompanhamento")) {
      activeAcompanhamento();
      AcompanhaSlides = 0;
    }
  }
  

  $("body").on("click", function (event) {
    console.log('event.target', event.target.nodeName);

    console.log('event.target.class', event.target.className);
    
    let seta = event.target.className;
    event.target.nodeName
    //seta.indexOf("rotate") === 5
    if (event.target.nodeName !== 'SPAN') {
      $(".acompanhamento-menu").removeClass("acompanhamento-click");
      $(".acompanhamento-menu-mobile").removeClass("acompanhamento-click");
      $(".seta").removeClass("rotate");
    }
  });


  $(".acompanhamento-mes").on("click", function () {
		if ($(".acompanhamento-menu").hasClass("acompanhamento-click")) {
			$(".acompanhamento-menu").removeClass("acompanhamento-click");
		} else {
			$(".acompanhamento-menu").addClass("acompanhamento-click");
		}

    if ($(".seta").hasClass("rotate")) {
			$(".seta").removeClass("rotate");
		} else {
			$(".seta").addClass("rotate");
		}
	
  });

  $(".acompanhamento-mes-mobile").on("click", function () {

    if ($(".acompanhamento-menu-mobile").hasClass("acompanhamento-click")) {
			$(".acompanhamento-menu-mobile").removeClass("acompanhamento-click");
		} else {
			$(".acompanhamento-menu-mobile").addClass("acompanhamento-click");
		}

    if ($(".seta").hasClass("rotate")) {
			$(".seta").removeClass("rotate");
		} else {
			$(".seta").addClass("rotate");
		}
	
  });

  

  $(".acompanhamento-menu li").on("click", function (event) {
    activeAcompanhamento(event);
  });

  $(".acompanhamento-menu-mobile li").on("click", function (event) {
   // $("html, body").animate({
  //    scrollTop: 0
  //  }, 1000)
    //$('.acompanhamento-mobiperiodos').hide();
    //$("#big5").html('carregando');
    //$("#thumbs5").html('carregando');
    
    

    $('.acompanhamento_banner_mobile').show();
    activeAcompanhamentoMobile(event);
  });

  

  function activeAcompanhamentoMobile(event) {
    var data
    if(event){
      if ($(".acompanhamento-menu-mobile").hasClass("acompanhamento-click")) {
        $(".acompanhamento-menu-mobile").removeClass("acompanhamento-click");
        } else {
        console.log("add");
        $(".acompanhamento-menu-mobile").addClass("acompanhamento-click");
        }
  
      data = event.target.innerText;

      data = data.trim();
  
      }else{
        //data = "JANEIRO DE 2023";

        if (url.includes("acompanhamento-de-obra/")) {

          $(".acompanhamento-mobiperiodos").remove();
          $('.acompanhamento_banner_mobile').show();

          let strone = url.split('/');
  
          data = strone[6].toUpperCase() + " DE " + strone[5];
  
        }else{
  
          data = noperioarr[0];
  
          data = data.trim();
  
          //data = "AGOSTO DE 2023";
  
        }

      }
  
      $(".acompanhamento-selected-mobile").html(data);
      $(".date-selected").html(data);

      console.log("data", data);
  
      var periodo = data.split(" DE ");
  
      console.log("periodo", periodo);
  
      $(".acompanhamento_banner_mobile .cortina").fadeIn("slow", function () {
        $.ajax({
          type: "POST",
          data: { mes: periodo[0], ano: periodo[1] },
          url: "acompanhamento/carrega_galeria",
          success: function (data) {
            var galeria = $.parseJSON(data);
            var html = "";
            var thumbs = "";
            var num = 1;
  
            $.each(galeria, function (key, value) {
                html +=
                  '<div class="item flex" style="background-image:url(uploads/' +
                  value.mobile +
                  '); height: 325px; background-repeat: no-repeat; background-size: cover;" href="uploads/' +
                  value.mobile +
                  '" data-fancybox="acompanhamento_areas_mobile" data-caption="' +
                  value.texto +
                  '"></div>';
                  
                thumbs +=
                  '<div class="item flex" style="background-image:url(uploads/' +
                  value.mobile +
                  '); height: 80px; background-repeat: no-repeat; background-size: cover;" href="uploads/' +
                  value.mobile +
                  '"></div>';
                
        num++;
              //html += '<div class="item" style="background-image: url(&quot;uploads/1665846499_b577576f579dcccca768.jpg&quot;); height: 540px;" href="uploads/1665846499_b577576f579dcccca768.jpg" data-fancybox="galeria_areas" data-caption="asdf"></div>'
            });

            console.log("aqui");

            $(".acompanhamento_banner_mobile #big5")
            .trigger("replace.owl.carousel", html)
            .trigger("refresh.owl.carousel");
    
          $(".acompanhamento_banner_mobile #thumbs5")
            .trigger("replace.owl.carousel", thumbs)
            .trigger("refresh.owl.carousel");
          
          $(".acompanhamento_banner_mobile .cortina").delay(1000).fadeOut();
          sincThumbs5();
          },
        });
        
      });
    }

  function activeAcompanhamento(event) {
	var data
	if(event){
		if ($(".acompanhamento-menu").hasClass("acompanhamento-click")) {
			$(".acompanhamento-menu").removeClass("acompanhamento-click");
		  } else {
			console.log("add");
			$(".acompanhamento-menu").addClass("acompanhamento-click");
		  }

		data = event.target.innerText;

		data = data.trim();


    }else{
      
      if (url.includes("acompanhamento-de-obra/")) {
        
        let strone = url.split('/');

        data = strone[6].toUpperCase() + " DE " + strone[5];

        activeAcompanhamentoMobile();
      }else{


        data = noperioarr[0];

        data = data.trim();

        //data = "AGOSTO DE 2023";

      }

      
    }

    $(".acompanhamento-selected").html(data);
    console.log("data", data);

    var periodo = data.split(" DE ");

    console.log("periodo", periodo);

    $(".acompanhamento_banner .cortina").fadeIn("slow", function () {
      $.ajax({
        type: "POST",
        data: { mes: periodo[0], ano: periodo[1] },
        url: "acompanhamento/carrega_galeria",
        success: function (data) {
          var galeria = $.parseJSON(data);
          var html = "";
          var thumbs = "";
          var num = 1;

          $.each(galeria, function (key, value) {
            
              html +=
                '<div class="item flex" style="background-image:url(uploads/' +
                value.imagem +
                '); height: 540px; background-repeat: no-repeat; background-size: cover;" href="uploads/' +
                value.imagem +
                '" data-fancybox="acompanhamento_areas" data-caption="' +
                value.texto +
                '"></div>';

                
                thumbs +=
                '<div class="item flex" style="background-image:url(uploads/' +
                value.imagem +
                '); height: 150px; background-repeat: no-repeat; background-size: center;" href="uploads/' +
                value.imagem +
                '"></div>';
				
	
 
      num++;
            //html += '<div class="item" style="background-image: url(&quot;uploads/1665846499_b577576f579dcccca768.jpg&quot;); height: 540px;" href="uploads/1665846499_b577576f579dcccca768.jpg" data-fancybox="galeria_areas" data-caption="asdf"></div>'
          });

          $(".acompanhamento_banner .slideshow #bigdesk1")
          .trigger("replace.owl.carousel", html)
          .trigger("refresh.owl.carousel");
  
        $(".acompanhamento_banner .slideshow #thumbsdesk1")
          .trigger("replace.owl.carousel", thumbs)
          .trigger("refresh.owl.carousel");
  
        $(".acompanhamento_banner .cortina").delay(1000).fadeOut();
        sincThumbs();
          
        },
      });
      
    });
  }

  $(".area_comuns .mobile nav ul").slick({
    infinite: false,
    slidesToShow: 1.5,
    slidesToScroll: 1,
    adaptiveHeight: false,
    arrows: false,
    dots: false,
    mobileFirst: true,
    cssEase: "linear",
  });


  var areas = $(".area_comuns .slideshow .owl-carousel").owlCarousel({
    center: true,
    margin: 30,
    items: 2,
    loop: false,
    nav: true,
    slideTransition: "ease",
    smartSpeed: 3000,
    navSpeed: 3000,
    autoWidth: true,
    navText: [
      '<img src="site/img/seta-nav-azul-esquerda.svg" />',
      '<img src="site/img/seta-nav-azul-direita.svg" />',
    ],
  });

  $(".area_comuns nav ul li").on("click", function () {
    var categoria = $(this).attr("data-galeria");
    var galeria = "galeria_areas_banners";

    $(".area_comuns .cortina").fadeIn("slow", function () {
      $.ajax({
        type: "POST",
        data: { galeria: galeria, categoria: categoria },
        url: "home/carrega_galeria",
        success: function (data) {
          var galeria = $.parseJSON(data);
          var html = "";

          $.each(galeria, function (key, value) {
            if (isMobile()) {
              html +=
                '<div class="item" style="background-image:url(uploads/' +
                value.mobile +
                '); height: 540px" href="uploads/' +
                value.mobile +
                '" data-fancybox="galeria_areas" data-caption="' +
                value.legenda +
                '"></div>';
            } else {
              html +=
                '<div class="item" style="background-image:url(uploads/' +
                value.imagem +
                '); height: 540px" href="uploads/' +
                value.imagem +
                '" data-fancybox="galeria_areas" data-caption="' +
                value.legenda +
                '"></div>';
            }

            //html += '<div class="item" style="background-image: url(&quot;uploads/1665846499_b577576f579dcccca768.jpg&quot;); height: 540px;" href="uploads/1665846499_b577576f579dcccca768.jpg" data-fancybox="galeria_areas" data-caption="asdf"></div>'
          });

          $(".area_comuns .slideshow .owl-carousel")
            .trigger("replace.owl.carousel", html)
            .trigger("refresh.owl.carousel");
          $(".area_comuns .cortina").delay(1000).fadeOut();
        },
      });
    });
  });

  $(".plantas .slideshow .mobile nav ul").slick({
    infinite: true,
    slidesToShow: 2,
    slidesToScroll: 2,
    adaptiveHeight: false,
    arrows: false,
    dots: false,
    mobileFirst: true,
    cssEase: "linear",
  });

  $(".plantas .slideshow .owl-carousel").owlCarousel({
    center: false,
    margin: 10,
    items: 1,
    loop: false,
    nav: true,
    mouseDrag: false,
    animateIn: "fadeIn",
    animateOut: "fadeOut",
    slideTransition: "ease",
    startPosition: 0,
    slidesToShow: 1,
    slidesToScroll: 1,
    smartSpeed: 3000,
    navSpeed: 3000,
    navText: [
      '<img src="site/img/seta-nav-azul-esquerda.svg" />',
      '<img src="site/img/seta-nav-azul-direita.svg" />',
    ],
  });

  if (isMobile()) {
    $(".plantas .slideshow .desck").remove();
  } else {
    $(".plantas .slideshow .mobile").remove();
  }

  $(document).on(
    "click",
    ".plantas nav ul li, .submenu_mobile ul li",
    function () {
      var categoriaID = $(this).attr("data-categoriaID");
      var categoria = $(this).attr("data-galeria");
      var galeria = "galeria_plantas_banners";

      //var categoriaID = $(this).attr("data-categoriaID");
      //console.log($(this))

      //$(".submenu_mobile").toggle();

      if ($(this).hasClass("submenu")) {
        $.ajax({
          type: "POST",
          data: { categoriaID: categoriaID },
          url: "home/carrega_subcategoria",
          success: function (data) {
            //console.log("estou aqui")
            var cateogiras = $.parseJSON(data);
            $(".submenu_mobile ul").empty();
            var html = "";
            $.each(cateogiras, function (key, value) {
              html +=
                "<li data-galeria='" +
                value.name +
                "'>" +
                value.texto +
                "</li>";
            });
            $(".submenu_mobile ul").append(html);
            $(".submenu_mobile").fadeIn();
          },
        });
      } else {
        $(".submenu_mobile").fadeOut();
        $(".plantas .cortina").fadeIn("slow", function () {
          $.ajax({
            type: "POST",
            data: { galeria: galeria, categoria: categoria },
            url: "home/carrega_galeria",
            success: function (data) {
              var galeria = $.parseJSON(data);
              //console.log('galeria >', galeria)
              var html = "";
              $.each(galeria, function (key, value) {
                if (isMobile()) {
                  html +=
                    '<article class="item"><img src="uploads/' +
                    value.mobile +
                    '" href="uploads/' +
                    value.mobile +
                    '" data-fancybox="' +
                    value.categoria +
                    '" data-caption="' +
                    value.legenda +
                    '"></article>';
                } else {
                  html +=
                    '<article class="item"><img src="uploads/' +
                    value.imagem +
                    '" href="uploads/' +
                    value.imagem +
                    '" data-fancybox="' +
                    value.categoria +
                    '" data-caption="' +
                    value.legenda +
                    '"></article>';
                }
              });
              $(".plantas .slideshow .owl-carousel")
                .trigger("replace.owl.carousel", html)
                .trigger("refresh.owl.carousel");
              $(".plantas .cortina").delay(1000).fadeOut();
            },
          });
        });
      }
    }
  );

  $(document).on(
    "click",
    ".plantas nav ul li, .submenu_mobile ul li next",
    function () {
      var categoriaID = $(this).attr("data-categoriaID");
      var categoria = $(this).attr("data-galeria");
      var galeria = "galeria_plantas_banners";

      //var categoriaID = $(this).attr("data-categoriaID");
      //console.log($(this))

      //$(".submenu_mobile").toggle();

      var htmlli = $(".submenu_mobile ul").html();
      if (htmlli) {
        $(document).on("click", function () {
          $(".submenu_mobile").fadeOut();
          $(".submenu_mobile ul li").remove();
        });
      }

      if ($(this).hasClass("submenu")) {
        if (!htmlli) {
          $.ajax({
            type: "POST",
            data: { categoriaID: categoriaID },
            url: "home/carrega_subcategoria",
            success: function (data) {
              console.log("estou aqui");
              var cateogiras = $.parseJSON(data);
              $(".submenu_mobile ul").empty();
              var html = "";
              $.each(cateogiras, function (key, value) {
                html +=
                  "<li data-galeria='" +
                  value.name +
                  "'>" +
                  value.texto +
                  "</li>";
              });
              $(".submenu_mobile ul").append(html);
              $(".submenu_mobile").fadeIn();
            },
          });
        }
      } else {
        $(".submenu_mobile").fadeOut();
        $(".plantas .cortina").fadeIn("slow", function () {
          $.ajax({
            type: "POST",
            data: { galeria: galeria, categoria: categoria },
            url: "home/carrega_galeria",
            success: function (data) {
              var galeria = $.parseJSON(data);
              console.log("galeria >", galeria);
              var html = "";
              $.each(galeria, function (key, value) {
                if (isMobile()) {
                  html +=
                    '<article class="item"><img src="uploads/' +
                    value.mobile +
                    '" href="uploads/' +
                    value.mobile +
                    '" data-fancybox="' +
                    value.categoria +
                    '" data-caption="' +
                    value.legenda +
                    '"></article>';
                } else {
                  html +=
                    '<article class="item"><img src="uploads/' +
                    value.imagem +
                    '" href="uploads/' +
                    value.imagem +
                    '" data-fancybox="' +
                    value.categoria +
                    '" data-caption="' +
                    value.legenda +
                    '"></article>';
                }
              });
              $(".plantas .slideshow .owl-carousel")
                .trigger("replace.owl.carousel", html)
                .trigger("refresh.owl.carousel");
              $(".plantas .cortina").delay(1000).fadeOut();
            },
          });
        });
      }
    }
  );

  $(".diferenciais .container .desck .owl-carousel").owlCarousel({
    center: false,
    margin: 40,
    items: 3,
    loop: true,
    nav: true,
    slideTransition: "ease",
    smartSpeed: 1500,
    navSpeed: 1500,
    slideBy: 3,
    navText: [
      '<img src="site/img/seta-nav-azul-esquerda.svg" />',
      '<img src="site/img/seta-nav-azul-direita.svg" />',
    ],
  });
  $(".diferenciais .container .mobile .owl-carousel").owlCarousel({
    center: false,
    items: 1,
    dotsEach: 6,
    loop: true,
    nav: true,
    slideTransition: "ease",
    smartSpeed: 3000,
    navSpeed: 3000,
    slideBy: 3,
    navText: [
      '<img src="site/img/seta-nav-azul-esquerda.svg" />',
      '<img src="site/img/seta-nav-azul-direita.svg" />',
    ],
  });

  $(".projetistas nav .desck ul").slick({
    infinite: false,
    adaptiveHeight: false,
    slidesToShow: 3,
    slidesToScroll: 1,
    arrows: true,
    dots: false,
    variableWidth: true,
    cssEase: "linear",
    prevArrow: $(".projetistas button#left"),
    nextArrow: $(".projetistas button#right"),
  });
  $(".projetistas nav .mobile ul").slick({
    infinite: false,
    adaptiveHeight: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    dots: false,
    variableWidth: true,
    cssEase: "linear",
  });

  $(".projetistas .desck .slideshow .owl-carousel").owlCarousel({
    center: false,
    margin: 40,
    animateIn: "fadeIn",
    animateOut: "fadeOut",
    mouseDrag: false,
    items: 1,
    loop: false,
    nav: false,
    slideTransition: "ease",
    smartSpeed: 3000,
    navSpeed: 3000,
    dots: false,
    //navText:['<img src="site/img/seta_esquerda.png" />','<img src="site/img/seta_direita.png" />']
  });
  $(".projetistas .mobile .slideshow .owl-carousel").owlCarousel({
    center: false,
    margin: 40,
    animateIn: "fadeIn",
    animateOut: "fadeOut",
    mouseDrag: false,
    touchDrag: false,
    items: 1,
    loop: false,
    nav: true,
    slideTransition: "ease",
    smartSpeed: 3000,
    navSpeed: 3000,
    dots: false,
    navText: [
      '<img src="site/img/seta esquerda_mobile.png" />',
      '<img src="site/img/seta direita_mobile.png" />',
    ],
  });

  $(".projetistas nav ul li").on("click", function () {
    var categoria = $(this).attr("data-galeria");
    var galeria = "galeria_projetistas_banners";

    $(".projetistas .cortina").fadeIn("slow", function () {
      $.ajax({
        type: "POST",
        data: { galeria: galeria, categoria: categoria },
        url: "home/carrega_galeria",
        success: function (data) {
          var galeria = $.parseJSON(data);
          var html = "";
          $.each(galeria, function (key, value) {
            if (isMobile()) {
              html +=
                '<article class="clearfix item"><div class="img"><img src="uploads/' +
                value.mobile +
                '" alt="' +
                value.legenda +
                '"></div><div class="texto"><h3>' +
                value.nome +
                "</h3><h4>" +
                value.cargo +
                "</h4><p>" +
                value.descricao +
                "</p></div></article>";
            } else {
              html +=
                '<article class="clearfix item"><div class="img"><img src="uploads/' +
                value.imagem +
                '" alt="' +
                value.legenda +
                '"></div><div class="texto"><h3>' +
                value.nome +
                "</h3><h4>" +
                value.cargo +
                "</h4><p>" +
                value.descricao +
                "</p></div></article>";
            }
          });
          $(".projetistas .slideshow .owl-carousel")
            .trigger("replace.owl.carousel", html)
            .trigger("refresh.owl.carousel");
          $(".projetistas .cortina").delay(1000).fadeOut();
        },
      });
    });
  });

  $(".curadoria .slideshow .desck .owl-carousel").owlCarousel({
    center: true,
    margin: 40,
    items: 1,
    loop: true,
    nav: true,
    slideTransition: "ease",
    smartSpeed: 3000,
    animateIn: "fadeInLeftBig",
    animateOut: "fadeOut",
    mouseDrag: false,
    navSpeed: 3000,
    dots: false,
    navText: [
      '<img src="site/img/setaVerdeEsquerda.png" />',
      '<img src="site/img/setaVerderDireita.png" />',
    ],
  });

  $(".curadoria .slideshow .mobile .owl-carousel").owlCarousel({
    center: false,
    margin: 40,
    items: 1,
    loop: true,
    nav: true,
    slideTransition: "ease",
    smartSpeed: 3000,
    animateIn: "fadeIn",
    animateOut: "fadeOut",
    mouseDrag: false,
    navSpeed: 3000,
    dots: false,
    navText: [
      '<img src="site/img/setaVerdeEsquerda.png" />',
      '<img src="site/img/setaVerderDireita.png" />',
    ],
  });


  
  $(".stand .slideshow .desck .owl-carousel").owlCarousel({
    center: true,
    margin: 40,
    items: 1,
    loop: true,
    nav: true,
    slideTransition: "ease",
    smartSpeed: 3000,
    animateIn: "fadeInLeftBig",
    animateOut: "fadeOut",
    mouseDrag: false,
    navSpeed: 3000,
    dots: false,
    navText: [
      '<img src="site/img/setaVerdeEsquerda.png" />',
      '<img src="site/img/setaVerderDireita.png" />',
    ],
  });

  $(".stand .slideshow .mobile .owl-carousel").owlCarousel({
    center: false,
    margin: 40,
    items: 1,
    loop: true,
    nav: true,
    slideTransition: "ease",
    smartSpeed: 3000,
    animateIn: "fadeIn",
    animateOut: "fadeOut",
    mouseDrag: false,
    navSpeed: 3000,
    dots: false,
    navText: [
      '<img src="site/img/setaVerdeEsquerda.png" />',
      '<img src="site/img/setaVerderDireita.png" />',
    ],
  });

  $(".bairro .slideshow .owl-carousel").owlCarousel({
    center: true,
    margin: 20,
    items: 2,
    loop: false,
    nav: true,
    slideTransition: "ease",
    smartSpeed: 3000,
    navSpeed: 3000,
    dots: true,
    autoWidth: true,
    navText: [
      '<img src="site/img/seta-nav-azul-esquerda.svg" />',
      '<img src="site/img/seta-nav-azul-direita.svg" />',
    ],
  });

  /*var dots_length = $('.bairro .slideshow .slides').length;
	$('.bairro .arrows').css("width", 240 + (dots_length * 20));*/

  new SmoothScroll({
    target: document.querySelector("body"),
  });

  const element_animate = document.querySelectorAll("[data_anime]");
  const animateClass = "animate";

  function animeScroll() {
    const windowtop = window.pageYOffset + (window.innerHeight * 3) / 4;
    element_animate.forEach(function (element) {
      if (windowtop > element.offsetTop) {
        element.classList.add(animateClass);
      } else {
        element.classList.remove(animateClass);
      }
    });
  }
  animeScroll();

  if (element_animate.length) {
    window.addEventListener("scroll", function () {
      animeScroll();
    });
  }

  const element_animate_opacity = document.querySelectorAll(
    "[data_anime_opacity]"
  );
  const animateClassOpacity = "animate";

  function animeScrollOpacity() {
    const windowtop = window.pageYOffset + (window.innerHeight * 3) / 4;
    element_animate_opacity.forEach(function (element) {
      if (windowtop > element.offsetTop) {
        element.classList.add(animateClassOpacity);
      } else {
        element.classList.remove(animateClassOpacity);
      }
    });
  }
  animeScrollOpacity();

  if (element_animate_opacity.length) {
    window.addEventListener("scroll", function () {
      animeScrollOpacity();
    });
  }

  const data_load = document.querySelectorAll("[data_load]");
  const animateClassLoad = "animate";

  function animeScrollLoad() {
    const windowtop = window.pageYOffset + (window.innerHeight * 3) / 5.5;

    data_load.forEach(function (element) {
      if (windowtop > element.offsetTop) {
        element.classList.add(animateClassLoad);
      } else {
        element.classList.remove(animateClassLoad);
      }
    });
  }

  animeScrollLoad();

  if (data_load.length) {
    window.addEventListener("scroll", function () {
      animeScrollLoad();
    });
  }

  const vid = document.getElementById("video_inicial");

  setTimeout(function () {
    vid.muted = false;
  }, 2000);

  $("#menu ul li a, .tbn_contato a, .contato_mobile a").on(
    "click",
    function () {
      var section = $(this).attr("data-src");
      $("html, body").animate({ scrollTop: $(section).offset().top }, 2000);
      if (isMobile()) {
        $("#menu").animate({ marginLeft: "-1000px" }, 1000);
      }
    }
  );

  $(".certificacoes .texto")
    .first()
    .removeClass("invisivel")
    .addClass("visivel");
  $(".certificacoes .logo").on("click", function () {
    var certificadoID = $(this).attr("data-id");
    $(".certificacoes .texto").removeClass("visivel").addClass("invisivel");
    $("#" + certificadoID)
      .removeClass("invisivel")
      .addClass("visivel");
  });


  
});
