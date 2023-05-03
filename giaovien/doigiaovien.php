<?php
    include("config.php");
    session_start();
	if(!isset($_SESSION['id_giaovien'])){
        header('Location:../login.php');
    }
     
    $msg= "" ;     
    $id_diemtest=$_GET['id_diemtest'];
    $id_giaovien=$_SESSION['id_giaovien'];

    $sql_tuan="SELECT MAX(id_tuan) AS maxtuan FROM tructuan";
    $res_tuan= mysqli_query($connection,$sql_tuan);
    $row_tuan=mysqli_fetch_array($res_tuan);

    $sql_tuan1="SELECT MIN(id_tuan) AS mintuan FROM tuan WHERE trangthai='0'";
    $res_tuan1= mysqli_query($connection,$sql_tuan1);
    $row_tuan1=mysqli_fetch_array($res_tuan1);

    $tuanke = $row_tuan1['mintuan']+1;

    date_default_timezone_set("Asia/Ho_Chi_Minh");
    $date = date('Y-m-d');

    $sql_hv = "SELECT * FROM hocvien, chi_tiet_diem_test WHERE hocvien.id_hocvien=chi_tiet_diem_test.id_hocvien AND chi_tiet_diem_test.id_diemtest='$id_diemtest'";
    $res_hv=mysqli_query($connection,$sql_hv);
	$row_hv=mysqli_fetch_assoc($res_hv);
    if(isset($_POST['doigv'])){
        $id_giaovien=$_POST['id_giaovien'];
        $update_query="UPDATE chi_tiet_diem_test SET id_giaovien='$id_giaovien' WHERE id_diemtest='$id_diemtest'";
        $res= mysqli_query($connection,$update_query);
        if($res==true){
          $msg="<script language='javascript'>
              swal(
                   'Thành công!',
                   'Đã đổi giáo viên!',
                   'success'      
                   );
                   var timer = setTimeout(function() {
                    window.location=('kiemtranoi.php')
                }, 2000);
            </script>";
        }
        else{
          $msg='<script type="text/javascript">
          $(document).ready(function() {
                swal("Không thể đổi giáo viên!", {
                          icon: "error",
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
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
   <?php echo $msg;?>
                    <br>
  <div class="container-fluid"> 
      <div class="container "> 
       
         
      <div class="col-md-8 container"> 
      <div class="bg-secondary rounded p-5">
          
          <form class="form-horizontal" action="" method="post" enctype="multipart/form-data"> 
          <?php echo $msg;?>
          <div class="hinh">
              <h1 style="text-align: center; background-color:#F2F1F8; color:#000000;">Đổi giáo viên</h1>      
          </div>
          <br>
             <span class="input-group-addon">Tên học viên:</span>
              <div class="input-group">
                  <input type="text" class="form-control" readonly value="<?php echo ucwords($row_hv['ten_hv']);?>" >
              </div> 
              <br>
            
              <div class="input-group">
              <select class="form-control" name="id_giaovien" required>
                <option value="">--Chọn giáo viên--</option>
                    <?php  
                        
                        $sql_thu="SELECT * FROM giaovien WHERE gv_ktnoi='1' ORDER BY ten_gv ASC ";
                        $res_thu= mysqli_query($connection,$sql_thu);
                        while($row_thu= mysqli_fetch_assoc($res_thu)){
                            ?>
                            <option font-size:10px; value="<?php echo $row_thu['id_giaovien']?>"><?php echo $row_thu['ten_gv']?></option>
                            <?php
                        
                     } ?> 
                     </select>
              </div> 
                          <br> 
              <div style="text-align:center;">
                 <button type="submit" name="doigv" class="btn buttonsua" style="font-size:20px;">Đổi</button>
                            
              </div>
                
            </form>
 
      </div> 
      <br>
   
    
     </div>
    </div> 
</div>
                <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>

<!-- JavaScript Libraries -->
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
