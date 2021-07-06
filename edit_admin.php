<?php
include('adserver.php');
	
		if(isset($_GET['edit']))
		{

			$id=$_GET['edit'];
			$rec=mysqli_query($con,"SELECT * FROM admin where id=$id");
			$record=mysqli_fetch_array($rec);
			$name=$record['name'];
			$mobile=$record['mobile'];
			$username=$record['username'];
			$password=$record['password'];
			$id=$record['id'];
		}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
	body{background-color: gray;
			margin: 0;
             font-family: Arial, Helvetica, sans-serif;}
			 h1{color: blue;}
		input[type=text] {
    width: 130%;
    padding: 10px 10px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 2px solid blue;
    border-radius: 10px;
}
input[type=password] {
    width: 130%;
    padding: 10px 10px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 2px solid blue;
    border-radius: 10px;
}
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
	</style>
</head>
<body>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		<table align="center">
			<h1 align="center">Edit Panel</h1>
		<input type="hidden" name="id" value="<?php echo $id; ?>">
		<tr>
				<td>
					<input class="div" type="text" placeholder="Enter Name" name="aname"  value="<?php echo $name; ?>" >
				</td>
		</tr>
		<tr>
			<td>
 			  <input class="div" type="text" placeholder="Enter Mobile No." name="mob"  value="<?php echo $mobile; ?>">
			</td>
		</tr>
		<tr>
			<td>
				<input class="div" type="text" placeholder="Enter UserName" name="uname"  value="<?php echo $username; ?>">
			</td>
		</tr>
		<tr>
			<td>
				<input class="div" type="password" placeholder="Enter Password" name="pass"  value="<?php echo $password; ?>">
			</td>
		</tr>
			<tr>
				<td>
					<input class="button" type="submit" name="update" value="Update"/>
				</td>
			</tr>
		</table>
	</form>
</body>
</html>