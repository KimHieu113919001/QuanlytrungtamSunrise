<?php
    include("config.php");
    session_start();
	if(!isset($_SESSION['id_giaovien'])){
        header('Location:../login.php');
       }

    $id_giaovien=$_SESSION['id_giaovien'];
    $sql_tuan="SELECT MAX(id_tuan) AS maxtuan FROM tructuan";
    $res_tuan= mysqli_query($connection,$sql_tuan);
    $row_tuan=mysqli_fetch_array($res_tuan);

    
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
    <!-- modal -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
                    <h3 class="display-4 text-white text-uppercase">Kiểm tra nói</h3>
                    <div class="d-inline-flex text-white">
                        <p class="m-0 text-uppercase"><a class="text-white" href="index_gv.php">Trang chủ</a></p>
                        <i class="fa fa-angle-double-right pt-1 px-3"></i>
                        <p class="m-0 text-uppercase">Kiểm tra nói</p>
                    </div>
                </div>
            </div>
        </div>

<div class="container-fluid">

                
                    <!-- Recent Post -->
                    <div class="mb-5">

   <table class="table table-bordered table-striped table-responsive-stack" style="color:#000; background-color:#fff;" id="tableOne">

        <tr>
            <th style="text-align:center">Học viên</th>
            <th>Lớp đăng kí</th>
            <th>Điểm Reading</th>
            <th>Điểm Writing</th>
            <th>Điểm Listening</th>
            <th>Điểm Speaking</th>
            <th>Trạng thái học viên</th>
            <th style="text-align:center">Lịch hẹn</th>
            <th style="text-align:center">Tùy chọn</th>
        </tr> 
        <?php

           $sql_show= "SELECT * FROM hocvien, chi_tiet_diem_test, capbac WHERE chi_tiet_diem_test.id_cap=capbac.id_cap AND hocvien.id_hocvien=chi_tiet_diem_test.id_hocvien AND chi_tiet_diem_test.trangthaitest='1' AND chi_tiet_diem_test.trangthainoi='0' AND chi_tiet_diem_test.id_giaovien='$id_giaovien'  AND chi_tiet_diem_test.duyet='1'"; 
           $res_show= mysqli_query($connection,$sql_show);
            while($row_show= mysqli_fetch_assoc($res_show)){ 
                if($row_show['ngayhen'] != '0'){
                   
                    $sql_show1= "SELECT * FROM  tructuan, thu, buoi WHERE id_truc='$row_show[ngayhen]' AND tructuan.id_thu=thu.id_thu AND tructuan.id_buoi=buoi.id_buoi"; 
                    $res_show1= mysqli_query($connection,$sql_show1);
                    $row_show1= mysqli_fetch_assoc($res_show1);
                }
                ?>
                <tr>
                    <td style="text-align:center"><?php echo ucwords($row_show['ten_hv']);?></td>
                    <td style="text-align:center"><?php echo ucwords($row_show['ten_cap']);?></td>
                    <td style="text-align:center"><?php echo $row_show['diem_test'];?></td>
                    <td style="text-align:center"><?php echo $row_show['diem_viet'];?></td>
                    <td style="text-align:center"><?php echo $row_show['diem_nghe'];?></td>
                    <td style="text-align:center"><?php echo $row_show['diem_noi'];?></td>
                    
                    <?php if($row_show['trangthai_hv'] =='0'){ ?>
                        <td style="text-align:center">Chưa phản hồi</td>
                    <?php }elseif($row_show['trangthai_hv'] =='1'){ ?>
                        <td style="text-align:center"><i style="color:#00e600;">Đồng ý</i></td>
                    <?php }elseif($row_show['trangthai_hv'] =='2'){ ?>
                        <td style="text-align:center"><i style="color:#ff0000;">Từ chối</i><br>SĐT PH: <?php echo $row_show['sdt_ph']?></td>
                    <?php } ?>
                    
                    <?php if($row_show['ngayhen']=='0'){ ?>
                        <td style="text-align:center">Chưa chọn ngày<br><a type="submit" class="btn buttonsua" href="chonngay.php?id_diemtest=<?php echo $row_show['id_diemtest']?>">Chọn ngày</a></td>
                    <?php }else{ ?>
                        <td style="text-align:center"><?php echo $row_show1['thu'];?>, buổi <?php echo $row_show1['ten_buoi'];?>, <?php  $odate = $row_show1['ngay'];$newDate = date("d/m/Y", strtotime($odate));echo $newDate;?><br><a type="submit" class="btn buttonsua" href="chonngay.php?id_diemtest=<?php echo $row_show['id_diemtest']?>">Chọn ngày</a></td>
                    <?php } ?>
                    <?php if($row_show['trangthainoi']=='0'){ ?>
                        <td style="text-align:center"><a type="submit" class="btn buttonsua" href="capnhatdiem.php?id_diemtest=<?php echo $row_show['id_diemtest']?>&id_cap=<?php echo $row_show['id_cap']?>&id_hocvien=<?php echo $row_show['id_hocvien']?>">Nhập điểm nói</a>
                        <a type="submit" class="btn buttonsua" href="doigiaovien.php?id_diemtest=<?php echo $row_show['id_diemtest']?>">Đổi giáo viên</a></td>
                    <?php }else{ ?>
                        <td style="text-align:center"><a type="submit" class="btn buttonsua disabled" href="capnhatdiem.php?id_diemtest=<?php echo $row_show['id_diemtest']?>&id_cap=<?php echo $row_show['id_cap']?>&id_hocvien=<?php echo $row_show['id_hocvien']?>">Đã cập nhật điểm</a></td>
                    <?php } ?>
                </tr>
            <?php } ?>

   </table>
        </div>
    
</div>


<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
      <h4 class="modal-title" style="color:black;">Đổi giáo viên</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
      <div class="input-group">
      <form class="form-horizontal" action="" method="post" enctype="multipart/form-data"> 
              <select class="form-control" name="id_giaovien" required>
                <option value="">--Chọn giáo viên--</option>
                    <?php  
                        
                        $sql_thu="SELECT * FROM giaovien WHERE gv_ktnoi='1' ORDER BY ten_gv ASC ";
                        $res_thu= mysqli_query($connection,$sql_thu);
                        while($row_thu= mysqli_fetch_assoc($res_thu)){
                            ?>
                            <option font-size:10px; value="<?php echo $row_thu['id_giaovien']?>"><?php echo $row_thu['ten_gv']?></option>
                            <?php
                        
                     } ?> 
                     </select>
              </div> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" name="doigv" data-dismiss="modal">Lưu</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
        </form>
    </div>

  </div>
</div>

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
