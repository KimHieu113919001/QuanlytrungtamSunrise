<?php

$hinh= $_FILES['hinh']['name'];
move_uploaded_file($_FILES['hinh']['tmp_name'],"../admin/images/".$_FILES['hinh']['name']); 
$hinhcu=$_POST['hinhcu'];


include("config.php"); 
   if (isset($_POST['suabanner']) && $hinh =="" ){
   $sql="UPDATE banner SET hinh='$hinhcu' WHERE id_banner='$_GET[id_banner]'";
   mysqli_query($connection,$sql);

                  if(mysqli_query($connection,$sql)){
                  header("Location: quanlybanner.php"); 
                  }else{
                  echo "Not inserted";
                  }

   }

   if (isset($_POST['suabanner']) && $hinh !=""){
   $sql="UPDATE banner SET hinh='$hinh' WHERE id_banner='$_GET[id_banner]'";
   mysqli_query($connection,$sql);

                  if(mysqli_query($connection,$sql)){
                  header("Location: quanlybanner.php"); 
                  }else{
                  echo "Not inserted";
                  }

   }
   // else{
   //    $sql="UPDATE banner SET hinh='$hinhcu' WHERE id_banner='$_GET[id_banner]'";
   // }
   
   ?>