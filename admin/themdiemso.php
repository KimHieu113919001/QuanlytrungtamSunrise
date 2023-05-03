<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
    if(!isset($_SESSION['username1'])){
        header('Location:admin_login.php');
       }
     
    $msg= "" ;     

    include("config.php");
    $sql2 = "SELECT * FROM hocvien WHERE id_hocvien='$_GET[id_hocvien]'";
    $res2=mysqli_query($connection,$sql2);
	$row2=mysqli_fetch_assoc($res2);

    $sql1 = "SELECT * FROM danhsachlop WHERE danhsachlop.id_danhsach='$_GET[id_danhsach]'";
    $res1=mysqli_query($connection,$sql1);
	$row1=mysqli_fetch_assoc($res1);
    if(isset($_POST['submit'])){
        $id_hocvien=$_GET['id_hocvien'];
        $id_danhsach=$_GET['id_danhsach'];
        $diemnghe=$_POST['diemnghe'];
        $diemnoi=$_POST['diemnoi'];
        $diemdoc=$_POST['diemdoc'];
        $diemviet=$_POST['diemviet'];
        $diemtong=$_POST['diemtong'];
        $xeploai=$_POST['xeploai'];
        $nhanxet=$_POST['nhanxet'];
        $nhanqua=$_POST['nhanqua'];
        $trangthaidiem='1';
        
        $insert_query="INSERT INTO `diemso`(`id_diem`,`id_danhsach`,`id_hocvien`,`diemnghe`,`diemnoi`,`diemdoc`,`diemviet`,`diemtong`,`xeploai`,`nhanxet`,`nhanqua`) VALUES ('','$id_danhsach','$id_hocvien','$diemnghe','$diemnoi','$diemdoc','$diemviet','$diemtong','$xeploai','$nhanxet','$nhanqua')";
        $res= mysqli_query($connection,$insert_query);

        
        if($res==true){
          $msg='<script type="text/javascript">
          $(document).ready(function() {
              swal({
                  title: "Thành công!",
                  text: "Đã cập nhật điểm!",
                  icon: "success",
                  button: "Ok",
                  timer: 2000
              });
          });
      </script>'; 
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
        
        $res4="UPDATE `chi_tiet_hoc` SET trangthaidiem ='$trangthaidiem' WHERE id_hocvien='$_GET[id_hocvien]'";
        mysqli_query($connection,$res4);
    }
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
            <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
								<h3>Thêm điểm học viên:<color style="color: #ccff66;"> <?php echo ucwords($row2['ten_hv']);?></color></h3>
							</div>
							<div class="module-body">
                        <?php echo $msg;?>
                    <form action="" method="post" enctype="multipart/form-data"  >
                                        <div class="control-group">
											<label class="control-label" for="basicinput">ID danh sách</label>
											<div class="controls">
												<input data-title="A tooltip for the input" type="text" name="id_danhsach" value="<?php echo $row1['id_danhsach'];?>" readonly data-original-title="" class="span8 tip">
											</div>
										</div>

                                        <div class="control-group">
											<label class="control-label" for="basicinput">Điểm nghe (Listening)</label>
											<div class="controls">
												<input data-title="A tooltip for the input" type="text" name="diemnghe"  data-original-title="" class="span8 tip">
											</div>
										</div>

                                        <div class="control-group">
											<label class="control-label" for="basicinput">Điểm nói (Speaking)</label>
											<div class="controls">
												<input data-title="A tooltip for the input" type="text" name="diemnoi"  data-original-title="" class="span8 tip">
											</div>
										</div>

                                        <div class="control-group">
											<label class="control-label" for="basicinput">Điểm đọc (Reading)</label>
											<div class="controls">
												<input data-title="A tooltip for the input" type="text" name="diemdoc"   data-original-title="" class="span8 tip">
											</div>
										</div>

                                        <div class="control-group">
											<label class="control-label" for="basicinput">Điểm viết (Writing)</label>
											<div class="controls">
												<input data-title="A tooltip for the input" type="text" name="diemviet"  data-original-title="" class="span8 tip">
											</div>
										</div>

                                        <div class="control-group">
											<label class="control-label" for="basicinput">Điểm tổng</label>
											<div class="controls">
												<input data-title="A tooltip for the input" type="text" name="diemtong" required data-original-title="" class="span8 tip">
											</div>
										</div>

                                        <div class="control-group">
											<label class="control-label" for="basicinput">Xếp loại</label>
											<div class="controls">
												<input data-title="A tooltip for the input" type="text" name="xeploai"  data-original-title="" class="span8 tip">
											</div>
										</div>

                                        <div class="control-group">
											<label class="control-label" for="basicinput">Nhận xét</label>
											<div class="controls">
												<input data-title="A tooltip for the input" type="text" name="nhanxet"  data-original-title="" class="span8 tip">
											</div>
										</div>

                                        <div class="control-group">
											<label class="control-label" for="basicinput">Nhận quà</label>
											<div class="controls">
												<textarea data-title="A tooltip for the input" type="text" name="nhanqua"  data-original-title="" class="span8 tip"></textarea>
											</div>
										</div>

                                        <div class="control-group" style="text-align:center;">
											<div class="controls">
												<button type="submit" class="btn btn-success" name="submit">Cập nhật</button>
											</div>
										</div>
                    </form>
							</div>
						</div>

						
						
					</div>
				</div>
                <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="//cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
	<script>
	      CKEDITOR.replace('thongtinlienhe');
        CKEDITOR.replace('tomtat');
        CKEDITOR.replace('mota');
    </script>
</body>
</html>