<?php
	 include("config.php");

   $id_giaovien= $_GET['id_giaovien'];
   $ten_gv=$_POST['ten_gv'];
   $gioitinh=$_POST['gioitinh'];
   $quoctich=$_POST['quoctich'];
   $doituongday=$_POST['doituongday'];

   if (isset($_POST['submit']) ){
   $sql="UPDATE `giaovien`SET ten_gv='$ten_gv',gioitinh='$gioitinh', quoctich='$quoctich', doituongday='$doituongday' WHERE id_giaovien= '$_GET[id_giaovien]' ";

   mysqli_query($connection,$sql);

   if(mysqli_query($connection,$sql)){
      header("Location: canhan.php?giaovien=".$id_giaovien); 
   }else{
        echo "Không chỉnh sửa được!";
   }
   
}

 
?>