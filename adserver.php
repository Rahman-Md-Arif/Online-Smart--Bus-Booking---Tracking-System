<?php

				$id=0;
				$name="";
				$mobile="";
				$username="";
				$password="";
     $con=mysqli_connect('localhost','root','','test');
     //delete
     if(isset($_GET['del']))
    {
    $id=$_GET['del'];
    mysqli_query($con,"DELETE FROM admin where id=$id");
    header('location:adminprofile.php');
   }
   if(isset($_POST['update']))
       {
       $name = $_POST['aname'];
       $mobile = $_POST['mob'];
       $username=$_POST['uname'];
       $password=$_POST['pass'];
       $id = $_POST['id'];
       mysqli_query($con,"UPDATE admin SET name='$name',mobile='$mobile',username='$username',password='$password' where id=$id" );
       header('location:adminprofile.php');
       }
?>