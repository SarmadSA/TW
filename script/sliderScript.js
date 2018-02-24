var currentSlideNumber = 1;
var slidesArray = document.getElementsByClassName("slides");
var bubbleArray = document.getElementsByClassName("bubble");

displaySelectedSlide(currentSlideNumber); // runs at the start only
autoSlider(10000);// auto slider, repeats every 10 seconds (maybe not good for prefomance, uses unnessery server resurses? remove it?)

function increaseSlide(){
	"use strict";
	currentSlideNumber++;
	if (currentSlideNumber > slidesArray.length) {
		currentSlideNumber = 1;
 	}  
}

function decreaseSlide(){
	"use strict";
	currentSlideNumber--;
	if (currentSlideNumber < 1) {
		currentSlideNumber = slidesArray.length;
 	}
}

function hideAllSlides(){
	"use strict";
	for (var i = 0; i < slidesArray.length; i++) {
		slidesArray[i].style.display = "none"; 
		bubbleArray[i].className = bubbleArray[i].className.replace(" active", ""); // replaces all bubble elements with class name active to "". 
	}
}

function showSelectedSlide(number){
	"use strict";
	slidesArray[number - 1].style.display = "block";
	bubbleArray[number - 1].className += " active"; // sets the class name of the selected bubble to active (active in css will change element color).
}

function displaySelectedSlide(number){
	"use strict";
	hideAllSlides();
	showSelectedSlide(number);
	currentSlideNumber = number;  	/*I have added this line because I am using this function for the bubbles buttons. When clicking on a bubble the 													currentSlidenumber should update.*/ 
}

function prevSlide(){	//used in HTML "onClick".
	"use strict";
	decreaseSlide();
	hideAllSlides();
	showSelectedSlide(currentSlideNumber);
}

function nextSlide(){	//used in HTML "onClick".
	"use strict";
	increaseSlide();
	hideAllSlides();
	showSelectedSlide(currentSlideNumber);
}

function autoSlider(time){
	"use strict";
	setInterval(nextSlide, time);
}