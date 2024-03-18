<!-- Created by Biplob Chakma -->
<!DOCTYPE html>
<html lang="en-US">
<html>
<head>
	<title>TravelBD</title>
	<link rel="stylesheet" href="style/home.css">
</head>
<body>
	<header>
        <div id="logo">
            <a href="index.php" target="_blank">
			<img src="img/logo.png" alt="Company Logo">
			</a>
        </div>
        <nav>
            <ul>
				<li><a href="index.php" target="_blank">Home</a></li>
				<li><a href="room&charges.php" target="_blank">Room and Charges</a></li>
				<li><a href="services.php" target="_blank">Services</a></li>
				<li><a href="dine.php" target="_blank">Dine</a></li>
				<li><a href="transport.php" target="_blank">Transport</a></li>
				<li><a href="contact.php" target="_blank">Contact</a></li>
				<li><a href="booking.php" target="_blank">BOOK NOW</a></li>
				<li><a href="register.php" target="_blank">Register</a></li>
				<li><a href="logout.php" target="_blank">Logout</a></li>
			</ul>
        </nav>
    </header>
	
	
<div><h2></h2></div>	
	
<div>
	<div class="slideshow-container">
		<div class="mySlides fade">
		  <div class="numbertext">1 / 4</div>
		  <img src="img\banner.jpg" style="width:100%">
		  <div class="text">Duplex Suit</div>
		</div>

		<div class="mySlides fade">
		  <div class="numbertext">2 / 4</div>
		  <img src="img\banner1.jpg" style="width:100%">
		  <div class="text">Sea Beach, Cox'sbazar</div>
		</div>

		<div class="mySlides fade">
		  <div class="numbertext">3 / 4</div>
		  <img src="img\banner2.jpg" style="width:100%">
		  <div class="text">Premium Suit!</div>
		</div>
		<div class="mySlides fade">
		  <div class="numbertext">4 / 4</div>
		  <img src="img\banner4.jpg" style="width:100%">
		  <div class="text">Presitent Suit!</div>
		</div>
	</div>
</div>
	<br>
	<div style="text-align:center">
	  <span class="dot"></span> 
	  <span class="dot"></span> 
	  <span class="dot"></span> 
	  <span class="dot"></span>
	</div>

<script>
	let slideIndex = 0;
	showSlides();

	function showSlides() {
	  let i;
	  let slides = document.getElementsByClassName("mySlides");
	  let dots = document.getElementsByClassName("dot");
	  for (i = 0; i < slides.length; i++) {
		slides[i].style.display = "none";  
	  }
	  slideIndex++;
	  if (slideIndex > slides.length) {slideIndex = 1}    
	  for (i = 0; i < dots.length; i++) {
		dots[i].className = dots[i].className.replace(" active", "");
	  }
	  slides[slideIndex-1].style.display = "block";  
	  dots[slideIndex-1].className += " active";
	  setTimeout(showSlides, 2000); // Change image every 2 seconds
	}
</script>

<p>This is for testing</p>
<p>This is for testing</p>
<p>This is for testing</p>
<p>This is for testing</p>
<p>This is for testing</p>
<p>This is for testing</p>
<p>This is for testing</p>
	
	<footer>
		<p>All rights reserved by TravelBD.com</p>
	</footer>
</body>

</html>