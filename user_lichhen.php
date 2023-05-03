<?php
    include("config.php");;
    
    session_start();
    if(!isset($_SESSION['id_hocvien'])){
        header('Location:login.php');
       }
    $id_hocvien= $_GET['id_hocvien']; 

    $sql_show= "SELECT * FROM hocvien, chi_tiet_diem_test, tructuan, tuan, buoi, thu, giaovien, de_test, capbac WHERE chi_tiet_diem_test.id_cap=capbac.id_cap AND de_test.id_de=chi_tiet_diem_test.id_de AND hocvien.id_hocvien=chi_tiet_diem_test.id_hocvien AND chi_tiet_diem_test.ngayhen=tructuan.id_truc AND tuan.id_tuan=tructuan.id_tuan AND buoi.id_buoi=tructuan.id_buoi AND thu.id_thu=tructuan.id_thu AND giaovien.id_giaovien=tructuan.id_giaovien  AND chi_tiet_diem_test.id_hocvien='$id_hocvien' ORDER BY chi_tiet_diem_test.id_diemtest DESC"; 
    $res_show= mysqli_query($connection,$sql_show);
    

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
body {
	background-image: url(" img/registration.jpg");
  height: 500px; 
  background-position: center; 
  background-repeat: no-repeat; 
  background-size: cover;
  height: 800px;
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
</style>
  <?php
  include("giaodien/topbar.php");
  include("giaodien_user/header_user.php");
  ?>

<body>  
  <br>
  <div class="container-fluid"> 
      <div class="container "> 

      <div class="col-md-9 container"> 
      <div class="bg-secondary rounded p-5">
          
         
          <form class="form-horizontal" action="" method="post"> 

          <div class="hinh">
              <h1 style="text-align: center; background-color:#F2F1F8; color:#000000;">Lịch hẹn kiểm tra Nói</h1>      
          </div> 
            <br>
            <?php while($row_show= mysqli_fetch_assoc($res_show)){ ?>
              <div class="input-group">
                  <span class="input-group-addon"></span>
                  <h5 style="color:#000;"><i class="fas fa-angle-double-right"></i>&ensp;Lớp đăng kí: <?php echo $row_show["ten_cap"]; ?>, ngày <?php $odate = $row_show['ngay'];$newDate = date("d-m-Y", strtotime($odate));echo $newDate;?>, <?php echo $row_show["thu"];?>, buổi <?php echo $row_show["ten_buoi"];?>&ensp;
                  <?php if($row_show['trangthai_hv'] == '0'){ ?>
                  <a type="submit" class="btn btn-success" href="user_trangthai.php?id_diemtest=<?php echo $row_show['id_diemtest']?>&trangthai_hv=1">Đồng ý</a>
                  <a type="submit" class="btn btn-danger" href="user_trangthai.php?id_diemtest=<?php echo $row_show['id_diemtest']?>&trangthai_hv=2">Từ chối</a>
                  <h5>
                  <?php }elseif($row_show['trangthai_hv'] == '1'){ ?>
                  &ensp;<i style="color:#00e600;">Đồng ý</i>
                  <?php }elseif($row_show['trangthai_hv'] == '2'){ ?>
                  &ensp;<i style="color:#ff0000;">Từ chối</i>
                  <?php } ?>
              </div>
                <br>
            <?php } ?>
            </form>
      </div> 
    </div>

    </div> 
</div>

<!-- Back to Top -->
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
<script>
	      CKEDITOR.replace('thongtinlienhe');
        CKEDITOR.replace('tomtat');
        CKEDITOR.replace('noidung_tb');
    </script>
</body>
</html>