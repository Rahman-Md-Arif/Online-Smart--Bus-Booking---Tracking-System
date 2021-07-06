
<?php 
include('bserver.php');
	$con=mysqli_connect('localhost','root','','test');
	function showdata()
	{
		global $con;
		$query = "select * from binfo";
		$run = mysqli_query($con,$query);
		if($run == TRUE)
		{
			?>
			<table border="1" width="80%" id="customers" >
				<h1>Information Table:</h1>
				<tr>
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
					
					<td><?php echo $data['route']; ?></td>
					<td><?php echo $data['busname']; ?></td>
					<td><?php echo $data['bmobile']; ?></td>
					<td><a class="button1" href="edit_launch.php?edit=<?php echo $data['id']; ?>">Edit</a></td>
					<td><a class="button2" href="liserver.php?del=<?php echo $data['id']; ?>">Delete</a></td>
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
