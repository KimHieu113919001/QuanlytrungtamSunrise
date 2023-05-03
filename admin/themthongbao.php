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


    if(isset($_POST['submit'])){
        
        
        $tieude=$_POST['tieude'];
        $ngaydang=$_POST['ngaydang'];
        $noidung_tb=$_POST['noidung_tb'];
        
        $insert_query="INSERT INTO `thongbao`(`id_thongbao`, `tieude`, `noidung_tb`,`ngaydang`) VALUES ('','$tieude','$noidung_tb','$ngaydang')";
        
        $res= mysqli_query($connection,$insert_query);
            
        if($res=true){
          $msg='<script type="text/javascript">
          $(document).ready(function() {
              swal({
                  title: "Thành công!",
                  text: "Đã thêm thông báo mới!",
                  icon: "success",
                  button: "Ok",
                  
              });
          });
      </script>';
       
        }
        else{
            die('unsuccessful' .mysqli_error($connection));
        }
        
        
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
								<h3>Thêm thông báo</h3>
							</div>
							<div class="module-body">
              <?php echo $msg;?>
                <form action="" method="post" enctype="multipart/form-data"  >
                    <div class="control-group">
						<label class="control-label" for="basicinput">Tiêu đề thông báo</label>
						<div class="controls">
							<input data-title="A tooltip for the input" type="text" name="tieude" placeholder="Nhập tiêu đề" required data-original-title="" class="span8 tip">
						</div>
					</div>
                    
                    <div class="control-group">
						<label class="control-label" for="basicinput">Ngày đăng</label>
						<div class="controls">
                            <input type="text" id="ngaydang"  class="form-control" name="ngaydang" value="<?php echo date('d/m/Y');?>" readonly>
						</div>
					</div>

                    <div class="control-group">
						<label class="control-label" for="basicinput">Nội dung thông báo</label>
						<div class="controls">
                            <textarea rows="10" type="text" name="noidung_tb" style="resize: none" ></textarea>  
						</div>
					</div>

					<div class="control-group"style="text-align:center;">
						<div class="controls">
							<button type="submit" class="btn btn-success"  name="submit">Thêm mới</button>
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
	<script>
	      CKEDITOR.replace('thongtinlienhe');
        CKEDITOR.replace('tomtat');
        CKEDITOR.replace('noidung_tb');
    </script>
</body>
</html>