<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbshoprecords";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ( $_POST['csname'] == "Himalaya"){
	
		$query = "SELECT * FROM tblhimalaya WHERE ShopName='{$_POST['scname']}'" ;
					 $result = mysqli_query($conn, $query);
					 $row = mysqli_fetch_array($result);
		 
					$_SESSION["c1"] = $row['cname'];
					$_SESSION["s1"] = $row['ShopName'];
					$_SESSION["a1"] =$row['AccBalance'];
					 
					
					 
	}elseif ( $_POST['csname'] == "Encanteur"){
		
		$query = "SELECT * FROM tblencanteur WHERE ShopName='{$_POST['scname']}'" ;
					 $result = mysqli_query($conn, $query);
					 $row = mysqli_fetch_array($result);
		 
					$_SESSION["c1"] = $row['cname'];
					$_SESSION["s1"] = $row['ShopName'];
					$_SESSION["a1"] =$row['AccBalance'];
					 
					 
	}elseif ( $_POST['csname'] == "Center"){
		$query = "SELECT * FROM tblcenterfresh WHERE ShopName='{$_POST['scname']}'" ;
					 $result = mysqli_query($conn, $query);
					 $row = mysqli_fetch_array($result);
					 
					$_SESSION["c1"] = $row['cname'];
					$_SESSION["s1"] = $row['ShopName'];
					$_SESSION["a1"] =$row['AccBalance'];
					 
					 
	}elseif	( $_POST['csname'] == "Mint"){
		$query = "SELECT * FROM tblmintrec WHERE ShopName='{$_POST['scname']}'" ;
					 $result = mysqli_query($conn, $query);
					 $row = mysqli_fetch_array($result);
					 
					$_SESSION["c1"] = $row['cname'];
					$_SESSION["s1"] = $row['ShopName'];
					$_SESSION["a1"] =$row['AccBalance'];
		
}	

				 

header('Location: updatepple.php');
?> 

document.getElementById("sname").value = "<?php echo $_SESSION["s1"]; ?>";			
document.getElementById("acBalance").value = <?php echo $_SESSION["a1"]; ?>;
	