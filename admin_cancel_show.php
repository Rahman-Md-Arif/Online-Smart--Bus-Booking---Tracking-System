<?php 
//include('admin_ticket_server.php');
	$con=mysqli_connect('localhost','root','','test');
	function showdata1()
	{
		global $con;
		$query = "select * from cancel";
		$run = mysqli_query($con,$query);
		if($run == TRUE)
		{
			?>
			<table border="1" width="80%" id="customers">
				<h1>Cancel Ticket</h1>
				<tr>
					<th>Mobile</th>
					<th>Transection ID</th>
					<th>Action</th>
				</tr>
			<?php
			while ($data = mysqli_fetch_assoc($run)) 
			{	
				?>
				
				</tr>
					<tr align="center">
					<td><?php echo $data['mobile']; ?></td>
					<td><?php echo $data['transection']; ?></td>
					<td><a class="button" href="admin_cancel_server.php?del=<?php echo $data['id']; ?>">Delete</a></td>
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