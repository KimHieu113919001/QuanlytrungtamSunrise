<?php
    include("config.php");
    session_start();
    if(!isset($_SESSION['id_hocvien'])){
      header('Location:login.php');
     }
   $id_hocvien=$_GET['id_hocvien'];
   $id_cap=$_GET['id_cap'];
   $doituong=$_GET['doituong'];
   $id_de=$_GET['id_de'];
  
   $sql_tuan="SELECT MAX(id_tuan) AS maxtuan FROM tructuan";
   $res_tuan= mysqli_query($connection,$sql_tuan);
   $row_tuan=mysqli_fetch_array($res_tuan);
   
   $sql_gv="SELECT * FROM giaovien WHERE gv_ktnoi='1'";
   $res_gv= mysqli_query($connection,$sql_gv);

   $msg="";
   if(isset($_POST['chon'])){
       
    $id_hocvien= $_SESSION['id_hocvien']; 
    $id_buoi = $_POST['id_buoi'];
    $id_thu = $_POST['id_thu'];

    $sql_lich= "UPDATE `chi_tiet_diem_test` SET id_buoi='$id_buoi', id_thu='$id_thu' WHERE id_hocvien='$id_hocvien' AND id_cap='$id_cap'"; 
    mysqli_query($connection,$sql_lich);

    
    if(mysqli_query($connection,$sql_lich)){
      $msg="<script language='javascript'>
    swal(
       'Thành công!',
       'Vui lòng đợi thông báo từ trung tâm.',
       'success'      
       );
       var timer = setTimeout(function() {
        window.location=('user_dangkyhoc.php?id_hocvien=$id_hocvien')
    }, 3000);
  </script>";   
      
    }
    
    else{
      $msg='<script type="text/javascript">
      $(document).ready(function() {
            swal("Đăng ký học không thành công!", {
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
?>
<?php } ?>


<body>  

<br>
<div class="container-fluid"> 
      <div class="container"> 
            <div> 
                  <div class="bg-secondary p-5">
                      <div class="hinh">
                          <h1 style="text-align: center; background-color:yellow; color:#000000;">KIỂM TRA NÓI</h1>      
                      </div> 
                      <?php echo $msg;?>
                      <br>
                      <h5 style="color:#000;text-align:center;">Trung tâm sẽ gửi thông báo ngày hẹn cho bạn để kiểm tra đầu vào phần Nói (SPEAKING)!</h5>
              <!-- <form class="form-horizontal " action="" method="post" > 
                <div class="col-lg-9 container">
             
                <select class="form-control" name="id_thu"  required>
                <option value="">--Chọn thứ--</option>

                    <?php  
                    // while($row_gv=mysqli_fetch_assoc($res_gv)) { 
                    //     $id_giaovien=$row_gv['id_giaovien'];
                        $sql_thu="SELECT * FROM  thu";
                        $res_thu= mysqli_query($connection,$sql_thu);
                        while($row_thu= mysqli_fetch_assoc($res_thu)){
                            ?>
                            <option font-size:10px; value="<?php echo $row_thu['id_thu']?>"><?php echo $row_thu['thu']?></option>
                            <?php
                          // } 
                     } ?> 
                     </select>
                   <br>
                     <select class="form-control" name="id_buoi" required>
                      <option value="">--Chọn buổi--</option>
                    <?php  
                    // while($row_gv=mysqli_fetch_assoc($res_gv)) { 
                    //     $id_giaovien=$row_gv['id_giaovien'];
                        $sql_thu="SELECT * FROM  buoi WHERE id_buoi != '3'";
                        $res_thu= mysqli_query($connection,$sql_thu);
                        while($row_thu= mysqli_fetch_assoc($res_thu)){
                            ?>
                            <option font-size:10px; value="<?php echo $row_thu['id_buoi']?>"><?php echo $row_thu['ten_buoi']?></option>
                            <?php
                          // } 
                     } ?> 
                     </select>
                    </div>
                     <br> -->
                     <div style="font-size:20px;text-align:center;">
                        <!-- <button type="submit" name="chon" class="btn buttonsua">Hoàn tất</button> -->
                        <a type="submit" href="user_dangkyhoc.php?id_hocvien=<?php echo $id_hocvien?>" class="btn buttonsua">Hoàn tất</a>
                    </div>
                </form>
        </div>
    </div> 
</div>
</body>
</html>