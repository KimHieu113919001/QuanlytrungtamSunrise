<?php

   $diemnghe=$_POST['diemnghe'];
   $diemnoi=$_POST['diemnoi'];
   $diemdoc=$_POST['diemdoc'];
   $diemviet=$_POST['diemviet'];
   $diemtong=$_POST['diemtong'];
   $xeploai=$_POST['xeploai'];
   $nhanxet=$_POST['nhanxet'];
   $nhanqua=$_POST['nhanqua'];
  
   include("config.php");  
   if (isset($_POST['suadiem'])){
   $sql="UPDATE diemso SET diemnghe='$diemnghe',diemnoi='$diemnoi',diemdoc='$diemdoc',diemviet='$diemviet',diemtong='$diemtong',xeploai='$xeploai',nhanxet='$nhanxet',nhanqua='$nhanqua' WHERE id_diem='$_GET[id_diem]'";
   mysqli_query($connection,$sql);

                  if(mysqli_query($connection,$sql)){
                  header("Location: thongtindiem.php?id_hocvien=".$_GET['id_hocvien']); 
                  }else{
                  echo "Not inserted";
                  }

   }
   ?>