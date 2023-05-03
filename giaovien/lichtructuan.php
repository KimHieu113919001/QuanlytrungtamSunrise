<?php 
    include("config.php");

    session_start();
    if(!isset($_SESSION['id_giaovien'])){
      header('Location:../login.php');
     }
    //Buổi sáng
    $sql_thu2s= "SELECT * FROM tructuan, giaovien WHERE id_tuan='$_GET[id_tuan]' AND id_buoi='1' AND id_thu='1' AND tructuan.id_giaovien=giaovien.id_giaovien"; 
    $res_thu2s= mysqli_query($connection,$sql_thu2s);

    $sql_thu3s= "SELECT * FROM tructuan, giaovien WHERE id_tuan='$_GET[id_tuan]' AND id_buoi='1' AND id_thu='2' AND tructuan.id_giaovien=giaovien.id_giaovien"; 
    $res_thu3s= mysqli_query($connection,$sql_thu3s);

    $sql_thu4s= "SELECT * FROM tructuan, giaovien WHERE id_tuan='$_GET[id_tuan]' AND id_buoi='1' AND id_thu='3' AND tructuan.id_giaovien=giaovien.id_giaovien"; 
    $res_thu4s= mysqli_query($connection,$sql_thu4s);

    $sql_thu5s= "SELECT * FROM tructuan, giaovien WHERE id_tuan='$_GET[id_tuan]' AND id_buoi='1' AND id_thu='4' AND tructuan.id_giaovien=giaovien.id_giaovien"; 
    $res_thu5s= mysqli_query($connection,$sql_thu5s);

    $sql_thu6s= "SELECT * FROM tructuan, giaovien WHERE id_tuan='$_GET[id_tuan]' AND id_buoi='1' AND id_thu='5' AND tructuan.id_giaovien=giaovien.id_giaovien"; 
    $res_thu6s= mysqli_query($connection,$sql_thu6s);

    $sql_thu7s= "SELECT * FROM tructuan, giaovien WHERE id_tuan='$_GET[id_tuan]' AND id_buoi='1' AND id_thu='6' AND tructuan.id_giaovien=giaovien.id_giaovien"; 
    $res_thu7s= mysqli_query($connection,$sql_thu7s);

    $sql_chunhats= "SELECT * FROM tructuan, giaovien WHERE id_tuan='$_GET[id_tuan]' AND id_buoi='1' AND id_thu='7' AND tructuan.id_giaovien=giaovien.id_giaovien"; 
    $res_chunhats= mysqli_query($connection,$sql_chunhats);

    //Buổi trưa
    $sql_thu2t= "SELECT * FROM tructuan, giaovien WHERE id_tuan='$_GET[id_tuan]' AND id_buoi='2' AND id_thu='1' AND tructuan.id_giaovien=giaovien.id_giaovien"; 
    $res_thu2t= mysqli_query($connection,$sql_thu2t);

    $sql_thu3t= "SELECT * FROM tructuan, giaovien WHERE id_tuan='$_GET[id_tuan]' AND id_buoi='2' AND id_thu='2' AND tructuan.id_giaovien=giaovien.id_giaovien"; 
    $res_thu3t= mysqli_query($connection,$sql_thu3t);

    $sql_thu4t= "SELECT * FROM tructuan, giaovien WHERE id_tuan='$_GET[id_tuan]' AND id_buoi='2' AND id_thu='3' AND tructuan.id_giaovien=giaovien.id_giaovien"; 
    $res_thu4t= mysqli_query($connection,$sql_thu4t);

    $sql_thu5t= "SELECT * FROM tructuan, giaovien WHERE id_tuan='$_GET[id_tuan]' AND id_buoi='2' AND id_thu='4' AND tructuan.id_giaovien=giaovien.id_giaovien"; 
    $res_thu5t= mysqli_query($connection,$sql_thu5t);

    $sql_thu6t= "SELECT * FROM tructuan, giaovien WHERE id_tuan='$_GET[id_tuan]' AND id_buoi='2' AND id_thu='5' AND tructuan.id_giaovien=giaovien.id_giaovien"; 
    $res_thu6t= mysqli_query($connection,$sql_thu6t);

    $sql_thu7t= "SELECT * FROM tructuan, giaovien WHERE id_tuan='$_GET[id_tuan]' AND id_buoi='2' AND id_thu='6' AND tructuan.id_giaovien=giaovien.id_giaovien"; 
    $res_thu7t= mysqli_query($connection,$sql_thu7t);

    $sql_chunhatt= "SELECT * FROM tructuan, giaovien WHERE id_tuan='$_GET[id_tuan]' AND id_buoi='2' AND id_thu='7' AND tructuan.id_giaovien=giaovien.id_giaovien"; 
    $res_chunhatt= mysqli_query($connection,$sql_chunhatt);

    //Buổi chiều
    $sql_thu2c= "SELECT * FROM tructuan, giaovien WHERE id_tuan='$_GET[id_tuan]' AND id_buoi='3' AND id_thu='1' AND tructuan.id_giaovien=giaovien.id_giaovien"; 
    $res_thu2c= mysqli_query($connection,$sql_thu2c);

    $sql_thu3c= "SELECT * FROM tructuan, giaovien WHERE id_tuan='$_GET[id_tuan]' AND id_buoi='3' AND id_thu='2' AND tructuan.id_giaovien=giaovien.id_giaovien"; 
    $res_thu3c= mysqli_query($connection,$sql_thu3c);

    $sql_thu4c= "SELECT * FROM tructuan, giaovien WHERE id_tuan='$_GET[id_tuan]' AND id_buoi='3' AND id_thu='3' AND tructuan.id_giaovien=giaovien.id_giaovien"; 
    $res_thu4c= mysqli_query($connection,$sql_thu4c);

    $sql_thu5c= "SELECT * FROM tructuan, giaovien WHERE id_tuan='$_GET[id_tuan]' AND id_buoi='3' AND id_thu='4' AND tructuan.id_giaovien=giaovien.id_giaovien"; 
    $res_thu5c= mysqli_query($connection,$sql_thu5c);

    $sql_thu6c= "SELECT * FROM tructuan, giaovien WHERE id_tuan='$_GET[id_tuan]' AND id_buoi='3' AND id_thu='5' AND tructuan.id_giaovien=giaovien.id_giaovien"; 
    $res_thu6c= mysqli_query($connection,$sql_thu6c);

    $sql_thu7c= "SELECT * FROM tructuan, giaovien WHERE id_tuan='$_GET[id_tuan]' AND id_buoi='3' AND id_thu='6' AND tructuan.id_giaovien=giaovien.id_giaovien"; 
    $res_thu7c= mysqli_query($connection,$sql_thu7c);

    $sql_chunhatc= "SELECT * FROM tructuan, giaovien WHERE id_tuan='$_GET[id_tuan]' AND id_buoi='3' AND id_thu='7' AND tructuan.id_giaovien=giaovien.id_giaovien"; 
    $res_chunhatc= mysqli_query($connection,$sql_chunhatc);
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

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../css/style.css" rel="stylesheet">

    <script  src="js/multiselect-dropdown.js"></script>
    
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
td{
    width: 10%;
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
                    <h3 class="display-4 text-white text-uppercase">Xếp lịch trực</h3>
                    <div class="d-inline-flex text-white">
                        <p class="m-0 text-uppercase"><a class="text-white" href="index_gv.php">Trang chủ</a></p>
                        <i class="fa fa-angle-double-right pt-1 px-3"></i>
                        <p class="m-0 text-uppercase">Xếp lịch trực</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid"> 
        <table class="table table-bordered table-striped table-responsive-stack" style="color:#000; background-color:#fff;" id="tableOne">

   <tr>
        <th></th>
        <th>Thứ 2</th>
        <th>Thứ 3</th>
        <th>Thứ 4</th>
        <th>Thứ 5</th>
        <th>Thứ 6</th>
        <th>Thứ 7</th>
        <th>Chủ nhật</th>
        <th>Tùy chọn</th>
    </tr>

    <tr>
    
        <th style="width:5%;">Buổi sáng</th>
        <form action="../giaovien/sualichtuan.php" method="POST" enctype="multipart/form-data"  >
            
            <td><?php if(mysqli_num_rows($res_thu2s)>0){ ?>
            <?php 
			while($row_thu2s=mysqli_fetch_assoc($res_thu2s)) {  
			?>
			<?php echo $row_thu2s["ten_vt"]; ?><br>
            <?php } }?>
            </td>


            <td><?php if(mysqli_num_rows($res_thu3s)>0){ ?>
            <?php 
			while($row_thu3s=mysqli_fetch_assoc($res_thu3s)) {  
			?>
			<?php echo $row_thu3s["ten_vt"]; ?><br>
            <?php } }?>
            </td>


            <td><?php if(mysqli_num_rows($res_thu4s)>0){ ?>
            <?php 
			while($row_thu4s=mysqli_fetch_assoc($res_thu4s)) {  
			?>
			<?php echo $row_thu4s["ten_vt"]; ?><br>
            <?php } }?>
            </td>


            <td><?php if(mysqli_num_rows($res_thu5s)>0){ ?>
            <?php 
			while($row_thu5s=mysqli_fetch_assoc($res_thu5s)) {  
			?>
			<?php echo $row_thu5s["ten_vt"]; ?><br>
            <?php } }?>
            </td>
        

            <td><?php if(mysqli_num_rows($res_thu6s)>0){ ?>
            <?php 
			while($row_thu6s=mysqli_fetch_assoc($res_thu6s)) {  
			?>
			<?php echo $row_thu6s["ten_vt"]; ?><br>
            <?php } }?>
            </td>
        

            <td><?php if(mysqli_num_rows($res_thu7s)>0){ ?>
            <?php 
			while($row_thu7s=mysqli_fetch_assoc($res_thu7s)) {  
			?>
			<?php echo $row_thu7s["ten_vt"]; ?><br>
            <?php } }?>
            </td>
       

            <td><?php if(mysqli_num_rows($res_chunhats)>0){ ?>
            <?php 
			while($row_chunhats=mysqli_fetch_assoc($res_chunhats)) {  
			?>
			<?php echo $row_chunhats["ten_vt"]; ?><br>
            <?php } }?>
            </td>
            <td><button type="submit" class="btn btn-success"  name="sualichsang">Sửa</button></td>
    </form>
    </tr>
    <tr>
        <th style="width:5%;">Buổi trưa</th>
        <td><?php if(mysqli_num_rows($res_thu2t)>0){ ?>
            <?php 
			while($row_thu2t=mysqli_fetch_assoc($res_thu2t)) {  
			?>
			<?php echo $row_thu2t["ten_vt"]; ?><br>
            <?php } }?>
            </td>


            <td><?php if(mysqli_num_rows($res_thu3t)>0){ ?>
            <?php 
			while($row_thu3t=mysqli_fetch_assoc($res_thu3t)) {  
			?>
			<?php echo $row_thu3t["ten_vt"]; ?><br>
            <?php } }?>
            </td>


            <td><?php if(mysqli_num_rows($res_thu4t)>0){ ?>
            <?php 
			while($row_thu4t=mysqli_fetch_assoc($res_thu4t)) {  
			?>
			<?php echo $row_thu4t["ten_vt"]; ?><br>
            <?php } }?>
            </td>


            <td><?php if(mysqli_num_rows($res_thu5t)>0){ ?>
            <?php 
			while($row_thu5t=mysqli_fetch_assoc($res_thu5t)) {  
			?>
			<?php echo $row_thu5t["ten_vt"]; ?><br>
            <?php } }?>
            </td>
        

            <td><?php if(mysqli_num_rows($res_thu6t)>0){ ?>
            <?php 
			while($row_thu6t=mysqli_fetch_assoc($res_thu6t)) {  
			?>
			<?php echo $row_thu6t["ten_vt"]; ?><br>
            <?php } }?>
            </td>
        

            <td><?php if(mysqli_num_rows($res_thu7t)>0){ ?>
            <?php 
			while($row_thu7t=mysqli_fetch_assoc($res_thu7t)) {  
			?>
			<?php echo $row_thu7t["ten_vt"]; ?><br>
            <?php } }?>
            </td>
       

            <td><?php if(mysqli_num_rows($res_chunhatt)>0){ ?>
            <?php 
			while($row_chunhatt=mysqli_fetch_assoc($res_chunhatt)) {  
			?>
			<?php echo $row_chunhatt["ten_vt"]; ?><br>
            <?php } }?>
            </td>
            <td><button type="submit" class="btn btn-success"  name="sualichtrua">Sửa</button></td>
    </tr>
    <tr>
        <th style="width:5%;">Buổi tối</th>
        <td><?php if(mysqli_num_rows($res_thu2c)>0){ ?>
            <?php 
			while($row_thu2c=mysqli_fetch_assoc($res_thu2c)) {  
			?>
			<?php echo $row_thu2c["ten_vt"]; ?><br>
            <?php } }?>
            </td>


            <td><?php if(mysqli_num_rows($res_thu3c)>0){ ?>
            <?php 
			while($row_thu3c=mysqli_fetch_assoc($res_thu3c)) {  
			?>
			<?php echo $row_thu3c["ten_vt"]; ?><br>
            <?php } }?>
            </td>


            <td><?php if(mysqli_num_rows($res_thu4c)>0){ ?>
            <?php 
			while($row_thu4c=mysqli_fetch_assoc($res_thu4c)) {  
			?>
			<?php echo $row_thu4c["ten_vt"]; ?><br>
            <?php } }?>
            </td>


            <td><?php if(mysqli_num_rows($res_thu5c)>0){ ?>
            <?php 
			while($row_thu5c=mysqli_fetch_assoc($res_thu5c)) {  
			?>
			<?php echo $row_thu5c["ten_vt"]; ?><br>
            <?php } }?>
            </td>
        

            <td><?php if(mysqli_num_rows($res_thu6c)>0){ ?>
            <?php 
			while($row_thu6c=mysqli_fetch_assoc($res_thu6c)) {  
			?>
			<?php echo $row_thu6c["ten_vt"]; ?><br>
            <?php } }?>
            </td>
        

            <td><?php if(mysqli_num_rows($res_thu7c)>0){ ?>
            <?php 
			while($row_thu7c=mysqli_fetch_assoc($res_thu7c)) {  
			?>
			<?php echo $row_thu7c["ten_vt"]; ?><br>
            <?php } }?>
            </td>
       

            <td><?php if(mysqli_num_rows($res_chunhatc)>0){ ?>
            <?php 
			while($row_chunhatc=mysqli_fetch_assoc($res_chunhatc)) {  
			?>
			<?php echo $row_chunhatc["ten_vt"]; ?><br>
            <?php } }?>
            </td>
            <td><button type="submit" class="btn btn-success"  name="sualichtoi">Sửa</button></td>
    </tr>
   </table>
                    </div>
   <?php
    include("giaodien/footer.php");
     ?>
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


<!-- JavaScript Libraries -->
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
