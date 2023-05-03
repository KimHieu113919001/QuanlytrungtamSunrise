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
    
    
	$id_hocvien=$_GET['id_hocvien'];
    $id_danhsach=$_GET['id_danhsach'];

$sql_sua_diem="SELECT * FROM diemso WHERE id_hocvien='$id_hocvien' AND id_danhsach='$id_danhsach'";
$query_sua_diem= mysqli_query($connection,$sql_sua_diem);
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
<body>
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
								<h3>Sửa điểm</h3>
							</div>
							<div class="module-body">
              					<?php 
        					        while ($row= mysqli_fetch_assoc($query_sua_diem)){
          						?>
                    <form action="updatediem.php?id_hocvien=<?php echo $_GET['id_hocvien'] ?>&id_diem=<?php echo $row["id_diem"]; ?>" method="post" enctype="multipart/form-data"  >
                    					<div class="control-group">
											<label class="control-label" for="basicinput">Điểm nghe</label>
											<div class="controls">
												<input data-title="A tooltip for the input" type="text" name="diemnghe" value="<?php echo $row['diemnghe']?>" data-original-title="" class="span8 tip">
											</div>
										</div>

                    					<div class="control-group">
											<label class="control-label" for="basicinput">Điểm nói</label>
											<div class="controls">
												<input data-title="A tooltip for the input" type="text" name="diemnoi" value="<?php echo $row['diemnoi']?>"   data-original-title="" class="span8 tip">
											</div>
										</div>


                    					<div class="control-group">
											<label class="control-label" for="basicinput">Điểm đọc</label>
											<div class="controls">
												<input data-title="A tooltip for the input" type="text" name="diemdoc" value="<?php echo $row['diemdoc']?>" data-original-title="" class="span8 tip">
											</div>
										</div>

                                        <div class="control-group">
											<label class="control-label" for="basicinput">Điểm viết</label>
											<div class="controls">
												<input data-title="A tooltip for the input" type="text" name="diemviet" value="<?php echo $row['diemviet']?>" data-original-title="" class="span8 tip">
											</div>
										</div>

                                        <div class="control-group">
											<label class="control-label" for="basicinput">Điểm tổng</label>
											<div class="controls">
												<input data-title="A tooltip for the input" type="text" name="diemtong" value="<?php echo $row['diemtong']?>" data-original-title="" class="span8 tip">
											</div>
										</div>

                                        <div class="control-group">
											<label class="control-label" for="basicinput">Xếp loại</label>
											<div class="controls">
												<input data-title="A tooltip for the input" type="text" name="xeploai" value="<?php echo $row['xeploai']?>" data-original-title="" class="span8 tip">
											</div>
										</div>

                                        <div class="control-group">
											<label class="control-label" for="basicinput">Nhận xét</label>
											<div class="controls">
												<textarea data-title="A tooltip for the input" type="text" name="nhanxet"  data-original-title="" class="span8 tip"><?php echo $row['nhanxet']?></textarea>
											</div>
										</div>

                                        <div class="control-group">
											<label class="control-label" for="basicinput">Nhận quà</label>
											<div class="controls">
												<textarea data-title="A tooltip for the input" type="text" name="nhanqua" data-original-title="" class="span8 tip"><?php echo $row['nhanqua']?></textarea>
											</div>
										</div>

										<div class="control-group" style="text-align:center;">
											<div class="controls">
												<button type="submit" class="btn btn-success" name="suadiem">Sửa</button>
											</div>
										</div>
									</form>
                  			<?php 
                    			}
                  			?>

							</div>
						</div>

						
						
					</div><!--/.content-->
				</div>

</body>
</html>