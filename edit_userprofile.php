<html>
	<head>
		<title>
			Registration|SmartBusBooking.com
		</title>
		<style>
		.error{color:red;}
		h2{color: green;}
			h2{
			text-align: center; 
			color: blue; 
			font-weight: normal; 
			margin-bottom: 20px;
			}
		.input{

			width: 100%; 
			background: none; 
			border: 1px solid #fff; 
			border-radius: 3px; 
			padding: 6px 15px; 
			box-sizing: border-box; 
			margin-bottom: 20px; 
			font-size:16px;
			}
		.input[type="button"]{background: #bac675; border: 0; cursor: pointer;}
		input[type="button"]:hover{background: #a4b1Sc}

		
		.button {
				    background-color: green;
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
				    background-color: #66c2ff;
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
				.button1:hover {
  background-color:  #003d99;
  color: white;
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
		input[type=text] {
    width: 30%;
    padding: 10px 10px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 2px solid blue;
    border-radius: 10px;
}
input[type=password] {
    width: 30%;
    padding: 10px 10px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 2px solid blue;
    border-radius: 10px;
}
input[type=email] {
    width: 30%;
    padding: 10px 10px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 2px solid blue;
    border-radius: 10px;
}
input[type=date] {
    width: 30%;
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
		</style>
	</head>
	<body>
	
	<form  action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" >
		<?php include 'userprofile.php'; showdata(); ?>
		
	</form>
	</body>
</html>
