<?php
    include("config.php");
    session_start();
	if(!isset($_SESSION['id_giaovien'])){
        header('Location:../login.php');
       }

    $id_giaovien=$_SESSION['id_giaovien'];
    $msg= "" ;     
	$id_hocvien=$_GET['id_hocvien'];
    $id_danhsach=$_GET['id_danhsach'];

    $sql_hv = "SELECT * FROM hocvien WHERE id_hocvien='$_GET[id_hocvien]'";
    $res_hv=mysqli_query($connection,$sql_hv);
	$row_hv=mysqli_fetch_assoc($res_hv);

    $sql_ds = "SELECT * FROM danhsachlop WHERE id_danhsach='$_GET[id_danhsach]'";
    $res_ds=mysqli_query($connection,$sql_ds);
	$row_ds=mysqli_fetch_assoc($res_ds);

    $sql_sua_diem="SELECT * FROM diemso WHERE id_hocvien='$id_hocvien' AND id_danhsach='$id_danhsach'";
    $query_sua_diem= mysqli_query($connection,$sql_sua_diem);

 
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
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
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
                    <h3 class="display-4 text-white text-uppercase">Sửa điểm</h3>
                    <div class="d-inline-flex text-white">
                        <p class="m-0 text-uppercase"><a class="text-white" href="index_gv.php">Trang chủ</a></p>
                        <i class="fa fa-angle-double-right pt-1 px-3"></i>
                        <p class="m-0 text-uppercase">Sửa điểm</p>
                    </div>
                </div>
            </div>
        </div>
        <?php echo $msg;?>
                    <br>
  <div class="container-fluid"> 
      <div class="container "> 
       
      
      <div class="col-md-8 container"> 
      <div class="bg-secondary rounded p-5">
                                <?php 
        					        while ($row_sua_diem= mysqli_fetch_assoc($query_sua_diem)){
          						?>
                    <form action="updatediem.php?id_hocvien=<?php echo $_GET['id_hocvien'] ?>&id_diem=<?php echo $row_sua_diem['id_diem']; ?>&id_danhsach=<?php echo $row_sua_diem['id_danhsach']?>" class="form-horizontal" method="post" enctype="multipart/form-data" >
                                         <span class="input-group-addon">Lớp:</span>
                                        <div class="input-group">
                                                <input type="text" class="form-control"  value="<?php echo $row_ds['ma_danhsach']?>" readonly>
                                        </div>
                                        <br><span class="input-group-addon">Học viên:</span>
                                        <div class="input-group">
                                                <input type="text" class="form-control" value="<?php echo ucwords($row_hv['ten_hv'])?>" readonly>
                                        </div>
                                        <br>
                                        <span class="input-group-addon">Điểm tổng:</span>
                                        <div class="input-group">
                                                <input type="number" class="form-control" name="diemtong" value="<?php echo $row_sua_diem['diemtong']?>" required>
                                        </div>
                                        <br>
                                        <span class="input-group-addon">Nhận xét:</span>
                                        <div class="input-group">
                                                <textarea type="text" class="form-control" name="nhanxet"><?php echo $row_sua_diem['nhanxet']?></textarea>
                                        </div>
                                        <br>
                                        <span class="input-group-addon">Nhận quà:</span>
                                        <div class="input-group">
                                            <select class="form-control" name="nhanqua" required>
                                                <option value="">--Chọn--</option>
                                                <option value="Có">Có</option>
                                                <option value="Không">Không</option>
                                            </select>
                                        </div>
                                        <br>
                                        <div style="text-align:center;">
                                            <button type="submit" name="sua" class="btn buttonsua" style="font-size:20px;">Sửa</button>   
                                        </div>
						</form>
                        
                                <?php 
                                    }
                                ?>
                        </div> 
                        <br>
    
     </div>
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
