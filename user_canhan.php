<?php
    include("config.php");
    session_start();
	if(!isset($_SESSION['id_hocvien'])){
        header('Location:login.php');
       }
     
       $username= $_SESSION['username']; 
        
    $sql1= "SELECT * FROM hocvien, capbac, danhsachlop WHERE danhsachlop.id_danhsach=hocvien.id_danhsach AND danhsachlop.id_cap=capbac.id_cap AND username='$username'"; 
    $res1= mysqli_query($connection,$sql1);
    $row1= mysqli_fetch_assoc($res1);
    if(empty($row1)){
        $row1['ten_cap']="";
        $row1['ngayhoc']="";
        $row1['thoigian']="";
    }

    $sql2= "SELECT * FROM hocvien WHERE username='$username'"; 
    $res2= mysqli_query($connection,$sql2);
    $row2= mysqli_fetch_assoc($res2);
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


</style>
<?php if(isset($_SESSION['id_hocvien'])==true) { ?>
    <?php
  include("giaodien/topbar.php");
  include("giaodien_user/header_user.php");
  ?>    
<?php } ?>
      
<body class="colormix">

<div class="container-fluid page-header" style="margin-bottom: 40px;">
            <div class="container">
                <div class="d-flex flex-column justify-content-center" style="min-height: 250px">
                    <h3 class="display-4 text-white text-uppercase">Thông tin cá nhân học viên</h3>
                    <div class="d-inline-flex text-white">
                        <p class="m-0 text-uppercase"><a class="text-white" href="user.php">Trang chủ</a></p>
                        <i class="fa fa-angle-double-right pt-1 px-3"></i>
                        <p class="m-0 text-uppercase">Thông tin cá nhân học viên</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">

                <div class=" container col-lg-7 mt-4 ">
                    <!-- Recent Post -->
                    <div class="mb-5">

   <table class="table table-bordered table-striped table-responsive-stack" style="color:#000; background-color:#fff;" id="tableOne">

        <tbody >
                    <tr>
                        <th>Tên học viên</th>
                        <td><?php echo ucwords($row2['ten_hv']); ?></td>
                    </tr>
                    <tr>
                        <th>Ngày sinh</th>
                        <td><?php    
                                 $odate = $row2['ngaysinh_hv'];
                                 $newDate = date("d-m-Y", strtotime($odate));
                                 echo $newDate."\n";
                            ?>
                        </td>
                    </tr>  
                    <tr>
                        <th>Giới tính</th>
                        <td><?php echo ucwords($row2['gioitinh_hv']); ?></td>
                    </tr>
                    <tr>
                        <th>Tên phụ huynh</th>
                        <td><?php echo ucwords($row2['ten_ph']); ?></td>
                    </tr>
                    <tr>
                        <th>Số điện thoại</th>
                        <td><?php echo $row2['sdt_ph']; ?></td>
                    </tr>
                    <tr>
                        <th>Số Zalo</th>
                        <td><?php echo $row2['sozalo_ph']; ?></td>
                    </tr>
                    <tr>
                        <th>Địa chỉ</th>
                        <td><?php echo $row2['diachi']; ?></td>
                    </tr>
                    <tr>
                        <th>Lớp đang học</th>
                        <td><?php echo $row1['ten_cap']; ?></td>
                    </tr>
                    <tr>
                        <th>Ngày nhập học</th>
                        <td><?php    
                                 $odate = $row2['ngayvaohoc'];
                                 $newDate = date("d-m-Y", strtotime($odate));
                                 echo $newDate."\n";
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th>Lớp đã học</th>
                        <td><?php echo $row2['lop_dahoc']; ?></td>
                    </tr>
                    <tr>
                        <th>Tài khoản</th>
                        <td  style="width:50%;font-size:13px;"> 
                        <a class="btn buttonthem " href="doimatkhau.php?hocvien=<?php echo $_SESSION['username']; ?>">Đổi mật khẩu</a>
                        </td>
                    </tr>
                    <tr>
                        <td colspan=2 style=" text-align:center;"><a class="btn buttonsua" href="suattcanhan.php?id_hocvien=<?php echo $row2['id_hocvien'];?>">Chỉnh sửa</a></td>

                    </tr>
                </tbody>
   </table>
   <table class="table table-bordered table-striped table-responsive-stack" style="color:#000; background-color:#fff;" id="tableOne">

        <!-- <tbody >
                    <tr>
                        <th>Lớp đang học</th>
                        <td><?php echo ucwords($row1['ten_cap']); ?></td>
                    </tr>
                    <tr>
                        <th>Buổi học</th>
                        <td><?php echo $row1['ngayhoc']; ?></td>
                    </tr>
                    <tr>
                        <th>Thời gian</th>
                        <td><?php echo $row1['thoigian']; ?></td>
                    </tr>
        </tbody> -->
   </table>
                    </div>
                </div>

    </div>



<?php
    include("giaodien/footer.php");
     ?>
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

</html>
