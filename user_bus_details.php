<?php 

	$con=mysqli_connect('localhost','root','','test');
	function showdata()
	{
		global $con;
		$query = "select * from binfo";
		$run = mysqli_query($con,$query);
		if($run == TRUE)
		{
			?>
			<table border="1" width="100%" id="customers" >
				
				<tr>
					<th>Route</th>
					<th>Bus Name</th>
					<th>Mobile</th>
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