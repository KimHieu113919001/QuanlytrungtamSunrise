<?php
   
   $ten_chuyenmon=$_POST['ten_chuyenmon'];
   
   include("config.php");
      
   if (isset($_POST['suachuyenmon'])){
   $sql="UPDATE `chuyenmon`SET ten_chuyenmon='$ten_chuyenmon' WHERE id_chuyenmon='$_GET[id_chuyenmon]'";
   mysqli_query($connection,$sql);
        if(mysqli_query($connection,$sql)){
            header("Location: quanlychuyenmon.php"); 
        }else{
                echo "Not inserted";
        }
   
}
?>