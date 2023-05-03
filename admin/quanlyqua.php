<?php
    include("config.php");
	session_start();
	if(!isset($_SESSION['username1'])){
	 header('Location:admin_login.php');
	} 

    $sql= "SELECT * FROM `qua`";
    $res=mysqli_query($connection,$sql);
    $msg="";
    if(isset($_POST['themqua'])){
        $ten_qua=$_POST['ten_qua'];
        $soluong=$_POST['soluong'];
        
        if($soluong >0){
            $insert_query="INSERT INTO `qua`(`id_qua`, `ten_qua`,`soluong`) VALUES ('','$ten_qua','$soluong')";
            
            $res_insert= mysqli_query($connection,$insert_query);
                
            if($res_insert=true){
                $msg="<script language='javascript'>
                swal(
                    'Thành công!',
                    'Đã thêm quà !',
                    'success'      
                    );
                    var timer = setTimeout(function() {
                    window.location=('quanlyqua.php')
                }, 2000);
        </script>";  
        
            }
            else{
                die('unsuccessful' .mysqli_error($connection));
            }
        }else{
            $msg='<script type="text/javascript">
                        $(document).ready(function() {
                                swal("Nhập quà thất bại!", {
                                        icon: "error",
                                    });
                                
                            });
                        </script>'; 
        }
        
    }

    
    $query=$connection->query("SELECT ten_qua AS ten_qua, soluong AS soluong FROM qua ");
    foreach($query as $data){
        $ten_qua[] = $data['ten_qua'];
        $soluong[] = $data['soluong'];
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
			<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script><script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
        <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
			
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
								<h3>Quản lý quà</h3>
							</div>
							<br>
							
                           
							<!-- <a class="btn btn-success" href="themqua.php">Thêm quà</a> &ensp; -->
							
                            
                                
							<div class="module-body ">
                                 <!-- Thêm quà -->
                                 <?php echo $msg;?>
                            <form action="" method="post" enctype="multipart/form-data" > 
                                <div >
                                <div class="control-group">
                                    <label class="control-label" for="basicinput" style="font-weight:bold;">Thêm quà mới</label>
                                    <div class="controls"style="text-align:center;">
                                        <input data-title="A tooltip for the input" type="text" name="ten_qua" placeholder="Nhập tên quà" required data-original-title="" class="span8 tip">
                                        <input data-title="A tooltip for the input" type="number" name="soluong" placeholder="Nhập số lượng" required data-original-title="" class="span8 tip">
                                    </div>
                                </div>

                                <div class="control-group"style="text-align:center;">
                                    <div class="controls">
                                        <button type="submit" class="btn btn-success"  name="themqua">Thêm</button>
                                    </div>
                                </div>
                               
                                </div>
				            </form>
                            <br>
                            <div style="width:50%;" class="container">
                                        <canvas id="myChart"></canvas>
                                    </div>
                                    <div  style="text-align:center;background-color:#ffdf80;">Biểu đồ thống kê số lượng quà.</div>
                                    <br>
								<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	display" width="100%">
									
								<thead style="font-weight:bold;">
										<tr>
											<td style="text-align:center;">STT</td>
											<td style="text-align:center;">Tên quà</td>
											<td style="text-align:center;">Số lượng</td>
											<td style="text-align:center;">Tùy chọn</td>
										</tr>
									</thead>
									<tbody >
									<?php if(mysqli_num_rows($res)>0){ ?>
									<?php 
										$i = 0;
										while($row=mysqli_fetch_assoc($res)) {
										$i++;
									?>
										<tr class="odd gradeX">
											<td style="text-align:center;"><?php echo $i; ?></td>
											<td style="text-align:center;"><?php echo $row["ten_qua"]; ?></td>
											<td style="text-align:center;"><?php echo $row["soluong"]; ?></td>
											<td style="text-align:center;"><a class="btn btn-warning" href="suaqua.php?id_qua=<?php echo $row["id_qua"]; ?>">Chỉnh sửa</a> &ensp;
                      						<a class="btn btn-danger " onclick="return confirm('Bạn có chắc muốn xóa quà này?')" href="xoaqua.php?id_qua=<?php echo $row["id_qua"]; ?>">Xóa</a></td>

										</tr>
                        			<?php } }?>
									</tbody>
									<tfoot style="font-weight:bold;">
										<tr>
											<td style="text-align:center;">STT</td>
										    <td style="text-align:center;">Tên quà</td>
											<td style="text-align:center;">Số lượng</td>
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
     <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
            const labels = <?php echo json_encode($ten_qua)?>;
            const data = {
            labels: labels,
            datasets: [{
                label: 'Số lượng quà',
                data: <?php echo json_encode($soluong)?>,
                backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(255, 205, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 179, 255, 0.2)'
                ],
                borderColor: [
                'rgb(255, 99, 132)',
                'rgb(255, 159, 64)',
                'rgb(255, 205, 86)',
                'rgb(75, 192, 192)',
                'rgb(54, 162, 235)',
                'rgb(153, 102, 255)',
                'rgb(255, 179, 255)'
                ],
                borderWidth: 1
            }]
            };
            const config = {
            type: 'bar',
            data: data,
            options: {
                scales: {
                y: {
                    beginAtZero: true
                }
                }
            },
            };
            var myChart = new Chart(document.getElementById('myChart'), config);
        </script>
</body>

</html>