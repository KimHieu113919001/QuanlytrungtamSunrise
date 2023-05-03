<?php 
    include("config1.php");
    $id_hocvien=$_POST['id_hocvien'];
    $diem=$_POST['mark'];
    $socauhoi=$_POST['socauhoi'];
    $tongcauhoi=(int)$socauhoi;
    $socaudung=(int)$diem;
    $diemtungcau=10/$tongcauhoi;

    $diem_nghe=$socaudung*$diemtungcau;
    $diem_nghe1 = round($diem_nghe,1);
    $sql = "UPDATE chi_tiet_diem_test SET diem_nghe='$diem_nghe1',trangthaitest='1' WHERE id_hocvien='$id_hocvien'";
    $connection->prepare($sql)->execute();
?>
