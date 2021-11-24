jQuery(".burger-btn").on("click", function () {
    $(".burger-btn").toggleClass("close");
    $(".sp-nav").fadeToggle(100);
    $("body").toggleClass("noscroll");
    $('.sp-nav').toggleClass('slide-in');
  });
  $(".sp-nav ul li a[href]").on("click", function (event) { //リンクがクリックされた時に、
    $(".burger-btn").trigger("click"); //trigger("click")を実行
  });

  $('.burger-btn').on('click',function(){
    $('.burger-btn').toggleClass('close');
    
    $('body').toggleClass('noscroll');
  });