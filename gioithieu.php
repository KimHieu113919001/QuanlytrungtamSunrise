<?php
    include("config.php");
    $sql1= "SELECT * FROM `gioithieu` WHERE id_gioithieu LIMIT 1"; 
    //echo $sql;
    $res1= mysqli_query($connection,$sql1);
     
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Trung tâm ngoại ngữ - tin học Sunrise TV</title>
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

<body>
<?php
  include("giaodien/topbar.php");
  include("giaodien/header.php");
  ?>
<div class="container-fluid page-header" style="margin-bottom: 40px;">
        <div class="container">
            <div class="d-flex flex-column justify-content-center" style="min-height: 250px">
                <h3 class="display-4 text-white text-uppercase" style="text-align:center;">Giới thiệu</h3>
            </div>
        </div>
    </div>
  <!--Giới thiệu -->
    <div class="container-fluid ">
        <div class="container ">
           
                <div class="col-lg-9 container">
                <?php while($row1=mysqli_fetch_assoc($res1)) {  ?>
                    <div >
                        <h2 style="color:#000;text-align:center;" ><?php echo $row1['tieude']; ?></h2>
                        <img class="img-fluid rounded w-100 mb-4" src="img/carousel-1.jpg" alt="Image">
                        <p style="color:#000;"><?php echo $row1["noidung"]; ?></p>
                    </div>
                <?php }	?>
     
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
<?php
    include("giaodien/footer.php");
     ?>
</html>