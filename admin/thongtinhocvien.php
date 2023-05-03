<?php
   include("config.php");
    session_start();
    if(!isset($_SESSION['username1'])){
      header('Location:admin_login.php');
     }
    $id_hocvien= $_GET['id_hocvien']; 

    $sql1= "SELECT * FROM hocvien WHERE  id_hocvien='$id_hocvien'"; 
    //echo $sql;
    $res1= mysqli_query($connection,$sql1);
    $row1= mysqli_fetch_assoc($res1);

    $sql2= "SELECT * FROM hocvien, capbac, danhsachlop WHERE danhsachlop.id_danhsach=hocvien.id_danhsach AND danhsachlop.id_cap=capbac.id_cap AND id_hocvien='$id_hocvien'"; 
    $res2= mysqli_query($connection,$sql2);
    $row2= mysqli_fetch_assoc($res2);
    if(empty($row2)){
        $row2['ten_cap']="";
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
								<h3>Thông tin học viên</h3>
							</div>
							<div class="module-body table">
								
								<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">

      <tbody>
         
         <tr>
            <td style="color:#000;font-weight:bold;">Họ tên học viên</td>
            <td><?php echo ucwords($row1["ten_hv"]);?></td>

         </tr>
         <tr>
            <td style="color:#000;font-weight:bold;">Ngày sinh học viên</td>
            <td><?php   $var = $row1['ngaysinh_hv'];
                        $date = str_replace('/', '-', $var);
                        echo date('d/m/Y', strtotime($date)); ?></td>

         </tr>
         <tr>
            <td style="color:#000;font-weight:bold;">Giới tính</td>
            <td><?php echo $row1["gioitinh_hv"]; ?></td>
         </tr>
         <tr>
            <td style="color:#000;font-weight:bold;">Tên phụ huynh</td>
            <td><?php echo ucwords($row1["ten_ph"]); ?></td>

         </tr>
         <tr>
            <td style="color:#000;font-weight:bold;">Số điện thoại</td>
            <td><?php echo $row1["sdt_ph"]; ?></td>

         </tr>
         <tr>
            <td style="color:#000;font-weight:bold;">Số Zalo phụ huynh</td>
            <td><?php echo $row1["sozalo_ph"]; ?></td>

         </tr>
         <tr>
            <td style="color:#000;font-weight:bold;">Địa chỉ</td>
            <td><?php echo $row1["diachi"]; ?></td>

         </tr>
         <tr>
            <td style="color:#000;font-weight:bold;">Lớp đang học</td>
            <td><?php echo $row2["ten_cap"]; ?></td>

         </tr>
         <tr>
            <td style="color:#000;font-weight:bold;">Lớp đã học</td>
            <td><?php echo $row1["lop_dahoc"]; ?></td>

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