<?php

				$id=0;
				$name="";
				$dob="";
				$address="";
				$pof="";
              $city="";
                    $pinc="";
                          $doj="";
                                 $busname="";
                                        $role="";

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
       mysqli_query($con,"UPDATE staff_info SET name='$name',dob='$dob',address='$address',post_office='$pof',city='$city',pin_code='$pinc',doj='$doj',busname='$busname',role='$role' where id=$id" );
       header('location:adminprofile.php');
       }
?>

  