<?php 
       include('busserver.php');

		if(isset($_GET['edit']))
		{

			$id=$_GET['edit'];
			$rec=mysqli_query($con,"SELECT * FROM businfo where id=$id");
			$record=mysqli_fetch_array($rec);
			$busname=$record['busname'];
            $bustype=$record['bustype'];
            $seatno=$record['seatno'];
            $fare=$record['fare'];
            $status=$record['status'];
            $busno=$record['busno'];
			$id=$record['id'];
		}
		
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
	body{background-color: gray;
			margin: 0;
             font-family: Arial, Helvetica, sans-serif;}
			 h1{color: blue;}
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
					input[type=text] {
    width: 130%;
    padding: 10px 10px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 2px solid blue;
    border-radius: 10px;
}
	</style>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		
		<h1 align="center">Bus Information Edit</h1>
		
		<table align="center">
		<input type="hidden" name="id" value="<?php echo $id; ?>">
		<tr>
			<td>
 			  <input  type="text" placeholder="Enter Bus Name" name="lnname" value="<?php echo $busname; ?>">
			</td>
		</tr>
		<tr>
							
				
				<td>
					<select class="div" name="class" value="<?php echo $bustype; ?>">
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
 			  <input class="div" type="text" placeholder="Enter Seat-No" name="sno" value="<?php echo $seatno; ?>">
			</td>
		</tr>
		<tr>
			<td>
				<input class="div" type="text" placeholder="Enter fare" name="efare" value="<?php echo $fare; ?>">
			</td>
		</tr>
		<tr>
			<td>
 			  <input class="div" type="text" placeholder="Enter Status" name="es" value="<?php echo $status; ?>">
			</td>
		</tr>
		<tr>
			<td>
				<input class="div" type="text" placeholder="Enter Bus no" name="cn" value="<?php echo $busno; ?>">
			</td>
		</tr>
			<tr>
				<td>
					<input class="button"type="submit" name="update" value="Update">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>