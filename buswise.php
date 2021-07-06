<!DOCTYPE html>
<html>
<head>
	<title></title>
		<style>
		body{background-color: gray;
			margin: 0;
             font-family: Arial, Helvetica, sans-serif;}
              h1{color: blue;}
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
				input[type=text] {
    width: 130%;
    padding: 5px 5px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 2px solid blue;
    border-radius: 10px;
}
input[type=date] {
    width: 130%;
    padding: 5px 5px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 2px solid blue;
    border-radius: 10px;
}
.deg {
    width: 130%;
    padding: 5px 5px;
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
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		
		<!--validation-->

	<?php  
		$nErr=$dErr=$mErr=$eErr=$lnErr=$ccErr=$ncErr=$cnErr=$bpErr="";
		$name=$gender=$mobile=$email= $busname=$bussel=$num=$busnum=$dest="";		
		if($_SERVER["REQUEST_METHOD"]== "POST")
		{

		if(empty($_POST["name"]))
		{
			$nErr="Name is required";
		}
		else
		{
			$name = test_input($_POST["name"]);
			if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
			$nErr = "Only letters and white space allowed"; 
			}
		}
	if (empty($_POST["gender"])) {
               $dErr = "gender is required";
            }else {
               $gender = test_input($_POST["gender"]);
            }

	
		if(empty($_POST["mobile"]))
		{
			$mErr="Mobile no is required";
		}
		else
		{
			$mobile = test_input($_POST["mobile"]);
		}

		  if (empty($_POST["email"])) {
		    $eErr = "Email is required";
		  } else {
		    $email = test_input($_POST["email"]);
		    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		      $eErr = "Invalid email format"; 
		    }
		  }
		
            
             if (empty($_POST["busname"])) {
               $lnErr = "Bus Name is required";
            }else {
                $busname = test_input($_POST["busname"]);
            }

            if (empty($_POST["bussel"])) {
               $ccErr = "Bus Type is required";
            }else {
               $bussel = test_input($_POST["bussel"]);
            }

         

            if (empty($_POST["num"])) {
               $ncErr = "Number of Seat is required";
            }else {
               $num = test_input($_POST["num"]);
            }
			
			if (empty($_POST["busnum"])) {
               $cnErr = "Seat Number is required";
            }else {
               $busnum = test_input($_POST["busnum"]);
            }

            if (empty($_POST["dest"])) {
               $bpErr = "Destination is required";
            }else {
               $dest = test_input($_POST["dest"]);
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

		<div>
			<a class="button"href="booking_buslist.php">Show Seat</a>
		</div>
				<table align="center">
					<input type="hidden" name="id" value="<?php echo $id; ?>">
					
					<tr>
               <td>Name:</td>
               <td><input  class="div" type = "text" name = "name" placeholder="Enter  Name">
                 <span class="error"><?php echo $nErr; ?></span>
               </td>
               </tr>
               
               <tr>
               <td>Gender: </td>
               <td><input class="div" type = "text" name = "gender" placeholder="Enter Gender">
                  <span class="error"><?php echo $eErr; ?></span>
               </td>
            </tr>
             
             <tr>
			 <td>Mobile:</td>
               <td><input class="div" type = "text" name = "mobile" placeholder="Enter Mobile Number">
                 <span class="error"><?php echo $mErr; ?></span>
               </td>
            </tr>
            
            <tr>
               <td>E-mail: </td>
               <td><input class="div" type = "text" name = "email" placeholder="Enter Email">
                  <span class="error"><?php echo $eErr; ?></span>
               </td>
            </tr>

            
            			<tr>
								<td>
									<label>Bus Name:</label>
								</td>
								<td>
									<input class="div" type="text" placeholder="Enter Bus name" name="busname">
									<span class="error"><?php echo $lnErr; ?></span>
								</td>
							</tr>
							  

							  <tr>
               <td>Bustype </td>
               <td><input  class="div"  type = "text" name = "bussel" placeholder="Enter Bustype">
                  <span class="error"><?php echo $ccErr; ?></span>
               </td>
            </tr>

            			  <tr>
               <td>Total ticket</td>
               <td><input  class="div" type = "text" name = "num" placeholder="Total Seat ">
                  <span class="error"><?php echo  $ncErr; ?></span>
               </td>
            </tr>


							
											 
							 <td>Seat Number:</td>
				               <td><input   class="div" type = "text" name = "busnum" placeholder="Seat Number">
				                 <span class="error"><?php echo $cnErr; ?></span>
				               </td>
				            </tr>


							  <tr>
               <td>Busstand </td>
               <td><input class="div" type = "text" name = "dest" placeholder="Busstand">
									<span class="error"><?php echo $bpErr; ?></span>
								</td>
							</tr>
							
							
						</table>
					</fieldset>
				</td>
			</tr>
		</table>
		<div align="center">
			
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<input class="button" type="submit" name="save" value="Save"/>


		
			<?php
			$id=0;
			$uname="";
			$gender="";
			$umobile="";
			$email="";
			$busname="";
			$bustype="";
			
			$num_ber="";
			$busnum="";

			$busstand="";

			$con=mysqli_connect('localhost','root','','test');
				
				if(!$con)
				{
					die("error");
				}
				else
				{
					if(isset($_POST['save']))
					{
						
						$uname=$_POST['name'];
						$gender=$_POST['gender'];
						$umobile=$_POST['mobile'];
						$email=$_POST['email'];
					
						$busname=$_POST['busname'];
						$bustype=$_POST['bussel'];
						$num_ber=$_POST['num'];
						$busnum=$_POST['busnum'];
						$busstand=$_POST['dest'];
									
					
					$query="INSERT INTO ticket (id,uname,gender,umobile,email,busname,bustype,num_ber,busnum,busstand) VALUES(NULL,'$uname','$gender',  '$umobile','$email', '$busname','$bustype','$num_ber','$busnum','$busstand')";



					//echo $query;
					mysqli_query($con,$query);
					
						
					} 
				}

			?>
		</div>
	</form>
	<h2>Available Bus</h2><hr/>
       <table align="center" width="500">
		<tr>
			<td><li>AK Travels</li></td>
			<td><li>FalguniModhumoti  Paribahan</li></td>
			<td><li>National Travels</li></td>
			<td><li>Sarker Travels</li></td>
</tr>
<tr>
			<td><li>Aqib Enterprise</li></td>
			<td><li>Grameen Travels</li></td>
			<td><li>President Travels</li></td>
			<td><li>Senjuti Travels</li></td>
</tr>
<tr>
			<td><li>Bablu Enterprise</li></td>
			<td><li>Green Line</li></td>
			<td><li>RM Travels</li></td>
			<td><li>Seven Star Paribahan</li></td>
</tr>
<tr>
			<td><li>Bangladesh Road Transport Corporation</li></td>
			<td><li>Green Saintmartin Express</li></td>
			<td><li>Relax Transport</li></td>
			<td><li>Shah Ali Paribahan</li></td>
</tr>
<tr>
			<td><li>Century Travels</li></td>
			<td><li>H.R Travels</li></td>
			<td><li>Rumin Poribahan Limited</li></td>
			<td><li>Shanti Paribahan</li></td>
</tr>
<tr>
			<td><li>Desh Travels</li></td>
			<td><li>JLine</li></td>
			<td><li>S.Alam Service</li></td>
			<td><li>Shanti Paribahan Ac</li></td>
</tr>
<tr>
			<td><li>DhakaExpress</li></td>
			<td><li>Jatayat Ac Pvt Ltd</li></td>
			<td><li>SA Travels</li></td>
			<td><li>Shyamoli NR Travels</li></td>
</tr>
<tr>
			<td><li>Dolphin</li></td>
			<td><li>KLine</li></td>
			<td><li>SI Enterprise</li></td>
			<td><li>Sonartori Paribahan</li></td>
</tr>
<tr>
			<td><li>Dream Line</li></td>
			<td><li>Kingfisher Travels</li></td>
			<td><li>Saintmartin Hyundai</li></td>
			<td><li>Surovi Paribahan</li></td>
</tr>
<tr>
			<td><li>Econo Service</li></td>
			<td><li>Kuakata Express</li></td>
			<td><li>Saintmartin Paribahan</li></td>
			<td><li>T.R Travels</li></td>
</tr>
<tr>
			<td><li>Ekushe Express</li></td>
			<td><li>Manik Express</li></td>
			<td><li>Sakalsandhya Enterprise</li></td>
			<td><li>Tisha exclusive</li></td>
</tr>
<tr>
			<td><li>Falguni Paribahan</li></td>
			<td><li>Modern Line</li></td>
			<td><li>Sakura Paribahan</li></td>
			<td><li>Unique Service</li></td>
</tr>
	   </table><hr/>
	   
	   <h2>Available Route</h2><hr/>
       <table align="center" width="500">
		
			<tr>
			<td><li>DHAKA ⇄ CHITTAGONG</li></td>
			<td><li>DHAKA ⇄ TANGAIL</li></td>
			<td><li>DHAKA ⇄ MEHERPUR</li></td>
			<td><li>DHAKA ⇄ SHERPUR</li></td>
</tr>
		<tr>
			<td><li>DHAKA ⇄ COX'S BAZAR</li></td>
			<td><li>DHAKA ⇄ JESSORE</li></td>
			<td><li>DHAKA ⇄ MOULVIBAZAR</li></td>
			<td><li>DHAKA ⇄ BAGERHAT</li></td>
</tr>
<tr>
			<td><li>DHAKA ⇄ KHAGRACHHARI</li></td>
			<td><li>DHAKA ⇄ KHULNA</li></td>
			<td><li>DHAKA ⇄ SUNAMGANJ</li></td>
			<td><li>DHAKA ⇄ JHENAIDAH</li></td>
</tr>
<tr>
			<td><li>DHAKA ⇄ RANGAMATI</li></td>
			<td><li>DHAKA ⇄ SATKHIRA</li></td>
			<td><li>DHAKA ⇄ DINAJPUR</li></td>
			<td><li>DHAKA ⇄ NARAIL</li></td>
</tr>
<tr>
			<td><li>DHAKA ⇄ BANDARBAN</li></td>
			<td><li>DHAKA ⇄ SYLHET</li></td>
			<td><li>DHAKA ⇄ GAIBANDHA</li></td>
			<td><li>DHAKA ⇄ KURIGRAM</li></td>
</tr>
<tr>
			<td><li>DHAKA ⇄ KOLKATA</li></td>
			<td><li>DHAKA ⇄ KISHOREGANJ</li></td>
			<td><li>DHAKA ⇄ RANGPUR</li></td>
			<td><li>DHAKA ⇄ LALMONIRHAT</li></td>
</tr>
<tr>
			<td><li>DHAKA ⇄ SILIGURI</li></td>
			<td><li>DHAKA ⇄ PABNA</li></td>
			<td><li>DHAKA ⇄ COMILLA</li></td>
			<td><li>DHAKA ⇄ PANCHAGARH</li></td>
</tr>
<tr>
			<td><li>DHAKA ⇄ CHAPAINABABGANJ</li></td>
			<td><li>DHAKA ⇄ NAOGAON</li></td>
			<td><li>DHAKA ⇄ BOGRA</li></td>
			<td><li>DHAKA ⇄ THAKURGAON</li></td>
</tr>
<tr>
			<td><li>DHAKA ⇄ RAJSHAHI</li></td>
			<td><li>DHAKA ⇄ NATORE</li></td>
			<td><li>DHAKA ⇄ JAIPURHAT</li></td>
			<td><li>DHAKA ⇄ FARIDPUR</li></td>
</tr>
<tr>
			<td><li>DHAKA ⇄ BARGUNA</li></td>
			<td><li>DHAKA ⇄ PIROJPUR</li></td>
			<td><li>DHAKA ⇄ SIRAJGANJ</li></td>
			<td><li>DHAKA ⇄ GOPALGANJ</li></td>
</tr>
<tr>
			<td><li>DHAKA ⇄ BARISAL</li></td>
			<td><li>DHAKA ⇄ KUSHTIA</li></td>
			<td><li>DHAKA ⇄ JHALOKATHI</li></td>
			<td><li>DHAKA ⇄ MANIKGANJ</li></td>
</tr>
<tr>
			<td><li>DHAKA ⇄ KUAKATA</li></td>
			<td><li>DHAKA ⇄ MAGURA</li></td>
			<td><li>DHAKA ⇄ PATUAKHALI</li></td>
			
</tr>
	   </table><hr/>
</body>
</html>