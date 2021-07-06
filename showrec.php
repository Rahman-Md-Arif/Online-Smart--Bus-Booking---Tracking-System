
<?php 
	$con=mysqli_connect("localhost","root","","launch");
	function showdata()
	{
		global $con;
		$query = "select * from binfo";
		$run = mysqli_query($con,$query);
		if($run == TRUE)
		{
			?>
			<table align="center" border="1" width="80%" >
				<h1>Schedule</h1>
				<tr>
					<th>ID</th>
					<th>Route</th>
					<th>Bus Name</th>
					<th>Mobile</th>
					<th>Action</th>
					<th colspan="2">Action</th>
				</tr>
			<?php
			while ($data = mysqli_fetch_assoc($run)) 
			{	
				?>
				
				</tr>
					<tr align="center">
					<td><?php echo $data['id']; ?></td>
					<td><?php echo $data['route']; ?></td>
					<td><?php echo $data['busname']; ?></td>
					<td><?php echo $data['bmobile']; ?></td>
					<td> Jessore</td>
					<td><a class="button" href="#">Edit</a></td>
					<td><a class="button" href="#">Delete</a></td>
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
