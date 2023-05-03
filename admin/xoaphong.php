<?php
   $id= $_GET['id_phong'];

   include("config.php");

   $check_query= "SELECT * FROM `lichhoc` WHERE id_phong='$id'";
   $check_res=mysqli_query($connection,$check_query);

   
   $msg="";

   if(mysqli_num_rows($check_res)>0){
    $msg="<script language='javascript'>
            swal(
                'Thất bại!',
                'Không thể xóa phòng!',
                 'error'      
                 );
                 var timer = setTimeout(function() {
                  window.location=('quanlyphong.php')
              }, 2000);
      </script>";   
    }else{
        $sql="DELETE FROM phong WHERE id_phong='$id'";
        $result=mysqli_query($connection,$sql);
        if(mysqli_query($connection,$sql)){
            $msg="<script language='javascript'>
            swal(
                'Thành công!',
                'Đã xóa phòng!',
                 'success'      
                 );
                 var timer = setTimeout(function() {
                  window.location=('quanlyphong.php')
              }, 2000);
      </script>";
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
            <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    </head>
<body>
    <?php echo $msg; ?>
</body>
</html>
