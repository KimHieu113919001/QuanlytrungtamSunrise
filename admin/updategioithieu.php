<?php

   $tieude=$_POST['tieude'];
   $noidung=$_POST['noidung'];
  
   include("config.php");  
   if (isset($_POST['suagioithieu'])){
   $sql="UPDATE gioithieu SET tieude='$tieude',noidung='$noidung' WHERE id_gioithieu='$_GET[id_gioithieu]'";
   mysqli_query($connection,$sql);

                  if(mysqli_query($connection,$sql)){
                  header("Location: index.php"); 
                  }else{
                  echo "Not inserted";
                  }

   }
   ?>