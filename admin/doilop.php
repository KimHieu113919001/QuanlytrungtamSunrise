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
        
       
        $id_danhsach=$_POST['id_danhsach'];
        
        $res=false;
        $insert_query="UPDATE `hocvien`SET id_danhsach='$id_danhsach', trangthai='1' WHERE id_hocvien='$_GET[id_hocvien]'";
        $res= mysqli_query($connection,$insert_query);
            
        if($res==true){
          
            header('Location:quanlydanhsachlop.php');
        
        }
        else{
            die('unsuccessful' .mysqli_error($connection));
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
								<h3>Đổi lớp</h3>
							</div>
							<div class="module-body">
                        
                    <form action="" method="post" enctype="multipart/form-data"  >

                    
                    <label class="control-label" for="basicinput">Chọn lớp</label>
                    <select  data-title="A tooltip for the input" data-original-title="" class="span8 tip" id="id_danhsach" name="id_danhsach" required>
                    <option value="">--Chọn--</option>  
                      <?php 
                      $sql_gv="SELECT * FROM danhsachlop,giaovien,capbac WHERE danhsachlop.id_giaovien=giaovien.id_giaovien AND danhsachlop.id_cap=capbac.id_cap";
                      $query_gv= mysqli_query($connection,$sql_gv);
                      while($row_gv= mysqli_fetch_assoc($query_gv)){
                        ?>
                        <option value="<?php echo $row_gv['id_danhsach']?>"><?php echo $row_gv['ten_gv']?> (<?php echo $row_gv['ten_cap']?> - <?php echo $row_gv['ngayhoc']?> - <?php echo $row_gv['thoigian']?>)</option>
                        <?php
                      }
                      ?>
                    </select>
                    </div>
                   
										
											<div class="controls" style="text-align:center;">
												<button type="submit" class="btn btn-success"  name="submit">Cập nhật</button>
											</div>
									</form>
							</div>
						</div>

					</div>
				</div>
</body>
</html>