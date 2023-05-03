<?php 
    include("config.php");

    session_start();
    if(!isset($_SESSION['id_giaovien'])){
      header('Location:../login.php');
     }

     if(isset($_POST['submit'])){
        $ngaybatdau=$_POST['ngaybatdau'];
        $ngayketthuc=$_POST['ngayketthuc'];
        $ten_tuan=$_POST['ten_tuan'];
        
        $insert_query="INSERT INTO `tuan`(`id_tuan`,`ten_tuan`,`ngaybatdau`,`ngayketthuc`) VALUES ('','$ten_tuan','$ngaybatdau','$ngayketthuc')";
        $res= mysqli_query($connection,$insert_query);
        if($res==true){
          $msg='<script type="text/javascript">
          $(document).ready(function() {
              swal({
                  title: "Thành công!",
                  text: "Đã thêm tuần mới!",
                  icon: "success",
                  button: "Ok",
                  timer: 2000
              });
          });
      </script>'; 
        }
        else{
          $msg='<script type="text/javascript">
          $(document).ready(function() {
                swal("Thêm tuần mới thất bại!", {
                          icon: "error",
                      });
                  
              });
          </script>'; 
        }
        
    }

    // if(isset($_POST['themlichtruc'])){
    // $id_tuan=$_POST['id_tuan'];
    // header('Location: ../giaovien/lichtruc/them_lich.php?id_tuan='.$id_tuan);}
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

    <script  src="js/multiselect-dropdown.js"></script>
    
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
td{
    width: 10%;
}


</style>
<?php if(isset($_SESSION['id_giaovien'])==true) { ?>
    <?php
  include("giaodien/topbar.php");
  include("giaodien_gv/header.php");
  ?>    
<?php } ?>
<body>
      
<div class="container-fluid page-header" style="margin-bottom: 40px;">
            <div class="container">
                <div class="d-flex flex-column justify-content-center" style="min-height: 250px">
                    <h3 class="display-4 text-white text-uppercase">Xếp lịch trực</h3>
                    <div class="d-inline-flex text-white">
                        <p class="m-0 text-uppercase"><a class="text-white" href="index_gv.php">Trang chủ</a></p>
                        <i class="fa fa-angle-double-right pt-1 px-3"></i>
                        <p class="m-0 text-uppercase">Xếp lịch trực</p>
                    </div>
                </div>
            </div>
        </div>

<div class="container-fluid"> 
  <div class="container"> 
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-6">
      
              <form action="" method="POST" enctype="multipart/form-data"  class="form-horizontal">
                
                <div class="control-group">
                <label class="control-label" for="basicinput">Tên tuần mới</label>
                <div class="controls">
						            <input type="text" name="ten_tuan"  class="form-control">
                        <br>
                        <label class="control-label" for="basicinput">Ngày bắt đầu</label>
						            <input type="date" name="ngaybatdau"  class="form-control">
                        <br>
                        <label class="control-label" for="basicinput">Ngày kết thúc</label>
						            <input type="date" name="ngayketthuc"  class="form-control">
                        <br>
                      
                  </div>
                  <div style="text-align:center;">
                  <button type="submit" class="btn btn-success" name="submit">Thêm tuần</button>  
              </div>
              </div>
                </form>
        <br>
        </div>
    </div>
</div>
</div>


<?php
    include("giaodien/footer.php");
     ?>
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


<!-- JavaScript Libraries -->
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
