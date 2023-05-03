<?php
   $id_de= $_GET['id_de'];

   include("../config.php");
   $sql="DELETE FROM cau_hoi_listening WHERE id_de='$id_de'";
   $result=mysqli_query($connection,$sql);
   if(mysqli_query($connection,$sql)){
       header('Location: ../danhsachcauhoi.php?id_de='.$id_de);
   }else{
         echo "Not deleted";
   }
   
?>