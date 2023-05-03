<?php
        include("config.php");   
        $id_danhsach=$_GET['id_danhsach'];
        $id_hocvien=$_GET['id_hocvien'];
        $sql_tthd="UPDATE chi_tiet_hoc SET tt_hoatdong='1' WHERE id_danhsach='$_GET[id_danhsach]' AND id_hocvien='$id_hocvien'";
        mysqli_query($connection,$sql_tthd);
        $sql_cth="SELECT*FROM chi_tiet_hoc WHERE id_danhsach='$id_danhsach' AND id_hocvien='$id_hocvien'";
        $res_cth=mysqli_query($connection,$sql_cth);
        if($row_cth=mysqli_fetch_assoc($res_cth)){

            $sql_ds="SELECT*FROM danhsachlop,capbac WHERE danhsachlop.id_cap=capbac.id_cap AND danhsachlop.id_danhsach='$id_danhsach'";
            $res_ds=mysqli_query($connection,$sql_ds);
            $row_ds=mysqli_fetch_assoc($res_ds); 

            $sql_hv="SELECT * FROM hocvien WHERE id_hocvien='$row_cth[id_hocvien]'";
            $res_hv=mysqli_query($connection,$sql_hv);
            $row_hv=mysqli_fetch_assoc($res_hv);
            $lop=$row_ds['ten_cap'].'<br>'. $row_hv['lop_dahoc'];
            
            $sql_aaa="UPDATE hocvien SET lop_dahoc='$lop', trangthai='0', id_danhsach='0', ngayvaohoc='' WHERE id_hocvien='$row_cth[id_hocvien]'";
            mysqli_query($connection,$sql_aaa);
            if(mysqli_query($connection,$sql_aaa)){
                header("Location: xemlop.php?id_danhsach=".$id_danhsach); 
            }else{
                echo "Not inserted";
            }
        }
?>