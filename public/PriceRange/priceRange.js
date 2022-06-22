window.onload = function(){
    slideOne();
    slideTwo();
}

let sliderOne = document.getElementById("PriceRange_min");
let sliderTwo = document.getElementById("PriceRange_max");
let displayValOne = document.getElementById("min");
let displayValTwo = document.getElementById("max");
let minGap = 0;
let sliderTrack = document.querySelector(".PriceRange_line");
let sliderMaxValue = document.getElementById("PriceRange_min").max;

function slideOne(){
    if(parseInt(sliderTwo.value) - parseInt(sliderOne.value) <= minGap){
        sliderOne.value = parseInt(sliderTwo.value) - minGap;
    }
    displayValOne.textContent = Intl.NumberFormat().format(sliderOne.value);
    fillColor();
}
function slideTwo(){
    if(parseInt(sliderTwo.value) - parseInt(sliderOne.value) <= minGap){
        sliderTwo.value = parseInt(sliderOne.value) + minGap;
    }
    displayValTwo.textContent = Intl.NumberFormat().format(sliderTwo.value);
    fillColor();
}
function fillColor(){
    percent1 = (sliderOne.value / sliderMaxValue) * 100;
    percent2 = (sliderTwo.value / sliderMaxValue) * 100;
    sliderTrack.style.background = `linear-gradient(to right, #dadae5 ${percent1}% , #3264fe ${percent1}% , #3264fe ${percent2}%, #dadae5 ${percent2}%)`;
}