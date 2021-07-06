<?php 
	include('buslist_server.php');

	$con=mysqli_connect("localhost","root","","test");
	function showdata()
	{
		global $con;
		$query = "select * from buslist";
		$run = mysqli_query($con,$query);
		if($run == TRUE)
		{
			?>
			<table border="1" width="80%"  id="customers">
				<h1>Fare Details:</h1>
				<tr>
					<th>Bus Name</th>
					<th>Action</th>
				</tr>
			<?php
			while ($data = mysqli_fetch_assoc($run)) 
			{	
				?>
				
				</tr>
					<tr align="center">
					
					<td><?php echo $data['busname']; ?></td>
					<td><a class="button1" href="buslist_server.php?del=<?php echo $data['id']; ?>">Delete</a></td>
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
