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
    
    
?>
<?php
$sql_sua_gv="SELECT * FROM giaovien WHERE id_giaovien='$_GET[id_giaovien]' LIMIT 1";
$query_sua_gv= mysqli_query($connection,$sql_sua_gv);
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
								<h3>Sửa giáo viên</h3>
							</div>
							<div class="module-body">
              					<?php 
        					while ($row= mysqli_fetch_assoc($query_sua_gv)){
          
          						?>
                    <form action="updategiaovien.php?id_giaovien=<?php echo $_GET['id_giaovien'] ?>" method="post" enctype="multipart/form-data"  >
                    					<div class="control-group">
											<label class="control-label" for="basicinput">Tên giáo viên</label>
											<div class="controls">
												<input data-title="A tooltip for the input" type="text" name="ten_gv"value="<?php echo $row['ten_gv']?>" data-original-title="" class="span8 tip">
											</div>
										</div>

                    					<div class="control-group">
											<label class="control-label">Giới tính</label>
											<div class="controls">
												<label class="radio inline">
												<input type="radio" name="gioitinh" value="Nam" <?php echo ($row['gioitinh']=='Nam')?'checked':'' ?>>Nam
												</label> 
												<label class="radio inline">
												<input type="radio" name="gioitinh" value="Nữ" <?php echo ($row['gioitinh']=='Nữ')?'checked':'' ?>>Nữ
												</label>
											</div>
										</div>

                    					<div class="control-group">
											<label class="control-label" for="basicinput">Quốc tịch</label>
											<div class="controls">
												<input data-title="A tooltip for the input" type="text" name="quoctich" value="<?php echo $row['quoctich']?>" data-original-title="" class="span8 tip">
											</div>
										</div>

                    					<div class="control-group">
											<label class="control-label" for="basicinput">Chuyên môn</label>
											<div class="controls">
												<textarea data-title="A tooltip for the input" type="text" name="chuyenmon" data-original-title="" class="span8 tip"><?php echo $row['chuyenmon']?></textarea>
											</div>
										</div>

                    					<div class="control-group">
											<label class="control-label" for="basicinput">Kinh nghiệm</label>
											<div class="controls">
												<input data-title="A tooltip for the input" type="text" name="kinhnghiem" value="<?php echo $row['kinhnghiem']?>" data-original-title="" class="span8 tip">
											</div>
										</div>

                    					<div class="control-group">
											<label class="control-label" for="basicinput">Đối tượng dạy</label>
											<div class="controls">
												<textarea data-title="A tooltip for the input" type="text" name="doituongday" data-original-title="" class="span8 tip"><?php echo $row['doituongday']?></textarea>
											</div>
                    					</div>

                    					<div class="control-group">
											<label class="control-label" for="basicinput">Ảnh đại diện</label>
											<div class="controls">
                      							<input data-title="A tooltip for the input" type="file" name="anhdaidien" class="span8 tip">
											</div>
										</div>

										<div class="control-group" style="text-align:center;">
											<div class="controls">
												<button type="submit" class="btn btn-success" name="suagiaovien">Cập nhật</button>
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