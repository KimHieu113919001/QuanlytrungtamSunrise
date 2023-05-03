<?php
   $id= $_GET['id_baiviet'];

   include("config.php");
   $sql="DELETE FROM baiviet WHERE id_baiviet='$id'";
   $result=mysqli_query($connection,$sql);
   if(mysqli_query($connection,$sql)){
       header("Location: quanlybaiviet.php");
   }else{
         echo "Not deleted";
   }
   
?>



