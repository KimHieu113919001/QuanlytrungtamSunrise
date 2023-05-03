<?php 
    include("config.php");
    $id_tuan=$_POST['id_tuan'];
    $id_thu=$_POST['id_thu'];
    $id_buoi=$_POST['id_buoi'];
    $insert_query="INSERT INTO `lichhoc`(`id_lichhoc`,`id_tuan`,`id_thu`,`id_buoi`) VALUES ('','$id_tuan','$id_thu','$id_buoi')";
    $res= mysqli_query($connection,$insert_query);
?>