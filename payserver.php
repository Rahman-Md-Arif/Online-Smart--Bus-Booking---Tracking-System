<?php
               $id=0;
                $merchantno="";
                $transection="";
                $refno="";
     $con=mysqli_connect('localhost','root','','test');
     //delete
     if(isset($_GET['del']))
    {
    $id=$_GET['del'];
    mysqli_query($con,"DELETE FROM paymentinfo where id=$id");
    header('location:payment.php');
   }
   //update
   if(isset($_POST['update']))
       {
         $merchantno=$_POST['mob'];
        $transection=$_POST['tid'];
         $refno=$_POST['refno'];
        $id = $_POST['id'];
       mysqli_query($con,"UPDATE paymentinfo SET merchantno='$merchantno',transection='$transection',refno='$refno' where id=$id" );
       header('location:payment.php');
       }  
?>