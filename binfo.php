<html>

	<head>
		<title>AdminPanel|ticket.com</title>
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
		<?php include 'showlinfo.php'; showdata(); ?>
		<!--validation-->
		<?php  
			$rErr=$lErr=$mErr="";
			$route=$busname=$bmobile="";
			if($_SERVER["REQUEST_METHOD"]== "POST")
		{
			
		if(empty($_POST["route"]))
		{
			$rErr="*Route is required";
		}
		else
		{
			$route = test_input($_POST["route"]);
		}
		
		if(empty($_POST["busname"]))
		{
			$lErr="*Bus name is required";
		}
		else
		{
			$busname = test_input($_POST["busname"]);
			if (!preg_match("/^[a-zA-Z ]*$/",$lname)) {
			$lErr = "*Only letters and white space allowed"; 
			}
		}
		if(empty($_POST["bmobile"]))
		{
			$mErr="*Mobile no is required";
		}
		else
		{
			$bmobile = test_input($_POST["bmobile"]);
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
		
		<table>
		<input type="hidden" name="id" value="<?php echo $id; ?>">
		<tr>
				<td>
					<input class="div" type="text" placeholder="Enter Route" name="route" >
					<span class="error"><?php echo $rErr; ?></span>
				</td>
		</tr>
		<tr>
			<td>
 			  <input class="div" type="text" placeholder="Enter Bus Name" name="lname">
 			  <span class="error"><?php echo $lErr; ?></span>
			</td>
		</tr>
		<tr>
			<td>
				<input class="div" type="text" placeholder="Enter Mobile" name="lmobile">
				<span class="error"><?php echo $mErr; ?></span>
			</td>
		</tr>
			
		</table>
		<div>
			<input class="button" type="submit" name="save" value="Save"/>
			<?php 

				$id=0;
				$route="";
				$busname="";
				$bmobile="";

				$con=mysqli_connect('localhost','root','','test');
				
				if(!$con)
				{
					die("error");
				}
				else
				{
					if(isset($_POST['save']))
					{
						
					$route=$_POST['route'];
					$busname=$_POST['busname'];
					$bmobile=$_POST['bmobile'];
		
					$sql="INSERT INTO linfo VALUES('','$route','$busname','$bmobile')";
					
					mysqli_query($con,$sql);
					//header("location:linfo.php");		
					} 
				}
			     $result=mysqli_query($con,"SELECT * FROM binfo");
				 
			?>
		</div>
	</form>

		

	</body>
</html>



