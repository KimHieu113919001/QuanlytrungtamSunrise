<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
    if(!isset($_SESSION['username1'])){
      header('Location:admin_login.php');
     } 

    include("config.php");
    $msg= "" ;     

    $sql_audio = "SELECT * FROM cau_hoi_listening WHERE id='$_GET[id]'";
    $res_audio=mysqli_query($connection,$sql_audio);
	$row_audio= mysqli_fetch_assoc($res_audio);

    
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
								<h3>Sửa file nghe</h3>
							</div>
							<div class="module-body">
                    <?php echo $msg;?>
                    <form action="updateaudio.php?id=<?php echo $_GET['id']?>" method="post" enctype="multipart/form-data"  >
                        <div class="control-group">
                                <label class="control-label" for="basicinput" style="font-weight:bold">Hình ảnh</label>
							<div class="controls">
                                <input data-title="A tooltip for the input" type="hidden" name="hinhanhcu" value="<?php echo $row_audio['hinhanh'];?>" class="span8 tip"><img src="../admin/images/<?php echo $row_audio['hinhanh'] ?>"width="100px" alt="None">
                            </div>
                            <br>
							    <label class="control-label" for="basicinput"style="font-weight:bold">Chọn hình mới</label>
							<div class="controls">
								<input data-title="A tooltip for the input" type="file" name="hinhanh" class="span8 tip">
							</div>
                            
                        </div>   
                        <div class="control-group">
                                <label class="control-label" for="basicinput" style="font-weight:bold">File nghe hiện tại</label>
							<div class="controls">
                                <input data-title="A tooltip for the input" type="hidden" name="noidungcu" value="<?php echo $row_audio['noidung'];?>" class="span8 tip"><?php echo $row_audio['noidung'];?>
                            </div>
                            <br>
							    <label class="control-label" for="basicinput"style="font-weight:bold">Chọn file mới</label>
							<div class="controls">
								<input data-title="A tooltip for the input" type="file" name="noidung"  class="span8 tip">
							</div>
                            
                        </div>
					<div class="control-group"style="text-align:center;">
							<div class="controls">
								<button type="submit" class="btn btn-success" name="submit">Sửa</button>
							</div>
					</div>
									</form>
							</div>
						</div>

						
						
					</div><!--/.content-->
				</div>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="//cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
</body>
</html>