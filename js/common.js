var menuLi = document.querySelectorAll(".menu-li");

menuLi.addEventListener("click", function(){
	this.classList.toggle("open");
});

function cordFunction() {

	var accord = document.getElementByClassName("accord");

for(var i = 0; i < accord.length; i++) {
	accord[i].addEventListener("click", function(){
		this.classList.toggle("active");
		var pannel = this.nextElementSibling;
		if(pannel.style.display === "block") {
			pannel.style.display = "none";
		}
		else {
			pannel.style.display = "block";
		}
	});
}
}
