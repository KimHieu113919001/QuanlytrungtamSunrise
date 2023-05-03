<?php
include("config.php");
    
session_start();
if(!isset($_SESSION['username1'])){
    header('Location:admin_login.php');
   }
$sql_sua_ch="SELECT * FROM cau_hoi WHERE id_cauhoi='$_GET[id_cauhoi]' LIMIT 1";
$query_sua_ch= mysqli_query($connection,$sql_sua_ch);
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
								<h3>Thông tin câu hỏi</h3>
							</div>
							<div class="module-body">
                            <?php 
                                while($row_sua_ch= mysqli_fetch_assoc($query_sua_ch)){
                            ?>
                           
                            <form action="" method="post" enctype="multipart/form-data"  >
                                <div class="control-group">
                                        <label class="control-label" for="basicinput">Nội dung câu hỏi</label>
                                            <div class="controls">
                                                <textarea data-title="A tooltip for the input" type="text" name="noidung" class="span8 tip" readonly><?php echo $row_sua_ch['noidung']?> </textarea>
                                            </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="basicinput">Hình ảnh</label>
                                            <div class="controls">
                                            <input data-title="A tooltip for the input" type="hidden" name="hinhanh" class="span8 tip" value="<?php echo $row_sua_ch['hinhanh'] ?>"><img src="../admin/images/<?php echo $row_sua_ch['hinhanh'] ?>"width="100px" alt="None">
                                            </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="basicinput">Đáp án A</label>
                                            <div class="controls">
                                            <input data-title="A tooltip for the input" type="text" name="dapan_A" value="<?php echo $row_sua_ch['dapan_A']?>" data-original-title="" class="span8 tip" readonly>
                                            </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="basicinput">Hình ảnh</label>
                                            <div class="controls">
                                            <input data-title="A tooltip for the input" type="hidden" name="hinhA" class="span8 tip" value="<?php echo $row_sua_ch['hinhA'] ?>"><img src="../admin/images/<?php echo $row_sua_ch['hinhA'] ?>"width="100px" alt="None">
                                            </div>
                                    </div>

                                    <div class="control-group">
                                        <label class="control-label" for="basicinput">Đáp án B</label>
                                            <div class="controls">
                                            <input data-title="A tooltip for the input" type="text" name="dapan_B" value="<?php echo $row_sua_ch['dapan_B']?>" data-original-title="" class="span8 tip" readonly> 
                                            </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="basicinput">Hình ảnh</label>
                                            <div class="controls">
                                            <input data-title="A tooltip for the input" type="hidden" name="hinhB" class="span8 tip" value="<?php echo $row_sua_ch['hinhB'] ?>"><img src="../admin/images/<?php echo $row_sua_ch['hinhB'] ?>"width="100px" alt="None">
                                            </div>
                                    </div>

                                    <div class="control-group">
                                        <label class="control-label" for="basicinput">Đáp án C</label>
                                            <div class="controls">
                                            <input data-title="A tooltip for the input" type="text" name="dapan_C" value="<?php echo $row_sua_ch['dapan_C']?>" data-original-title="" class="span8 tip" readonly> 
                                            </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="basicinput">Hình ảnh</label>
                                            <div class="controls">
                                            <input data-title="A tooltip for the input" type="hidden" name="hinhC" class="span8 tip" value="<?php echo $row_sua_ch['hinhC'] ?>"><img src="../admin/images/<?php echo $row_sua_ch['hinhC'] ?>"width="100px" alt="None">
                                            </div>
                                    </div>

                                    <div class="control-group">
                                        <label class="control-label" for="basicinput">Đáp án D</label>
                                            <div class="controls">
                                            <input data-title="A tooltip for the input" type="text" name="dapan_D" value="<?php echo $row_sua_ch['dapan_D']?>" data-original-title="" class="span8 tip" readonly> 
                                            </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="basicinput">Hình ảnh</label>
                                            <div class="controls">
                                            <input data-title="A tooltip for the input" type="hidden" name="hinhD" class="span8 tip" value="<?php echo $row_sua_ch['hinhD'] ?>"><img src="../admin/images/<?php echo $row_sua_ch['hinhD'] ?>"width="100px" alt="None">
                                            </div>
                                    </div>

                                    ĐÁP ÁN ĐÚNG
                                    <div class="control-group">
                                        
                                            <div class="controls">
                                            <input data-title="A tooltip for the input" type="text" name="dapan_dung" value="<?php echo $row_sua_ch['dapan_dung']?>" data-original-title="" class="span8 tip" readonly> 
                                            </div>
                                    </div>

                                    <div class="control-group ">
                                        <label class="control-label" for="basicinput">Ngày cập nhật</label>
                                            <div class="controls">
                                                <input type="text" id="ngaycapnhat_ch"  class="form-control" name="ngaycapnhat_ch" value="<?php echo date('d/m/Y');?>" readonly>
                                            </div>
                                    </div>

                                    
							</form>
                                    <?php 
                                        }
                                        ?>
							</div>
					</div>
			</div>
</div>

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