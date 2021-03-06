# giada-bootstrap-template
Giada is a simple, multi-purpose HTML5 template made with Bootstrap. It comes with the following features:
<ul>
	<li>full width image carousel</li>
	<li>3 services pages</li>
	<li>customizable timeline</li>
	<li>1 about page</li>
	<li>Google map in JS</li>
	<li>contact form in PHP</li>
</ul>

# How to change carousel images
<ul>
	<li>Open the "img" folder</li>
	<li>Replace carousel1.jpg, carousel2.jpg and carousel3.jpg with your own images (it's better if you keep their names, or else you'll have to replace them all in the code) </li>
</ul>
<b>Important:</b> Recomended size for carousel images is 1300x550px. If you want to change the carousel height, go to style.css and edit this class:
	
		header.carousel {
		 height: 550px;
  	}
	
# How to change images overlay color

The overlay colors are applied via CSS gradient. 
They MUST be in rgba  (I suggest an opacity value of 0.8).
<ul>
	<li>Open the "style.css" file located in css folder</li>
	<li>To change home page carousel overlay, find the following class:</li>
		 <code>
			.overlay {
				background:linear-gradient(to bottom, rgba(255,67,0,.7) 0%,rgba(79,79,79,.8) 99%)
			 }
		</code> and replace the rgba tint with you own one.
	<li>To change the overlay color of jumbotrons above each section, find its related CSS class and replace the rgba color valure. Jumbotron classes are named after the ID of the div.  </li>
<code>
div#tours.jumbotron {
background: linear-gradient(to bottom, rgba(255, 185, 78, .8) 0%,rgba(0,0,0,.8) 99%), url(../img/carousel1.jpg) no-repeat 50% fixed;
}
</code>
	<li>Same goes for fixed images in the middle of the page. The CSS IDs are <code>#parallaxOne</code>, two and so on (each one has a comment above it to define the exact location)</li>
</ul>

# How to change Google map coordinates 
<ul>
	<li>Open the "contact.html" file </li>
	<li>Above the page content, you'll find the Google map script</li>
	<li>Find the following lines in the script:
		<code>
			var myCenter = new google.maps.LatLng(47.050736, 8.307855);
		</code>
		and
		<code>
			var myLatlng = new google.maps.LatLng(47.050736, 8.307855);
		</code>
		and replace the coordinates with your own ones
	In order to find the coordinates of your company just seach it on Google maps, right-click on the location and select "What's here?"</li>
</ul>

# How to change contact form recipient
<ul>
	<li>Open the "contact.php" file</li>
	<li>Replace "your@email.com" with your e-mail address</li>
