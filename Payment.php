<?php
session_start();

?>
<html>

	<head>
		<title>AdminPanel | SmartBusBog.com</title>
		<style>
		body{background-color: gray;
			margin: 0;
             font-family: Arial, Helvetica, sans-serif;}
			 h1{color: blue;}
		h2{color: green;}
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
				.button1 {
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
				.button2 {
				    background-color: red;
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
				.div {
    border-style: solid;
    border-color: #92a8d1;
		}
		input[type=text] {
    width: 130%;
    padding: 10px 10px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 2px solid blue;
    border-radius: 10px;
}
#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
}
.error{color:red;}

		</style>
	</head>
	<body>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		
		<?php include 'showpay.php'; showdata(); ?>
		<!--validation-->
		<?php  
			$mErr=$tErr=$rErr="";
			$mob=$tid=$refno="";
			if($_SERVER["REQUEST_METHOD"]== "POST")
			
		{
			
			if(empty($_POST["mob"]))
		{
			$mErr="*Merchant Mobile no is required";
		}
		else
		{
			$mob = test_input($_POST["mob"]);
		}
		
		
		if(empty($_POST["tid"]))
		{
			$tErr="*Transection ID is required";
		}
		else
		{
			$tid = test_input($_POST["tid"]);
		}

            if (empty($_POST["refno"])) {
               $rErr = "*Referance no is required";
			}
            else {
               $refno = test_input($_POST["refno"]);
            }
			
		
		}
		
	function test_input($data)
	{
		$data=trim($data);
		$data= stripslashes($data);
		$data=htmlspecialchars($data);
		return $data;
	}
?>	
		<table>
			<tr>
				<td>
				<table>
					<input type="hidden" name="id" value="<?php echo $id; ?>">
						<tr>
							<td>
								<input class="div" type="text" placeholder="Enter Merchant mobile no" name="mob"/>
								<span class="error"><?php echo $mErr; ?></span>
							</td>
						</tr>
						<tr>
							<td>
								<input class="div" type="text" placeholder="Enter transection ID" name="tid"/>
								<span class="error"><?php echo $tErr; ?></span>
							</td>
						</tr>
						<tr>
							<td>
								<input class="div" type="text" placeholder="Enter Referance no" name="refno"/>
								<span class="error"><?php echo $rErr; ?></span>
							</td>
						</tr>
						<!--<tr>
							<td>
								<input class="button" type="button" value="Save" name="save">
							</td>
						</tr>-->
					</table>
				</td>
				</tr>
		</table>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		<div>
		<input class="button" type="submit" name="save" value="Save"/>
		<?php 
				$id=0;
				$merchantno="";
				$transection="";
				$refno="";
				$con=mysqli_connect('localhost','root','','test');
				if(!$con)
				{
					die("error");
				}
				else{
				if(isset($_POST['save']))
					  {
						  
						$merchantno=$_POST['mob'];
						$transection=$_POST['tid'];
						$refno=$_POST['refno'];
						$query="INSERT INTO paymentinfo VALUES('','$merchantno','$transection','$refno')";
						mysqli_query($con,$query);
						//echo $query;
						//header("location:payment.php");
					  } 
				}
			?>
		</div>
		</form>
		

	</body>
</html>



