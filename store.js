

window.onscroll = function(){
    MenuFunction()
};
var StickyNav =document.getElementById("StickyNav");
var menustick = StickyNav.offsetTop;
function MenuFunction(){
    if(menustick <= window.pageYOffset){
        StickyNav.classList.add("stick")
    } else {
        StickyNav.classList.remove("stick")
    }
}



function openCart() {
    document.getElementById("TheCart").style.display = "block";
    }

function closeCart() {
    document.getElementById("TheCart").style.display = "none";
    }

