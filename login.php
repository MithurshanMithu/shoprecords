<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbshoprecords";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


			if( $_POST['uname'] == "Mathu" and $_POST['psw'] == "Mathu97"){
				
				 header('Location: home.php');
				
			}else{
				
				 header('Location: index.php');
				
			}















?>