<?php
   include("config.php");
    
    session_start();
    if(!isset($_SESSION['username1'])){
        header('Location:admin_login.php');
       }
    $id_baiviet= $_GET['id_baiviet']; 

    $sql1= "SELECT * FROM `baiviet` WHERE id_baiviet='$id_baiviet' "; 
    //echo $sql;
    $res1= mysqli_query($connection,$sql1);
    $row1= mysqli_fetch_assoc($res1);

    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Trung tâm Ngoại ngữ - Tin học Sunrise</title>
        <link href="../admin/images/logosunrise.png" rel="icon">
        <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="css/theme.css" rel="stylesheet">
        <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
            rel='stylesheet'>
            <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
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
h3{
    color:#fff;
}</style>
<body>
<?php
    include('../admin/navbar.php');
    ?>
    <div class="wrapper">
        <div class="container">
            <div class="row">
    <?php
    include('../admin/thanhcongcu.php');
    ?>
   <div class="span9">
                    <div class="content">
                        <div class="module">
                            <div class="module-head">
                                <h3>Thông tin bài viết</h3>
                            </div>
                            <div class="module-body">
                                <section class="docs">
                                    <h2><?php echo $row1['ten_bv']; ?></h2>
                                    <h4>Ngày đăng: <span style="color:red;"><?php echo $row1['ngaydang']; ?></h4>
                                    
                                    <div style="text-align:center;"><img class="img-fluid rounded w-100 mb-4" style="width: 50%;" src="../admin/images/<?php echo $row1["anhbia"]; ?>" alt="Image"></div>
                                        
                                    <p class="lead"><?php echo $row1["noidung"]; ?></p>
                                        <h4 class="mb-4" style="color:#000;">Một số hình ảnh khác</h4>

                                        <div class="row pb-4 nguyenphudien"style="width:100%;">
                                        
                                            <div class="col-lg-6 mb-4" style="text-align: center;">
                                                
                                                <?php if($row1['hinh1']==""){
                                                    echo 'None';
                                                    }else{?>
                                                    <span><img style="width:200px; height:150px;" src="../admin/images/<?php echo $row1["hinh1"]; ?>" alt=""></span>
                                                <?php  } ?>
                                                &ensp;
                                                <?php if($row1['hinh2']==""){
                                                echo 'None';
                                                    }else{?>
                                                    <span><img style="width:200px; height:150px;" src="../admin/images/<?php echo $row1["hinh2"]; ?>" alt=""></span>
                                                <?php  } ?>
                                                &ensp;                 
                                                <?php if($row1['hinh3']==""){
                                                    echo 'None';
                                                    }else{?>
                                                    <span><img style="width:200px; height:150px;" src="../admin/images/<?php echo $row1["hinh3"]; ?>" alt=""></span>
                                                <?php  } ?>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    
                                </section>         
                                
                            </div>
                        </div>
                    </div>
                    <!--/.content-->
                </div>
            

    </div>
                                </div></div></div>


