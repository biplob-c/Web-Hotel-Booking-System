<!-- Created by Biplob Chakma -->
<!DOCTYPE html>
<html lang="en-US">
<html>
<head>
	<title>Sign In</title>
	<link rel="stylesheet" href="style/signin.css">
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
				<li><a href="signin.php" target="_blank">Login</a></li>
			</ul>
        </nav>
    </header>
	
	<div class="signup-box">
		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
			<h1>Sign in</h1>
				<label>Username</label>
				<input type="text" placeholder="Enter username..." name="username">
				<label>Password</label>
				<input type="password" placeholder="Enter password..." name="pass" id="password"> <br><br>
				
				<!--<label>Confirm Password</label>
				<input type="password" placeholder="Enter password..."> -->
				<!--<button type="button">Login</button> -->
				<!--<input type="submit" value="Login" id="submit" name="login"> -->
				<input type="submit" value="Login" id="submit" name="login" style=" width: 315px; height: 35px; margin-top: 10px; color: white; text-align: center; background-color: #49c1a2;">
			
		</form>
	</div>
	
	<footer>
		<p>All rights reserved by TravelBD.com</p>
	</footer>
</body>
</html>


<?php
error_reporting(0);
require('db.php');

session_start();

if (isset($_POST["login"])) {

    $username = "'" . $_POST['username'] . "'";
    $pass = "'" . $_POST['pass'] . "'";

    $sql = "SELECT * FROM signup_details WHERE username = $username and password = $pass";
    $result = mysqli_query($conn, $sql);

    if ($result->num_rows > 0) {
        $_SESSION['username'] = $username;
        header('location:dashboard.php');
    } 
    else {
        echo "<script>alert('username & password didn\'t match.'); window.location.href='login_page.php#form';</script>";
    }
}

?>
