<?php
    include("../config.php");

    session_start();
    $msg="";
    
    if(isset($_POST['submit'])){
        $ten_gv= mysqli_real_escape_string($connection,($_POST['ten_gv']));
        $gioitinh= mysqli_real_escape_string($connection,($_POST['gioitinh']));
        $quoctich= mysqli_real_escape_string($connection,($_POST['quoctich']));
        $chuyenmon= mysqli_real_escape_string($connection,($_POST['chuyenmon']));
        $gv_chuyenmon= mysqli_real_escape_string($connection,($_POST['gv_chuyenmon']));
        $ngayvaolam= mysqli_real_escape_string($connection,($_POST['ngayvaolam']));
        $anhdaidien=$_POST['anhdaidien'];
        $taikhoan_gv= mysqli_real_escape_string($connection,($_POST['taikhoan_gv']));
        $matkhau_gv= md5($_POST['matkhau_gv']); 
       

        $mang_ho_ten= explode(" ",$ten_gv);
        $so_phan_tu= count($mang_ho_ten);
        $ho= $mang_ho_ten[0];
        $ten= $mang_ho_ten[$so_phan_tu-1];
        $lot =$mang_ho_ten[$so_phan_tu-2];
        if($lot =="Thị"){
          $ten_vt= "T".' '.$ten;
        }else{
          $ten_vt= $lot.' '.$ten;
        }
        $signup_query= "INSERT INTO `giaovien`(`id_giaovien`, `ten_gv`, `gioitinh`,`quoctich`, `chuyenmon`, `ngayvaolam`,`anhdaidien`, `taikhoan_gv`,`matkhau_gv`,`ten_vt`,`gv_chuyenmon`) VALUES ('','$ten_gv','$gioitinh','$quoctich','$chuyenmon','$ngayvaolam','$anhdaidien','$taikhoan_gv','$matkhau_gv','$ten_vt','$gv_chuyenmon')"; 
        
        $check_query= "SELECT * FROM `giaovien` WHERE taikhoan_gv='$taikhoan_gv'";
        
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
                    timer: 2000,
                    
                });
            });
        </script>';   
        
    }
  }
?>

<!DOCTYPE html>
<html>
<head>
  <title>Đăng ký tài khoản cho nhân viên</title>
 <!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme  -->
<link rel="stylesheet" href="cssform/style.css">
   <!-- font-awesome icons -->
<link href="cssform/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<link href="//fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
 <!-- Sweetalert -->
 <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  </head>
  <style>
body {
	background-image: url("../img/carousel-3.jpg");
  font-size: 100%;
	font-family: 'Montserrat', sans-serif;
	background-size:cover;
	background-attachment:fixed;
	-webkit-background-size:cover;
	-moz-background-size:cover;
	-o-background-size:cover;
	-ms-background-size:cover;
} 
.a{
  background: #fff;
  margin: 5px 0px;
  margin-bottom: 25px;
  color:#000000;
  box-sizing: border-box;
  display: block;
  width: 100%;
  border-width: 1px;
  border-style: solid;
  padding: 13px;
  outline:none;
  font-family: inherit;
  font-size: 0.95em;
}
.login input[type="date"], .login input[type="text"], .login input[type="password"] {
  margin: 5px 0px;
  margin-bottom: 25px;

}
</style>
<body>
<div class="login-form w3_form">
      <div class="login-title w3_title">
      </div>
           <div class="login w3_login">
                <h2 class="login-header w3_header" style="font-size: 30px;">Đăng ký tài khoản nhân viên</h2>
				    <div class="w3l_grid">
            <?php echo $msg; ?>
                        <form class="login-container" action="" method="post">
                              Họ tên
                             <input type="text" id="ten_gv" placeholder="Nhập họ tên" Name="ten_gv" required="" >
                            <div>
                              <input type="radio1" placeholder="Giới tính"  readonly >&ensp;
													        <input type="radio" name="gioitinh" id="gioitinh" value="Nam" required>
                                    Nam&ensp;&ensp;
                                  <input type="radio" name="gioitinh" id="gioitinh" value="Nữ">
                                    Nữ
                            </div>
                             Quốc tịch
                             <input type="text" id="quoctich" placeholder="Nhập quốc tịch" Name="quoctich" required="" >

                             Chuyên môn
                             <select class="a" id="chuyenmon" name="chuyenmon" required>
                              <option value="">--Chọn chuyên môn--</option>  
                                <?php 
                                $sql_cm="SELECT * FROM chuyenmon ORDER BY id_chuyenmon";
                                $query_cm= mysqli_query($connection,$sql_cm);
                                while($row_cm= mysqli_fetch_assoc($query_cm)){
                                  ?>
                                  <option value="<?php echo $row_cm['ten_chuyenmon']?>"><?php echo $row_cm['ten_chuyenmon']?></option>
                                  <?php
                                }
                                ?>
                              </select>
                              
                             <select class="a" id="gv_chuyenmon" name="gv_chuyenmon" required>
                              <option value="">--Chọn lĩnh vực--</option>  
                              <option value="1">Ngoại ngữ</option>  
                              <option value="2">Tin học</option>  
                              <option value="3">Khác</option>  
                              </select>
                             Ngày vào làm
                             <input type="date" id="ngayvaolam"  Name="ngayvaolam" required>
                             Ảnh đại diện
                             <input  type="file" class="a" name="anhdaidien" required>
                             Tên tài khoản
                             <input type="text" id="taikhoan_gv" placeholder="Nhập tên tài khoản" Name="taikhoan_gv" required="" >
                             Mật khẩu
                             <input type="password" id="matkhau_gv" placeholder="Nhập mật khẩu" Name="matkhau_gv" required="">
                             <input type="submit"  name="submit" value="Đăng ký">
                        </form>
      <div class="second-section w3_section">
          <div class="bottom-header w3_bottom">
                <h3>HOẶC</h3>
          </div>
      </div>
                      
      <div class="bottom-text w3_bottom_text">
            <p>Bạn đã có tài khoản<a href="login_gv.php">Đăng nhập</a></p>
      </div>
      <br>
          <div class="bottom-text w3_bottom_text">
                <p>Trở về<a href="../index.php">Trang chủ</a></p>
          </div>
        </div>
      </div>
        
      </div>  
          <div class="footer-w3l">
              <p style="color:#fff"> &copy; Trung tâm Ngoại ngữ - Tin học Sunrise </p>
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