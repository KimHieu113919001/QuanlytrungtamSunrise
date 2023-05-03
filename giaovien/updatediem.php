<?php
   $id_danhsach=$_GET['id_danhsach'];
   $id_hocvien=$_GET['id_hocvien'];
   $diemtong=$_POST['diemtong'];
   $nhanxet=$_POST['nhanxet'];
   $nhanqua=$_POST['nhanqua'];
  
   include("config.php");  

   if (isset($_POST['sua'])){
      if($diemtong >= 0 && $diemtong <= 10){ //ràng buộc nhập điểm
         if($diemtong >= 8.5 && $diemtong <= 10){ 
           $xeploai='A';
         }elseif($diemtong >= 7 && $diemtong <= 8.4){
           $xeploai='B';
         }elseif($diemtong >= 5.5 && $diemtong <= 6.9){
           $xeploai='C';
         }elseif($diemtong >= 4.0 && $diemtong <= 5.4){
           $xeploai='D';
         }
         $sql="UPDATE diemso SET diemtong='$diemtong',xeploai='$xeploai',nhanxet='$nhanxet',nhanqua='$nhanqua' WHERE id_diem='$_GET[id_diem]'";
         mysqli_query($connection,$sql);

         if(mysqli_query($connection,$sql)){
               $msg="<script language='javascript'>
                   swal(
                        'Thành công!',
                        'Đã cập nhật điểm!',
                        'success'      
                        );
                        var timer = setTimeout(function() {
                         window.location=('xemlop.php?id_danhsach=$id_danhsach')
                     }, 2000);
                 </script>";
             }
             else{
               $msg='<script type="text/javascript">
               $(document).ready(function() {
                     swal("Không thể cập nhật điểm!", {
                               icon: "error",
                           });
                       
                   });
               </script>'; 
             }

      }else{
         $msg="<script language='javascript'>
         swal(
              'Thất bại!',
              'Nhập điểm không phù hợp!',
              'error'      
              );
              var timer = setTimeout(function() {
               window.location=('suadiem.php?id_danhsach=$id_danhsach&id_hocvien=$id_hocvien')
           }, 2000);
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
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
   
  <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
   <?php echo $msg?>
</body>
</html>