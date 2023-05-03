<?php
$ten_de=$_POST['ten_de'];
$ngaycapnhat=$_POST['ngaycapnhat'];
$id_cap=$_POST['id_cap'];
$id_de=$_GET['id_de'];
$time_reading=$_POST['time_reading'];
$time_writing=$_POST['time_writing'];
$time_listening=$_POST['time_listening'];
  
   include("config.php");  
   if (isset($_POST['suade'])){
   $sql="UPDATE de_test SET ten_de='$ten_de',time_reading='$time_reading',time_writing='$time_writing',time_listening='$time_listening',ngaycapnhat='$ngaycapnhat',id_cap='$id_cap' WHERE id_de='$_GET[id_de]'";
   mysqli_query($connection,$sql);
      if(mysqli_query($connection,$sql)){
      header("Location: quanlydetest.php"); 
      }else{
      echo "Not inserted";
      }

   }
   ?>