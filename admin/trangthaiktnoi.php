<?php 
 include("config.php");
 $id_giaovien=$_GET['id_giaovien'];
 $gv_ktnoi=$_GET['gv_ktnoi'];
 $sql="UPDATE giaovien SET gv_ktnoi=$gv_ktnoi WHERE id_giaovien=$id_giaovien";
 mysqli_query($connection,$sql);
 header('Location: quanlyphanquyen.php');
?>