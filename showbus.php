
<?php 
include('busserver.php');
	$con=mysqli_connect("localhost","root","","test");
	function showdata()
	{
		global $con;
		$query = "select * from businfo";
		$run = mysqli_query($con,$query);
		if($run == TRUE)
		{
			?>
			<table border="1" width="80%" id="customers">
				<h1>Information Table:</h1>
				<tr>
					<th>Bus Name</th>
					<th>Bus Tpe</th>
					<th>Seat No</th>
					<th>Fare</th>
					<th>Status</th>
					<th>Bus NO</th>
					<th>Action</th>
					<th colspan="2">Action</th>
				</tr>
			<?php
			while ($data = mysqli_fetch_assoc($run)) 
			{	
				?>
				
				</tr>
					<tr align="center">
					<td><?php echo $data['busname']; ?></td>
					<td><?php echo $data['bustype']; ?></td>
					<td><?php echo $data['seatno']; ?></td>
					<td><?php echo $data['fare']; ?></td>
					<td><?php echo $data['status']; ?></td>
					<td><?php echo $data['busno']; ?></td>
					
					<td><a class="button1" href="edit_cabin.php?edit=<?php echo $data['id']; ?>">Edit</a></td>
					<td><a class="button2" href="cabinserver.php?del=<?php echo $data['id']; ?>">Delete</a></td>
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
