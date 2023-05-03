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

     $id_namhoc=$_GET['id_namhoc'];
    if(isset($_POST['submit'])){
        $update_nam="UPDATE namhoc SET trangthai='1' WHERE id_namhoc='$id_namhoc'";
        mysqli_query($connection,$update_nam);
        $ngaybatdau=$_POST['ngaybatdau'];
        $ten_tuan1="Tuần".' '."1";
        $insert_query1="INSERT INTO `tuan`(`id_tuan`,`ten_tuan`,`ngaybatdau`,`id_namhoc`) VALUES ('','$ten_tuan1','$ngaybatdau','$id_namhoc')";
        $res_query1= mysqli_query($connection,$insert_query1);
        $i=1;
        while($i <= 51){
          $i++;
          $ten_tuan="Tuần".' '.$i;
          $ngay1 = strtotime(date("Y-m-d", strtotime($ngaybatdau)) . " +1 week");
          $ngaybatdau = strftime("%Y-%m-%d", $ngay1);
          $insert_query="INSERT INTO `tuan`(`id_tuan`,`ten_tuan`,`ngaybatdau`,`id_namhoc`) VALUES ('','$ten_tuan','$ngaybatdau','$id_namhoc')";
          $res_query= mysqli_query($connection,$insert_query);
        }
  
        
  
        
        // if($res_query==true){
        //   $msg="<script language='javascript'>
        //             swal(
        //                  'Thành công!',
        //                  'Đã thêm tuần mới!',
        //                  'success'      
        //                  );
        //                  var timer = setTimeout(function() {
        //                   window.location=('sualichdemo.php')
        //               }, 2000);
        //           </script>"; 
        // } 
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
								<h3>Thêm tuần</h3>
							</div>
							<div class="module-body">
              <?php echo $msg;?>
                <form action="" method="post" enctype="multipart/form-data"  >
                    <div class="control-group">
						<label class="control-label" for="basicinput">Ngày Thứ 2 tuần đầu tiên</label>
						<div class="controls">
							<input data-title="A tooltip for the input" type="date" name="ngaybatdau" placeholder="Nhập ngày bắt đầu" required data-original-title="" class="span8 tip">
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