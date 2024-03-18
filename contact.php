<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style\contact.css">
    <title>Contact Us</title>
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
				<li><a href="index.php" target="_blank" target="_blank">Home</a></li>
				<li><a href="room&charges.php" target="_blank">Room and Charges</a></li>
				<li><a href="services.php" target="_blank">Services</a></li>
				<li><a href="dine.php" target="_blank">Dine</a></li>
				<li><a href="transport.php" target="_blank">Transport</a></li>
				<li><a href="contact.php" target="_blank">Contact</a></li>
				<li><a href="booking.php" target="_blank">BOOK NOW</a></li>
				<li><a href="register.php" target="_blank">Register</a></li>
				<li><a href="signin.php" target="_blank">Login</a></li>
			</ul>
        </nav>
    </header>

    <section class="contact-form">
        <h1 style="color:skyblue;">Contact with us...</h1>
		<form action="submit_contact.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email address:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="4" required></textarea>

            <button type="submit">Submit</button>
        </form>
    </section>

    <footer>
        <p>&copy; All rights reserved by TravelBD.com</p>
    </footer>
</body>
</html>