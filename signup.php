<?php
    include("config.php");

    session_start();
    $msg="";
    
    if(isset($_POST['submit'])){
        $ten_hv= mysqli_real_escape_string($connection,($_POST['ten_hv']));
        $ten_ph= mysqli_real_escape_string($connection,($_POST['ten_ph']));
        $gioitinh_hv= mysqli_real_escape_string($connection,($_POST['gioitinh_hv']));
        $diachi= mysqli_real_escape_string($connection,($_POST['diachi']));
        $sdt_ph= mysqli_real_escape_string($connection,($_POST['sdt_ph']));
        $sozalo_ph= mysqli_real_escape_string($connection,($_POST['sozalo_ph']));
        $ngaysinh_hv= mysqli_real_escape_string($connection,($_POST['ngaysinh_hv']));
        $username= mysqli_real_escape_string($connection,($_POST['username']));
        $password= md5($_POST['password']); 
        
        
        $signup_query= "INSERT INTO `hocvien`(`id_hocvien`, `ten_hv`, `ngaysinh_hv`,`gioitinh_hv`, `ten_ph`, `sdt_ph`, `sozalo_ph`, `diachi`, `username`,`password`) VALUES ('','$ten_hv','$ngaysinh_hv','$gioitinh_hv','$ten_ph','$sdt_ph','$sozalo_ph','$diachi','$username','$password')"; 
        
        $check_query= "SELECT * FROM `hocvien` WHERE username='$username'";
        
        $check_res=mysqli_query($connection,$check_query);
        
        if(mysqli_num_rows($check_res)>0){

          $msg='<script type="text/javascript">
          $(document).ready(function() {
                swal("Tên tài khoản đã tồn tại! Vui lòng nhập lại!", {
                          icon: "error",
                      });
                  
              });
          </script>'; 
        }
        
        else{
            $signup_res= mysqli_query($connection,$signup_query); 
            $msg='<script type="text/javascript">
            $(document).ready(function() {
                swal({
                    title: "Đăng ký thành công!",
                    text: "Bạn có thể đăng nhập ngay bây giờ!",
                    icon: "success",
                    button: "Ok",
                    timer: 2000
                });
            });
        </script>';   
            
        }
        
    }

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

        <!-- Sweetalert -->
        <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- Datepicker -->
    <link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css"
         rel = "stylesheet">
      <script src = "https://code.jquery.com/jquery-1.10.2.js"></script>
      <script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
      
      <!-- Javascript -->
      <script>
         $(function() {
            $( "#ngaysinh_hv" ).datepicker({
               changeMonth:true,
               changeYear:true,
               numberOfMonths:[1,1]
            });
         });
      </script>
</head>
<style>
body{
 background-image: url("../sunrise/admin/images/registration.jpg");
 height: 500px; 
  background-position: center; 
  background-repeat: no-repeat; 
  background-size: cover;
  height: 100%;
}
    </style>
<?php
  include("giaodien/topbar.php");
  include("giaodien/header.php");
?>
<body>  
<br>
<br>
<div class="container-fluid"> 
      <div class="container "> 
       <div class="row ">
         <div class="col-md-3"></div>
      <div class="col-md-6"> 
      <div class="bg-secondary rounded p-5"> 
          <form class="form-horizontal" action="" method="post">
            <?php echo $msg;?> 
          <div class="hinh">
              <h1 style="text-align: center; background-color:#F2F1F8; color:#000000;">Đăng ký tài khoản</h1>      
          </div> 
          <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input id="ten_hv" type="text" class="form-control" name="ten_hv" placeholder="Nhập họ tên học viên" required>
                </div>                <br>
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input id="ngaysinh_hv" type="text" class="form-control" name="ngaysinh_hv" placeholder="Nhập ngày sinh học viên"required>
                </div>

                <br>
                <div class="input-group">
											<label class="control-label">Giới tính</label><br>&ensp;&ensp;
											<div class="controls">
												<label class="radio inline">
													<input type="radio" name="gioitinh_hv" id="gioitinh_hv" value="Nam" required>
													Nam
												</label> 
												<label class="radio inline">
													<input type="radio" name="gioitinh_hv" id="gioitinh_hv" value="Nữ">
													Nữ
												</label> 
											</div>
										</div>

                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input id="ten_ph" type="text" class="form-control" name="ten_ph" placeholder="Nhập họ tên phụ huynh"required>
                </div>
                <br>
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input id="diachi" type="text" class="form-control" name="diachi" placeholder="Nhập địa chỉ"required>
                </div>
                <br>
                 <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input id="sdt_ph" type="number" class="form-control" name="sdt_ph" placeholder="Nhập số điện thoại phụ huynh"required>
                </div>
                <br>
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input id="sozalo_ph" type="number" class="form-control" name="sozalo_ph" placeholder="Nhập số zalo">
                </div>
                <br>
               
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input id="username" type="text" class="form-control" name="username" placeholder="Tên tài khoản"required>
                </div>
                <br>
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                  <input id="password" type="password" class="form-control" name="password" placeholder="Mật khẩu"required>
                </div>
                <br> 
                
                <div style="text-align:center;" >
                  <button type="submit" name="submit" class="btn btn-success" style="font-size:20px;">Đăng ký</button>
                  
                </div>             
              <br>
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                <a href="log_and_sign/signup_gv.php" class="btn btn-success py-md-2 px-md-4 font-weight-semi-bold mt-2" style="width:100%">Đăng ký tài khoản nhân viên</a>
              </div>
              <br>      
            </form>
      </div> 
    </div>
    <div class="col-md-3"></div>
     </div>
    </div> 
</div>
    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <!-- <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script> -->
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>
</html>