<html lang="en">

<head>
		<link rel="stylesheet" type="text/css" href="style1.css" />
		<style>
			.date{
				background-color: white;
				color: black;
				border: 2px solid #4CAF50; /* Green */
				font-size:30px;
				padding: 10px;}
			.date1{
				background-color: #4CAF50;
				color: white;}
			.time{
				background-color: white;
				color: black;
				border: 2px solid #4CAF50; /* Green */
				font-size:30px;
				padding: 10px;
				position:absolute;
				right:0px;
				top:14px;}
			.time1{
				background-color: #4CAF50;
				color: white;
				right:110px;
				width:180px;}
			.title{
			border:2px solid #4CAF50; 
			text-align:center;
			font-family: 'Muli', sans-serif;
			position:absolute;
			left:308px;
			width:750px;
			height:53px;
			top:14px;
			background-color:rgb(220, 220, 220);
			font-size:40px;
			}
			.search{
			
			width:400px;
			height:400px;
			border:2px solid #4CAF50; 
			position:absolute;
			top:210px;
			left:50px;
			transition-duration: 0.5s;
			 
			}
			.update{
			
			width:400px;
			height:400px;
			border:2px solid #4CAF50; 
			position:absolute;
			top:210px;
			left:485px;
			 transition-duration: 0.5s;
			}
			.addnew{
			
			width:400px;
			height:400px;
			border:2px solid #4CAF50; 
			position:absolute;
			top:210px;
			left:920px;
			 transition-duration: 0.5s;
			}
			.addnew:hover{
				top:180px;
			}
			.update:hover{
				top:180px;
			}
			.search:hover{
				top:180px;
			}
			img{
				position:absolute;
				top:80px;
				left:50px;
			
			}
			.addnewimage{
				position:absolute;
				top:100px;
				left:100px;
			}
			.addnewimage1{
				position:absolute;
				top:50px;
				left:50px;
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
}
body{
			background-size:cover;
		     margin:0px;
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


<body onload="sysbackup() ;" >
<!--<div style="width:50px;"> .</div>
 <span class="title">
 <marquee BEHAVIOR="ALTERNATE">HS Enter Prises</marquee> 
 </span>
 <span class="date date1" >Now Date  </span><span class="date" id="date"> </span>
 <span class="time time1" >Now Time </span><span class="time" id="time">  </span> -->
 
<div class="logo"> <img src="logo2.jpg" width="600" height="200"> </div>
<br> <br>
<a href="search.php"><span class="search clk"><img src="search.png " width="300" height="300" class="addnewimage1"></span></a>
<a href="updatepple.php"><span class="update clk"> <img src="update.png " width="300" height="300" class="addnewimage1"></span></a>
<a href="addpple.php"> <span class="addnew clk"> <img src="addnew.png " width="220" height="220" class="addnewimage"> </span> </a>

<script>
	var d1 = new Date();
	var d = d1.getMonth() + 1;
	document.getElementById("date").innerHTML = d1.getFullYear() + "/"+ d  + "/" + d1.getDate();
	
	function ttime(){
				var t = new Date();
				document.getElementById("time").innerHTML = t.getHours() + ":" + t.getMinutes() + ":" + t.getSeconds();
				
			
			}
	
	setInterval(ttime,1000);
function sysbackup(){
	var dd = d1.getDate();
	if (dd == 01 || dd == 1){
		alert("IMPORTENT : Please Backup Your DataBase"); 
		}
}
	
</script>


</body>

</html>