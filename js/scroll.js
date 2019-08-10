$(window).scroll(function(){
	var $top = $(document).scrollTop();
	if($top > 500){
		$("#nav").addClass("scroll");
	}
	else {
		$("#nav").removeClass("scroll");
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