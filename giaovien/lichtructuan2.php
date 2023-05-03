<?php 
   include("config.php");
   $id_tuan = $_GET['id_tuan'];
   session_start();
   if(!isset($_SESSION['id_giaovien'])){
     header('Location:../login.php');
    }
    $sqltt= "SELECT * FROM tuan WHERE id_tuan='$id_tuan'"; 
    $restt= mysqli_query($connection,$sqltt);
    $rowtt= mysqli_fetch_assoc($restt);
    //Buổi sáng
    $sql_thu2s= "SELECT * FROM tructuan, giaovien WHERE id_tuan=$id_tuan AND id_buoi='1' AND id_thu='1' AND tructuan.id_giaovien=giaovien.id_giaovien"; 
    $res_thu2s= mysqli_query($connection,$sql_thu2s);

    $sql_thu3s= "SELECT * FROM tructuan, giaovien WHERE id_tuan=$id_tuan AND id_buoi='1' AND id_thu='2' AND tructuan.id_giaovien=giaovien.id_giaovien"; 
    $res_thu3s= mysqli_query($connection,$sql_thu3s);

    $sql_thu4s= "SELECT * FROM tructuan, giaovien WHERE id_tuan=$id_tuan AND id_buoi='1' AND id_thu='3' AND tructuan.id_giaovien=giaovien.id_giaovien"; 
    $res_thu4s= mysqli_query($connection,$sql_thu4s);

    $sql_thu5s= "SELECT * FROM tructuan, giaovien WHERE id_tuan=$id_tuan AND id_buoi='1' AND id_thu='4' AND tructuan.id_giaovien=giaovien.id_giaovien"; 
    $res_thu5s= mysqli_query($connection,$sql_thu5s);

    $sql_thu6s= "SELECT * FROM tructuan, giaovien WHERE id_tuan=$id_tuan AND id_buoi='1' AND id_thu='5' AND tructuan.id_giaovien=giaovien.id_giaovien"; 
    $res_thu6s= mysqli_query($connection,$sql_thu6s);

    $sql_thu7s= "SELECT * FROM tructuan, giaovien WHERE id_tuan=$id_tuan AND id_buoi='1' AND id_thu='6' AND tructuan.id_giaovien=giaovien.id_giaovien"; 
    $res_thu7s= mysqli_query($connection,$sql_thu7s);

    $sql_chunhats= "SELECT * FROM tructuan, giaovien WHERE id_tuan=$id_tuan AND id_buoi='1' AND id_thu='7' AND tructuan.id_giaovien=giaovien.id_giaovien"; 
    $res_chunhats= mysqli_query($connection,$sql_chunhats);

    //Buổi trưa 13h00 - 17h30
    $sql_thu2t1= "SELECT * FROM tructuan, giaovien WHERE id_tuan=$id_tuan AND id_buoi='2' AND id_thu='1' AND tructuan.id_giaovien=giaovien.id_giaovien"; 
    $res_thu2t1= mysqli_query($connection,$sql_thu2t1);

    $sql_thu3t1= "SELECT * FROM tructuan, giaovien WHERE id_tuan=$id_tuan AND id_buoi='2' AND id_thu='2' AND tructuan.id_giaovien=giaovien.id_giaovien"; 
    $res_thu3t1= mysqli_query($connection,$sql_thu3t1);

    $sql_thu4t1= "SELECT * FROM tructuan, giaovien WHERE id_tuan=$id_tuan AND id_buoi='2' AND id_thu='3' AND tructuan.id_giaovien=giaovien.id_giaovien"; 
    $res_thu4t1= mysqli_query($connection,$sql_thu4t1);

    $sql_thu5t1= "SELECT * FROM tructuan, giaovien WHERE id_tuan=$id_tuan AND id_buoi='2' AND id_thu='4' AND tructuan.id_giaovien=giaovien.id_giaovien"; 
    $res_thu5t1= mysqli_query($connection,$sql_thu5t1);

    $sql_thu6t1= "SELECT * FROM tructuan, giaovien WHERE id_tuan=$id_tuan AND id_buoi='2' AND id_thu='5' AND tructuan.id_giaovien=giaovien.id_giaovien"; 
    $res_thu6t1= mysqli_query($connection,$sql_thu6t1);

    $sql_thu7t1= "SELECT * FROM tructuan, giaovien WHERE id_tuan=$id_tuan AND id_buoi='2' AND id_thu='6' AND tructuan.id_giaovien=giaovien.id_giaovien"; 
    $res_thu7t1= mysqli_query($connection,$sql_thu7t1);

    $sql_chunhatt1= "SELECT * FROM tructuan, giaovien WHERE id_tuan=$id_tuan AND id_buoi='2' AND id_thu='7' AND tructuan.id_giaovien=giaovien.id_giaovien"; 
    $res_chunhatt1= mysqli_query($connection,$sql_chunhatt1);

    //Buổi trưa 13h30 - 17h30 
    $sql_thu2t2= "SELECT * FROM tructuan, giaovien WHERE id_tuan=$id_tuan AND id_buoi='3' AND id_thu='1' AND tructuan.id_giaovien=giaovien.id_giaovien"; 
    $res_thu2t2= mysqli_query($connection,$sql_thu2t2);

    $sql_thu3t2= "SELECT * FROM tructuan, giaovien WHERE id_tuan=$id_tuan AND id_buoi='3' AND id_thu='2' AND tructuan.id_giaovien=giaovien.id_giaovien"; 
    $res_thu3t2= mysqli_query($connection,$sql_thu3t2);

    $sql_thu4t2= "SELECT * FROM tructuan, giaovien WHERE id_tuan=$id_tuan AND id_buoi='3' AND id_thu='3' AND tructuan.id_giaovien=giaovien.id_giaovien"; 
    $res_thu4t2= mysqli_query($connection,$sql_thu4t2);

    $sql_thu5t2= "SELECT * FROM tructuan, giaovien WHERE id_tuan=$id_tuan AND id_buoi='3' AND id_thu='4' AND tructuan.id_giaovien=giaovien.id_giaovien"; 
    $res_thu5t2= mysqli_query($connection,$sql_thu5t2);

    $sql_thu6t2= "SELECT * FROM tructuan, giaovien WHERE id_tuan=$id_tuan AND id_buoi='3' AND id_thu='5' AND tructuan.id_giaovien=giaovien.id_giaovien"; 
    $res_thu6t2= mysqli_query($connection,$sql_thu6t2);

    $sql_thu7t2= "SELECT * FROM tructuan, giaovien WHERE id_tuan=$id_tuan AND id_buoi='3' AND id_thu='6' AND tructuan.id_giaovien=giaovien.id_giaovien"; 
    $res_thu7t2= mysqli_query($connection,$sql_thu7t2);

    $sql_chunhatt2= "SELECT * FROM tructuan, giaovien WHERE id_tuan=$id_tuan AND id_buoi='3' AND id_thu='7' AND tructuan.id_giaovien=giaovien.id_giaovien"; 
    $res_chunhatt2= mysqli_query($connection,$sql_chunhatt2);

    //Buổi chiều
    $sql_thu2c= "SELECT * FROM tructuan, giaovien WHERE id_tuan=$id_tuan AND id_buoi='4' AND id_thu='1' AND tructuan.id_giaovien=giaovien.id_giaovien"; 
    $res_thu2c= mysqli_query($connection,$sql_thu2c);

    $sql_thu3c= "SELECT * FROM tructuan, giaovien WHERE id_tuan=$id_tuan AND id_buoi='4' AND id_thu='2' AND tructuan.id_giaovien=giaovien.id_giaovien"; 
    $res_thu3c= mysqli_query($connection,$sql_thu3c);

    $sql_thu4c= "SELECT * FROM tructuan, giaovien WHERE id_tuan=$id_tuan AND id_buoi='4' AND id_thu='3' AND tructuan.id_giaovien=giaovien.id_giaovien"; 
    $res_thu4c= mysqli_query($connection,$sql_thu4c);

    $sql_thu5c= "SELECT * FROM tructuan, giaovien WHERE id_tuan=$id_tuan AND id_buoi='4' AND id_thu='4' AND tructuan.id_giaovien=giaovien.id_giaovien"; 
    $res_thu5c= mysqli_query($connection,$sql_thu5c);

    $sql_thu6c= "SELECT * FROM tructuan, giaovien WHERE id_tuan=$id_tuan AND id_buoi='4' AND id_thu='5' AND tructuan.id_giaovien=giaovien.id_giaovien"; 
    $res_thu6c= mysqli_query($connection,$sql_thu6c);

    $sql_thu7c= "SELECT * FROM tructuan, giaovien WHERE id_tuan=$id_tuan AND id_buoi='4' AND id_thu='6' AND tructuan.id_giaovien=giaovien.id_giaovien"; 
    $res_thu7c= mysqli_query($connection,$sql_thu7c);

    $sql_chunhatc= "SELECT * FROM tructuan, giaovien WHERE id_tuan=$id_tuan AND id_buoi='4' AND id_thu='7' AND tructuan.id_giaovien=giaovien.id_giaovien"; 
    $res_chunhatc= mysqli_query($connection,$sql_chunhatc);


    $sql_ngay="SELECT * FROM tuan WHERE id_tuan='$id_tuan'";
    $res_ngay= mysqli_query($connection,$sql_ngay);
    $row_ngay=mysqli_fetch_array($res_ngay);
    $T2=$row_ngay['ngaybatdau'];

    $T3 = strtotime ( '+1 day' , strtotime ($T2) );
    $T3 = date ( 'Y-m-d' , $T3 );

    $T4 = strtotime ( '+1 day' , strtotime ($T3) );
    $T4 = date ( 'Y-m-d' , $T4 );

    $T5 = strtotime ( '+1 day' , strtotime ($T4) );
    $T5 = date ( 'Y-m-d' , $T5 );

    $T6 = strtotime ( '+1 day' , strtotime ($T5) );
    $T6 = date ( 'Y-m-d' , $T6 );

    $T7 = strtotime ( '+1 day' , strtotime ($T6) );
    $T7 = date ( 'Y-m-d' , $T7 );

    $CN = strtotime ( '+1 day' , strtotime ($T7) );
    $CN = date ( 'Y-m-d' , $CN );
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
        <!-- Sweetalert -->
        <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
      <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
      <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

      
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
th{
  text-align:center;
}
td{
  background-color:white;
}
</style>
<body>
<?php if(isset($_SESSION['id_giaovien'])==true) { ?>
    <?php
  include("giaodien/topbar.php");
  include("giaodien_gv/header.php");
  ?>    
<?php } ?>
<div class="container-fluid page-header" style="margin-bottom: 40px;">
            <div class="container">
                <div class="d-flex flex-column justify-content-center" style="min-height: 250px">
                    <h3 class="display-4 text-white text-uppercase">Xem lịch trực</h3>
                    <div class="d-inline-flex text-white">
                        <p class="m-0 text-uppercase"><a class="text-white" href="index_gv.php">Trang chủ</a></p>
                        <i class="fa fa-angle-double-right pt-1 px-3"></i>
                        <p class="m-0 text-uppercase">Xem lịch trực</p>
                    </div>
                </div>
            </div>
        </div>
<div class="container-fluid ">
        <div class="container ">
                <div class="col-lg-9 container">
                    <div>
                        <h3 style="color:#000;text-align:center;" ><?php echo $rowtt['ten_tuan']; ?>
                            [Từ ngày 
                            <?php    
                                 $odate = $rowtt['ngaybatdau'];$newDate = date("d/m/Y", strtotime($odate));echo $newDate."\n";
                            ?> 
                            đến ngày 
                            <?php    
                                $odate = $CN;$newDate = date("d/m/Y", strtotime($odate)); echo $newDate;
                            ?>]</h3>
                    </div>
                </div> 
        </div>
    </div>

            <br>


<table class="table table-bordered table-striped table-responsive-stack" style="color:#000; background-color:#fff;" id="tableOne">

   <tr>
        <th style="width:5%;"></th>
        <th style="width:5%;">Giờ</th>
        <th style="width:11.8%;">Thứ 2<br><?php $odate = $T2;$newDate = date("d/m/Y", strtotime($odate));echo $newDate;?></th>
        <th style="width:11.8%;">Thứ 3<br><?php $odate = $T3;$newDate = date("d/m/Y", strtotime($odate));echo $newDate;?></th>
        <th style="width:11.8%;">Thứ 4<br><?php $odate = $T4;$newDate = date("d/m/Y", strtotime($odate));echo $newDate;?></th>
        <th style="width:11.8%;">Thứ 5<br><?php $odate = $T5;$newDate = date("d/m/Y", strtotime($odate));echo $newDate;?></th>
        <th style="width:11.8%;">Thứ 6<br><?php $odate = $T6;$newDate = date("d/m/Y", strtotime($odate));echo $newDate;?></th>
        <th style="width:11.8%; background-color:#ff6666;">Thứ 7<br><?php $odate = $T7;$newDate = date("d/m/Y", strtotime($odate));echo $newDate;?></th>
        <th style="width:11.8%; background-color:#ff6666;">Chủ nhật<br><?php $odate = $CN;$newDate = date("d/m/Y", strtotime($odate));echo $newDate;?></th>
        <th style="background-color:#cc9900;">Số giờ</th>
    </tr>
    <tr>
        <th style=" background-color:#80bfff; text-align:center;">Ca 1</th>
        <th style="width:5%;">7h00-11h00</th>
        <form action="" method="POST" enctype="multipart/form-data"  >
            
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
            <td>4 giờ</td>
    </form>
    </tr>
    <tr>
        <th style=" background-color:#ffff80; text-align:center;" rowspan="2" >Ca 2</th>
        <th style="width:5%;">13h00-17h30</th>
        <td><?php if(mysqli_num_rows($res_thu2t1)>0){ ?>
            <?php 
			while($row_thu2t1=mysqli_fetch_assoc($res_thu2t1)) {  
			?>
			<?php echo $row_thu2t1["ten_vt"]; ?><br>
            <?php } }?>
            </td>


            <td><?php if(mysqli_num_rows($res_thu3t1)>0){ ?>
            <?php 
			while($row_thu3t1=mysqli_fetch_assoc($res_thu3t1)) {  
			?>
			<?php echo $row_thu3t1["ten_vt"]; ?><br>
            <?php } }?>
            </td>


            <td><?php if(mysqli_num_rows($res_thu4t1)>0){ ?>
            <?php 
			while($row_thu4t1=mysqli_fetch_assoc($res_thu4t1)) {  
			?>
			<?php echo $row_thu4t1["ten_vt"]; ?><br>
            <?php } }?>
            </td>


            <td><?php if(mysqli_num_rows($res_thu5t1)>0){ ?>
            <?php 
			while($row_thu5t1=mysqli_fetch_assoc($res_thu5t1)) {  
			?>
			<?php echo $row_thu5t1["ten_vt"]; ?><br>
            <?php } }?>
            </td>
        

            <td><?php if(mysqli_num_rows($res_thu6t1)>0){ ?>
            <?php 
			while($row_thu6t1=mysqli_fetch_assoc($res_thu6t1)) {  
			?>
			<?php echo $row_thu6t1["ten_vt"]; ?><br>
            <?php } }?>
            </td>
        

            <td><?php if(mysqli_num_rows($res_thu7t1)>0){ ?>
            <?php 
			while($row_thu7t1=mysqli_fetch_assoc($res_thu7t1)) {  
			?>
			<?php echo $row_thu7t1["ten_vt"]; ?><br>
            <?php } }?>
            </td>
       

            <td><?php if(mysqli_num_rows($res_chunhatt1)>0){ ?>
            <?php 
			while($row_chunhatt1=mysqli_fetch_assoc($res_chunhatt1)) {  
			?>
			<?php echo $row_chunhatt1["ten_vt"]; ?><br>
            <?php } }?>
            </td>
            <td>4.5 giờ</td>
    </tr>


    <tr>
    <th style="width:5%;">13h30-17h30</th>
    <td><?php if(mysqli_num_rows($res_thu2t2)>0){ ?>
            <?php 
			while($row_thu2t2=mysqli_fetch_assoc($res_thu2t2)) {  
			?>
			<?php echo $row_thu2t2["ten_vt"]; ?><br>
            <?php } }?>
            </td>


            <td><?php if(mysqli_num_rows($res_thu3t2)>0){ ?>
            <?php 
			while($row_thu3t2=mysqli_fetch_assoc($res_thu3t2)) {  
			?>
			<?php echo $row_thu3t2["ten_vt"]; ?><br>
            <?php } }?>
            </td>


            <td><?php if(mysqli_num_rows($res_thu4t2)>0){ ?>
            <?php 
			while($row_thu4t2=mysqli_fetch_assoc($res_thu4t2)) {  
			?>
			<?php echo $row_thu4t2["ten_vt"]; ?><br>
            <?php } }?>
            </td>


            <td><?php if(mysqli_num_rows($res_thu5t2)>0){ ?>
            <?php 
			while($row_thu5t2=mysqli_fetch_assoc($res_thu5t2)) {  
			?>
			<?php echo $row_thu5t2["ten_vt"]; ?><br>
            <?php } }?>
            </td>
        

            <td><?php if(mysqli_num_rows($res_thu6t2)>0){ ?>
            <?php 
			while($row_thu6t2=mysqli_fetch_assoc($res_thu6t2)) {  
			?>
			<?php echo $row_thu6t2["ten_vt"]; ?><br>
            <?php } }?>
            </td>
        

            <td><?php if(mysqli_num_rows($res_thu7t2)>0){ ?>
            <?php 
			while($row_thu7t2=mysqli_fetch_assoc($res_thu7t2)) {  
			?>
			<?php echo $row_thu7t2["ten_vt"]; ?><br>
            <?php } }?>
            </td>
       

            <td><?php if(mysqli_num_rows($res_chunhatt2)>0){ ?>
            <?php 
			while($row_chunhatt2=mysqli_fetch_assoc($res_chunhatt2)) {  
			?>
			<?php echo $row_chunhatt2["ten_vt"]; ?><br>
            <?php } }?>
            </td>
            <td>4 giờ</td>

    </tr>

    <tr>
        <th style=" background-color:#80ff80; text-align:center;">Ca 3</th>
        <th style="width:5%;">17h30-21h00</th>
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
            <td>3.5 giờ</td>

    </tr>
   </table>
  <br>
   <div  style="text-align:center;background-color:#e6005c; color:#fff;"><h4>Bảng tổng số giờ trực của từng giáo viên</h4></div>
   <table class="table table-bordered table-striped table-responsive-stack" style="color:#000; background-color:#fff;" id="tableOne">
   <tr> 
      <th style="width:10%;background-color:#b3e6ff">Giáo viên trực</th>
      <th style="width:11.8%;">Thứ 2<br><?php $odate = $T2;$newDate = date("d/m/Y", strtotime($odate));echo $newDate;?></th>
      <th style="width:11.8%;">Thứ 3<br><?php $odate = $T3;$newDate = date("d/m/Y", strtotime($odate));echo $newDate;?></th>
      <th style="width:11.8%;">Thứ 4<br><?php $odate = $T4;$newDate = date("d/m/Y", strtotime($odate));echo $newDate;?></th>
      <th style="width:11.8%;">Thứ 5<br><?php $odate = $T5;$newDate = date("d/m/Y", strtotime($odate));echo $newDate;?></th>
      <th style="width:11.8%;">Thứ 6<br><?php $odate = $T6;$newDate = date("d/m/Y", strtotime($odate));echo $newDate;?></th>
      <th style="width:11.8%;background-color:#ff6666;">Thứ 7<br><?php $odate = $T7;$newDate = date("d/m/Y", strtotime($odate));echo $newDate;?></th>
      <th style="width:11.8%;background-color:#ff6666;">Chủ nhật<br><?php $odate =$CN;$newDate = date("d/m/Y", strtotime($odate));echo $newDate;?></th>
      <th style="width:11.8%;background-color:#cc9900;">Tổng Giờ/Tuần</th>
   </tr>
                    <?php 
                      $sql_gv="SELECT * FROM giaovien WHERE gv_truc ='1' ORDER BY id_giaovien ASC";
                      $query_gv= mysqli_query($connection,$sql_gv);
                      while($row_gv=mysqli_fetch_assoc($query_gv)) {  
                      ?>
                      <tr style="width: 15%;">
                      <?php 
                        //Thứ 2
                        $sql1 ="SELECT * FROM tructuan WHERE id_tuan = $id_tuan AND id_thu = '1' AND id_giaovien = '$row_gv[id_giaovien]'  AND id_buoi = '1'";
                        $res_dem1 = mysqli_query($connection,$sql1);
                        $row_dem1 = mysqli_fetch_assoc($res_dem1);
                        if($row_dem1 == null){
                          $row_dem1['so_gio'] = 0;
                          }
                        $sql2 ="SELECT * FROM tructuan WHERE id_tuan = $id_tuan AND id_thu = '1' AND id_giaovien = '$row_gv[id_giaovien]' AND id_buoi = '2'";
                        $res_dem2= mysqli_query($connection,$sql2);
                        $row_dem2 = mysqli_fetch_assoc($res_dem2);
                        if($row_dem2 == null){
                        $row_dem2['so_gio'] = 0;
                        }
                        $sql3 ="SELECT * FROM tructuan WHERE id_tuan = $id_tuan AND id_thu = '1' AND id_giaovien = '$row_gv[id_giaovien]' AND id_buoi = '3'";
                        $res_dem3= mysqli_query($connection,$sql3);
                        $row_dem3 = mysqli_fetch_assoc($res_dem3);
                        if($row_dem3 == null){
                          $row_dem3['so_gio'] = 0;
                          }

                        $sql4 ="SELECT * FROM tructuan WHERE id_tuan = $id_tuan AND id_thu = '1' AND id_giaovien = '$row_gv[id_giaovien]' AND id_buoi = '4'";
                        $res_dem4= mysqli_query($connection,$sql4);
                        $row_dem4 = mysqli_fetch_assoc($res_dem4);
                        if($row_dem4 == null){
                          $row_dem4['so_gio'] = 0;
                          }
                        $tong_thu2= $row_dem1['so_gio'] + $row_dem2['so_gio'] + $row_dem3['so_gio'] + $row_dem4['so_gio'];

                        //Thứ 3
                        $sql1 ="SELECT * FROM tructuan WHERE id_tuan = $id_tuan AND id_thu = '2' AND id_giaovien = '$row_gv[id_giaovien]'  AND id_buoi = '1'";
                        $res_dem1 = mysqli_query($connection,$sql1);
                        $row_dem1 = mysqli_fetch_assoc($res_dem1);
                        if($row_dem1 == null){
                          $row_dem1['so_gio'] = 0;
                          }
                        $sql2 ="SELECT * FROM tructuan WHERE id_tuan = $id_tuan AND id_thu = '2' AND id_giaovien = '$row_gv[id_giaovien]' AND id_buoi = '2'";
                        $res_dem2= mysqli_query($connection,$sql2);
                        $row_dem2 = mysqli_fetch_assoc($res_dem2);
                        if($row_dem2 == null){
                        $row_dem2['so_gio'] = 0;
                        }
                        $sql3 ="SELECT * FROM tructuan WHERE id_tuan = $id_tuan AND id_thu = '2' AND id_giaovien = '$row_gv[id_giaovien]' AND id_buoi = '3'";
                        $res_dem3= mysqli_query($connection,$sql3);
                        $row_dem3 = mysqli_fetch_assoc($res_dem3);
                        if($row_dem3 == null){
                          $row_dem3['so_gio'] = 0;
                          }

                        $sql4 ="SELECT * FROM tructuan WHERE id_tuan = $id_tuan AND id_thu = '2' AND id_giaovien = '$row_gv[id_giaovien]' AND id_buoi = '4'";
                        $res_dem4= mysqli_query($connection,$sql4);
                        $row_dem4 = mysqli_fetch_assoc($res_dem4);
                        if($row_dem4 == null){
                          $row_dem4['so_gio'] = 0;
                          }
                        $tong_thu3= $row_dem1['so_gio'] + $row_dem2['so_gio'] + $row_dem3['so_gio'] + $row_dem4['so_gio'];

                        //Thứ 4
                        $sql1 ="SELECT * FROM tructuan WHERE id_tuan = $id_tuan AND id_thu = '3' AND id_giaovien = '$row_gv[id_giaovien]'  AND id_buoi = '1'";
                        $res_dem1 = mysqli_query($connection,$sql1);
                        $row_dem1 = mysqli_fetch_assoc($res_dem1);
                        if($row_dem1 == null){
                          $row_dem1['so_gio'] = 0;
                          }
                        $sql2 ="SELECT * FROM tructuan WHERE id_tuan = $id_tuan AND id_thu = '3' AND id_giaovien = '$row_gv[id_giaovien]' AND id_buoi = '2'";
                        $res_dem2= mysqli_query($connection,$sql2);
                        $row_dem2 = mysqli_fetch_assoc($res_dem2);
                        if($row_dem2 == null){
                        $row_dem2['so_gio'] = 0;
                        }
                        $sql3 ="SELECT * FROM tructuan WHERE id_tuan = $id_tuan AND id_thu = '3' AND id_giaovien = '$row_gv[id_giaovien]' AND id_buoi = '3'";
                        $res_dem3= mysqli_query($connection,$sql3);
                        $row_dem3 = mysqli_fetch_assoc($res_dem3);
                        if($row_dem3 == null){
                          $row_dem3['so_gio'] = 0;
                          }

                        $sql4 ="SELECT * FROM tructuan WHERE id_tuan = $id_tuan AND id_thu = '3' AND id_giaovien = '$row_gv[id_giaovien]' AND id_buoi = '4'";
                        $res_dem4= mysqli_query($connection,$sql4);
                        $row_dem4 = mysqli_fetch_assoc($res_dem4);
                        if($row_dem4 == null){
                          $row_dem4['so_gio'] = 0;
                          }
                        $tong_thu4= $row_dem1['so_gio'] + $row_dem2['so_gio'] + $row_dem3['so_gio'] + $row_dem4['so_gio'];

                        //Thứ 5
                        $sql1 ="SELECT * FROM tructuan WHERE id_tuan = $id_tuan AND id_thu = '4' AND id_giaovien = '$row_gv[id_giaovien]'  AND id_buoi = '1'";
                        $res_dem1 = mysqli_query($connection,$sql1);
                        $row_dem1 = mysqli_fetch_assoc($res_dem1);
                        if($row_dem1 == null){
                          $row_dem1['so_gio'] = 0;
                          }
                        $sql2 ="SELECT * FROM tructuan WHERE id_tuan = $id_tuan AND id_thu = '4' AND id_giaovien = '$row_gv[id_giaovien]' AND id_buoi = '2'";
                        $res_dem2= mysqli_query($connection,$sql2);
                        $row_dem2 = mysqli_fetch_assoc($res_dem2);
                        if($row_dem2 == null){
                        $row_dem2['so_gio'] = 0;
                        }
                        $sql3 ="SELECT * FROM tructuan WHERE id_tuan = $id_tuan AND id_thu = '4' AND id_giaovien = '$row_gv[id_giaovien]' AND id_buoi = '3'";
                        $res_dem3= mysqli_query($connection,$sql3);
                        $row_dem3 = mysqli_fetch_assoc($res_dem3);
                        if($row_dem3 == null){
                          $row_dem3['so_gio'] = 0;
                          }

                        $sql4 ="SELECT * FROM tructuan WHERE id_tuan = $id_tuan AND id_thu = '4' AND id_giaovien = '$row_gv[id_giaovien]' AND id_buoi = '4'";
                        $res_dem4= mysqli_query($connection,$sql4);
                        $row_dem4 = mysqli_fetch_assoc($res_dem4);
                        if($row_dem4 == null){
                          $row_dem4['so_gio'] = 0;
                          }
                        $tong_thu5= $row_dem1['so_gio'] + $row_dem2['so_gio'] + $row_dem3['so_gio'] + $row_dem4['so_gio'];

                        //Thứ 6
                        $sql1 ="SELECT * FROM tructuan WHERE id_tuan = $id_tuan AND id_thu = '5' AND id_giaovien = '$row_gv[id_giaovien]'  AND id_buoi = '1'";
                        $res_dem1 = mysqli_query($connection,$sql1);
                        $row_dem1 = mysqli_fetch_assoc($res_dem1);
                        if($row_dem1 == null){
                          $row_dem1['so_gio'] = 0;
                          }
                        $sql2 ="SELECT * FROM tructuan WHERE id_tuan = $id_tuan AND id_thu = '5' AND id_giaovien = '$row_gv[id_giaovien]' AND id_buoi = '2'";
                        $res_dem2= mysqli_query($connection,$sql2);
                        $row_dem2 = mysqli_fetch_assoc($res_dem2);
                        if($row_dem2 == null){
                        $row_dem2['so_gio'] = 0;
                        }
                        $sql3 ="SELECT * FROM tructuan WHERE id_tuan = $id_tuan AND id_thu = '5' AND id_giaovien = '$row_gv[id_giaovien]' AND id_buoi = '3'";
                        $res_dem3= mysqli_query($connection,$sql3);
                        $row_dem3 = mysqli_fetch_assoc($res_dem3);
                        if($row_dem3 == null){
                          $row_dem3['so_gio'] = 0;
                          }

                        $sql4 ="SELECT * FROM tructuan WHERE id_tuan = $id_tuan AND id_thu = '5' AND id_giaovien = '$row_gv[id_giaovien]' AND id_buoi = '4'";
                        $res_dem4= mysqli_query($connection,$sql4);
                        $row_dem4 = mysqli_fetch_assoc($res_dem4);
                        if($row_dem4 == null){
                          $row_dem4['so_gio'] = 0;
                          }
                        $tong_thu6= $row_dem1['so_gio'] + $row_dem2['so_gio'] + $row_dem3['so_gio'] + $row_dem4['so_gio'];

                        //Thứ 7
                        $sql1 ="SELECT * FROM tructuan WHERE id_tuan = $id_tuan AND id_thu = '6' AND id_giaovien = '$row_gv[id_giaovien]'  AND id_buoi = '1'";
                        $res_dem1 = mysqli_query($connection,$sql1);
                        $row_dem1 = mysqli_fetch_assoc($res_dem1);
                        if($row_dem1 == null){
                          $row_dem1['so_gio'] = 0;
                          }
                        $sql2 ="SELECT * FROM tructuan WHERE id_tuan = $id_tuan AND id_thu = '6' AND id_giaovien = '$row_gv[id_giaovien]' AND id_buoi = '2'";
                        $res_dem2= mysqli_query($connection,$sql2);
                        $row_dem2 = mysqli_fetch_assoc($res_dem2);
                        if($row_dem2 == null){
                        $row_dem2['so_gio'] = 0;
                        }
                        $sql3 ="SELECT * FROM tructuan WHERE id_tuan = $id_tuan AND id_thu = '6' AND id_giaovien = '$row_gv[id_giaovien]' AND id_buoi = '3'";
                        $res_dem3= mysqli_query($connection,$sql3);
                        $row_dem3 = mysqli_fetch_assoc($res_dem3);
                        if($row_dem3 == null){
                          $row_dem3['so_gio'] = 0;
                          }

                        $sql4 ="SELECT * FROM tructuan WHERE id_tuan = $id_tuan AND id_thu = '6' AND id_giaovien = '$row_gv[id_giaovien]' AND id_buoi = '4'";
                        $res_dem4= mysqli_query($connection,$sql4);
                        $row_dem4 = mysqli_fetch_assoc($res_dem4);
                        if($row_dem4 == null){
                          $row_dem4['so_gio'] = 0;
                          }
                        $tong_thu7= $row_dem1['so_gio'] + $row_dem2['so_gio'] + $row_dem3['so_gio'] + $row_dem4['so_gio'];

                        //Chủ nhật
                        $sql1 ="SELECT * FROM tructuan WHERE id_tuan = $id_tuan AND id_thu = '7' AND id_giaovien = '$row_gv[id_giaovien]'  AND id_buoi = '1'";
                        $res_dem1 = mysqli_query($connection,$sql1);
                        $row_dem1 = mysqli_fetch_assoc($res_dem1);
                        if($row_dem1 == null){
                          $row_dem1['so_gio'] = 0;
                          }
                        $sql2 ="SELECT * FROM tructuan WHERE id_tuan = $id_tuan AND id_thu = '7' AND id_giaovien = '$row_gv[id_giaovien]' AND id_buoi = '2'";
                        $res_dem2= mysqli_query($connection,$sql2);
                        $row_dem2 = mysqli_fetch_assoc($res_dem2);
                        if($row_dem2 == null){
                        $row_dem2['so_gio'] = 0;
                        }
                        $sql3 ="SELECT * FROM tructuan WHERE id_tuan = $id_tuan AND id_thu = '7' AND id_giaovien = '$row_gv[id_giaovien]' AND id_buoi = '3'";
                        $res_dem3= mysqli_query($connection,$sql3);
                        $row_dem3 = mysqli_fetch_assoc($res_dem3);
                        if($row_dem3 == null){
                          $row_dem3['so_gio'] = 0;
                          }

                        $sql4 ="SELECT * FROM tructuan WHERE id_tuan = $id_tuan AND id_thu = '7' AND id_giaovien = '$row_gv[id_giaovien]' AND id_buoi = '4'";
                        $res_dem4= mysqli_query($connection,$sql4);
                        $row_dem4 = mysqli_fetch_assoc($res_dem4);
                        if($row_dem4 == null){
                          $row_dem4['so_gio'] = 0;
                          }
                        $tong_chunhat= $row_dem1['so_gio'] + $row_dem2['so_gio'] + $row_dem3['so_gio'] + $row_dem4['so_gio'];

                        $tong= $tong_thu2 + $tong_thu3 + $tong_thu4 + $tong_thu5 + $tong_thu6 + $tong_thu7 + $tong_chunhat;
                        ?>
                      <th><?php echo $row_gv["ten_vt"]; ?></th>
                      <td><?php echo $tong_thu2;?></td>  
                      <td><?php echo $tong_thu3;?></td>  
                      <td><?php echo $tong_thu4;?></td>  
                      <td><?php echo $tong_thu5;?></td>  
                      <td><?php echo $tong_thu6;?></td>  
                      <td><?php echo $tong_thu7;?></td>  
                      <td><?php echo $tong_chunhat;?></td> 
                      <?php 
                          if($tong > 30){ ?>
                            <td style="color: red;background-color:#ffdf80;"><?php echo $tong;?></td>
                          <?php
                          }else{ ?>
                            <td style="background-color:#ffdf80;"><?php echo $tong;?></td>
                          <?php
                          }
                          ?> 
                      </tr>
                     
                     <?php } ?>    
    </table>
    </div>
      <div style="width:50%;" class="container">
          <canvas id="myChart"></canvas>
      </div>
      <div  style="text-align:center;background-color:#ffdf80;">Biểu đồ thống kê tổng số giờ trong tuần của giáo viên.</div>
      <br>
      <?php
       include("config.php");
      $query=$connection->query("SELECT giaovien.ten_vt AS id_giaovien, SUM(tructuan.so_gio) AS so_gio FROM tructuan, giaovien WHERE tructuan.id_tuan='$id_tuan'AND tructuan.id_giaovien=giaovien.id_giaovien GROUP BY tructuan.id_giaovien");
      foreach($query as $data){
        $ten[] = $data['id_giaovien'];
        $so_gio[] = $data['so_gio'];
      }
      ?>

    <?php
    include("giaodien/footer.php");
     ?>      
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const labels = <?php echo json_encode($ten)?>;
        const data = {
          labels: labels,
          datasets: [{
            label: 'Số giờ trong tuần',
            data: <?php echo json_encode($so_gio)?>,
            backgroundColor: [
              'rgba(255, 99, 132, 0.2)',
              'rgba(255, 159, 64, 0.2)',
              'rgba(255, 205, 86, 0.2)',
              'rgba(75, 192, 192, 0.2)',
              'rgba(54, 162, 235, 0.2)',
              'rgba(153, 102, 255, 0.2)',
              'rgba(255, 179, 255, 0.2)'
            ],
            borderColor: [
              'rgb(255, 99, 132)',
              'rgb(255, 159, 64)',
              'rgb(255, 205, 86)',
              'rgb(75, 192, 192)',
              'rgb(54, 162, 235)',
              'rgb(153, 102, 255)',
              'rgb(255, 179, 255)'
            ],
            borderWidth: 1
          }]
        };
        const config = {
          type: 'bar',
          data: data,
          options: {
            scales: {
              y: {
                beginAtZero: true
              }
            }
          },
        };
        var myChart = new Chart(document.getElementById('myChart'), config);
    </script>

</body>
</html>
<style>
  td{
    text-align:center;
  }
</style>
