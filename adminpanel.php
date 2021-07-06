<!--<?php
 // session_start();
//  if(isset($_SESSION['uname']))
{
	
}
//else
{
//header("location:Admin.php");
}
?>-->
<?php
session_start();
if(isset($_SESSION['name']))
{
	
}
else
{
	header("location:Admin.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>AdminPanel|SmartBusBooking.com</title>
	<style >
		body{background-color: gray;
			margin: 0;
             font-family: Arial, Helvetica, sans-serif;}
             .button {
				    background-color: #4CAF50;
				    border: none;
				    color: white;
				    padding: 5px 30px;
				    text-align: center;
				    text-decoration: none;
				    display: inline-block;
				    font-size: 16px;
				    margin: 4px 2px;
				    cursor: pointer;
				    border-radius: 5px;
				}
	</style>
</head>
<body>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		<div align=" right">
			<input type="submit" name="logout" value="Logout" class="button"/>
			<?php
				if(isset($_POST["logout"]))
				{
					session_destroy();
					header("Location:Admin.php");
				}
			?>
		</div>
		<table align= "center">
			<tr>
				<td>
			    <a href="home.php"></a> 

				<img src="image/logo.jpg" alt="Logo" width="300" >
			</td>
		    </tr>
			
	
       </table>
	<table border="1"width="1340" height="700">
		<tr>
			<td class="header">
				<div align="center">
		  <img src="image/logo.jpg" alt="Logo" width="150" >
			<h1>Admin Panel</h1>
		  </div>
				
			</td>
		</tr>
		<tr>
			<td align= 'center' class="midBody">
				<fieldset>
					<legend>Account</legend>
					<div>
						<a class="button" href="profile copy.php" target="myIframe">Profile</a>
						<a class="button" href="schedule.php" target="myIframe">Schedule</a>
						<a class="button"href="register_staff.php" target="myIframe">Register staff</a>
						<a class="button"href="payment.php" target="myIframe">Payment</a>
						<a class="button"href="news.php" target="myIframe">News</a>
						<a class="button"href="fare.php" target="myIframe">Fare</a>
						<a class="button"href="admin_ticket.php" target="myIframe">Ticket</a>

					</div>

				</fieldset>
				<iframe name="myIframe" frameborder="0" src="profile copy.php" width="1340" height="700"></iframe>
			</td>
		</tr>
		<tr>
			<td align="center"class="footer">
				©2020 SmartBusBooking.com. All Rights Reserved
			</td>
		</tr>
	</table>
</form>
</body>
</html>