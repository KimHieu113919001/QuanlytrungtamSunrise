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


    if(isset($_POST['submit'])){
        
        
        $ten_gv=$_POST['ten_gv'];
        $gioitinh=$_POST['gioitinh'];
        $quoctich=$_POST['quoctich'];
        $chuyenmon=$_POST['chuyenmon'];
        $kinhnghiem=$_POST['kinhnghiem'];
        $doituongday=$_POST['doituongday'];
       
        
        //$drphoto=$_FILES['file']['name'];
        $anhdaidien= $_FILES['file']['name'];
        
        //image Upload
    
       move_uploaded_file($_FILES['file']['tmp_name'],"../admin/images/".$_FILES['file']['name']); 
        
        $res=false;
        $insert_query="INSERT INTO `giaovien`(`id_giaovien`, `ten_gv`,`gioitinh`,`quoctich`,`chuyenmon`,`kinhnghiem`,`doituongday`,`anhdaidien`) VALUES ('','$ten_gv','$gioitinh','$quoctich','$chuyenmon','$kinhnghiem','$doituongday','$anhdaidien')";
        
        $res= mysqli_query($connection,$insert_query);
            
        if($res>0){
          $msg='<script type="text/javascript">
          $(document).ready(function() {
              swal({
                  title: "Thành công!",
                  text: "Đã thêm giáo viên mới!",
                  icon: "success",
                  button: "Ok",
                  timer: 2000
              });
          });
      </script>'; 
        }
        else{
          $msg='<script type="text/javascript">
          $(document).ready(function() {
                swal("Không thể thêm giáo viên!", {
                          icon: "error",
                      });
                  
              });
          </script>'; 
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
        <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
								<h3>Thêm giáo viên</h3>
							</div>
              
							<div class="module-body">
              <?php echo $msg;?>  
                    <form action="" method="post" enctype="multipart/form-data"  >
                    
                    <div class="control-group">
						<label class="control-label" for="basicinput">Tên giáo viên</label>
								<div class="controls">
									<input data-title="A tooltip for the input" type="text" name="ten_gv" placeholder="Nhập tên giáo viên" required data-original-title="" class="span8 tip">
								</div>
					</div>

                    <div class="control-group">
							<label class="control-label">Giới tính</label>
								<div class="controls">
									<label class="radio inline">
										<input type="radio" name="gioitinh" id="gioitinh" value="Nam" checked="">
										Nam
									</label> 
							<label class="radio inline">
									    <input type="radio" name="gioitinh" id="gioitinh" value="Nữ">
										Nữ
							</label> 
                                </div>
					</div>

                    <div class="control-group">
							<label class="control-label" for="basicinput">Quốc tịch</label>
								<div class="controls">
									<input data-title="A tooltip for the input" type="text" name="quoctich" placeholder="Nhập quốc tịch" data-original-title="" class="span8 tip">
								</div>
					</div>

                    <div class="control-group">
							<label class="control-label" for="basicinput">Chuyên môn</label>
								<div class="controls">
									<textarea data-title="A tooltip for the input" type="text" name="chuyenmon" placeholder="Nhập chuyên môn"  data-original-title="" class="span8 tip"></textarea>
								</div>
					</div>

                    <div class="control-group">
											<label class="control-label" for="basicinput">Kinh nghiệm</label>
											<div class="controls">
												<input data-title="A tooltip for the input" type="text" name="kinhnghiem" placeholder="Nhập kinh nghiệm"  data-original-title="" class="span8 tip">
											</div>
										</div>

                    <div class="control-group">
											<label class="control-label" for="basicinput">Đối tượng dạy</label>
											<div class="controls">
												<textarea data-title="A tooltip for the input" type="text" name="doituongday" placeholder="Nhập đối tượng dạy"  data-original-title="" class="span8 tip"></textarea>
											</div>
                    </div>

										<div class="control-group">
                        <span class="input-group-addon a"><b>Ảnh đại diện: </b></span>&ensp;
                        <input  type="file" class="form-control" name="file"> 
										</div>

										<div class="control-group" style="text-align:center;">
											<div class="controls">
												<button type="submit" class="btn btn-success" name="submit">Thêm mới</button>
											</div>
										</div>
									</form>
							</div>
						</div>

						
						
					</div><!--/.content-->
				</div>
                <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="//cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
	<script>
	      CKEDITOR.replace('thongtinlienhe');
        CKEDITOR.replace('tomtat');
        CKEDITOR.replace('mota');
    </script>
</body>
</html>