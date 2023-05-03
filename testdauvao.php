<?php
    include("config.php");

    session_start();
    if(!isset($_SESSION['id_hocvien'])){
      header('Location:login.php');
     }
    $id_hocvien=$_GET['id_hocvien'];
    $id_cap=$_GET['id_cap'];
    $doituong=$_GET['doituong'];
    $sql= "SELECT * FROM capbac WHERE id_cap='$id_cap'"; 
    $res= mysqli_query($connection,$sql);
    $row= mysqli_fetch_assoc($res);

    $sql1= "SELECT * FROM doituong WHERE id_doituong='$doituong'"; 
    $res1= mysqli_query($connection,$sql1);
    $row1= mysqli_fetch_assoc($res1);

    
    

    $msg="";

   if(isset($_POST['submit'])){

    $sql6= "SELECT * FROM de_test, cau_hoi_listening, cau_hoi WHERE de_test.id_cap='$id_cap' AND de_test.id_de=cau_hoi_listening.id_de AND de_test.id_de=cau_hoi.id_de"; 
    $res6= mysqli_query($connection,$sql6);
    $row6= mysqli_fetch_assoc($res6);
    if($row6 != ""){
      $sql2= "SELECT * FROM de_test, cau_hoi_listening,cau_hoi WHERE de_test.id_cap='$id_cap' AND de_test.id_de=cau_hoi.id_de AND de_test.id_de=cau_hoi_listening.id_de ORDER BY RAND() LIMIT 1"; 
      $res2= mysqli_query($connection,$sql2);
      $row2= mysqli_fetch_assoc($res2);
      $id_de= $row2['id_de'];
      $sql_check="SELECT * FROM chi_tiet_diem_test WHERE id_hocvien='$id_hocvien' AND id_cap='$id_cap'";
      $res_check= mysqli_query($connection,$sql_check);
      $row_check= mysqli_fetch_assoc($res_check);
        if($row_check['trangthaitest']==0){
          $insert_query="INSERT INTO `chi_tiet_diem_test`(`id_diemtest`,`id_hocvien`,`id_cap`,`id_de`) VALUES ('','$id_hocvien','$id_cap','$id_de')";
          $res= mysqli_query($connection,$insert_query);
          header('Location: kiemtra.php?id_hocvien='.$id_hocvien.'&id_cap='.$id_cap.'&doituong='.$doituong.'&id_de='.$id_de);
        }else{
          $msg="<script language='javascript'>
        swal(
            'Thông báo!',
            'Bạn đã thực hiện bài kiểm tra này rồi!',
            'error'      
            );
            var timer = setTimeout(function() {
              window.location=('user_dangkyhoc.php?id_hocvien=$id_hocvien')
          }, 4000);
        </script>";   
        }
    }else{
      $msg="<script language='javascript'>
      swal(
           'Thông báo!',
           'Đề kiểm tra chưa sẵn sàng!',
           'error'      
           );
           var timer = setTimeout(function() {
            window.location=('user_dangkyhoc.php?id_hocvien=$id_hocvien')
        }, 4000);
      </script>";   
      
    }
    
    
   }
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

        <!-- Sweetalert -->
      <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- Datepicker -->
    <link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css"
         rel = "stylesheet">
      <script src = "https://code.jquery.com/jquery-1.10.2.js"></script>
      <script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
      <!-- Javascript -->
      
</head>
<style>
body{
 background-image: url("../sunrise/admin/images/registration.jpg");
 height: 500px; 
  background-position: center; 
  background-repeat: no-repeat; 
  background-size: cover;
  height: 100%;
}


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
<body>  

<br>
<div class="container-fluid"> 
      <div class="container "> 
       <div class="row ">
         <div class="col-md-3"></div>
            <div class="col-md-6"> 
                  <div class="bg-secondary rounded p-5">
                      <div class="hinh">
                          <h1 style="text-align: center; background-color:#F2F1F8; color:#000000;">KIỂM TRA ĐẦU VÀO</h1>      
                    </div> 
                    <br>
                    <?php echo $msg;?>
                      <form class="form-horizontal " action="" method="post"> 
                          <div style="text-align:center;">
                            <span class="input-group-addon">Độ tuổi: <i class="glyphicon glyphicon-user"><color style="color: red;"><?php echo $row1['nhom'];?></color></i></span>
                          </div>
                          <br>
                          
                          <div style="text-align:center;">
                            <span class="input-group-addon">Cấp bậc: <i class="glyphicon glyphicon-user"><color style="color: red;"><?php echo $row['ten_cap'];?></color></i></span>
                          </div>
                          <br> 
                          <div style="text-align:center;">
                            Nhờ phụ huynh không can thiệp vào bài kiểm tra!
                          </div>
                          <br>
                          <div style="text-align:center;">
                            Ấn "Bắt đầu" để vào bài kiểm tra!
                          </div>
                          <br>
                          <div style="text-align:center;">
                            <button type="submit" name="submit" class="btn buttonsua" style="font-size:20px;">Bắt đầu</button>
                            
                          </div>
                        </form>
                  </div> 
                </div>
    <div class="col-md-3"></div>
     </div>
    </div> 
</div>
<br>

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