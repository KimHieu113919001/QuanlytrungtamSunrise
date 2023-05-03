<?php
   $id_giaovien=$_GET['id_giaovien'];
   $ten_gv=$_POST['ten_gv'];
   $gioitinh=$_POST['gioitinh'];
   $quoctich=$_POST['quoctich'];
   $chuyenmon=$_POST['chuyenmon'];
   $kinhnghiem=$_POST['kinhnghiem'];
   $doituongday=$_POST['doituongday'];
   $anhdaidien= $_FILES['anhdaidien']['name'];
   move_uploaded_file($_FILES['anhdaidien']['tmp_name'],"../admin/images/".$_FILES['anhdaidien']['name']);


   include("config.php");
      
   if (isset($_POST['suagiaovien']) && !empty($_FILES['anhdaidien']['name'])){
   $sql="UPDATE `giaovien`SET ten_gv='$ten_gv',gioitinh='$gioitinh', quoctich='$quoctich', chuyenmon='$chuyenmon',kinhnghiem='$kinhnghiem', doituongday='$doituongday', anhdaidien='$anhdaidien' WHERE id_giaovien='$_GET[id_giaovien]'";

   mysqli_query($connection,$sql);

   if(mysqli_query($connection,$sql)){
      header("Location: thongtingiaovien.php?id_giaovien=".$id_giaovien); 
   }else{
        echo "Không chỉnh sửa được!";
   }
   }else{
   $sql="UPDATE `giaovien` SET ten_gv='$ten_gv',gioitinh='$gioitinh', quoctich='$quoctich', chuyenmon='$chuyenmon',kinhnghiem='$kinhnghiem', doituongday='$doituongday' WHERE id_giaovien='$_GET[id_giaovien]'";
   mysqli_query($connection,$sql);
   

   if(mysqli_query($connection,$sql)){
      header("Location: thongtingiaovien.php?id_giaovien=".$id_giaovien); 
   }else{
        echo "Không chỉnh sửa được!";
   }
}


?>