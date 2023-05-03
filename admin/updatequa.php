<?php
   
   $ten_qua=$_POST['ten_qua'];
   $soluong=$_POST['soluong'];

   include("config.php");
      
   if (isset($_POST['suaqua'])){
   $sql="UPDATE `qua`SET ten_qua='$ten_qua',soluong='$soluong' WHERE id_qua='$_GET[id_qua]'";

   mysqli_query($connection,$sql);

   if(mysqli_query($connection,$sql)){
      header("Location: quanlyqua.php"); 
   }else{
        echo "Not inserted";
   }
   
}
?>