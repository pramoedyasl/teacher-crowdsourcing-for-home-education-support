window.onscroll = function() {scrollFunction()};

function scrollFunction(){
	var navbar = document.getElemetById("navbar");
	var sign = document.getElemetById("btn-sign");
	var login = document.getElemetById("btn-login");
	
	if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
		navbar.classList.add("shadow");
		navbar.classList.add("bg-white");
		navbar.classList.remove("mt-3");
		sign.classList.remove("bg-custom");
		sign.classList.add("bg-custom-sm");
	} else {
		navbar.classList.remove("shadow");
		navbar.classList.remove("bg-white");
		navbar.classList.add("mt-3");
		sign.classList.add("bg-custom");
		sign.classList.remove("bg-custom-sm");
	}
}