<?php
   
   $ten_phong=$_POST['ten_phong'];

   include("config.php");
      
   if (isset($_POST['suaphong'])){
   $sql="UPDATE `phong`SET ten_phong='$ten_phong' WHERE id_phong='$_GET[id_phong]'";

   mysqli_query($connection,$sql);

   if(mysqli_query($connection,$sql)){
      header("Location: quanlyphong.php"); 
   }else{
        echo "Not inserted";
   }
   
}
?>