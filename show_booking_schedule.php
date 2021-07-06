<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style >
		 h1{color: #33334d;}
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
	</style>
</head>
<body>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		<!--<table align="center">
			<tr>
					
					<td>
						<a class="button" href="buswise.php" target="myframe">Cabin Select</a>
					</td>

				</tr>
		</table>-->
		<div align="center">
			<input class="button" type="submit" name="select" value="Bus Select">
	<?php
				if(isset($_POST['select']))
				{
					//header("location:buswise.php");
					$con=mysqli_connect('localhost','root','','test');
					if(!$con)
					{
						die("connection error:".mysqli_connect_error());
					}
					else
					{
						$sql="select businfo.* from businfo ";
						$result=mysqli_query($con,$sql);
						if(mysqli_num_rows($result)>0)
						{
							$row=mysqli_fetch_array($result);
							
							header('Location:buswise.php');
						}
					}
				}
?>
		</div>
		<?php include 'booking_schedule.php'; showdata(); ?>
	
</body>
</html>