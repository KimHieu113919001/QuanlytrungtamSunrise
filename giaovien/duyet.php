<?php
   $id_diemtest=$_GET['id_diemtest'];
   $id_giaovien=$_GET['id_giaovien'];
  
   include("config.php");  
   
   $sql="UPDATE chi_tiet_diem_test SET id_giaovien='$id_giaovien',duyet='1' WHERE id_diemtest='$id_diemtest'";
   mysqli_query($connection,$sql);

                  if(mysqli_query($connection,$sql)){
                  header("Location: kiemtranoi.php"); 
                  }else{
                  echo "Not inserted";
                  }

   
   ?>