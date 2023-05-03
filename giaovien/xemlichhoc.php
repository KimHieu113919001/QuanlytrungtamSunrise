<?php
    include("config.php");
    session_start();
	if(!isset($_SESSION['id_giaovien'])){
        header('Location:../login.php');
       }

    $id_giaovien=$_SESSION['id_giaovien'];
    
    if(isset($_POST['lichhoc'])){
        $id_tuan=$_POST['id_tuan'];
        header('Location: lichhoc.php?id_tuan='.$id_tuan);
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

<div class="container-fluid page-header" style="margin-bottom: 40px;">
            <div class="container">
                <div class="d-flex flex-column justify-content-center" style="min-height: 250px">
                    <h3 class="display-4 text-white text-uppercase">Xem lịch học</h3>
                    <div class="d-inline-flex text-white">
                        <p class="m-0 text-uppercase"><a class="text-white" href="index_gv.php">Trang chủ</a></p>
                        <i class="fa fa-angle-double-right pt-1 px-3"></i>
                        <p class="m-0 text-uppercase">Xem lịch học</p>
                    </div>
                </div>
            </div>
        </div>

<div class="container-fluid"> 
  <div class="container">
        <form action="" method="POST" enctype="multipart/form-data"  class="form-horizontal">
        
            <select class="form-control namhoc" id="id_namhoc" name="id_namhoc" onchange="myFunction()" >
                    <option value="0">--Chọn năm--</option>  
                      <?php 
                      $sql_t="SELECT * FROM namhoc ORDER BY id_namhoc ASC";
                      $query_t= mysqli_query($connection,$sql_t);
                      while($row_t= mysqli_fetch_assoc($query_t)){
                       
                        ?>
                        <option value="<?php echo $row_t['id_namhoc']?>"><?php echo $row_t['nam']?></option>
                        <?php
                      }
                      ?>
                    </select>
                    <br>
            <select class="form-control tuan" id="id_tuan" name="id_tuan" onchange="myFunction()" required>
                    
                    </select>
                    <br>
                  <div style="text-align:center;">
                    <button type="submit" class="btn btn-success" name="lichhoc">Chọn</button>
                  </div>
<br>
            </form>
            <br>
            <div class="test"></div>

            <br>
            </div>
            </div>

</body>

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
  $(document).ready(function(){
    $(".namhoc").change(function(){
        var id = $(".namhoc").val();
        $.post("data.php",{id:id}, function(data){
            $(".tuan").html(data);
        })
    })
})
</script>
</body>
<?php
    include("giaodien/footer.php");
     ?>
</html>