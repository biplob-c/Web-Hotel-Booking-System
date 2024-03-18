<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style\booking.css">
    <title>Booking</title>
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
    <section class="booking-form">
        <h2 style="color:orange;">Book Your Stay</h2>
        <form action="booking_process.php" method="post">
            <label for="check-in">Check-In Date:</label>
            <input type="date" id="check-in" name="check-in" required>

            <label for="check-out">Check-Out Date:</label>
            <input type="date" id="check-out" name="check-out" required>

            <label for="guests">Number of Guests:</label>
            <input type="number" id="guests" name="guests" required>

            <button type="submit">Book Now</button>
        </form>
    </section>

    <footer>
        <p>&copy; TravelBD.com reserves all rights.</p>
    </footer>
</body>
</html>