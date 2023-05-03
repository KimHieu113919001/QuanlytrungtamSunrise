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
        
        
        $ten_cap=$_POST['ten_cap'];
        $id_khoahoc=$_POST['id_khoahoc'];
        $trangthai=$_POST['trangthai'];
        //$drphoto=$_FILES['file']['name'];
        $hinhanh= $_FILES['file']['name'];
        
        //image Upload
       move_uploaded_file($_FILES['file']['tmp_name'],"../admin/images/".$_FILES['file']['name']); 
        
        $res=false;
        $insert_query="INSERT INTO `capbac`(`id_cap`, `ten_cap`,`hinhanh`,`id_khoahoc`,`trangthai`) VALUES ('','$ten_cap','$hinhanh','$id_khoahoc','$trangthai')";
        
        $res= mysqli_query($connection,$insert_query);
            
        if($res==true){

          header("Location: quanlylophoc.php");
        }
        else{
          $msg='<script type="text/javascript">
          $(document).ready(function() {
                swal("Thêm thất bại!", {
                          icon: "error",
                      });
                  
              });
          </script>'; 
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
								<h3>Thêm cấp bậc</h3>
							</div>
							<div class="module-body">
                        
                    <form action="" method="post" enctype="multipart/form-data"  >

                    <span class="input-group-addon a"><b>Thuộc khóa học:</b></span>
                    <select data-title="A tooltip for the input" data-original-title="" class="span8 tip" id="id_khoahoc" name="id_khoahoc" required> 
                    <option value="">--Chọn--</option>
                      <?php 
                      $sql_kh="SELECT * FROM khoahoc ORDER BY id_khoahoc ASC";
                      $query_kh= mysqli_query($connection,$sql_kh);
                      while($row_kh= mysqli_fetch_assoc($query_kh)){
                        ?>
                        <option value="<?php echo $row_kh['id_khoahoc']?>"><?php echo $row_kh['ten_kh']?></option>
                        <?php
                      }
                      ?>
                    </select>


                      <div class="control-group">
											<label class="control-label" for="basicinput">Tên cấp bậc</label>
											<div class="controls">
												<input data-title="A tooltip for the input" type="text" name="ten_cap" placeholder="Nhập tên cấp bậc" required data-original-title="" class="span8 tip">
											</div>
										</div>

                    <select data-title="A tooltip for the input" data-original-title="" class="span8 tip" id="trangthai" name="trangthai"  required> 
                      <option value="">--Chọn--</option>
                      <option value="0">Ngoại ngữ</option>
                      <option value="1">Tin học</option>
                    </select>

										<div class="control-group">
                      <span class="input-group-addon a"><b>Hình ảnh: </b></span>&ensp;
                      <input  type="file" class="form-control" name="file"> 
										</div>

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