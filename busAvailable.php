<?php
session_start();
if(isset($_SESSION['bus_from']))
{
	
}
else
{
	header("location:home.php");
}
	if(isset($_POST['search']))
	{
		
	}
	
?>
<html>
	<head>
		<title>Ticket Details | SmartBusBooking.com</title>
		<link rel="stylesheet" href="style.css">
		<style>
		body{background-image: url("image/back4.jpg");
		height: 100%;
				  background-size: cover;
				background-repeat: no-repeat;
		background-attachment: fixed;
			margin: 0;
             font-family: Arial, Helvetica, sans-serif;}
			 h1{color: #33334d;}
		h2{color: green;}
		.button {
		    background-color: green;
		    border: none;
		    color: white;
		    padding: 5px 60px;
		    text-align: center;
		    text-decoration: none;
		    display: inline-block;
		    font-size: 16px;
		    margin: 4px 2px;
		    cursor: pointer;
		    border-radius: 5px;
		}
		.button {
  background-color: #ff3333; 
  color: black; 
  border: 2px solid  #cc0000;
  border-radius: 8px;
  padding: 10px;
}

.button:hover {
  background-color:  #cc0000;
  color: white;
		.error
		{
			color:red;
		}
		</style>
	</head>
	<body>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" >
		<div align=" right">
			<input type="submit" class="button" name="Exit" value="Exit" />
			<?php
				if(isset($_POST["Exit"]))
				{
					session_destroy();
					header("Location:home.php");
				}
			?>
		</div>
	
		
		
		
			
		<tr height="100">
			<td>
			<table border="0" align="center">
				<tr>
					
					<td>
						<img src="image/logo.jpg" width="300"><br/>
						<h1>Booking Information</h1>
					</td>
					
				</tr>
				
			</table>
			</td>
		</tr>
			<tr>
			 <td>
				<table>
				<tr>
					<td class="mid">
						
						<iframe width="1340" height="900" name="myframe" src="show_booking_schedule.php" frameborder="0"> </iframe>
					</td>
					</tr>
				</table>
				</td>
			</tr>
			
				<tr height="50">
					<td >
						<table align="center">
							<tr>
							<td>
							     <h3>2020 SmartBusBooking.com  Copyright@2020</h3>
							</td>
							</tr>
						</table>
					</td>
				</tr>
			
			</td>
			</tr>
			</table>
		</form>
	</body>
</html>