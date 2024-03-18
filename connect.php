<?php
$email =filter_input(INPUT_POST, 'email');
$password =filter_input(INPUT_POST, 'password');
if (!empty($email)){
if (!empty($password)){
$host ="localhost";
$dbusername = "root";
$dbpassword = "";
$dbname= "db_hotel_management"

$conn = new mysqli ($host,$dbemail, $dbpassword, $dbname );

if (mysqli_connect_error()){
	die('Connect Error('. mysqli_connect_error().')'. mysqli_connect_error());
}
else{
	$sql= "INSERT INTO signin (email, password)
	values ('$email','$password')";

if($conn->query($sql)){
	echo "New record is inserted successfully";
}
else{
	echo "Error: ".$sql."<br>" . $conn->error;
}
$conn->close();
}
}

else {
	echo "password should not be empty";
	die();
}
}
else {
	echo "email should not be empty";
	die();
}


?>