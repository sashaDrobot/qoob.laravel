$(window).on('load', function () {
    $preloader = $('.loaderArea'),
        $loader = $preloader.find('.loader');
    document.querySelector("#pre-letters").classList.add("letters-out-animation-v-line");
    setTimeout(function () {
        document.querySelector("#pre-letters").classList.add("letters-out-animation");
    },300);
    setTimeout(function() {
        $loader.fadeOut();
        $preloader.delay(350).fadeOut('slow');
    }, 2000);
});