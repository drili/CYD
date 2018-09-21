$(window).scroll(function(){
    $(".next2").css("opacity", 1 - $(window).scrollTop() / 290);

    $(".prev2").css("opacity", 1 - $(window).scrollTop() / 290);

    $(".indifade").css("opacity", 1 - $(window).scrollTop() / 390);

    $(".datafade").css("opacity", 1 - $(window).scrollTop() / 390);
});
