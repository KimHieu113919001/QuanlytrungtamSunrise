<?php
    include('config.php');
    session_start();
    include('../Classes/PHPExcel.php');
    if(isset($_POST['xuat'])){
        $file = $_FILES['file']['tmp_name'];
        $objReader = PHPExcel_IOFactory::createReaderForFile($file);
        $objReader -> setLoadSheetsOnly('10A1');
        $objExcel = $objReader->load($file);
        $sheetData = $objExcel->getActiveSheet()->toArray('null',true,true,true);
        $highestRow = $objExcel->setActiveSheetIndex()->getHighestRow();
        for($row=2; $row<=$highestRow; $row++){
            $id_danhsach=$_GET['id_danhsach'];
            $id_hocvien = $sheetData[$row]['C'];
            $diemtong = $sheetData[$row]['E'];
            $nhanxet = $sheetData[$row]['F'];
            $nhanqua = $sheetData[$row]['G'];

            $sql= "INSERT INTO diemso (id_diem, id_hocvien, id_danhsach, diemtong, nhanxet, nhanqua)VALUES('','$id_hocvien,'$id_danhsach','$diemtong','$nhanxet','$nhanqua')";
            $mysql->query($sql);
        }
    }
?>