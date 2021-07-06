<?php
                $id=0;
                $busname="";
                 $bustype="";
                $seatno="";
                $fare="";
                $status="";
                $busno="";
     $con=mysqli_connect('localhost','root','','test');
     //delete
     if(isset($_GET['del']))
    {
    $id=$_GET['del'];
    mysqli_query($con,"DELETE FROM businfo where id=$id");
    header('location:businfo.php');
   }
   //update
   if(isset($_POST['update']))
       {
        $busname=$_POST['busname'];
        $bustype=$_POST['bustype'];
        $seatno=$_POST['sno'];
        $fare=$_POST['efare'];
        $status=$_POST['es'];
        $busno=$_POST['bn'];
        $id = $_POST['id'];
       mysqli_query($con,"UPDATE businfo SET busname='$busname',bustype=' $bustype',seatno='$seatno',fare='$fare',status='$status',busno='$cabinno' where id=$id" );
       header('location:businfo.php');
       }  
?>