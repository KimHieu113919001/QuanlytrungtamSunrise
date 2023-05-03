<?php
    include("config.php");
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
    if(!isset($_SESSION['username1'])){
        header('Location:admin_login.php');
       } 
    $sql1= "SELECT * FROM `gioithieu` WHERE id_gioithieu LIMIT 1"; 
    //echo $sql;
    $res1= mysqli_query($connection,$sql1);
    
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
    </head>
    <style>
.nen {
 background-image: url("images/carousel-3.jpg");
  height: 500px; 
  background-position: center; 
  background-repeat: no-repeat; 
  background-size: cover;
  height: 700px;
}h3{
    color:#fff;
}
    </style>

    <body>
    <?php
    include('../admin/navbar.php');
    ?>
    <div class="wrapper nen">
        <div class="container">
            <div class="row">
    <?php
    include('../admin/thanhcongcu.php');
    ?>
   <div class="span9">
                    <div class="content">
                        <div class="module">
                            <div class="module-head">
                                <h3>Giới thiệu</h3>
                            </div>
                            <div class="module-body">
                            <?php 
        					while ($row1= mysqli_fetch_assoc($res1)){
          					?>
                    <form action="updategioithieu.php?id_gioithieu=<?php echo $_GET['id_gioithieu'] ?>" method="post" enctype="multipart/form-data"  >
                    					<div class="control-group">
											<label class="control-label" for="basicinput">Tiêu đề giới thiệu</label>
											<div class="controls">
												<input data-title="A tooltip for the input" type="text" name="tieude"value="<?php echo $row1['tieude']?>" data-original-title="" class="span8 tip">
											</div>
										</div>

                    					<div class="control-group">
											<label class="control-label" for="basicinput">Nội dung giới thiệu</label>
											<div class="controls">
												<textarea  rows="10" name="noidung" style="resize: none;"><?php echo $row1['noidung']?></textarea>

											</div>
										</div>
                                        
                    					<div class="control-group" style="text-align:center;">       
											<div class="controls">
                                            <button  type="submit " class="btn btn-success "  name="suagioithieu">Cập nhật</button>
                                            </div>                  
										</div>
									</form>
                  			<?php 
                    			}
                  			?>
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
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	    <script src="//cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
	    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
	    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
	    <script>
        CKEDITOR.replace('noidung');
    </script>
    </body>
</html>