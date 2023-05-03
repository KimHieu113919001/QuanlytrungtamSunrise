<?php
    include("config.php");
    session_start();
	if(!isset($_SESSION['id_hocvien'])){
        header('Location:login.php');
       }
    
    $username= $_SESSION['username']; 
    $id_hocvien= $_SESSION['id_hocvien']; 

    $sql= "SELECT * FROM chi_tiet_diem_test, capbac, hocvien WHERE chi_tiet_diem_test.trangthainoi='1' AND hocvien.id_hocvien=chi_tiet_diem_test.id_hocvien AND chi_tiet_diem_test.id_cap=capbac.id_cap  AND chi_tiet_diem_test.id_hocvien= '$id_hocvien'ORDER BY $id_hocvien "; 
    $res= mysqli_query($connection,$sql);
    

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
</head>
<style>
th{
    font-weight:bold;
}
td{
    height:50px;
}
.p1 {
    
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
    width: 200px;
}

.p1:hover { 
    overflow: visible;
    white-space: pre-line;
	word-break: break-word;
    width: 100px;
	height:auto;
}
</style>
<body>
<?php if(isset($_SESSION['id_hocvien'])==true) { ?>
    <?php
  include("giaodien/topbar.php");
  include("giaodien_user/header_user.php");
  ?>    
<?php } ?>
<div class="container-fluid page-header" style="margin-bottom: 40px;">
            <div class="container">
                <div class="d-flex flex-column justify-content-center" style="min-height: 250px">
                    <h3 class="display-4 text-white text-uppercase">Điểm số kiểm tra đầu vào</h3>
                    <div class="d-inline-flex text-white">
                        <p class="m-0 text-uppercase"><a class="text-white" href="user.php">Trang chủ</a></p>
                        <i class="fa fa-angle-double-right pt-1 px-3"></i>
                        <p class="m-0 text-uppercase">Điểm số kiểm tra đầu vào</p>
                    </div>
                </div>
            </div>
        </div>

<div class="container-fluid ">
         
   <table class=" table-bordered table-striped table-responsive-sm container mb-5 col-lg-11" style="color:#000;" >
        <thead style="text-align:center;">
        <th>STT</th>
        <th>Lớp đăng kí</th>
        <th>Điểm nghe</th>
        <th>Điểm nói</th>
        <th>Điểm đọc</th>
        <th>Điểm viết</th>
        <th>Điểm tổng</th>


        </thead>
        <?php 
        $i=0;
        while($row=mysqli_fetch_assoc($res)) { 
        $i++;
        $diem_tong1= ($row['diem_test']+ $row['diem_viet']+ $row['diem_nghe']+$row['diem_noi'])/4;
        $diem_tong=round($diem_tong1,1);

        ?>
        <tbody style="text-align:center;">      
                        <td><?php echo $i; ?></td>
                   
                        <td><?php echo $row['ten_cap']; ?></td>

                        <td><?php echo $row['diem_nghe']; ?></td>
                  
                        <td><?php echo $row['diem_noi']; ?></td>

                        <td><?php echo $row['diem_test']; ?></td>
                        
                        <td><?php echo $row['diem_viet']; ?></td>
                 
                        <td><?php echo $diem_tong; ?></td>

                
            </tbody>
            <?php  }?>

   </table>
   
             

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
