<?php
   
   $tieude=$_POST['tieude'];
   $noidung_tb=$_POST['noidung_tb'];
   $ngaydang=$_POST['ngaydang'];
   include("config.php");
      
   if (isset($_POST['suathongbao'])){
   $sql="UPDATE `thongbao`SET tieude='$tieude', noidung_tb='$noidung_tb', ngaydang='$ngaydang' WHERE id_thongbao='$_GET[id_thongbao]'";

   mysqli_query($connection,$sql);

   if(mysqli_query($connection,$sql)){
      header("Location: quanlythongbao.php"); 
   }else{
        echo "Not inserted";
   }
   
}
?>