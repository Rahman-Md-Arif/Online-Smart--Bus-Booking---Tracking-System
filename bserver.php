<?php
    $id=0;
        $route="";
        $busname="";
        $bmobile="";
     $con=mysqli_connect('localhost','root','','test');
     //delete
     if(isset($_GET['del']))
    {
    $id=$_GET['del'];
    mysqli_query($con,"DELETE FROM binfo where id=$id");
    header('location:binfo.php');
   }
   //update
   if(isset($_POST['update']))
       {
        $route=$_POST['route'];
        $busname=$_POST['busname'];
        $bmobile=$_POST['bmobile'];
        $id = $_POST['id'];
       mysqli_query($con,"UPDATE linfo SET route='$route',busname='$busname',bmobile='$bmobile' where id=$id" );
       header('location:binfo.php');
       }
?>