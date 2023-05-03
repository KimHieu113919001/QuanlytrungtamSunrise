<?php

   $ten_cap=$_POST['ten_cap'];
   $hinhanh= $_FILES['hinhanh']['name'];
   $id_khoahoc=$_POST['id_khoahoc'];
   $testdauvao=$_POST['testdauvao'];
   move_uploaded_file($_FILES['hinhanh']['tmp_name'],"../admin/images/".$_FILES['hinhanh']['name']);
  
   include("config.php");
      
   if (isset($_POST['suattlop']) && empty($_FILES['hinhanh']['name'])){
   $sql="UPDATE `capbac`SET ten_cap='$ten_cap',id_khoahoc='$id_khoahoc', testdauvao='$testdauvao' WHERE id_cap='$_GET[id_cap]'";

   mysqli_query($connection,$sql);

   if(mysqli_query($connection,$sql)){
      header("Location: loptrongkhoa.php?id_khoahoc=".$id_khoahoc); 
   }else{
        echo "Not inserted";
   }
   }else{
   $sql="UPDATE `capbac` SET ten_cap='$ten_cap',id_khoahoc='$id_khoahoc', hinhanh='$hinhanh', testdauvao='$testdauvao' WHERE id_cap='$_GET[id_cap]'";
   mysqli_query($connection,$sql);

   if(mysqli_query($connection,$sql)){
      header("Location: loptrongkhoa.php?id_khoahoc=".$id_khoahoc); 
   }else{
        echo "Not inserted";
   }






}?>