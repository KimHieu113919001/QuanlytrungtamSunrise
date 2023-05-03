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

    $id_danhsach=$_GET['id_danhsach'];
    if(isset($_POST['submit'])){
        
        
        $id_danhsach=$id_danhsach;
        $id_hocvien=$_POST['id_hocvien'];
        
        $res=false;
        $insert_query="INSERT INTO `chi_tiet_hoc`(`id_danhsach`,`id_hocvien`) VALUES ('$id_danhsach','$id_hocvien')";
        
        $check_query= "SELECT * FROM `chi_tiet_hoc` WHERE id_danhsach='$id_danhsach' AND id_hocvien='$id_hocvien'";
        
        $check_res=mysqli_query($connection,$check_query);

       
        if(mysqli_num_rows($check_res)>0){

          $msg='<script type="text/javascript">
          $(document).ready(function() {
                swal("Tên học viên đã tồn tại trong danh sách! Vui lòng chọn lại!", {
                          icon: "error",
                      });
                  
              });
          </script>'; 
        }
        
        else{
            $insert_res= mysqli_query($connection,$insert_query); 
            $msg='<script type="text/javascript">
            $(document).ready(function() {
                swal({
                    title: "Thêm thành công!",
                    icon: "success",
                    button: "Ok",
                    timer: 2000
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
								<h3>Thêm học viên</h3>
							</div>
							<div class="module-body">
              <?php echo $msg; ?>
                    <form action="" method="post" enctype="multipart/form-data"  >

                    <span class="input-group-addon a"><b>Chọn học viên</b></span>
                    <select data-title="A tooltip for the input" data-original-title="" class="span8 tip" id="id_hocvien" name="id_hocvien" > 
                      <?php


                      $sql_hv="SELECT * FROM hocvien ORDER BY id_hocvien ASC";
                      $query_hv= mysqli_query($connection,$sql_hv);
                      while($row_hv= mysqli_fetch_assoc($query_hv)){
                        ?>
                        <option value="<?php echo $row_hv['id_hocvien']?>"><?php echo ucwords($row_hv['ten_hv'])?></option>
                        <?php
                      }
                      ?>
                    </select>


										<div class="control-group" style="text-align:center;">
											<div class="controls">
												<button type="submit" class="btn btn-success"  name="submit">Thêm</button>
											</div>
										</div>
									</form>
							</div>
						</div>

						
						
					</div><!--/.content-->
				</div>
</body>
</html>