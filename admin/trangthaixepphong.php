<?php 
 include("config.php");
 $id_giaovien=$_GET['id_giaovien'];
 $gv_xepphong=$_GET['gv_xepphong'];
 $sql="UPDATE giaovien SET gv_xepphong=$gv_xepphong WHERE id_giaovien=$id_giaovien";
 mysqli_query($connection,$sql);
 header('Location: quanlyphanquyen.php');
?>