<?php
    include("config.php");
    session_start();
	if(!isset($_SESSION['id_giaovien'])){
        header('Location:../login.php');
       }

    $id_giaovien=$_SESSION['id_giaovien'];
    $sql_gv= "SELECT * FROM giaovien WHERE id_giaovien='$id_giaovien'"; 
    $res_gv= mysqli_query($connection,$sql_gv);
    $row_gv= mysqli_fetch_assoc($res_gv);
    if($row_gv['ngayvaolam'] != null){
        $odate = $row_gv['ngayvaolam'];
        $newDate = date("d/m/Y", strtotime($odate));

        $datenow = getdate();
        $ngaythang = $newDate;
        $tach_ngaythang=array();
        $tach_ngaythang=explode('/', $ngaythang); // cho vào mảng

        $ng=$tach_ngaythang[0]; 
        $th=$tach_ngaythang[1];
        $na=$tach_ngaythang[2];

        $ngs = (int)$ng; // chuyển thành dạng số
        $ths = (int)$th;
        $nas = (int)$na;

        $date = $datenow['year'] - $nas;
        $kinhnghiem =$date.' '."năm";
    }else{
        $kinhnghiem= "";
        $newDate="";
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
                    <h3 class="display-4 text-white text-uppercase">Thông tin cá nhân giáo viên</h3>
                    <div class="d-inline-flex text-white">
                        <p class="m-0 text-uppercase"><a class="text-white" href="index_gv.php">Trang chủ</a></p>
                        <i class="fa fa-angle-double-right pt-1 px-3"></i>
                        <p class="m-0 text-uppercase">Thông tin cá nhân giáo viên</p>
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
                        <th>Tên giáo viên</th>
                        <td><?php echo ucwords($row_gv['ten_gv']); ?></td>
                    </tr>  
                    <tr>
                        <th>Giới tính</th>
                        <td><?php echo ucwords($row_gv['gioitinh']); ?></td>
                    </tr>
                    <tr>
                        <th>Quốc tịch</th>
                        <td><?php echo ucwords($row_gv['quoctich']); ?></td>
                    </tr>
                    <tr>
                        <th>Chuyên môn</th>
                        <td><?php echo $row_gv['chuyenmon']; ?></td>
                    </tr>
                    <tr>
                        <th>Ngày vào làm</th>
                        <td><?php echo $newDate; ?></td>
                    </tr>
                    <tr>
                        <th>Kinh nghiệm</th>
                        <td><?php echo $kinhnghiem; ?></td>
                    </tr>
                    <tr>
                        <th>Đối tượng dạy</th>
                        <td><?php echo $row_gv['doituongday']; ?></td>
                    </tr>
                    <tr>
                        <th>Tài khoản</th>
                        <td  style="width:50%;font-size:13px;"> 
                        <a class="btn buttonthem" href="doimatkhau_gv.php?giaovien=<?php echo $_SESSION['id_giaovien']; ?>">Đổi mật khẩu</a>
                        </td>
                    </tr>
                    <tr>
                        <td colspan=2 style=" text-align:center;"><a class="btn buttonsua" href="suattcanhan_gv.php?id_giaovien=<?php echo $row_gv['id_giaovien'];?>">Chỉnh sửa</a></td>

                    </tr>
                </tbody>
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
