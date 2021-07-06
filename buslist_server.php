<?php
	 $con=mysqli_connect('localhost','root','','test');
     //delete
     if(isset($_GET['del']))
    {
    $id=$_GET['del'];
    mysqli_query($con,"DELETE FROM buslist where id=$id");
    header('location:buslist.php');
   }
?>