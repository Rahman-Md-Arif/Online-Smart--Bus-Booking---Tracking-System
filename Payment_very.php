<html>
	

	<head>
		<title>Passenger Details | SmartBusBoig.com</title>
		<style>
		body{background-color: gray;
			margin: 0;
             font-family: Arial, Helvetica, sans-serif;}
			 h1{color: blue;}
		h2{color: green;}
		h3{color: white;}
		.button {
		    background-color: green;
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
    width: 100%;
    padding: 10px 10px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 2px solid blue;
    border-radius: 10px;
}
		</style>
		 <script>
    function validateForm() {
    var x = document.forms["myForm"]["taid"].value;
    if (x == "") {
        alert("Transaction id is required.");
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
	
		<form target="_top" name="myForm" onsubmit="return validateForm()" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		<div align="center">
		
		</div>
			<p align="center"><h1>Follow the step:</h1></p>
			<p>Our Bkash merchant number is <b style="color: red;">XXXXXXXXXXXX</b> Follow the payment option and give reference number <b style="color: red;">1</b> </p>
				<table align="center">
					<input type="hidden" name="id" value="<?php echo $id; ?>">
				<tr>
					<td>
							<h1>Payment Verify</h1>
							<table>
								<label>Merchant No:XXXXXXXXXXXX</label>
								<tr>
									<td>
										<input class="div" type="text" placeholder="01XXXXXXXXX" name="mobile">
									</td>
								</tr>
								<tr>
									<td>
										<input class="div" type="text" placeholder="Bkash Transaction ID" name="taid">
									</td>
								</tr>
								
						
					</td>
				</tr>
				</table>
				<div>
				<input type="submit"class="button" value="Varify" name="varify">
				<?php
			$id=0;
			$mobile="";
			$trnasid="";
			
			$con=mysqli_connect('localhost','root','','test');
				
				if(!$con)
				{
					die("error");
				}
				else
				{
					if(isset($_POST['verify']))
					{
						
						$mobile=$_POST['mobile'];
						$trnasid=$_POST['taid'];
						
								
					
					$sql="INSERT INTO varify VALUES('','$mobile','$trnasid')";
					
					mysqli_query($con,$sql);
					
					
						
					} 
				}

			?>
				</div>
				<table align="center">
					
					<tr>
						<h3 align="center">We accept</h3>
						<td>
							<img src="image/bkash.jpg" width="100">
						</td>
						<td>
							<img src="image/rocket.jpg" width="100">
						</td>
					</tr>

				</table>
				<div align="center">
					<h3 align="center">BKash Payment Process</h3>
					<img src="image/bKash-payment.jpg" width="500">
				</div>
				
		</form>

	</body>
</html>