<?php 
 include("config.php");
 $id_admin=$_GET['id_admin'];
 $trangthai_dn=$_GET['trangthai_dn'];
 $sql="UPDATE `admin` SET trangthai_dn='$trangthai_dn' WHERE id_admin='$id_admin'";
 mysqli_query($connection,$sql);
 header('Location: duyet_admin.php');
?>