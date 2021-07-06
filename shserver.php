<?php
       $id=0;
        $busname="";
        $from="";
        $to="";
      $busdate="";
       $bustime="";
       $busstand="";
       $con=mysqli_connect('localhost','root','','test');
     //delete
     if(isset($_GET['del']))
    {
    $id=$_GET['del'];
    mysqli_query($con,"DELETE FROM schedule where id=$id");
    header('location:schedule.php');
   }
   //update
   if(isset($_POST['update']))
       {
       
        $busname=$_POST['xbusname'];
        $from=$_POST['yfrom'];
        $to=$_POST['zto'];
        $busdate=$_POST['adate'];
        $bustime=$_POST['btime'];
        $busstand=$_POST['pbusstand'];
        $id = $_POST['id'];
       mysqli_query($con,"UPDATE schedule SET busname='$busname',bus_from='$from',bus_to='$to',busdate='$busdate',bustime='$bustime',busstand='$busstand' where id=$id" );
       header('location:schedule.php');
       }  
?>