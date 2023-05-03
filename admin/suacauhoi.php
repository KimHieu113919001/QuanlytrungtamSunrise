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
    
    $id_cauhoi=$_GET['id_cauhoi'];
    $id_de=$_GET['id_de'];
    // $id_dangcauhoi=$_GET['id_dangcauhoi'];
    // $id_kieuch=$_GET['id_kieuch'];

    // if(isset($_POST['suacauhoi1'])){
    //     $noidung=$_POST['noidung'];
    //     $noidung1=str_replace("'", "\'", $noidung);
    //     $dapan_A=$_POST['dapan_A'];
    //     $dapan_B=$_POST['dapan_B'];
    //     $dapan_C=$_POST['dapan_C'];
    //     $dapan_D=$_POST['dapan_D'];
    //     $dapan_dung=$_POST['dapan_dung'];
    //     $ngaycapnhat_ch=$_POST['ngaycapnhat_ch'];

    //     if($dapan_A != "" && $dapan_B != "" && $dapan_C != "" && $dapan_D != ""){
    //     $sql="UPDATE `cau_hoi`SET noidung='$noidung1',dapan_A='$dapan_A',dapan_B='$dapan_B',dapan_C='$dapan_C',dapan_D='$dapan_D',dapan_dung='$dapan_dung', ngaycapnhat_ch='$ngaycapnhat_ch' WHERE id_cauhoi='$_GET[id_cauhoi]'";
    //     mysqli_query($connection,$sql);
    //         if(mysqli_query($connection,$sql)){
    //             $msg="<script language='javascript'>
    //             swal(
    //                 'Thành công!',
    //                 'Sửa thành công!',
    //                 'success'      
    //                 );
    //                 var timer = setTimeout(function() {
    //                 window.location=('danhsachcauhoi.php?id_de=$id_de')
    //             }, 2000);
    //             </script>";   
        
    //         }else{
    //             echo "Sửa thất bại!";
    //         }
    //     }else{
    //         $msg="<script language='javascript'>
    //             swal(
    //                 'Cảnh báo!',
    //                 'Đáp án không được để trống!',
    //                 'error'      
    //                 );
    //             </script>"; 
    //     }
    // }


    // if(isset($_POST['suacauhoi3'])){
    //     $noidung= $_FILES['noidung']['name'];
    //     move_uploaded_file($_FILES['noidung']['tmp_name'],"../admin/images/".$_FILES['noidung']['name']); 
    //     $noidungcu=$_POST['noidungcu'];

    //     $dapan_A= $_FILES['dapan_A']['name'];
    //     move_uploaded_file($_FILES['dapan_A']['tmp_name'],"../admin/images/".$_FILES['dapan_A']['name']); 
    //     $dapan_Acu=$_POST['dapan_Acu'];

    //     $dapan_B= $_FILES['dapan_B']['name'];
    //     move_uploaded_file($_FILES['dapan_B']['tmp_name'],"../admin/images/".$_FILES['dapan_B']['name']); 
    //     $dapan_Bcu=$_POST['dapan_Bcu'];

    //     $dapan_C= $_FILES['dapan_C']['name'];
    //     move_uploaded_file($_FILES['dapan_C']['tmp_name'],"../admin/images/".$_FILES['dapan_C']['name']); 
    //     $dapan_Ccu=$_POST['dapan_Ccu'];

    //     $dapan_D= $_FILES['dapan_D']['name'];
    //     move_uploaded_file($_FILES['dapan_D']['tmp_name'],"../admin/images/".$_FILES['dapan_D']['name']); 
    //     $dapan_Dcu=$_POST['dapan_Dcu'];
        
    //     $dapan_dung=$_POST['dapan_dung'];
    //     $ngaycapnhat_ch=$_POST['ngaycapnhat_ch'];

    //     if($noidung == "" && $dapan_A == "" && $dapan_B == "" && $dapan_C == "" && $dapan_D == ""){
    //     $sql="UPDATE `cau_hoi`SET noidung='$noidungcu',dapan_A='$dapan_Acu',dapan_B='$dapan_Bcu',dapan_C='$dapan_Ccu',dapan_D='$dapan_Dcu',dapan_dung='$dapan_dung', ngaycapnhat_ch='$ngaycapnhat_ch' WHERE id_cauhoi='$_GET[id_cauhoi]'";
    //     mysqli_query($connection,$sql);
    //         if(mysqli_query($connection,$sql)){
    //             $msg="<script language='javascript'>
    //             swal(
    //                 'Thành công!',
    //                 'Sửa thành công!',
    //                 'success'      
    //                 );
    //                 var timer = setTimeout(function() {
    //                 window.location=('suacauhoi.php?id_de='.$id_de'&id_cauhoi='.$id_cauhoi'&id_dangcauhoi='.$id_dangcauhoi')
    //             }, 2000);
    //             </script>";   
        
    //         }else{
    //             echo "Sửa thất bại!";
    //         }
    //     }elseif($noidung != "" ){
    //         $sql="UPDATE `cau_hoi`SET noidung='$noidung',dapan_dung='$dapan_dung', ngaycapnhat_ch='$ngaycapnhat_ch' WHERE id_cauhoi='$_GET[id_cauhoi]'";
    //         mysqli_query($connection,$sql);
    //             if(mysqli_query($connection,$sql)){
    //                 $msg="<script language='javascript'>
    //                 swal(
    //                     'Thành công!',
    //                     'Sửa thành công!',
    //                     'success'      
    //                     );
    //                     var timer = setTimeout(function() {
    //                     window.location=('suacauhoi.php?id_de='.$id_de'&id_cauhoi='.$id_cauhoi'&id_dangcauhoi='.$id_dangcauhoi')
    //                 }, 2000);
    //                 </script>";   
            
    //             } 
    //     }elseif($dapan_A != "" ){
    //         $sql="UPDATE `cau_hoi`SET dapan_A='$dapan_A',dapan_dung='$dapan_dung', ngaycapnhat_ch='$ngaycapnhat_ch' WHERE id_cauhoi='$_GET[id_cauhoi]'";
    //         mysqli_query($connection,$sql);
    //             if(mysqli_query($connection,$sql)){
    //                 $msg="<script language='javascript'>
    //                 swal(
    //                     'Thành công!',
    //                     'Sửa thành công!',
    //                     'success'      
    //                     );
    //                     var timer = setTimeout(function() {
    //                     window.location=('suacauhoi.php?id_de='.$id_de'&id_cauhoi='.$id_cauhoi'&id_dangcauhoi='.$id_dangcauhoi')
    //                 }, 2000);
    //                 </script>";   
            
    //             } 
    //     }elseif($dapan_B != "" ){
    //         $sql="UPDATE `cau_hoi`SET dapan_B='$dapan_B',dapan_dung='$dapan_dung', ngaycapnhat_ch='$ngaycapnhat_ch' WHERE id_cauhoi='$_GET[id_cauhoi]'";
    //         mysqli_query($connection,$sql);
    //             if(mysqli_query($connection,$sql)){
    //                 $msg="<script language='javascript'>
    //                 swal(
    //                     'Thành công!',
    //                     'Sửa thành công!',
    //                     'success'      
    //                     );
    //                     var timer = setTimeout(function() {
    //                     window.location=('suacauhoi.php?id_de='.$id_de'&id_cauhoi='.$id_cauhoi'&id_dangcauhoi='.$id_dangcauhoi')
    //                 }, 2000);
    //                 </script>";   
            
    //             } 
    //     }elseif($dapan_C != "" ){
    //         $sql="UPDATE `cau_hoi`SET dapan_C='$dapan_C',dapan_dung='$dapan_dung', ngaycapnhat_ch='$ngaycapnhat_ch' WHERE id_cauhoi='$_GET[id_cauhoi]'";
    //         mysqli_query($connection,$sql);
    //             if(mysqli_query($connection,$sql)){
    //                 $msg="<script language='javascript'>
    //                 swal(
    //                     'Thành công!',
    //                     'Sửa thành công!',
    //                     'success'      
    //                     );
    //                     var timer = setTimeout(function() {
    //                     window.location=('suacauhoi.php?id_de='.$id_de'&id_cauhoi='.$id_cauhoi'&id_dangcauhoi='.$id_dangcauhoi')
    //                 }, 2000);
    //                 </script>";   
            
    //             } 
    //     }elseif($dapan_D != "" ){
    //         $sql="UPDATE `cau_hoi`SET dapan_D='$dapan_D',dapan_dung='$dapan_dung', ngaycapnhat_ch='$ngaycapnhat_ch' WHERE id_cauhoi='$_GET[id_cauhoi]'";
    //         mysqli_query($connection,$sql);
    //             if(mysqli_query($connection,$sql)){
    //                 $msg="<script language='javascript'>
    //                 swal(
    //                     'Thành công!',
    //                     'Sửa thành công!',
    //                     'success'      
    //                     );
    //                     var timer = setTimeout(function() {
    //                     window.location=('suacauhoi.php?id_de='.$id_de'&id_cauhoi='.$id_cauhoi'&id_dangcauhoi='.$id_dangcauhoi')
    //                 }, 2000);
    //                 </script>";   
            
    //             } 
    //     }
    // }    
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
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
        <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
<?php
    include('../admin/navbar.php');
    ?>
    <div class="wrapper">
        <div class="container">
            <div class="row">
    <?php
    include('../admin/thanhcongcu.php');
    ?>
<body>
 <?php
    // if($id_dangcauhoi == 1){
        include("thaotac/suacauhoi_tracnghiem.php");
    // }elseif($id_dangcauhoi == 2){
    //     include("thaotac/suacauhoi_dientu.php");
    // }elseif($id_dangcauhoi == 3){
    //     include("thaotac/suacauhoi_dungsai.php");
    // }
?>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="//cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
	
</body>
</html>