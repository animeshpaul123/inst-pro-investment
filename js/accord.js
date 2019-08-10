
var accord = document.getElementsByClassName("accord");

for(var i = 0; i < accord.length; i++) {
	accord[i].addEventListener("click", function(){
		this.classList.toggle("active");
		var pannel = this.nextElementSibling;
		if(pannel.style.maxHeight) {
			pannel.style.maxHeight = null;
		}
		else {
			pannel.style.maxHeight = pannel.scrollHeight + "px";
		}
	});
}