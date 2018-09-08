$(window).scroll(function(){
    $(".carousel-caption").css("opacity", 1 - $(window).scrollTop() / 390);

    $(".carousel-control-prev").css("opacity", 1 - $(window).scrollTop() / 290);

    $(".carousel-control-next").css("opacity", 1 - $(window).scrollTop() / 290);

    $(".carousel-indicators").css("opacity", 1 - $(window).scrollTop() / 390);
});
