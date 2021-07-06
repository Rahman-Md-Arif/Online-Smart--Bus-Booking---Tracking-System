<?php

				$id=0;
                $busname="";
                $bustype="";
                $tprice="";
                $charge="";
                $edit_state=false;
     $con=mysqli_connect('localhost','root','','test');
     //delete
     if(isset($_GET['del']))
    {
    $id=$_GET['del'];
    mysqli_query($con,"DELETE FROM fare where id=$id");
    header('location:fare.php');
   }
   //update
  if(isset($_POST['update']))
       {
       $busname=$_POST['busname'];
       $bustype=$_POST['bustype'];
       $tprice=$_POST['tprice'];
       $charge=$_POST['fee'];
       $id = $_POST['id'];
       mysqli_query($con,"UPDATE fare SET busname='$busname',bustype='$bustype',price='$tprice',charge='$charge' where id=$id" );
       header('location:fare.php');
       }  
?>