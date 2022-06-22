$(window).resize(function(){
    console.log('resize called');
    var width = $(window).width();
    let Hmenu_cart_drop=document.querySelector(".Hmenu_cart_drop");
    if(width < 850){
        console.log("xoa");
        console.log("them vao function");
        Hmenu_cart_drop.classList.remove("Hmenu_cart_drop-hover");
    }
    else{
        Hmenu_cart_drop.classList.add("Hmenu_cart_drop-hover");
    }
 })
 .resize();//trigger the resize event on page load.


let cart_drop=()=>{
    let Hmenu_cart_drop=document.querySelector(".Hmenu_cart_drop");
    let Hmenu_cart_close=document.querySelector(".Hmenu_cart_close")
    Hmenu_cart_drop.classList.toggle("Hmenu_cart_toggle");
    Hmenu_cart_close.classList.toggle("Hmenu_cart_close-toggle");
};
let cart_close=()=>{
    let Hmenu_cart_drop=document.querySelector(".Hmenu_cart_drop");
    Hmenu_cart_drop.classList.remove("Hmenu_cart_toggle");
};