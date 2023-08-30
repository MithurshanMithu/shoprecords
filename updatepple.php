<?php session_start(); $_SESSION["bal"] = 0;  
					 $_SESSION["mainbal"] = 0; 
					
					 
					 ?>

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
				font-size:20px;
				padding: 10px;
				position:absolute;
				right:0px;
				top:14px;}
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
			top:14px;
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
	top:585px;
	left:130px;

 }
     .hm{
	  position:absolute;
	  top:670px;
	  right:130px;
	
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
   <marquee BEHAVIOR="ALTERNATE">Your Company Name</marquee> 
  </span>
   <span class="date date1" >Now Date  </span><span class="date" id="date"> </span>
   <span class="time time1" >Now Time </span><span class="time" id="time">  </span>
   <br> <br> -->

   <?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbshoprecords";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>

<?php
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
?>

<?php 

$month = date('m');
$day = date('d');
$year = date('Y');

$today = $year . '-' . $month . '-' . $day;
?>

   <div class="logo">  <img src="logo2.png" width="600" height="200"> </div>
   <CENTER>
      <br> <br> <br> <br>
     <br> <br> <br> <br>
     <br> <br> 
      <form action="updatenew.php" method="post">
	<table border="2" width="1200"> 
	
		<tr>
			<td class="tdbg"> Add Customer Place </td>
			<td ><input type="text" name="pname" required ></td> 



			<td class="tdbg"> Select Shop Name </td>
			<td class="tdbg">


			<select  id="shopname" name="shopname" class="" required>
			<option></option>
					  <?php

					$query = "SELECT shopname FROM tblhimalaya";

					$result = mysqli_query($conn,$query);
					while($row = mysqli_fetch_array($result)){
					?>
						<option value="<?php echo $row['shopname']; ?>"><?php echo $row['shopname']; ?></option>

						<?php } ?>
						</select>
			</td> 
		</tr>
	
		<tr>
			<td class="tdbg">Select Your Comapny </td>
			<td><select name="cname" id="tcheck" required onclick="check();"> 
					<option value="Himalaya"> Himalaya </option>
					<option value="Encanteur"> Encanteur </option>
					<option value="Center">Center Fresh </option>
					<option value="Mint"> Mint  </option>

			</select> </td> 
			<td class="tdbg">Date </td>
			 <td><input type ="date"  value="<?php echo $today; ?>" name ="date"></td>

		</tr>
	
		
		
		<tr>
			<td class="tdbg">IN.NO </td>
			<td> <input type="text" name="inno" id="inno" style=" font-size: 16px; color: blue; font-weight: bold; "  value="<?php echo $number; ?>" readonly > </td>
			

			<td class="tdbg">Quantity </td>
			<td><input type="text" id="quantity" name="quantity" > </td>  
			<td class="tdbg">Price</td>
			<td><input type="text" id="price" name="price" required> </td>  			
		</tr>
		
		
		<tr>
			<td class="tdbg">Discount % </td>
			<td><input type="text" id="dis" name="discount" required> </td> 

			<td class="tdbg">Paid </td>
			<td><input type="text" value="" id="paid" name="paid" required> </td>  


			
			
		</tr>
		
		
		
		<tr>
			<td class="tdbg">Gross Sale </td>
			<td><input type="text" id="grossSale" name="grosssale" readonly> </td>  
			<td class="tdbg">Discount Amount </td>
			<td> <input type="text" id="disAmount" name="disamount" readonly>  </td>  
			 
		</tr>
		
		
		<tr>
			<td class="tdbg">Net Sales </td>
			<td> <input type="text" id="netSale" name="netsales" readonly>  </td> 
			<td class="tdbg">Account Balance </td>
			<td> <input type="text" id="acBalance" name="accbalance" readonly>  </td>  
		</tr>
	
		<tr>
			<td colspan="2"> </td>
		<td>	<input type="submit" class="button" style="vertical-align:middle" value="Add Bill">  </td>
			
		<td>	<input type="reset" class="button" style="vertical-align:middle" value="Reset" onclick="resett();"> </td>
	<td>	<a href="home.php"> <input type="button" class="button" style="vertical-align:middle" value="Home"> </a> </td>
	
	</tr>
	</table>	
	
	

</form>
<button class="button mv" style="vertical-align:middle" onclick="discount();"><span>Calculate </span></button> 
</CENTER>
<script>
	
	var d1 = new Date();
	var d = d1.getMonth() + 1;
	
	document.getElementById("date1").value = d1.getFullYear() + "/"+ d  + "/" + d1.getDate(); 
	
	function ttime(){
				var t = new Date();
				document.getElementById("time").innerHTML = t.getHours() + ":" + t.getMinutes() + ":" + t.getSeconds();
				}
	
	setInterval(ttime,1000);
	
	
	function discount(){
	if (document.getElementById("tcheck").value == "Himalaya" || document.getElementById("tcheck").value == "Encanteur" || document.getElementById("tcheck").value == "Center" || document.getElementById("tcheck").value == "Mint" ){
					
					
					var grossSale = document.getElementById("grossSale").value;	
					var dis = document.getElementById("dis").value;
					var disAmount = document.getElementById("disAmount").value ; 
					var paid = document.getElementById("paid").value;
		            var quantity = document.getElementById("quantity").value;
			        var price = document.getElementById("price").value;
					
	
					var grossSale = document.getElementById("grossSale").value = quantity * price;
				
					var dis = document.getElementById("dis").value;
					var disAmount; 
					var paid = document.getElementById("paid").value;
	
					document.getElementById("grossSale").value = grossSale;
					disAmount = grossSale * dis / 100 ;
	
					document.getElementById("disAmount").value = disAmount; 
					var net = document.getElementById("netSale").value = grossSale - disAmount;
					document.getElementById("acBalance").value = net - paid;
	
	

					document.getElementById("disAmount").value 
					var net = document.getElementById("netSale").value = grossSale - disAmount;
					document.getElementById("acBalance").value = net - paid;
					
				} 
				  else {
					
					var grossSale = document.getElementById("grossSale").value;	
					var dis = document.getElementById("dis").value;
					var disAmount; 
					var paid = document.getElementById("paid").value;
	
					disAmount = grossSale * dis / 100 ;
	
					document.getElementById("disAmount").value = disAmount; 
					var net = document.getElementById("netSale").value = grossSale - disAmount;
					document.getElementById("acBalance").value = net - paid;
				} 
	
	}
	
	function resett(){
	
	document.getElementById("disAmount").value = "0";
	document.getElementById("netSale").value = "0";
	document.getElementById("acBalance").value = "0";
	document.getElementById("date1").value = d1.getFullYear() + "/"+ d  + "/" + d1.getDate(); 
	
	
	}
	
	function check(){
				
				if (document.getElementById("tcheck").value == "Himalaya" || document.getElementById("tcheck").value == "Encanteur" || document.getElementById("tcheck").value == "Center" || document.getElementById("tcheck").value == "Mint" ){
					
				//	document.getElementById("dis").disabled = true; 
					
					
				}else {
					
				//	document.getElementById("dis").disabled = false;
				} 
				} 
	
	
	
	
</script>


</body>

</html>