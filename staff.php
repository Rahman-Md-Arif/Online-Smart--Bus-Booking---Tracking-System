<?php
session_start();
?>
<html>
	<head>
	<title>Staff | SmartBusBooig.com</title>
	<link rel="stylesheet" href="style.css">
	<style>
	h1{color: green;}
	h2{color: #0fb900;}
	body {
				 height: 130%;
				background-size: cover;
				background-repeat: no-repeat;}
			 	 
		.staff-page{
			width: 550px; 
			background-image: url("image/window2.jpg"); 
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
input[type=password] {
    width: 100%;
    padding: 10px 10px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 2px solid blue;
    border-radius: 10px;
}
.error{color:red;}
	</style>
	</head>
	<body>
	<table align= "center">
			<tr>
				<td>
			    <a href="home.php"></a> 

				<img src="image/logo.jpg" alt="Logo" width="300" >
			</td>
		    </tr>
			
			
	
       </table>
	   </br>
	  <div class="topnav">
  			<a href="home.php">Home</a>
			<a href="ticket.php">Ticket</a>
  			<a href="login.php">Login</a>
  			<a href="Registration.php">Registration</a>
			<a class="active" href="Staff.php">Staff</a>
   			<a href="user_schedule.php">Bus Schedule</a>
			<a href="bus.php">Bus information</a>
  			
 		     <a href="about.php">About</a>
 			 <a href="contact.php">Contact</a>
		</div> 
		
			<div class="staff-page">
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		
			<table align="center">
				<tr>
					<td>
						<fieldset>
							<div align="center">
							 
                              <img src="image/logo.jpg" alt="logo" width="200">
							</div>
							<legend align="center"><h1 style="color:#5b2192;" ><b>Staff</b></h1></legend> 
							<table width="450" height="100">
								<tr>
									<td><label><h2 style="color:blue">User Name:</h2></label></td>
									<td><input class="div" type="text" placeholder="Enter Username" name="uname" required="" >
									

									
									</td>
									
								</tr>
								<tr>
									<td><label><h2 style="color:blue">Password:</h2></label></td>
									<td><input class="div" type="Password" placeholder="Enter password" name="pass" required="" ></td>
                                   
								</tr>
						   </table><hr/>
						   <div align= "center" >
						 
							  
							
							<input class="button" type="submit" value="Login" name="submit">
							</div>
							
						    <span class="psw" align="center"><a href="admin_forget_pass.php"> <h3 style="color:blue">Forgot Password? <h3></a></span>
							
							</div>
						</fieldset>
					</td>
				</tr>
			</table>
		</form>
		<div align="center">
	   <h3><b style="color:black">©2020 SmartBus.com. All Rights Reserved</b></h3>
	   </div>
	
	</body>
</html>
<?php
	if(isset($_POST['submit']))
	{
		$con=mysqli_connect('localhost','root','','test');  
		if(!$con)
		{
			die("connection error:".mysqli_connect_error());
		}
		else
		{
			$sql="select * from admin where username='".$_POST['uname']."'and password='".$_POST['pass']."';";
			$result=mysqli_query($con,$sql);
			if(mysqli_num_rows($result)>0)
			{
				$row=mysqli_fetch_array($result);
				$_SESSION['name']=$row['username'];
				header("location:adminpanel.php");
			}
			else
			{
				echo "please Enter valid username & Password";
			}
		}
	}
?>