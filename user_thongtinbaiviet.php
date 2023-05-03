<?php
    include("config.php");;
    
    session_start();
	if(!isset($_SESSION['id_hocvien'])){
        header('Location:login.php');
       }
    $id_baiviet= $_GET['id_baiviet']; 

    $sql= "SELECT * FROM `baiviet` WHERE id_baiviet='$id_baiviet' "; 
    //echo $sql;
    $res= mysqli_query($connection,$sql);
    $row= mysqli_fetch_assoc($res);

    
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
    <link href="sunrise/css/phudien.css" rel="stylesheet">
    
</head>

<body>
<?php if(isset($_SESSION['id_hocvien'])==true) { ?>
    <?php
  include("giaodien/topbar.php");
  include("giaodien_user/header_user.php");
  ?>    
<?php } ?>
<div class="container-fluid py-5">
        <div class="container ">
            
                <div class="col-lg-12 container">
                    <div >
                        <h6 class="text-primary mb-3"><?php echo $row['ngaydang']; ?></h6>
                        <h1 style="color:#000;"><?php echo $row['ten_bv']; ?></h1>
                        <?php echo $row['noidung'];?>
                    </div>        
                
      
    <h4 class="mb-4 container" style="color:#000;">Một số hình ảnh khác</h4>

                    <div class="row pb-4 nguyenphudien"style="width:100%;">
                      
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