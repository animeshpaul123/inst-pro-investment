/*var nav = document.getElementById('nav');
window.onscroll = function () { 
    "use strict";
    if (document.body.scrollTop >= 400 ) {
        nav.classList.add("scroll");
        nav.classList.remove("nav");
    } 
    else if(document.body.scrollTop <= 400){*/
        /*nav.classList.add("menu");
        nav.classList.remove("scroll");
    }		
};*/
/*sure you must have 2 classes

.nav-colored { background-color:#000; }
.nav-transparent { background-color:transparent;}*/

$(window).scroll(function(){
	if($(document).scrollTop() > 600){
		$(".cd-dropdown-trigger").addClass("scroll");
		$(".cd-dropdown-trigger:after").addClass("scroll-new");
	}
	else {
		$(".cd-dropdown-trigger").removeClass("scroll");
	}
});

var logo = document.querySelector(".logo");
var rotate = document.getElementById("rotate");
var isTilt = true;
logo.addEventListener("click", function(){
	
	if (isTilt) {
		rotate.classList.add("rotate1");
		rotate.classList.remove("rotate2");
		isTilt = false;
	}
	else {
		rotate.classList.remove("rotate1");
		rotate.classList.add("rotate2");
		isTilt = true;
	}
});