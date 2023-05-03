<?php

    session_start();
    if(!isset($_SESSION['username1'])){
     header('Location:admin_login.php');
    } 

    include("config.php");
    $sql1= "SELECT * FROM `gioithieu` WHERE id_gioithieu LIMIT 1"; 
    $res1= mysqli_query($connection,$sql1);

?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../admin/images/logosunrise.png" rel="icon">
        <title>Trung tâm Ngoại ngữ - Tin học Sunrise</title>
        <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="css/theme.css" rel="stylesheet">
        <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
            rel='stylesheet'>
            <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
            <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
            
    </head>
    
    <style>

h3{
    color:#fff;
}
    </style>

<body >
    <?php
    include('../admin/navbar.php');
    ?>
<div class="wrapper">
    <div class="container">
        <div class="row">
    <?php
    include('../admin/thanhcongcu.php');
    ?>
                <div class="span9">
                    <div class="content">
                        <div class="module">
                            <div class="module-head">
                                <h3 >Giới thiệu</h3>
                            </div>
                                <div class="module-body">
                                <?php while($row1=mysqli_fetch_assoc($res1)) {  ?>
                                <section class="docs"style="text-align: justify;">
                                    <h2><?php echo $row1['tieude']; ?></h2>
                                <div>
                                    <p class="lead"><?php echo $row1["noidung"]; ?></p>
                                </div>
                                </section> 
                                <div style="text-align:center;">
                            <a class="btn btn-warning" href="../admin/suagioithieu.php?id_gioithieu=<?php echo $row1['id_gioithieu'];?>">Chỉnh sửa</a>
                            </div>        
                                <?php }	?>
                                <div>
                            
                        </div>
                    </div>
                </div>
 
        </div>
    </div>
</div>
        <script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.resize.js" type="text/javascript"></script>
        <script src="scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="scripts/common.js" type="text/javascript"></script>
      
    </body>
</html>