<?php
ob_start();
session_start();
?>
<html>
	<head>
	<title>Login | SmartBusBooking.com</title>
	<link rel="stylesheet" href="style.css">
	<style>
	h1{color: limegreen;}
	h3{color:blue;}
	h4{color:white;}
	body {
			height: 100%;
			background-size: cover;
			background-repeat: no-repeat;}
		
		
		.login-page{
			width: 600px; 
			background-image: url("image/window2.jpg"); 
			padding: 20px 20px; 
			box-sizing: border-box; 
			position:relative; 
			left: 50%; 
			top: 35%; 
			transform: translate(-50%, -50%);
			border-radius: 15px;
			}
		h2{
			text-align: center; 
			color: blue; 
			font-weight: normal; 
			margin-bottom: 10px;
			}
		.input{

			width: 100%; 
			background: none; 
			border: 1px solid #fff; 
			border-radius: 3px; 
			padding: 6px 15px; 
			box-sizing: border-box; 
			margin-bottom: 20px; 
			font-size:16px;
			}
		

		
		a:visited {
		        text-decoration: none;
		color: white;
		}
		.button {
		    background-color: Green;
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
		input[type=email] {
    width: 130%;
    padding: 10px 10px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 2px solid blue;
    border-radius: 10px;
}
input[type=password] {
    width: 130%;
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
				<a href="home.php"</a> 
				<img src="image/logo.jpg" alt="Logo" width="300" >
			</td>
		    
       </table>
	   </br>
	   <div class="topnav">
  			<a href="home.php"><b style="color:#32CD32">Home</a>
			<a href="ticket.php"><b style="color:#32CD32">Ticket</a>
  			<a class="active" href="login.php">Login</a>
  			<a href="Registration.php"><b style="color:#32CD32">Registration</a>
			<a href="Admin.php"><b style="color:#32CD32">Admin</a>
   			<a href="user_schedule.php"><b style="color:#32CD32">Bus Schedule</a>
			<a href="bus.php"><b style="color:#32CD32">Bus Information</a>
  			
			<a href="about.php"><b style="color:#32CD32">About</a>
 		    <a href="contact.php"><b style="color:#32CD32">Contact</a>
		</div>
		</br>
		
			<div class="login-page">

		
	<fieldset>	
		<table class="form" align="center" width="150" height="100">	
	<form class="Sign in"  action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" > 

	
		<tr><td>
		<img src="image/logo.jpg" alt="Logo" width="250" >
		</td>
<legend align="center"><h1 style="color:#32CD32;" ><b>Login</b></h1></legend> 		
		</tr>
		<tr>  
		<td>
		</tr>
				<tr><td><input class="div"type="email" placeholder="Enter your Email" name="email"  required="" /></td></tr>
		        
		<tr><td><input class="div" type="password" placeholder="Enter your Password" name="pass"  required="" /></td></tr>
		
		<tr><td><input class="button" type="Submit"  value="Sign In" name="submit" ></td></tr>
		
		
		<tr><td><p><span class="psw" align="right"> <a href="forget_pass.php">Forget Password?</a></span></p></td></tr>
		 <br/> 
		<tr><td><p class="messege">Create new account! <a href="Registration.php"><b style="color:blue">Sign Up</b></a> </P></td></tr>
	
	</fieldset>
	</form>
	</table>
	</table>
	</div>
	</form>
	<div align="center">
	   <h3><b style="color:#32CD32">© 2020 SmartBus.com All Rights Reserved</b></h3>
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
			$sql="select * from register where email='".$_POST['email']."'and password='".$_POST['pass']."'";
			$result=mysqli_query($con,$sql);
			if(mysqli_num_rows($result)>0)
			{
				$row=mysqli_fetch_array($result);
				$_SESSION['email']=$row['email'];
				header("location:User.php");
			}
			else
			{
				echo "Please Enter valid Email & password";
			}
		}
	}
?>