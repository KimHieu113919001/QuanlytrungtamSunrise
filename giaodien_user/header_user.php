<?php
    include("config.php");
    $sql_ten="SELECT * FROM hocvien WHERE id_hocvien='$_SESSION[id_hocvien]'";
    $res_ten=mysqli_query($connection,$sql_ten);
    $row_ten=mysqli_fetch_array($res_ten);

    $request_uri= $_SERVER['REQUEST_URI'];
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
                <li class="nav-item <?php if((strpos($request_uri,"user.php")!==false)){echo "active";}?>">
                <a href="user.php" style="font-weight:bold;"  class="nav-item nav-link ">Trang chủ</a>
                </li>
                <li class="nav-item <?php if((strpos($request_uri,"user_gioithieu.php")!==false)){echo "active";}?>">
                <a href="user_gioithieu.php" style="font-weight:bold;"  class="nav-item nav-link">Giới thiệu</a>
                </li>
                <li class="nav-item <?php if((strpos($request_uri,"user_khoahoc.php")!==false)){echo "active";}?>">
                <a href="user_khoahoc.php" style="font-weight:bold;"  class="nav-item nav-link">Cấp độ</a>
                </li>
                <li class="nav-item <?php if((strpos($request_uri,"user_giaovien.php")!==false)){echo "active";}?>">
                <a href="user_giaovien.php" style="font-weight:bold;"  class="nav-item nav-link">Giáo viên</a>
                </li>
                
            <!-- Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" style="font-weight:bold;" id="navbardrop" data-toggle="dropdown">
                    Điểm số
                    </a>
                    <div class="dropdown-menu">
                    <a href="user_diemso.php?id_hocvien=<?php echo $_SESSION['id_hocvien']; ?>" style="font-weight:bold;"  class="dropdown-item"> Điểm học</a>
                    <a href="user_diemtest.php?id_hocvien=<?php echo $_SESSION['id_hocvien']; ?>" style="font-weight:bold;"  class="dropdown-item"> Điểm kiểm tra</a>
                    </div>
                </li>
               

                <!-- <li class="nav-item">
                <a href="user_diemso.php?id_hocvien=<?php echo $_SESSION['id_hocvien']; ?>" style="font-weight:bold;"  class="nav-item nav-link">Điểm số</a>
                </li> -->
                <li class="nav-item <?php if((strpos($request_uri,"user_dangkyhoc.php")!==false)){echo "active";}?>">
                <a href="user_dangkyhoc.php?id_hocvien=<?php echo $_SESSION['id_hocvien']; ?>" style="font-weight:bold;"  class="nav-item nav-link">Đăng ký học</a>
                </li>
                <li class="nav-item <?php if((strpos($request_uri,"user_danhsachbaiviet.php")!==false)){echo "active";}?>">
                <a href="user_danhsachbaiviet.php" style="font-weight:bold;"  class="nav-item nav-link">Bài viết</a>
                </li>
                <li class="nav-item <?php if((strpos($request_uri,"user_lichhoc.php")!==false)){echo "active";}?>">
                <a href="user_lichhoc.php?id_hocvien=<?php echo $_SESSION['id_hocvien']?>" style="font-weight:bold;"  class="nav-item nav-link">Lịch học</a>
                </li>
                <li class="nav-item <?php if((strpos($request_uri,"user_lichhen.php")!==false)){echo "active";}?>">
                <a href="user_lichhen.php?id_hocvien=<?php echo $_SESSION['id_hocvien']?>" style="font-weight:bold;"  class="nav-item nav-link">Lịch hẹn</a>
                </li>
            </ul>
            <ul class="navbar-nav" style="margin-right: 5%; ">
            <!-- Dropdown -->
                <li class="nav-item dropdown <?php if((strpos($request_uri,"user_canhan.php")!==false)){echo "active";}?>">
                    <a class="nav-link dropdown-toggle" style="font-weight:bold;" id="navbardrop" data-toggle="dropdown">
                    Tài khoản
                    </a>
                    <div class="dropdown-menu">
                    <a href="user_canhan.php?hocvien=<?php echo $_SESSION['id_hocvien']; ?>" style="font-weight:bold;color:red;"  class="dropdown-item"> <?php echo ucwords($row_ten['ten_hv']) ?></a>
                    <a class="dropdown-item btn btn-primary py-2 px-4 ml-auto  d-lg-block" href="logout.php">Đăng xuất</a>
                    </div>
                </li>
            </ul>
        </div>
</div>
</nav>                        

                           
