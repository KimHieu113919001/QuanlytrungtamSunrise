<?php
    include("config.php");
    session_start();
	if(!isset($_SESSION['id_giaovien'])){
        header('Location:../login.php');
       }

    $id_giaovien=$_SESSION['id_giaovien'];
    $sql_tuan="SELECT MAX(id_tuan) AS maxtuan FROM tructuan";
    $res_tuan= mysqli_query($connection,$sql_tuan);
    $row_tuan=mysqli_fetch_array($res_tuan);

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
 background-image: url("../sunrise/admin/images/course-1.jpg");
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
                    <h3 class="display-4 text-white text-uppercase">KT nói chưa duyệt</h3>
                    <div class="d-inline-flex text-white">
                        <p class="m-0 text-uppercase"><a class="text-white" href="index_gv.php">Trang chủ</a></p>
                        <i class="fa fa-angle-double-right pt-1 px-3"></i>
                        <p class="m-0 text-uppercase">KT nói chưa duyệt</p>
                    </div>
                </div>
            </div>
        </div>

<div class="container-fluid">

                
                    <!-- Recent Post -->
                    <div class="mb-5">

   <table class="table table-bordered table-striped table-responsive-stack" style="color:#000; background-color:#fff;" id="tableOne">

        <tr>
            <th>Học viên</th>
            <th style="text-align:center">Lớp đăng kí</th>
            <th style="text-align:center">Đề</th>
            <th style="width:10%">Điểm Reading</th>
            <th style="width:10%">Điểm Writing</th>
            <th style="width:10%">Điểm Listening</th>
            <th style="width:10%">Điểm Speaking</th>
            <th style="text-align:center">Tùy chọn</th>
        </tr> 
        <?php

           $sql_show= "SELECT * FROM chi_tiet_diem_test, hocvien, capbac, de_test WHERE chi_tiet_diem_test.id_de=de_test.id_de AND chi_tiet_diem_test.id_cap=capbac.id_cap AND chi_tiet_diem_test.id_hocvien=hocvien.id_hocvien AND chi_tiet_diem_test.trangthaitest='1' AND chi_tiet_diem_test.duyet='0' AND chi_tiet_diem_test.id_giaovien='0'"; 
           $res_show= mysqli_query($connection,$sql_show);
            while($row_show= mysqli_fetch_assoc($res_show)){ ?>
                <tr>
                    <td><?php echo ucwords($row_show['ten_hv']);?></td>
                    <td style="text-align:center"><?php echo ucwords($row_show['ten_cap']);?></td>
                    <td style="text-align:center"><?php echo ucwords($row_show['ten_de']);?></td>
                    <td style="text-align:center"><?php echo $row_show['diem_test'];?></td>
                    <td style="text-align:center"><?php echo $row_show['diem_viet'];?></td>
                    <td style="text-align:center"><?php echo $row_show['diem_nghe'];?></td>
                    <td style="text-align:center"><?php echo $row_show['diem_noi'];?></td>
                    <td style="text-align:center"><a type="submit" class="btn buttonsua" href="duyet.php?id_diemtest=<?php echo $row_show['id_diemtest']?>&id_giaovien=<?php echo $id_giaovien?>">Duyệt</a></td>

                </tr>
            <?php } ?>

   </table>
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
