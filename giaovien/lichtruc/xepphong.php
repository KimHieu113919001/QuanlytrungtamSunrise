<?php 
    include("config.php");

    session_start();
    if(!isset($_SESSION['id_giaovien'])){
      header('Location:../../login.php');
     }

    $sql_capnhat="SELECT * FROM tuan ";
    $res_capnhat=mysqli_query($connection,$sql_capnhat);

    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $date = date('Y-m-d');
  
    while($row_capnhat=mysqli_fetch_assoc($res_capnhat)){
      $ngaybatdau = $row_capnhat['ngaybatdau'];
      $ngayketthuc = strtotime ( '+6 day' , strtotime ($ngaybatdau) );
      $ngayketthuc = date ( 'Y-m-d' , $ngayketthuc);
      if($date > $ngayketthuc){
        $sql_trangthai="UPDATE tuan SET trangthai='1' WHERE id_tuan='$row_capnhat[id_tuan]'";
        $res_trangthai=mysqli_query($connection,$sql_trangthai);
      }
      
    }

     if(isset($_POST['xepphong'])){
      $id_tuan=$_POST['id_tuan'];
      header('Location: xepphong1.php?id_tuan='.$id_tuan);
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
    <link href="../img/logosunrise.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../css/style.css" rel="stylesheet">
        <!-- Sweetalert -->
        <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
      <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
      <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

      <!-- <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script> -->
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
th{
  text-align:center;
}td{
  text-align:center;
}

</style>
<?php if(isset($_SESSION['id_giaovien'])==true) { ?>
    <?php
  include("../giaodien/topbar.php");
  include("giaodien_gv/header.php");
  ?>    
<?php } ?>
<body class="colormix">

      
<div class="container-fluid page-header" style="margin-bottom: 40px;">
            <div class="container">
                <div class="d-flex flex-column justify-content-center" style="min-height: 250px">
                    <h3 class="display-4 text-white text-uppercase">Xếp phòng</h3>
                    <div class="d-inline-flex text-white">
                        <p class="m-0 text-uppercase"><a class="text-white" href="../index_gv.php">Trang chủ</a></p>
                        <i class="fa fa-angle-double-right pt-1 px-3"></i>
                        <p class="m-0 text-uppercase">Xếp phòng</p>

                    </div>
                </div>
            </div>
        </div>

<div class="container-fluid"> 
  <div class="container"> 

  
        <form action="" method="POST" enctype="multipart/form-data"  class="form-horizontal">
       
        <label class="control-label" for="basicinput" >Chọn tuần</label>
       
            <select class="form-control" name="id_tuan" required>
                    <option value="0">--Chọn--</option>  
                      <?php 
                      $sql_t="SELECT * FROM tuan WHERE trangthai='0' ORDER BY id_tuan ASC";
                      $query_t= mysqli_query($connection,$sql_t);
                     
                      while($row_t= mysqli_fetch_assoc($query_t)){
                        $T2=$row_t['ngaybatdau'];
                        $CN = strtotime ( '+6 day' , strtotime ($T2) );
                        $CN = date ( 'Y-m-d' , $CN );
                        ?>
                        <option  value="<?php echo $row_t['id_tuan']?>"><?php echo $row_t['ten_tuan']?> 
                            [Từ ngày 
                            <?php    
                                 $odate = $row_t['ngaybatdau'];
                                 $newDate = date("d/m/Y", strtotime($odate));
                                 echo $newDate."\n";
                            ?> 
                            đến ngày 
                            <?php    
                                $odate = $CN;
                                $newDate = date("d/m/Y", strtotime($odate));
                                echo $newDate;
                            ?>]
                       </option>
                        <?php
                      }
                      ?>
                    </select>
                      <br>
                  <div style="text-align:center;">
                    <button type="submit" class="btn btn-success" name="xepphong">Chọn</button>
                  </div>
<br>
       
        
        </form>
        
       
        <div class="test"></div>
        <br> 
        
      
</div></div>


<?php
    include("giaodien/footer.php");
     ?>
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


<!-- JavaScript Libraries -->
  <!-- JavaScript Libraries -->

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    
</body>

</html>
