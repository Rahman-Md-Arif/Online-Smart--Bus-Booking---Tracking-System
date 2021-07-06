<!DOCTYPE html>
<html>
<head>
	<title>Cancel Ticket | SmartBusBooking.com</title>
	<style >
	body{background-color: gray;
			margin: 0;
             font-family: Arial, Helvetica, sans-serif;}
			 h1{color: blue;}
		.button {
		    background-color: blue;
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
		input[type=text] {
    width: 50%;
    padding: 10px 10px;
    margin: 10px 0;
    box-sizing: border-box;
    border: 2px solid blue;
    border-radius: 10px;
}
h1{color: blue;}
	</style>
	<script>
    function validateForm() {
    var x = document.forms["myForm"]["mobileno"].value;
    var y = document.forms["myForm"]["transid"].value;
    if (x == "") {
        alert("Mobile Number is required");
        return false;
    }
    if (y == "") {
        alert("Transection id is required");
        return false;
    }
    
}
 </script>
</head>
<body>
	<form name="myForm" onsubmit="return validateForm()"action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		<table border="0" align="center">
			<a href="ticket.php">Home</a>
				<tr>
					
					<td>
						<img src="logoproject.jpg" width="250"><br/>
						<h1>Cancel Ticket</h1>
					</td>
					
				</tr>
				
			</table>
	<table align="center">
		<input type="hidden" name="id" value="<?php echo $id; ?>">
		<tr>
			<td>
				<p style="color: red;">If you want to cancel your ticket.plese Submit your booking mobile number and payment transection in this text field.</p>
			</td>
		</tr>
		<tr>
			<td>
				<input type="text" name="mobileno" placeholder="Enter Mobile Number" >
			</td>
		</tr>
		<tr>
			<td>
				<input type="text" name="transid" placeholder="Enter Transection No" >
			</td>
		</tr>
	</table>
	<div align="center">
		<input class="button"type="submit" value="Submit" name="save" >
		<?php 

				$id=0;
                $mobile="";
                $transection="";
				$con=mysqli_connect("localhost","root","","test");
				
				if(!$con)
				{
					die("error");
				}
				else
				{
					if(isset($_POST['save']))
					{
					$mobile=$_POST['mobileno'];	
					$transection=$_POST['transid'];	
					$sql="INSERT INTO cancel VALUES('','$mobile','$transection')";
					
					mysqli_query($con,$sql);
					
					header("Location:ticket.php");
						
					} 
				}
			     
				 
			?>

	</div>
	
</form>
</body>	
</html>