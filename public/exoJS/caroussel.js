"use strict";

var descr = document.getElementsByClassName('descr');
for(let elem of descr){
    elem.style.background = 'green';
}

var monCaroussel = document.getElementById("caroussel");
monCaroussel.firstElementChild.style.background = 'orange';
