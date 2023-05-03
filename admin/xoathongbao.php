<?php
   $id= $_GET['id_thongbao'];

   include("config.php");
   $sql="DELETE FROM thongbao WHERE id_thongbao='$id'";
   $result=mysqli_query($connection,$sql);
   if(mysqli_query($connection,$sql)){
       header("Location: quanlythongbao.php");
   }else{
         echo "Not deleted";
   }
   
?>