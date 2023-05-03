<?php 
    include("config.php");
    $id_tuan = $_GET['id_tuan'];
    session_start();
    if(!isset($_SESSION['id_giaovien'])){
      header('Location:../../login.php');
     }

     $sqltt= "SELECT * FROM tuan WHERE id_tuan='$id_tuan'"; 
     $restt= mysqli_query($connection,$sqltt);
     $rowtt= mysqli_fetch_assoc($restt);


     $T2=$rowtt['ngaybatdau'];
 
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../css/style.css" rel="stylesheet">
        <!-- Sweetalert -->
        <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
      <!-- <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
      <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script> -->

      <!-- <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script> -->
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    
    
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
.buttonsua {  background-color: #58257b; /* Màu của Quản trị mạng ^^ */  border: none; font-weight:bold; color: white;  padding: 5px 10px;  text-align: center;  text-decoration: none;  display: inline-block; width: auto;  font-size: 13px;  margin: 4px 2px;  -webkit-transition-duration: 0.4s; /* Safari */  transition-duration: 0.4s;  cursor: pointer;  border-radius: 4px;}
.buttonsua {  background-color: white;   color: black;   border: 2px solid green;}
.buttonsua:hover {  background-color: green;  color: white;}
.buttonxoa {  background-color: #58257b; /* Màu của Quản trị mạng ^^ */  border: none; font-weight:bold; color: white;  padding: 5px 10px;  text-align: center;  text-decoration: none;  display: inline-block; width: auto; font-size: 13px;  margin: 4px 2px;  -webkit-transition-duration: 0.4s; /* Safari */  transition-duration: 0.4s;  cursor: pointer;  border-radius: 4px;}
.buttonxoa {  background-color: white;   color: black;   border: 2px solid red;}
.buttonxoa:hover {  background-color: red;  color: white;}
.buttonthem {  background-color: #58257b; /* Màu của Quản trị mạng ^^ */  border: none; font-weight:bold;  color: white;  padding: 5px 10px;  text-align: center;  text-decoration: none;  display: inline-block;width: auto;  font-size: 13px;  margin: 4px 2px;  -webkit-transition-duration: 0.4s; /* Safari */  transition-duration: 0.4s;  cursor: pointer;  border-radius: 4px;}
.buttonthem {  background-color: white;   color: black;   border: 2px solid #17a2b8;}
.buttonthem:hover {  background-color: #17a2b8;  color: white;}
th{
  text-align:center;
}
td{
    background-color:white;
}
</style>
<?php if(isset($_SESSION['id_giaovien'])==true) { ?>
  <?php
  include("../giaodien/topbar.php");
  include("giaodien_gv/header.php");
  ?>    
<?php } ?>
<body>
 
<div class="container-fluid page-header" style="margin-bottom: 40px;">
            <div class="container">
                <div class="d-flex flex-column justify-content-center" style="min-height: 250px">
                    <h3 class="display-4 text-white text-uppercase">Xếp phòng</h3>
                    <div class="d-inline-flex text-white">
                        <p class="m-0 text-uppercase"><a class="text-white" href="../index_gv.php">Trang chủ</a></p>
                        <i class="fa fa-angle-double-right pt-1 px-3"></i>
                        <p class="m-0 text-uppercase"><a class="text-white" href="xepphong.php">Xếp phòng</a></p>
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
                                $odate = $CN;$newDate = date("d/m/Y", strtotime($odate));echo $newDate;
                            ?>]</h3>
                    </div>
                </div>     
        </div>
    </div>
<br>
      <div class="container ">
          <div class="col-lg-9 container">
            <div style="text-align:center;">
            <span style="font-weight:bold;">Chú thích:</span>
                <input readonly type="text"  style="background-color:#80bfff;color:#000; width:auto;text-align:center;font-weight:bold;" value="Buổi sáng">
                <input readonly type="text"  style="background-color:#cccc00;color:#000; width:auto;text-align:center;font-weight:bold;" value="Buổi trưa">
                <input readonly type="text"  style="background-color:#666699;color:#fff; width:auto;text-align:center;font-weight:bold;" value="Buổi tối">
            </div>
          </div>
      </div>     
      <br>
<table class="table table-bordered table-striped table-responsive-stack" style="color:#000; background-color:#fff;" id="table">
<tr>
     <th style="width:11.8%;">Phòng</th>
     <th style="width:11.8%;">Thứ 2<br><?php $odate = $T2;$newDate = date("d/m/Y", strtotime($odate));echo $newDate;?></th>
     <th style="width:11.8%;">Thứ 3<br><?php $odate = $T3;$newDate = date("d/m/Y", strtotime($odate));echo $newDate;?></th>
     <th style="width:11.8%;">Thứ 4<br><?php $odate = $T4;$newDate = date("d/m/Y", strtotime($odate));echo $newDate;?></th>
     <th style="width:11.8%;">Thứ 5<br><?php $odate = $T5;$newDate = date("d/m/Y", strtotime($odate));echo $newDate;?></th>
     <th style="width:11.8%;">Thứ 6<br><?php $odate = $T6;$newDate = date("d/m/Y", strtotime($odate));echo $newDate;?></th>
     <th style="width:11.8%; background-color:#ff6666;">Thứ 7<br><?php $odate = $T7;$newDate = date("d/m/Y", strtotime($odate));echo $newDate;?></th>
     <th style="width:11.8%; background-color:#ff6666;">Chủ nhật<br><?php $odate = $CN;$newDate = date("d/m/Y", strtotime($odate));echo $newDate;?></th>
 </tr>  
                    <?php 
                      $sql_phong="SELECT * FROM phong";
                      $query_phong= mysqli_query($connection,$sql_phong);
                      while($row_phong=mysqli_fetch_assoc($query_phong)) {  
                        //Thứ 2
                        $sql_t2s="SELECT * FROM lichhoc, danhsachlop WHERE lichhoc.id_tuan='$id_tuan' AND lichhoc.id_phong='$row_phong[id_phong]' AND lichhoc.id_thu='1' AND lichhoc.id_buoi='1' AND lichhoc.id_lop=danhsachlop.id_danhsach";
                        $query_t2s= mysqli_query($connection,$sql_t2s);
                        // $row_t2s=mysqli_fetch_assoc($query_t2s);
                        // if($row_t2s == NULL){
                        //   $row_t2s['ma_danhsach'] = 'Trống';
                        // }

                        $sql_t2t="SELECT * FROM lichhoc, danhsachlop WHERE lichhoc.id_tuan='$id_tuan' AND lichhoc.id_phong='$row_phong[id_phong]' AND lichhoc.id_thu='1' AND lichhoc.id_buoi='2' AND lichhoc.id_lop=danhsachlop.id_danhsach";
                        $query_t2t= mysqli_query($connection,$sql_t2t);
                        // $row_t2t=mysqli_fetch_assoc($query_t2t);
                        // if($row_t2t == NULL){
                        //   $row_t2t['ma_danhsach'] = 'Trống';
                        // }

                        $sql_t2c="SELECT * FROM lichhoc, danhsachlop WHERE lichhoc.id_tuan='$id_tuan' AND lichhoc.id_phong='$row_phong[id_phong]' AND lichhoc.id_thu='1' AND lichhoc.id_buoi='4' AND lichhoc.id_lop=danhsachlop.id_danhsach";
                        $query_t2c= mysqli_query($connection,$sql_t2c);
                        // $row_t2c=mysqli_fetch_assoc($query_t2c);
                        // if($row_t2c == NULL){
                        //   $row_t2c['ma_danhsach'] = 'Trống';
                        // }

                        //Thứ 3
                        $sql_t3s="SELECT * FROM lichhoc, danhsachlop WHERE lichhoc.id_tuan='$id_tuan' AND lichhoc.id_phong='$row_phong[id_phong]' AND lichhoc.id_thu='2' AND lichhoc.id_buoi='1' AND lichhoc.id_lop=danhsachlop.id_danhsach";
                        $query_t3s= mysqli_query($connection,$sql_t3s);
                        // $row_t3s=mysqli_fetch_assoc($query_t3s);
                        // if($row_t3s == NULL){
                        //   $row_t3s['ma_danhsach'] = 'Trống';
                        // }

                        $sql_t3t="SELECT * FROM lichhoc, danhsachlop WHERE lichhoc.id_tuan='$id_tuan' AND lichhoc.id_phong='$row_phong[id_phong]' AND lichhoc.id_thu='2' AND lichhoc.id_buoi='2' AND lichhoc.id_lop=danhsachlop.id_danhsach";
                        $query_t3t= mysqli_query($connection,$sql_t3t);
                        // $row_t3t=mysqli_fetch_assoc($query_t3t);
                        // if($row_t3t == NULL){
                        //   $row_t3t['ma_danhsach'] = 'Trống';
                        // }

                        $sql_t3c="SELECT * FROM lichhoc, danhsachlop WHERE lichhoc.id_tuan='$id_tuan' AND lichhoc.id_phong='$row_phong[id_phong]' AND lichhoc.id_thu='2' AND lichhoc.id_buoi='4' AND lichhoc.id_lop=danhsachlop.id_danhsach";
                        $query_t3c= mysqli_query($connection,$sql_t3c);
                        // $row_t3c=mysqli_fetch_assoc($query_t3c);
                        // if($row_t3c == NULL){
                        //   $row_t3c['ma_danhsach'] = 'Trống';
                        // }

                        //Thứ 4
                        $sql_t4s="SELECT * FROM lichhoc, danhsachlop WHERE lichhoc.id_tuan='$id_tuan' AND lichhoc.id_phong='$row_phong[id_phong]' AND lichhoc.id_thu='3' AND lichhoc.id_buoi='1' AND lichhoc.id_lop=danhsachlop.id_danhsach";
                        $query_t4s= mysqli_query($connection,$sql_t4s);
                        // $row_t4s=mysqli_fetch_assoc($query_t4s);
                        // if($row_t4s == NULL){
                        //   $row_t4s['ma_danhsach'] = 'Trống';
                        // }

                        $sql_t4t="SELECT * FROM lichhoc, danhsachlop WHERE lichhoc.id_tuan='$id_tuan' AND lichhoc.id_phong='$row_phong[id_phong]' AND lichhoc.id_thu='3' AND lichhoc.id_buoi='2' AND lichhoc.id_lop=danhsachlop.id_danhsach";
                        $query_t4t= mysqli_query($connection,$sql_t4t);
                        // $row_t4t=mysqli_fetch_assoc($query_t4t);
                        // if($row_t4t == NULL){
                        //   $row_t4t['ma_danhsach'] = 'Trống';
                        // }

                        $sql_t4c="SELECT * FROM lichhoc, danhsachlop WHERE lichhoc.id_tuan='$id_tuan' AND lichhoc.id_phong='$row_phong[id_phong]' AND lichhoc.id_thu='3' AND lichhoc.id_buoi='4' AND lichhoc.id_lop=danhsachlop.id_danhsach";
                        $query_t4c= mysqli_query($connection,$sql_t4c);
                        // $row_t4c=mysqli_fetch_assoc($query_t4c);
                        // if($row_t4c == NULL){
                        //   $row_t4c['ma_danhsach'] = 'Trống';
                        // }
                        //Thứ 5
                        $sql_t5s="SELECT * FROM lichhoc, danhsachlop WHERE lichhoc.id_tuan='$id_tuan' AND lichhoc.id_phong='$row_phong[id_phong]' AND lichhoc.id_thu='4' AND lichhoc.id_buoi='1' AND lichhoc.id_lop=danhsachlop.id_danhsach";
                        $query_t5s= mysqli_query($connection,$sql_t5s);
                        // $row_t5s=mysqli_fetch_assoc($query_t5s);
                        // if($row_t5s == NULL){
                        //   $row_t5s['ma_danhsach'] = 'Trống';
                        // }

                        $sql_t5t="SELECT * FROM lichhoc, danhsachlop WHERE lichhoc.id_tuan='$id_tuan' AND lichhoc.id_phong='$row_phong[id_phong]' AND lichhoc.id_thu='4' AND lichhoc.id_buoi='2' AND lichhoc.id_lop=danhsachlop.id_danhsach";
                        $query_t5t= mysqli_query($connection,$sql_t5t);
                        // $row_t5t=mysqli_fetch_assoc($query_t5t);
                        // if($row_t5t == NULL){
                        //   $row_t5t['ma_danhsach'] = 'Trống';
                        // }

                        $sql_t5c="SELECT * FROM lichhoc, danhsachlop WHERE lichhoc.id_tuan='$id_tuan' AND lichhoc.id_phong='$row_phong[id_phong]' AND lichhoc.id_thu='4' AND lichhoc.id_buoi='4' AND lichhoc.id_lop=danhsachlop.id_danhsach";
                        $query_t5c= mysqli_query($connection,$sql_t5c);
                        // $row_t5c=mysqli_fetch_assoc($query_t5c);
                        // if($row_t5c == NULL){
                        //   $row_t5c['ma_danhsach'] = 'Trống';
                        // }
                        //Thứ 6
                        $sql_t6s="SELECT * FROM lichhoc, danhsachlop WHERE lichhoc.id_tuan='$id_tuan' AND lichhoc.id_phong='$row_phong[id_phong]' AND lichhoc.id_thu='5' AND lichhoc.id_buoi='1' AND lichhoc.id_lop=danhsachlop.id_danhsach";
                        $query_t6s= mysqli_query($connection,$sql_t6s);
                        // $row_t6s=mysqli_fetch_assoc($query_t6s);
                        // if($row_t6s == NULL){
                        //   $row_t6s['ma_danhsach'] = 'Trống';
                        // }

                        $sql_t6t="SELECT * FROM lichhoc, danhsachlop WHERE lichhoc.id_tuan='$id_tuan' AND lichhoc.id_phong='$row_phong[id_phong]' AND lichhoc.id_thu='5' AND lichhoc.id_buoi='2' AND lichhoc.id_lop=danhsachlop.id_danhsach";
                        $query_t6t= mysqli_query($connection,$sql_t6t);
                        // $row_t6t=mysqli_fetch_assoc($query_t6t);
                        // if($row_t6t == NULL){
                        //   $row_t6t['ma_danhsach'] = 'Trống';
                        // }

                        $sql_t6c="SELECT * FROM lichhoc, danhsachlop WHERE lichhoc.id_tuan='$id_tuan' AND lichhoc.id_phong='$row_phong[id_phong]' AND lichhoc.id_thu='5' AND lichhoc.id_buoi='4' AND lichhoc.id_lop=danhsachlop.id_danhsach";
                        $query_t6c= mysqli_query($connection,$sql_t6c);
                        // $row_t6c=mysqli_fetch_assoc($query_t6c);
                        // if($row_t6c == NULL){
                        //   $row_t6c['ma_danhsach'] = 'Trống';
                        // }
                        //Thứ 7
                        $sql_t7s="SELECT * FROM lichhoc, danhsachlop WHERE lichhoc.id_tuan='$id_tuan' AND lichhoc.id_phong='$row_phong[id_phong]' AND lichhoc.id_thu='6' AND lichhoc.id_buoi='1' AND lichhoc.id_lop=danhsachlop.id_danhsach";
                        $query_t7s= mysqli_query($connection,$sql_t7s);
                        // $row_t7s=mysqli_fetch_assoc($query_t7s);
                        // if($row_t7s == NULL){
                        //   $row_t7s['ma_danhsach'] = 'Trống';
                        // }

                        $sql_t7t="SELECT * FROM lichhoc, danhsachlop WHERE lichhoc.id_tuan='$id_tuan' AND lichhoc.id_phong='$row_phong[id_phong]' AND lichhoc.id_thu='6' AND lichhoc.id_buoi='2' AND lichhoc.id_lop=danhsachlop.id_danhsach";
                        $query_t7t= mysqli_query($connection,$sql_t7t);
                        // $row_t7t=mysqli_fetch_assoc($query_t7t);
                        // if($row_t7t == NULL){
                        //   $row_t7t['ma_danhsach'] = 'Trống';
                        // }

                        $sql_t7c="SELECT * FROM lichhoc, danhsachlop WHERE lichhoc.id_tuan='$id_tuan' AND lichhoc.id_phong='$row_phong[id_phong]' AND lichhoc.id_thu='6' AND lichhoc.id_buoi='4' AND lichhoc.id_lop=danhsachlop.id_danhsach";
                        $query_t7c= mysqli_query($connection,$sql_t7c);
                        // $row_t7c=mysqli_fetch_assoc($query_t7c);
                        // if($row_t7c == NULL){
                        //   $row_t7c['ma_danhsach'] = 'Trống';
                        // }
                        //Chủ nhật
                        $sql_cns="SELECT * FROM lichhoc, danhsachlop WHERE lichhoc.id_tuan='$id_tuan' AND lichhoc.id_phong='$row_phong[id_phong]' AND lichhoc.id_thu='7' AND lichhoc.id_buoi='1' AND lichhoc.id_lop=danhsachlop.id_danhsach";
                        $query_cns= mysqli_query($connection,$sql_cns);
                        // $row_cns=mysqli_fetch_assoc($query_cns);
                        // if($row_cns == NULL){
                        //   $row_cns['ma_danhsach'] = 'Trống';
                        // }

                        $sql_cnt="SELECT * FROM lichhoc, danhsachlop WHERE lichhoc.id_tuan='$id_tuan' AND lichhoc.id_phong='$row_phong[id_phong]' AND lichhoc.id_thu='7' AND lichhoc.id_buoi='2' AND lichhoc.id_lop=danhsachlop.id_danhsach";
                        $query_cnt= mysqli_query($connection,$sql_cnt);
                        // $row_cnt=mysqli_fetch_assoc($query_cnt);
                        // if($row_cnt == NULL){
                        //   $row_cnt['ma_danhsach'] = 'Trống';
                        // }

                        $sql_cnc="SELECT * FROM lichhoc, danhsachlop WHERE lichhoc.id_tuan='$id_tuan' AND lichhoc.id_phong='$row_phong[id_phong]' AND lichhoc.id_thu='7' AND lichhoc.id_buoi='4' AND lichhoc.id_lop=danhsachlop.id_danhsach";
                        $query_cnc= mysqli_query($connection,$sql_cnc);
                        // $row_cnc=mysqli_fetch_assoc($query_cnc);
                        // if($row_cnc == NULL){
                        //   $row_cnc['ma_danhsach'] = 'Trống';
                        // }
                      ?>
                      
                      <tr style="width: 15%;">
                        <td style="text-align:center; background-color:#b3b3ff; font-weight:bold;"><?php echo $row_phong["ten_phong"]; ?></td>
                        <td style="text-align:center;">
                        <?php while($row_t2s=mysqli_fetch_assoc($query_t2s)){ ?>
                            <p title="" id="<?php echo $row_t2s['id_lichhoc'];?>" class="form-control" style="background-color:#80bfff;"><?php echo $row_t2s['ma_danhsach'];?></p>
                        <?php } ?>  
                        <?php while($row_t2t=mysqli_fetch_assoc($query_t2t)){ ?>
                            <p title="" id="<?php echo $row_t2t['id_lichhoc'];?>" class="form-control" style="background-color:#cccc00;"><?php echo $row_t2t['ma_danhsach'];?></p>
                        <?php } ?>  
                        <?php while($row_t2c=mysqli_fetch_assoc($query_t2c)){ ?>
                            <p title="" id="<?php echo $row_t2c['id_lichhoc'];?>" class="form-control" style="background-color:#666699; color:white;"><?php echo $row_t2c['ma_danhsach'];?></p>
                        <?php } ?>
                        <a type="submit" title="Xếp lớp" class="btn buttonsua"href="xepphong2.php?id_phong=<?php echo $row_phong['id_phong'];?>&id_tuan=<?php echo $id_tuan; ?>&id_thu=1"><i class="fa fa-plus" style="font-size:24px"></i></a>
                        </td>

                        <td style="text-align:center;">
                        <?php while($row_t3s=mysqli_fetch_assoc($query_t3s)){ ?>
                            <p title="" id="<?php echo $row_t3s['id_lichhoc'];?>" class="form-control" style="background-color:#80bfff;"><?php echo $row_t3s['ma_danhsach'];?></p>
                        <?php } ?>  
                        <?php while($row_t3t=mysqli_fetch_assoc($query_t3t)){ ?>
                            <p title="" id="<?php echo $row_t3t['id_lichhoc'];?>" class="form-control" style="background-color:#cccc00;"><?php echo $row_t3t['ma_danhsach'];?></p>
                        <?php } ?>  
                        <?php while($row_t3c=mysqli_fetch_assoc($query_t3c)){ ?>
                            <p title="" id="<?php echo $row_t3c['id_lichhoc'];?>" class="form-control" style="background-color:#666699; color:white;"><?php echo $row_t3c['ma_danhsach'];?></p>
                        <?php } ?>
                        <a type="submit" title="Xếp lớp" class="btn buttonsua"href="xepphong2.php?id_phong=<?php echo $row_phong['id_phong'];?>&id_tuan=<?php echo $id_tuan; ?>&id_thu=2"><i class="fa fa-plus" style="font-size:24px"></i></a>
                        </td> 

                        <td style="text-align:center;">
                        <?php while($row_t4s=mysqli_fetch_assoc($query_t4s)){ ?>
                            <p title="" id="<?php echo $row_t4s['id_lichhoc'];?>" class="form-control" style="background-color:#80bfff;"><?php echo $row_t4s['ma_danhsach'];?></p>
                        <?php } ?>  
                        <?php while($row_t4t=mysqli_fetch_assoc($query_t4t)){ ?>
                            <p title="" id="<?php echo $row_t4t['id_lichhoc'];?>" class="form-control" style="background-color:#cccc00;"><?php echo $row_t4t['ma_danhsach'];?></p>
                        <?php } ?>  
                        <?php while($row_t4c=mysqli_fetch_assoc($query_t4c)){ ?>
                            <p title="" id="<?php echo $row_t4c['id_lichhoc'];?>" class="form-control" style="background-color:#666699; color:white;"><?php echo $row_t4c['ma_danhsach'];?></p>
                        <?php } ?>
                        <a type="submit" title="Xếp lớp" class="btn buttonsua"href="xepphong2.php?id_phong=<?php echo $row_phong['id_phong'];?>&id_tuan=<?php echo $id_tuan; ?>&id_thu=3"><i class="fa fa-plus" style="font-size:24px"></i></a>
                        </td> 

                        <td style="text-align:center;">
                        <?php while($row_t5s=mysqli_fetch_assoc($query_t5s)){ ?>
                            <p title="" id="<?php echo $row_t5s['id_lichhoc'];?>" class="form-control" style="background-color:#80bfff;"><?php echo $row_t5s['ma_danhsach'];?></p>
                        <?php } ?>  
                        <?php while($row_t5t=mysqli_fetch_assoc($query_t5t)){ ?>
                            <p title="" id="<?php echo $row_t5t['id_lichhoc'];?>" class="form-control" style="background-color:#cccc00;"><?php echo $row_t5t['ma_danhsach'];?></p>
                        <?php } ?>  
                        <?php while($row_t5c=mysqli_fetch_assoc($query_t5c)){ ?>
                            <p title="" id="<?php echo $row_t5c['id_lichhoc'];?>" class="form-control" style="background-color:#666699; color:white;"><?php echo $row_t5c['ma_danhsach'];?></p>
                        <?php } ?>
                        <a type="submit" title="Xếp lớp" class="btn buttonsua"href="xepphong2.php?id_phong=<?php echo $row_phong['id_phong'];?>&id_tuan=<?php echo $id_tuan; ?>&id_thu=4"><i class="fa fa-plus" style="font-size:24px"></i></a>
                        </td>   

                        <td style="text-align:center;">
                        <?php while($row_t6s=mysqli_fetch_assoc($query_t6s)){ ?>
                            <p title="" id="<?php echo $row_t6s['id_lichhoc'];?>" class="form-control" style="background-color:#80bfff;"><?php echo $row_t6s['ma_danhsach'];?></p>
                        <?php } ?>  
                        <?php while($row_t6t=mysqli_fetch_assoc($query_t6t)){ ?>
                            <p title="" id="<?php echo $row_t6t['id_lichhoc'];?>" class="form-control" style="background-color:#cccc00;"><?php echo $row_t6t['ma_danhsach'];?></p>
                        <?php } ?>  
                        <?php while($row_t6c=mysqli_fetch_assoc($query_t6c)){ ?>
                            <p title="" id="<?php echo $row_t6c['id_lichhoc'];?>" class="form-control" style="background-color:#666699; color:white;"><?php echo $row_t6c['ma_danhsach'];?></p>
                        <?php } ?>
                        <a type="submit" title="Xếp lớp" class="btn buttonsua"href="xepphong2.php?id_phong=<?php echo $row_phong['id_phong'];?>&id_tuan=<?php echo $id_tuan; ?>&id_thu=5"><i class="fa fa-plus" style="font-size:24px"></i></a>
                        </td>  

                        <td style="text-align:center;">
                        <?php while($row_t7s=mysqli_fetch_assoc($query_t7s)){ ?>
                            <p title="" id="<?php echo $row_t7s['id_lichhoc'];?>" class="form-control" style="background-color:#80bfff;"><?php echo $row_t7s['ma_danhsach'];?></p>
                        <?php } ?>  
                        <?php while($row_t7t=mysqli_fetch_assoc($query_t7t)){ ?>
                            <p title="" id="<?php echo $row_t7t['id_lichhoc'];?>" class="form-control" style="background-color:#cccc00;"><?php echo $row_t7t['ma_danhsach'];?></p>
                        <?php } ?>  
                        <?php while($row_t7c=mysqli_fetch_assoc($query_t7c)){ ?>
                            <p title="" id="<?php echo $row_t7c['id_lichhoc'];?>" class="form-control" style="background-color:#666699; color:white;"><?php echo $row_t7c['ma_danhsach'];?></p>
                        <?php } ?>
                        <a type="submit" title="Xếp lớp" class="btn buttonsua"href="xepphong2.php?id_phong=<?php echo $row_phong['id_phong'];?>&id_tuan=<?php echo $id_tuan; ?>&id_thu=6"><i class="fa fa-plus" style="font-size:24px"></i></a>
                        </td>    

                        <td style="text-align:center;">
                        <?php while($row_cns=mysqli_fetch_assoc($query_cns)){ ?>
                            <p title="" id="<?php echo $row_cns['id_lichhoc'];?>" class="form-control" style="background-color:#80bfff;"><?php echo $row_cns['ma_danhsach'];?></p>
                        <?php } ?>  
                        <?php while($row_cnt=mysqli_fetch_assoc($query_cnt)){ ?>
                            <p title="" id="<?php echo $row_cnt['id_lichhoc'];?>" class="form-control" style="background-color:#cccc00;"><?php echo $row_cnt['ma_danhsach'];?></p>
                        <?php } ?>  
                        <?php while($row_cnc=mysqli_fetch_assoc($query_cnc)){ ?>
                            <p title="" id="<?php echo $row_cnc['id_lichhoc'];?>" class="form-control" style="background-color:#666699; color:white;"><?php echo $row_cnc['ma_danhsach'];?></p>
                        <?php } ?>
                        <a type="submit" title="Xếp lớp" class="btn buttonsua"href="xepphong2.php?id_phong=<?php echo $row_phong['id_phong'];?>&id_tuan=<?php echo $id_tuan; ?>&id_thu=7"><i class="fa fa-plus" style="font-size:24px"></i></a>
                        </td>   
                      </tr>
                     
                     <?php } ?>    
<tr style="background-color:#f2f2f2">
     <th style="width:11.8%;">Phòng</th>
     <th style="width:11.8%;">Thứ 2<br><?php $odate = $T2;$newDate = date("d/m/Y", strtotime($odate));echo $newDate;?></th>
     <th style="width:11.8%;">Thứ 3<br><?php $odate = $T3;$newDate = date("d/m/Y", strtotime($odate));echo $newDate;?></th>
     <th style="width:11.8%;">Thứ 4<br><?php $odate = $T4;$newDate = date("d/m/Y", strtotime($odate));echo $newDate;?></th>
     <th style="width:11.8%;">Thứ 5<br><?php $odate = $T5;$newDate = date("d/m/Y", strtotime($odate));echo $newDate;?></th>
     <th style="width:11.8%;">Thứ 6<br><?php $odate = $T6;$newDate = date("d/m/Y", strtotime($odate));echo $newDate;?></th>
     <th style="width:11.8%; background-color:#ff6666;">Thứ 7<br><?php $odate = $T7;$newDate = date("d/m/Y", strtotime($odate));echo $newDate;?></th>
     <th style="width:11.8%; background-color:#ff6666;">Chủ nhật<br><?php $odate = $CN;$newDate = date("d/m/Y", strtotime($odate));echo $newDate;?></th>
 </tr>
 
</table>
      <div class="container ">
          <div class="col-lg-9 container">
            <div style="text-align:center;">
            <span style="font-weight:bold;">Chú thích:</span>
                <input readonly type="text"  style="background-color:#80bfff;color:#000; width:auto;text-align:center;font-weight:bold;" value="Buổi sáng">
                <input readonly type="text"  style="background-color:#cccc00;color:#000; width:auto;text-align:center;font-weight:bold;" value="Buổi trưa">
                <input readonly type="text"  style="background-color:#666699;color:#fff; width:auto;text-align:center;font-weight:bold;" value="Buổi tối">
            </div>
          </div>
      </div> 
      <br>
<?php
    include("giaodien/footer.php");
     ?>
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


<!-- JavaScript Libraries -->
  <!-- JavaScript Libraries -->
  <!-- <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script> -->
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script> -->
    
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->


<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>  
        $(document).ready(function(){ 
            $('p').tooltip({
            classes:{
            "ui-tooltip":"highlight"
            },
            position:{ my:'left center', at:'right+50 center'},
            content:function(result){
            $.post('fetch_data.php', {
                id:$(this).attr('id')
            }, function(data){
                result(data);
            });
            }
            });
        });  
</script>     

</body>

</html>
