<?php
    include("config.php");
    session_start();
	if(!isset($_SESSION['id_hocvien'])){
        header('Location:login.php');
       } 
       $sql_nn= "SELECT * FROM `giaovien` WHERE gv_chuyenmon='1'"; 
       $res_nn= mysqli_query($connection,$sql_nn);
   
       $sql_th= "SELECT * FROM `giaovien` WHERE gv_chuyenmon='2'"; 
       $res_th= mysqli_query($connection,$sql_th);
   
       $sql_k= "SELECT * FROM `giaovien` WHERE gv_chuyenmon='3'"; 
       $res_k= mysqli_query($connection,$sql_k);
    

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
                    <h3 class="display-4 text-white text-uppercase">Giáo viên</h3>
                    <div class="d-inline-flex text-white">
                        <p class="m-0 text-uppercase"><a class="text-white" href="user.php">Trang chủ</a></p>
                        <i class="fa fa-angle-double-right pt-1 px-3"></i>
                        <p class="m-0 text-uppercase">Giáo viên</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 mt-5 mt-lg-0 container">

<!-- Search Form -->
<div class="mb-2">
    <form action="user_timkiemgiaovien.php" method="POST">
        <div class="input-group">
        <input type="text" class="form-control mr-sm-2" placeholder="Tìm kiếm..." name="tukhoa">
        <input type="submit" name="timkiem" class="btn btn-primary btn-sm" value="Tìm kiếm">
            
        </div>
    </form>
</div>
</div>

<div class="container-fluid ">
        <div class="container ">  
        <h5 class=" text-uppercase mb-3" style="letter-spacing: 5px; color:black;">Giáo viên ngoại ngữ</h5>
        <div class="row pb-3">
                    <?php if(mysqli_num_rows($res_nn)>0){ ?>
                    <?php while($row_nn=mysqli_fetch_assoc($res_nn)) {  ?>
                    <div class="col-lg-3 mb-4 " style="text-align: center;">
                            <div class="blog-item position-relative overflow-hidden rounded mb-2">
                            <span>
                                <img style="width:300px; height:250px;"class="img-fluid" src="admin/images/<?php echo $row_nn["anhdaidien"]; ?>"  alt="">
                            </span>
                            <a class="blog-overlay text-decoration-none"  href="user_thongtingiaovien.php?id_giaovien=<?php echo $row_nn["id_giaovien"]; ?>">
                                    <h5 class="text-white mb-3"style="width:100%;font-size:18px;"><?php echo ucwords($row_nn["ten_gv"]); ?></h5>    
                            </a>
                            </div>
                            
                    </div>
                    <?php } }?>           
                        
                </div>   
    </div>
</div>
<div class="container-fluid ">
        <div class="container ">  
        <h5 class=" text-uppercase mb-3" style="letter-spacing: 5px; color:black;">Giáo viên tin học</h5>
        <div class="row pb-3">
                    <?php if(mysqli_num_rows($res_th)>0){ ?>
                    <?php while($row_th=mysqli_fetch_assoc($res_th)) {  ?>
                    <div class="col-lg-3 mb-4 " style="text-align: center;">
                            <div class="blog-item position-relative overflow-hidden rounded mb-2">
                            <span>
                                <img style="width:300px; height:250px;"class="img-fluid" src="admin/images/<?php echo $row_th["anhdaidien"]; ?>"  alt="">
                            </span>
                            <a class="blog-overlay text-decoration-none"  href="user_thongtingiaovien.php?id_giaovien=<?php echo $row_th["id_giaovien"]; ?>">
                                    <h5 class="text-white mb-3"style="width:100%;font-size:18px;"><?php echo ucwords($row_th["ten_gv"]); ?></h5>    
                            </a>
                            </div>
                            
                    </div>
                    <?php } }?>           
                        
                </div>   
    </div>
</div>
<div class="container-fluid ">
        <div class="container ">  
        <h5 class=" text-uppercase mb-3" style="letter-spacing: 5px; color:black;">Giáo viên khác</h5>
        <div class="row pb-3">
                    <?php if(mysqli_num_rows($res_k)>0){ ?>
                    <?php while($row_k=mysqli_fetch_assoc($res_k)) {  ?>
                    <div class="col-lg-3 mb-4 " style="text-align: center;">
                            <div class="blog-item position-relative overflow-hidden rounded mb-2">
                            <span>
                                <img style="width:300px; height:250px;"class="img-fluid" src="admin/images/<?php echo $row_k["anhdaidien"]; ?>"  alt="">
                            </span>
                            <a class="blog-overlay text-decoration-none"  href="user_thongtingiaovien.php?id_giaovien=<?php echo $row_k["id_giaovien"]; ?>">
                                    <h5 class="text-white mb-3"style="width:100%;font-size:18px;"><?php echo ucwords($row_k["ten_gv"]); ?></h5>    
                            </a>
                            </div>
                            
                    </div>
                    <?php } }?>        
                        
                </div>   
    </div>
</div>
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>
<?php
    include("giaodien/footer.php");
?>

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