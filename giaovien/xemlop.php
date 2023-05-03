<?php
    include("config.php");
    session_start();
	if(!isset($_SESSION['id_giaovien'])){
        header('Location:../login.php');
       }
    include("../Classes/PHPExcel.php");
    $id_giaovien=$_SESSION['id_giaovien'];
    $id_danhsach=$_GET['id_danhsach']; 

    $sql_ct = "SELECT * FROM chi_tiet_hoc, hocvien WHERE chi_tiet_hoc.id_hocvien=hocvien.id_hocvien AND chi_tiet_hoc.id_danhsach='$_GET[id_danhsach]' ORDER BY hocvien.ten_hv ASC";
    $res_ct=mysqli_query($connection,$sql_ct); 
    

	$sql_ds = "SELECT * FROM danhsachlop WHERE danhsachlop.id_danhsach='$_GET[id_danhsach]'";
    $res_ds=mysqli_query($connection,$sql_ds);
	$row_ds=mysqli_fetch_assoc($res_ds);

    
    // if(isset($_POST['layfile'])){
    //     //lấy file
    //     $objExcel = new PHPExcel;
    //     $objExcel->setActiveSheetIndex(0);
    //     $sheet = $objExcel->getActiveSheet()->setTitle('1');
    //     $sheet= $objExcel->getActiveSheet()->mergeCells('A1:F1');
    //     $rowCount = 2;
    //     $sheet->setCellValue('A1','Danh sách lớp '.$row_ds['ma_danhsach']);
    //     $sheet->setCellValue('A'.$rowCount,'Họ tên học viên');
    //     $sheet->setCellValue('B'.$rowCount,'Ngày sinh');
    //     $sheet->setCellValue('C'.$rowCount,'Giới tính');
    //     $sheet->setCellValue('D'.$rowCount,'Điểm tổng');
    //     $sheet->setCellValue('E'.$rowCount,'Xếp loại');
    //     $sheet->setCellValue('F'.$rowCount,'Nhận quà');
        

    //     $result = $connection->query("SELECT hocvien.ten_hv, hocvien.ngaysinh_hv, hocvien.gioitinh_hv, diemso.diemtong, diemso.xeploai, diemso.nhanqua FROM hocvien, diemso WHERE hocvien.id_hocvien=diemso.id_hocvien AND diemso.id_danhsach='$id_danhsach'");
    //     while($row_xuat = mysqli_fetch_array($result)){
    //         $rowCount++;
    //         $odate = $row_xuat['ngaysinh_hv'];
    //         $newDate = date("d-m-Y", strtotime($odate));

    //        $sheet->setCellValue('A'.$rowCount, ucwords($row_xuat['ten_hv']));
    //        $sheet->setCellValue('B'.$rowCount, $newDate);
    //        $sheet->setCellValue('C'.$rowCount, $row_xuat['gioitinh_hv']);
    //        $sheet->setCellValue('D'.$rowCount, $row_xuat['diemtong']);
    //        $sheet->setCellValue('E'.$rowCount, $row_xuat['xeploai']);
    //        $sheet->setCellValue('F'.$rowCount, $row_xuat['nhanqua']);


    //        $sheet->getColumnDimension("A")->setAutoSize(true);
    //        $sheet->getColumnDimension("B")->setAutoSize(true);
    //        $sheet->getColumnDimension("C")->setAutoSize(true);
    //        $sheet->getColumnDimension("D")->setAutoSize(true);
    //        $sheet->getColumnDimension("E")->setAutoSize(true);
    //        $sheet->getColumnDimension("F")->setAutoSize(true);
    //        $sheet->getStyle('A2:F2')->getFill()->setFillType(\PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setARGB('00ffff00');
    //        $sheet->getStyle('A1:F1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
    //        $sheet->getStyle('A2:F2')->getFont()->setBold(true);
    //     }
    //     $objWriter = new PHPExcel_Writer_Excel2007($objExcel);
    //     $filename = 'export.xlsx';
    //     $objWriter->save($filename);
    //     header('Content-Disposition: attachment; filename="'.$filename.'"');
    //     header('Content-Type: application/vnd.openxmlformatsofficedocument.spreadsheetml.sheet');
    //     header('Content-Length:'. filesize($filename));
    //     header('Content-Transfer-Encoding: binary');
    //     header('Pragma: no-cache');
    //     readfile($filename);
    //     return;
    //     }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
   
    <title>Trung tâm Ngoại ngữ - Tin học Sunrise</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/logosunrise.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>
<style>
body{

 height: 500px; 
  background-position: center; 
  background-repeat: no-repeat; 
  background-size: cover;
  height: 100%;
}
.buttonsua {  background-color: #58257b; /* Màu của Quản trị mạng ^^ */  border: none; font-weight:bold; color: white;  padding: 10px 24px;  text-align: center;  text-decoration: none;  display: inline-block; width: auto;  font-size: 15px;  margin: 4px 2px;  -webkit-transition-duration: 0.4s; /* Safari */  transition-duration: 0.4s;  cursor: pointer;  border-radius: 4px;}
.buttonsua {  background-color: white;   color: black;   border: 2px solid green;}
.buttonsua:hover {  background-color: green;  color: white;}
.buttonxoa {  background-color: #58257b; /* Màu của Quản trị mạng ^^ */  border: none; font-weight:bold; color: white;  padding: 10px 24px;  text-align: center;  text-decoration: none;  display: inline-block; width: 120px;  font-size: 15px;  margin: 4px 2px;  -webkit-transition-duration: 0.4s; /* Safari */  transition-duration: 0.4s;  cursor: pointer;  border-radius: 4px;}
.buttonxoa {  background-color: white;   color: black;   border: 2px solid red;}
.buttonxoa:hover {  background-color: red;  color: white;}
.buttonthem {  background-color: #58257b; /* Màu của Quản trị mạng ^^ */  border: none; font-weight:bold;  color: white;  padding: 10px 24px;  text-align: center;  text-decoration: none;  display: inline-block;  font-size: 15px;  margin: 4px 2px;  -webkit-transition-duration: 0.4s; /* Safari */  transition-duration: 0.4s;  cursor: pointer;  border-radius: 4px;}
.buttonthem {  background-color: white;   color: black;   border: 2px solid #17a2b8;}
.buttonthem:hover {  background-color: #17a2b8;  color: white;}

.colormix{
        background-image: linear-gradient(#00aefd, #ffff80);
    }
</style>
<?php if(isset($_SESSION['id_giaovien'])==true) { ?>
    <?php
  include("giaodien/topbar.php");
  include("giaodien_gv/header.php");
  ?>    
<?php } ?>

<body class="colormix">

<div class="container-fluid page-header" style="margin-bottom: 40px;">
            <div class="container">
                <div class="d-flex flex-column justify-content-center" style="min-height: 250px">
                    <h3 class="display-4 text-white text-uppercase">Lớp <?php echo $row_ds['ma_danhsach']?></h3>
                    <div class="d-inline-flex text-white">
                        <p class="m-0 text-uppercase"><a class="text-white" href="index_gv.php">Trang chủ</a></p>
                        <i class="fa fa-angle-double-right pt-1 px-3"></i>
                        <p class="m-0 text-uppercase">Lớp đang dạy</p>
                    </div>
                </div>
            </div>
        </div>

<div class="container-fluid">
     <div class=" container  mt-4 ">
        <div class="mb-5">
        <form method="POST" action="xuatexcel.php?id_danhsach=<?php echo $_GET['id_danhsach']?>">
            <button name="xuat" class="btn buttonsua" type="submit">Xuất bảng điểm Excel</button>
        </form>
        <?php if(mysqli_num_rows($res_ct)>0 ){ ?>
            <a class="btn buttonthem" href="nhapdiem.php?id_danhsach=<?php echo $_GET['id_danhsach']?>">Nhập điểm</a>
        <?php }else{ ?>
             <a class="btn buttonthem disabled" href="nhapdiem.php?id_danhsach=<?php echo $_GET['id_danhsach']?>">Nhập điểm</a>
        <?php } ?>
    
    <div style="text-align:center;">
            <?php 
            $sql_check = "SELECT * FROM chi_tiet_hoc WHERE id_danhsach='$_GET[id_danhsach]' AND tt_hoatdong='0'";
            $res_check = mysqli_query($connection,$sql_check);
            $sql_check1 = "SELECT * FROM chi_tiet_hoc WHERE id_danhsach='$_GET[id_danhsach]'";
            $res_check1 = mysqli_query($connection,$sql_check1);
            // $row_check = mysqli_fetch_array($res_check);
                if(mysqli_num_rows($res_check)>0 || $row_ds['tt_hoatdong']=='1'){ ?>
                 <a class="btn btn-info disabled"  href="hoanthanh.php?id_danhsach=<?php echo $row_ds["id_danhsach"];?>">Hoàn thành</a>
            <?php }elseif(mysqli_num_rows($res_check1)==0){ ?>
                <a class="btn btn-info disabled" href="hoanthanh.php?id_danhsach=<?php echo $row_ds["id_danhsach"];?>">Hoàn thành</a>
            <?php }else{ ?>
                <a class="btn btn-info" href="hoanthanh.php?id_danhsach=<?php echo $row_ds["id_danhsach"];?>">Hoàn thành</a>
            <?php } ?>
           

    </div>
    <br>
   <table class="table table-bordered table-striped table-responsive-stack" style="color:#000; background-color:#fff;" id="tableOne">
                                    <thead>
										<tr>
											<th style="text-align:center;">STT</th>
											<th style="text-align:center;">Tên học viên</th>
											<th style="text-align:center;">Ngày sinh</th>
											<th style="text-align:center;">Giới tính</th>
											<th style="text-align:center;">Tùy chọn</th>
										</tr>
									</thead>
									<tbody>
                                    
                                        <?php 
										$i=0;
										while($row_ct=mysqli_fetch_assoc($res_ct)){  
										$i++;
										?>
                                        <tr class="odd gradeX">
											<td style="text-align:center;"><?php echo $i; ?></td>
											<td style="text-align:center;"><?php echo ucwords($row_ct["ten_hv"]); ?></td>
											<td style="text-align:center;"><?php    
                                 				$odate = $row_ct['ngaysinh_hv'];
                                 				$newDate = date("d-m-Y", strtotime($odate));
                                 				echo $newDate."\n";
                            					?></td>
											<td style="text-align:center;"><?php echo ucwords($row_ct["gioitinh_hv"]); ?></td>
											
											<td class="center" style="text-align:center;">
												<?php if($row_ct['trangthaidiem'] == 0){ ?>
												<a class="btn btn-success" href="themdiemso.php?id_danhsach=<?php echo $row_ds['id_danhsach'];?>&id_hocvien=<?php echo $row_ct['id_hocvien'];?>">Cập nhật điểm</a>&ensp;                           			
                            					<?php }elseif($row_ct['trangthaidiem'] == 1 && $row_ct['tt_hoatdong'] == 0){ ?>
													<a class="btn btn-warning" href="suadiem.php?id_danhsach=<?php echo $row_ds['id_danhsach'];?>&id_hocvien=<?php echo $row_ct['id_hocvien'];?>">Sửa điểm</a>
                                                    <a class="btn btn-success" href="hoanthanhlophoc.php?id_danhsach=<?php echo $row_ds['id_danhsach'];?>&id_hocvien=<?php echo $row_ct['id_hocvien'];?>">Hoàn thành</a>&ensp;                           			
                                                <?php }elseif($row_ct['trangthaidiem'] == 1 && $row_ct['tt_hoatdong'] == 1){ ?>
                                                    <a class="btn btn-success disabled" href="hoanthanhlophoc.php?id_danhsach=<?php echo $row_ds['id_danhsach'];?>&id_hocvien=<?php echo $row_ct['id_hocvien'];?>">Đã hoàn thành</a>                          			
                                                <?php } ?>
											</td>

										</tr>
                                    <?php }	?>
									
							
										<tr>
                                            <th style="text-align:center;">STT</th>
											<th style="text-align:center;">Tên học viên</th>
											<th style="text-align:center;">Ngày sinh</th>
											<th style="text-align:center;">Giới tính</th>
											<th style="text-align:center;">Tùy chọn</th>
										</tr>
									
   </table>
    
        </div>
    </div>
</div>




<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>

<!-- Contact Javascript File -->
<script src="mail/jqBootstrapValidation.min.js"></script>
<script src="mail/contact.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>
</body>
<?php
    include("giaodien/footer.php");
     ?>
</html>
