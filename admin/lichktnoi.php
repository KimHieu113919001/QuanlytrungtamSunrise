<?php
   include("config.php");
    session_start();
    if(!isset($_SESSION['username1'])){
      header('Location:admin_login.php');
     }
    $id_hocvien= $_GET['id_hocvien']; 



    $sql_show= "SELECT * FROM hocvien, chi_tiet_diem_test, giaovien, de_test WHERE de_test.id_de=chi_tiet_diem_test.id_de AND hocvien.id_hocvien=chi_tiet_diem_test.id_hocvien  AND chi_tiet_diem_test.id_hocvien='$id_hocvien'"; 
    $res_show= mysqli_query($connection,$sql_show);
    $row_show= mysqli_fetch_assoc($res_show);

    $diem_tong1= ($row_show['diem_test']+ $row_show['diem_viet']+ $row_show['diem_nghe']+$row_show['diem_noi'])/4;
    $diem_tong=round($diem_tong1,1);

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
								<h3>Thông tin bài kiểm tra</h3>
							</div>
							<div class="module-body table">
								<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
      <tbody>
         <tr>
            <td style="color:#000;font-weight:bold;">Họ tên học viên</td>
            <td><?php echo ucwords($row_show["ten_hv"]);?></td>
         </tr>
         <tr>
            <td style="color:#000;font-weight:bold;">Bộ đề</td>
            <td><?php echo $row_show["ten_de"];?></td>
         </tr> 
         <tr>
            <td style="color:#000;font-weight:bold;">Điểm READING</td>
            <td><?php echo $row_show["diem_test"];?></td>
         </tr>
         <tr>
            <td style="color:#000;font-weight:bold;">Điểm WRITING</td>
            <td><?php echo $row_show["diem_viet"];?></td>
         </tr>
         <tr>
            <td style="color:#000;font-weight:bold;">Điểm LISTENING</td>
            <td><?php echo $row_show["diem_nghe"];?></td>
         </tr> 
         <tr>
            <td style="color:#000;font-weight:bold;">Điểm SPEAKING</td>
            <td><?php echo $row_show["diem_noi"];?></td>
         </tr> 
         <tr>
            <td style="color:#000;font-weight:bold;">Điểm Tổng</td>
            <td><?php echo $diem_tong;?></td>
         </tr> 
          
      </tbody>
      
   </table>
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