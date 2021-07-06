<?php
ob_start();
session_start();
?>
<html>
	<head>
	<title>Ticket | SmartBusBooking.com</title>
	<link rel="stylesheet" href="style.css">
	<style>
		h1{color: limegreen;}
		h3{color:blue;}
		body { 
				height: 100%;
				background-size: cover;
				background-repeat: no-repeat;}
	
		.ticket-page{
			width: 600px; 
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
				background-color: Green;
				border: none;
				color: white;
				padding: 10px 60px;
				text-align: center;
				text-decoration: none;
				display: inline-block;
				font-size: 16px;
				margin: 4px 2px;
				cursor: pointer;
				border-radius: 5px;
				}
		.div {
			border-style: solid;
			border-color: #92a8d1;
		}
		input[type=text] {
			width: 100%;
			padding: 10px 10px;
			margin: 8px 0;
			box-sizing: border-box;
			border: 2px solid blue;
			border-radius: 10px;
		}
		input[type=date] {
			width: 100%;
			padding: 10px 10px;
			margin: 8px 0;
			box-sizing: border-box;
			border: 2px solid blue;
			border-radius: 10px;
		}
	</style>
	</head>
	<body>
	<table align= "center">
			<tr>
				<td>
		         <a href="home.php"></a> 

				<img src="image/logo.jpg" alt="Logo" width="300" >
			</td>
		    
       </table>
	   </br>
	   
	   <div class="topnav">
  			<a href="home.php"><b style="color:#32CD32">Home</a>
			<a class="active" href="ticket.php">Ticket</a>
  			<a href="login.php"><b style="color:#32CD32">Login</a>
  			<a href="Registration.php"><b style="color:#32CD32">Registration</a>
			<a href="Admin.php"><b style="color:#32CD32">Admin</a>
   			<a href="user_schedule.php"><b style="color:#32CD32">Bus Schedule</a>
			<a href="bus.php"><b style="color:#32CD32">Bus Information</a>
  			
  			<a href="print_ticket.php"><b style="color:#32CD32">Print Ticket </a>
  			<a href="cancel_ticket.php"><b style="color:#32CD32">Cancel Ticket</a>
 		    <a href="about.php"><b style="color:#32CD32">About</a>
 			 <a href="contact.php"><b style="color:#32CD32">Contact</a>
		</div>
		
		<div class="ticket-page">
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" action="booking_schedule.php">
		
			<table align="center">
				<tr>
					<td>
						<fieldset>
						<div align="center">
						
								<img src="image/logo.jpg" alt="logo" width="200">
							</div>
							<legend align="center"><h1 style="color:#Blue;" ><b>Ticket Booking</b></h1></legend> 
							<table width="500" height="100">
								<tr>
									<td><label><h3><b style="color:#FFFFFF">From:</h3></label></td>
									<td><input class="div"type="text" name="from"  placeholder="Enter City" required="" size="20"></td>
								       
								</tr>
								<tr>
							
									<td><label><h3><b style="color:#FFFFFF">To:</h3></label></td>
									<td><input class="div"type="text" name="to" placeholder="Enter City" required=""></td>
								</tr>
								<tr>
									<td><h3><b style="color:#FFFFFF">Date of journey:</h3></td>
									<td><input type="date" name="jdate"required="" ></td>
								</tr>
								
								
						   </table><hr/>
						   
							<table align="center">	
							        <tr >	
									<td >
									
									<input class="button" type="submit" value="Search" name="search">
									
									</div>
							
						    
							
							</div>
									</td>
									</tr>
								
						   </table>
							
						</fieldset>
					</td>
				</tr>
			</table>
		</form>
		<div align="center">
	   <h3><b style="color:#32CD32">© 2020 SmartBusBooking.com All Rights Reserved</b></h3>
	   </div>
	
	</body>
</html>
<?php
	if(isset($_POST['search']))
	{
		
		$con=mysqli_connect('localhost','root','','test');
		if(!$con)
		{
			die("connection error:".mysqli_connect_error());
		}
		else
		{
			$sql="select * from schedule where bus_from='".$_POST['from']."' and bus_to='".$_POST['to']."' and busdate='".$_POST['jdate']."'";

			echo $sql;;
			$result=mysqli_query($con,$sql);
			if(mysqli_num_rows($result)>0)
			{
				$row=mysqli_fetch_array($result);
				$_SESSION['bus_from']=$row['bus_from'];
				$_SESSION['bus_to']=$row['bus_to'];

				header("location:busAvailable.php");	
				
				
				
			}
			else
			{
				echo "No Bus this day..!";
			}
		}
	}
	
?>
