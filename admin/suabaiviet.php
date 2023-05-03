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
$sql_sua_bv="SELECT * FROM baiviet WHERE id_baiviet='$_GET[id_baiviet]' LIMIT 1";
$query_sua_bv= mysqli_query($connection,$sql_sua_bv);
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
				<h3>Sửa bài viết</h3>
			</div>
		<div class="module-body">
<?php 
     while ($row_sua_bv= mysqli_fetch_assoc($query_sua_bv)){
?>
<form action="updatebaiviet.php?id_baiviet=<?php echo $_GET['id_baiviet'] ?>" method="POST" enctype="multipart/form-data">
    <div class="control-group">
		<label class="control-label" for="basicinput">Tiêu đề bài viết</label>
			<div class="controls">								
				<input data-title="A tooltip for the input" type="text" name="ten_bv" value="<?php echo $row_sua_bv['ten_bv']?>" data-original-title="" class="span8 tip">
			</div>								
	</div>									

	<div>									
         <span class="input-group-addon a"><b>Nội dung bài viết:</b></span>
                <textarea rows="10" type="text" name="noidung" style="resize: none"><?php echo $row_sua_bv['noidung'] ?></textarea>
    </div>    
                    
    <div class="control-group">                  
        <span class="input-group-addon a"><b>Hình ảnh: </b></span>&ensp;
        <input data-title="A tooltip for the input" type="file" name="anhbia" class="span8 tip">
        <input data-title="A tooltip for the input" type="hidden" name="anhbiacu" class="span8 tip" value="<?php echo $row_sua_bv['anhbia'] ?>"><img src="../admin/images/<?php echo $row_sua_bv['anhbia'] ?>"width="100px" height="auto" alt="None">
	</div>

        <span class="input-group-addon a"><b>Hình ảnh liên quan</b></span>&ensp;<br>
                <td> 
                    <input data-title="A tooltip for the input" type="file" name="hinh1" class="span8 tip">
                    <input data-title="A tooltip for the input" type="hidden" name="hinh1cu" class="span8 tip" value="<?php echo $row_sua_bv['hinh1'] ?>"><img src="../admin/images/<?php echo $row_sua_bv['hinh1'] ?>"width="100px" height="auto" alt="None">
                </td>
                <td>
                    <input data-title="A tooltip for the input" type="file" name="hinh2" class="span8 tip">
                    <input data-title="A tooltip for the input" type="hidden" name="hinh2cu" class="span8 tip" value="<?php echo $row_sua_bv['hinh2'] ?>"><img src="../admin/images/<?php echo $row_sua_bv['hinh2'] ?>"width="100px" height="auto"alt="None">
                <br>
                </td>
                <td>
                    <input data-title="A tooltip for the input" type="file" name="hinh3" class="span8 tip">
                    <input data-title="A tooltip for the input" type="hidden" name="hinh3cu" class="span8 tip" value="<?php echo $row_sua_bv['hinh3'] ?>"><img src="../admin/images/<?php echo $row_sua_bv['hinh3'] ?>"width="100px" height="auto"alt="None">
                <br>
                </td>

	<div class="control-group" style="text-align:center;">
		<div class="controls">
				<button type="submit" class="btn btn-success"  name="suabaiviet">Cập nhật</button>
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
        CKEDITOR.replace('noidung');
    </script>
</body>
</html>