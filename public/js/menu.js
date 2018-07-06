let findNCenter = function() {
    let elems = document.querySelectorAll('.center-vertical');
    for(let i =0; i<elems.length; i++) {
        elems[i].style.marginTop = (elems[i].parentNode.offsetHeight - elems[i].offsetHeight)/2 + 'px';
    }
};
document.addEventListener && document.addEventListener('DOMContentLoaded', findNCenter);
window.addEventListener && window.addEventListener('resize', findNCenter);
$(document).ready(function() {
    let count = $('#inner p').length;
    let i = 1;
    setInterval(function() {
        if (i < count) {
            $('#inner').css('-webkit-transform','translate3d(0,-' + i + '00%,0)');
            i++;
        }
    }, 800);
});
let mainMenuBtn = document.getElementById("main-hum");
let mainMenu = document.getElementById("main-menu");
let visiable = false;
mainMenuBtn.addEventListener("click",vis);
function vis(){
    if(visiable===false){
        visiable = true;
        $(".navbar-brand").fadeOut('slow');
        $('#overlay').toggleClass('open');
        mainMenu.classList.add("cross-menu");
    }else{
        visiable = false;
        $(".navbar-brand").fadeIn('slow');
        $('#overlay').toggleClass('open');
        mainMenu.classList.remove("cross-menu");
    }
}