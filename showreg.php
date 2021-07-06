<?php 
	include('staffserver.php');
	$con=mysqli_connect("localhost","root","","test");
	function showdata()
	{
		global $con;
		$query = "select * from staff_info";
		$run = mysqli_query($con,$query);
		if($run == TRUE)
		{
			?>
			<table border="1" width="80%" id="customers">
				<h1>Register Staff:</h1>
				<tr>
					<th>Name</th>
					<th>Date of Birth</th>
					<th>Address</th>
					<th>Post Office</th>
						<th>City</th>
							<th>Pin Code</th>
								<th>Join Date</th>
									<th>Bus Name</th>
										<th>Role</th>




				
				</tr>
			<?php
			while ($data = mysqli_fetch_assoc($run)) 
			{	
				?>
				
				</tr>
					<tr>
					
					<td><?php echo $data['name']; ?></td>
					<td><?php echo $data['dob']; ?></td>
					<td><?php echo $data['address']; ?></td>
					<td><?php echo $data['post_office']; ?></td>
						<td><?php echo $data['city']; ?></td>
							<td><?php echo $data['pin_code']; ?></td>
								<td><?php echo $data['doj']; ?></td>
									<td><?php echo $data['bus_name']; ?></td>
											<td><?php echo $data['role']; ?></td>
				
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
