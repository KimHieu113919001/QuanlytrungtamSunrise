<?php
    include("config.php");

    session_start();
	if(!isset($_SESSION['username1'])){
		header('Location:admin_login.php');
	   } 
    $sql = "SELECT * FROM khoahoc, capbac WHERE khoahoc.id_khoahoc=capbac.id_khoahoc AND  khoahoc.id_khoahoc='$_GET[id_khoahoc]'ORDER BY id_cap ";
    $res=mysqli_query($connection,$sql);
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
                            
                            
								<h3>Quản lý cấp bậc</h3>
                                
							</div>
							
							<div class="module-body table">
								<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
									<thead>
										<tr>
											<th style="text-align:center;">Tên cấp bậc</th>
											<th style="text-align:center;">Hình ảnh</th>
											<th style="text-align:center;">Tùy chọn</th>
										</tr>
									</thead>
									<tbody>
                                    <?php if(mysqli_num_rows($res)>0){ ?>
                                        <?php while($row=mysqli_fetch_assoc($res)) {  ?>
                                        <tr class="odd gradeX">
											<td style="text-align:center;"><?php echo $row["ten_cap"]; ?></td>
											<td style="text-align:center;"><img style="width:100px; height:auto;" src="../admin/images/<?php echo $row["hinhanh"]; ?>"  alt=""></td>
											<td class="center" style="text-align:center;"><a class="btn btn-warning" href="../admin/suattlop.php?id_cap=<?php echo $row["id_cap"]; ?>">Chỉnh sửa</a> &ensp;

											<a class="btn btn-danger " onclick="return confirm('Bạn có chắc muốn xóa cấp bậc này?')" href="xoalop.php?id_khoahoc=<?php echo $row["id_khoahoc"]; ?>&id_cap=<?php echo $row["id_cap"]; ?>">Xóa</a>
										</td>
										</tr>
										<?php } }else{ ?>
												<tr class="odd gradeX">
												<td colspan="3"><?php echo 'Không có cấp bậc nào!' ?></td>
												</tr>
										<?php }?>
									</tbody>
                                    
									<tfoot>
										<tr>
                                            <th style="text-align:center;">Tên cấp bậc</th>
											<th style="text-align:center;">Hình ảnh</th>
											<th style="text-align:center;">Tùy chọn</th>
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
</body>

</html>