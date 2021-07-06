<?php 
	include('payment_very_server.php');
	$con=mysqli_connect("localhost","root","","test");
	function showdata2()
	{
		global $con;
		$query = "select * from verify";
		$run = mysqli_query($con,$query);
		if($run == TRUE)
		{
			?>
			<table border="1" width="80%" id="customers">
				<h1>Payment Verify Details:</h1>
				<tr>
					<th>Mobile</th>
					<th>Transaction Id</th>
					<th >Action</th>
				</tr>
			<?php
			while ($data = mysqli_fetch_assoc($run)) 
			{	
				?>
				
				</tr>
					<tr>
					
					<td><?php echo $data['mobile']; ?></td>
					<td><?php echo $data['transection']; ?></td>
					<td><a class="button" href="payment_very_server.php?del=<?php echo $data['id']; ?>">Delete</a></td>
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