<?php 
//include('shserver.php');
session_start();

	$con=mysqli_connect('localhost','root','','test');
	function showdata()
	{
		global $con;
		
		$sql = "select * from schedule where bus_from ='".$_SESSION['bus_from']."'and bus_to='".$_SESSION['bus_to']."'";
		$run = mysqli_query($con,$sql);
		if($run == TRUE)
		{
			?>
			<table border="1" width="80%" id="customers" >
				<h1>Schedule Information</h1>
				<tr>
					<th>Bus Name</th>
					<th>From</th>
					<th>To</th>
					<th>Date</th>
					<th>Time</th>
				</tr>
			<?php
			while ($data = mysqli_fetch_assoc($run)) 
			{	
				?>
				
				</tr>
					<tr align="center">
					<td><?php echo $data['busname']; ?></td>
					<td><?php echo $data['bus_from']; ?></td>
					<td><?php echo $data['bus_to']; ?></td>
					<td><?php echo $data['busdate']; ?></td>
					<td><?php echo $data['bustime']; ?></td>
					
				</tr>
				<?php 
			}
			?>
			</table>
			<?php
		}
		
		else
		{
			echo "Error!!!";
		}
	}
?>
