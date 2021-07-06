<?php
	$con=mysqli_connect('localhost','root','','test');
	$sql="SELECT * from schedule where busname LIKE '".$_REQUEST["q"]."%' ;";
	$result=mysqli_query($con,$sql);
	$list="";
	for($i=0;$i<mysqli_num_rows($result);$i++)
	{
		$row[$i]=mysqli_fetch_array($result);
		$list.="<br/>".$row[$i]['busname'];
		$list.="<br/>".$row[$i]['bus_from'];
		$list.="<br/>".$row[$i]['bus_to'];
		$list.="<br/>".$row[$i]['busdate'];
		$list.="<br/>".$row[$i]['bustime'];
		$list.="<br/>".$row[$i]['busstand'];


	}
	echo $list===""?"No suggestion:":$list;
?>