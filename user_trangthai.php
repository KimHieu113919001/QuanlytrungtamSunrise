<?php 
 include("config.php");
 session_start();
 $id_diemtest=$_GET['id_diemtest'];

 $trangthai_hv=$_GET['trangthai_hv'];
 $sql="UPDATE chi_tiet_diem_test SET trangthai_hv='$trangthai_hv' WHERE id_diemtest=$id_diemtest";
 mysqli_query($connection,$sql);
 header('Location: user_lichhen.php?id_hocvien='.$_SESSION['id_hocvien']);
?>