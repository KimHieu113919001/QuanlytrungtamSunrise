<?php
    session_start();
    include("config.php");
     if(!isset($_SESSION['username1'])){
        header('Location:admin_login.php');
       }
	
     $sql = "SELECT * FROM chi_tiet_hoc, hocvien WHERE chi_tiet_hoc.id_hocvien=hocvien.id_hocvien AND chi_tiet_hoc.id_danhsach='$_GET[id_danhsach]'";
     $res=mysqli_query($connection,$sql); 

	 $sql1= "SELECT * FROM danhsachlop, capbac, giaovien WHERE danhsachlop.id_giaovien=giaovien.id_giaovien AND danhsachlop.id_cap=capbac.id_cap AND  danhsachlop.id_danhsach='$_GET[id_danhsach]' ";
     $res1=mysqli_query($connection,$sql1); 
	 $row1=mysqli_fetch_assoc($res1);

	 $sql2 = "SELECT * FROM danhsachlop WHERE danhsachlop.id_danhsach='$_GET[id_danhsach]'";
     $res2=mysqli_query($connection,$sql2);
	 $row2=mysqli_fetch_assoc($res2);

	 
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Trung tâm Ngoại ngữ - Tin học Sunrise</title>
		<link href="../admin/images/logosunrise.png" rel="icon">
        <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="css/theme.css" rel="stylesheet">
        <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
            rel='stylesheet'>
			<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    </head>
<style>
.buttonsua {  background-color: #58257b; /* Màu của Quản trị mạng ^^ */  border: none; font-weight:bold; color: white;  padding: 10px 24px;  text-align: center;  text-decoration: none;  display: inline-block; width: auto;  font-size: 15px;  margin: 4px 2px;  -webkit-transition-duration: 0.4s; /* Safari */  transition-duration: 0.4s;  cursor: pointer;  border-radius: 4px;}
.buttonsua {  background-color: white;   color: black;   border: 2px solid green;}
.buttonsua:hover {  background-color: green;  color: white;}
.buttonxoa {  background-color: #58257b; /* Màu của Quản trị mạng ^^ */  border: none; font-weight:bold; color: white;  padding: 10px 24px;  text-align: center;  text-decoration: none;  display: inline-block; width: 120px;  font-size: 15px;  margin: 4px 2px;  -webkit-transition-duration: 0.4s; /* Safari */  transition-duration: 0.4s;  cursor: pointer;  border-radius: 4px;}
.buttonxoa {  background-color: white;   color: black;   border: 2px solid red;}
.buttonxoa:hover {  background-color: red;  color: white;}
.buttonthem {  background-color: #58257b; /* Màu của Quản trị mạng ^^ */  border: none; font-weight:bold;  color: white;  padding: 10px 24px;  text-align: center;  text-decoration: none;  display: inline-block;  font-size: 15px;  margin: 4px 2px;  -webkit-transition-duration: 0.4s; /* Safari */  transition-duration: 0.4s;  cursor: pointer;  border-radius: 4px;}
.buttonthem {  background-color: white;   color: black;   border: 2px solid #17a2b8;}
.buttonthem:hover {  background-color: #17a2b8;  color: white;}
h3{
    color:#fff;
}
.td{
	background-color: white;
}
</style>
<body>
<?php
    include('../admin/navbar.php');
    ?>
    <div class="wrapper">
        <div class="container">
            <div class="row">
    <?php
    include('../admin/thanhcongcu.php');
    ?>
       <div class="span9">
					<div class="content">
							
						<div class="module">
							<div class="module-head">
								<h3>Danh sách học viên lớp: <color style="color: #ccff66;"><?php echo $row1['ma_danhsach'];?></color> GV: <color style="color: #ffff80;"><?php echo $row1['ten_gv'];?></color></h3>
							</div>
							<br>
							<!-- <div style="text-align:center;">
							<a class="btn btn-success" href="../admin/themhocvien.php?id_danhsach=<?php echo $row2['id_danhsach'];?>&ma_danhsach=<?php echo $row2['ma_danhsach'];?>">Thêm học viên</a> &ensp;
							</div> -->

							<div class="module-body table">
							<!-- <form method="POST" action="xuatexcel.php?id_danhsach=<?php echo $_GET['id_danhsach']?>" style="text-align:center;">
								<button name="xuat" class="btn btn-success" type="submit">Xuất bảng điểm Excel</button>
							</form> -->
							<br>
								<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	table-responsive-sm display" width="100%">
									
								<thead >
										<tr>
											<th style="text-align:center;">STT</th>
											<th style="text-align:center;">Tên học viên</th>
											<th style="text-align:center;">Ngày sinh</th>
											<th style="text-align:center;">Giới tính</th>
											<!-- <td style="text-align:center;">Ngày vào học</td> -->
											<!-- <td style="text-align:center;">Tùy chọn</td> -->
										</tr>
									</thead>
									<tbody>
                                    
                                        <?php 
										$i=0;
										while($row=mysqli_fetch_assoc($res)){  
										$i++;
										?>
                                        <tr class="odd gradeX">
											<td style="text-align:center;background-color: white"><?php echo $i; ?></td>
											<td style="text-align:center;background-color: white"><?php echo ucwords($row["ten_hv"]); ?></td>
											<td style="text-align:center;background-color: white"><?php    
                                 				$odate = $row['ngaysinh_hv'];
                                 				$newDate = date("d-m-Y", strtotime($odate));
                                 				echo $newDate."\n";
                            					?></td>
											<td style="text-align:center;background-color: white"><?php echo ucwords($row["gioitinh_hv"]); ?></td>
											<!-- <td style="text-align:center;"><?php    
                                 					$odate = $row['ngayvaohoc'];
                                 					$newDate = date("d-m-Y", strtotime($odate));
                                 					echo $newDate."\n";
                            					?>
                        					</td> -->
											<!-- <td class="center" style="text-align:center;">
												<?php if($row['trangthaidiem'] == 0){ ?>
												<a class="btn btn-warning " href="../admin/themdiemso.php?id_danhsach=<?php echo $row2['id_danhsach'];?>&id_hocvien=<?php echo $row['id_hocvien'];?>">Cập nhật điểm</a>&ensp;                           			
                            					<?php }else{ ?>
													<a class="btn btn-warning" href="../admin/suadiem.php?id_danhsach=<?php echo $row2['id_danhsach'];?>&id_hocvien=<?php echo $row['id_hocvien'];?>">Sửa điểm</a>&ensp;                           			
												<?php } ?>

												<a class="btn btn-warning" href="../admin/doilop.php?id_hocvien=<?php echo $row["id_hocvien"]; ?>">Chuyển lớp</a> &ensp;
	
													
											</td> -->

										</tr>
                                    <?php }	?>
									</tbody>
									<tfoot >
										<tr>
											<th style="text-align:center;">STT</th>
                                            <th style="text-align:center;">Tên học viên</th>
											<th style="text-align:center;">Ngày sinh</th>
											<th style="text-align:center;">Giới tính</th>
											<!-- <td style="text-align:center;">Ngày vào học</td> -->
											<!-- <td style="text-align:center;">Tùy chọn</td> -->
										</tr>
									</tfoot>
								</table>
							</div>
						</div><!--/.module-->
						
					</div><!--/.content-->
				</div>
</div>
</div>
</div>
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

<script src="scripts/jquery-1.9.1.min.js"></script>
	<script src="scripts/jquery-ui-1.10.1.custom.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="scripts/datatables/jquery.dataTables.js"></script>
	<script>
		$(document).ready(function() {
			$('.datatable-1').dataTable();
			$('.dataTables_paginate').addClass("btn-group datatable-pagination");
			$('.dataTables_paginate > a').wrapInner('<span />');
			$('.dataTables_paginate > a:first-child').append('<i class="icon-chevron-left shaded"></i>');
			$('.dataTables_paginate > a:last-child').append('<i class="icon-chevron-right shaded"></i>');
		} );
	</script>
</body>

</html>