<?php
    include("config.php");   
    $id_danhsach=$_GET['id_danhsach'];

    $sql_tthd="UPDATE danhsachlop SET tt_hoatdong='1' WHERE id_danhsach='$_GET[id_danhsach]'";
    mysqli_query($connection,$sql_tthd);
    if(mysqli_query($connection,$sql_tthd)){
        header("Location: xemlop.php?id_danhsach=".$id_danhsach); 
    }else{
        echo "Not inserted";
    }
    
    
    // $sql4="UPDATE diemso SET trangthaidiem='1' WHERE id_hocvien='$_GET[id_hocvien]' AND id_danhsach='$_GET[id_danhsach]'";
    // mysqli_query($connection,$sql4);
?>
