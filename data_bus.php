<?php
	$con=mysqli_connect('localhost','root','','test');
	$sql="SELECT * from binfo where busname LIKE '".$_REQUEST["q"]."%' ;";
	$result=mysqli_query($con,$sql);
	$list="";
	for($i=0;$i<mysqli_num_rows($result);$i++)
	{
		$row[$i]=mysqli_fetch_array($result);
		$list.="<br/>".$row[$i]['busname'];
		$list.="<br/>".$row[$i]['bus_from'];
		$list.="<br/>".$row[$i]['bus_to'];
		$list.="<br/>".$row[$i]['bmobile'];


	}
	echo $list===""?"No suggestion:":$list;
?>