<?php 
    include("config1.php");
    $id_hocvien = $_POST['id_hocvien'];
    $diem = $_POST['mark'];
    $socauhoi = $_POST['socauhoi'];
    $tongcauhoi = (int)$socauhoi;
    $socaudung = (int)$diem;
    $diemtungcau = 10/$tongcauhoi;

    $diem_doc = $socaudung*$diemtungcau;
    $diem_doc1 = round($diem_doc,1);
    $sql = "UPDATE chi_tiet_diem_test SET diem_test='$diem_doc1' WHERE id_hocvien='$id_hocvien'";
    $connection->prepare($sql)->execute();
?>
