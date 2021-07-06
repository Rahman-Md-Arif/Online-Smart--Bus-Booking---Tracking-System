<?php
  $text="";
     $con=mysqli_connect('localhost','root','','test');
     //delete
     if(isset($_GET['del']))
    {
    $id=$_GET['del'];
    mysqli_query($con,"DELETE FROM news where id=$id");
    header('location:news.php');
   }
   //update
    if(isset($_POST['update']))
       {
       
        $text=$_POST['tarea'];
        $id = $_POST['id'];
       mysqli_query($con,"UPDATE news SET text='$text'where id=$id" );
       header('location:news.php');
       }  
?>