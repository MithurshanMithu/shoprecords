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
					}
					
			table {
				border-collapse: collapse;
				background-color: #4e4e4e;
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
<div class="logo"> <a href="home.php"> <img src="logo2.png" width="600" height="200"> </a> </div>
<br> <br> <br> <br>
<br> <br> <br> <br>
<br> <br> <br> 
<CENTER>

<form action="search.php" method="post" >
	<table border="2" width="1200"> 
	
	
	
		<tr>
			<td><select name="cnam" id="tcheck" > 
					<option value="Himalaya"> Himalaya </option>
					<option value="Encanteur"> Encanteur </option>
					<option value="Center"> Center Fresh </option>
					<option value="Mint"> Mint </option>
					
			</select> </td>
			<td class="tdbg"><select name="cname"> 
					<option> ShopName </option>
					<option> Date </option>
					<option> placename </option>
			</select> </td> 
			
			<td class="tdbg">
			<input type="text" id="date1" name="search" > </td>
			
			<th class="tdbg" align="center"><input type="submit" class="button" style="vertical-align:middle" value="Search" name="submit"> </th>
		</tr>
		
	</table>	
	
</form>

</CENTER>
<center>
<table border="2" width="1200"> 

		<tr>
			
			<td class="tdbg">Date </td>
			<td class="tdbg">Place </td>
			<td class="tdbg">Company </td>
			<td class="tdbg">In.No </td>
			<td class="tdbg">Shop Name </td>
			<td class="tdbg">Gross Sale </td>
			<td class="tdbg">Discount % </td>
			<td class="tdbg">Discount </td>
			<td class="tdbg">Net Sale </td>
			<td class="tdbg">Paid </td>
			<td class="tdbg">Account Balance </td>
			<td class="tdbg">Delete</td>
		</tr>
		
<?php

function display(){

if ( $_POST['cnam'] == "Himalaya"){
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbshoprecords";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ( $_POST['cname'] == "ShopName"){
$sql = "SELECT * FROM tblhimalayarec WHERE {$_POST['cname']} ='{$_POST['search']}' AND cname LIKE '%Himalaya%' " ;
$result = mysqli_query($conn, $sql);


$GrossBal=0;
$DisBal=0;
$DisAmt=0;
$NetSale=0;
$AccPaid=0;
$AccBal=0;
						if ($result->num_rows > 0 ){
							while ($row = $result->fetch_assoc()){

							if( $row["GrossSale"] == 0 ){
								echo"<tr>
							<td>" .$row["Date"]."</td> 
							<td>".$row["placename"]."</td> 
							<td>" .$row["cname"]."</td> 
							<td>".$row["InNo"]."</td> 
							<td>" .$row["ShopName"]."</td>
							<th colspan='4'>" ."Bill Payments"."</th>
							<td>" .$row["Paid"]."</td>
							<td>" .$row["AccBalance"]."</td> 
						</tr>"; 
								
							}else {

								$GrossBal += $row["GrossSale"];
								$DisBal += $row["Discount"];
								$DisAmt += $row["DisAmount"]; 
								$NetSale += $row["NetSales"];
								$AccPaid += $row["Paid"];
								$AccBal += $row["AccBalance"];
							
								
			?>

							<tr>

							<td> <?php echo $row["Date"]; ?> </td> 
							<td> <?php echo $row["placename"]; ?></td> 
							<td> <?php echo $row["cname"]; ?></td> 
							<td> <?php echo $row["InNo"]; ?></td> 
							<td> <?php echo $row["ShopName"]; ?></td> 
							<td> <?php echo $row["GrossSale"]; ?></td> 
							<td> <?php echo $row["Discount"]; ?> </td> 
							<td> <?php echo $row["DisAmount"]; ?></td> 
							<td><?php echo $row["NetSales"]; ?></td> 
							<td><?php echo $row["Paid"]; ?></td> 
							<td><?php echo $row["AccBalance"]; ?></td> 
							<td> <a href="delete.php?delete=<?php echo $row['InNo']; ?>"> <button>  Delete  </button> </a> </td>
							
							</tr> 
		<?php						
							}
							}}
						if ($_POST['cname'] == "ShopName") {
    $sql2 = "SELECT * FROM tblreturn WHERE ShopName = '{$_POST['search']}'";
    $result2 = mysqli_query($conn, $sql2);

    if ($result2->num_rows > 0) {
        while ($row2 = $result2->fetch_assoc()) {
            echo "<tr>
                <td>{$row2['Date']}</td>
                <td>{$row2['placename']}</td>
                <td>{$row2['cname']}</td>
                <td>{$row2['InNo']}</td>
                <td>{$row2['ShopName']}</td>
                <th colspan='5'>Return Amount</th>
                <td>{$row2['AccBalance']}</td>
            </tr>";
        }
    }
}

if ($_POST['cname'] == "ShopName") {
    $sql1 = "SELECT * FROM tblhimalaya WHERE ShopName = '{$_POST['search']}'";
    $result1 = mysqli_query($conn, $sql1);

    if ($result1->num_rows > 0) {
        while ($row1 = mysqli_fetch_array($result1)) {
            echo "<tr bgcolor='black'>
                <th colspan='5'><font color='white'>Total Balance</font></th> 
                <td>Rs $GrossBal</td>
                <td> $DisBal %</td>
                <td>Rs $DisAmt  </td>
                <td>Rs $NetSale  </td>
                <td>Rs $AccPaid  </td>
                <td>Rs $AccBal </td>
			
            </tr>";
        }
    }
}

							
						
mysqli_close($conn);} else{
$sql = "SELECT * FROM tblhimalayarec WHERE {$_POST['cname']} ='{$_POST['search']}'" ;
$result = mysqli_query($conn, $sql);

						if ($result->num_rows > 0 ){
							while ($row = $result->fetch_assoc()){
								if ( $row["GrossSale"] > 0 ){
							echo"<tr>
							<td>" .$row["Date"]."</td> 
							<td>".$row["placename"]."</td> 
							<td>" .$row["cname"]."</td> 
							<td>".$row["InNo"]."</td> 
							<td>" .$row["ShopName"]."</td> 
							<td>".$row["GrossSale"]."</td> 
							<td>" .$row["Discount"]."</td> 
							<td>".$row["DisAmount"]."</td> 
							<td>" .$row["NetSales"]."</td> 
							<td>".$row["Paid"]."</td> 
							<td>" .$row["AccBalance"]."</td> 
						</tr>";}}}
						if ( $_POST['cname'] == "ShopName"){	
						$sql2 = "SELECT * FROM tblreturn WHERE ShopName ='{$_POST['search']}'" ;
						$result2 = mysqli_query($conn, $sql2);

						if ($result2->num_rows > 0 ){
							while ($row2 = $result2->fetch_assoc()){
				
							echo"<tr>
							<td>" .$row2["Date"]."</td> 
							<td>".$row2["placename"]."</td> 
							<td>" .$row2["cname"]."</td> 
							<td>".$row2["InNo"]."</td> 
							<td>" .$row2["ShopName"]."</td>
							<th colspan='5'>" ."Return Amount"."</th>
							<td>" .$row2["AccBalance"]."</td> 
						</tr>";}}	}
							
						if ( $_POST['cname'] == "ShopName"){
							$sql1 = "SELECT * FROM tblhimalaya WHERE ShopName ='{$_POST['search']}'" ;
							$result1 = mysqli_query($conn, $sql1);
							$row1 = mysqli_fetch_array($result1);
							
							echo"<tr bgcolor='black'>
							<td>" .$row1["Date"]."</td> 
							<td>".$row1["placename"]."</td> 
							<td>" .$row1["cname"]."</td> 
							<td>".$row1["InNo"]."</td> 
							<td>" .$row1["ShopName"]."</td> 
							<td>".$row1["GrossSale"]."</td> 
							<td>" .$row1["Discount"]."</td> 
							<td>".$row1["DisAmount"]."</td> 
							<td>" .$row1["NetSales"]."</td> 
							<td>".$row1["Paid"]."</td> 
							<td>" .$row1["AccBalance"]."</td> 
							</tr>";
							
							}
							
						
mysqli_close($conn);

	
}

}elseif ( $_POST['cnam'] == "Encanteur") {

	$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbshoprecords";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ( $_POST['cname'] == "ShopName"){
$sql = "SELECT * FROM tblhimalayarec WHERE {$_POST['cname']} ='{$_POST['search']}' AND cname LIKE '%Encanteur%' " ;
$result = mysqli_query($conn, $sql);


$GrossBal=0;
$DisBal=0;
$DisAmt=0;
$NetSale=0;
$AccPaid=0;
$AccBal=0;
						if ($result->num_rows > 0 ){
							while ($row = $result->fetch_assoc()){

							if( $row["GrossSale"] == 0 ){
								echo"<tr>
							<td>" .$row["Date"]."</td> 
							<td>".$row["placename"]."</td> 
							<td>" .$row["cname"]."</td> 
							<td>".$row["InNo"]."</td> 
							<td>" .$row["ShopName"]."</td>
							<th colspan='4'>" ."Bill Payments"."</th>
							<td>" .$row["Paid"]."</td>
							<td>" .$row["AccBalance"]."</td> 
						</tr>"; 
								
							}else {

								$GrossBal += $row["GrossSale"];
								$DisBal += $row["Discount"];
								$DisAmt += $row["DisAmount"]; 
								$NetSale += $row["NetSales"];
								$AccPaid += $row["Paid"];
								$AccBal += $row["AccBalance"];
							
								
			?>

							<tr>

							<td> <?php echo $row["Date"]; ?> </td> 
							<td> <?php echo $row["placename"]; ?></td> 
							<td> <?php echo $row["cname"]; ?></td> 
							<td> <?php echo $row["InNo"]; ?></td> 
							<td> <?php echo $row["ShopName"]; ?></td> 
							<td> <?php echo $row["GrossSale"]; ?></td> 
							<td> <?php echo $row["Discount"]; ?> </td> 
							<td> <?php echo $row["DisAmount"]; ?></td> 
							<td><?php echo $row["NetSales"]; ?></td> 
							<td><?php echo $row["Paid"]; ?></td> 
							<td><?php echo $row["AccBalance"]; ?></td> 
							<td> <a href="delete.php?delete=<?php echo $row['InNo']; ?>"> <button>  Delete  </button> </a> </td>
							
							</tr> 
		<?php						
							}
							}}
						if ($_POST['cname'] == "ShopName") {
    $sql2 = "SELECT * FROM tblreturn WHERE ShopName = '{$_POST['search']}'";
    $result2 = mysqli_query($conn, $sql2);

    if ($result2->num_rows > 0) {
        while ($row2 = $result2->fetch_assoc()) {
            echo "<tr>
                <td>{$row2['Date']}</td>
                <td>{$row2['placename']}</td>
                <td>{$row2['cname']}</td>
                <td>{$row2['InNo']}</td>
                <td>{$row2['ShopName']}</td>
                <th colspan='5'>Return Amount</th>
                <td>{$row2['AccBalance']}</td>
            </tr>";
        }
    }
}

if ($_POST['cname'] == "ShopName") {
    $sql1 = "SELECT * FROM tblhimalaya WHERE ShopName = '{$_POST['search']}'";
    $result1 = mysqli_query($conn, $sql1);

    if ($result1->num_rows > 0) {
        while ($row1 = mysqli_fetch_array($result1)) {
            echo "<tr bgcolor='black'>
                <th colspan='5'><font color='white'>Total Balance</font></th> 
                <td>Rs $GrossBal</td>
                <td> $DisBal %</td>
                <td>Rs $DisAmt  </td>
                <td>Rs $NetSale  </td>
                <td>Rs $AccPaid  </td>
                <td>Rs $AccBal </td>
			
            </tr>";
        }
    }
}

							
						
mysqli_close($conn);} else{
$sql = "SELECT * FROM tblhimalayarec WHERE {$_POST['cname']} ='{$_POST['search']}'" ;
$result = mysqli_query($conn, $sql);

						if ($result->num_rows > 0 ){
							while ($row = $result->fetch_assoc()){
								if ( $row["GrossSale"] > 0 ){
							echo"<tr>
							<td>" .$row["Date"]."</td> 
							<td>".$row["placename"]."</td> 
							<td>" .$row["cname"]."</td> 
							<td>".$row["InNo"]."</td> 
							<td>" .$row["ShopName"]."</td> 
							<td>".$row["GrossSale"]."</td> 
							<td>" .$row["Discount"]."</td> 
							<td>".$row["DisAmount"]."</td> 
							<td>" .$row["NetSales"]."</td> 
							<td>".$row["Paid"]."</td> 
							<td>" .$row["AccBalance"]."</td> 
						</tr>";}}}
						if ( $_POST['cname'] == "ShopName"){	
						$sql2 = "SELECT * FROM tblreturn WHERE ShopName ='{$_POST['search']}'" ;
						$result2 = mysqli_query($conn, $sql2);

						if ($result2->num_rows > 0 ){
							while ($row2 = $result2->fetch_assoc()){
				
							echo"<tr>
							<td>" .$row2["Date"]."</td> 
							<td>".$row2["placename"]."</td> 
							<td>" .$row2["cname"]."</td> 
							<td>".$row2["InNo"]."</td> 
							<td>" .$row2["ShopName"]."</td>
							<th colspan='5'>" ."Return Amount"."</th>
							<td>" .$row2["AccBalance"]."</td> 
						</tr>";}}	}
							
						if ( $_POST['cname'] == "ShopName"){
							$sql1 = "SELECT * FROM tblhimalaya WHERE ShopName ='{$_POST['search']}'" ;
							$result1 = mysqli_query($conn, $sql1);
							$row1 = mysqli_fetch_array($result1);
							
							echo"<tr bgcolor='black'>
							<td>" .$row1["Date"]."</td> 
							<td>".$row1["placename"]."</td> 
							<td>" .$row1["cname"]."</td> 
							<td>".$row1["InNo"]."</td> 
							<td>" .$row1["ShopName"]."</td> 
							<td>".$row1["GrossSale"]."</td> 
							<td>" .$row1["Discount"]."</td> 
							<td>".$row1["DisAmount"]."</td> 
							<td>" .$row1["NetSales"]."</td> 
							<td>".$row1["Paid"]."</td> 
							<td>" .$row1["AccBalance"]."</td> 
							</tr>";
							
							}
							
						
mysqli_close($conn);

	
}


}elseif ( $_POST['cnam'] == "Center") {

	$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbshoprecords";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ( $_POST['cname'] == "ShopName"){
$sql = "SELECT * FROM tblhimalayarec WHERE {$_POST['cname']} ='{$_POST['search']}' AND cname LIKE '%Center%' " ;
$result = mysqli_query($conn, $sql);


$GrossBal=0;
$DisBal=0;
$DisAmt=0;
$NetSale=0;
$AccPaid=0;
$AccBal=0;
						if ($result->num_rows > 0 ){
							while ($row = $result->fetch_assoc()){

							if( $row["GrossSale"] == 0 ){
								echo"<tr>
							<td>" .$row["Date"]."</td> 
							<td>".$row["placename"]."</td> 
							<td>" .$row["cname"]."</td> 
							<td>".$row["InNo"]."</td> 
							<td>" .$row["ShopName"]."</td>
							<th colspan='4'>" ."Bill Payments"."</th>
							<td>" .$row["Paid"]."</td>
							<td>" .$row["AccBalance"]."</td> 
						</tr>"; 
								
							}else {

								$GrossBal += $row["GrossSale"];
								$DisBal += $row["Discount"];
								$DisAmt += $row["DisAmount"]; 
								$NetSale += $row["NetSales"];
								$AccPaid += $row["Paid"];
								$AccBal += $row["AccBalance"];
							
								
			?>

							<tr>

							<td> <?php echo $row["Date"]; ?> </td> 
							<td> <?php echo $row["placename"]; ?></td> 
							<td> <?php echo $row["cname"]; ?></td> 
							<td> <?php echo $row["InNo"]; ?></td> 
							<td> <?php echo $row["ShopName"]; ?></td> 
							<td> <?php echo $row["GrossSale"]; ?></td> 
							<td> <?php echo $row["Discount"]; ?> </td> 
							<td> <?php echo $row["DisAmount"]; ?></td> 
							<td><?php echo $row["NetSales"]; ?></td> 
							<td><?php echo $row["Paid"]; ?></td> 
							<td><?php echo $row["AccBalance"]; ?></td> 
							<td> <a href="delete.php?delete=<?php echo $row['InNo']; ?>"> <button>  Delete  </button> </a> </td>
							
							</tr> 
		<?php						
							}
							}}
						if ($_POST['cname'] == "ShopName") {
    $sql2 = "SELECT * FROM tblreturn WHERE ShopName = '{$_POST['search']}'";
    $result2 = mysqli_query($conn, $sql2);

    if ($result2->num_rows > 0) {
        while ($row2 = $result2->fetch_assoc()) {
            echo "<tr>
                <td>{$row2['Date']}</td>
                <td>{$row2['placename']}</td>
                <td>{$row2['cname']}</td>
                <td>{$row2['InNo']}</td>
                <td>{$row2['ShopName']}</td>
                <th colspan='5'>Return Amount</th>
                <td>{$row2['AccBalance']}</td>
            </tr>";
        }
    }
}

if ($_POST['cname'] == "ShopName") {
    $sql1 = "SELECT * FROM tblhimalaya WHERE ShopName = '{$_POST['search']}'";
    $result1 = mysqli_query($conn, $sql1);

    if ($result1->num_rows > 0) {
        while ($row1 = mysqli_fetch_array($result1)) {
            echo "<tr bgcolor='black'>
                <th colspan='5'><font color='white'>Total Balance</font></th> 
                <td>Rs $GrossBal</td>
                <td> $DisBal %</td>
                <td>Rs $DisAmt  </td>
                <td>Rs $NetSale  </td>
                <td>Rs $AccPaid  </td>
                <td>Rs $AccBal </td>
			
            </tr>";
        }
    }
}

							
						
mysqli_close($conn);} else{
$sql = "SELECT * FROM tblhimalayarec WHERE {$_POST['cname']} ='{$_POST['search']}'" ;
$result = mysqli_query($conn, $sql);

						if ($result->num_rows > 0 ){
							while ($row = $result->fetch_assoc()){
								if ( $row["GrossSale"] > 0 ){
							echo"<tr>
							<td>" .$row["Date"]."</td> 
							<td>".$row["placename"]."</td> 
							<td>" .$row["cname"]."</td> 
							<td>".$row["InNo"]."</td> 
							<td>" .$row["ShopName"]."</td> 
							<td>".$row["GrossSale"]."</td> 
							<td>" .$row["Discount"]."</td> 
							<td>".$row["DisAmount"]."</td> 
							<td>" .$row["NetSales"]."</td> 
							<td>".$row["Paid"]."</td> 
							<td>" .$row["AccBalance"]."</td> 
						</tr>";}}}
						if ( $_POST['cname'] == "ShopName"){	
						$sql2 = "SELECT * FROM tblreturn WHERE ShopName ='{$_POST['search']}'" ;
						$result2 = mysqli_query($conn, $sql2);

						if ($result2->num_rows > 0 ){
							while ($row2 = $result2->fetch_assoc()){
				
							echo"<tr>
							<td>" .$row2["Date"]."</td> 
							<td>".$row2["placename"]."</td> 
							<td>" .$row2["cname"]."</td> 
							<td>".$row2["InNo"]."</td> 
							<td>" .$row2["ShopName"]."</td>
							<th colspan='5'>" ."Return Amount"."</th>
							<td>" .$row2["AccBalance"]."</td> 
						</tr>";}}	}
							
						if ( $_POST['cname'] == "ShopName"){
							$sql1 = "SELECT * FROM tblhimalaya WHERE ShopName ='{$_POST['search']}'" ;
							$result1 = mysqli_query($conn, $sql1);
							$row1 = mysqli_fetch_array($result1);
							
							echo"<tr bgcolor='black'>
							<td>" .$row1["Date"]."</td> 
							<td>".$row1["placename"]."</td> 
							<td>" .$row1["cname"]."</td> 
							<td>".$row1["InNo"]."</td> 
							<td>" .$row1["ShopName"]."</td> 
							<td>".$row1["GrossSale"]."</td> 
							<td>" .$row1["Discount"]."</td> 
							<td>".$row1["DisAmount"]."</td> 
							<td>" .$row1["NetSales"]."</td> 
							<td>".$row1["Paid"]."</td> 
							<td>" .$row1["AccBalance"]."</td> 
							</tr>";
							
							}
							
						
mysqli_close($conn);

	
}
	
}elseif ( $_POST['cnam'] == "Mint") {

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "dbshoprecords";
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	
	if ( $_POST['cname'] == "ShopName"){
	$sql = "SELECT * FROM tblhimalayarec WHERE {$_POST['cname']} ='{$_POST['search']}' AND cname LIKE '%Mint%' " ;
	$result = mysqli_query($conn, $sql);
	
	
	$GrossBal=0;
	$DisBal=0;
	$DisAmt=0;
	$NetSale=0;
	$AccPaid=0;
	$AccBal=0;
							if ($result->num_rows > 0 ){
								while ($row = $result->fetch_assoc()){
	
								if( $row["GrossSale"] == 0 ){
									echo"<tr>
								<td>" .$row["Date"]."</td> 
								<td>".$row["placename"]."</td> 
								<td>" .$row["cname"]."</td> 
								<td>".$row["InNo"]."</td> 
								<td>" .$row["ShopName"]."</td>
								<th colspan='4'>" ."Bill Payments"."</th>
								<td>" .$row["Paid"]."</td>
								<td>" .$row["AccBalance"]."</td> 
							</tr>"; 
									
								}else {
	
									$GrossBal += $row["GrossSale"];
									$DisBal += $row["Discount"];
									$DisAmt += $row["DisAmount"]; 
									$NetSale += $row["NetSales"];
									$AccPaid += $row["Paid"];
									$AccBal += $row["AccBalance"];
								
									
				?>
	
								<tr>
	
								<td> <?php echo $row["Date"]; ?> </td> 
								<td> <?php echo $row["placename"]; ?></td> 
								<td> <?php echo $row["cname"]; ?></td> 
								<td> <?php echo $row["InNo"]; ?></td> 
								<td> <?php echo $row["ShopName"]; ?></td> 
								<td> <?php echo $row["GrossSale"]; ?></td> 
								<td> <?php echo $row["Discount"]; ?> </td> 
								<td> <?php echo $row["DisAmount"]; ?></td> 
								<td><?php echo $row["NetSales"]; ?></td> 
								<td><?php echo $row["Paid"]; ?></td> 
								<td><?php echo $row["AccBalance"]; ?></td> 
								<td> <a href="delete.php?delete=<?php echo $row['InNo']; ?>"> <button>  Delete  </button> </a> </td>
								
								</tr> 
			<?php						
								}
								}}
							if ($_POST['cname'] == "ShopName") {
		$sql2 = "SELECT * FROM tblreturn WHERE ShopName = '{$_POST['search']}'";
		$result2 = mysqli_query($conn, $sql2);
	
		if ($result2->num_rows > 0) {
			while ($row2 = $result2->fetch_assoc()) {
				echo "<tr>
					<td>{$row2['Date']}</td>
					<td>{$row2['placename']}</td>
					<td>{$row2['cname']}</td>
					<td>{$row2['InNo']}</td>
					<td>{$row2['ShopName']}</td>
					<th colspan='5'>Return Amount</th>
					<td>{$row2['AccBalance']}</td>
				</tr>";
			}
		}
	}
	
	if ($_POST['cname'] == "ShopName") {
		$sql1 = "SELECT * FROM tblhimalaya WHERE ShopName = '{$_POST['search']}'";
		$result1 = mysqli_query($conn, $sql1);
	
		if ($result1->num_rows > 0) {
			while ($row1 = mysqli_fetch_array($result1)) {
				echo "<tr bgcolor='black'>
					<th colspan='5'><font color='white'>Total Balance</font></th> 
					<td>Rs $GrossBal</td>
					<td> $DisBal %</td>
					<td>Rs $DisAmt  </td>
					<td>Rs $NetSale  </td>
					<td>Rs $AccPaid  </td>
					<td>Rs $AccBal </td>
				
				</tr>";
			}
		}
	}
	
								
							
	mysqli_close($conn);} else{
	$sql = "SELECT * FROM tblhimalayarec WHERE {$_POST['cname']} ='{$_POST['search']}'" ;
	$result = mysqli_query($conn, $sql);
	
							if ($result->num_rows > 0 ){
								while ($row = $result->fetch_assoc()){
									if ( $row["GrossSale"] > 0 ){
								echo"<tr>
								<td>" .$row["Date"]."</td> 
								<td>".$row["placename"]."</td> 
								<td>" .$row["cname"]."</td> 
								<td>".$row["InNo"]."</td> 
								<td>" .$row["ShopName"]."</td> 
								<td>".$row["GrossSale"]."</td> 
								<td>" .$row["Discount"]."</td> 
								<td>".$row["DisAmount"]."</td> 
								<td>" .$row["NetSales"]."</td> 
								<td>".$row["Paid"]."</td> 
								<td>" .$row["AccBalance"]."</td> 
							</tr>";}}}
							if ( $_POST['cname'] == "ShopName"){	
							$sql2 = "SELECT * FROM tblreturn WHERE ShopName ='{$_POST['search']}'" ;
							$result2 = mysqli_query($conn, $sql2);
	
							if ($result2->num_rows > 0 ){
								while ($row2 = $result2->fetch_assoc()){
					
								echo"<tr>
								<td>" .$row2["Date"]."</td> 
								<td>".$row2["placename"]."</td> 
								<td>" .$row2["cname"]."</td> 
								<td>".$row2["InNo"]."</td> 
								<td>" .$row2["ShopName"]."</td>
								<th colspan='5'>" ."Return Amount"."</th>
								<td>" .$row2["AccBalance"]."</td> 
							</tr>";}}	}
								
							if ( $_POST['cname'] == "ShopName"){
								$sql1 = "SELECT * FROM tblhimalaya WHERE ShopName ='{$_POST['search']}'" ;
								$result1 = mysqli_query($conn, $sql1);
								$row1 = mysqli_fetch_array($result1);
								
								echo"<tr bgcolor='black'>
								<td>" .$row1["Date"]."</td> 
								<td>".$row1["placename"]."</td> 
								<td>" .$row1["cname"]."</td> 
								<td>".$row1["InNo"]."</td> 
								<td>" .$row1["ShopName"]."</td> 
								<td>".$row1["GrossSale"]."</td> 
								<td>" .$row1["Discount"]."</td> 
								<td>".$row1["DisAmount"]."</td> 
								<td>" .$row1["NetSales"]."</td> 
								<td>".$row1["Paid"]."</td> 
								<td>" .$row1["AccBalance"]."</td> 
								</tr>";
								
								}
								
							
	mysqli_close($conn);
	
		
	}

}else{
	
	echo"No Records Found";
}
	
}
if(isset($_POST['submit']))
							{ 
								display();
										}
?>		
</table>


	<table border="2" width="1200"> 	
		<tr>
			<th class="tdbg" align="center"><input type="submit" id="PrintButton" onclick="PrintPage()" class="button" style="vertical-align:middle" value="Print" name="submit"> </th>
		</tr>
		
	</table>	



<script>
	var d1 = new Date();
	var d = d1.getMonth() + 1;
	document.getElementById("date").innerHTML = d1.getFullYear() + "/"+ d  + "/" + d1.getDate();
	
	
	function ttime(){
				var t = new Date();
				document.getElementById("time").innerHTML = t.getHours() + ":" + t.getMinutes() + ":" + t.getSeconds();
				}
	
	setInterval(ttime,1000);
	
	
	function PrintPage() {
		window.print();
	}
	document.loaded = function(){
		
	}
	window.addEventListener('DOMContentLoaded', (event) => {
   		PrintPage()
		setTimeout(function(){ window.close() },750)
	});
	
	
</script>

</body>

</html>

