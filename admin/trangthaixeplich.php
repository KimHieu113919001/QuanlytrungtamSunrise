<?php 
 include("config.php");
 $id_giaovien=$_GET['id_giaovien'];
 $gv_xeplich=$_GET['gv_xeplich'];
 $sql="UPDATE giaovien SET gv_xeplich=$gv_xeplich WHERE id_giaovien=$id_giaovien";
 mysqli_query($connection,$sql);
 header('Location: quanlyphanquyen.php');
?>