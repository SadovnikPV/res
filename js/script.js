// ----------------------- Кнопка "ВВЕРХ" -------------------------

$(document).ready(function(){
    $(window).scroll(function(){
    if ($(this).scrollTop() > 100) {
    $('._scrollup').fadeIn();
    } else {
    $('._scrollup').fadeOut();
    }
    });
     
    $('._scrollup').click(function(){
    $("html, body").animate({ scrollTop: 0 }, 200, linear);
    return false;
    }); 
});

$(document).ready(function(){
    $( ".main-menu__link-wrap_lowdef" ).click(function(){
        $( ".main-menu__list-wrap_lowdef" ).slideToggle();
    });
});