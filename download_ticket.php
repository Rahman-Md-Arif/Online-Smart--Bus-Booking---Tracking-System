<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
<title>Ticket | SmartBusBooking.com</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
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
    
	<?php include 'booking_ticket.php'; showdata(); ?>
    <div class="container" style="padding-top:50px" align="center">
<h2>Download Ticket</h2>
<form class="form-inline" method="post" action="file_pdf.php">
<button type="submit" id="pdf" name="file_pdf" class="btn btn-primary"><i class="fa fa-pdf"" aria-hidden="true"></i>
Download</button>
</form>
</fieldset>
</div>
</body>
</html>