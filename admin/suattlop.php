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
$sql_sua_ttlop="SELECT * FROM capbac WHERE id_cap='$_GET[id_cap]' LIMIT 1";
$query_sua_ttlop= mysqli_query($connection,$sql_sua_ttlop);
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
								<h3>Sửa thông tin cấp bậc</h3>
							</div>
							<div class="module-body">
                            <?php 
                                while ($row= mysqli_fetch_assoc($query_sua_ttlop)){
                            ?>
                <form action="updatettlop.php?id_cap=<?php echo $_GET['id_cap'] ?>" method="POST" enctype="multipart/form-data">
                      <div class="control-group">
                    <label class="control-label" for="basicinput">Thuộc khóa học</label>
                    <select data-title="A tooltip for the input" data-original-title="" class="span8 tip" id="id_khoahoc" name="id_khoahoc" >
                      <?php 
                      $sql_kh="SELECT * FROM khoahoc ORDER BY id_khoahoc ASC";
                      $query_kh= mysqli_query($connection,$sql_kh);
                      while($row_kh= mysqli_fetch_assoc($query_kh)){
                        if($row_kh['id_khoahoc']==$row['id_khoahoc']){
                            ?>
                            <option selected value="<?php echo $row_kh['id_khoahoc'] ?>"><?php echo $row_kh['ten_kh'] ?></option>
                            <?php
                              }else{
                            ?>
                            <option value="<?php echo $row_kh['id_khoahoc'] ?>"><?php echo $row_kh['ten_kh'] ?></option>
                            <?php
                              }
                            } 
                            ?>   	
                    </select>
                    </div>


                    <div class="control-group">
						<label class="control-label" for="basicinput">Tên cấp bậc</label>
						<div class="controls">
							<input data-title="A tooltip for the input" type="text" name="ten_cap" value="<?php echo $row['ten_cap']?>" data-original-title="" class="span8 tip">
						</div>
					</div>
                    <label class="control-label" for="basicinput">Test đầu vào</label>
                    <select data-title="A tooltip for the input" data-original-title="" class="span8 tip" id="testdauvao" name="testdauvao">
                            <option value="<?php echo $row['testdauvao']?>">--Chọn--</option>  	
                            <option value="0">Không</option>  	
                            <option value="1">Có</option>  	
                    </select>
                     <div class="control-group">
						<label class="control-label" for="basicinput">Hình ảnh</label>
						<div class="controls">
							<input data-title="A tooltip for the input" type="file" name="hinhanh" data-original-title="" class="span8 tip">
						</div>
					</div>

					<div class="control-group" style="text-align:center;">
						<div class="controls">
							<button type="submit" class="btn btn-success"  name="suattlop">Cập nhật</button>
						</div>
					</div>

				</form>
                    <?php 
                    }
                    ?>
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