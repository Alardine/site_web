"use strict";
/*
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
});*/
var ctp = 0;
var article = document.querySelectorAll(".slider article");
var activeSlide;
var fig = document.querySelector("#slider");

function slide() {

    if (ctp < article.length - 1) {
        ctp++;
    } else {
        ctp = 0;
    }
    //console.log(ctp);
    document.querySelector("#slide1").id = "";
    article[ctp].setAttribute("id", "slide1");
}

function slideOn() {
    activeSlide = window.setInterval(slide, 4000);
}

function slideOff() {
    clearInterval(activeSlide);
}
document.addEventListener("DOMContentLoaded", function () {
    slideOn();
    fig.addEventListener("mouseover", slideOff);
    fig.addEventListener("mouseleave", slideOn);
});
