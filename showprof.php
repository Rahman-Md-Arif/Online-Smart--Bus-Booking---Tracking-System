<?php 
	include('adserver.php');
	$con=mysqli_connect("localhost","root","","test");
	function showdata()
	{
		global $con;
		$query = "select * from admin";
		$run = mysqli_query($con,$query);
		if($run == TRUE)
		{
			?>
			<table border="1" width="80%" id="customers">
				<h1>Admin Details:</h1>
				<tr>
					<th>Name</th>
					<th>Mobile NO</th>
					<th>User Name</th>
					<th>Password</th>
					<th colspan="2">Action</th>
				</tr>
			<?php
			while ($data = mysqli_fetch_assoc($run)) 
			{	
				?>
				
				</tr>
					<tr>
					
					<td><?php echo $data['name']; ?></td>
					<td><?php echo $data['mobile']; ?></td>
					<td><?php echo $data['username']; ?></td>
					<td><?php echo $data['password']; ?></td>
					<td><a class="button1" href="edit_admin.php?edit=<?php echo $data['id']; ?>">Edit</a></td>
					<td><a class="button2" href="adserver.php?del=<?php echo $data['id']; ?>">Delete</a></td>
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
