<html lang="en">

<head>
		<link rel="stylesheet" type="text/css" href="style1.css" />
		<style>
			.date{
				background-color: white;
				color: black;
				border: 2px solid #4CAF50; /* Green */
				font-size:20px;
				padding: 10px;}
			.date1{
				background-color: #4CAF50;
				color: white;}
			.time{
				background-color: white;
				color: black;
				border: 2px solid #4CAF50; /* Green */
				font-size:19px;
				padding: 10px;
				position:absolute;
				right:0px;
				top:12px;}
			.time1{
				background-color: #4CAF50;
				color: white;
				right:0px;
				width:180px;}
			.title{
			border:2px solid #4CAF50; 
			text-align:center;
			font-family: 'Muli', sans-serif;
			position:absolute;
			left:220px;
			width:940px;
			height:42px;
			top:12px;
			background-color:rgb(220, 220, 220);
			font-size:30px;
			}
			.search{
			
			width:400px;
			height:400px;
			border:2px solid #4CAF50; 
			position:absolute;
			top:160px;
			left:50px;
			transition-duration: 0.5s;
			 
			}
			.update{
			
			width:400px;
			height:400px;
			border:2px solid #4CAF50; 
			position:absolute;
			top:160px;
			left:485px;
			 transition-duration: 0.5s;
			}
			.addnew{
			
			width:400px;
			height:400px;
			border:2px solid #4CAF50; 
			position:absolute;
			top:160px;
			left:920px;
			 transition-duration: 0.5s;
			}
			.addnew:hover{
				top:120px;
			}
			.update:hover{
				top:120px;
			}
			.search:hover{
				top:120px;
			}
			img{
				position:absolute;
				top:50px;
				left:50px;
			
			}
			.addnewimage{
				position:absolute;
				top:100px;
				left:100px;
			}
			.clk {
				background-color: #4CAF50;
				border: none;
				-webkit-transition-duration: 0.4s; /* Safari */
				transition-duration: 0.4s;
				text-decoration: none;
				overflow: hidden;
				cursor: pointer;
}

			.clk:after {
				content: "";
				background: #90EE90;
				display: block;
				padding-top: 300%;
				padding-left: 350%;
				margin-left: -20px!important;
				margin-top: -120%;
				opacity: 0;
				transition: all 0.8s
}

			.clk:active:after {
				padding: 0;
				margin: 0;
				opacity: 1;
				transition: 0s
}			td{
				color:white;
				}
			table{
			
				font-size:18px;
			}
			td {
				padding: 8px;
				text-align: left;
				color:black;
					}
					
			table {
				border-collapse: collapse;
				background-color: #dfe0e0;
				color:black;
				}
			tr:hover {background-color: #4e4e4e;
						}	

			.tdbg{
			
				background-color:#4e4e4e;
			
			}
			input[type=text]:focus {
			
			border: 2px solid red;
			border-radius: 4px;
}
			input[type=text], select, textarea {
			width: 100%;
			padding: 12px;
			border: 1px solid #ccc;
			border-radius: 4px;
			resize: vertical;
			font-size:18px;
}
		body{
			background-size:cover;
		
		}
		.button {
  display: inline-block;
  border-radius: 4px;
  background-color: #4CAF50;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 15px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
.mv{
	position:absolute;
	top:457px;
	left:110px;

}
body{
			background-size:cover;
			color:black;
			font-size:14px;
		
		}
		.logo{
			
			position:absolute;
			top:0px;
			left:-120px;
			
		}
		img{
			position:absolute;
			top:0px;
			left:360px;
			
		}
		
		</style>
</head>


<body background="" >
<!--<div style="width:50px;"> .</div>
<span class="title">
<marquee BEHAVIOR="ALTERNATE">HS Enter Prises</marquee> 
</span>
<span class="date date1" >Now Date  </span><span class="date" id="date"> </span>
<span class="time time1" >Now Time </span><span class="time" id="time">  </span>
<br> <br> -->
<div class="logo"> <a href="home.php">  <img src="logo2.png" width="600" height="200"></a> </div>
<br> <br> <br> <br>
<br> <br> <br> <br>
<br> <br> <br> 
<CENTER>

<table border="2" width="1000"> 

		<tr>
			
			<td class="tdbg">Date </td>
			<td class="tdbg">Place </td>
			<td class="tdbg">Company </td>
			<td class="tdbg">In.No </td>
			<td class="tdbg">Shop Name </td>
			<td class="tdbg">Account Balance </td>
			<td class="tdbg"> Recive Payment </td>
		</tr>
		
<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbshoprecords";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$temdate = "2010-01-01";

if ( $_POST['cnam'] == "Himalaya"){
$sql = "SELECT * FROM tblhimalayarec WHERE Date BETWEEN '{$temdate}' AND '{$_POST['search']}'" ;
$result = mysqli_query($conn, $sql);

						if ($result->num_rows > 0 ){
							while ($row = $result->fetch_assoc()){
							if ( $row["AccBalance"] > 0 and $row['GrossSale'] > 0){
								if($row["placename"] == $_POST['placesc']){
							echo"<tr>
							<td>" .$row["Date"]."</td> 
							<td>".$row["placename"]."</td> 
							<td>" .$row["cname"]."</td> 
							<td>".$row["InNo"]."</td> 
							<td>" .$row["ShopName"]."</td> 
							<td>" .$row["AccBalance"]."</td> 
							<td>" ." "."</td>
							</tr>";}elseif( $_POST['placesc'] == "*"){
							echo"<tr>
							<td>" .$row["Date"]."</td> 
							<td>".$row["placename"]."</td> 
							<td>" .$row["cname"]."</td> 
							<td>".$row["InNo"]."</td> 
							<td>" .$row["ShopName"]."</td> 
							<td>" .$row["AccBalance"]."</td> 
							<td>" ." "."</td>
							</tr>";}		
								
								
							}
							}}


mysqli_close($conn);	
}elseif ( $_POST['cnam'] == "Encanteur") {
$sql = "SELECT * FROM tblencanteurrec WHERE Date BETWEEN '{$temdate}' AND '{$_POST['search']}'" ;
$result = mysqli_query($conn, $sql);

						if ($result->num_rows > 0 ){
							while ($row = $result->fetch_assoc()){
							if ( $row["AccBalance"] > 0 and $row['GrossSale'] > 0){
							if($row["placename"] == $_POST['placesc']){
							echo"<tr>
							<td>" .$row["Date"]."</td> 
							<td>".$row["placename"]."</td> 
							<td>" .$row["cname"]."</td> 
							<td>".$row["InNo"]."</td> 
							<td>" .$row["ShopName"]."</td> 
							<td>" .$row["AccBalance"]."</td> 
							<td>" ." "."</td>
							</tr>";}elseif( $_POST['placesc'] == "*"){
							echo"<tr>
							<td>" .$row["Date"]."</td> 
							<td>".$row["placename"]."</td> 
							<td>" .$row["cname"]."</td> 
							<td>".$row["InNo"]."</td> 
							<td>" .$row["ShopName"]."</td> 
							<td>" .$row["AccBalance"]."</td> 
							<td>" ." "."</td>
							</tr>";}}}}


mysqli_close($conn);

}elseif ( $_POST['cnam'] == "Center") {
$sql = "SELECT * FROM tblcenterfreshrec WHERE Date BETWEEN '{$temdate}' AND '{$_POST['search']}'" ;
$result = mysqli_query($conn, $sql);

						if ($result->num_rows > 0 ){
							while ($row = $result->fetch_assoc()){
							if ( $row["AccBalance"] > 0 and $row['GrossSale'] > 0){
							if($row["placename"] == $_POST['placesc']){
							echo"<tr>
							<td>" .$row["Date"]."</td> 
							<td>".$row["placename"]."</td> 
							<td>" .$row["cname"].' Fresh'."</td> 
							<td>".$row["InNo"]."</td> 
							<td>" .$row["ShopName"]."</td> 
							<td>" .$row["AccBalance"]."</td> 
							<td>" ." "."</td>
							</tr>";}elseif( $_POST['placesc'] == "*"){
							echo"<tr>
							<td>" .$row["Date"]."</td> 
							<td>".$row["placename"]."</td> 
							<td>" .$row["cname"].' Fresh'."</td> 
							<td>".$row["InNo"]."</td> 
							<td>" .$row["ShopName"]."</td> 
							<td>" .$row["AccBalance"]."</td> 
							<td>" ." "."</td>
							</tr>";}}}}


mysqli_close($conn);
	
}elseif ( $_POST['cnam'] == "Mint") {
$sql = "SELECT * FROM tblmintrec WHERE Date BETWEEN '{$temdate}' AND '{$_POST['search']}'" ;
$result = mysqli_query($conn, $sql);

						if ($result->num_rows > 0 ){
							while ($row = $result->fetch_assoc()){
							if ( $row["AccBalance"] > 0 and $row['GrossSale'] > 0){
							if($row["placename"] == $_POST['placesc']){
							echo"<tr>
							<td>" .$row["Date"]."</td> 
							<td>".$row["placename"]."</td> 
							<td>" .$row["cname"]."</td> 
							<td>".$row["InNo"]."</td> 
							<td>" .$row["ShopName"]."</td> 
							<td>" .$row["AccBalance"]."</td> 
							<td>" ." "."</td>
							</tr>";}elseif( $_POST['placesc'] == "*"){
							echo"<tr>
							<td>" .$row["Date"]."</td> 
							<td>".$row["placename"]."</td> 
							<td>" .$row["cname"]."</td> 
							<td>".$row["InNo"]."</td> 
							<td>" .$row["ShopName"]."</td> 
							<td>" .$row["AccBalance"]."</td> 
							<td>" ." "."</td>
							</tr>";}}}}


mysqli_close($conn);
	
}

?>		
		</table>
		</body>
		</html>