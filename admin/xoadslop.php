<?php
   $id_danhsach= $_GET['id_danhsach'];
   $id_cap= $_GET['id_cap'];
   include("config.php");
   $check_query= "SELECT * FROM `chi_tiet_hoc` WHERE id_danhsach='$id_danhsach'";
   $check_res=mysqli_query($connection,$check_query);
   if(mysqli_num_rows($check_res)>0){
      echo "Không thể xóa danh sách";
      }else{
            $sql="DELETE FROM danhsachlop WHERE id_danhsach='$id_danhsach'";
            $result=mysqli_query($connection,$sql);
            if(mysqli_query($connection,$sql)){
             header("Location: danhsachlophoc.php?id_cap=".$id_cap);
      }
}
?>