<?php

   $id_cap=$_GET['id_cap'];
   $id_giaovien=$_POST['id_giaovien'];
   $ngayhoc=$_POST['ngayhoc'];
   $thoigian=$_POST['thoigian'];
  
   include("config.php");  
   if (isset($_POST['suadslop'])){
   $sql="UPDATE danhsachlop SET id_giaovien='$id_giaovien',ngayhoc='$ngayhoc',thoigian='$thoigian' WHERE id_danhsach='$_GET[id_danhsach]'";
   mysqli_query($connection,$sql);

                  if(mysqli_query($connection,$sql)){
                  header("Location: danhsachlophoc.php?id_cap=".$id_cap); 
                  }else{
                  echo "Not inserted";
                  }

   }
   ?>