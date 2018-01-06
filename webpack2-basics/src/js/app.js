import { showButton, showText } from "./dom-loader";

var isShow = false;

//var showButton = document.querySelector("#show-btn");
//var showText = document.querySelector("#show-text");

showButton.addEventListener("click", toggleText);

function toggleText() {
	if (isShow) {
		showText.textContent = "WOW Show";
	} else {
		showText.textContent = "";
	}
	isShow = !isShow;
}