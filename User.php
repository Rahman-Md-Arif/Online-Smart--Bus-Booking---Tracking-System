<?php
session_start();
if(isset($_SESSION['email']))
{
	
}
else
{
	header("location:login.php");
}
?>
<html>

	<head>
		<title>UserPanel|SmartBusBooking.com</title>
		<link rel="stylesheet" href="style.css">
		<style>
		h1{color: lightgreen;}
	h3{color:blue;}
	h4{color:white;}
		body {
				height: 100%;
				background-size: cover;
				background-repeat: no-repeat;
				background-attachment: fixed;
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
}


		
		</style>
	</head>
	<body>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" action="userprofile.php">
		<div align=" right">
			<input type="submit" class="button" name="logout" value="Logout" />
			<?php
				if(isset($_POST["logout"]))
				{
					session_destroy();
					header("Location:login.php");
				}
			?>
		</div>
	<table border="0"width="1340" height="900">
		<tr>
			<td class="header">
				<div align="center">
		  <img src="image/logo.jpg" alt="Logo" width="300" >
			<h1>User Panel</h1>
		  </div>
				
			</td>
		</tr>
		<tr>
			<td align= 'center' class="midBody">
				
					<div class="topnav">
						<a  href="edit_userprofile.php"><b style="color:#32CD32">Profile</a>
						<a  href="statement.php"><b style="color:#32CD32">Statement</a>
						<a  href="ticketprint.php"><b style="color:#32CD32">Ticket</a>
						<a  href="ticket.php"><b style="color:#32CD32">Booking</a>
						
					</div>

				</fieldset>
				<iframe name="myIframe" frameborder="0" src="userprofile.php" width="1340" height="900"></iframe>
			</td>
		</tr>
		<tr>
			<td class="footer" align="center">
				Copyright © 2020
			</td>
		</tr>
	</table>
</form>
	</body>
</html>