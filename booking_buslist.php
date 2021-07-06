<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style >
	body{background-color: gray;
			margin: 0;
             font-family: Arial, Helvetica, sans-serif;}
              h1{color: blue;}
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
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		<?php include 'booking_buslist_show.php'; showdata(); ?>
	</form>
</body>
</html>