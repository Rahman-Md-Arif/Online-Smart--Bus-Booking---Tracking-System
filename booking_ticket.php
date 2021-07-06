	<?php 
//include('shserver.php');
	$con=mysqli_connect("localhost","root","","test");
	function showdata()
	{
		global $con;
		
		$query="select ticket.*,fare.price from ticket inner join fare";
		//$query="select * from ticket ";
		$run = mysqli_query($con,$query);
		if($run == TRUE)
		{
			?>
			<table border="1" width="80%" id="customers">
				<h1>Ticket</h1>
				<tr>
					<th>Name</th>
					<th>Mobile</th>
					<th>Email</th>
					<th>Journy Date</th>
					<th>Bus Name</th>
					<th>Bus Type</th>
					<th>Number of Seat</th>
					<th>Seat No</th>
					<th>Ticket price</th>
					<th>Bus Stand</th>
				</tr>
			<?php
			while ($data = mysqli_fetch_assoc($run)) 
			{	
				?>
				
				</tr>
					<tr align="center">
					<td><?php echo $data['uname']; ?></td>
					
					<td><?php echo $data['gender']; ?></td>
					<td><?php echo $data['umobile']; ?></td>
					<td><?php echo $data['email']; ?></td>
					<td><?php echo $data['busname']; ?></td>
					<td><?php echo $data['bustype']; ?></td>
					<td><?php echo $data['num_ber']; ?></td>
					<td><?php echo $data['busnum']; ?></td>
					<td><?php echo $data['busstand']; ?></td>
					
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

	
