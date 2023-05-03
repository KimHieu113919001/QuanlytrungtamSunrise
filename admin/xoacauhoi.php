<?php
   
   $id= $_GET['id_cauhoi'];
   $id_de= $_GET['id_de'];

   include("config.php");
   $sql="DELETE FROM cau_hoi WHERE id_cauhoi='$id'";
   $result=mysqli_query($connection,$sql);
   if(mysqli_query($connection,$sql)){
       header('Location: danhsachcauhoi.php?id_de='.$id_de);
   }else{
         echo "Not deleted";
   }
   
?>