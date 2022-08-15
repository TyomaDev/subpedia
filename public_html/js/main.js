// карусель
$(document).ready(function(){
    $(".owl-carousel").owlCarousel({
        items: 1,
        loop: true,
        autoplay: true,
        autoplayTimeout: 4000,
        dots: true
    });
  });
// бургер
$('#sandwichmenu').on('click', function(e) {
    e.preventDefault();
    $('#sandwichmenu').toggleClass("active");
    $('.js_menu').toggleClass("active");
   
});


$('.alinks_navc').on('click', function(e) {
    // e.preventDefault();
    $('#sandwichmenu').toggleClass("active");
    $('.js_menu').toggleClass("active");
});
