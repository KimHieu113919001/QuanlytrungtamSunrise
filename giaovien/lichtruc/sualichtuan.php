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
    //Buổi sáng
   
    $sql_thu2s= "SELECT * FROM tructuan WHERE id_tuan=$id_tuan AND id_buoi='1' AND id_thu='1'"; 
    $res_thu2s= mysqli_query($connection,$sql_thu2s);
    $t2s = [];
      foreach($res_thu2s as $thu2s){
        $t2s[] = $thu2s['id_giaovien'];
    }


    $sql_thu3s= "SELECT * FROM tructuan WHERE id_tuan=$id_tuan AND id_buoi='1' AND id_thu='2'"; 
    $res_thu3s= mysqli_query($connection,$sql_thu3s);
    $t3s = [];
    foreach($res_thu3s as $thu3s){
        $t3s[] = $thu3s['id_giaovien'];
    }

    $sql_thu4s= "SELECT * FROM tructuan WHERE id_tuan=$id_tuan AND id_buoi='1' AND id_thu='3'"; 
    $res_thu4s= mysqli_query($connection,$sql_thu4s);
    $t4s = [];
    foreach($res_thu4s as $thu4s){
        $t4s[] = $thu4s['id_giaovien'];
    }

    $sql_thu5s= "SELECT * FROM tructuan WHERE id_tuan=$id_tuan AND id_buoi='1' AND id_thu='4'"; 
    $res_thu5s= mysqli_query($connection,$sql_thu5s);
    $t5s = [];
    foreach($res_thu5s as $thu5s){
        $t5s[] = $thu5s['id_giaovien'];
    }

    $sql_thu6s= "SELECT * FROM tructuan WHERE id_tuan=$id_tuan AND id_buoi='1' AND id_thu='5'"; 
    $res_thu6s= mysqli_query($connection,$sql_thu6s);
    $t6s = [];
    foreach($res_thu6s as $thu6s){
        $t6s[] = $thu6s['id_giaovien'];
    }

    $sql_thu7s= "SELECT * FROM tructuan WHERE id_tuan=$id_tuan AND id_buoi='1' AND id_thu='6'"; 
    $res_thu7s= mysqli_query($connection,$sql_thu7s);
    $t7s = [];
    foreach($res_thu7s as $thu7s){
        $t7s[] = $thu7s['id_giaovien'];
    }

    $sql_chunhats= "SELECT * FROM tructuan WHERE id_tuan=$id_tuan AND id_buoi='1' AND id_thu='7'"; 
    $res_chunhats= mysqli_query($connection,$sql_chunhats);
    $cns = [];
    if($chunhats['id_giaovien'] = 0){
      
    }else{
      foreach($res_chunhats as $chunhats){
        $cns[] = $chunhats['id_giaovien'];
      }
    }

    //Buổi trưa 13h00 - 17h30
    $sql_thu2t1= "SELECT * FROM tructuan WHERE id_tuan=$id_tuan AND id_buoi='2' AND id_thu='1'"; 
    $res_thu2t1= mysqli_query($connection,$sql_thu2t1);
    $t2t1 = [];
    foreach($res_thu2t1 as $thu2t1){
        $t2t1[] = $thu2t1['id_giaovien'];
    }

    $sql_thu3t1= "SELECT * FROM tructuan WHERE id_tuan=$id_tuan AND id_buoi='2' AND id_thu='2'"; 
    $res_thu3t1= mysqli_query($connection,$sql_thu3t1);
    $t3t1 = [];
    foreach($res_thu3t1 as $thu3t1){
        $t3t1[] = $thu3t1['id_giaovien'];
    }

    $sql_thu4t1= "SELECT * FROM tructuan WHERE id_tuan=$id_tuan AND id_buoi='2' AND id_thu='3'"; 
    $res_thu4t1= mysqli_query($connection,$sql_thu4t1);
    $t4t1 = [];
    foreach($res_thu4t1 as $thu4t1){
        $t4t1[] = $thu4t1['id_giaovien'];
    }

    $sql_thu5t1= "SELECT * FROM tructuan WHERE id_tuan=$id_tuan AND id_buoi='2' AND id_thu='4'"; 
    $res_thu5t1= mysqli_query($connection,$sql_thu5t1);
    $t5t1 = [];
    foreach($res_thu5t1 as $thu5t1){
        $t5t1[] = $thu5t1['id_giaovien'];
    }

    $sql_thu6t1= "SELECT * FROM tructuan WHERE id_tuan=$id_tuan AND id_buoi='2' AND id_thu='5'"; 
    $res_thu6t1= mysqli_query($connection,$sql_thu6t1);
    $t6t1 = [];
    foreach($res_thu6t1 as $thu6t1){
        $t6t1[] = $thu6t1['id_giaovien'];
    }

    $sql_thu7t1= "SELECT * FROM tructuan WHERE id_tuan=$id_tuan AND id_buoi='2' AND id_thu='6'"; 
    $res_thu7t1= mysqli_query($connection,$sql_thu7t1);
    $t7t1 = [];
    foreach($res_thu7t1 as $thu7t1){
        $t7t1[] = $thu7t1['id_giaovien'];
    }

    $sql_chunhatt1= "SELECT * FROM tructuan WHERE id_tuan=$id_tuan AND id_buoi='2' AND id_thu='7'"; 
    $res_chunhatt1= mysqli_query($connection,$sql_chunhatt1);
    $cnt1 = [];
    foreach($res_chunhatt1 as $chunhatt1){
        $cnt1[] = $chunhatt1['id_giaovien'];
    }

    //Buổi trưa 13h30 - 17h30 
    $sql_thu2t2= "SELECT * FROM tructuan WHERE id_tuan=$id_tuan AND id_buoi='3' AND id_thu='1'"; 
    $res_thu2t2= mysqli_query($connection,$sql_thu2t2);
    $t2t2 = [];
    foreach($res_thu2t2 as $thu2t2){
        $t2t2[] = $thu2t2['id_giaovien'];
    }

    $sql_thu3t2= "SELECT * FROM tructuan WHERE id_tuan=$id_tuan AND id_buoi='3' AND id_thu='2'"; 
    $res_thu3t2= mysqli_query($connection,$sql_thu3t2);
    $t3t2 = [];
    foreach($res_thu3t2 as $thu3t2){
        $t3t2[] = $thu3t2['id_giaovien'];
    }

    $sql_thu4t2= "SELECT * FROM tructuan WHERE id_tuan=$id_tuan AND id_buoi='3' AND id_thu='3'"; 
    $res_thu4t2= mysqli_query($connection,$sql_thu4t2);
    $t4t2 = [];
    foreach($res_thu4t2 as $thu4t2){
        $t4t2[] = $thu4t2['id_giaovien'];
    }

    $sql_thu5t2= "SELECT * FROM tructuan WHERE id_tuan=$id_tuan AND id_buoi='3' AND id_thu='4'"; 
    $res_thu5t2= mysqli_query($connection,$sql_thu5t2);
    $t5t2 = [];
    foreach($res_thu5t2 as $thu5t2){
        $t5t2[] = $thu5t2['id_giaovien'];
    }

    $sql_thu6t2= "SELECT * FROM tructuan WHERE id_tuan=$id_tuan AND id_buoi='3' AND id_thu='5'"; 
    $res_thu6t2= mysqli_query($connection,$sql_thu6t2);
    $t6t2 = [];
    foreach($res_thu6t2 as $thu6t2){
        $t6t2[] = $thu6t2['id_giaovien'];
    }

    $sql_thu7t2= "SELECT * FROM tructuan WHERE id_tuan=$id_tuan AND id_buoi='3' AND id_thu='6'"; 
    $res_thu7t2= mysqli_query($connection,$sql_thu7t2);
    $t7t2 = [];
    foreach($res_thu7t2 as $thu7t2){
        $t7t2[] = $thu7t2['id_giaovien'];
    }

    $sql_chunhatt2= "SELECT * FROM tructuan WHERE id_tuan=$id_tuan AND id_buoi='3' AND id_thu='7'"; 
    $res_chunhatt2= mysqli_query($connection,$sql_chunhatt2);
    $cnt2 = [];
    foreach($res_chunhatt2 as $chunhatt2){
        $cnt2[] = $chunhatt2['id_giaovien'];
    }

    //Buổi chiều
    $sql_thu2c= "SELECT * FROM tructuan WHERE id_tuan=$id_tuan AND id_buoi='4' AND id_thu='1'"; 
    $res_thu2c= mysqli_query($connection,$sql_thu2c);
    $t2c = [];
    foreach($res_thu2c as $thu2c){
        $t2c[] = $thu2c['id_giaovien'];
    }

    $sql_thu3c= "SELECT * FROM tructuan WHERE id_tuan=$id_tuan AND id_buoi='4' AND id_thu='2'"; 
    $res_thu3c= mysqli_query($connection,$sql_thu3c);
    $t3c = [];
    foreach($res_thu3c as $thu3c){
        $t3c[] = $thu3c['id_giaovien'];
    }

    $sql_thu4c= "SELECT * FROM tructuan WHERE id_tuan=$id_tuan AND id_buoi='4' AND id_thu='3'"; 
    $res_thu4c= mysqli_query($connection,$sql_thu4c);
    $t4c = [];
    foreach($res_thu4c as $thu4c){
        $t4c[] = $thu4c['id_giaovien'];
    }

    $sql_thu5c= "SELECT * FROM tructuan WHERE id_tuan=$id_tuan AND id_buoi='4' AND id_thu='4'"; 
    $res_thu5c= mysqli_query($connection,$sql_thu5c);
    $t5c = [];
    foreach($res_thu5c as $thu5c){
        $t5c[] = $thu5c['id_giaovien'];
    }

    $sql_thu6c= "SELECT * FROM tructuan WHERE id_tuan=$id_tuan AND id_buoi='4' AND id_thu='5'"; 
    $res_thu6c= mysqli_query($connection,$sql_thu6c);
    $t6c = [];
    foreach($res_thu6c as $thu6c){
        $t6c[] = $thu6c['id_giaovien'];
    }

    $sql_thu7c= "SELECT * FROM tructuan WHERE id_tuan=$id_tuan AND id_buoi='4' AND id_thu='6'"; 
    $res_thu7c= mysqli_query($connection,$sql_thu7c);
    $t7c = [];
    foreach($res_thu7c as $thu7c){
        $t7c[] = $thu7c['id_giaovien'];
    }

    $sql_chunhatc= "SELECT * FROM tructuan WHERE id_tuan=$id_tuan AND id_buoi='4' AND id_thu='7'"; 
    $res_chunhatc= mysqli_query($connection,$sql_chunhatc);
    $cnc = [];
    foreach($res_chunhatc as $chunhatc){
        $cnc[] = $chunhatc['id_giaovien'];
    }


    //ngày
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

      <!-- <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script> -->
      
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
                    <h3 class="display-4 text-white text-uppercase">Sửa lịch trực</h3>
                    <div class="d-inline-flex text-white">
                        <p class="m-0 text-uppercase"><a class="text-white" href="../index_gv.php">Trang chủ</a></p>
                        <i class="fa fa-angle-double-right pt-1 px-3"></i>
                        <p class="m-0 text-uppercase">Xếp lịch trực</p>
                        <i class="fa fa-angle-double-right pt-1 px-3"></i>
                        <p class="m-0 text-uppercase">Sửa lịch trực</p>
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
        <th style="background-color:#cc9900;">Tùy chọn</th>
        
    </tr>
    <tr>
        <th style=" background-color:#80bfff; text-align:center;">Ca 1</th>
        <th style="width:5%;">7h00-11h00</th>
        <form action="../lichtruc/update_lichtruc.php?id_tuan=<?php echo $_GET['id_tuan'] ?>" method="POST" enctype="multipart/form-data" >
            
            <td>
            <select class="form-control select" style="width:175px;" name="thu_2[]"  multiple multiselect-search="true" multiselect-max-items="3" required>
                  <option value="0">Trống</option>
                    
                    <?php 
                      $sql_2="SELECT * FROM giaovien WHERE gv_truc='1'";
                      $query_2= mysqli_query($connection,$sql_2);
                      if(mysqli_fetch_assoc($query_2) > 0){
                        foreach($query_2 as $row_2){
                          ?>
                        <option 
                        value="<?=$row_2['id_giaovien'];?>"
                        <?= in_array($row_2['id_giaovien'], $t2s) ? 'selected':''?>>
                      
                        <?=$row_2['ten_vt'];?>
                        </option>
                          <?php
                        }
                      }else{ ?>
                        <option value="0">Trống</option>
                        <?php
                      } 
                        ?>
                    </select>
            </td>


            <td><select class="form-control select" style="width:175px;" name="thu_3[]"  multiple multiselect-search="true" multiselect-max-items="3" required>
            <option value="0">Trống</option>
                    <?php 
                      $sql_3="SELECT * FROM giaovien WHERE gv_truc='1'";
                      $query_3= mysqli_query($connection,$sql_3);
                      if(mysqli_fetch_assoc($query_3) > 0){
                        foreach($query_3 as $row_3){
                          ?>
                        <option 
                        value="<?=$row_3['id_giaovien'];?>"
                        <?= in_array($row_3['id_giaovien'], $t3s) ? 'selected':''?>>
                      
                        <?=$row_3['ten_vt'];?>
                        </option>
                          <?php
                        }
                      }else{ ?>
                        <option value="">Trống</option>
                        <?php
                      } 
                        ?>
                    </select>
            </td>


            <td><select class="form-control select" style="width:175px;" name="thu_4[]" multiple multiselect-search="true" multiselect-max-items="3" required>
                  <option value="0">Trống</option>
                    <?php 
                      $sql_4="SELECT * FROM giaovien WHERE gv_truc='1'";
                      $query_4= mysqli_query($connection,$sql_4);
                      if(mysqli_fetch_assoc($query_4) > 0){
                        foreach($query_4 as $row_4){
                          ?>
                        <option 
                        value="<?=$row_4['id_giaovien'];?>"
                        <?= in_array($row_4['id_giaovien'], $t4s) ? 'selected':''?>>
                      
                        <?=$row_4['ten_vt'];?>
                        </option>
                          <?php
                        }
                      }else{ ?>
                        <option value="">Trống</option>
                        <?php
                      } 
                        ?>
                    </select>
            </td>


            <td><select class="form-control select" style="width:175px;" name="thu_5[]" multiple multiselect-search="true" multiselect-max-items="3" required>
            <option value="0">Trống</option>
                    <?php 
                      $sql_5="SELECT * FROM giaovien WHERE gv_truc='1'";
                      $query_5= mysqli_query($connection,$sql_5);
                      if(mysqli_fetch_assoc($query_5) > 0){
                        foreach($query_5 as $row_5){
                          ?>
                        <option 
                        value="<?=$row_5['id_giaovien'];?>"
                        <?= in_array($row_5['id_giaovien'], $t5s) ? 'selected':''?>>
                      
                        <?=$row_5['ten_vt'];?>
                        </option>
                          <?php
                        }
                      }else{ ?>
                        <option value="">Trống</option>
                        <?php
                      } 
                        ?>
                    </select>
            </td>
        

            <td><select class="form-control select" style="width:175px;" name="thu_6[]"  multiple multiselect-search="true" multiselect-max-items="3" required>
            <option value="0">Trống</option>
                    <?php 
                      $sql_6="SELECT * FROM giaovien WHERE gv_truc='1'";
                      $query_6= mysqli_query($connection,$sql_6);
                      if(mysqli_fetch_assoc($query_6) > 0){
                        foreach($query_6 as $row_6){
                          ?>
                        <option 
                        value="<?=$row_6['id_giaovien'];?>"
                        <?= in_array($row_6['id_giaovien'], $t6s) ? 'selected':''?>>
                      
                        <?=$row_6['ten_vt'];?>
                        </option>
                          <?php
                        }
                      }else{ ?>
                        <option value="">Trống</option>
                        <?php
                      } 
                        ?>
                    </select>
            </td>
        

            <td><select class="form-control select" style="width:175px;" name="thu_7[]"  multiple multiselect-search="true" multiselect-max-items="3" required>
            <option value="0">Trống</option>
                    <?php 
                      $sql_7="SELECT * FROM giaovien WHERE gv_truc='1'";
                      $query_7= mysqli_query($connection,$sql_7);
                      if(mysqli_fetch_assoc($query_7) > 0){
                        foreach($query_7 as $row_7){
                          ?>
                        <option 
                        value="<?=$row_7['id_giaovien'];?>"
                        <?= in_array($row_7['id_giaovien'], $t7s) ? 'selected':''?>>
                      
                        <?=$row_7['ten_vt'];?>
                        </option>
                          <?php
                        }
                      }else{ ?>
                        <option value="">Trống</option>
                        <?php
                      } 
                        ?>
                    </select>
            </td>
       

            <td><select class="form-control select" style="width:175px;" name="chu_nhat[]"  multiple multiselect-search="true" multiselect-max-items="3" required>
                  <option value="0">Trống</option>
                    <?php 
                      $sql_chunhat="SELECT * FROM giaovien WHERE gv_truc='1'";
                      $query_chunhat= mysqli_query($connection,$sql_chunhat);
                      if(mysqli_fetch_assoc($query_chunhat) > 0){
                        foreach($query_chunhat as $row_chunhat){
                          ?>
                        <option 
                        value="<?=$row_chunhat['id_giaovien'];?>"
                        <?= in_array($row_chunhat['id_giaovien'], $cns) ? 'selected':''?>>
                      
                        <?=$row_chunhat['ten_vt'];?>
                        </option>
                          <?php
                        }
                      }else{ ?>
                        <option value="">Trống</option>
                        <?php
                      } 
                        ?>
                    </select>
            </td>
            <td><button type="submit" class="btn btn-success"  name="sualichsang">Lưu</button></td>
    </form>
    </tr>
    <tr>
        <th style=" background-color:#ffff80; text-align:center;" rowspan="2" >Ca 2</th>
        <th style="width:5%;">13h00-17h30</th>
      <form action="../lichtruc/update_lichtruc.php?id_tuan=<?php echo $_GET['id_tuan'] ?>" method="POST" enctype="multipart/form-data"  >
        <td><select class="form-control select" style="width:175px;" name="thu_2[]"  multiple multiselect-search="true" multiselect-max-items="3" required>
                    <option value="0">Trống</option>
                    <?php 
                      $sql_2="SELECT * FROM giaovien WHERE gv_truc='1'";
                      $query_2= mysqli_query($connection,$sql_2);
                      if(mysqli_fetch_assoc($query_2) > 0){
                        foreach($query_2 as $row_2){
                          ?>
                        <option 
                        value="<?=$row_2['id_giaovien'];?>"
                        <?= in_array($row_2['id_giaovien'], $t2t1) ? 'selected':''?>>
                      
                        <?=$row_2['ten_vt'];?>
                        </option>
                          <?php
                        }
                      }else{ ?>
                        <option value="">Trống</option>
                        <?php
                      } 
                        ?>
                    </select>
            </td>


            <td><select class="form-control select" style="width:175px;" name="thu_3[]"  multiple multiselect-search="true" multiselect-max-items="3" required>
                    <option value="0">Trống</option>
                    <?php 
                      $sql_3="SELECT * FROM giaovien WHERE gv_truc='1'";
                      $query_3= mysqli_query($connection,$sql_3);
                      if(mysqli_fetch_assoc($query_3) > 0){
                        foreach($query_3 as $row_3){
                          ?>
                        <option 
                        value="<?=$row_3['id_giaovien'];?>"
                        <?= in_array($row_3['id_giaovien'], $t3t1) ? 'selected':''?>>
                      
                        <?=$row_3['ten_vt'];?>
                        </option>
                          <?php
                        }
                      }else{ ?>
                        <option value="">Trống</option>
                        <?php
                      } 
                        ?>
                    </select>
            </td>


            <td><select class="form-control select" style="width:175px;" name="thu_4[]" multiple multiselect-search="true" multiselect-max-items="3" required>
                    <option value="0">Trống</option>
                    <?php 
                      $sql_4="SELECT * FROM giaovien WHERE gv_truc='1'";
                      $query_4= mysqli_query($connection,$sql_4);
                      if(mysqli_fetch_assoc($query_4) > 0){
                        foreach($query_4 as $row_4){
                          ?>
                        <option 
                        value="<?=$row_4['id_giaovien'];?>"
                        <?= in_array($row_4['id_giaovien'], $t4t1) ? 'selected':''?>>
                      
                        <?=$row_4['ten_vt'];?>
                        </option>
                          <?php
                        }
                      }else{ ?>
                        <option value="">Trống</option>
                        <?php
                      } 
                        ?>
                    </select>
            </td>


            <td><select class="form-control select" style="width:175px;" name="thu_5[]"  multiple multiselect-search="true" multiselect-max-items="3" required>
                    <option value="0">Trống</option>
                    <?php 
                      $sql_5="SELECT * FROM giaovien WHERE gv_truc='1'";
                      $query_5= mysqli_query($connection,$sql_5);
                      if(mysqli_fetch_assoc($query_5) > 0){
                        foreach($query_5 as $row_5){
                          ?>
                        <option 
                        value="<?=$row_5['id_giaovien'];?>"
                        <?= in_array($row_5['id_giaovien'], $t5t1) ? 'selected':''?>>
                      
                        <?=$row_5['ten_vt'];?>
                        </option>
                          <?php
                        }
                      }else{ ?>
                        <option value="">Trống</option>
                        <?php
                      } 
                        ?>
                    </select>
            </td>
        

            <td><select class="form-control select" style="width:175px;" name="thu_6[]"  multiple multiselect-search="true" multiselect-max-items="3" required>
                    <option value="0">Trống</option>
                    <?php 
                      $sql_6="SELECT * FROM giaovien WHERE gv_truc='1'";
                      $query_6= mysqli_query($connection,$sql_6);
                      if(mysqli_fetch_assoc($query_6) > 0){
                        foreach($query_6 as $row_6){
                          ?>
                        <option 
                        value="<?=$row_6['id_giaovien'];?>"
                        <?= in_array($row_6['id_giaovien'], $t6t1) ? 'selected':''?>>
                      
                        <?=$row_6['ten_vt'];?>
                        </option>
                          <?php
                        }
                      }else{ ?>
                        <option value="">Trống</option>
                        <?php
                      } 
                        ?>
                    </select>
            </td>
        

            <td><select class="form-control select" style="width:175px;" name="thu_7[]"  multiple multiselect-search="true" multiselect-max-items="3" required>
                    <option value="0">Trống</option>
                    <?php 
                      $sql_7="SELECT * FROM giaovien WHERE gv_truc='1'";
                      $query_7= mysqli_query($connection,$sql_7);
                      if(mysqli_fetch_assoc($query_7) > 0){
                        foreach($query_7 as $row_7){
                          ?>
                        <option 
                        value="<?=$row_7['id_giaovien'];?>"
                        <?= in_array($row_7['id_giaovien'], $t7t1) ? 'selected':''?>>
                      
                        <?=$row_7['ten_vt'];?>
                        </option>
                          <?php
                        }
                      }else{ ?>
                        <option value="">Trống</option>
                        <?php
                      } 
                        ?>
                    </select>
            </td>
       

            <td><select class="form-control select" style="width:175px;" name="chu_nhat[]"  multiple multiselect-search="true"multiselect-max-items="3" required>
                    <option value="0">Trống</option>
                    <?php 
                      $sql_8="SELECT * FROM giaovien WHERE gv_truc='1'";
                      $query_8= mysqli_query($connection,$sql_8);
                      if(mysqli_fetch_assoc($query_8) > 0){
                        foreach($query_8 as $row_8){
                          ?>
                        <option 
                        value="<?=$row_8['id_giaovien'];?>"
                        <?= in_array($row_8['id_giaovien'], $cnt1) ? 'selected':''?>>
                      
                        <?=$row_8['ten_vt'];?>
                        </option>
                          <?php
                        }
                      }else{ ?>
                        <option value="">Trống</option>
                        <?php
                      } 
                        ?>
                    </select>
            </td>
            <td><button type="submit" class="btn btn-success"  name="sualichtrua1">Lưu</button></td>
      </form>
    </tr>


    <tr>
        <th style="width:5%;">13h30-17h30</th>
      <form action="../lichtruc/update_lichtruc.php?id_tuan=<?php echo $_GET['id_tuan'] ?>" method="POST" enctype="multipart/form-data"  >
            <td><select class="form-control select" style="width:175px;" name="thu_2[]"  multiple multiselect-search="true" multiselect-max-items="3" required>
                    <option value="0">Trống</option>
                    <?php 
                      $sql_2="SELECT * FROM giaovien WHERE gv_truc='1'";
                      $query_2= mysqli_query($connection,$sql_2);
                      if(mysqli_fetch_assoc($query_2) > 0){
                        foreach($query_2 as $row_2){
                          ?>
                        <option 
                        value="<?=$row_2['id_giaovien'];?>"
                        <?= in_array($row_2['id_giaovien'], $t2t2) ? 'selected':''?>>
                      
                        <?=$row_2['ten_vt'];?>
                        </option>
                          <?php
                        }
                      }else{ ?>
                        <option value="">Trống</option>
                        <?php
                      } 
                        ?>
                    </select>
            </td>


            <td><select class="form-control select" style="width:175px;" name="thu_3[]"  multiple multiselect-search="true" multiselect-max-items="3" required>
                    <option value="0">Trống</option>
                    <?php 
                      $sql_3="SELECT * FROM giaovien WHERE gv_truc='1'";
                      $query_3= mysqli_query($connection,$sql_3);
                      if(mysqli_fetch_assoc($query_3) > 0){
                        foreach($query_3 as $row_3){
                          ?>
                        <option 
                        value="<?=$row_3['id_giaovien'];?>"
                        <?= in_array($row_3['id_giaovien'], $t3t2) ? 'selected':''?>>
                      
                        <?=$row_3['ten_vt'];?>
                        </option>
                          <?php
                        }
                      }else{ ?>
                        <option value="">Trống</option>
                        <?php
                      } 
                        ?>
                    </select>
            </td>


            <td><select class="form-control select" style="width:175px;" name="thu_4[]"  multiple multiselect-search="true" multiselect-max-items="3" required>
                    <option value="0">Trống</option>
                    <?php 
                      $sql_4="SELECT * FROM giaovien WHERE gv_truc='1'";
                      $query_4= mysqli_query($connection,$sql_4);
                      if(mysqli_fetch_assoc($query_4) > 0){
                        foreach($query_4 as $row_4){
                          ?>
                        <option 
                        value="<?=$row_4['id_giaovien'];?>"
                        <?= in_array($row_4['id_giaovien'], $t4t2) ? 'selected':''?>>
                      
                        <?=$row_4['ten_vt'];?>
                        </option>
                          <?php
                        }
                      }else{ ?>
                        <option value="">Trống</option>
                        <?php
                      } 
                        ?>
                    </select>
            </td>


            <td><select class="form-control select" style="width:175px;" name="thu_5[]"  multiple multiselect-search="true" multiselect-max-items="3" required>
                    <option value="0">Trống</option>
                    <?php 
                      $sql_5="SELECT * FROM giaovien WHERE gv_truc='1'";
                      $query_5= mysqli_query($connection,$sql_5);
                      if(mysqli_fetch_assoc($query_5) > 0){
                        foreach($query_5 as $row_5){
                          ?>
                        <option 
                        value="<?=$row_5['id_giaovien'];?>"
                        <?= in_array($row_5['id_giaovien'], $t5t2) ? 'selected':''?>>
                      
                        <?=$row_5['ten_vt'];?>
                        </option>
                          <?php
                        }
                      }else{ ?>
                        <option value="">Trống</option>
                        <?php
                      } 
                        ?>
                    </select>
            </td>
        

            <td><select class="form-control select" style="width:175px;" name="thu_6[]"  multiple multiselect-search="true" multiselect-max-items="3" required>
                    <option value="0">Trống</option>
                    <?php 
                      $sql_6="SELECT * FROM giaovien WHERE gv_truc='1'";
                      $query_6= mysqli_query($connection,$sql_6);
                      if(mysqli_fetch_assoc($query_6) > 0){
                        foreach($query_6 as $row_6){
                          ?>
                        <option 
                        value="<?=$row_6['id_giaovien'];?>"
                        <?= in_array($row_6['id_giaovien'], $t6t2) ? 'selected':''?>>
                      
                        <?=$row_6['ten_vt'];?>
                        </option>
                          <?php
                        }
                      }else{ ?>
                        <option value="">Trống</option>
                        <?php
                      } 
                        ?>
                    </select>
            </td>
        

            <td><select class="form-control select" style="width:175px;" name="thu_7[]"  multiple multiselect-search="true" multiselect-max-items="3" required>
                    <option value="0">Trống</option>
                    <?php 
                      $sql_7="SELECT * FROM giaovien WHERE gv_truc='1'";
                      $query_7= mysqli_query($connection,$sql_7);
                      if(mysqli_fetch_assoc($query_7) > 0){
                        foreach($query_7 as $row_7){
                          ?>
                        <option 
                        value="<?=$row_7['id_giaovien'];?>"
                        <?= in_array($row_7['id_giaovien'], $t7t2) ? 'selected':''?>>
                      
                        <?=$row_7['ten_vt'];?>
                        </option>
                          <?php
                        }
                      }else{ ?>
                        <option value="">Trống</option>
                        <?php
                      } 
                        ?>
                    </select>
            </td>
       

            <td><select class="form-control select" style="width:175px;" name="chu_nhat[]"  multiple multiselect-search="true" multiselect-max-items="3" required>
                    <option value="0">Trống</option>
                    <?php 
                      $sql_8="SELECT * FROM giaovien WHERE gv_truc='1'";
                      $query_8= mysqli_query($connection,$sql_8);
                      if(mysqli_fetch_assoc($query_8) > 0){
                        foreach($query_8 as $row_8){
                          ?>
                        <option 
                        value="<?=$row_8['id_giaovien'];?>"
                        <?= in_array($row_8['id_giaovien'], $cnt2) ? 'selected':''?>>
                      
                        <?=$row_8['ten_vt'];?>
                        </option>
                          <?php
                        }
                      }else{ ?>
                        <option value="">Trống</option>
                        <?php
                      } 
                        ?>
                    </select>
            </td>
            <td><button type="submit" class="btn btn-success"  name="sualichtrua2">Lưu</button></td>
    </form>
    </tr>

    <tr>
        <th style=" background-color:#80ff80; text-align:center;">Ca 3</th>
        <th style="width:5%;">17h30-21h00</th>
  <form action="../lichtruc/update_lichtruc.php?id_tuan=<?php echo $_GET['id_tuan'] ?>" method="POST" enctype="multipart/form-data"  >
        <td><select class="form-control select" style="width:175px;" name="thu_2[]"  multiple multiselect-search="true" multiselect-max-items="3" required>
                    <option value="0">Trống</option>
                    <?php 
                      $sql_2="SELECT * FROM giaovien WHERE gv_truc='1'";
                      $query_2= mysqli_query($connection,$sql_2);
                      if(mysqli_fetch_assoc($query_2) > 0){
                        foreach($query_2 as $row_2){
                          ?>
                        <option 
                        value="<?=$row_2['id_giaovien'];?>"
                        <?= in_array($row_2['id_giaovien'], $t2c) ? 'selected':''?>>
                      
                        <?=$row_2['ten_vt'];?>
                        </option>
                          <?php
                        }
                      }else{ ?>
                        <option value="">Trống</option>
                        <?php
                      } 
                        ?>
                    </select>
            </td>


            <td><select class="form-control select" style="width:175px;" name="thu_3[]"  multiple multiselect-search="true" multiselect-max-items="3" required>
                    <option value="0">Trống</option>
                    <?php 
                      $sql_3="SELECT * FROM giaovien WHERE gv_truc='1'";
                      $query_3= mysqli_query($connection,$sql_3);
                      if(mysqli_fetch_assoc($query_3) > 0){
                        foreach($query_3 as $row_3){
                          ?>
                        <option 
                        value="<?=$row_3['id_giaovien'];?>"
                        <?= in_array($row_3['id_giaovien'], $t3c) ? 'selected':''?>>
                      
                        <?=$row_3['ten_vt'];?>
                        </option>
                          <?php
                        }
                      }else{ ?>
                        <option value="">Trống</option>
                        <?php
                      } 
                        ?>
                    </select>
            </td>


            <td><select class="form-control select" style="width:175px;" name="thu_4[]"  multiple multiselect-search="true" multiselect-max-items="3" required>
                    <option value="0">Trống</option>
                    <?php 
                      $sql_4="SELECT * FROM giaovien WHERE gv_truc='1'";
                      $query_4= mysqli_query($connection,$sql_4);
                      if(mysqli_fetch_assoc($query_4) > 0){
                        foreach($query_4 as $row_4){
                          ?>
                        <option 
                        value="<?=$row_4['id_giaovien'];?>"
                        <?= in_array($row_4['id_giaovien'], $t4c) ? 'selected':''?>>
                      
                        <?=$row_4['ten_vt'];?>
                        </option>
                          <?php
                        }
                      }else{ ?>
                        <option value="">Trống</option>
                        <?php
                      } 
                        ?>
                    </select>
            </td>


            <td><select class="form-control select" style="width:175px;" name="thu_5[]"  multiple multiselect-search="true" multiselect-max-items="3" required>
                    <option value="0">Trống</option>
                    <?php 
                      $sql_5="SELECT * FROM giaovien WHERE gv_truc='1'";
                      $query_5= mysqli_query($connection,$sql_5);
                      if(mysqli_fetch_assoc($query_5) > 0){
                        foreach($query_5 as $row_5){
                          ?>
                        <option 
                        value="<?=$row_5['id_giaovien'];?>"
                        <?= in_array($row_5['id_giaovien'], $t5c) ? 'selected':''?>>
                      
                        <?=$row_5['ten_vt'];?>
                        </option>
                          <?php
                        }
                      }else{ ?>
                        <option value="">Trống</option>
                        <?php
                      } 
                        ?>
                    </select>
            </td>
        

            <td><select class="form-control select" style="width:175px;" name="thu_6[]"  multiple multiselect-search="true" multiselect-max-items="3" required>
                    <option value="0">Trống</option>
                    <?php 
                      $sql_6="SELECT * FROM giaovien WHERE gv_truc='1'";
                      $query_6= mysqli_query($connection,$sql_6);
                      if(mysqli_fetch_assoc($query_6) > 0){
                        foreach($query_6 as $row_6){
                          ?>
                        <option 
                        value="<?=$row_6['id_giaovien'];?>"
                        <?= in_array($row_6['id_giaovien'], $t6c) ? 'selected':''?>>
                      
                        <?=$row_6['ten_vt'];?>
                        </option>
                          <?php
                        }
                      }else{ ?>
                        <option value="">Trống</option>
                        <?php
                      } 
                        ?>
                    </select>
            </td>
       

            <td><select class="form-control select" style="width:175px;" name="thu_7[]"  multiple multiselect-search="true" multiselect-max-items="3" required>
                    <option value="0">Trống</option>
                    <?php 
                      $sql_7="SELECT * FROM giaovien WHERE gv_truc='1'";
                      $query_7= mysqli_query($connection,$sql_7);
                      if(mysqli_fetch_assoc($query_7) > 0){
                        foreach($query_7 as $row_7){
                          ?>
                        <option 
                        value="<?=$row_7['id_giaovien'];?>"
                        <?= in_array($row_7['id_giaovien'], $t7c) ? 'selected':''?>>
                      
                        <?=$row_7['ten_vt'];?>
                        </option>
                          <?php
                        }
                      }else{ ?>
                        <option value="">Trống</option>
                        <?php
                      } 
                        ?>
                    </select>
            </td>

            <td><select class="form-control select" style="width:175px;" name="chu_nhat[]" multiple multiselect-search="true" multiselect-max-items="3" required>
                    <option value="0">Trống</option>
                    <?php 
                      $sql_8="SELECT * FROM giaovien WHERE gv_truc='1'";
                      $query_8= mysqli_query($connection,$sql_8);
                      if(mysqli_fetch_assoc($query_8) > 0){
                        foreach($query_8 as $row_8){
                          ?>
                        <option 
                        value="<?=$row_8['id_giaovien'];?>"
                        <?= in_array($row_8['id_giaovien'], $cnc) ? 'selected':''?>>
                      
                        <?=$row_8['ten_vt'];?>
                        </option>
                          <?php
                        }
                      }else{ ?>
                        <option value="">Trống</option>
                        <?php
                      } 
                        ?>
                    </select>
            </td>
            <td><button type="submit" class="btn btn-success"  name="sualichtoi">Lưu</button></td>
  </form>
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
                      <th style="background-color:#ffffcc;"><?php echo $row_gv["ten_vt"]; ?></th>
                      <td style="text-align:center;"><?php echo $tong_thu2;?></td>  
                      <td style="text-align:center;"><?php echo $tong_thu3;?></td>  
                      <td style="text-align:center;"><?php echo $tong_thu4;?></td>  
                      <td style="text-align:center;"><?php echo $tong_thu5;?></td>  
                      <td style="text-align:center;"><?php echo $tong_thu6;?></td>  
                      <td style="text-align:center;"><?php echo $tong_thu7;?></td>  
                      <td style="text-align:center;"><?php echo $tong_chunhat;?></td>
                      <?php 
                          if($tong > 30){ ?>
                            <td style="color: red;text-align:center;background-color:#ffdf80;font-weight:bold;"><?php echo $tong;?></td>
                          <?php
                          }else{ ?>
                            <td style="text-align:center;background-color:#ffdf80;font-weight:bold;"><?php echo $tong;?></td>
                          <?php
                          }
                          ?>
                        
                      </tr>
                     
                     <?php } ?>    
    </table>
 
      </div>
      <div style="width:50%;" class="container">
          <canvas id="myChart" ></canvas>
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
      <!-- <div class="container"><div id="piechart" style="width: 100%; height: 500px;"></div></div> -->
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
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="js/multiselect-dropdown.js"></script>
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
