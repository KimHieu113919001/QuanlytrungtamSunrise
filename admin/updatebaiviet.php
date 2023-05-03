<?php
   
   $ten_bv=$_POST['ten_bv'];
   $noidung=$_POST['noidung'];
   $anhbia= $_FILES['anhbia']['name'];
   move_uploaded_file($_FILES['anhbia']['tmp_name'],"../admin/images/".$_FILES['anhbia']['name']); 

   $hinh1= $_FILES['hinh1']['name'];
   move_uploaded_file($_FILES['hinh1']['tmp_name'],"../admin/images/".$_FILES['hinh1']['name']); 

   $hinh2= $_FILES['hinh2']['name'];
   move_uploaded_file($_FILES['hinh2']['tmp_name'],"../admin/images/".$_FILES['hinh2']['name']);

   $hinh3= $_FILES['hinh3']['name'];
   move_uploaded_file($_FILES['hinh3']['tmp_name'],"../admin/images/".$_FILES['hinh3']['name']);
   include("config.php");
      
   if (isset($_POST['suabaiviet']) && empty($_FILES['anhbia']['name'])){
   $sql="UPDATE `baiviet`SET ten_bv='$ten_bv', noidung='$noidung' WHERE id_baiviet='$_GET[id_baiviet]'";

   mysqli_query($connection,$sql);

   if(mysqli_query($connection,$sql)){
      header("Location: quanlybaiviet.php"); 
   }else{
        echo "Not inserted";
   }
   }else{
   $sql="UPDATE `baiviet` SET ten_bv='$ten_bv', noidung='$noidung', anhbia='$anhbia' WHERE id_baiviet='$_GET[id_baiviet]'";
   mysqli_query($connection,$sql);
   
   if(mysqli_query($connection,$sql)){
      header("Location: quanlybaiviet.php"); 
   }else{
        echo "Not inserted";
   }
}

if (isset($_POST['suabaiviet']) && !empty($_FILES['hinh1']['name'])){
   $sql="UPDATE `baiviet`SET ten_bv='$ten_bv', noidung='$noidung', hinh1='$hinh1' WHERE id_baiviet='$_GET[id_baiviet]'";

   mysqli_query($connection,$sql);

   if(mysqli_query($connection,$sql)){
      header("Location:  quanlybaiviet.php"); 
   }else{
        echo "Not inserted";
   }
   }else{
   $sql="UPDATE `baiviet` SET ten_bv='$ten_bv', noidung='$noidung' WHERE id_baiviet='$_GET[id_baiviet]'";
   mysqli_query($connection,$sql);
   
   if(mysqli_query($connection,$sql)){
      header("Location:  quanlybaiviet.php"); 
   }else{
        echo "Not inserted";
   }
}




if (isset($_POST['suabaiviet']) && !empty($_FILES['hinh2']['name'])){
   $sql="UPDATE `baiviet`SET ten_bv='$ten_bv', noidung='$noidung', hinh2='$hinh2' WHERE id_baiviet='$_GET[id_baiviet]'";

   mysqli_query($connection,$sql);

   if(mysqli_query($connection,$sql)){
      header("Location:  quanlybaiviet.php"); 
   }else{
        echo "Not inserted";
   }
   }else{
   $sql="UPDATE `baiviet` SET ten_bv='$ten_bv', noidung='$noidung' WHERE id_baiviet='$_GET[id_baiviet]'";
   mysqli_query($connection,$sql);
   
   if(mysqli_query($connection,$sql)){
      header("Location:  quanlybaiviet.php"); 
   }else{
        echo "Not inserted";
   }
}




if (isset($_POST['suabaiviet']) && !empty($_FILES['hinh3']['name'])){
   $sql="UPDATE `baiviet`SET ten_bv='$ten_bv', noidung='$noidung', hinh3='$hinh3' WHERE id_baiviet='$_GET[id_baiviet]'";

   mysqli_query($connection,$sql);

   if(mysqli_query($connection,$sql)){
      header("Location:  quanlybaiviet.php"); 
   }else{
        echo "Not inserted";
   }
   }else{
   $sql="UPDATE `baiviet` SET ten_bv='$ten_bv', noidung='$noidung' WHERE id_baiviet='$_GET[id_baiviet]'";
   mysqli_query($connection,$sql);
   
   if(mysqli_query($connection,$sql)){
      header("Location:  quanlybaiviet.php"); 
   }else{
        echo "Not inserted";
   }
}
?>