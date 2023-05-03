<?php
   $ten_kh=$_POST['ten_kh'];
 
   $mota=$_POST['mota'];
   $hinhanh= $_FILES['hinhanh']['name'];
   move_uploaded_file($_FILES['hinhanh']['tmp_name'],'../admin/images/'.$_FILES['hinhanh']['name']); 

   $hinh1= $_FILES['hinh1']['name'];
   move_uploaded_file($_FILES['hinh1']['tmp_name'],"../admin/images/".$_FILES['hinh1']['name']); 

   $hinh2= $_FILES['hinh2']['name'];
   move_uploaded_file($_FILES['hinh2']['tmp_name'],"../admin/images/".$_FILES['hinh2']['name']);

   $hinh3= $_FILES['hinh3']['name'];
   move_uploaded_file($_FILES['hinh3']['tmp_name'],"../admin/images/".$_FILES['hinh3']['name']);  
   include("config.php");
      
   if (isset($_POST['suacapdo']) && empty($_FILES['hinhanh']['name'])){
   $sql="UPDATE `khoahoc`SET ten_kh='$ten_kh', mota='$mota', WHERE id_khoahoc='$_GET[id_khoahoc]'";

   mysqli_query($connection,$sql);

   if(mysqli_query($connection,$sql)){
      header("Location: quanlycapdo.php"); 
   }else{
        echo "Not inserted";
   }
   }else{
   $sql="UPDATE `khoahoc` SET ten_kh='$ten_kh', mota='$mota', hinhanh='$hinhanh' WHERE id_khoahoc='$_GET[id_khoahoc]'";
   mysqli_query($connection,$sql);

   if(mysqli_query($connection,$sql)){
      header("Location: quanlycapdo.php"); 
   }else{
        echo "Not inserted";
   }
   }

   if (isset($_POST['suacapdo']) && !empty($_FILES['hinh1']['name'])){
      $sql="UPDATE `khoahoc`SET ten_kh='$ten_kh', mota='$mota', hinh1='$hinh1' WHERE id_khoahoc='$_GET[id_khoahoc]'";
   
      mysqli_query($connection,$sql);
   
      if(mysqli_query($connection,$sql)){
         header("Location:  quanlycapdo.php"); 
      }else{
           echo "Not inserted";
      }
      }else{
      $sql="UPDATE `khoahoc` SET ten_kh='$ten_kh',mota='$mota' WHERE id_khoahoc='$_GET[id_khoahoc]'";
      mysqli_query($connection,$sql);
      
      if(mysqli_query($connection,$sql)){
         header("Location:  quanlycapdo.php"); 
      }else{
           echo "Not inserted";
      }
   }
   
   
   
   
   if (isset($_POST['suacapdo']) && !empty($_FILES['hinh2']['name'])){
      $sql="UPDATE `khoahoc`SET ten_kh='$ten_kh', mota='$mota', hinh2='$hinh2' WHERE id_khoahoc='$_GET[id_khoahoc]'";
   
      mysqli_query($connection,$sql);
   
      if(mysqli_query($connection,$sql)){
         header("Location:  quanlycapdo.php"); 
      }else{
           echo "Not inserted";
      }
      }else{
      $sql="UPDATE `khoahoc` SET ten_kh='$ten_kh', mota='$mota' WHERE id_khoahoc='$_GET[id_khoahoc]'";
      mysqli_query($connection,$sql);
      
      if(mysqli_query($connection,$sql)){
         header("Location:  quanlycapdo.php"); 
      }else{
           echo "Not inserted";
      }
   }
   
   
   
   
   if (isset($_POST['suacapdo']) && !empty($_FILES['hinh3']['name'])){
      $sql="UPDATE `khoahoc`SET ten_kh='$ten_kh', mota='$mota', hinh3='$hinh3' WHERE id_khoahoc='$_GET[id_khoahoc]'";
   
      mysqli_query($connection,$sql);
   
      if(mysqli_query($connection,$sql)){
         header("Location:  quanlycapdo.php"); 
      }else{
           echo "Not inserted";
      }
      }else{
      $sql="UPDATE `khoahoc` SET ten_kh='$ten_kh', mota='$mota' WHERE id_khoahoc='$_GET[id_khoahoc]'";
      mysqli_query($connection,$sql);
      
      if(mysqli_query($connection,$sql)){
         header("Location:  quanlycapdo.php"); 
      }else{
           echo "Not inserted";
      }
   }


?>