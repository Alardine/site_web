"use strict";

function menuToggle(){
   /*  $("#liste ul li>ul").hide();
    $("#liste ul li").click(function(){
         $("#liste ul li ul").toggle("slow");
    });*/

}

function openModal(){
        $(".backG").hide();
        $("#modal").hide();
        $("#logmodal").hide();
    $("#addModal").click(function(){
        $("#modal").show();
        $(".backG").show();      
    });
    $("#co").click(function(){
        $("#logmodal").show();
        $(".backG").show();
    });
    
    $(".close-modal").click(function(){
        $("#modal").hide();
        $(".backG").hide();
        $("#logmodal").hide();
    });
    $(".backG").click(function(){
        $("#modal").hide();
        $(".backG").hide();
        $("#logmodal").hide();
    });
}

$(document).ready(function(){
    menuToggle();openModal();
});
