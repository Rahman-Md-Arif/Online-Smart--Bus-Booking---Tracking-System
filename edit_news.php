<?php 
       include('server.php');

		if(isset($_GET['edit']))
		{

			$id=$_GET['edit'];
			$rec=mysqli_query($con,"SELECT * FROM news where id=$id");
			$record=mysqli_fetch_array($rec);
			$text=$record['text'];
			$id=$record['id'];
		}
		
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style >
		.button {
				    background-color: #4CAF50;
				    border: none;
				    color: white;
				    padding: 5px 40px;
				    text-align: center;
				    text-decoration: none;
				    display: inline-block;
				    font-size: 16px;
				    margin: 4px 2px;
				    cursor: pointer;
				    border-radius: 5px;
				}
				h1{color: blue;}
	</style>
</head>
<body>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		<h1 align="center">Bus Information Edit</h1>
		
		<table align="center" >
		<input type="hidden" name="id" value="<?php echo $id; ?>">
		<tr>

			<tr>
				<td>
						<textarea placeholder="Enter News" name="tarea"  rows="4" cols="40" value="<?php echo $text; ?>"></textarea>
					</td>
				</tr>
			<tr>
				<td>
					<input class="button" type="submit" name="update" value="Update">
				</td>
			</tr>
		</table>
	</form>

</body>
</html>