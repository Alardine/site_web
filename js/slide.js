"use strict";

var fig = document.querySelector("#slider");
var imgs = document.querySelectorAll("#slider article");
var sliding = 0;
var limit = -fig.offsetWidth*imgs.length;  
var activeSlide;

function slide()
{
    if(sliding>limit)
    {
        sliding -= fig.offsetWidth;
        fig.style.left=sliding+"px";
    }
    if(sliding<=limit)
    {
        sliding=0;
        fig.style.left="0px";
    }  

}
function slideOn()
{
    activeSlide = window.setInterval(slide,4000);
}
function slideOff()
{
    clearInterval(activeSlide);
}
document.addEventListener("DOMContentLoaded",function(){
    slideOn();
    fig.addEventListener("mouseover",slideOff);
    fig.addEventListener("mouseleave",slideOn);
});