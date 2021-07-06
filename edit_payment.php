<?php 
       include('payserver.php');

		if(isset($_GET['edit']))
		{

			$id=$_GET['edit'];
			$rec=mysqli_query($con,"SELECT * FROM paymentinfo where id=$id");
			$record=mysqli_fetch_array($rec);
			$merchantno=$record['merchantno'];
			$transection=$record['transection'];
			$refno=$record['refno'];
			$id=$record['id'];
		}
		
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style >
	body{background-color: gray;
			margin: 0;
             font-family: Arial, Helvetica, sans-serif;}
			 h1{color: blue;}
			input[type=text] {
    width: 130%;
    padding: 10px 10px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 2px solid blue;
    border-radius: 10px;
}
		.button {
				    background-color: #4CAF50;
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
	</style>
</head>
<body>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		<h1 align="center">Payment Edit</h1>
		<table align="center">
					<input type="hidden" name="id" value="<?php echo $id; ?>">
						<tr>
							<td>
								<input class="div" type="text" placeholder="Enter Merchant mobile no" name="mob" value="<?php echo $merchantno; ?>"/>
							</td>
						</tr>
						<tr>
							<td>
								<input class="div" type="text" placeholder="Enter transection ID" name="tid" value="<?php echo $transection; ?>"/>
							</td>
						</tr>
						<tr>
							<td>
								<input class="div" type="text" placeholder="Enter Referance no" name="refno" value="<?php echo $refno; ?>"/>
							</td>
						</tr>
						<tr>
							<td>
								<input class="button" type="submit" value="Update" name="update">
							</td>
						</tr>
					</table>
	</form>
</body>
</html>