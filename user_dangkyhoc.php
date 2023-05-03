<?php
    include("config.php");

    session_start();
    if(!isset($_SESSION['id_hocvien'])){
      header('Location:login.php');
     }
    $msg="";
    
    if(isset($_POST['submit'])){
       
        $id_hocvien= $_SESSION['id_hocvien']; 
        $lop_dangki=$_POST['lop_dangki'];
        
        $check_dk="SELECT * FROM chi_tiet_hoc WHERE id_hocvien='$id_hocvien' AND tt_hoatdong='0' ";
        $check_res=mysqli_query($connection,$check_dk);
        if(mysqli_num_rows($check_res)>0){
          $msg='<script type="text/javascript">
          $(document).ready(function() {
                swal("Không thể đăng kí!", {
                          icon: "error",
                      });
                  
              });
          </script>';  
        }else{

            $sql= "UPDATE `hocvien`SET lop_dangki='$lop_dangki', trangthaidk='1' WHERE id_hocvien='$id_hocvien'"; 
            mysqli_query($connection,$sql);
            if(mysqli_query($connection,$sql)){
              $msg="<script language='javascript'>
            swal(
              'Thành công!',
              'Đã đăng kí khóa học! Vui lòng đợi thông báo từ trung tâm.',
              'success'      
              );
              var timer = setTimeout(function() {
                window.location=('user_dangkyhoc.php?id_hocvien=$id_hocvien')
            }, 3000);
            </script>";   
              
            }else{
              $msg='<script type="text/javascript">
              $(document).ready(function() {
                    swal("Đăng ký học không thành công!", {
                              icon: "error",
                          });
                      
                  });
              </script>';  
              
                
            }
          }
        }
        if(isset($_POST['test'])){
          $id_hocvien= $_SESSION['id_hocvien']; 
          $lop_dangki=$_POST['lop_dangki'];
          
          $check_dk="SELECT * FROM chi_tiet_hoc WHERE id_hocvien='$id_hocvien' AND tt_hoatdong='0' ";
          $check_res=mysqli_query($connection,$check_dk);
            if(mysqli_num_rows($check_res)>0){
              $msg='<script type="text/javascript">
              $(document).ready(function() {
                    swal("Không thể đăng kí!", {
                              icon: "error",
                          });
                      
                  });
              </script>';  
          }else{
            header('Location: testdauvao.php?id_hocvien='.$_SESSION['id_hocvien'].'&id_cap='.$_POST['lop_dangki'].'&doituong='.$_POST['doituong']);
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
      <script>
         $(function() {
            $( "#ngaysinh_hv" ).datepicker({
               changeMonth:true,
               changeYear:true,
               numberOfMonths:[1,1]
            });
         });
      </script>
</head>
<style>
body{
 background-image: url("../sunrise/admin/images/registration.jpg");

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
<?php
  include("giaodien/topbar.php");
  include("giaodien_user/header_user.php");
?>
<body>  

<br>
<div class="container-fluid"> 
  <div class="container"> 
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-6"> 
   
    <div class="bg-secondary rounded p-5">
        <div class="hinh">
            <h1 style="text-align: center; background-color:#F2F1F8; color:#000000;">Đăng ký học</h1>      
      </div> 
      <?php echo $msg; ?>
      
            <form class="form-horizontal" action="" method="post">
           
                    <span class="input-group-addon a">Chọn độ tuổi:</span><br>
                    <select class="form-control doituong" name="doituong" onchange="myFunction()" required>
                    <option value="">--Chọn--</option>  
                      <?php 
                      $sql_dk="SELECT * FROM doituong ORDER BY id_doituong ASC";
                      $query_dk= mysqli_query($connection,$sql_dk);
                      while($row_dk= mysqli_fetch_assoc($query_dk)){
                        ?>
                        <option font-size:10px; value="<?php echo $row_dk['id_doituong'] ?>"><?php echo $row_dk['nhom']?></option>
                        <?php
                      }
                      ?>
                    </select>
                    <br>

                    <span class="input-group-addon a">Chọn lớp đăng ký học:</span><br>
                    <select class="form-control lop" name="lop_dangki" onchange="myFunction()" required>
                    </select>
                    <br>

                    
                  <div class="test" style="font-size:20px;text-align:center;">Vui lòng chọn lớp muốn đăng ký học!</div>
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
<!-- <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script> -->
<script src="lib/easing/easing.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>

<!-- Contact Javascript File -->
<script src="mail/jqBootstrapValidation.min.js"></script>
<script src="mail/contact.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>
<script>
  $(document).ready(function(){
    $(".doituong").change(function(){
        var id = $(".doituong").val();
        $.post("data1.php",{id:id}, function(data){
            $(".lop").html(data);
        })
    })
})
</script>
<script>
  $(document).ready(function(){
    $(".lop").change(function(){
        var id_cap = $(".lop").val();
        $.post("data2.php",{id_cap:id_cap}, function(data){
            $(".test").html(data);
        })
    })
})
</script>
</body>
<?php
    include("giaodien/footer.php");
     ?>
</html>