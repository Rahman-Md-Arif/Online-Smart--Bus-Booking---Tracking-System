<?php

	$id=0;
    $firstname="";
    $lastname="";
    $mobile="";
    $email="";
    $password="";
    $rdate="";
    $gender="";
    $address="";
     $con=mysqli_connect('localhost','root','','test');
     //delete
     if(isset($_GET['del']))
    {
    $id=$_GET['del'];
    mysqli_query($con,"DELETE FROM register where id=$id");
    header('location:edit_userprofile.php');
   }
   //update
   if(isset($_POST['update']))
       {
       $firstname=$_POST['fname'];
        $lastname=$_POST['lname'];
        $mobile=$_POST['mobile'];
        $email=$_POST['email'];
        $password=$_POST['pass'];
        $rdate=$_POST['date'];
        $gender=$_POST['gender'];
        $address=$_POST['add'];
       $id = $_POST['id'];
       mysqli_query($con,"UPDATE register SET firstname='$firstname',lastname='$lastname',mobile='$mobile',email='$email',password='$password',rdate='$rdate',gender='$gender',address='$address' where id=$id" );
       header('location:edit_userprofile.php');
       }  
?>