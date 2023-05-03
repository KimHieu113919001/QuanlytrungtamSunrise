<?php
    include("config.php");

    session_start();
	if(!isset($_SESSION['id_hocvien'])){
        header('Location:login.php');
       }
        if(isset($_GET['trang'])){
            $page = $_GET['trang'];
        }else{
            $page = 1;
        }
        if($page == '' || $page == 1){
            $begin = 0;
        }else{
            $begin = ($page*6)-6;
        }
    
    $sql = "SELECT * FROM khoahoc ORDER BY id_khoahoc ASC LIMIT $begin,6";
    $res = mysqli_query($connection,$sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
   
    <title>Trung tâm ngoại ngữ - tin học Sunrise TV</title>
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

ul.list_trang {
		 padding: 0;
		margin: 0;
		list-style: none;
	}
	ul.list_trang li {
		 float: left;
		padding: 5px 13px;
		margin: 5px;
		background: burlywood;
		display: block;
	}
	ul.list_trang li a {
		color: #fff;
		text-align: center;
		text-decoration: none;
					 
	}
</style>
<?php if(isset($_SESSION['id_hocvien'])==true) { ?>
    <?php
  include("giaodien/topbar.php");
  include("giaodien_user/header_user.php");
  ?>    
<?php } ?>
<body class="colormix">

       
        <div class="container-fluid page-header" style="margin-bottom: 40px;">
            <div class="container">
                <div class="d-flex flex-column justify-content-center" style="min-height: 250px">
                    <h3 class="display-4 text-white text-uppercase">Cấp độ</h3>
                    <div class="d-inline-flex text-white">
                        <p class="m-0 text-uppercase"><a class="text-white" href="user.php">Trang chủ</a></p>
                        <i class="fa fa-angle-double-right pt-1 px-3"></i>
                        <p class="m-0 text-uppercase">Cấp độ</p>
                    </div>
                </div>
            </div>
        </div>

    <div class="container-fluid ">
        <div class="container py-5">  
            <div class="row pb-3">
                    <?php if(mysqli_num_rows($res)>0){ ?>
                    <?php while($row=mysqli_fetch_assoc($res)) {  ?>
                    <div class="col-lg-4 mb-4" style="text-align: center;">
                            <div class="blog-item position-relative overflow-hidden rounded mb-2">
                            <span>
                                <img style="height:300px;" class="img-fluid" src="admin/images/<?php echo $row["hinhanh"]; ?>"  alt="">
                            </span>
                            <a class="blog-overlay text-decoration-none" style="justify-content: center;" href="user_thongtinkhoahoc.php?id_khoahoc=<?php echo $row["id_khoahoc"]; ?>">
                                    <h5 class="text-white mb-3"style="width:100%; font-size: 25px;"><?php echo $row["ten_kh"]; ?></h5>    
                            </a>
                            </div>
                            
                    </div>
                    <?php } }?>           
                        
                </div>
                <div>
            <?php
				$sql_trang = mysqli_query($connection,"SELECT * FROM khoahoc");
				$row_count = mysqli_num_rows($sql_trang);  
				$trang = ceil($row_count/6);
				?>
				<p style="text-align:center;">TRANG HIỆN TẠI : <?php echo $page ?>/<?php echo $trang ?> </p>
				
				<ul class="list_trang">

					<?php
					
					for($i=1;$i<=$trang;$i++){ 
					?>
						<li <?php if($i==$page){echo 'style="background: brown;"';}else{ echo ''; }  ?>><a href="user_khoahoc.php?trang=<?php echo $i ?>"><?php echo $i ?></a></li>
					<?php
					} 
					?>
				</ul>     
                </div>             
    </div>
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>

</div>

      <!-- Back to Top -->


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
<?php
    include("giaodien/footer.php");
     ?>
</html>