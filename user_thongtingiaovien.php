<?php
    include("config.php");
    session_start();
	if(!isset($_SESSION['id_hocvien'])){
        header('Location:login.php');
       }
    $id_giaovien= $_GET['id_giaovien']; 

    $sql= "SELECT * FROM `giaovien` WHERE id_giaovien='$id_giaovien'"; 
    //echo $sql;
    $res= mysqli_query($connection,$sql);
    $row= mysqli_fetch_assoc($res);

    $odate = $row['ngayvaolam'];
      $newDate = date("d/m/Y", strtotime($odate));

      $datenow = getdate();
      $ngaythang = $newDate;
      $tach_ngaythang=array();
      $tach_ngaythang=explode('/', $ngaythang); // cho vào mảng

      $ng=$tach_ngaythang[0]; 
      $th=$tach_ngaythang[1];
      $na=$tach_ngaythang[2];

      $ngs = (int)$ng; // chuyển thành dạng số
      $ths = (int)$th;
      $nas = (int)$na;

      $date = $datenow['year'] - $nas;
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
</style>
<?php if(isset($_SESSION['id_hocvien'])==true) { ?>
    <?php
  include("giaodien/topbar.php");
  include("giaodien_user/header_user.php");
  ?>    
<?php } ?>
<body>

<div class="container-fluid ">

<div class=" container col-lg-7 mt-4 ">
    <!-- Recent Post -->
    <div class="mb-5">
								
                     <table class="table table-bordered table-striped table-responsive-stack" style="color:#000;" id="tableOne">
<thead>
         <tr>
         <td colspan="2" style="text-align:center;"><img src="admin/images/<?php echo $row['anhdaidien'] ?>"width="250px"></td>
         </tr>
</thead>
         <tbody >
         
            <tr>
                <th>Tên giáo viên</th>
                <td><?php echo ucwords($row['ten_gv']); ?></td>
            </tr>           
            <tr>
                <th>Giới tính</th>
                <td><?php echo $row['gioitinh']; ?></td>
            </tr>
            <tr>
                <th>Quốc tịch</th>
                <td><?php echo $row['quoctich']; ?></td>
            </tr>
            <tr>
                <th>Chuyên môn</th>
                <td><?php echo $row['chuyenmon']; ?></td>
            </tr>
            <tr>
                <th>Kinh nghiệm</th>
                <td><?php echo $date; ?> năm</td>
            </tr>
            <tr>
                <th>Đối tượng dạy</th>
                <td><?php echo $row['doituongday']; ?></td>
            </tr>

        </tbody>
</table>

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
