<?php
    include("config.php");

    session_start();
	if(!isset($_SESSION['username'])){
        header('Location:login.php');
       }
    $sql = "SELECT * FROM khoahoc, capbac WHERE khoahoc.id_khoahoc=capbac.id_khoahoc AND  khoahoc.id_khoahoc='$_GET[id_khoahoc]'ORDER BY id_cap ";
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
    <link rel="stylesheet" href="css/phudien.css">
    <link href="css/main.css" rel="stylesheet">
   
    
</head>
<style>
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
<body>
    <?php
    include("giaodien/topbar.php");
    include("giaodien_user/header_user.php");
    ?>
    <div style="font-size:17px; width:100% ;" >
        <div class="row">
           <div class="col-md-12">
           <div class="container-fluid page-header" style="margin-bottom: 10px;">
        <div class="container">
            <div class="d-flex flex-column justify-content-center" style="min-height: 270px">
                <h3 class="display-4 text-white text-uppercase">Quản lý lớp học</h3>
                <div class="d-inline-flex text-white" style="width:900px;">
                    <p class="m-0 text-uppercase"><a class="text-white" href="user.php">Trang chủ</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase"><a class="text-white" href="quanlykhoahoc.php">Quản lý khóa học</p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase"><a class="text-white">Quản lý lớp học</p>
                </div>
            </div>
        </div>
    </div>
 
<div class="container-fluid">
        <div class="container py-5 ">  
      
                    <div class=" pb-4 nguyenphudien"style="width:80%;">
                    <?php if(mysqli_num_rows($res)>0){ ?>
                    <?php while($row=mysqli_fetch_assoc($res)) {  ?>
                    <div class="col-lg-6 mb-4" style="text-align: center;">
                            <div class="blog-item position-relative overflow-hidden rounded mb-2">
                            <span>
                                <img style="width:300px; height:250px;" src="admin/images/<?php echo $row["hinhanh"]; ?>"  alt="">
                            </span>
                            <a class="blog-overlay text-decoration-none " href="user_thongtinkhoahoc.php?id_khoahoc=<?php echo $row["id_khoahoc"]; ?>">
                                    <h5 class="text-white mb-3"style="width:100%;"><?php echo $row["ten_cap"]; ?></h5>
                                    
                                </a>
                            </div>
                            
                        </div>
                        <?php } }?>
                    </div>
        </div>
</div>
                


</body>

</html>