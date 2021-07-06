<?php 
       include('profserver.php');

		if(isset($_GET['edit']))
		{

			$id=$_GET['edit'];
			$rec=mysqli_query($con,"SELECT * FROM register where id=$id");
			$record=mysqli_fetch_array($rec);
			$firstname=$record['firstname'];
		    $lastname=$record['lastname'];
		    $mobile=$record['mobile'];
		    $email=$record['email'];
		    $password=$record['password'];
		    $rdate=$record['rdate'];
		    $gender=$record['gender'];
		    $address=$record['address'];
			$id=$record['id'];
		}
		
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style >
	body{background-color: gray;
			margin: 0;
             font-family: Arial, Helvetica, sans-serif;}
			 h1{color: blue;}
			input[type=text] {
    width: 35%;
    padding: 10px 10px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 2px solid blue;
    border-radius: 10px;
}
input[type=password] {
    width: 35%;
    padding: 10px 10px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 2px solid blue;
    border-radius: 10px;
}
input[type=date] {
    width: 35%;
    padding: 10px 10px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 2px solid blue;
    border-radius: 10px;
}
input[type=time] {
    width: 35%;
    padding: 10px 10px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 2px solid blue;
    border-radius: 10px;
}
input[type=email] {
    width: 35%;
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
		<div align="center">
		<input type="hidden" name="id" value="<?php echo $id; ?>">
		<input class="div"type="text" placeholder="First Name" name="fname"  value="<?php echo $firstname; ?>"/><br/>
		
		<input class="div"type="text" placeholder="Last Name" name="lname" value="<?php echo $lastname; ?>"/><br/>
		
		<input class="div"type="text" placeholder="Mobile No" name="mobile"  value="<?php echo $mobile; ?>"/><br/>
		
		<input class="div"type="email" placeholder="Email" name="email"  value="<?php echo $email; ?>"/><br/>
		
		<input class="div"type="password" placeholder="Password" name="pass"  value="<?php echo $password; ?>"/><br/>
		
		<label>Date of birth : <br></label>
		<input class="div"type="date" placeholder="Date of Birth" name="date"  value="<?php echo $rdate; ?>"/> 
		
		<label><br>Gender :<br></label>
		<input class="div"type="radio" name="gender" value="male"   value="<?php echo $gender; ?>"/> Male
		<input class="div"type="radio" name="gender" value="female"  value="<?php echo $gender; ?>"/> Female
		<input class="div"type="radio" name="gender" value="other"  value="<?php echo $gender; ?>"/> Other<br/>

		<label>Address : <br></label>
		<input class="div"type = "text" name = "add" placeholder="Address"  value="<?php echo $address; ?>">
		<br>
		<input class="button"type="submit" name="update" value="Update">
		</div>
	</form>
</body>
</html>