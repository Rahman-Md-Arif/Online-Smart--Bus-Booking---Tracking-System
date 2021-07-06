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
		<?php include 'showschedule.php'; showdata(); ?>
		<!--validation-->
		<?php  
			$xErr=$lErr=$rErr=$dErr=$tErr=$pErr="";
			$busstand=$busname=$from=$to=$date=$time="";
			if($_SERVER["REQUEST_METHOD"]== "POST")
		{
		if(empty($_POST["busname"]))
		{
			$lErr="*Bus name is required";
		}
		else
		{
			$busname = test_input($_POST["busname"]);
			if (!preg_match("/^[a-zA-Z ]*$/",$busname)) {
			$lErr = "*Only letters and white space allowed"; 
			}
		}
	
	
		if(empty($_POST["from"]))
		{
			$rErr="*Route is required";
		}
		else
		{
			$from = test_input($_POST["from"]);
		}
		if(empty($_POST["to"]))
		{
			$rErr="*Route is required";
		}
		else
		{
			$to = test_input($_POST["to"]);
		}

      



		
            if (empty($_POST["date"])) {
               $dErr = "*Date is required";
            }else {
               $date = test_input($_POST["date"]);
            }

            if (empty($_POST["time"])) {
               $tErr = "*Time is required";
            }else {
               $time = test_input($_POST["time"]);
            }


            if (empty($_POST["busstand"])) {
               $tErr = "*Bus Stand is required";
            }else {
               $time = test_input($_POST["busstand"]);
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
		<h1>Schedule</h1>
		<table>
		<input type="hidden" name="id" value="<?php echo $id; ?>">
			<tr>
				<td>
					<table>
						
						<tr>
							<td>
								<input class="div" type="text" placeholder="Enter Bus Name" name="busname">
								<span class="error"><?php echo $lErr; ?></span>
							</td>
						</tr>
						<tr>
							<td>
								<input class="div" type="text" placeholder="Starting point" name="from">
								<span class="error"><?php echo $rErr; ?></span>
							</td>
						</tr>
						<tr>
							<td>
								<input class="div" type="text" placeholder="Last Destination" name="to">
								<span class="error"><?php echo $rErr; ?></span>
							</td>
						</tr>
						<tr>
							<td>
								<input class="div" type="date"  name="date">
								<span class="error"><?php echo $dErr; ?></span>
							</td>
						</tr>
						<tr>
							<td>
								<input class="div" type="time"  name="time">
								<span class="error"><?php echo $tErr; ?></span>
							</td>
						</tr>
						
						<tr>
							<td>
								<input class="div" type="text" placeholder="Enter Bus Busstand" name="busstand">
								<span class="error"><?php echo $xErr; ?></span>
							</td>
						</tr>
					</table>
				
				</td>
				
			</tr>
			
		</table>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		<div>
		<input class="button" type="submit" name="save" value="Save"/>
		<?php 
				$id=0;
				$busname="";
				$from="";
				$to="";
				$busdate="";
				$bustime="";
				$busstand="";
				
				$con=mysqli_connect('localhost','root','','test');
				if(!$con)
				{
					die("error");
				}
				else{
				if(isset($_POST['save']))
					  {
						 $busstand=$_POST['busstand']; 
						$busname=$_POST['busname'];
						$from=$_POST['from'];
						$to=$_POST['to'];
						$busdate=$_POST['date'];
						$bustime=$_POST['time'];
						
						$query="INSERT INTO schedule(busname,bus_from,bus_to,busdate,bustime,busstand) VALUES('$busname','$from','$to','$busdate','$bustime','$busstand')";
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



