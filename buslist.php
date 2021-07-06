<!DOCTYPE html>
<html>
<head>
	<title></title>
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
		<?php include 'buslist_show.php'; showdata(); ?>

		<?php  
			$cabErr="";
			$busname="";
			if($_SERVER["REQUEST_METHOD"]== "POST")
			
		{
		if(empty($_POST["busname"]))
		{
			$cabErr="*Bus name is required";
		}
		else
		{
			$busname=test_input($_POST["busname"]);
			
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
		<h1>Cabin List</h1>
		<table>
			<input type="hidden" name="id" value="<?php echo $id; ?>">
			<tr>
				<td>
					<input type="text" name="busname" placeholder="Enter Bus Name">
					<span class="error"><?php echo $cabErr; ?></span>
				</td>
			</tr>
		</table>
		<div>
			<input class="button" type="submit" name="save" value="Save"/>
			<?php 

				$id=0;
				$busname="";
				$con=mysqli_connect("localhost","root","","test");
				
				if(!$con)
				{
					die("error");
				}
				else
				{
					if(isset($_POST['save']))
					{
						
					
					$busname=$_POST['cabname'];
					
					$sql="INSERT INTO buslist VALUES('','$busname')";
					
					mysqli_query($con,$sql);
					
						
					} 
				}
			     
				 
			?>
		</div>
	</form>
</body>
</html>