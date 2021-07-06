<html>
	<head>
		<title>
			Bus Schedule | SmartBusBooking.com
		</title>
		<link rel="stylesheet" href="style.css">
		<style>
		body {background-image: url("image/background.jpg");
				 height: 100%;
				  background-size: cover;
				background-repeat: no-repeat;
		}
		h1{color: limegreen;}
		h2{color: white;}
		

		
		.bus-page{
			width: 1200px; 
			background-image: url("image/window.jpg");
			padding: 20px 20px; 
			box-sizing: border-box; 
			position:relative; 
			left: 50%; 
			top: 35%; 
			transform: translate(-50%, -50%);
			border-radius: 15px;
			}

	.button {
		    background-color: blue;
		    border: none;
		    color: white;
		    padding: 5px 70px;
		    text-align: center;
		    text-decoration: none;
		    display: inline-block;
		    font-size: 16px;
		    margin: 4px 2px;
		    cursor: pointer;
		    border-radius: 5px;
		}}

		

		
		#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
}
	input[type=text] {
    width: 60%;
    padding: 10px 10px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 2px solid blue;
    border-radius: 10px;
}
		</style>
	</head>
	<body>
		<table align = "center">
			<tr>
				<td>
				 <a href="home.php"</a> 
				<img src="image/logo.jpg" alt="Logo" width="300" >
			</td>
		    
       </table>
	   </br>
       <div class="topnav">
  			<a  href="home.php"><b style="color:#32CD32">Home</a>
			<a href="ticket.php"><b style="color:#32CD32">Ticket</a>
  			<a href="login.php"><b style="color:#32CD32">Login</a>
  			<a href="Registration.php"><b style="color:#32CD32">Registration</a>
			<a href="Admin.php"><b style="color:#32CD32">Admin</a>
   			<a class="active" href="user_schedule.php">Bus Schedule</a>
			<a href="bus.php"><b style="color:#32CD32">Bus Information</a>
  			<a href="about.php"><b style="color:#32CD32">About</a>
 			<a href="contact.php"><b style="color:#32CD32">Contact</a>
		</div>
		

         		<div class="bus-page">

		<form  class="bus" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		
			<table align="center">
				<tr>
					<td>
						<fieldset>
							<div align="center">
							 
                              <img src="image/logo.jpg" alt="logo" width="200">
							</div>
							<legend align="center"><h1 style="color:#Blue;" ><b>Bus Schedule</b></h1></legend> 
							<table width="1100" height="300">
							   <div align="center"><input type="text" onkeyup="getData(this.value)" placeholder="Search" /> </div>
			<br/>
			<p id="sug">Suggestion:</p>
					


		
	   </div>
						</fieldset>
					</td>
				</tr>
			</table>
		</form> 
		<?php include 'user_schedule_show.php'; showdata(); ?>

		<script >
			function getData(str)
			{
				if(str.length==0)
				{
					document.getElementById("sug").innerHTML="empty";
				}
				else
				{

					var xhttp= new XMLHttpRequest();

					xhttp.onreadystatechange= function()
					{
 
						if(this.readyState==4 && this.status==200)
						{
							document.getElementById("sug").innerHTML=this.responseText;
						}
					};

					xhttp.open("GET","data_schedule.php?q="+str,true);
					xhttp.send();
				}
			}
		</script>
		<div align="center">
	   <h3><b style="color:#32CD32">©2020 SmartBusBooking.com. All Rights Reserved</b></h3>
	   </div>
	
	</body>
		
	</body>
</html>