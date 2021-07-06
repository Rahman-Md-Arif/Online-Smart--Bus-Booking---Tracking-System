<!DOCTYPE html>
<html>
<head>
	<title>Forget Password | SmartBusBooking.com</title>
	<style >
		body {background-image: url("image/background.jpg");}
		.button {
		    background-color: blue;
		    border: none;
		    color: white;
		    padding: 5px 70px;
		    text-align: center;
		    text-decoration: none;
		    display: inline-block;
		    font-size: 18px;
		    margin: 4px 2px;
		    cursor: pointer;
		    border-radius: 5px;
		}
		
		input[type=email] {
    width: 20%;
    padding: 10px 10px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 2px solid blue;
    border-radius: 10px;
}
	</style>
	<script>
    function validateForm() {
    var x = document.forms["myForm"]["email"].value;
    if (x == "") {
        alert("Email is required.");
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
		<a href="login.php"><b style="color:#32CD32;">Back</a>
		<div align="center">
			<p> <b style="color:#32CD32;">Please enter your register <b style="color: red;">Email</b> address</p>
			Email:<input type="email" name="email" placeholder="example@gmail.com"><br/>
			<input class="button"type="submit" name="save" value="Submit">


			<?php
	
          if(isset($_POST['save']))
	     {
		$con=mysqli_connect('localhost','root','','test');
		if(!$con)
		{
			die("connection error:".mysqli_connect_error());

		}
		else
		{
		//$email=$_POST['email'];
		$sql="select * from register where email='".$_POST['email']."'";
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



	/*$con=mysqli_connect("localhost","root","","test");
	if(isset($_POST['submit']))
	{
		$email=$_POST['email'];
		$sql="select * from register where email='{$email}'";
		$result=mysqli_query($con,$sql);
		$count=mysqli_num_rows($result);
		echo $count;
	}*/
?>
		</div>
		
	</form>
</body>
</html>