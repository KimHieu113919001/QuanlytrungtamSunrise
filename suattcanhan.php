<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
    if(!isset($_SESSION['id_hocvien'])){
      header('Location:login.php');
     }

	 include("config.php");
    $msg= "" ;     
  ?>  
  

<?php
$sql_sua_tt="SELECT * FROM hocvien WHERE id_hocvien='$_GET[id_hocvien]' LIMIT 1";
$query_sua_tt= mysqli_query($connection,$sql_sua_tt);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
   
    <title>Trung tâm Ngoại ngữ - Tin học Sunrise</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/logosunrise.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="sunrise/css/phudien.css">
    <link href="css/main.css" rel="stylesheet">
 
   
    
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
</style>
<?php if(isset($_SESSION['id_hocvien'])==true) { ?>
    <?php
  include("giaodien/topbar.php");
  include("giaodien_user/header_user.php");
  ?>    
<?php } ?>
<body class="colormix">

        <div class="container-fluid ">

                <div class=" container col-lg-7 mt-4 ">
                    <!-- Recent Post -->
                    <div class="mb-5">
                    <?php 
        					while ($row= mysqli_fetch_assoc($query_sua_tt)){
          
          						?>
   <form action="updatettcanhan.php?id_hocvien=<?php echo $_GET['id_hocvien'] ?>" method="post" enctype="multipart/form-data"  >
                
                  <span class="input-group-addon" style="font-weight:bold;">Tên học viên</span>
                        <input class="form-control" type="text" name="ten_hv" value="<?php echo $row['ten_hv']?>" >
                        <br>
                    
                    <span class="input-group-addon" style="font-weight:bold;">Ngày sinh</span>
                    <input class="form-control" type="date" name="ngaysinh_hv" value="" >
                        <br>
                   
                    <span class="input-group-addon" style="font-weight:bold;">Giới tính</span>
                       <label class="radio inline form-control">
                        <input type="radio" name="gioitinh_hv" value="Nam" <?php echo ($row['gioitinh_hv']=='Nam')?'checked':'' ?>>Nam		
						 &ensp;
						
                        <input type="radio" name="gioitinh_hv" value="Nữ" <?php echo ($row['gioitinh_hv']=='Nữ')?'checked':'' ?>>Nữ				
						</label>
                        <br>

                    <span class="input-group-addon" style="font-weight:bold;">Tên phụ huynh</span>
                       <input class="form-control" type="text" name="ten_ph" value="<?php echo $row['ten_ph']?>" >
                       <br>

                    <span class="input-group-addon" style="font-weight:bold;">Số điện thoại</span>
                        <input class="form-control" type="number" name="sdt_ph" value="<?php echo $row['sdt_ph'] ?>">
                        <br>

                    <span class="input-group-addon" style="font-weight:bold;">Số Zalo</span>
                        <input class="form-control" type="number" name="sozalo_ph" value="<?php echo $row['sozalo_ph'] ?>">
                        <br>

                    <span class="input-group-addon" style="font-weight:bold;">Địa chỉ</span>
                        <input class="form-control" type="text" name="diachi" value="<?php echo $row['diachi']?>">
                        <br>
                        <div style="text-align:center;">
                        <button type="submit" class="btn buttonsua" name="submit">Cập nhật</button>
                        <button type="button" class="btn buttonxoa" name="cancel" onClick="window.location='user_canhan.php?hocvien=<?php echo $_SESSION['username'];?>'">Thoát</button>

                        </div>
               
    </form>
                            <?php 
                    			}
                  			?>
                    </div>
                </div>

    </div>



<?php
    include("giaodien/footer.php");
     ?>
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


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