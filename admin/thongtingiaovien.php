<?php
   include("config.php");
    session_start();
    if(!isset($_SESSION['username1'])){
      header('Location:admin_login.php');
     }
    $id_giaovien= $_GET['id_giaovien']; 
    $sql1= "SELECT * FROM `giaovien` WHERE id_giaovien='$id_giaovien'"; 
    $res1= mysqli_query($connection,$sql1);
    $row1= mysqli_fetch_assoc($res1);

      $odate = $row1['ngayvaolam'];
      $newDate = date("d/m/Y", strtotime($odate));

      $datenow = getdate();
      
      $ngaythang = $newDate;
      $tach_ngaythang=array();
      $tach_ngaythang=explode('/', $ngaythang); // cho vào mảng

      $ng=$tach_ngaythang[0]; 
      $th=$tach_ngaythang[1];
      $na=$tach_ngaythang[2];

      $ngs = (int)$ng; // chuyển thành dạng số
      $ths = (int)$th;
      $nas = (int)$na;

      $date = $datenow['year'] - $nas;
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
}</style>
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
								<h3>Thông tin giáo viên</h3>
							</div>
							<div class="module-body table">
								
								<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">

      <tbody>
         <tr>
         <td colspan="2" style="text-align:center;"><img src="../admin/images/<?php echo $row1['anhdaidien'] ?>"width="250px"></td>
         </tr>
         <tr>
            <td style="color:#000;font-weight:bold;">Họ tên</td>
            <td><?php echo $row1["ten_gv"];?></td>

         </tr>
         <tr>
            <td style="color:#000;font-weight:bold;">Giới tính</td>
            <td><?php echo $row1["gioitinh"]; ?></td>
         </tr>
         <tr>
            <td style="color:#000;font-weight:bold;">Quốc tịch</td>
            <td><?php echo $row1["quoctich"]; ?></td>

         </tr>
         <tr>
            <td style="color:#000;font-weight:bold;">Chuyên môn</td>
            <td><?php echo $row1["chuyenmon"]; ?></td>

         </tr>
         <tr>
            <td style="color:#000;font-weight:bold;">Kinh nghiệm</td>
            <td><?php echo $date; ?> năm</td>
         </tr>
         <tr>
            <td style="color:#000;font-weight:bold;">Đối tượng đã dạy</td>
            <td><?php echo $row1["doituongday"]; ?></td>
         </tr>
         
      </tbody>
      
   </table>
   <br>
	<div class="controls"style="text-align:center;">
			<!-- <a type="submit" class="btn btn-warning" href="../admin/suagiaovien.php?id_giaovien=<?php echo $row1["id_giaovien"]; ?>">Chỉnh sửa</a>&ensp;&ensp; -->
			<!-- <a class="btn btn-danger " onclick="return confirm('CẢNH BÁO! Bạn có chắc muốn xóa giáo viên này?')" href="xoagiaovien.php?id_giaovien=<?php echo $row1["id_giaovien"]; ?>">Xóa</a> -->
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

</html