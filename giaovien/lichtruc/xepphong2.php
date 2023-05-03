<?php 
    include("config.php");
    $id_tuan = $_GET['id_tuan'];
    $id_thu = $_GET['id_thu'];
    $id_phong = $_GET['id_phong'];
    session_start();
    if(!isset($_SESSION['id_giaovien'])){
      header('Location:../../login.php');
     }



    $sql2= "SELECT * FROM lichhoc, danhsachlop WHERE lichhoc.id_thu='$id_thu' AND lichhoc.id_phong='$id_phong' AND lichhoc.id_tuan='$id_tuan' AND lichhoc.id_buoi='2' AND lichhoc.id_lop=danhsachlop.id_danhsach"; 
    $res2= mysqli_query($connection,$sql2);
    $row2=mysqli_fetch_assoc($res2);
    if($row2 == NULL){
     $row2['ma_danhsach'] = '';
    }

    $sql4= "SELECT * FROM lichhoc, danhsachlop WHERE lichhoc.id_thu='$id_thu' AND lichhoc.id_phong='$id_phong' AND lichhoc.id_tuan='$id_tuan' AND lichhoc.id_buoi='4' AND lichhoc.id_lop=danhsachlop.id_danhsach"; 
    $res4= mysqli_query($connection,$sql4);
    $row4=mysqli_fetch_assoc($res4);
    if($row4 == NULL){
     $row4['ma_danhsach'] = '';
    }

     $sql_thu= "SELECT * FROM thu WHERE id_thu='$id_thu'"; 
     $res_thu= mysqli_query($connection,$sql_thu);
     $row_thu= mysqli_fetch_assoc($res_thu);


     $sql_phong= "SELECT * FROM phong WHERE id_phong='$id_phong'"; 
     $res_phong= mysqli_query($connection,$sql_phong);
     $row_phong= mysqli_fetch_assoc($res_phong);

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

     $msg="";
     if(isset($_POST['luu'])){
          $id_lop=$_POST['lop'];
          $id_buoi=$_POST['id_buoi'];
          $id_gio=$_POST['id_gio'];
          $id_tuan=$_GET['id_tuan'];
          $sql9="SELECT * FROM danhsachlop WHERE id_danhsach='$id_lop'";
          $res9= mysqli_query($connection,$sql9);
          $row9= mysqli_fetch_assoc($res9);
          $id_giaovien= $row9['id_giaovien'];

            if($_POST['lop'] != 0) { //khác 0
            
                $sql_check2="SELECT * FROM lichhoc WHERE id_tuan='$id_tuan' AND id_buoi='$id_buoi' AND id_thu='$id_thu' AND id_phong='$id_phong' AND id_gio='$id_gio'";
                $res_check2= mysqli_query($connection,$sql_check2);
                $row_check2= mysqli_fetch_assoc($res_check2);

                if($row_check2 != NULL){ //nếu có lớp rồi thì update
                  //check nếu lớp chọn có giáo viên trùng với buổi đã có gv đó hay không
                  $sql_check3="SELECT * FROM lichhoc WHERE id_giaovien='$id_giaovien'AND id_tuan='$id_tuan' AND id_buoi='$id_buoi' AND id_thu='$id_thu' AND id_gio='$id_gio' ";
                  $res_check3= mysqli_query($connection,$sql_check3);
                  $row_check3= mysqli_fetch_assoc($res_check3);

                    if($row_check3 == NULL){ //nếu không có thì update lớp đã chọn vào lớp cũ trc đó
                      $insert_trua="UPDATE lichhoc SET id_lop='$id_lop', id_giaovien='$id_giaovien' WHERE id_tuan='$id_tuan' AND id_buoi='$id_buoi' AND id_thu='$id_thu' AND id_phong='$id_phong' AND id_gio='$id_gio'";
                      $res_trua= mysqli_query($connection,$insert_trua);
                      
                      $msg="<script language='javascript'>
                      swal(
                          'Thành công!',
                          'Đã cập nhật phòng!',
                          'success'      
                          );
                          var timer = setTimeout(function() {
                            window.location=('xepphong2.php?id_phong=$id_phong&id_tuan=$id_tuan&id_thu=$id_thu')
                        }, 2000);
                    </script>"; 
                      }else{
                        $msg="<script language='javascript'>
                        swal(
                            'Thất bại!',
                            'Một giờ không thể có 2 phòng cùng 1 giáo viên!',
                            'error'      
                            );
                            var timer = setTimeout(function() {
                              window.location=('xepphong2.php?id_phong=$id_phong&id_tuan=$id_tuan&id_thu=$id_thu')
                          }, 2000);
                      </script>"; 
                      }
                }else{ //nếu chưa có lớp thì insert 
                    
                    $sql_check3="SELECT * FROM lichhoc WHERE id_giaovien='$id_giaovien'AND id_tuan='$id_tuan' AND id_buoi='$id_buoi' AND id_thu='$id_thu' AND id_gio='$id_gio' ";
                    $res_check3= mysqli_query($connection,$sql_check3);
                    $row_check3= mysqli_fetch_assoc($res_check3);
                    if($row_check3 == NULL){
                    $insert_trua="INSERT INTO lichhoc (`id_lichhoc`,`id_phong`,`id_tuan`,`id_thu`,`id_buoi`,`id_gio`,`id_lop`,`id_giaovien`) VALUES('','$id_phong','$id_tuan','$id_thu','$id_buoi','$id_gio','$id_lop','$id_giaovien')";
                    $res_trua= mysqli_query($connection,$insert_trua);
                    $msg="<script language='javascript'>
                    swal(
                        'Thành công!',
                        'Đã cập nhật phòng!',
                        'success'      
                        );
                        var timer = setTimeout(function() {
                          window.location=('xepphong2.php?id_phong=$id_phong&id_tuan=$id_tuan&id_thu=$id_thu')
                      }, 2000);
                  </script>";  
                      }else{
                        $msg="<script language='javascript'>
                        swal(
                            'Thất bại!',
                            'Một giờ không thể có 2 phòng cùng 1 giáo viên!',
                            'error'      
                            );
                            var timer = setTimeout(function() {
                              window.location=('xepphong2.php?id_phong=$id_phong&id_tuan=$id_tuan&id_thu=$id_thu')
                          }, 2000);
                      </script>"; 
                      }
                }
            }else{ //bằng trống thì xóa
            $sql_check21="SELECT * FROM lichhoc WHERE id_tuan='$id_tuan' AND id_buoi='$id_buoi' AND id_thu='$id_thu' AND id_phong='$id_phong' AND id_gio='$id_gio'";
            $res_check21= mysqli_query($connection,$sql_check21);
            $row_check21= mysqli_fetch_assoc($res_check21);
                if($row_check21 != NULL){
                  
                  $delete_trua="DELETE FROM lichhoc WHERE id_tuan='$id_tuan' AND id_buoi='$id_buoi' AND id_thu='$id_thu' AND id_phong='$id_phong' AND id_gio='$id_gio' AND id_lop='$row_check21[id_lop]'";
                  $delete_trua= mysqli_query($connection,$delete_trua);
                  $msg="<script language='javascript'>
                  swal(
                      'Thành công!',
                      'Đã cập nhật phòng!',
                      'success'      
                      );
                      var timer = setTimeout(function() {
                        window.location=('xepphong2.php?id_phong=$id_phong&id_tuan=$id_tuan&id_thu=$id_thu')
                    }, 2000);
                </script>";
                }
            }

        

        // if($_POST['buoitrua'] != '0') {
        // //Buổi trưa
        // $sql_check2="SELECT * FROM lichhoc WHERE id_tuan='$id_tuan' AND id_buoi='$id_buoi_trua' AND id_thu='$id_thu' AND id_phong='$id_phong'";
        // $res_check2= mysqli_query($connection,$sql_check2);
        // $row_check2= mysqli_fetch_assoc($res_check2);
        //     if($row_check2 != NULL){
        //       $insert_trua="INSERT INTO lichhoc (`id_lichhoc`,`id_phong`,`id_tuan`,`id_thu`,`id_buoi`,`id_gio`,`id_lop`) VALUES('','$id_phong','$id_tuan','$id_thu','$id_buoi','$id_danhsach_trua')";
        //       $res_trua= mysqli_query($connection,$insert_trua);
        //       $delete_trua="DELETE FROM lichhoc WHERE id_tuan='$id_tuan' AND id_buoi='$id_buoi_trua' AND id_thu='$id_thu' AND id_phong='$id_phong' AND id_lop='$row_check2[id_lop]'";
        //       $delete_trua= mysqli_query($connection,$delete_trua);

        //     }else{ 
        //       $insert_trua="INSERT INTO lichhoc (`id_lichhoc`,`id_phong`,`id_tuan`,`id_thu`,`id_buoi`,`id_gio`,`id_lop`) VALUES('','$id_phong','$id_tuan','$id_thu','$id_buoi','$id_danhsach_trua')";
        //       $res_trua= mysqli_query($connection,$insert_trua);
        //     }
        // }

        // if($_POST['buoitoi'] != '0'){
        // //Buổi tối
        // $sql_check3="SELECT * FROM lichhoc WHERE id_tuan='$id_tuan' AND id_buoi='$id_buoi_toi' AND id_thu='$id_thu' AND id_phong='$id_phong'";
        // $res_check3= mysqli_query($connection,$sql_check3);
        // $row_check3= mysqli_fetch_assoc($res_check3);
        //     if($row_check3 != NULL){
        //       $insert_toi="INSERT INTO lichhoc (`id_lichhoc`,`id_phong`,`id_tuan`,`id_thu`,`id_buoi`,`id_gio`,`id_lop`) VALUES('','$id_phong','$id_tuan','$id_thu','$id_buoi','$id_danhsach_toi')";
        //       $res_toi= mysqli_query($connection,$insert_toi);
        //       $delete_toi="DELETE FROM lichhoc WHERE id_tuan='$id_tuan' AND id_buoi='$id_buoi_toi' AND id_thu='$id_thu' AND id_phong='$id_phong' AND id_lop='$row_check3[id_lop]'";
        //       $delete_toi= mysqli_query($connection,$delete_toi);

        //     }else{ 
        //       $insert_toi="INSERT INTO lichhoc (`id_lichhoc`,`id_phong`,`id_tuan`,`id_thu`,`id_buoi`,`id_gio`,`id_lop`) VALUES('','$id_phong','$id_tuan','$id_thu','$id_buoi','$id_danhsach_toi')";
        //       $res_toi= mysqli_query($connection,$insert_toi);
        //     }
        // }
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
      <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
      <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

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

        <input type="hidden" id="id_tuan" value="<?php echo $id_tuan;?>" class="span8 tip">

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
                <div class="container">
                    <div>
                        <h4 style="color:#000;text-align:center;background-color:#e6005c; color:#fff;">Thêm lớp: <?php echo $row_phong['ten_phong'];?> - <?php echo $row_thu['thu'];?></h4>
                    </div>
                </div>    
        </div>
    </div>

    

<table class="table table-bordered table-striped table-responsive-stack" style="color:#000; background-color:#fff;" id="table">
<tr>
    <th style="width:8%;">Buổi</th>
    <th style="width:8%;">Giờ</th>
    <th style="width:8%;">
        <?php echo ucwords($row_phong['ten_phong']); ?>
    </th>
        <th style="width:8%;">Tùy chọn</th>
    </tr> 

    <?php
        $sql_buoi= "SELECT * FROM gio,buoi WHERE gio.id_buoi = buoi.id_buoi "; 
        $res_buoi= mysqli_query($connection,$sql_buoi);
          while($row_buoi=mysqli_fetch_assoc($res_buoi)){  
            $sql1= "SELECT * FROM lichhoc, danhsachlop ,gio WHERE lichhoc.id_thu='$id_thu' AND lichhoc.id_phong='$id_phong' AND lichhoc.id_tuan='$id_tuan' AND lichhoc.id_buoi='$row_buoi[id_buoi]' AND lichhoc.id_gio='$row_buoi[id_gio]'AND gio.id_buoi='$row_buoi[id_buoi]' AND lichhoc.id_lop=danhsachlop.id_danhsach"; 
            $res1= mysqli_query($connection,$sql1);
            $row1=mysqli_fetch_assoc($res1);
            if($row1 == NULL){
             $row1['ma_danhsach'] = '';
             $row1['id_buoi'] = '';
           }
        ?> 
<?php echo $msg;?> 
   
   <form action="" method="POST" enctype="multipart/form-data" >
   <tr>
            <th style="text-align:center;" ><input name="id_buoi" hidden value="<?php echo $row_buoi['id_buoi']; ?>"><?php echo $row_buoi['ten_buoi']; ?></th>
            <th style="text-align:center;" ><input name="id_gio"  hidden value="<?php echo $row_buoi['id_gio']; ?>"><?php echo $row_buoi['gio']; ?></th>
            <td>
            <?php if($row1['id_buoi'] == '1'){ ?>
                <p title="" id="<?php echo $row1['id_lichhoc'];?>" class="form-control" style="background-color:#80bfff;" ><?php echo $row1['ma_danhsach'];?></p>
            <br>
            <?php }elseif($row1['id_buoi'] == '2'){ ?>
                <p title="" id="<?php echo $row1['id_lichhoc'];?>" class="form-control" style="background-color:#cccc00;" ><?php echo $row1['ma_danhsach'];?></p>
            <br>
            <?php }elseif($row1['id_buoi'] == '4'){ ?>
                <p title="" id="<?php echo $row1['id_lichhoc'];?>" class="form-control" style="background-color:#666699; color:white;" ><?php echo $row1['ma_danhsach'];?></p>
            <br>
            <?php } ?>
            <select class="form-control" name="lop" required>
                  <option value="">--Chọn--</option>
                  <option value="0">Trống</option>
                    <?php 
                      $sql_ds="SELECT * FROM danhsachlop WHERE tt_hoatdong='0' AND ma_danhsach!='$row1[ma_danhsach]'";
                      $res_ds= mysqli_query($connection,$sql_ds);
                      if($res_ds > 0){ 
                        while($row_ds= mysqli_fetch_assoc($res_ds)){
                          ?>
                        <option value="<?php echo $row_ds['id_danhsach'];?>"><?php echo $row_ds['ma_danhsach'];?></option>
                          <?php }
                      }else{ ?>
                        <option value="0">Không có dữ liệu</option>
                        <?php
                      } 
                        ?>
                    </select>
            </td>
            <td style="text-align:center;" class="luu"><button type="submit" class="btn buttonsua" name="luu">Lưu</button></td>
        </tr>
        </form>
    <?php }  ?>

</table>
<?php
    include("giaodien/footer.php");
 ?>
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

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
