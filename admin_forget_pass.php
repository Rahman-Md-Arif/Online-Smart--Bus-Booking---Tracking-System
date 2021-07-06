<!DOCTYPE html>
<html>
<head>
	<title>Forget Password | SmartBusBooking.com</title>
	<style >
		body {background-image: url("image/background.jpg");
				 height: 100%;
				  background-size: cover;
				background-repeat: no-repeat;}
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
				input[type=email] {
    width: 30%;
    padding: 10px 10px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 2px solid blue;
    border-radius: 10px;
}
		
		
		input[type=text] {
    width: 20%;
    padding: 10px 10px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 2px solid blue;
    border-radius: 10px;
}
.error{color:red;}
	</style>
	<script>
    function validateForm() {
    var x = document.forms["myForm"]["username"].value;
    if (x == "") {
        alert("Username is required.");
        return false;
    }
    else
    {
    	 alert("Successfully Submit.!");
    }
}
 </script>
</head>
<body>
	<form name="myForm" onsubmit="return validateForm()"action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		<table align= "center">
	<a href="Admin.php"><h3>Back</h3></a>
			<tr>
			
				<td>
				
			    <a href="home.php"</a> 

				<img src="image/logo.jpg" alt="Logo" width="300" >
			</td>
		    </tr>
			
	
       </table></br><hr/>
		<div align="center">
			<h2 style="color: red;">Please enter your correct User Name !!!</h2>
			User Name: 	&nbsp;<input type="text" name="username" placeholder="UserName"><br/>
			<input align="center" class="button"type="submit" name="save" value="Submit">


			<?php
	
          if(isset($_POST['save']))
	     {
		$con=mysqli_connect("localhost","root","","test");
		if(!$con)
		{
			die("connection error:".mysqli_connect_error());

		}
		else
		{
		//$email=$_POST['email'];
		$sql="select * from admin where username='".$_POST['username']."'";
		$result=mysqli_query($con,$sql);
		$count=mysqli_num_rows($result);
		//echo $count;
		$row=mysqli_fetch_array($result);
		if($count>0)
		{
			echo $row['password'];
		}
		else
		{
			echo "Not Found..!";
		}
		}
	}

?>
		</div>
		
	</form>
</body>
</html>