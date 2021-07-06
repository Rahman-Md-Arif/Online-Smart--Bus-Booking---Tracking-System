<?php
session_start();

?>
<html>

	<head>
		<title>AdminPanel | SmartBusBooking.com</title>
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
.error{color: red;}
		</style>
	</head>
	<body>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		
		<?php include 'showbus.php'; showdata(); ?>
		<!--validation-->
		<?php  
			$lErr=$sErr=$fErr=$stErr=$cErr="";
			$lnname=$sno=$efare=$es=$cn="";
			if($_SERVER["REQUEST_METHOD"]== "POST")
		{
		if(empty($_POST["lnname"]))
		{
			$lErr="*Bus name is required";
		}
		else
		{
			$lnname = test_input($_POST["lnname"]);
			
		}
	
	
		if(empty($_POST["sno"]))
		{
			$sErr="*Seat no is required";
		}
		else
		{
			$sno = test_input($_POST["sno"]);
		}
		
            if (empty($_POST["efare"])) {
               $fErr = "*Fare is required";
            }else {
               $efare = test_input($_POST["efare"]);
            }

            if (empty($_POST["es"])) {
               $stErr = "*Status is required";
            }else {
               $es = test_input($_POST["es"]);
            }
			
		if(empty($_POST["cn"]))
		{
			$cErr="*Bus no is required";
		}
		else
		{
			$cn = test_input($_POST["cn"]);
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
		<h1>Bus Information</h1>
		
		<table >
		<input type="hidden" name="id" value="<?php echo $id; ?>">
		<tr>
			<td>
 			  <input  type="text" placeholder="Enter Bus Name" name="lnname">
 			  <span class="error"><?php echo $lErr; ?></span>
			</td>
		</tr>
		<tr>
							
				
				<td>
					<select class="div" name="class">
						<option>Bus Type</option>
						<option>Non-AC Chair Coach</option>
						<option>AC Chair Coach</option>
						<option>Normal AC Coach </option>
						<option>Luxury AC Coach</option>
						<option>Sleeping AC Coach</option>
						<option>VIP AC Coach</option>
					</select>
				</td>
		</tr>
		<tr>
			<td>
 			  <input class="div" type="text" placeholder="Enter Seat-No" name="sno">
 			   <span class="error"><?php echo $sErr; ?></span>
			</td>
		</tr>
		<tr>
			<td>
				<input class="div" type="text" placeholder="Enter fare" name="efare">
				<span class="error"><?php echo $fErr; ?></span>
			</td>
		</tr>
		<tr>
			<td>
 			  <input class="div" type="text" placeholder="Enter Status" name="es">
 			  <span class="error"><?php echo $stErr; ?></span>
			</td>
		</tr>
		<tr>
			<td>
				<input class="div" type="text" placeholder="Enter Bus no" name="cn">
				<span class="error"><?php echo $cErr; ?></span>
			</td>
		</tr>
			
		</table>
		<div>
			<input class="button" type="submit" name="save" value="Save"/>
			<?php 

				$id=0;
                $busname="";
                $bustype="";
                $seatno="";
                $fare="";
                $status="";
                $busno="";
				$con=mysqli_connect("localhost","root","","test");
				
				if(!$con)
				{
					die("error");
				}
				else
				{
					if(isset($_POST['save']))
					{
						
					
					
				    $bustype=$_POST['class'];
				    $seatno=$_POST['sno'];
                    $fare=$_POST['efare'];
                    $status=$_POST['es'];
                    $busno=$_POST['cn'];
					$busname=$_POST['lnname'];
					$sql="INSERT INTO businfo VALUES('','$bustype','$seatno','$fare','$status','$busno','$busname')";
					
					mysqli_query($con,$sql);
					
					//header("Location:businfo.php");
						
					} 
				}
			     
				 
			?>
		</div>
		</form>

	</body>
</html>



