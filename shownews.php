
<?php 
include('server.php');
	$con=mysqli_connect('localhost','root','','test');
	function showdata()
	{
		global $con;
		$query = "select * from news";
		$run = mysqli_query($con,$query);
		if($run == TRUE)
		{
			?>
			<table border="1" width="80%" id="customers">
				<h1>Information Table:</h1>
				<tr>
					<th>News</th>
					<th colspan="2">Action</th>
				</tr>
			<?php
			while ($data = mysqli_fetch_assoc($run)) 
			{	
				?>
				
				</tr>
					<tr align="center">
					<td><?php echo $data['text']; ?></td>
					<td><a class="button2" href="edit_news.php?edit=<?php echo $data['id']; ?>">Edit</a></td>
					<td><a class="button1" href="server.php?del=<?php echo $data['id']; ?>">Delete</a></td>
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
