<?php error_reporting (E_ALL ^ E_NOTICE); ?>

<?php
session_start();

?>
<html>

	<head>
		<title>AdminPanel | SmartBusBook.com</title>
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
input[type=file] {
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
input[type=date] {
    width: 130%;
    padding: 10px 10px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 2px solid blue;
    border-radius: 10px;
}
input[type=time] {
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
		<?php include 'showreg.php'; showdata(); ?>
		<!--validation-->
		<?php  
			$nErr=$dobErr=$addErr=$pofErr=$cityErr=$pincErr=$dojErr=$busErr=$roleErr="";
			$name=$dob=$address=$pof=$city=$pinc=$doj=$busname=$role="";
			if($_SERVER["REQUEST_METHOD"]== "POST")
		{
		if(empty($_POST["name"]))
		{
			$nErr="* name is required";
		}
		else
		{
			$name = test_input($_POST["name"]);
			if (!preg_match("/^[a-zA-Z ]*$/",$busname)) {
			$nErr = "*Only letters and white space allowed"; 
			}
		}
	
	
		if(empty($_POST["dob"]))
		{
			$dobErr="*Date of birth is required";
		}
		else
		{
			$dob = test_input($_POST["dob"]);
		}
		
            if (empty($_POST["address"])) {
               $addErr = "*Address is required";
            }else {
               $address = test_input($_POST["address"]);
            }

            if (empty($_POST["pof"])) {
               $pofErr = "*Post Office is required";
            }else {
               $pof = test_input($_POST["pof"]);
            }
			
		if(empty($_POST["city"]))
		{
			$cityErr="*City name is required";
		}
		else
		{
			$city = test_input($_POST["city"]);
			if (!preg_match("/^[a-zA-Z ]*$/",$city)) {
			$cityErr = "*Only letters and white space allowed"; 
			}
		}

		if(empty($_POST["pinc"]))
		{
			$pincErr="*Pin Code name is required";
		}
		else
		{
			$pinc = test_input($_POST["pinc"]);
		}

		if(empty($_POST["doj"]))
		{
			$dojErr="*Date of Joining name is required";
		}
		else
		{
			$doj = test_input($_POST["doj"]);
		}

		if(empty($_POST["busname"]))
		{
			$busErr="*Bus  name is required";
		}
		else
		{
			$busname = test_input($_POST["busname"]);
		}
			
		
		}

		if(empty($_POST["role"]))
		{
			$roleErr="*Role name is required";
		}
		else
		{
			$busname = test_input($_POST["role"]);
		}
			
		
		
		
	function test_input($data)
	{
		$data=trim($data);
		$data= stripslashes($data);
		$data=htmlspecialchars($data);
		return $data;
	}
	?>
		<h1>Staff Info</h1>
		<table>
		<input type="hidden" name="id" value="<?php echo $id; ?>">
			<tr>
				<td>
					<table>
						
						<tr>
							<td>
								<input class="div" type="text" placeholder="Enter Emp ID" name="empId">
								<span class="error"><?php echo $lErr; ?></span>
							</td>
						</tr>
						<tr>
							<td>
								<input class="div" type="text" placeholder="Enter Name" name="name">
								<span class="error"><?php echo $rErr; ?></span>
							</td>
						</tr>
						<tr>
							<td>
								<label>Date of birth : <br></label>
								<input class="div" type="date"  name="dob">
								<span class="error"><?php echo $dErr; ?></span>
							</td>
						</tr>
						<tr>
							<td>
								<input class="div" type="text" placeholder="Enter Address" name="address">
								<span class="error"><?php echo $rErr; ?></span>
							</td>
						</tr>
						<tr>
							<td>
								<input class="div" type="text" placeholder="Enter Post Office" name="post_office">
								<span class="error"><?php echo $rErr; ?></span>
							</td>
						</tr>
						<tr>
							<td>
								<input class="div" type="text" placeholder="Enter City" name="city">
								<span class="error"><?php echo $rErr; ?></span>
							</td>
						</tr>
						<tr>
							<td>
								<input class="div" type="text" placeholder="Enter Pin Code" name="pin_code">
								<span class="error"><?php echo $rErr; ?></span>
							</td>
						</tr>
						<tr>
							<td>
								<label>Date of Joining : <br></label>
								<input class="div" type="date"  name="doj">
								<span class="error"><?php echo $dErr; ?></span>
							</td>
						</tr>
						<tr>
							<td>
								<input class="div" type="text" placeholder="Enter Bus Name" name="bus_name">
								<span class="error"><?php echo $rErr; ?></span>
							</td>
						</tr>
						<tr>
							<td>
								<input class="div" type="text" placeholder="Enter role" name="role">
								<span class="error"><?php echo $rErr; ?></span>
							</td>
						</tr>
						<!--<tr>
							<td>
								<label for="img">Select image:</label>
								<input class="div" type="file" id="img" name="img" accept="image/*">
								<span class="error"><?php //echo $rErr; ?></span>
							</td>
						</tr>-->
						
						
						<!--<tr>
							<td>
								<input class="button" type="submit" name="save" value="Save"/>
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
				$name="";
				$dob="";
				$address="";
				$pof="";
				$city="";
				$pinc="";
				$doj="";
				$busname="";
				$role="";
				$con=mysqli_connect('localhost','root','','test');
				if(!$con)
				{
					die("error");
				}
				else{
				if(isset($_POST['save']))
					  {
						  
						$name=$_POST['name'];
						$dob=$_POST['dob'];
						$address=$_POST['address'];
						$pof=$_POST['post_office'];
						$city=$_POST['city'];
						$pinc=$_POST['pin_code'];
						$doj=$_POST['doj'];
						$busname=$_POST['bus_name'];
						$role=$_POST['role'];
						$query="INSERT INTO staff_info(name,dob,address,post_office,city,pin_code,doj,bus_name,role) VALUES('$name','$dob','$address','$pof','$city','$pinc','$doj','$busname','$role')";
						mysqli_query($con,$query);
						
						//header("Location:schedule.php");
					  } 
				}
			?>
			
		</div>
		</form>
	</form>

	</body>
</html>
