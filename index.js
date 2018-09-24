var burger = document.getElementById("burger-button");

function close_menu() {
    document.body.classList.toggle("open");
    burger.classList.toggle("open");
}
/*
classList property returns the class name(s) of an element. It's read-only, but to modify use add() remove() and toggle() methods.
*/



burger.addEventListener("click", function (e) {  /*  event handler 'click' is attached to the "burger-button" element  */
    e.preventDefault();   /*  the default action of the event will not be triggered when buger clicked */
    close_menu();   /*  then toggle the 'open' class, which closes the menu */
});

/*  Use the element.removeEventListener() method remove the 'click' event handlers from "burger-menu" in a more sophisticated design - Good practice  */




/***************************  SMOOTH SCROLL **************************/

// http://www.abeautifulsite.net/smoothly-scroll-to-an-element-without-a-jquery-plugin-2/


$('a[href^="#"]').on('click', function(event) {

    var target = $( $(this).attr('href') );   /* assign to 'target' the attributes of the anchor clicked */

    if( target.length ) {   /*  if target length isnt zero */
        event.preventDefault();
        $('html, body').animate({   
            scrollTop: target.offset().top
        }, 1000);
        /* animate the body using scrollTop, to the href attribute of the anchor clicked, for 1 second duration */
    }

});


/****************** DRAW SHADE TRIANGLE FUNCTION *********************/

function draw_triangle(ctx_width, ctx_height, top_h, element, x_origin, y_origin, x_shift, y_shift){
    
    var c = document.getElementById(element);
    var context = c.getContext("2d");
    
    $("#"+element).attr({width:ctx_width, height:ctx_height});
    $("#"+element).css({width: "ctx_width"+"px", height: "ctx_height"+"px", top:"top_h"+"px"}); 
    
    context.beginPath();   // Draw a path
    
        context.moveTo(x_origin, y_origin);   // Top Corner origin
        context.lineTo(x_shift, y_shift);  // Bottom Right
        context.lineTo(x_origin, y_shift);  // Bottom Left
    
    context.closePath();
    context.fillStyle = "#000";  // Fill the path
    context.fill(); 
}

/****************** SHADE AND LAPTOP ANGLE *********************/

function shade1(h1, w1){
    var top_height = 0;
    draw_triangle(w1, h1, top_height, "canvasShade1" ,0, 0, w1, h1);
}


function shade2(h1, w1){
    var half_width = w1/2;
    var s_height = $("#codeHere").height() + 270 + $(".cta").height();
    draw_triangle(w1, s_height, h1, "canvasShade2", w1, 0, half_width, s_height);
}

var h1 = $("#lapTitWrap").height() + $("#aboutHere").height() + 50;
var w1 = $("#top").width();

window.onload = shade1(h1, w1);   /*  Draw shades when page loads  */
window.onload = shade2(h1, w1);

$(window).resize(function() {  /* keep redrawing shade when page re-sized */
    var h1 = $("#lapTitWrap").height() + $("#aboutHere").height() + 50;
var w1 = $("#top").width();
    shade1(h1, w1);
    shade2(h1, w1);
});