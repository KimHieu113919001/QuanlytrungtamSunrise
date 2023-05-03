<?php 
 include("config.php");
 $id_giaovien=$_GET['id_giaovien'];
 $gv_truc=$_GET['gv_truc'];
 $sql="UPDATE giaovien SET gv_truc=$gv_truc WHERE id_giaovien=$id_giaovien";
 mysqli_query($connection,$sql);
 header('Location: quanlyphanquyen.php');
?>