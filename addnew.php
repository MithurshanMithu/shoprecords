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
if ( $_POST['cname'] == "Himalaya"){
$sql = "INSERT INTO tblhimalaya (placename, Date, ShopName, GrossSale, Discount, DisAmount, NetSales, Paid, AccBalance) 
								VALUES ('{$_POST['pname']}', '{$_POST['date']}','{$_POST['shopname']}', '{$_POST['grosssale']}', '{$_POST['discount']}', '{$_POST['disamount']}', '{$_POST['netsales']}', '{$_POST['paid']}', '{$_POST['accbalance']}')";

$sqll = "INSERT INTO tblhimalayarec (placename, cname, Date, InNo, ShopName, GrossSale, Discount, DisAmount, NetSales, Paid, AccBalance) 
VALUES ('{$_POST['pname']}','{$_POST['cname']}', '{$_POST['date']}', '{$_POST['inno']}', '{$_POST['shopname']}', '{$_POST['grosssale']}', '{$_POST['discount']}', '{$_POST['disamount']}', '{$_POST['netsales']}', '{$_POST['paid']}', '{$_POST['accbalance']}')";

$query = "SELECT InNo FROM tblhimalayarec ORDER BY InNo DESC";
$result = mysqli_query($conn,$query);
$row = mysqli_fetch_array($result);
$lastid = $row['InNo'];

if(empty($lastid))
{
    $number = "IN-0000001";
}
else
{
    $idd = str_replace("IN-", "", $lastid);
    $id = str_pad($idd + 1, 7, 0, STR_PAD_LEFT);
    $number = 'IN-'.$id;
}



}


elseif ( $_POST['cname'] == "Encanteur") {

    $sql = "INSERT INTO tblhimalaya (placename, Date, ShopName, GrossSale, Discount, DisAmount, NetSales, Paid, AccBalance) 
    VALUES ('{$_POST['pname']}', '{$_POST['date']}','{$_POST['shopname']}', '{$_POST['grosssale']}', '{$_POST['discount']}', '{$_POST['disamount']}', '{$_POST['netsales']}', '{$_POST['paid']}', '{$_POST['accbalance']}')";

$sqll = "INSERT INTO tblhimalayarec (placename, cname, Date, InNo, ShopName, GrossSale, Discount, DisAmount, NetSales, Paid, AccBalance) 
VALUES ('{$_POST['pname']}','{$_POST['cname']}', '{$_POST['date']}', '{$_POST['inno']}', '{$_POST['shopname']}', '{$_POST['grosssale']}', '{$_POST['discount']}', '{$_POST['disamount']}', '{$_POST['netsales']}', '{$_POST['paid']}', '{$_POST['accbalance']}')";

$query = "SELECT InNo FROM tblhimalayarec ORDER BY InNo DESC";
$result = mysqli_query($conn,$query);
$row = mysqli_fetch_array($result);
$lastid = $row['InNo'];

if(empty($lastid))
{
$number = "IN-0000001";
}
else
{
$idd = str_replace("IN-", "", $lastid);
$id = str_pad($idd + 1, 7, 0, STR_PAD_LEFT);
$number = 'IN-'.$id;
}
	
}


elseif ( $_POST['cname'] == "Center") {
$sql = "INSERT INTO tblhimalaya (placename, Date, ShopName, GrossSale, Discount, DisAmount, NetSales, Paid, AccBalance) 
								VALUES ('{$_POST['pname']}', '{$_POST['date']}','{$_POST['shopname']}', '{$_POST['grosssale']}', '{$_POST['discount']}', '{$_POST['disamount']}', '{$_POST['netsales']}', '{$_POST['paid']}', '{$_POST['accbalance']}')";

$sqll = "INSERT INTO tblhimalayarec (placename, cname, Date, InNo, ShopName, GrossSale, Discount, DisAmount, NetSales, Paid, AccBalance) 
VALUES ('{$_POST['pname']}','{$_POST['cname']}', '{$_POST['date']}', '{$_POST['inno']}', '{$_POST['shopname']}', '{$_POST['grosssale']}', '{$_POST['discount']}', '{$_POST['disamount']}', '{$_POST['netsales']}', '{$_POST['paid']}', '{$_POST['accbalance']}')";

$query = "SELECT InNo FROM tblhimalayarec ORDER BY InNo DESC";
$result = mysqli_query($conn,$query);
$row = mysqli_fetch_array($result);
$lastid = $row['InNo'];

if(empty($lastid))
{
    $number = "IN-0000001";
}
else
{
    $idd = str_replace("IN-", "", $lastid);
    $id = str_pad($idd + 1, 7, 0, STR_PAD_LEFT);
    $number = 'IN-'.$id;
}
	
}


elseif ( $_POST['cname'] == "Mint") {
    $sql = "INSERT INTO tblhimalaya (placename, Date, ShopName, GrossSale, Discount, DisAmount, NetSales, Paid, AccBalance) 
    VALUES ('{$_POST['pname']}', '{$_POST['date']}','{$_POST['shopname']}', '{$_POST['grosssale']}', '{$_POST['discount']}', '{$_POST['disamount']}', '{$_POST['netsales']}', '{$_POST['paid']}', '{$_POST['accbalance']}')";

$sqll = "INSERT INTO tblhimalayarec (placename, cname, Date, InNo, ShopName, GrossSale, Discount, DisAmount, NetSales, Paid, AccBalance) 
VALUES ('{$_POST['pname']}','{$_POST['cname']}', '{$_POST['date']}', '{$_POST['inno']}', '{$_POST['shopname']}', '{$_POST['grosssale']}', '{$_POST['discount']}', '{$_POST['disamount']}', '{$_POST['netsales']}', '{$_POST['paid']}', '{$_POST['accbalance']}')";

$query = "SELECT InNo FROM tblhimalayarec ORDER BY InNo DESC";
$result = mysqli_query($conn,$query);
$row = mysqli_fetch_array($result);
$lastid = $row['InNo'];

if(empty($lastid))
{
$number = "IN-0000001";
}
else
{
$idd = str_replace("IN-", "", $lastid);
$id = str_pad($idd + 1, 7, 0, STR_PAD_LEFT);
$number = 'IN-'.$id;
}

}

if ($conn->query($sqll) === TRUE) {
    header('Location: home.php');
} else {
    echo "Error: " . $sqll . "<br>" . $conn->error;
}								
if ($conn->query($sql) === TRUE) {
    header('Location: home.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

 