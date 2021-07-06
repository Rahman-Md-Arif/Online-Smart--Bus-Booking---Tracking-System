
<?php 
	include('fare_server.php');

	$con=mysqli_connect('localhost','root','','test');
	function showdata()
	{
		global $con;
		$query = "select * from fare";
		$run = mysqli_query($con,$query);
		if($run == TRUE)
		{
			?>
			<table border="1" width="80%"  id="customers">
				<h1>Fare Details:</h1>
				<tr>
					<th>Bus Name</th>
					<th>Cabin Class</th>
					<th>Ticket Price</th>
					<th>Charge</th>
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
					<td><?php echo $data['price']; ?></td>
					<td><?php echo $data['charge']; ?></td>
					<td><a class="button1" href="fare_edit.php?edit=<?php echo $data['id']; ?>">Edit</a></td>
					<td><a class="button2" href="fare_server.php?del=<?php echo $data['id']; ?>">Delete</a></td>
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
