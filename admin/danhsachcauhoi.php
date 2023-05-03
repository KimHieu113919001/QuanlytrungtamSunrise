<?php
    include("config.php");
	session_start();
	if(!isset($_SESSION['username1'])){
	 header('Location:admin_login.php');
	} 
    $sql_r= "SELECT * FROM `cau_hoi` WHERE id_de='$_GET[id_de]' AND id_kynang='1'";
    $res_r=mysqli_query($connection,$sql_r);

	$sql_w= "SELECT * FROM `cau_hoi` WHERE id_de='$_GET[id_de]' AND id_kynang='2'";
    $res_w=mysqli_query($connection,$sql_w);

	$sql_l= "SELECT * FROM `cau_hoi` WHERE id_de='$_GET[id_de]' AND id_kynang='3'";
    $res_l=mysqli_query($connection,$sql_l);
    $id_de=$_GET['id_de'];

	$sql1 = "SELECT * FROM de_test WHERE id_de='$_GET[id_de]'";
    $res1=mysqli_query($connection,$sql1);
	$row1=mysqli_fetch_assoc($res1);

	$sql2 = "SELECT * FROM cau_hoi_listening WHERE id_de='$_GET[id_de]'";
    $res2=mysqli_query($connection,$sql2);
	$row2= mysqli_fetch_assoc($res2);
    if(empty($row2)){
        $row2['noidung']="";
        $row2['trangthai']="0";
    }


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
.p1 {
    
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
    width: 390px;
}

.p1:hover { 
    overflow: visible;
    white-space: pre-line;
	word-break: break-word;
    width: 390px;
	height:auto;
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
								<h3>Quản lý câu hỏi bộ đề: <color style="color: #ccff66;"><?php echo $row1['ten_de'];?></color></h3>
							</div>
							<br>
							<div style="text-align:center;">
							<a class="btn btn-success" href="themcauhoi1.php?id_de=<?php echo $id_de;?>">Thêm câu hỏi</a> &ensp;
							</div>
							<div class="module-body table">
								<!--Reading-->
								<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
								<thead style="font-weight:bold;">
										<tr>
											<td style="text-align:center; background-color: #cccc00;">READING</td>
										</tr>
										<tr>
											<td style="text-align:center;">STT</td>
											<td style="text-align:center;">Nội dung</td>
											<td style="text-align:center;">Ngày cập nhật</td>
											<td style="text-align:center;">Tùy chọn</td>
										</tr>
									</thead>
									<tbody>
								<?php if(mysqli_num_rows($res_r)>0){ ?>
								<?php 
									$i = 0;
									while($row_r=mysqli_fetch_assoc($res_r)) {
									$i++;
								?>
                        				<tr class="odd gradeX">
											<td style="text-align:center;"><?php echo $i; ?></td>
											<td><div class="p1"><?php echo $row_r["noidung"]; ?></div></td>
											<td style="text-align:center;"><?php echo $row_r["ngaycapnhat_ch"]; ?></td>
											<td style="text-align:center;"><a class="btn btn-warning" href="suacauhoi.php?id_de=<?php echo $id_de; ?>&id_cauhoi=<?php echo $row_r["id_cauhoi"]; ?>">Sửa</a> &ensp;
											<a class="btn btn-primary" href="noidungcauhoi.php?id_cauhoi=<?php echo $row_r["id_cauhoi"]; ?>">Xem</a>&ensp;
                                            <a class="btn btn-danger " onclick="return confirm('Bạn có chắc muốn xóa câu hỏi này?')" href="xoacauhoi.php?id_de=<?php echo $id_de; ?>&id_cauhoi=<?php echo $row_r["id_cauhoi"]; ?>">Xóa</a>
                                            </td>

										</tr>
                       			<?php } }?>
									</tbody>
									<tfoot style="font-weight:bold;">
										<tr>
											<td style="text-align:center;">STT</td>
										    <td style="text-align:center;">Nội dung</td>
											<td style="text-align:center;">Ngày cập nhật</td>
											<td style="text-align:center;">Tùy chọn</td>
										</tr>
									</tfoot>
								</table>
								<br>
								<!--Writting-->
								<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
								<thead style="font-weight:bold;">
										<tr>
											<td style="text-align:center; background-color: #cccc00;">WRITTING</td>
										</tr>
										<tr>
											<td style="text-align:center;">STT</td>
											<td style="text-align:center;">Nội dung</td>
											<td style="text-align:center;">Ngày cập nhật</td>
											<td style="text-align:center;">Tùy chọn</td>
										</tr>
									</thead>
									<tbody >
								<?php if(mysqli_num_rows($res_w)>0){ ?>
								<?php 
									$i = 0;
									while($row_w=mysqli_fetch_assoc($res_w)) {
									$i++;
								?>
                        				<tr class="odd gradeX">
											<td style="text-align:center;"><?php echo $i; ?></td>
											<td><div class="p1"><?php echo $row_w["noidung"]; ?></div></td>
											<td style="text-align:center;"><?php echo $row_w["ngaycapnhat_ch"]; ?></td>
											<td style="text-align:center;"><a class="btn btn-warning" href="suacauhoi.php?id_de=<?php echo $id_de; ?>&id_cauhoi=<?php echo $row_w["id_cauhoi"]; ?>">Sửa</a> &ensp;
											<a class="btn btn-primary" href="noidungcauhoi.php?id_cauhoi=<?php echo $row_w["id_cauhoi"]; ?>">Xem</a>&ensp;
                                            <a class="btn btn-danger " onclick="return confirm('Bạn có chắc muốn xóa câu hỏi này?')" href="xoacauhoi.php?id_de=<?php echo $id_de; ?>&id_cauhoi=<?php echo $row_w["id_cauhoi"]; ?>">Xóa</a>
                                            </td>

										</tr>
                       			<?php } }?>
									</tbody>
									<tfoot style="font-weight:bold;">
										<tr>
											<td style="text-align:center;">STT</td>
										    <td style="text-align:center;">Nội dung</td>
											<td style="text-align:center;">Ngày cập nhật</td>
											<td style="text-align:center;">Tùy chọn</td>
										</tr>
									</tfoot>
								</table>
								<br>
								<!--Listening-->
								<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
								<thead style="font-weight:bold;">
										<tr>
											<td style="text-align:center; background-color: #cccc00;">LISTENING</td>
											<td style="text-align:center;" colspan="2"><?php echo $row2['noidung'];?></td>
											<td style="text-align:center;">
											<?php if($row2['trangthai'] == 0){ ?>
											<a class="btn btn-success" href="themaudio_listening.php?id_de=<?php echo $id_de; ?>">Thêm</a>
											<?php }else{ ?>
											<a class="btn btn-warning" href="suafilenghe.php?id=<?php echo $row2['id']?>">Sửa</a>&ensp;
                                            <a class="btn btn-danger " onclick="return confirm('Bạn có muốn xóa file nghe này?')" href="../admin/thaotac/xoafilenghe.php?id_de=<?php echo $id_de; ?>">Xóa</a>
											<?php } ?>

											</td>
										</tr>
										<tr>
											<td style="text-align:center;">STT</td>
											<td style="text-align:center;">Nội dung</td>
											<td style="text-align:center;">Ngày cập nhật</td>
											<td style="text-align:center;">Tùy chọn</td>
										</tr>
									</thead>
									<tbody >
								<?php if(mysqli_num_rows($res_l)>0){ ?>
								<?php 
									$i = 0;
									while($row_l=mysqli_fetch_assoc($res_l)) {
									$i++;
								?>
                        				<tr class="odd gradeX">
											<td style="text-align:center;"><?php echo $i; ?></td>
											<td><div class="p1"><?php echo $row_l["noidung"]; ?></div></td>
											<td style="text-align:center;"><?php echo $row_l["ngaycapnhat_ch"]; ?></td>
											<td style="text-align:center;"><a class="btn btn-warning" href="suacauhoi.php?id_de=<?php echo $id_de; ?>&id_cauhoi=<?php echo $row_l["id_cauhoi"]; ?>">Sửa</a> &ensp;
											<a class="btn btn-primary" href="noidungcauhoi.php?id_cauhoi=<?php echo $row_l["id_cauhoi"]; ?>">Xem</a>&ensp;
                                            <a class="btn btn-danger " onclick="return confirm('Bạn có chắc muốn xóa câu hỏi này?')" href="xoacauhoi.php?id_de=<?php echo $id_de; ?>&id_cauhoi=<?php echo $row_l["id_cauhoi"]; ?>">Xóa</a>
                                            </td>

										</tr>
                       			<?php } }?>
									</tbody>
									<tfoot style="font-weight:bold;">
										<tr>
											<td style="text-align:center;">STT</td>
										    <td style="text-align:center;">Nội dung</td>
											<td style="text-align:center;">Ngày cập nhật</td>
											<td style="text-align:center;">Tùy chọn</td>
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