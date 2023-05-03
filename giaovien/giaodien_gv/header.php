<?php include("config.php");
    $sqlten= "SELECT * FROM `giaovien` WHERE id_giaovien='$_SESSION[id_giaovien]'";
    $resten=mysqli_query($connection,$sqlten);
    $rowten=mysqli_fetch_assoc($resten);

    $sql2= "SELECT * FROM `giaovien` WHERE gv_xeplich ='1' AND id_giaovien='$_SESSION[id_giaovien]'";
    $res2=mysqli_query($connection,$sql2);
    $row2=mysqli_fetch_assoc($res2);
    if($row2 > 0){
        $i='<li class="nav-item">
        <a class="nav-item nav-link" style="font-weight:bold;" href="../giaovien/lichtruc/sualichdemo.php">Xếp lịch trực</a>
    </li>';

    }else{
        $i="";
    }

    $sql3= "SELECT * FROM `giaovien` WHERE gv_xepphong ='1' AND id_giaovien='$_SESSION[id_giaovien]'";
    $res3=mysqli_query($connection,$sql3);
    $row3=mysqli_fetch_assoc($res3);
    if($row3 > 0){
        $ii='<li class="nav-item">
            <a href="../giaovien/lichtruc/xepphong.php" class="nav-item nav-link"  style="font-weight:bold;">Xếp phòng học</a>
    </li>';
    }else{
        $ii="";
    }

    $sql_lichhoc= "SELECT * FROM `giaovien` WHERE gv_truc ='1' AND id_giaovien='$_SESSION[id_giaovien]'";
    $res_lichhoc=mysqli_query($connection,$sql_lichhoc);
    $row_lichhoc=mysqli_fetch_assoc($res_lichhoc);
    if($row_lichhoc > 0){
        $iii='<li class="nav-item">
            <a href="xemlich.php" style="font-weight:bold;"  class="nav-item nav-link">Lịch trực tuần</a>
    </li>';
    }else{
        $iii="";
    }

    // $sql2_ktnoi= "SELECT * FROM chi_tiet_diem_test, tructuan WHERE chi_tiet_diem_test.id_truc=tructuan.id_truc AND tructuan.id_giaovien='$_SESSION[id_giaovien]' AND chi_tiet_diem_test.id_giaovien='$_SESSION[id_giaovien]'AND chi_tiet_diem_test.trangthainoi ='0' AND chi_tiet_diem_test.trangthaitest='1'";
    // $res2_ktnoi=mysqli_query($connection,$sql2_ktnoi);
    // if(mysqli_num_rows($res2_ktnoi)>0){
    //         $iiii=0;
    //     while($row2_ktnoi=mysqli_fetch_assoc($res2_ktnoi)){  
    //         $iiii++;
    //     }
    // }else{
    //         $iiii="";
    // }    
    
    // $sql2_chuaduyet= "SELECT * FROM chi_tiet_diem_test, tructuan WHERE chi_tiet_diem_test.id_truc=tructuan.id_truc AND tructuan.id_giaovien='$_SESSION[id_giaovien]' AND chi_tiet_diem_test.id_giaovien='0'AND chi_tiet_diem_test.trangthainoi ='0' AND chi_tiet_diem_test.trangthaitest='1'";
    // $res2_chuaduyet=mysqli_query($connection,$sql2_chuaduyet);
    // if(mysqli_num_rows($res2_chuaduyet)>0){
    //         $iiiiii=0;
    //     while($row2_chuaduyet=mysqli_fetch_assoc($res2_chuaduyet)){  
    //         $iiiiii++;
    //     }
    // }else{
    //         $iiiiii="";
    // }    

    $sql_ktnoi= "SELECT * FROM `giaovien` WHERE gv_ktnoi ='1' AND id_giaovien='$_SESSION[id_giaovien]'";
    $res_ktnoi=mysqli_query($connection,$sql_ktnoi);
    $row_ktnoi=mysqli_fetch_assoc($res_ktnoi);
    if($row_ktnoi > 0){
        
        $iiiii='<li class="nav-item">
        <a href="lichhen.php" style="font-weight:bold;" class="nav-item nav-link ">HV đăng ký</a>
        </li>
        <li class="nav-item">
        <a href="kiemtranoi.php" style="font-weight:bold;" class="nav-item nav-link ">Kiểm tra nói</a>
        </li>';
    }else{
        $iiiii="";
    }
?>

   
    <!-- New-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark w-100">
    <div class="container-fluid">
        <!-- Brand -->
        <a class="navbar-brand" href="index_gv.php" style="font-weight:bold; font-size: 30px;">
            SUNRISE
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Links -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto" style="margin-right: 5%;">
                <li class="nav-item active">
                <a href="index_gv.php" style="font-weight:bold;"  class="nav-item nav-link active">Trang chủ</a>
                </li>
                <li class="nav-item">
                <a href="gioithieu.php" style="font-weight:bold;"  class="nav-item nav-link">Giới thiệu</a>
                </li>
                <?php echo $iii?>
                <li class="nav-item">
                <a href="xemlichhoc.php?id_giaovien=<?php echo $_SESSION['id_giaovien']; ?>" style="font-weight:bold;"  class="nav-item nav-link">Lịch dạy</a>
                </li>
                <?php echo $i?>
                <?php echo $ii?>
                <li class="nav-item">
                <a href="lopdangday.php" style="font-weight:bold;"  class="nav-item nav-link ">Lớp đang dạy</a>
                </li>
                
                <?php echo $iiiii?>
                
            </ul>
            <ul class="navbar-nav" style="margin-right: 5%;">
            <!-- Dropdown -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" style="font-weight:bold;" id="navbardrop" data-toggle="dropdown">
                Tài khoản
                </a>
                <div class="dropdown-menu">
                <a href="canhan.php?giaovien=<?php echo $_SESSION['id_giaovien']; ?>" style="font-weight:bold;color:red;"  class="dropdown-item"> <?php echo $rowten['ten_gv']; ?></a>
                <a class="dropdown-item btn btn-primary py-2 px-4 ml-auto  d-lg-block" href="logout.php">Đăng xuất</a>
                </div>
            </li>
            </ul>
        </div>
</div>
</nav>                        
