<?php
    include("config.php");

    session_start();
	if(!isset($_SESSION['username1'])){
		header('Location:admin_login.php');
	   } 
    $sql= "SELECT * FROM `giaovien` ";
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
.btn-info {
	color: #fff;
	background-color: #6666ff;
	border-color: #6666ff
}
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
								<h3>Quản lý phân quyền</h3>
							</div>
							<br>
							
							<div class="module-body table">
								
								<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
									
								<thead style="font-weight:bold; text-align:center;">
										<tr>
											<td style="text-align:center;">STT</td>
											<td style="text-align:center;">Giáo viên</td>
											<td style="text-align:center;">Hình ảnh</td>
											<td style="text-align:center;">Giáo viên xếp lịch</td>
											<td style="text-align:center;">Giáo viên xếp phòng</td>
											<td style="text-align:center;">Trực tuần</td>
											<td style="text-align:center;">Giáo viên Test Nói</td>
										</tr>
									</thead>
									<tbody>
                                    <?php if(mysqli_num_rows($res)>0){ ?>
                    				<?php 
										$i=0;
										while($row=mysqli_fetch_assoc($res)) { 
										$i++;
						 				?>
                        				<tr class="odd gradeX td">
											<td style="text-align:center;"><?php echo $i; ?></td>
											<td style="text-align:center;"><?php echo $row["ten_gv"]; ?></td>
											<td style="text-align:center;"><img  style="width:100px; height:auto;" src="../admin/images/<?php echo $row["anhdaidien"]; ?>"  alt=""></td>
                                            <td style="text-align:center;">
                                                <?php if($row['gv_xeplich'] == 0){
                                                 echo '<a class="btn btn-danger" href="trangthaixeplich.php?id_giaovien='.$row['id_giaovien'].'&gv_xeplich=1">Disable</a>';
                                                }else{
                                                    echo '<a class="btn btn-success" href="trangthaixeplich.php?id_giaovien='.$row['id_giaovien'].'&gv_xeplich=0">Enable</a>';
                                                } ?>
                                            </td>
											<td style="text-align:center;">
                                                <?php if($row['gv_xepphong'] == 0){
                                                 echo '<a class="btn btn-danger" href="trangthaixepphong.php?id_giaovien='.$row['id_giaovien'].'&gv_xepphong=1">Disable</a>';
                                                }else{
                                                    echo '<a class="btn btn-success" href="trangthaixepphong.php?id_giaovien='.$row['id_giaovien'].'&gv_xepphong=0">Enable</a>';
                                                } ?>
                                            </td>
                                            <td style="text-align:center;">
                                                <?php if($row['gv_truc'] == 0){
                                                 echo '<a class="btn btn-danger" href="trangthaitruc.php?id_giaovien='.$row['id_giaovien'].'&gv_truc=1">Disable</a>';
                                                }else{
                                                    echo '<a class="btn btn-success" href="trangthaitruc.php?id_giaovien='.$row['id_giaovien'].'&gv_truc=0">Enable</a>';
                                                } ?>
                                            </td>
                                            <td style="text-align:center;">
                                                <?php if($row['gv_ktnoi'] == 0){
                                                 echo '<a class="btn btn-danger" href="trangthaiktnoi.php?id_giaovien='.$row['id_giaovien'].'&gv_ktnoi=1">Disable</a>';
                                                }else{
                                                    echo '<a class="btn btn-success" href="trangthaiktnoi.php?id_giaovien='.$row['id_giaovien'].'&gv_ktnoi=0">Enable</a>';
                                                } ?>
                                            </td>

										</tr>
                        			<?php } }?>
									</tbody>
									<tfoot style="font-weight:bold;">
										<tr>
											<td style="text-align:center;">STT</td>
											<td style="text-align:center;">Giáo viên</td>
											<td style="text-align:center;">Hình ảnh</td>
											<td style="text-align:center;">Giáo viên xếp lịch</td>
											<td style="text-align:center;">Giáo viên xếp phòng</td>
											<td style="text-align:center;">Giáo viên trực</td>
											<td style="text-align:center;">Giáo viên Test Nói</td>
									</tfoot>
								</table>
							</div>
						</div>
						
					</div>
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