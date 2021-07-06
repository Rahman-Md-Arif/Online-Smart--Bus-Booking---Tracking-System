<?php

     $con=mysqli_connect('localhost','root','','test');
     //delete
     if(isset($_GET['del']))
    {
    $id=$_GET['del'];
    mysqli_query($con,"DELETE FROM ticket where id=$id");
    header('location:admin_ticket.php');
   }
?>