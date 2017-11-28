"use strict"
var menus = document.querySelectorAll(".menu");
var sousMenus =  document.querySelectorAll(".sous-menu");

function show () {
    for (let i=0; i<menus.length; i++){
        menus[i].addEventListener("mouseover", function(){
            let sousMenu = this.querySelector(".sous-menu");
            
            sousMenu.style.display = "block";
        })
        
        menus[i].addEventListener("mouseleave", function(){
            let sousMenu = this.querySelector(".sous-menu");
              
            sousMenu.style.display = "none";
    })
}
}

document.addEventListener("DOMContentLoaded", function() {
    show();
})