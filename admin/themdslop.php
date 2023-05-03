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
    $sql1 = "SELECT * FROM capbac WHERE capbac.id_cap='$_GET[id_cap]'";
    $res1=mysqli_query($connection,$sql1);
	$row1=mysqli_fetch_assoc($res1);
    
    if(isset($_POST['submit'])){
        $date = getdate();
        
        $ma_danhsach=$row1['ma_cap'].'_'. $date['mon'].'_'.$date['year'].'_'.mt_rand(1,5);
        $id_cap=$_POST['id_cap'];
        $id_giaovien=$_POST['id_giaovien'];
        $ngayhoc=$_POST['ngayhoc'];
        $thoigian=$_POST['thoigian'];
        
        $res=false;
        $insert_query="INSERT INTO `danhsachlop`(`id_danhsach`,`ma_danhsach`,`id_cap`,`id_giaovien`,`ngayhoc`,`thoigian`) VALUES ('','$ma_danhsach','$id_cap','$id_giaovien','$ngayhoc','$thoigian')";
        
        $res= mysqli_query($connection,$insert_query);
            
        if($res==true){
          
            header('Location:danhsachlophoc.php?id_cap='.$row1['id_cap']);
        
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
								<h3>Thêm lớp thuộc cấp bậc: <?php echo $row1['ten_cap'];?></h3>
							</div>
							<div class="module-body">
                        
                    <form action="" method="post" enctype="multipart/form-data"  >

                    <div class="control-group">
						<label class="control-label" for="basicinput"></label>
						<div class="controls">
							<input data-title="A tooltip for the input" type="hidden" name="id_cap" value="<?php echo $row1['id_cap'];?>"readonly data-original-title="" class="span8 tip">
						</div>
                    </div>

                   

                    <div class="control-group">
                    <label class="control-label" for="basicinput">Tên giáo viên dạy</label>
                    <select  data-title="A tooltip for the input" data-original-title="" class="span8 tip" id="id_giaovien" name="id_giaovien" required>
                    <option value="">--Chọn--</option>
                       
                      <?php 
                      $sql_gv="SELECT * FROM giaovien ORDER BY id_giaovien ASC";
                      $query_gv= mysqli_query($connection,$sql_gv);
                      while($row_gv= mysqli_fetch_assoc($query_gv)){
                        ?>
                        <option value="<?php echo $row_gv['id_giaovien']?>"><?php echo $row_gv['ten_gv']?></option>
                        <?php
                      }
                      ?>
                    </select>
                    </div>
                    <div class="control-group">
						<label class="control-label" for="basicinput">Ngày học</label>
						<div class="controls">
							<input data-title="A tooltip for the input" type="date" name="ngayhoc" placeholder="Nhập ngày học" data-original-title="" class="span8 tip">
						</div>
                    </div>

                    <!-- <div class="control-group">
						<label class="control-label" for="basicinput">Thời gian học</label>
						<div class="controls">
							<textarea data-title="A tooltip for the input" type="text" name="thoigian" placeholder="Nhập thời gian học" data-original-title="" class="span8 tip"></textarea>
						</div>
                    </div> -->

					<div class="control-group" style="text-align:center;">
						<div class="controls">
							<button type="submit" class="btn btn-success"  name="submit">Thêm mới</button>
						</div>
					</div>
				</form>
							</div>
						</div>

						
						
					</div><!--/.content-->
				</div>
</body>
</html>