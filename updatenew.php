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

// $sql = "INSERT INTO tblhimalaya (pname, cname, Date, InNo, ShopName, GrossSale, Discount, DisAmount, NetSales, Paid, AccBalance) 
								// VALUES ('{$_POST['pname']}','{$_POST['cname']}', '{$_POST['date']}', '{$_POST['inno']}', '{$_POST['shopname']}','{$_POST['grosssale']}', '{$_POST['discount']}', '{$_POST['disamount']}', '{$_POST['netsales']}', '{$_POST['paid']}', '{$_POST['accbalance']}')";

	
if ( $_POST['cname'] == "Himalaya"){
	$query = "SELECT * FROM tblhimalaya WHERE ShopName='{$_POST['shopname']}'" ;
					 $result = mysqli_query($conn, $query);
					 $row = mysqli_fetch_array($result);
							
					if( $row['ShopName'] == $_POST['shopname']){	 
						$gsale = $row['GrossSale'];		
						$discount = $row['Discount']; 						
						$dis = $row['DisAmount'];   
						$net = $row['NetSales'];
						$paid = $row['Paid'];
						$ac = $row['AccBalance'];
						
						$gsale1 = $_POST['grosssale'];	
						$discount1 = $_POST['discount']; 							
						$dis1 = $_POST['disamount'];   
						$net1 = $_POST['netsales'];
						$paid1 = $_POST['paid'];
						$ac1 = $_POST['accbalance'];
						
						$gsale = $gsale + $gsale1;
						$discount = $discount + $discount1;
						$dis = $dis + $dis1;
						$net = $net + $net1;
						$paid = $paid + $paid1;
						$ac = $ac + $ac1;
						
$query2 = "SELECT * FROM tblhimalayarec WHERE InNo='{$_POST['inno']}'" ;
					 $result2 = mysqli_query($conn, $query2);
					 $row2 = mysqli_fetch_array($result2);
					 
					 if ($_POST['grosssale'] == 0){
						 if($row2['AccBalance'] > 0){
							$billpayment = $row2['AccBalance'] + $_POST['accbalance'];
							$sql2 = "UPDATE tblhimalayarec SET AccBalance = '{$billpayment}' WHERE InNo='{$_POST['inno']}'";
							} }	

						
$sql = "UPDATE tblhimalaya SET  Date= '{$_POST['date']}',GrossSale= '{$gsale}',Discount='{$discount}',DisAmount='{$dis}',NetSales='{$net}',Paid='{$paid}' , AccBalance = '{$ac}' WHERE ShopName = '{$_POST['shopname']}'";														
$sqll = "INSERT INTO tblhimalayarec (placename, cname, Date, InNo, ShopName, GrossSale, Discount, DisAmount, NetSales, Paid, AccBalance) 
								VALUES ('{$_POST['pname']}','{$_POST['cname']}', '{$_POST['date']}', '{$_POST['inno']}', '{$_POST['shopname']}', '{$_POST['grosssale']}', '{$_POST['discount']}', '{$_POST['disamount']}', '{$_POST['netsales']}', '{$_POST['paid']}', '{$_POST['accbalance']}')";
					
if ($conn->query($sqll) === TRUE) {
    header('Location: home.php');
}						
																							
 if ($conn->query($sql) === TRUE) {
     header('Location: home.php');
 }	
 if ($conn->query($sql2) === TRUE) {
     header('Location: home.php');
 }
$conn->close();
					}else{
						
						echo "<script> alert('Shop Not In DataBase');</script>";
						
						
					}


 }elseif ( $_POST['cname'] == "Encanteur") {

	$query = "SELECT * FROM tblhimalaya WHERE ShopName='{$_POST['shopname']}'" ;
	$result = mysqli_query($conn, $query);
	$row = mysqli_fetch_array($result);
		   
   if( $row['ShopName'] == $_POST['shopname']){	 
	   $gsale = $row['GrossSale'];		
	   $discount = $row['Discount']; 						
	   $dis = $row['DisAmount'];   
	   $net = $row['NetSales'];
	   $paid = $row['Paid'];
	   $ac = $row['AccBalance'];
	   
	   $gsale1 = $_POST['grosssale'];	
	   $discount1 = $_POST['discount']; 							
	   $dis1 = $_POST['disamount'];   
	   $net1 = $_POST['netsales'];
	   $paid1 = $_POST['paid'];
	   $ac1 = $_POST['accbalance'];
	   
	   $gsale = $gsale + $gsale1;
	   $discount = $discount + $discount1;
	   $dis = $dis + $dis1;
	   $net = $net + $net1;
	   $paid = $paid + $paid1;
	   $ac = $ac + $ac1;
	   
$query2 = "SELECT * FROM tblhimalayarec WHERE InNo='{$_POST['inno']}'" ;
	$result2 = mysqli_query($conn, $query2);
	$row2 = mysqli_fetch_array($result2);
	
	if ($_POST['grosssale'] == 0){
		if($row2['AccBalance'] > 0){
		   $billpayment = $row2['AccBalance'] + $_POST['accbalance'];
		   $sql2 = "UPDATE tblhimalayarec SET AccBalance = '{$billpayment}' WHERE InNo='{$_POST['inno']}'";
		   } }	

	   
$sql = "UPDATE tblhimalaya SET  Date= '{$_POST['date']}',GrossSale= '{$gsale}',Discount='{$discount}',DisAmount='{$dis}',NetSales='{$net}',Paid='{$paid}' , AccBalance = '{$ac}' WHERE ShopName = '{$_POST['shopname']}'";														
$sqll = "INSERT INTO tblhimalayarec (placename, cname, Date, InNo, ShopName, GrossSale, Discount, DisAmount, NetSales, Paid, AccBalance) 
			   VALUES ('{$_POST['pname']}','{$_POST['cname']}', '{$_POST['date']}', '{$_POST['inno']}', '{$_POST['shopname']}', '{$_POST['grosssale']}', '{$_POST['discount']}', '{$_POST['disamount']}', '{$_POST['netsales']}', '{$_POST['paid']}', '{$_POST['accbalance']}')";
   
if ($conn->query($sqll) === TRUE) {
header('Location: home.php');
}						
																		   
if ($conn->query($sql) === TRUE) {
header('Location: home.php');
}	
if ($conn->query($sql2) === TRUE) {
header('Location: home.php');
}
$conn->close();
   }else{
	   
	   echo "<script> alert('Shop Not In DataBase');</script>";
	   
	   
   }
 
}elseif ( $_POST['cname'] == "Center") {

	$query = "SELECT * FROM tblhimalaya WHERE ShopName='{$_POST['shopname']}'" ;
	$result = mysqli_query($conn, $query);
	$row = mysqli_fetch_array($result);
		   
   if( $row['ShopName'] == $_POST['shopname']){	 
	   $gsale = $row['GrossSale'];		
	   $discount = $row['Discount']; 						
	   $dis = $row['DisAmount'];   
	   $net = $row['NetSales'];
	   $paid = $row['Paid'];
	   $ac = $row['AccBalance'];
	   
	   $gsale1 = $_POST['grosssale'];	
	   $discount1 = $_POST['discount']; 							
	   $dis1 = $_POST['disamount'];   
	   $net1 = $_POST['netsales'];
	   $paid1 = $_POST['paid'];
	   $ac1 = $_POST['accbalance'];
	   
	   $gsale = $gsale + $gsale1;
	   $discount = $discount + $discount1;
	   $dis = $dis + $dis1;
	   $net = $net + $net1;
	   $paid = $paid + $paid1;
	   $ac = $ac + $ac1;
	   
$query2 = "SELECT * FROM tblhimalayarec WHERE InNo='{$_POST['inno']}'" ;
	$result2 = mysqli_query($conn, $query2);
	$row2 = mysqli_fetch_array($result2);
	
	if ($_POST['grosssale'] == 0){
		if($row2['AccBalance'] > 0){
		   $billpayment = $row2['AccBalance'] + $_POST['accbalance'];
		   $sql2 = "UPDATE tblhimalayarec SET AccBalance = '{$billpayment}' WHERE InNo='{$_POST['inno']}'";
		   } }	

	   
$sql = "UPDATE tblhimalaya SET  Date= '{$_POST['date']}',GrossSale= '{$gsale}',Discount='{$discount}',DisAmount='{$dis}',NetSales='{$net}',Paid='{$paid}' , AccBalance = '{$ac}' WHERE ShopName = '{$_POST['shopname']}'";														
$sqll = "INSERT INTO tblhimalayarec (placename, cname, Date, InNo, ShopName, GrossSale, Discount, DisAmount, NetSales, Paid, AccBalance) 
			   VALUES ('{$_POST['pname']}','{$_POST['cname']}', '{$_POST['date']}', '{$_POST['inno']}', '{$_POST['shopname']}', '{$_POST['grosssale']}', '{$_POST['discount']}', '{$_POST['disamount']}', '{$_POST['netsales']}', '{$_POST['paid']}', '{$_POST['accbalance']}')";
   
if ($conn->query($sqll) === TRUE) {
header('Location: home.php');
}						
																		   
if ($conn->query($sql) === TRUE) {
header('Location: home.php');
}	
if ($conn->query($sql2) === TRUE) {
header('Location: home.php');
}
$conn->close();
   }else{
	   
	   echo "<script> alert('Shop Not In DataBase');</script>";
	   
	   
   }
	
}elseif ( $_POST['cname'] == "Mint") {
	$query = "SELECT * FROM tblhimalaya WHERE ShopName='{$_POST['shopname']}'" ;
	$result = mysqli_query($conn, $query);
	$row = mysqli_fetch_array($result);
		   
   if( $row['ShopName'] == $_POST['shopname']){	 
	   $gsale = $row['GrossSale'];		
	   $discount = $row['Discount']; 						
	   $dis = $row['DisAmount'];   
	   $net = $row['NetSales'];
	   $paid = $row['Paid'];
	   $ac = $row['AccBalance'];
	   
	   $gsale1 = $_POST['grosssale'];	
	   $discount1 = $_POST['discount']; 							
	   $dis1 = $_POST['disamount'];   
	   $net1 = $_POST['netsales'];
	   $paid1 = $_POST['paid'];
	   $ac1 = $_POST['accbalance'];
	   
	   $gsale = $gsale + $gsale1;
	   $discount = $discount + $discount1;
	   $dis = $dis + $dis1;
	   $net = $net + $net1;
	   $paid = $paid + $paid1;
	   $ac = $ac + $ac1;
	   
$query2 = "SELECT * FROM tblhimalayarec WHERE InNo='{$_POST['inno']}'" ;
	$result2 = mysqli_query($conn, $query2);
	$row2 = mysqli_fetch_array($result2);
	
	if ($_POST['grosssale'] == 0){
		if($row2['AccBalance'] > 0){
		   $billpayment = $row2['AccBalance'] + $_POST['accbalance'];
		   $sql2 = "UPDATE tblhimalayarec SET AccBalance = '{$billpayment}' WHERE InNo='{$_POST['inno']}'";
		   } }	

	   
$sql = "UPDATE tblhimalaya SET  Date= '{$_POST['date']}',GrossSale= '{$gsale}',Discount='{$discount}',DisAmount='{$dis}',NetSales='{$net}',Paid='{$paid}' , AccBalance = '{$ac}' WHERE ShopName = '{$_POST['shopname']}'";														
$sqll = "INSERT INTO tblhimalayarec (placename, cname, Date, InNo, ShopName, GrossSale, Discount, DisAmount, NetSales, Paid, AccBalance) 
			   VALUES ('{$_POST['pname']}','{$_POST['cname']}', '{$_POST['date']}', '{$_POST['inno']}', '{$_POST['shopname']}', '{$_POST['grosssale']}', '{$_POST['discount']}', '{$_POST['disamount']}', '{$_POST['netsales']}', '{$_POST['paid']}', '{$_POST['accbalance']}')";
   
if ($conn->query($sqll) === TRUE) {
header('Location: home.php');
}						
																		   
if ($conn->query($sql) === TRUE) {
header('Location: home.php');
}	
if ($conn->query($sql2) === TRUE) {
header('Location: home.php');
}
$conn->close();
   }else{
	   
	   echo "<script> alert('Shop Not In DataBase');</script>";
	   
	   
   }				
								
}



?>