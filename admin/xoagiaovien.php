<?php
   
   $id= $_GET['id_giaovien'];

   include("config.php");
   $sql="DELETE FROM giaovien WHERE id_giaovien='$id'";
   $result=mysqli_query($connection,$sql);
   if(mysqli_query($connection,$sql)){
       header("Location: quanlygiaovien.php");
   }else{
         echo "Not deleted";
   }
   
?>