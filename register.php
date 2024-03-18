<!-- Created by Biplob Chakma -->
<!DOCTYPE html>
<html lang="en-US">
<html>
<head>
	<title>Signup</title>
	<link rel="stylesheet" href="style/signup.css">
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
				<li><a href="index.php" target="_blank">HOME</a></li>
				<li><a href="room&charges.php" target="_blank">ROOM & CHARGES</a></li>
				<li><a href="services.php" target="_blank">SERVICES</a></li>
				<li><a href="dine.php" target="_blank">DINE</a></li>
				<li><a href="transport.php" target="_blank">TRANSPORT</a></li>
				<li><a href="contact.php" target="_blank">CONTACT</a></li>
				<li><a href="booking.php" target="_blank">BOOK NOW</a></li>
				<li><a href="register.php" target="_blank">SIGNUP</a></li>
				<li><a href="signin.php" >LOGIN</a></li>
			</ul>
        </nav>
    </header>
	
	<div class="signup-box">
		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
		<h1>Sign Up</h1>
		<h4>It's free and takes just a moment!</h4>
			<label>Your Name</label>
			<input type="text" placeholder="Your name..." name="name">

			<label>Username</label>
			<input type="text" placeholder="Username..." name="username">
			
			<label>E-mail address</label>
			<input type="text" placeholder="Your email address..." name="email">
			
			<label>Password</label>
			<input type="password" placeholder="Enter password..." name="pass" id="password"> 
			
			<label>Confirm Password</label>
			<input type="password" placeholder="Enter password..." name="pass" id="password"> <br><br>
			
			<!--<input type="submit" value="Sign Up" id="submit" name="submit"> -->
			<input type="submit" value="Sign Up" id="submit" name="submit" style=" width: 315px; height: 35px; margin-top: 10px; color: white; text-align: center; background-color: #49c1a2;">
		</form>
		<p>
			By clicking the Sign Up button, you agree to our <br>
			<a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a>	</p>
	</div>
	<p class="para-2">Already have an account? <a href="#">Login</a>
	
	
	<footer>
		<p>All rights reserved by TravelBD.com</p>
	</footer>
</body>
</html>

<?php
error_reporting(0);
header("cache-control:no-cache");
header("pragma:no-cache");

if (isset($_POST['submit'])) {

    $name = "'" . $_POST['name'] . "'";
    $username = "'" . $_POST['username'] . "'";
    $email = "'" . $_POST['email'] . "'";
    $pass = "'" . $_POST['pass'] . "'";

    require('db.php');

    $today_date = date('Y-m-d');

    $sql = "SELECT * FROM signup_details WHERE username = $username";
    $result = mysqli_query($conn, $sql);

    if ($result->num_rows > 0) {
        echo '<script>alert("Username is existed"); window.location.href=\'register.php#form\';</script>';
    }

    $sql = "SELECT * FROM signup_details WHERE email = $email";
    $result = mysqli_query($conn, $sql);

    if ($result->num_rows > 0) {
        echo '<script>alert("Email is already used."); window.location.href=\'register.php#form\';</script>';
    }
    else {

        $sql = "INSERT INTO `signup_details` (`name`,`username`, `email`, `password`)
                    VALUES ($name, $username, $email, $pass)";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            echo '<script>alert("Signed up successfully, please login."); window.location.href=\'signin.php#form\'; </script>';
        } else {
            echo "<p>Error: " . $sql . "<br>" . $conn->error . "</p>";
        }
    }
}

?>