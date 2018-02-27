<div class="headerDiv nestedDivs" id="headerDiv">
	<div class="sliderDiv">
		<!--The slide images and the slide texts-->			
		<div class="slides fadeOut">
			<div class="slideText">Enter slide one text</div>
			<img class="slideImage" src="images/slideOne2.jpg" alt="">
		</div>

		<div class="slides fadeOut">
			<div class="slideText">Enter slide two text</div>
			<img class="slideImage" src="images/slideTwo.jpg" alt="">
		</div>

		<div class="slides fadeOut">
			<div class="slideText">Enter slide one text this is the GTX 2080 TI the best ever in the marked currently</div>
			<img class="slideImage" src="images/tech.jpg" alt="">
		</div>

		<!--The buttons and the icons-->			
		<div class="previewsSlide">						
			<button type="button" class="slideButton" onclick="prevSlide()">
				<svg class="buttonIcon">
				<defs>
				<symbol id="buttonIconLeft" viewBox="0 0 32 32">
					<path d="M20.914 9.914l-2.829-2.829-8.914 8.914 8.914 8.914 2.828-2.828-6.086-6.086z"></path>
				</symbol>
				</defs>
				<use xlink:href="#buttonIconLeft"></use>
				</svg>
			</button>
		</div>

		<div class="nextSlide">
			<button type="button" class="slideButton" onclick="nextSlide()">
				<svg class="buttonIcon">
				<defs>
				<symbol id="buttonIconRight" viewBox="0 0 32 32">
					<path d="M11.086 22.086l2.829 2.829 8.914-8.914-8.914-8.914-2.828 2.828 6.086 6.086z"></path>
				</symbol>
				</defs>
				<use xlink:href="#buttonIconRight"></use>
				</svg>
			</button>				
		</div>

		<!--The bubbles/dots/image number indicator-->
		<div class="bubbleContainer" style="text-align:center">
			<span class="bubble" onclick="displaySelectedSlide(1)"></span> 
			<span class="bubble" onclick="displaySelectedSlide(2)"></span> 
			<span class="bubble" onclick="displaySelectedSlide(3)"></span> 
		</div>

	</div>
	<script src="script/sliderScript.js"></script>
</div>