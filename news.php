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
				.button2 {
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
				.div {
    border-style: solid;
    border-color: #92a8d1;
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
		
		<?php include 'shownews.php'; showdata(); ?>
		<!--validation-->
		<?php  
			$tErr="";
			$tarea="";
			if($_SERVER["REQUEST_METHOD"]== "POST")
			{
			
			if(empty($_POST["tarea"]))
		{
			$tErr="*Text is required for news!";
			
			}
		
		else
		{
			$tarea = test_input($_POST["tarea"]);
			
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

			<tr>
				<td>
						<textarea placeholder="Enter News" name="tarea"  rows="4" cols="40"></textarea>
						<span class="error"><?php echo $tErr; ?></span>
					</td>
				</tr>
			
		</table>
		<div>
			<input class="button" type="submit" name="save" value="Save"/>
			<?php  

				$text="";

				$con=mysqli_connect('localhost','root','','test');
				
				if(!$con)
				{
					die("error");
				}
				else
				{
					if(isset($_POST['save']))
					{
						
					$text=$_POST['tarea'];
		
					$sql="INSERT INTO news VALUES('$text')";
					
					mysqli_query($con,$sql);		
					} 
				}
			    
				 
			?>
		</div>
		</form>
	</body>
</html>



