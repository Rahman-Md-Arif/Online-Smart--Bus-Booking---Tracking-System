
<html>

	<head>
		<title>AdminPanel | SmartBusBg.com</title>
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
				
		}
		.sel {
    width: 130%;
    padding: 10px 10px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 2px solid blue;
    border-radius: 10px;
}
		input[type=text] {
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
.error{color: red;}
		</style>
	</head>
	<body>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		<?php include 'show_fare.php'; showdata(); ?>
		<!--validation-->
		<?php  
			$lErr=$cErr=$pErr=$fErr="";
			$busname=$bustype=$tprice=$fee="";
			if($_SERVER["REQUEST_METHOD"]== "POST")
			
		{
		if(empty($_POST["busname"]))
		{
			$lErr="*Bus name is required";
		}
		else
		{
			$busname=test_input($_POST["busname"]);
			
		}
		
		
		if(empty($_POST["bustype"]))
		{
			$cErr="*Bus type is required";
		}
		else
		{
			$bustype = test_input($_POST["bustype"]);
		}

            if (empty($_POST["tprice"])) {
               $pErr = "*Seat price is required";
			}
            else {
               $tprice = test_input($_POST["tprice"]);
            }
			 if (empty($_POST["fee"])) {
               $fErr = "*Fee is required";
			}
            else {
               $fee = test_input($_POST["fee"]);
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
		<h1>Fare Information</h1>
		<table>
		<input type="hidden" name="id" value="<?php echo $id; ?>">
		<tr>
				<td>
					<input class="div" type="text" placeholder="Enter Bus Name" name="busname" value="<?php echo $busname; ?>">
					<span class="error"><?php echo $lErr; ?></span>
				</td>
		</tr>
		<tr>
							
				
				<td>
					<select class="sel" name="bustype" value="<?php echo $bustype; ?>">
						<option> Bus Type</option>
						<option>Non-AC Chair Coach</option>
						<option>AC Chair Coach</option>
						<option>Normal AC Coach </option>
						<option>Luxury AC Coach</option>
						<option>Sleeping AC Coach</option>
						<option>VIP AC Coach</option>
					</select>
					<span class="error"><?php echo $cErr; ?></span>
				</td>
		</tr>
		<tr>
			<td>
				<input class="div" type="text" placeholder="Enter price" name="tprice" value="<?php echo $tprice; ?>">
				<span class="error"><?php echo $pErr; ?></span>
			</td>
		</tr>
		<tr>
			<td>
				<input class="div" type="text" placeholder="Enter Fee" name="fee" value="<?php echo $charge; ?>">
				<span class="error"><?php echo $fErr; ?></span>
			</td>
		</tr>
			
		</table>
		<div>
			
			<input class="button" type="submit" name="save" value="Save"/>
			

			<?php 

				$id=0;
				$busname="";
				$bustype="";
				$tprice="";
				$charge="";
				$con=mysqli_connect('localhost','root','','test');
				
				if(!$con)
				{
					die("error");
				}
				else
				{
					if(isset($_POST['save']))
					{
						
					
					$busname=$_POST['busname'];
				    $bustype=$_POST['bustype'];
				    $tprice=$_POST['tprice'];
				    $charge=$_POST['fee'];
					
					$sql="INSERT INTO fare VALUES('','$busname','$bustype','$tprice','$charge')";
					
					mysqli_query($con,$sql);
					
					//header("Location:fare.php");
						
					} 
				}
			     
				 
			?>
		</div>
		</form>

	</body>
</html>
