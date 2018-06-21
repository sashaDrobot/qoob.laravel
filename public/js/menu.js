let mainMenuBtn = document.getElementById("main-hum");
let menuBg = document.getElementById("menu-bg");
let rightMneu = document.getElementById("rightside-menu");
let mainMenu = document.getElementById("main-menu");
let visiable = false;
mainMenuBtn.addEventListener("click",vis);
function vis(){
    if(visiable===false){
        visiable = true;
        mainMenu.classList.add("cross-menu");
        menuBg.classList.add("colored-menu-bg");
        rightMneu.classList.remove("hidden-menu");
    }else{
        visiable = false;
        mainMenu.classList.remove("cross-menu");
        menuBg.classList.remove("colored-menu-bg");
        rightMneu.classList.add("hidden-menu");
    }
}