<?php 
       include('shserver.php');

		if(isset($_GET['edit']))
		{

			$id=$_GET['edit'];
			$rec=mysqli_query($con,"SELECT * FROM schedule where id=$id");
			$record=mysqli_fetch_array($rec);
			$busname=$record['busname'];
			$from=$record['bus_from'];
			$to=$record['bus_to'];
			$busdate=$record['busdate'];
			$bustime=$record['bustime'];
			$busstand=$record['busstand'];
			$id=$record['id'];
		}
		
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		body{background-color: gray;
			margin: 0;
             font-family: Arial, Helvetica, sans-serif;}
			 h1{color: blue;}
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
	</style>
</head>
<body>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		<h1 align="center">Schedule Edit</h1>
		<table align="center">
		<input type="hidden" name="id" value="<?php echo $id; ?>">
			<tr>
				<td>
					<table>
						
						<tr>
							<td>
								<input class="div" type="text" placeholder="Enter Bus name" name="xbusname" value="<?php echo $busname; ?>">
								
							</td>
						</tr>
						<tr>
							<td>
								<input class="div" type="text" placeholder="Enter From" name="yfrom" value="<?php echo $from; ?>">
							</td>
						</tr>
						<tr>
							<td>
								<input class="div" type="text"  placholder="Enter To" name="zto" value="<?php echo $to; ?>">
								
							</td>
						</tr>
						<tr>
							<td>
								<input class="div" type="date"  name="adate" value="<?php echo $busdate; ?>">
								
							</td>
						</tr>
						
						<tr>
							<td>
								<input class="div" type="time"  name="btime" value="<?php echo $bustime; ?>">
							</td>
						</tr>
						<tr>
							<td>
								<input class="div" type="text" placeholder="Enter Bus Stand Name" name="pbusstand" value="<?php echo $busstand; ?>">
							</td>
						</tr>
							<td>
								<input class="button" type="submit" name="update" value="Update"/>
							</td>
						</tr>
					</table>
				
				</td>
				
			</tr>
			
		</table>
	</form>
</body>
</html>