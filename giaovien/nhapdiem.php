<?php
    include("config.php");
    session_start();
	if(!isset($_SESSION['id_giaovien'])){
        header('Location:../login.php');
       }
  
    $id_giaovien=$_SESSION['id_giaovien'];
    $id_danhsach=$_GET['id_danhsach']; 

    $sql_ct = "SELECT chi_tiet_hoc.id_hocvien, hocvien.ten_hv FROM chi_tiet_hoc, hocvien WHERE chi_tiet_hoc.id_hocvien=hocvien.id_hocvien AND chi_tiet_hoc.id_danhsach='$_GET[id_danhsach]'";
    $res_ct=mysqli_query($connection,$sql_ct); 

    
    $sql_ct1="SELECT COUNT(id_hocvien) AS soluong FROM `chi_tiet_hoc` WHERE id_danhsach='$_GET[id_danhsach]'";
    $res_ct1=mysqli_query($connection,$sql_ct1); 
    $row_ct1= mysqli_fetch_assoc($res_ct1);

    $msg="";
	$sql_ds = "SELECT * FROM danhsachlop WHERE danhsachlop.id_danhsach='$_GET[id_danhsach]'";
    $res_ds=mysqli_query($connection,$sql_ds);
	$row_ds=mysqli_fetch_assoc($res_ds);

    if(isset($_POST['luudiem'])){
        $n = $_POST['n'];
        for($dem=1;$dem<=$n;$dem++){
            $diemtong= $_POST[$dem.'diem'];
            $nhanxet= $_POST[$dem.'nhanxet'];
            $nhanqua= $_POST[$dem.'nhanqua'];
            $id_hocvien = $_POST[$dem.'id_hocvien'];
            $trangthaidiem='1';
            
        if($diemtong !=""){
            if($diemtong >= 0 && $diemtong <= 10){ //ràng buộc nhập điểm
                if($diemtong >= 8.5 && $diemtong <= 10){ 
                  $xeploai='A';
                }elseif($diemtong >= 7 && $diemtong <= 8.4){
                  $xeploai='B';
                }elseif($diemtong >= 5.5 && $diemtong <= 6.9){
                  $xeploai='C';
                }elseif($diemtong >= 4.0 && $diemtong <= 5.4){
                  $xeploai='D';
                }

                $sql_check7="SELECT * FROM diemso WHERE id_danhsach='$_GET[id_danhsach]'AND id_hocvien='$id_hocvien'";
                $res_check7=mysqli_query($connection,$sql_check7);
                $row_check7= mysqli_fetch_assoc($res_check7);

                
                $sql_check_qua="SELECT * FROM qua WHERE id_qua='$nhanqua'";
                $res_check_qua=mysqli_query($connection,$sql_check_qua);
                $row_check_qua= mysqli_fetch_assoc($res_check_qua);

                $soluong = $row_check_qua['soluong'];
                $soluongmoi = $soluong - 1;

                if($row_check7 == null){ //chưa có thì insert
                $insert_query="INSERT INTO `diemso`(`id_diem`,`id_danhsach`,`id_hocvien`,`diemtong`,`xeploai`,`nhanxet`,`nhanqua`,`trangthaidiem`) VALUES ('','$id_danhsach','$id_hocvien','$diemtong','$xeploai','$nhanxet','$nhanqua','$trangthaidiem')";
                $res= mysqli_query($connection,$insert_query);

                $update_qua="UPDATE qua SET soluong='$soluongmoi' WHERE id_qua='$nhanqua'";
                $res_update_qua= mysqli_query($connection,$update_qua);
                    if($res==true){
                        $msg="<script language='javascript'>
                            swal(
                                'Thành công!',
                                'Đã cập nhật điểm!',
                                'success'      
                                );
                                var timer = setTimeout(function() {
                                    window.location=('xemlop.php?id_danhsach=$id_danhsach')
                                }, 2000);
                            </script>";
                    }
                    else{
                        $msg='<script type="text/javascript">
                        $(document).ready(function() {
                                swal("Không thể cập nhật điểm!", {
                                        icon: "error",
                                    });
                                
                            });
                        </script>'; 
                    }
                    
                    $res4="UPDATE `chi_tiet_hoc` SET trangthaidiem ='$trangthaidiem' WHERE id_hocvien='$id_hocvien'";
                    mysqli_query($connection,$res4);
                }else{ //có rồi thì update
                    $update_query="UPDATE diemso SET diemtong='$diemtong', nhanxet='$nhanxet', xeploai='$xeploai', nhanqua='$nhanqua' WHERE id_hocvien='$id_hocvien' AND id_danhsach='$_GET[id_danhsach]'";
                    $res_update= mysqli_query($connection,$update_query);

                    $update_qua="UPDATE qua SET soluong='$soluongmoi' WHERE id_qua='$nhanqua'";
                    $res_update_qua= mysqli_query($connection,$update_qua);
                    
                    $msg="<script language='javascript'>
                      swal(
                          'Thành công!',
                          'Đã cập nhật điểm!',
                          'success'      
                          );
                          var timer = setTimeout(function() {
                            window.location=('xemlop.php?id_danhsach=$id_danhsach')
                        }, 2000);
                    </script>";
                }
            }else{
                $msg='<script type="text/javascript">
                $(document).ready(function() {
                        swal("Điểm nhập không phù hợp!", {
                                icon: "error",
                            });
                        
                    });
                </script>'; 
            } //ràng buộc nhập điểm
        }
        } //for
       
    } //isset 
    
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
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
   
  <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<style>
body{

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
                    <h3 class="display-4 text-white text-uppercase">Lớp <?php echo $row_ds['ma_danhsach']?></h3>
                    <div class="d-inline-flex text-white">
                        <p class="m-0 text-uppercase"><a class="text-white" href="index_gv.php">Trang chủ</a></p>
                        <i class="fa fa-angle-double-right pt-1 px-3"></i>
                        <p class="m-0 text-uppercase">Lớp đang dạy</p>
                    </div>
                </div>
            </div>
        </div>

<div class="container-fluid">
     <div class=" container  mt-4 ">
        <div class="mb-5">
    <?php echo $msg;?>
        <form class="form-horizontal" action="" method="post" enctype="multipart/form-data"> 
        <table class="table table-bordered table-striped table-responsive-stack" style="color:#000; background-color:#fff;" id="tableOne">
            <thead>
				<tr>
					<th style="text-align:center;">STT</th>
					<th style="text-align:center;">Tên học viên</th>
					<th style="text-align:center;width:20%;">Điểm</th>						
					<th style="text-align:center;width:30%;">Nhận xét</th>						
					<th style="text-align:center;width:20%;">Nhận quà</th>						
				</tr>
			</thead>
            <?php 
            $n=$row_ct1['soluong'];
            
            for($dem=1;$dem<=$n;$dem++){ 
                if($row_ct=mysqli_fetch_assoc($res_ct)){ ?>
                <tbody>
                <tr class="odd gradeX">
                <div class="input-group">
                <td style="text-align:center;"><?php echo $dem;?></td>
                    <input class="form-control" type="hidden" readonly name="<?php echo $dem.'id_hocvien';?>" value="<?php echo $row_ct['id_hocvien'];?>">
                <td><?php echo $row_ct['ten_hv'];?></td>
                    <input class="form-control" type="hidden" name="n" value="<?php echo $n;?>">
                <td><input class="form-control" type="number" name="<?php echo $dem.'diem';?>" value="" ></td>
                <td><textarea class="form-control" type="text" name="<?php echo $dem.'nhanxet';?>" value=""></textarea></td>
                <td>
                <select class="form-control" name="<?php echo $dem.'nhanqua';?>" >
                    <option value="">--Chọn quà--</option>
                        <?php  
                            $sql_dem="SELECT COUNT(id_hocvien) AS soluong FROM chi_tiet_hoc WHERE id_danhsach='$id_danhsach'";
                            $res_dem= mysqli_query($connection,$sql_dem);
                            $row_dem= mysqli_fetch_assoc($res_dem);

                            $sql_qua="SELECT * FROM qua WHERE soluong != '0' AND soluong >= '$row_dem[soluong]' ORDER BY ten_qua ASC ";
                            $res_qua= mysqli_query($connection,$sql_qua);
                            while($row_qua= mysqli_fetch_assoc($res_qua)){
                                ?>
                                <option font-size:10px; value="<?php echo $row_qua['id_qua']?>"><?php echo $row_qua['ten_qua']?></option>
                                <?php
                            
                        } ?> 
                     </select>
                </td>
                </div>
                </tr>
                </tbody>
                <br>
            <?php } } ?>
            <div style="text-align:center;">
                <button type="submit" name="luudiem" class="btn buttonthem" >Lưu</button>
            </div>
            </table>
            
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
