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


    //Trắc nghiệm
    if(isset($_POST['them1'])){
       
        $noidung1=$_POST['noidung'];
        $noidung=str_replace("'", "\'", $noidung1);
        $dapan_A=$_POST['dapan_A'];
        $dapan_B=$_POST['dapan_B'];
        $dapan_C=$_POST['dapan_C'];
        $dapan_D=$_POST['dapan_D'];       
        
        $hinhanh= $_FILES['hinhanh']['name'];
        move_uploaded_file($_FILES['hinhanh']['tmp_name'],"../admin/images/".$_FILES['hinhanh']['name']); 

        $hinhA= $_FILES['hinhA']['name'];
        move_uploaded_file($_FILES['hinhA']['tmp_name'],"../admin/images/".$_FILES['hinhA']['name']); 

        $hinhB= $_FILES['hinhB']['name'];
        move_uploaded_file($_FILES['hinhB']['tmp_name'],"../admin/images/".$_FILES['hinhB']['name']); 

        $hinhC= $_FILES['hinhC']['name'];
        move_uploaded_file($_FILES['hinhC']['tmp_name'],"../admin/images/".$_FILES['hinhC']['name']); 

        $hinhD= $_FILES['hinhD']['name'];
        move_uploaded_file($_FILES['hinhD']['tmp_name'],"../admin/images/".$_FILES['hinhD']['name']); 

        $dapan_dung=$_POST['dapan_dung'];
        $id_de=$_GET['id_de'];
        $ngaycapnhat_ch=$_POST['ngaycapnhat_ch'];
        $id_dangcauhoi=$_POST['id_dangcauhoi'];
        $id_kynang=$_POST['id_kynang'];


        $insert_query="INSERT INTO `cau_hoi`(`id_cauhoi`,`noidung`,`hinhanh`,`dapan_A`,`hinhA`,`dapan_B`,`hinhB`,`dapan_C`,`hinhC`,`dapan_D`,`hinhD`,`dapan_dung`,`ngaycapnhat_ch`,`id_de`,`id_kynang`) VALUES ('','$noidung','$hinhanh','$dapan_A','$hinhA','$dapan_B','$hinhB','$dapan_C','$hinhC','$dapan_D','$hinhD','$dapan_dung','$ngaycapnhat_ch','$id_de','$id_kynang')";
        $res= mysqli_query($connection,$insert_query);
            
        if($res=true){
            $msg="<script language='javascript'>
            swal(
                'Thành công!',
                'Thêm thành công!',
                 'success'      
                 );
                 var timer = setTimeout(function() {
                  window.location=('danhsachcauhoi.php?id_de=$id_de')
              }, 2000);
      </script>";   
       
        }
        else{
            die('Thêm thất bại!' .mysqli_error($connection));
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
}

</style>
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
					<h3>Thêm câu hỏi</h3>
				</div>
				<div class="module-body" >
                    <?php echo $msg;?>
                    <!-- <span class="input-group-addon a"><b>Chọn dạng câu hỏi</b></span>
                    <select data-title="A tooltip for the input" onchange="myFunction()" data-original-title="" class="span8 tip themch" name="id_dangcauhoi" > 
                      <option>--Chọn--</option>
                      <?php
                      $sql_loai="SELECT * FROM dang_cau_hoi ORDER BY id_dangcauhoi ASC";
                      $query_loai= mysqli_query($connection,$sql_loai);
                      while($row_loai= mysqli_fetch_assoc($query_loai)){
                        ?>
                        <option value="<?php echo $row_loai['id_dangcauhoi']?>"><?php echo ucwords($row_loai['ten_dang'])?></option>
                        <?php
                      }
                      ?>
                    </select>

                    <div class="show" >
                        
                    </div>         -->

                    <form action="" method="post" enctype="multipart/form-data" >
							<label class="control-label" for="basicinput">Chọn dạng kỹ năng</label>
                            <div class="controls"style="text-align:center;">
						<select data-title="A tooltip for the input"data-original-title="" class="span8 tip" name="id_kynang"  required> 
						<option value="">--Chọn--</option>
						<?php
						$sql_kn="SELECT * FROM kynang ORDER BY id_kynang ASC";
						$query_kn= mysqli_query($connection,$sql_kn);
						while($row_kn= mysqli_fetch_assoc($query_kn)){
							?>
							<option value="<?php echo $row_kn['id_kynang']?>"><?php echo ucwords($row_kn['ten_kynang'])?></option>
							<?php
						}
						?>
						</select>
                        </div>

                        <div class="control-group">
							<label class="control-label" for="basicinput">Nội dung câu hỏi</label>
								<div class="controls"style="text-align:center;">
									<textarea data-title="A tooltip for the input" type="text" name="noidung" placeholder="Nhập nội dung câu hỏi" data-original-title="" class="span8 tip" ></textarea>
								</div>
						</div>

						<div class="control-group">
								<div class="controls"style="text-align:center;">
									<input data-title="A tooltip for the input" type="file" name="hinhanh" placeholder="Nhập nội dung câu hỏi" data-original-title="" class="span8 tip" >
								</div>
						</div>

                        <div class="control-group">
							<label class="control-label" style="color:red;" for="basicinput">ĐÁP ÁN A</label>
								<div class="controls"style="text-align:center;">
									<input data-title="A tooltip for the input" type="text" name="dapan_A" placeholder="Nhập đáp án A" data-original-title="" class="span8 tip" >
								</div>
						</div>
                        <div class="control-group">
								<div class="controls"style="text-align:center;">
									<input data-title="A tooltip for the input" type="file" name="hinhA" placeholder="Nhập nội dung câu hỏi" data-original-title="" class="span8 tip" >
								</div>
						</div>

                        <div class="control-group">
							<label class="control-label" style="color:red;" for="basicinput">ĐÁP ÁN B</label>
								<div class="controls"style="text-align:center;">
									<input data-title="A tooltip for the input" type="text" name="dapan_B" placeholder="Nhập đáp án B" data-original-title="" class="span8 tip" >
								</div>
						</div>
                        <div class="control-group">
								<div class="controls"style="text-align:center;">
									<input data-title="A tooltip for the input" type="file" name="hinhB" placeholder="Nhập nội dung câu hỏi" data-original-title="" class="span8 tip" >
								</div>
						</div>

                        <div class="control-group">
							<label class="control-label" style="color:red;" for="basicinput">ĐÁP ÁN C</label>
								<div class="controls"style="text-align:center;">
									<input data-title="A tooltip for the input" type="text" name="dapan_C" placeholder="Nhập đáp án C" data-original-title="" class="span8 tip" >
								</div>
						</div>
                        <div class="control-group">
								<div class="controls"style="text-align:center;">
									<input data-title="A tooltip for the input" type="file" name="hinhC" placeholder="Nhập nội dung câu hỏi" data-original-title="" class="span8 tip" >
								</div>
						</div>

                        <div class="control-group">
							<label class="control-label" style="color:red;" for="basicinput">ĐÁP ÁN D</label>
								<div class="controls"style="text-align:center;">
									<input data-title="A tooltip for the input" type="text" name="dapan_D" placeholder="Nhập đáp án D" data-original-title="" class="span8 tip" >
								</div>
						</div>
                        <div class="control-group">
								<div class="controls"style="text-align:center;">
									<input data-title="A tooltip for the input" type="file" name="hinhD" placeholder="Nhập nội dung câu hỏi" data-original-title="" class="span8 tip" >
								</div>
						</div>
			

                        ĐÁP ÁN ĐÚNG
                        <div class="control-group">
							<label class="radio inline">
								<input type="radio" name="dapan_dung" value="A" required>
									A
							</label> 
                            &ensp;&ensp;
							<label class="radio inline">
								<input type="radio" name="dapan_dung" value="B">
									B
							</label> 
                            &ensp;&ensp;
							<label class="radio inline">
								<input type="radio" name="dapan_dung" value="C">
									C
							</label> 
                            &ensp;&ensp;
							<label class="radio inline">
								<input type="radio" name="dapan_dung" value="D">
									D
							</label> 
						</div>                        
                        <div class="control-group">
							<label class="control-label" for="basicinput">Ngày cập nhật</label>
								<div class="controls">
                                    <input type="text" id="ngaycapnhat_ch"  class="form-control" name="ngaycapnhat_ch" value="<?php echo date('d/m/Y');?>" readonly>
								</div>
						</div>
						<div class="control-group hidden">
								<div class="controls">
                                    <input type="text" id="id_dangcauhoi"  class="form-control" name="id_dangcauhoi" value="<?php echo $id_dangcauhoi;?>" readonly>
								</div>
						</div>
						<div class="control-group"style="text-align:center;">
							<div class="controls">
								<button type="submit" class="btn btn-success"  name="them1">Thêm mới</button>
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
    $(document).ready(function(){
        $(".themch").change(function(){
            var id_dangcauhoi = $(".themch").val();
            $.post("themcauhoi2.php",{id_dangcauhoi:id_dangcauhoi}, function(data){
                $(".show").html(data);
            })
        })
    })
    </script>

</body>
</html>