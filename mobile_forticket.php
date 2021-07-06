<!DOCTYPE html>
<html>
<head>
	<title>Print Ticket | SmartBusBooking.com</title>
	<style >
		.button {
		    background-color: blue;
		    border: none;
		    color: white;
		    padding: 5px 40px;
		    text-align: center;
		    text-decoration: none;
		    display: inline-block;
		    font-size: 16px;
		    margin: 4px 2px;
		    cursor: pointer;
		    border-radius: 5px;
		}
		input[type=text] {
    width: 60%;
    padding: 8px 8px;
    margin: 5px 0;
    box-sizing: border-box;
    border: 2px solid blue;
    border-radius: 10px;
}
h1{color: blue;}
	</style>
	<script>
    function validateForm() {
    var x = document.forms["myForm"]["mobileno"].value;
    if (x == "") {
        alert("Mobile Number is required.");
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
	<table align="center">
		<tr>
			<td>
				<p style="color: blue">If you want to print your ticket.plese Submit your valid mobile number in this text field.</p>
			</td>
		</tr>
		<tr>
			<td>
				<input type="text" name="mobileno" placeholder="Enter Mobile Number" >
			</td>
		</tr>
	</table>
	<div align="center">
		<input class="button"type="submit" value="Submit" name="save" >
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
			$sql="select * from ticket where  umobile ='".$_POST['mobileno']."';";
			$result=mysqli_query($con,$sql);
			if(mysqli_num_rows($result)>0)
			{
				$row=mysqli_fetch_array($result);
				
				header("location:download_ticket.php");
			}
			else
			{
				echo "Not found..!";
			}
		}
		
	}
	
?>

	</div>
	
</form>
</body>	
</html>