$('.inner-bg').click(function() {
    $('.left-col').toggleClass('front');
    $('.inner').toggleClass('front');
});

$("body").scroll(function() {
    if ($("body").scrollTop() >= 200) {
        $(".toTop").fadeIn(100);
        console.log(1);
    } else {
        $(".toTop").fadeOut(100);
    }
});

$(".toTop").click(function() {
    $("body").animate({ scrollTop: 0 }, 600);
});

function dostavka(e) {
    $('.dostavka').hide();
    $('.'+e).show();
}

function oplata(e) {
    $('.oplata').hide();
    $('.'+e).show();
}