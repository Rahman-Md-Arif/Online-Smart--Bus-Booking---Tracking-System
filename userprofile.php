
<?php 
session_start();


	include('profserver.php');
	$con=mysqli_connect('localhost','root','','test');
	function showdata()
	{
		global $con;
		
		$query = "select * from register where email ='".$_SESSION['email']."'";
		$run = mysqli_query($con,$query);
		if($run == TRUE)
		{
			?>
			<table border="1" width="80%" id="customers">
				<h1 style="color:#33334d;">User Profile:</h1>
				<tr>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Mobile NO</th>
					<th>Email</th>
					<th>Password</th>
					<th>DOB</th>
					<th>Gender</th>
					<th>Address</th>
					<th colspan="2">Action</th>
				</tr>
			<?php
			while ($data = mysqli_fetch_assoc($run)) 
			{	
				?>
				
				</tr>
					<tr align="center">
					
					<td><?php echo $data['firstname']; ?></td>
					<td><?php echo $data['lastname']; ?></td>
					<td><?php echo $data['mobile']; ?></td>
					<td><?php echo $data['email']; ?></td>
					<td><?php echo $data['password']; ?></td>
					<td><?php echo $data['rdate']; ?></td>
					<td><?php echo $data['gender']; ?></td>
					<td><?php echo $data['address']; ?></td>
					<td><a class="button1" href="user_edit.php?edit=<?php echo $data['id']; ?>">Edit</a></td>
					<!--<td><a class="button2" href="profserver.php?del=<?php echo $data['id']; ?>">Delete</a></td>-->
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
