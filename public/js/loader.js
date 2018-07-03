$(window).on('load', function () {
    $preloader = $('.loaderArea');
    $loader = $preloader.find('.loader');
    document.querySelector("#pre-letters").classList.add("letters-out-animation");
    setTimeout(function() {
        $loader.fadeOut();
        $preloader.delay(350).fadeOut('slow');
    }, 2000);
});