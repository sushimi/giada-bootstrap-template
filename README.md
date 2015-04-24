# giada-bootstrap-template
Giada is a simple, multi-purpose HTML5 template made with Bootstrap.

It comes with the following features:
- full width image carousel 
- 3 services pages
- customizable timeline
- 1 about page
- Google map in JS
- contact form in PHP

# 1. How to change carousel images
- Open the "img" folder
- Replace carousel1.jpg, carousel2.jpg and carousel3.jpg with your own images (it's better if you keep their names, or else you'll have to replace them all in the code) 

<b>Important:</b> Recomended size for carousel images is 1300x550px. If you want to change the carousel height, go to style.css and edit this class:
<code>
header.carousel {
  height: 550px;
  }
</code>

# 2. How to change images overlay color
The overlay colors are applied via CSS gradient. 
They MUST be in rgba - I suggest an opacity value of 0.8.

- Open the "style.css" file located in css folder
- To change home page carousel overlay, find the following class:
 <code>
.overlay {
background:linear-gradient(to bottom, rgba(255,67,0,.7) 0%,rgba(79,79,79,.8) 99%)
 }
</code> and replace the rgba tint with you own one.
- To change the overlay color of jumbotrons above each section, find its related CSS class and replace the rgba color valure. Jumbotron classes are named after the ID of the div.  
 <code>
div#tours.jumbotron {
background: linear-gradient(to bottom, rgba(255, 185, 78, .8) 0%,rgba(0,0,0,.8) 99%), url(../img/carousel1.jpg) no-repeat 50% fixed;
}
</code>
- Same goes for fixed images in the middle of the page. The CSS IDs are <code>#parallaxOne</code>, two and so on (each one has a comment above it to define the exact location)
# 3. How to change Google map coordinates 
- Open the "contact.html" file 
- Above the page content, you'll find the Google map script
- Find the following lines in the script:
<code>
var myCenter = new google.maps.LatLng(47.050736, 8.307855);
</code>
and
<code>
var myLatlng = new google.maps.LatLng(47.050736, 8.307855);
</code>
and replace the coordinates with your own ones
- In order to find the coordinates of your company just seach it on Google maps, right-click on the location and select "What's here?"
# 4. How to change contact form recipient
- Open the "contact.php" file
- Replace "your@email.com" with your e-mail address
