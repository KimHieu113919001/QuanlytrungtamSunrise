<?php
    include("config.php");;
    
    session_start();
	
    $id_thongbao= $_GET['id_thongbao']; 

    $sql= "SELECT * FROM `thongbao` WHERE id_thongbao='$id_thongbao' "; 
    //echo $sql;
    $res= mysqli_query($connection,$sql);
    $row= mysqli_fetch_assoc($res);

    $sql_tb="SELECT * FROM `thongbao` WHERE id_thongbao != '$id_thongbao'"; 
    $res_tb= mysqli_query($connection,$sql_tb);
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
body {
	background-image: url(" img/registration.jpg");
  height: 500px; 
  background-position: center; 
  background-repeat: no-repeat; 
  background-size: cover;
  height: 800px;
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


  <?php
  include("giaodien/topbar.php");
  include("giaodien/header.php");
  ?>

<body>  
  <br>
  <div class="container-fluid"> 
      <div class="container "> 
       <div class="row ">
         <div class="col-md-3"></div>
      <div class="col-md-6"> 
      <div class="bg-secondary rounded p-5">
          
         
          <form class="form-horizontal" action="" method="post"> 

          <div class="hinh">
              <h1 style="text-align: center; background-color:#F2F1F8; color:#000000;">Thông báo</h1>      
          </div> 
          
            <div class="input-group">
            <h4 style="color:red;"><?php echo $row["tieude"]; ?><h4>
            </div>
            <br>
            <div class="input-group">
            Ngày đăng:&ensp;<h5 style="color:red;"><?php echo $row["ngaydang"]; ?><h5>
            </div>
            <br>
            <span class="input-group-addon">Nội dung:</span>
              <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <h5 style="color:#000;"><?php echo $row["noidung_tb"]; ?><h5>
              </div>
                          <br>
               
                <br>
                <p>Các thông báo khác</p>
              <?php 
                while($row_tb=mysqli_fetch_assoc($res_tb)){ ?>
                    <div><i class="fas fa-angle-double-right"></i>&ensp;<a style="font-size: 20px; color:blue;" href="thongbao.php?id_thongbao=<?php echo $row_tb['id_thongbao']?>"><?php echo $row_tb['tieude']?></a></div>
                <?php } 
              
              ?> 
            </form>
      </div> 
    </div>
    <div class="col-md-3"></div>
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
<script>
	      CKEDITOR.replace('thongtinlienhe');
        CKEDITOR.replace('tomtat');
        CKEDITOR.replace('noidung_tb');
    </script>
</body>
</html>