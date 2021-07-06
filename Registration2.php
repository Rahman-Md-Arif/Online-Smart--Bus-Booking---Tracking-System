<?php
			/*$nameErr="";
			$fname="";
			if($_SERVER["REQUEST_METHOD"]=="POST"){
				if(empty($_POST["fname"]))
				{
					$nameErr="*First Name is required";
				}
				else
				{
					$fname=test_input($_POST["fname"]);
					if(!preg_match("/^[a-zA-Z]*$/",$fname))
						$nameErr="*Only leters and white space allowed";
				}
			}*/
			$lnameErr="";
			$lname="";
			if($_SERVER["REQUEST_METHOD"]=="POST"){
				if(empty($_POST["lname"]))
				{
					$lnameErr="*Last Name is required";
				}
				else
				{
					$lname=test_input($_POST["lname"]);
					if(!preg_match("/^[a-zA-Z]*$/",$lname))
						$lnameErr="*Only leters and white space allowed";
				}
			}
			$mobileErr="";
			$mobile="";
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["mobile"])) {
               $mobileErr = "*Mobile no is required";
            }else {
               $mobile = test_input($_POST["mobile"]);
            }
			}
			$emailErr="";
			$email="";
			if($_SERVER["REQUEST_METHOD"]=="POST"){
				if(empty($_POST["email"]))
				{
					$emailErr="*Email is required";
				}
				else
				{
					$email=test_input($_POST["email"]);
					if(!filter_var($email,FILTER_VALIDATE_EMAIL))
					{
						$emailErr="*Invalid email format";
					}
				}
			}
			 $passwordErr="";
			 $password="";
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["pass"])) {
               $passwordErr = "*password is required";
			   if (strlen($_POST["pass"]) <= '8') {
            $passwordErr = "*Your Password Must Contain At Least 8 Characters!";
			}
            }else {
               $password = test_input($_POST["pass"]);
            }
			}
			$dateErr="";
			$date="";
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["date"])) {
               $dateErr = "*Date is required";
            }else {
               $date = test_input($_POST["date"]);
            }
			}
			$genderErr="";
			$gender="";
			if($_SERVER["REQUEST_METHOD"]=="POST"){
				if(empty($_POST["gender"]))
				{
					$genderErr="*At least one gender is required";
				}
				else
				{
					$gender=test_input($_POST["gender"]);
					
				}
			}
			$cityErr="";
			$city="";
			if (empty($_POST["select"])) {
               $cityErr = "*You must select 1";
            }else {
               $city = $_POST["select"];	
            }
            $addErr="";
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["add"])) {
               $addErr = "*Address is required";
            }else {
               $add = test_input($_POST["add"]);
            }
			}
		function test_input($data) {
		  $data = trim($data);
		  $data = stripslashes($data);
		  $data = htmlspecialchars($data);
		  return $data;
		  }
	?>
<html>
	<head>
		<title>
			Registration | SmartBusBooking.com
		</title>
		<script type ="text/javascript">
function validate() {
  var x = document.getElementById("fname").value;
  if (x == "") {
    document.getElementById("Messege").innerHTML="** Name must be filled out";
    return false;
  }
  else
  {
	  true;
}
}
</script>

		<style>
		body {background-image: url("image/back1.jpg");
				 height: 200%;
				  background-size: cover;
				background-repeat: no-repeat;

		}
		.error{color:red;}
		h1{color:limegreen;}
		h2{color: green;}
		.topnav {
		  overflow: hidden;
		  background-color: #333;
		}

		.topnav a {
		  float: left;
		  color: #f2f2f2;
		  text-align: center;
		  padding: 14px 16px;
		  text-decoration: none;
		  font-size: 17px;
		}

		.topnav a:hover {
		  background-color: #ddd;
		  color: black;
		}

		.topnav a.active {
		  background-color: #4CAF50;
		  color: white;
		}
				.registration-page{
			width: 600px; 
			background: white; 
			padding: 30px 50px; 
			box-sizing: border-box;
			position: absolute; 
			left: 50%; 
			top:100%; 
			transform: translate(-50%, -50%);
		    border-radius: 15px;
			}
			h2{
			text-align: center; 
			color: blue; 
			font-weight: normal; 
			margin-bottom: 20px;
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
		.input[type="button"]{background: #bac675; border: 0; cursor: pointer;}
		input[type="button"]:hover{background: #a4b1Sc}

		a:link {
		    color: #0094DE;
		    text-decoration: none;
		}
		a:visited {
		        text-decoration: none;
		color: white;;
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
    width: 80%;
    padding: 10px 10px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 2px solid blue;
    border-radius: 10px;
}
input[type=password] {
    width: 80%;
    padding: 10px 10px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 2px solid blue;
    border-radius: 10px;
}
input[type=email] {
    width: 80%;
    padding: 10px 10px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 2px solid blue;
    border-radius: 10px;
}
input[type=date] {
    width: 80%;
    padding: 10px 10px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 2px solid blue;
    border-radius: 10px;
}

		</style>
		
	</head>
	<body>
	
	<form action="#" method="post" >
		<table align = center >
			<tr>
				<td >
				<a href="home.php"</a> 
				<img src="image/logo.jpg" alt="Logo" width="300" >
			</td>
			
			
		
		    
       </table>
	   <br/>
       <div class="topnav">
  			<a href="home.php"><b style="color:#32CD32">Home</a>
			<a href="ticket.php"><b style="color:#32CD32">Ticket</a>
  			<a href="login.php"><b style="color:#32CD32">Login</a>
  			<a class="active" href="Registration.php">Registration</a>
			<a href="Admin.php"><b style="color:#32CD32">Admin</a>
   			<a href="user_schedule.php"><b style="color:#32CD32">Bus Schedule</a>
			<a href="bus.php"><b style="color:#32CD32">Bus Information</a>
  			
 		 <a href="about.php"><b style="color:#32CD32">About</a>
 			 <a href="contact.php"><b style="color:#32CD32">Contact</a>
		</div> 
	<div class="registration-page">
	
		<form onsubmit="return validate()" class="Sign Up" <!--action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?> method="post" --> >
		<table align= "center" width="500" height="400">
		<fieldset>
		<legend align="center"><h1 style="color:#5b2192;" ><b>Registration</b></h1></legend> 
		<div align = center >
		<img src="image/logo.jpg" alt="Logo" width="200" >
		</div>
	
		
		<div align = center>
		
		<input type="hidden" name="id" value="<?php echo $id; ?>">
		<input id="fname" class="div"type="text" placeholder="First Name" name="fname"/>
		<span id="Messege"></span>
		<!-- <span class="error"><?php echo $nameErr;?></span> -->
		<input id="fname" class="div"type="text" placeholder="Last Name" name="lname"/>
		<span class="error"><?php echo $lnameErr;?></span>
		<input class="div"type="text" placeholder="Mobile No" name="mobile"/>
		<span class = "error"><?php echo $mobileErr;?></span>
		<input class="div"type="email" placeholder="Email" name="email"/>
		<span class="error"><?php echo $emailErr;?></span>
		<input class="div"type="password" placeholder="Password" name="pass"/>
		<span class = "error"><?php echo $passwordErr;?></span>
		<br>
		<label>Date of birth : <br></label>
		<input class="div"type="date" placeholder="Date of Birth" name="date"/> 
		<span class = "error"><?php echo $dateErr;?></span>
		<label><br>Gender : required<br></label>
		<input class="div"type="radio" name="gender" value="male" /> Male
		<input class="div"type="radio" name="gender" value="female"/> Female
		
		<input class="div"type="radio" name="gender" value="other"/> Other
		<span class="error"><?php echo $genderErr;?></span>
				
		<br>
		<label>Address : <br></label>
		<input class="div"type = "text" name = "add">
          <span class = "error"><?php echo $addErr;?></span>
		<br>
		
		<input type="checkbox" name = "checked" value = "1"/> 
		<?php if(!isset($_POST['checked'])){ ?>
               <span class = "error"><?php echo "*You must agree to terms";?></span>
               <?php } ?> 
		I agree to the terms of conditons . <br>
		<div>
			<input class="button"  type="submit" name="submit" value="Sign Up">
		</div><br/>
		<p class="messege">Already Regesterd? <a href='login.php'><b style="color:blue">Login<b></a> </P>
		
		</div>
		
		
		
		
		</form>
		
	</div>
	</div>
	</fieldset>
	</table>
	</form>
	<div align="center">
	   <h3><b style="color:black">©2020 SmartBus.com. All Rights Reserved</b></h3>
	   </div>
	
	</body>
</html>
<?php 
	
	$id="0";
	$firstname="";
	$lastname="";
	$mobile="";
	$email="";
	$password="";
	$rdate="";
	$gender="";
	$address="";
	 $con=mysqli_connect('localhost','root','','mydb');
	 if(isset($_POST['submit']))
  {
	$firstname=$_POST['fname'];
	$lastname=$_POST['lname'];
	$mobile=$_POST['mobile'];
	$email=$_POST['email'];
	$password=$_POST['pass'];
	$rdate=$_POST['date'];
	$gender=$_POST['gender'];
	$address=$_POST['add'];
 
  	$query="INSERT INTO user_data(firstname,lastname,mobile,email,password,rdate,gender,address) VALUES('$firstname','$lastname',$mobile,'$email','$password','$rdate','$gender','$address')";
  	mysqli_query($con,$query);
  	
  }
  

?>

