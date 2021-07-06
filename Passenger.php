<html>
	

	<head>
		<title>Passenger Details | SmartBusBooking.com</title>
		<style>
		body{background-color: gray;
			margin: 0;
             font-family: Arial, Helvetica, sans-serif;}
			 h1{color: blue;}
		h2{color: green;}
		.button {
		    background-color: green;
		    border: none;
		    color: white;
		    padding: 5px 60px;
		    text-align: center;
		    text-decoration: none;
		    display: inline-block;
		    font-size: 16px;
		    margin: 4px 2px;
		    cursor: pointer;
		    border-radius: 5px;
		}
		.error{color:red;}
		</style>
	</head>
	<body>
	
	<?php
         $nameErr = $ageErr = $genderErr = $mobileErr =  $emailErr = "";
         $name = $age = $gender = $mobile = $email = "";
         
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["name"])) {
               $nameErr = "*Name is required";
            }else {
               $name = test_input($_POST["name"]);
            }
		 
		 
			
			if (empty($_POST["age"])) {
               $ageErr = "*Age is required";
            }else {
               $age = test_input($_POST["age"]);
            }
			
			 if (empty($_POST["gender"])) {
               $genderErr = "*Gender is required";
            }else {
               $gender = test_input($_POST["gender"]);
            }
			
			if (empty($_POST["mobile"])) {
               $mobileErr = "*Mobile is required";
            }else {
               $mobile = test_input($_POST["mobile"]);
            }
            
            if (empty($_POST["email"])) {
               $emailErr = "*Email is required";
            }else {
               $email = test_input($_POST["email"]);
               
               
               if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                  $emailErr = "*Invalid email format"; 
               }
            }
		 }
		 
		
			 function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
         }
			  
           
			?>
		
      <form method = "POST" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<div align="center">
		
		</div>
			<table align="center">
				<tr>
					<td>
						<fieldset>
							<legend><h1>Passenger Details</h1></legend>
							<table>
							 <tr>
               <td>Name:</td>
               <td><input type = "text" name = "name">
                  <span class = "error"> <?php echo $nameErr;?></span>
               </td>
            </tr>
			
			<tr>
               <td>Age:</td>
               <td><input type = "text" name = "age">
                  <span class = "error"> <?php echo $ageErr;?></span>
               </td>
            </tr>
			<tr>
               <td>Gender:</td>
               <td>
                  <input type = "radio" name = "gender" value = "female">Female
                  <input type = "radio" name = "gender" value = "male">Male
				  <input type = "radio" name = "gender" value = "other">Other
                  <span class = "error"> <?php echo $genderErr;?></span>
               </td>
            </tr>
			 <td>Mobile:</td>
               <td><input type = "text" name = "mobile">
                  <span class = "error"> <?php echo $mobileErr;?></span>
               </td>
            </tr>
            
            <tr>
               <td>E-mail: </td>
               <td><input type = "text" name = "email">
                  <span class = "error"> <?php echo $emailErr;?></span>
               </td>
            </tr>
			
			<tr>
									<td>
										<input class="button"type="submit" value="Submit" name="submit">
									</td>
									<td>
										<a class="button" href="Payment.php">Confirm Reservation</a>
									</td>
								</tr>
							</table>
						</fieldset>
					</td>
				</tr>
				</table>
				<table align="left">
				<tr>
					<td>
						<fieldset>
							<legend>Ticket</legend>
							<table>
								<tr>
									<td>Mobile no</td>
									<td>
										XXXXXXXXXXXX
									</td>
								</tr>
								<tr>
									<td>Name:</td>
									<td>
										Zobaer
									</td>
								</tr>
								<tr>
									<td>Bus name:</td>
									<td>
										Green Line
									</td>
								</tr>
								<tr>
									<td>Route:</td>
									<td>
										Dhaka-Jessore
									</td>
								</tr>
								<tr>
									<td>Date:</td>
									<td>
										1/4/2019
									</td>
								</tr>
								<tr>
									<td>time:</td>
									<td>
										10.00PM
									</td>
								</tr>
								<tr>
									<td>Seat no</td>
									<td>
										2
									</td>
								</tr>
								<tr>
									<td>Amount:</td>
									<td>
										1275.00
									</td>
								</tr>
										
										<tr>
								<td>
									Bus Stand name:
								</td>
								<td>
									Gabtali
								</td>
							</tr>
							</table>
						</fieldset>
					</td>
				</tr>
				</table>
				<table align="center">
				<tr>
					<td>
						<fieldset>
							<p>Fare Details:</p>
							<table>
								<tr>
									<td>Ticket Price:</td>
									<td>
										1200.00
									</td>
								</tr>
								<tr>
									<td>Fee:</td>
									<td>
										45
									</td>
								</tr>
								<tr>
									<td>Processing Fee:</td>
									<td>
										30
									</td>
								</tr>
								<tr>
									<td>Discount:</td>
									<td>
										0
									</td>
								</tr>
								<tr>
									<td>Total fee:</td>
									<td>
										1275
									</td>
								</tr>
								
								
							</table>
						</fieldset>
					</td>
				</tr>
				</table>
		</form>

	</body>
</html>