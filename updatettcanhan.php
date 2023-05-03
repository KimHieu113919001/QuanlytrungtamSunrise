<?php
	 include("config.php");

    $username= $_SESSION['username'];
    $id_hocvien= $_GET['id_hocvien'];
   $ten_hv=$_POST['ten_hv'];
   $gioitinh_hv=$_POST['gioitinh_hv'];
   $ngaysinh_hv=$_POST['ngaysinh_hv'];
   $ten_ph=$_POST['ten_ph'];
   $sdt_ph=$_POST['sdt_ph'];
   $sozalo_ph=$_POST['sozalo_ph'];
   $diachi=$_POST['diachi'];

   if (isset($_POST['submit']) && $_POST['ngaysinh_hv']==""){
   $sql="UPDATE `hocvien`SET ten_hv='$ten_hv',gioitinh_hv='$gioitinh_hv', ten_ph='$ten_ph', sdt_ph='$sdt_ph', sozalo_ph='$sozalo_ph', diachi='$diachi' WHERE id_hocvien= '$_GET[id_hocvien]' ";

   mysqli_query($connection,$sql);

   if(mysqli_query($connection,$sql)){
      header("Location: user_canhan.php?hocvien=".$username); 
   }else{
        echo "Không chỉnh sửa được!";
   }
   }else{
    $sql="UPDATE `hocvien`SET ten_hv='$ten_hv',gioitinh_hv='$gioitinh_hv', ngaysinh_hv='$ngaysinh_hv', ten_ph='$ten_ph', sdt_ph='$sdt_ph', sozalo_ph='$sozalo_ph', diachi='$diachi' WHERE id_hocvien= '$_GET[id_hocvien]' ";
 
    mysqli_query($connection,$sql);
 
    if(mysqli_query($connection,$sql)){
       header("Location: user_canhan.php?hocvien=".$username); 
    }else{
         echo "Không chỉnh sửa được!";
    }
}

 
?>