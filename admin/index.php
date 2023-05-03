<?php

    session_start();
    if(!isset($_SESSION['username1'])){
     header('Location:admin_login.php');
    } 

    include("config.php");
    $sql1= "SELECT * FROM `gioithieu` WHERE id_gioithieu LIMIT 1"; 
    $res1= mysqli_query($connection,$sql1);

    $sql_hv= "SELECT COUNT(id_hocvien) AS soluong FROM `hocvien`"; 
    $res_hv= mysqli_query($connection,$sql_hv);
    $row_hv= mysqli_fetch_assoc($res_hv);

    $sql_gv= "SELECT COUNT(id_giaovien) AS soluong FROM `giaovien`"; 
    $res_gv= mysqli_query($connection,$sql_gv);
    $row_gv= mysqli_fetch_assoc($res_gv);

    $sql_ds= "SELECT COUNT(id_danhsach) AS soluong FROM `danhsachlop`"; 
    $res_ds= mysqli_query($connection,$sql_ds);
    $row_ds= mysqli_fetch_assoc($res_ds);

    $sql_p= "SELECT COUNT(id_phong) AS soluong FROM `phong`"; 
    $res_p= mysqli_query($connection,$sql_p);
    $row_p= mysqli_fetch_assoc($res_p);

    $sql_bv= "SELECT COUNT(id_baiviet) AS soluong FROM `baiviet`"; 
    $res_bv= mysqli_query($connection,$sql_bv);
    $row_bv= mysqli_fetch_assoc($res_bv);

    $sql_tb= "SELECT COUNT(id_thongbao) AS soluong FROM `thongbao`"; 
    $res_tb= mysqli_query($connection,$sql_tb);
    $row_tb= mysqli_fetch_assoc($res_tb);
     
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../admin/images/logosunrise.png" rel="icon">
        <title>Trung tâm Ngoại ngữ - Tin học Sunrise</title>
        <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="css/theme.css" rel="stylesheet">
        <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
            rel='stylesheet'>
            <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
            <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
            
    </head>
    
    <style>

h3{
    color:#fff;
}
    </style>

<body >
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
                            <div class="btn-controls">
                                <div class="btn-box-row row-fluid">
                                    <a class="btn-box span3"><i class="icon-user" style="color:red;"></i><b><?php echo $row_gv['soluong']?></b>
                                        <p class="text-muted" style="font-weight:bold;color:black;">Giáo viên</p>
                                    </a>
                                    <a href="thongkelop.php" class="btn-box span3"><i class="icon-group"style="color:#6666ff;"></i><b><?php echo $row_ds['soluong']?></b>
                                        <p class="text-muted" style="font-weight:bold;color:black;">Lớp</p>
                                    </a>
                                    <a href="quanlytuan.php" class="btn-box span3">
                                        <i class="fas fa-calendar-week" style="color:#009933;"></i><b class="hidden">0</b>
                                        <p class="text-muted" style="font-weight:bold;color:black;">Tuần</p>
                                    </a>
                                   
                                    <a  href="quanlyphong.php" class="btn-box span3">
                                        <i class="fas fa-building"style="color:#ff9900;"></i><b><?php echo $row_p['soluong']?></b>
                                        <p class="text-muted" style="font-weight:bold;color:black;">Phòng</p>
                                    </a>
                                </div>

                                <div class="btn-box-row row-fluid">
								    <a href="quanlybaiviet.php" class="btn-box span3">
									    <i class="icon-bullhorn" style="color:#00e6e6"></i><b><?php echo $row_bv['soluong']?></b>
									    <p class="text-muted" style="font-weight:bold;color:black;">Bài viết/Tuyển sinh</p>
								    </a>
								    <a href="quanlythongbao.php" class="btn-box span3">
									    <i class="fas fa-bell" style="color:#e6e600;"></i><b><?php echo $row_tb['soluong']?></b>
									    <p class="text-muted" style="font-weight:bold;color:black;">Thông báo</p>
								    </a>
								    <a href="quanlychuyenmon.php" class="btn-box span3">
									    <i class="icon-briefcase" style="color:#ff0066;"></i><b class="hidden">0</b>
									    <p class="text-muted" style="font-weight:bold;color:black;">Chuyên môn</p>
								    </a>
                                    <a href="quanlybanner.php" class="btn-box span3">
									    <i class="fas fa-image" style="color:#b800e6;"></i><b class="hidden">0</b>
									    <p class="text-muted" style="font-weight:bold;color:black;">Banner</p>
								    </a>
							    </div>
                                <div class="btn-box-row row-fluid">
                                    <a href="quanlyqua.php" class="btn-box span3">
									    <i class="fas fa-gift" style="color:#ff8080;"></i><b class="hidden">0</b>
									    <p class="text-muted" style="font-weight:bold;color:black;">Quà</p>
								    </a>
                                    <a href="quanlygioithieu.php" class="btn-box span3">
									    <i class="fas fa-bookmark" style="color:#996600;"></i><b class="hidden">0</b>
									    <p class="text-muted" style="font-weight:bold;color:black;">Giới thiệu</p>
								    </a>
							    </div>
                            </div>
                        </div>
                </div>
               
        </div>
    </div>
</div>
        <script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.resize.js" type="text/javascript"></script>
        <script src="scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="scripts/common.js" type="text/javascript"></script>
      
    </body>
</html>