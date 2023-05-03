<?php 
    include("config1.php");
    $id_hocvien=$_POST['id_hocvien1'];
    $diem=$_POST['markv'];
    $socauhoi=$_POST['socauhoi'];
    $tongcauhoi=(int)$socauhoi;
    $socaudung=(int)$diem;
    $diemtungcau=10/$tongcauhoi;
    
    $diem_viet= $socaudung*$diemtungcau;
    $diem_viet1 = round($diem_viet,1);
    $sql = "UPDATE chi_tiet_diem_test SET diem_viet='$diem_viet1' WHERE id_hocvien='$id_hocvien'";
    $connection->prepare($sql)->execute();
?>
