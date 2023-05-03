<?php
    include("config.php");

    session_start();
	if(!isset($_SESSION['id_giaovien'])){
        header('Location:../login.php');
       }
    $sql= "SELECT * FROM `baiviet`";
    $res=mysqli_query($connection,$sql);
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
   
    <title>Trung tâm ngoại ngữ - tin học Sunrise</title>
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
    <link href="css/main.css" rel="stylesheet">
    
</head>
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
                <h3 class="display-4 text-white text-uppercase">Bài viết</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="index_gv.php">Trang chủ</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Bài viết</p>
                </div>
            </div>
        </div>
    </div>
   

<div class="col-lg-4 mt-5 mt-lg-0">

<!-- Search Form -->
<div class="mb-2">
    <form action="user_timkiembaiviet.php" method="POST">
        <div class="input-group">
        <input type="text" class="form-control mr-sm-2" placeholder="Tìm kiếm..." name="tukhoa">
        <input type="submit" name="timkiem" class="btn btn-primary btn-sm" value="Tìm kiếm">
            
        </div>
    </form>
</div>
</div>


<div class="container-fluid ">
   
            <div class="col-lg-12 py-5 container" style="width:80%;"> 
                <div class="pb-4 row nguyenphudien" style="margin-left: 20px;">
                    <?php if(mysqli_num_rows($res)>0){ ?>
                    <?php while($row=mysqli_fetch_assoc($res)) {  ?>
                    <div class="col-lg-6 mb-4" style="text-align: center;">
                            <div class="blog-item position-relative overflow-hidden rounded mb-2">
                            <span>
                                <img style="width:300px; height:250px;" src="../../../sunrise/admin/images/<?php echo $row["anhbia"]; ?>"  alt="">
                            </span>
                            <a class="blog-overlay text-decoration-none " href="thongtinbaiviet.php?id_baiviet=<?php echo $row["id_baiviet"]; ?>">
                                    <h5 class="text-white mb-3"><?php echo $row["ten_bv"]; ?></h5>
                                    <p class="text-primary m-0"><?php echo $row["ngaydang"]; ?></p>
                                </a>
                            </div>
                    </div>
                        <?php } }?>
                </div>

            </div>

    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>

</div>
<?php
include("giaodien/footer.php");
?>
      <!-- Back to Top -->


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