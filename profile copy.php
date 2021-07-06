<!--<?php
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
?>-->
<html>

	<head>
		<title>AdminPanel | SmartBusBokng.com</title>
		<style>
		body{background-color: gray;
			margin: 0;
             font-family: Arial, Helvetica, sans-serif;}
			 h1{color: blue;}
		h2{color: green;}
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
				.button1 {
				    background-color: blue;
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
				.button2 {
				    background-color: red;
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
				.div {
    border-style: solid;
    border-color: #92a8d1;
		}
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
input[type=date] {
    width: 130%;
    padding: 10px 10px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 2px solid blue;
    border-radius: 10px;
}
input[type=time] {
    width: 130%;
    padding: 10px 10px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 2px solid blue;
    border-radius: 10px;
}
#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
}
.error{color:red;}
		</style>
		
	</head>
	<body>

		<form  action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		<?php include 'showprof.php'; showdata(); ?>
		<!--validation-->
		<?php  
			$nErr=$mErr=$uErr=$pErr="";
			$aname=$mob=$uname=$pass="";
			if($_SERVER["REQUEST_METHOD"]== "POST")
		{
		if(empty($_POST["aname"]))
		{
			$nErr="*Name is required";
		}
		else
		{
			$aname = test_input($_POST["aname"]);
			if (!preg_match("/^[a-zA-Z ]*$/",$aname)) {
			$nErr = "Only letters and white space allowed"; 
			}
		}
	
	
		if(empty($_POST["mob"]))
		{
			$mErr="Mobile no is required";
		}
		else
		{
			$mob = test_input($_POST["mob"]);
		}
		
		if(empty($_POST["uname"]))
		{
			$uErr="Username is required";
		}
		else
		{
			$uname = test_input($_POST["uname"]);
			if (!preg_match("/^[a-zA-Z ]*$/",$uname)) {
			$uErr = "Only letters are allowed"; 
			}
		}

           if (empty($_POST["pass"])) 
			{
               $pErr = "*password is required";
			   if (strlen($_POST["pass"]) <= '6')
			    {
            $pErr = "*Your Password Must Contain At Least 6 Characters!";
			}
            }else 
            {
               $pass = test_input($_POST["pass"]);
            }
			
		
		}
		
	function test_input($data)
	{
		$data=trim($data);
		$data= stripslashes($data);
		$data=htmlspecialchars($data);
		return $data;
	}
?>

		<h1>Admin Information</h1>
		<table >
		<input type="hidden" name="id" value="<?php echo $id; ?>">
		<tr>
				<td>
					<input class="div" type="text" placeholder="Enter Name" name="aname"  value="<?php echo $name; ?>" >
					<span class="error"><?php echo $nErr; ?></span>
				</td>
		</tr>
		<tr>
			<td>
 			  <input class="div" type="text" placeholder="Enter Mobile No." name="mob"  value="<?php echo $mobile; ?>">
 			  <span class="error"><?php echo $mErr; ?></span>
			</td>
		</tr>
		<tr>
			<td>
				<input class="div" type="text" placeholder="Enter UserName" name="uname"  value="<?php echo $username; ?>">
				<span class="error"><?php echo $uErr; ?></span>
			</td>
		</tr>
		<tr>
			<td>
				<input class="div" type="password" placeholder="Enter Password" name="pass"  value="<?php echo $password; ?>">
				<span class="error"><?php echo $pErr; ?></span>
			</td>
		</tr>
			
		</table>
		<div>
			<input class="button" type="submit" name="submit" value="Save"/>
			<?php 

				$id=0;
				$name="";
				$mobile="";
				$username="";
				$password="";
				$con=mysqli_connect('localhost','root','','test');
				
				if(!$con)
				{
					die("error");
				}
				else
				{
					if(isset($_POST['submit']))
					{
						
					$name=$_POST['aname'];
					$mobile=$_POST['mob'];
					$username=$_POST['uname'];
					$password=$_POST['pass'];
					
					
					$sql="INSERT INTO admin VALUES('','$name','$mobile','$username','$password')";
					
					mysqli_query($con,$sql);
					
					//header("Location:profile.php");
						
					} 
				}
			     $result=mysqli_query($con,"SELECT * FROM admin");
				 
			?>

			
		</div>
		
</form>
	</body>
</html>



