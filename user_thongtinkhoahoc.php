<?php
    include("config.php");
    session_start();
	if(!isset($_SESSION['username'])){
        header('Location:login.php');
       }
    $id_khoahoc= $_GET['id_khoahoc']; 

    $sql= "SELECT * FROM `khoahoc` WHERE id_khoahoc='$id_khoahoc'"; 
    $res= mysqli_query($connection,$sql);
    $row= mysqli_fetch_assoc($res);
    
    $sql2="SELECT * FROM `khoahoc` WHERE id_khoahoc != '$id_khoahoc' ORDER BY id_khoahoc LIMIT 3"; 
    $res2= mysqli_query($connection,$sql2);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Trung tâm Ngoại ngữ - Tin học Sunrise TV</title>
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
<link rel="stylesheet" href="css/phudien.css">
    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>
<?php
  include("giaodien/topbar.php");
  include("giaodien_user/header_user.php");

    ?>
<body>

        <div class="container-fluid page-header" style="margin-bottom: 10px;">
        <div class="container">
            <div class="d-flex flex-column justify-content-center" style="min-height: 270px">
                <h3 class="display-4 text-white text-uppercase">Thông tin cấp độ</h3>
                <div class="d-inline-flex text-white" style="width:900px;">
                     <i class="fa fa-angle-double-left pt-1 px-3"></i>            
                    <p class="m-0 text-uppercase"><a class="text-white" style="font-size:15px;" href="user_khoahoc.php">Quản lý cấp độ</a></p>
                </div>
            </div>
        </div>
    </div>
  <!--Giới thiệu -->
  <div class="container-fluid ">
        <div class="container ">
            <div class="row">
                <div class="col-lg-8">
                    <div >
                        <h6 class="text-primary"></h6>
                        <h1 style="color:#000;text-align:center;"><?php echo $row['ten_kh']; ?></h1>
                        <img class="img-fluid rounded w-100 mb-4" src="admin/images/<?php echo $row["hinhanh"]; ?>" alt="Image">
                        <p style="color:#000;"><?php echo $row["mota"]; ?></p>
                    <!--    <h4 class="mb-4" style="color:red;">Đối tượng học</h4>
                        <p style="color:#000;">- <?php echo $row["doituong"]; ?></p>
                        <h4 class="mb-4" style="color:red;">Học phí</h4>
                        <p style="color:#000;">- <?php echo number_format($row['hocphi']); ?> VNĐ</p>  -->
                    </div>
                </div>

                <div class="col-lg-4 mt-5 ">
                    <!-- Recent Post -->
                    <div class="mb-5">
                        <h3 style="letter-spacing: 1px;color:#000;margin-right: -30px;">Các cấp độ khác</h3>
                        <?php while($row2=mysqli_fetch_assoc($res2)) {  ?>
                        <a class="d-flex align-items-center text-decoration-none mb-3" href="user_thongtinkhoahoc.php?id_khoahoc=<?php echo $row2['id_khoahoc'];?>">
                            <img style="width:80px;height:80px;"  class="img-fluid rounded" src="admin/images/<?php echo $row2['hinhanh'];?>" alt="">
                            <div class="pl-3">
                                <h6 class="m-1"style="color:#000;"><?php echo $row2['ten_kh'];?></h6>
                            
                            </div>
                        </a>
                        <?php }?>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid py-2">
        <div class="container py-2">  
    <h4 class="mb-4" style="color:#000;">Một số hình ảnh khác</h4>

    <div class="row pb-4 col-lg-12 nguyenphudien">
                      
                      <div class="col-lg-6 mb-4" style="text-align: center;">
                          <div class="blog-item position-relative rounded mb-2 ">
                          <?php if($row['hinh1']==""){
                              echo 'None';
                              }else{?>
                              <span><img style="width:300px; height:250px;" src="admin/images/<?php echo $row["hinh1"]; ?>" alt=""></span>
                          <?php  } ?>
                          </div>
                      </div>

                      <div class="col-lg-6 mb-4" style="text-align: center;">
                          <div class="blog-item position-relative rounded mb-2 ">
                          <?php if($row['hinh2']==""){
                          echo 'None';
                              }else{?>
                              <span><img style="width:300px; height:250px;" src="admin/images/<?php echo $row["hinh2"]; ?>" alt=""></span>
                          <?php  } ?>
                          </div>
                      </div>

                      <div class="col-lg-6 mb-4" style="text-align: center;">
                          <div class="blog-item position-relative rounded mb-2 ">
                          <?php if($row['hinh3']==""){
                              echo 'None';
                              }else{?>
                              <span><img style="width:300px; height:250px;" src="admin/images/<?php echo $row["hinh3"]; ?>" alt=""></span>
                          <?php  } ?>
                          </div>
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

</body>

</html>
