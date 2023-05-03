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
    
?>
<?php
$sql_sua_de="SELECT * FROM de_test,capbac WHERE de_test.id_cap=capbac.id_cap AND id_de='$_GET[id_de]' LIMIT 1";
$query_sua_de= mysqli_query($connection,$sql_sua_de);
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
				<h3>Sửa đề</h3>
			</div>
		<div class="module-body">
<?php 
     while ($row= mysqli_fetch_assoc($query_sua_de)){
?>
<form action="../admin/updatede.php?id_de=<?php echo $_GET['id_de'] ?>" method="POST" enctype="multipart/form-data">
    <div class="control-group">
		<label class="control-label" for="basicinput">Tên đề</label>
			<div class="controls">								
				<input data-title="A tooltip for the input" type="text" name="ten_de" value="<?php echo $row['ten_de']?>" data-original-title="" class="span8 tip" required>
			</div>								
	</div>	
    <span class="input-group-addon a"><b>Thời gian làm bài Reading:</b></span>
        <select data-title="A tooltip for the input" data-original-title="" class="span8 tip" name="time_reading" required> 
            <option value="<?php echo $row['time_reading']?>"><?php echo $row['time_reading']?> phút</option>
            <option value="5">5 phút</option>
            <option value="10">10 phút</option>
            <option value="15">15 phút</option>
            <option value="20">20 phút</option>
            <option value="25">25 phút</option>
            <option value="30">30 phút</option>
            <option value="35">35 phút</option>
            <option value="40">40 phút</option>
            <option value="45">45 phút</option>
        </select>
        <br>
        <span class="input-group-addon a"><b>Thời gian làm bài Writing:</b></span>
        <select data-title="A tooltip for the input" data-original-title="" class="span8 tip" name="time_writing" required> 
            <option value="<?php echo $row['time_writing']?>"><?php echo $row['time_writing']?> phút</option>
            <option value="5">5 phút</option>
            <option value="10">10 phút</option>
            <option value="15">15 phút</option>
            <option value="20">20 phút</option>
            <option value="25">25 phút</option>
            <option value="30">30 phút</option>
            <option value="35">35 phút</option>
            <option value="40">40 phút</option>
            <option value="45">45 phút</option>
        </select>
        <br>
        <span class="input-group-addon a"><b>Thời gian làm bài Listening:</b></span>
        <select data-title="A tooltip for the input" data-original-title="" class="span8 tip" name="time_listening" required> 
            <option value="<?php echo $row['time_listening']?>"><?php echo $row['time_listening']?> phút</option>
            <option value="5">5 phút</option>
            <option value="10">10 phút</option>
            <option value="15">15 phút</option>
            <option value="20">20 phút</option>
            <option value="25">25 phút</option>
            <option value="30">30 phút</option>
            <option value="35">35 phút</option>
            <option value="40">40 phút</option>
            <option value="45">45 phút</option>
        </select>
    <div class="control-group">
		<label class="control-label" for="basicinput">Ngày cập nhật</label>
			<div class="controls">
                <input type="text" id="ngaycapnhat"  class="form-control" name="ngaycapnhat" value="<?php echo date('d/m/Y');?>" readonly>
			</div>
	</div>
    <span class="input-group-addon a"><b>Thuộc cấp bậc:</b></span>
        <select data-title="A tooltip for the input" data-original-title="" class="span8 tip" name="id_cap" required> 
            <option value="<?php echo $row['id_cap']?>"><?php echo $row['ten_cap']?></option>
            <?php 
            $sql_cb="SELECT * FROM capbac WHERE testdauvao='1' ORDER BY ten_cap ASC";
            $query_cb= mysqli_query($connection,$sql_cb);
            while($row_cb= mysqli_fetch_assoc($query_cb)){
            ?>
                <option value="<?php echo $row_cb['id_cap']?>"><?php echo $row_cb['ten_cap']?></option>
            <?php
            }
            ?>
        </select>    

	<div class="control-group" style="text-align:center;">
		<div class="controls">
				<button type="submit" class="btn btn-success"  name="suade">Cập nhật</button>
		</div>
	</div>
</form>
<?php 
    }
?>
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
        CKEDITOR.replace('mota');
    </script>
</body>
</html>