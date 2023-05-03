<?php
include("config.php");
$id_tuan = $_GET['id_tuan'];
$sql_ngay="SELECT * FROM tuan WHERE id_tuan='$id_tuan'";
$res_ngay= mysqli_query($connection,$sql_ngay);
$row_ngay=mysqli_fetch_array($res_ngay);
$T2=$row_ngay['ngaybatdau'];

$T3 = strtotime ( '+1 day' , strtotime ($T2) );
$T3 = date ( 'Y-m-d' , $T3 );

$T4 = strtotime ( '+1 day' , strtotime ($T3) );
$T4 = date ( 'Y-m-d' , $T4 );

$T5 = strtotime ( '+1 day' , strtotime ($T4) );
$T5 = date ( 'Y-m-d' , $T5 );

$T6 = strtotime ( '+1 day' , strtotime ($T5) );
$T6 = date ( 'Y-m-d' , $T6 );

$T7 = strtotime ( '+1 day' , strtotime ($T6) );
$T7 = date ( 'Y-m-d' , $T7 );

$CN = strtotime ( '+1 day' , strtotime ($T7) );
$CN = date ( 'Y-m-d' , $CN );

if(isset($_POST['sualichsang'])){
        
        $thu_2=$_POST['thu_2'];
        $thu_3=$_POST['thu_3'];
        $thu_4=$_POST['thu_4'];
        $thu_5=$_POST['thu_5'];
        $thu_6=$_POST['thu_6'];
        $thu_7=$_POST['thu_7'];
        $chu_nhat=$_POST['chu_nhat'];

        //Thứ 2 sáng
        $sql_suat2s="SELECT * FROM tructuan WHERE id_tuan=$id_tuan AND id_buoi='1' AND id_thu='1'";
        $res_suat2s= mysqli_query($connection,$sql_suat2s);
        $suat2s = [];
        foreach($res_suat2s as $t2s){
          $suat2s[] = $t2s['id_giaovien'];
        }
        foreach($thu_2 as $t2s_them){
            $id_thu="1";
            $id_buoi="1";
            $so_gio="4";
          if(!in_array($t2s_them, $suat2s)){
            $insert_thu2s="INSERT INTO tructuan (`id_truc`,`id_tuan`,`id_buoi`,`id_thu`,`id_giaovien`,`so_gio`,`ngay`) VALUES('','$id_tuan','$id_buoi','$id_thu','$t2s_them','$so_gio','$T2')";
            $insert_thu2s_run= mysqli_query($connection,$insert_thu2s);
            }
        }
        foreach($suat2s as $t2s_xoa){
            if(!in_array($t2s_xoa, $thu_2)){
                $delete_thu2s="DELETE FROM tructuan WHERE id_tuan=$id_tuan AND id_buoi='1' AND id_thu='1' AND id_giaovien='$t2s_xoa'";
                $delete_thu2s_run= mysqli_query($connection,$delete_thu2s);
            }
        }

        //Thứ 3 sáng
        $sql_suat3s="SELECT * FROM tructuan WHERE id_tuan=$id_tuan AND id_buoi='1' AND id_thu='2'";
        $res_suat3s= mysqli_query($connection,$sql_suat3s);
        $suat3s = [];
        foreach($res_suat3s as $t3s){
          $suat3s[] = $t3s['id_giaovien'];
        }
        foreach($thu_3 as $t3s_them){
            $id_thu="2";
            $id_buoi="1";
            $so_gio="4";
          if(!in_array($t3s_them, $suat3s)){
             $insert_thu3s="INSERT INTO tructuan (`id_truc`,`id_tuan`,`id_buoi`,`id_thu`,`id_giaovien`,`so_gio`,`ngay`) VALUES('','$id_tuan','$id_buoi','$id_thu','$t3s_them','$so_gio','$T3')";
             $insert_thu3s_run= mysqli_query($connection,$insert_thu3s);
            }
        }
        foreach($suat3s as $t3s_xoa){
            if(!in_array($t3s_xoa, $thu_3)){
                $delete_thu3s="DELETE FROM tructuan WHERE id_tuan=$id_tuan AND id_buoi='1' AND id_thu='2' AND id_giaovien='$t3s_xoa'";
                $delete_thu3s_run= mysqli_query($connection,$delete_thu3s);
            }
        }

        //Thứ 4 sáng
        $sql_suat4s="SELECT * FROM tructuan WHERE id_tuan=$id_tuan AND id_buoi='1' AND id_thu='3'";
        $res_suat4s= mysqli_query($connection,$sql_suat4s);
        $suat4s = [];
        foreach($res_suat4s as $t4s){
          $suat4s[] = $t4s['id_giaovien'];
        }
        foreach($thu_4 as $t4s_them){
            $id_thu="3";
            $id_buoi="1";
            $so_gio="4";
          if(!in_array($t4s_them, $suat4s)){
             $insert_thu4s="INSERT INTO tructuan (`id_truc`,`id_tuan`,`id_buoi`,`id_thu`,`id_giaovien`,`so_gio`,`ngay`) VALUES('','$id_tuan','$id_buoi','$id_thu','$t4s_them','$so_gio','$T4')";
             $insert_thu4s_run= mysqli_query($connection,$insert_thu4s);
            }
        }
        foreach($suat4s as $t4s_xoa){
            if(!in_array($t4s_xoa, $thu_4)){
                $delete_thu4s="DELETE FROM tructuan WHERE id_tuan=$id_tuan AND id_buoi='1' AND id_thu='3' AND id_giaovien='$t4s_xoa'";
                $delete_thu4s_run= mysqli_query($connection,$delete_thu4s);
            }
        }

        //Thứ 5 sáng
         $sql_suat5s="SELECT * FROM tructuan WHERE id_tuan=$id_tuan AND id_buoi='1' AND id_thu='4'";
         $res_suat5s= mysqli_query($connection,$sql_suat5s);
         $suat5s = [];
         foreach($res_suat5s as $t5s){
           $suat5s[] = $t5s['id_giaovien'];
         }
         foreach($thu_5 as $t5s_them){
             $id_thu="4";
             $id_buoi="1";
             $so_gio="4";
           if(!in_array($t5s_them, $suat5s)){
              $insert_thu5s="INSERT INTO tructuan (`id_truc`,`id_tuan`,`id_buoi`,`id_thu`,`id_giaovien`,`so_gio`,`ngay`) VALUES('','$id_tuan','$id_buoi','$id_thu','$t5s_them','$so_gio','$T5')";
              $insert_thu5s_run= mysqli_query($connection,$insert_thu5s);
             }
         }
         foreach($suat5s as $t5s_xoa){
             if(!in_array($t5s_xoa, $thu_5)){
                 $delete_thu5s="DELETE FROM tructuan WHERE id_tuan=$id_tuan AND id_buoi='1' AND id_thu='4' AND id_giaovien='$t5s_xoa'";
                 $delete_thu5s_run= mysqli_query($connection,$delete_thu5s);
             }
         }

        //Thứ 6 sáng
        $sql_suat6s="SELECT * FROM tructuan WHERE id_tuan=$id_tuan AND id_buoi='1' AND id_thu='5'";
        $res_suat6s= mysqli_query($connection,$sql_suat6s);
        $suat6s = [];
        foreach($res_suat6s as $t6s){
          $suat6s[] = $t6s['id_giaovien'];
        }
        foreach($thu_6 as $t6s_them){
            $id_thu="5";
            $id_buoi="1";
            $so_gio="4";
          if(!in_array($t6s_them, $suat6s)){
             $insert_thu6s="INSERT INTO tructuan (`id_truc`,`id_tuan`,`id_buoi`,`id_thu`,`id_giaovien`,`so_gio`,`ngay`) VALUES('','$id_tuan','$id_buoi','$id_thu','$t6s_them','$so_gio','$T6')";
             $insert_thu6s_run= mysqli_query($connection,$insert_thu6s);
            }
        }
        foreach($suat6s as $t6s_xoa){
            if(!in_array($t6s_xoa, $thu_6)){
                $delete_thu6s="DELETE FROM tructuan WHERE id_tuan=$id_tuan AND id_buoi='1' AND id_thu='5' AND id_giaovien='$t6s_xoa'";
                $delete_thu6s_run= mysqli_query($connection,$delete_thu6s);
            }
        }

        //Thứ 7 sáng
         $sql_suat7s="SELECT * FROM tructuan WHERE id_tuan=$id_tuan AND id_buoi='1' AND id_thu='6'";
         $res_suat7s= mysqli_query($connection,$sql_suat7s);
         $suat7s = [];
         foreach($res_suat7s as $t7s){
           $suat7s[] = $t7s['id_giaovien'];
         }
         foreach($thu_7 as $t7s_them){
             $id_thu="6";
             $id_buoi="1";
             $so_gio="4";
           if(!in_array($t7s_them, $suat7s)){
              $insert_thu7s="INSERT INTO tructuan (`id_truc`,`id_tuan`,`id_buoi`,`id_thu`,`id_giaovien`,`so_gio`,`ngay`) VALUES('','$id_tuan','$id_buoi','$id_thu','$t7s_them','$so_gio','$T7')";
              $insert_thu7s_run= mysqli_query($connection,$insert_thu7s);
             }
         }
         foreach($suat7s as $t7s_xoa){
             if(!in_array($t7s_xoa, $thu_7)){
                 $delete_thu7s="DELETE FROM tructuan WHERE id_tuan=$id_tuan AND id_buoi='1' AND id_thu='6' AND id_giaovien='$t7s_xoa'";
                 $delete_thu7s_run= mysqli_query($connection,$delete_thu7s);
             }
         }

        //Chủ nhật sáng
        $sql_suacns="SELECT * FROM tructuan WHERE id_tuan=$id_tuan AND id_buoi='1' AND id_thu='7'";
        $res_suacns= mysqli_query($connection,$sql_suacns);
        $suacns = [];
        foreach($res_suacns as $cns){
          $suacns[] = $cns['id_giaovien'];
        }
        foreach($chu_nhat as $cns_them){
            $id_thu="7";
            $id_buoi="1";
            $so_gio="4";
          if(!in_array($cns_them, $suacns)){
             $insert_cns="INSERT INTO tructuan (`id_truc`,`id_tuan`,`id_buoi`,`id_thu`,`id_giaovien`,`so_gio`,`ngay`) VALUES('','$id_tuan','$id_buoi','$id_thu','$cns_them','$so_gio','$CN')";
             $insert_cns_run= mysqli_query($connection,$insert_cns);
            }
        }
        foreach($suacns as $cns_xoa){
            if(!in_array($cns_xoa, $chu_nhat)){
                $delete_cns="DELETE FROM tructuan WHERE id_tuan=$id_tuan AND id_buoi='1' AND id_thu='7' AND id_giaovien='$cns_xoa'";
                $delete_cns_run= mysqli_query($connection,$delete_cns);
            }
        }
        header("Location: sualichtuan.php?id_tuan=".$id_tuan);
    }

    if(isset($_POST['sualichtrua1'])){
        $id_tuan = $_GET['id_tuan'];
        $thu_2=$_POST['thu_2'];
        $thu_3=$_POST['thu_3'];
        $thu_4=$_POST['thu_4'];
        $thu_5=$_POST['thu_5'];
        $thu_6=$_POST['thu_6'];
        $thu_7=$_POST['thu_7'];
        $chu_nhat=$_POST['chu_nhat'];

        //Thứ 2 trưa 13h00-17h30
        $sql_suat2s="SELECT * FROM tructuan WHERE id_tuan=$id_tuan AND id_buoi='2' AND id_thu='1'";
        $res_suat2s= mysqli_query($connection,$sql_suat2s);
        $suat2s = [];
        foreach($res_suat2s as $t2s){
          $suat2s[] = $t2s['id_giaovien'];
        }
        foreach($thu_2 as $t2s_them){
            $id_thu="1";
            $id_buoi="2";
            $so_gio="4.5";
          if(!in_array($t2s_them, $suat2s)){
             $insert_thu2s="INSERT INTO tructuan (`id_truc`,`id_tuan`,`id_buoi`,`id_thu`,`id_giaovien`,`so_gio`,`ngay`) VALUES('','$id_tuan','$id_buoi','$id_thu','$t2s_them','$so_gio','$T2')";
             $insert_thu2s_run= mysqli_query($connection,$insert_thu2s);
            }
        }
        foreach($suat2s as $t2s_xoa){
            if(!in_array($t2s_xoa, $thu_2)){
                $delete_thu2s="DELETE FROM tructuan WHERE id_tuan=$id_tuan AND id_buoi='2' AND id_thu='1' AND id_giaovien='$t2s_xoa'";
                $delete_thu2s_run= mysqli_query($connection,$delete_thu2s);
            }
        }

        //Thứ 3 sáng trưa 13h00-17h30
        $sql_suat3s="SELECT * FROM tructuan WHERE id_tuan=$id_tuan AND id_buoi='2' AND id_thu='2'";
        $res_suat3s= mysqli_query($connection,$sql_suat3s);
        $suat3s = [];
        foreach($res_suat3s as $t3s){
          $suat3s[] = $t3s['id_giaovien'];
        }
        foreach($thu_3 as $t3s_them){
            $id_thu="2";
            $id_buoi="2";
            $so_gio="4.5";
          if(!in_array($t3s_them, $suat3s)){
             $insert_thu3s="INSERT INTO tructuan (`id_truc`,`id_tuan`,`id_buoi`,`id_thu`,`id_giaovien`,`so_gio`,`ngay`) VALUES('','$id_tuan','$id_buoi','$id_thu','$t3s_them','$so_gio','$T3')";
             $insert_thu3s_run= mysqli_query($connection,$insert_thu3s);
            }
        }
        foreach($suat3s as $t3s_xoa){
            if(!in_array($t3s_xoa, $thu_3)){
                $delete_thu3s="DELETE FROM tructuan WHERE id_tuan=$id_tuan AND id_buoi='2' AND id_thu='2' AND id_giaovien='$t3s_xoa'";
                $delete_thu3s_run= mysqli_query($connection,$delete_thu3s);
            }
        }

        //Thứ 4 sáng trưa 13h00-17h30
        $sql_suat4s="SELECT * FROM tructuan WHERE id_tuan=$id_tuan AND id_buoi='2' AND id_thu='3'";
        $res_suat4s= mysqli_query($connection,$sql_suat4s);
        $suat4s = [];
        foreach($res_suat4s as $t4s){
          $suat4s[] = $t4s['id_giaovien'];
        }
        foreach($thu_4 as $t4s_them){
            $id_thu="3";
            $id_buoi="2";
            $so_gio="4.5";
          if(!in_array($t4s_them, $suat4s)){
             $insert_thu4s="INSERT INTO tructuan (`id_truc`,`id_tuan`,`id_buoi`,`id_thu`,`id_giaovien`,`so_gio`,`ngay`) VALUES('','$id_tuan','$id_buoi','$id_thu','$t4s_them','$so_gio','$T4')";
             $insert_thu4s_run= mysqli_query($connection,$insert_thu4s);
            }
        }
        foreach($suat4s as $t4s_xoa){
            if(!in_array($t4s_xoa, $thu_4)){
                $delete_thu4s="DELETE FROM tructuan WHERE id_tuan=$id_tuan AND id_buoi='2' AND id_thu='3' AND id_giaovien='$t4s_xoa'";
                $delete_thu4s_run= mysqli_query($connection,$delete_thu4s);
            }
        }

        //Thứ 5 sáng trưa 13h00-17h30
         $sql_suat5s="SELECT * FROM tructuan WHERE id_tuan=$id_tuan AND id_buoi='2' AND id_thu='4'";
         $res_suat5s= mysqli_query($connection,$sql_suat5s);
         $suat5s = [];
         foreach($res_suat5s as $t5s){
           $suat5s[] = $t5s['id_giaovien'];
         }
         foreach($thu_5 as $t5s_them){
             $id_thu="4";
             $id_buoi="2";
             $so_gio="4.5";
           if(!in_array($t5s_them, $suat5s)){
              $insert_thu5s="INSERT INTO tructuan (`id_truc`,`id_tuan`,`id_buoi`,`id_thu`,`id_giaovien`,`so_gio`,`ngay`) VALUES('','$id_tuan','$id_buoi','$id_thu','$t5s_them','$so_gio','$T5')";
              $insert_thu5s_run= mysqli_query($connection,$insert_thu5s);
             }
         }
         foreach($suat5s as $t5s_xoa){
             if(!in_array($t5s_xoa, $thu_5)){
                 $delete_thu5s="DELETE FROM tructuan WHERE id_tuan=$id_tuan AND id_buoi='2' AND id_thu='4' AND id_giaovien='$t5s_xoa'";
                 $delete_thu5s_run= mysqli_query($connection,$delete_thu5s);
             }
         }

        //Thứ 6 sáng trưa 13h00-17h30
        $sql_suat6s="SELECT * FROM tructuan WHERE id_tuan=$id_tuan AND id_buoi='2' AND id_thu='5'";
        $res_suat6s= mysqli_query($connection,$sql_suat6s);
        $suat6s = [];
        foreach($res_suat6s as $t6s){
          $suat6s[] = $t6s['id_giaovien'];
        }
        foreach($thu_6 as $t6s_them){
            $id_thu="5";
            $id_buoi="2";
            $so_gio="4.5";
          if(!in_array($t6s_them, $suat6s)){
             $insert_thu6s="INSERT INTO tructuan (`id_truc`,`id_tuan`,`id_buoi`,`id_thu`,`id_giaovien`,`so_gio`,`ngay`) VALUES('','$id_tuan','$id_buoi','$id_thu','$t6s_them','$so_gio','$T6')";
             $insert_thu6s_run= mysqli_query($connection,$insert_thu6s);
            }
        }
        foreach($suat6s as $t6s_xoa){
            if(!in_array($t6s_xoa, $thu_6)){
                $delete_thu6s="DELETE FROM tructuan WHERE id_tuan=$id_tuan AND id_buoi='2' AND id_thu='5' AND id_giaovien='$t6s_xoa'";
                $delete_thu6s_run= mysqli_query($connection,$delete_thu6s);
            }
        }

        //Thứ 7 sáng trưa 13h00-17h30
         $sql_suat7s="SELECT * FROM tructuan WHERE id_tuan=$id_tuan AND id_buoi='2' AND id_thu='6'";
         $res_suat7s= mysqli_query($connection,$sql_suat7s);
         $suat7s = [];
         foreach($res_suat7s as $t7s){
           $suat7s[] = $t7s['id_giaovien'];
         }
         foreach($thu_7 as $t7s_them){
             $id_thu="6";
             $id_buoi="2";
             $so_gio="4.5";
           if(!in_array($t7s_them, $suat7s)){
              $insert_thu7s="INSERT INTO tructuan (`id_truc`,`id_tuan`,`id_buoi`,`id_thu`,`id_giaovien`,`so_gio`,`ngay`) VALUES('','$id_tuan','$id_buoi','$id_thu','$t7s_them','$so_gio','$T7')";
              $insert_thu7s_run= mysqli_query($connection,$insert_thu7s);
             }
         }
         foreach($suat7s as $t7s_xoa){
             if(!in_array($t7s_xoa, $thu_7)){
                 $delete_thu7s="DELETE FROM tructuan WHERE id_tuan=$id_tuan AND id_buoi='2' AND id_thu='6' AND id_giaovien='$t7s_xoa'";
                 $delete_thu7s_run= mysqli_query($connection,$delete_thu7s);
             }
         }

        //Chủ nhật sáng trưa 13h00-17h30
        $sql_suacns="SELECT * FROM tructuan WHERE id_tuan=$id_tuan AND id_buoi='2' AND id_thu='7'";
        $res_suacns= mysqli_query($connection,$sql_suacns);
        $suacns = [];
        foreach($res_suacns as $cns){
          $suacns[] = $cns['id_giaovien'];
        }
        foreach($chu_nhat as $cns_them){
            $id_thu="7";
            $id_buoi="2";
            $so_gio="4.5";
          if(!in_array($cns_them, $suacns)){
             $insert_cns="INSERT INTO tructuan (`id_truc`,`id_tuan`,`id_buoi`,`id_thu`,`id_giaovien`,`so_gio`,`ngay`) VALUES('','$id_tuan','$id_buoi','$id_thu','$cns_them','$so_gio','$CN')";
             $insert_cns_run= mysqli_query($connection,$insert_cns);
            }
        }
        foreach($suacns as $cns_xoa){
            if(!in_array($cns_xoa, $chu_nhat)){
                $delete_cns="DELETE FROM tructuan WHERE id_tuan=$id_tuan AND id_buoi='2' AND id_thu='7' AND id_giaovien='$cns_xoa'";
                $delete_cns_run= mysqli_query($connection,$delete_cns);
            }
        }

        header("Location: sualichtuan.php?id_tuan=".$id_tuan);
    }

    if(isset($_POST['sualichtrua2'])){
        $id_tuan = $_GET['id_tuan'];
        $thu_2=$_POST['thu_2'];
        $thu_3=$_POST['thu_3'];
        $thu_4=$_POST['thu_4'];
        $thu_5=$_POST['thu_5'];
        $thu_6=$_POST['thu_6'];
        $thu_7=$_POST['thu_7'];
        $chu_nhat=$_POST['chu_nhat'];

        //Thứ 2 trưa 13h30-17h30
        $sql_suat2s="SELECT * FROM tructuan WHERE id_tuan=$id_tuan AND id_buoi='3' AND id_thu='1'";
        $res_suat2s= mysqli_query($connection,$sql_suat2s);
        $suat2s = [];
        foreach($res_suat2s as $t2s){
          $suat2s[] = $t2s['id_giaovien'];
        }
        foreach($thu_2 as $t2s_them){
            $id_thu="1";
            $id_buoi="3";
            $so_gio="4";
          if(!in_array($t2s_them, $suat2s)){
             $insert_thu2s="INSERT INTO tructuan (`id_truc`,`id_tuan`,`id_buoi`,`id_thu`,`id_giaovien`,`so_gio`,`ngay`) VALUES('','$id_tuan','$id_buoi','$id_thu','$t2s_them','$so_gio','$T2')";
             $insert_thu2s_run= mysqli_query($connection,$insert_thu2s);
            }
        }
        foreach($suat2s as $t2s_xoa){
            if(!in_array($t2s_xoa, $thu_2)){
                $delete_thu2s="DELETE FROM tructuan WHERE id_tuan=$id_tuan AND id_buoi='3' AND id_thu='1' AND id_giaovien='$t2s_xoa'";
                $delete_thu2s_run= mysqli_query($connection,$delete_thu2s);
            }
        }

        //Thứ 3 trưa 13h30-17h30
        $sql_suat3s="SELECT * FROM tructuan WHERE id_tuan=$id_tuan AND id_buoi='3' AND id_thu='2'";
        $res_suat3s= mysqli_query($connection,$sql_suat3s);
        $suat3s = [];
        foreach($res_suat3s as $t3s){
          $suat3s[] = $t3s['id_giaovien'];
        }
        foreach($thu_3 as $t3s_them){
            $id_thu="2";
            $id_buoi="3";
            $so_gio="4";
          if(!in_array($t3s_them, $suat3s)){
             $insert_thu3s="INSERT INTO tructuan (`id_truc`,`id_tuan`,`id_buoi`,`id_thu`,`id_giaovien`,`so_gio`,`ngay`) VALUES('','$id_tuan','$id_buoi','$id_thu','$t3s_them','$so_gio','$T3')";
             $insert_thu3s_run= mysqli_query($connection,$insert_thu3s);
            }
        }
        foreach($suat3s as $t3s_xoa){
            if(!in_array($t3s_xoa, $thu_3)){
                $delete_thu3s="DELETE FROM tructuan WHERE id_tuan=$id_tuan AND id_buoi='3' AND id_thu='2' AND id_giaovien='$t3s_xoa'";
                $delete_thu3s_run= mysqli_query($connection,$delete_thu3s);
            }
        }

        //Thứ 4 trưa 13h30-17h30
        $sql_suat4s="SELECT * FROM tructuan WHERE id_tuan=$id_tuan AND id_buoi='3' AND id_thu='3'";
        $res_suat4s= mysqli_query($connection,$sql_suat4s);
        $suat4s = [];
        foreach($res_suat4s as $t4s){
          $suat4s[] = $t4s['id_giaovien'];
        }
        foreach($thu_4 as $t4s_them){
            $id_thu="3";
            $id_buoi="3";
            $so_gio="4";
          if(!in_array($t4s_them, $suat4s)){
             $insert_thu4s="INSERT INTO tructuan (`id_truc`,`id_tuan`,`id_buoi`,`id_thu`,`id_giaovien`,`so_gio`,`ngay`) VALUES('','$id_tuan','$id_buoi','$id_thu','$t4s_them','$so_gio','$T4')";
             $insert_thu4s_run= mysqli_query($connection,$insert_thu4s);
            }
        }
        foreach($suat4s as $t4s_xoa){
            if(!in_array($t4s_xoa, $thu_4)){
                $delete_thu4s="DELETE FROM tructuan WHERE id_tuan=$id_tuan AND id_buoi='3' AND id_thu='3' AND id_giaovien='$t4s_xoa'";
                $delete_thu4s_run= mysqli_query($connection,$delete_thu4s);
            }
        }

        //Thứ 5 trưa 13h30-17h30
         $sql_suat5s="SELECT * FROM tructuan WHERE id_tuan=$id_tuan AND id_buoi='3' AND id_thu='4'";
         $res_suat5s= mysqli_query($connection,$sql_suat5s);
         $suat5s = [];
         foreach($res_suat5s as $t5s){
           $suat5s[] = $t5s['id_giaovien'];
         }
         foreach($thu_5 as $t5s_them){
             $id_thu="4";
             $id_buoi="3";
             $so_gio="4";
           if(!in_array($t5s_them, $suat5s)){
              $insert_thu5s="INSERT INTO tructuan (`id_truc`,`id_tuan`,`id_buoi`,`id_thu`,`id_giaovien`,`so_gio`,`ngay`) VALUES('','$id_tuan','$id_buoi','$id_thu','$t5s_them','$so_gio','$T5')";
              $insert_thu5s_run= mysqli_query($connection,$insert_thu5s);
             }
         }
         foreach($suat5s as $t5s_xoa){
             if(!in_array($t5s_xoa, $thu_5)){
                 $delete_thu5s="DELETE FROM tructuan WHERE id_tuan=$id_tuan AND id_buoi='3' AND id_thu='4' AND id_giaovien='$t5s_xoa'";
                 $delete_thu5s_run= mysqli_query($connection,$delete_thu5s);
             }
         }

        //Thứ 6 trưa 13h30-17h30
        $sql_suat6s="SELECT * FROM tructuan WHERE id_tuan=$id_tuan AND id_buoi='3' AND id_thu='5'";
        $res_suat6s= mysqli_query($connection,$sql_suat6s);
        $suat6s = [];
        foreach($res_suat6s as $t6s){
          $suat6s[] = $t6s['id_giaovien'];
        }
        foreach($thu_6 as $t6s_them){
            $id_thu="5";
            $id_buoi="3";
            $so_gio="4";
          if(!in_array($t6s_them, $suat6s)){
             $insert_thu6s="INSERT INTO tructuan (`id_truc`,`id_tuan`,`id_buoi`,`id_thu`,`id_giaovien`,`so_gio`,`ngay`) VALUES('','$id_tuan','$id_buoi','$id_thu','$t6s_them','$so_gio','$T6')";
             $insert_thu6s_run= mysqli_query($connection,$insert_thu6s);
            }
        }
        foreach($suat6s as $t6s_xoa){
            if(!in_array($t6s_xoa, $thu_6)){
                $delete_thu6s="DELETE FROM tructuan WHERE id_tuan=$id_tuan AND id_buoi='3' AND id_thu='5' AND id_giaovien='$t6s_xoa'";
                $delete_thu6s_run= mysqli_query($connection,$delete_thu6s);
            }
        }

        //Thứ 7  trưa 13h30-17h30
         $sql_suat7s="SELECT * FROM tructuan WHERE id_tuan=$id_tuan AND id_buoi='3' AND id_thu='6'";
         $res_suat7s= mysqli_query($connection,$sql_suat7s);
         $suat7s = [];
         foreach($res_suat7s as $t7s){
           $suat7s[] = $t7s['id_giaovien'];
         }
         foreach($thu_7 as $t7s_them){
             $id_thu="6";
             $id_buoi="3";
             $so_gio="4";
           if(!in_array($t7s_them, $suat7s)){
              $insert_thu7s="INSERT INTO tructuan (`id_truc`,`id_tuan`,`id_buoi`,`id_thu`,`id_giaovien`,`so_gio`,`ngay`) VALUES('','$id_tuan','$id_buoi','$id_thu','$t7s_them','$so_gio','$T7')";
              $insert_thu7s_run= mysqli_query($connection,$insert_thu7s);
             }
         }
         foreach($suat7s as $t7s_xoa){
             if(!in_array($t7s_xoa, $thu_7)){
                 $delete_thu7s="DELETE FROM tructuan WHERE id_tuan=$id_tuan AND id_buoi='3' AND id_thu='6' AND id_giaovien='$t7s_xoa'";
                 $delete_thu7s_run= mysqli_query($connection,$delete_thu7s);
             }
         }

        //Chủ nhật trưa 13h00-17h30
        $sql_suacns="SELECT * FROM tructuan WHERE id_tuan=$id_tuan AND id_buoi='3' AND id_thu='7'";
        $res_suacns= mysqli_query($connection,$sql_suacns);
        $suacns = [];
        foreach($res_suacns as $cns){
          $suacns[] = $cns['id_giaovien'];
        }
        foreach($chu_nhat as $cns_them){
            $id_thu="7";
            $id_buoi="3";
            $so_gio="4";
          if(!in_array($cns_them, $suacns)){
             $insert_cns="INSERT INTO tructuan (`id_truc`,`id_tuan`,`id_buoi`,`id_thu`,`id_giaovien`,`so_gio`,`ngay`) VALUES('','$id_tuan','$id_buoi','$id_thu','$cns_them','$so_gio','$CN')";
             $insert_cns_run= mysqli_query($connection,$insert_cns);
            }
        }
        foreach($suacns as $cns_xoa){
            if(!in_array($cns_xoa, $chu_nhat)){
                $delete_cns="DELETE FROM tructuan WHERE id_tuan=$id_tuan AND id_buoi='3' AND id_thu='7' AND id_giaovien='$cns_xoa'";
                $delete_cns_run= mysqli_query($connection,$delete_cns);
            }
        }

        header("Location: sualichtuan.php?id_tuan=".$id_tuan);
    }


    if(isset($_POST['sualichtoi'])){
        $id_tuan = $_GET['id_tuan'];
        $thu_2=$_POST['thu_2'];
        $thu_3=$_POST['thu_3'];
        $thu_4=$_POST['thu_4'];
        $thu_5=$_POST['thu_5'];
        $thu_6=$_POST['thu_6'];
        $thu_7=$_POST['thu_7'];
        $chu_nhat=$_POST['chu_nhat'];

        //Thứ 2 tối
        $sql_suat2s="SELECT * FROM tructuan WHERE id_tuan=$id_tuan AND id_buoi='4' AND id_thu='1'";
        $res_suat2s= mysqli_query($connection,$sql_suat2s);
        $suat2s = [];
        foreach($res_suat2s as $t2s){
          $suat2s[] = $t2s['id_giaovien'];
        }
        foreach($thu_2 as $t2s_them){
            $id_thu="1";
            $id_buoi="4";
            $so_gio="3.5";
          if(!in_array($t2s_them, $suat2s)){
             $insert_thu2s="INSERT INTO tructuan (`id_truc`,`id_tuan`,`id_buoi`,`id_thu`,`id_giaovien`,`so_gio`,`ngay`) VALUES('','$id_tuan','$id_buoi','$id_thu','$t2s_them','$so_gio','$T2')";
             $insert_thu2s_run= mysqli_query($connection,$insert_thu2s);
            }
        }
        foreach($suat2s as $t2s_xoa){
            if(!in_array($t2s_xoa, $thu_2)){
                $delete_thu2s="DELETE FROM tructuan WHERE id_tuan=$id_tuan AND id_buoi='4' AND id_thu='1' AND id_giaovien='$t2s_xoa'";
                $delete_thu2s_run= mysqli_query($connection,$delete_thu2s);
            }
        }

        //Thứ 3 tối
        $sql_suat3s="SELECT * FROM tructuan WHERE id_tuan=$id_tuan AND id_buoi='4' AND id_thu='2'";
        $res_suat3s= mysqli_query($connection,$sql_suat3s);
        $suat3s = [];
        foreach($res_suat3s as $t3s){
          $suat3s[] = $t3s['id_giaovien'];
        }
        foreach($thu_3 as $t3s_them){
            $id_thu="2";
            $id_buoi="4";
            $so_gio="3.5";
          if(!in_array($t3s_them, $suat3s)){
             $insert_thu3s="INSERT INTO tructuan (`id_truc`,`id_tuan`,`id_buoi`,`id_thu`,`id_giaovien`,`so_gio`,`ngay`) VALUES('','$id_tuan','$id_buoi','$id_thu','$t3s_them','$so_gio','$T3')";
             $insert_thu3s_run= mysqli_query($connection,$insert_thu3s);
            }
        }
        foreach($suat3s as $t3s_xoa){
            if(!in_array($t3s_xoa, $thu_3)){
                $delete_thu3s="DELETE FROM tructuan WHERE id_tuan=$id_tuan AND id_buoi='4' AND id_thu='2' AND id_giaovien='$t3s_xoa'";
                $delete_thu3s_run= mysqli_query($connection,$delete_thu3s);
            }
        }

        //Thứ 4 tối
        $sql_suat4s="SELECT * FROM tructuan WHERE id_tuan=$id_tuan AND id_buoi='4' AND id_thu='3'";
        $res_suat4s= mysqli_query($connection,$sql_suat4s);
        $suat4s = [];
        foreach($res_suat4s as $t4s){
          $suat4s[] = $t4s['id_giaovien'];
        }
        foreach($thu_4 as $t4s_them){
            $id_thu="3";
            $id_buoi="4";
            $so_gio="3.5";
          if(!in_array($t4s_them, $suat4s)){
             $insert_thu4s="INSERT INTO tructuan (`id_truc`,`id_tuan`,`id_buoi`,`id_thu`,`id_giaovien`,`so_gio`,`ngay`) VALUES('','$id_tuan','$id_buoi','$id_thu','$t4s_them','$so_gio','$T4')";
             $insert_thu4s_run= mysqli_query($connection,$insert_thu4s);
            }
        }
        foreach($suat4s as $t4s_xoa){
            if(!in_array($t4s_xoa, $thu_4)){
                $delete_thu4s="DELETE FROM tructuan WHERE id_tuan=$id_tuan AND id_buoi='4' AND id_thu='3' AND id_giaovien='$t4s_xoa'";
                $delete_thu4s_run= mysqli_query($connection,$delete_thu4s);
            }
        }

        //Thứ 5 tối
         $sql_suat5s="SELECT * FROM tructuan WHERE id_tuan=$id_tuan AND id_buoi='4' AND id_thu='4'";
         $res_suat5s= mysqli_query($connection,$sql_suat5s);
         $suat5s = [];
         foreach($res_suat5s as $t5s){
           $suat5s[] = $t5s['id_giaovien'];
         }
         foreach($thu_5 as $t5s_them){
             $id_thu="4";
             $id_buoi="4";
             $so_gio="3.5";
           if(!in_array($t5s_them, $suat5s)){
              $insert_thu5s="INSERT INTO tructuan (`id_truc`,`id_tuan`,`id_buoi`,`id_thu`,`id_giaovien`,`so_gio`,`ngay`) VALUES('','$id_tuan','$id_buoi','$id_thu','$t5s_them','$so_gio','$T5')";
              $insert_thu5s_run= mysqli_query($connection,$insert_thu5s);
             }
         }
         foreach($suat5s as $t5s_xoa){
             if(!in_array($t5s_xoa, $thu_5)){
                 $delete_thu5s="DELETE FROM tructuan WHERE id_tuan=$id_tuan AND id_buoi='4' AND id_thu='4' AND id_giaovien='$t5s_xoa'";
                 $delete_thu5s_run= mysqli_query($connection,$delete_thu5s);
             }
         }

        //Thứ 6 tối
        $sql_suat6s="SELECT * FROM tructuan WHERE id_tuan=$id_tuan AND id_buoi='4' AND id_thu='5'";
        $res_suat6s= mysqli_query($connection,$sql_suat6s);
        $suat6s = [];
        foreach($res_suat6s as $t6s){
          $suat6s[] = $t6s['id_giaovien'];
        }
        foreach($thu_6 as $t6s_them){
            $id_thu="5";
            $id_buoi="4";
            $so_gio="3.5";
          if(!in_array($t6s_them, $suat6s)){
             $insert_thu6s="INSERT INTO tructuan (`id_truc`,`id_tuan`,`id_buoi`,`id_thu`,`id_giaovien`,`so_gio`,`ngay`) VALUES('','$id_tuan','$id_buoi','$id_thu','$t6s_them','$so_gio','$T6')";
             $insert_thu6s_run= mysqli_query($connection,$insert_thu6s);
            }
        }
        foreach($suat6s as $t6s_xoa){
            if(!in_array($t6s_xoa, $thu_6)){
                $delete_thu6s="DELETE FROM tructuan WHERE id_tuan=$id_tuan AND id_buoi='4' AND id_thu='5' AND id_giaovien='$t6s_xoa'";
                $delete_thu6s_run= mysqli_query($connection,$delete_thu6s);
            }
        }

        //Thứ 7 tối
         $sql_suat7s="SELECT * FROM tructuan WHERE id_tuan=$id_tuan AND id_buoi='4' AND id_thu='6'";
         $res_suat7s= mysqli_query($connection,$sql_suat7s);
         $suat7s = [];
         foreach($res_suat7s as $t7s){
           $suat7s[] = $t7s['id_giaovien'];
         }
         foreach($thu_7 as $t7s_them){
             $id_thu="6";
             $id_buoi="4";
             $so_gio="3.5";
           if(!in_array($t7s_them, $suat7s)){
              $insert_thu7s="INSERT INTO tructuan (`id_truc`,`id_tuan`,`id_buoi`,`id_thu`,`id_giaovien`,`so_gio`,`ngay`) VALUES('','$id_tuan','$id_buoi','$id_thu','$t7s_them','$so_gio','$T7')";
              $insert_thu7s_run= mysqli_query($connection,$insert_thu7s);
             }
         }
         foreach($suat7s as $t7s_xoa){
             if(!in_array($t7s_xoa, $thu_7)){
                 $delete_thu7s="DELETE FROM tructuan WHERE id_tuan=$id_tuan AND id_buoi='4' AND id_thu='6' AND id_giaovien='$t7s_xoa'";
                 $delete_thu7s_run= mysqli_query($connection,$delete_thu7s);
             }
         }

        //Chủ nhật tối
        $sql_suacns="SELECT * FROM tructuan WHERE id_tuan=$id_tuan AND id_buoi='4' AND id_thu='7'";
        $res_suacns= mysqli_query($connection,$sql_suacns);
        $suacns = [];
        foreach($res_suacns as $cns){
          $suacns[] = $cns['id_giaovien'];
        }
        foreach($chu_nhat as $cns_them){
            $id_thu="7";
            $id_buoi="4";
            $so_gio="3.5";
          if(!in_array($cns_them, $suacns)){
             $insert_cns="INSERT INTO tructuan (`id_truc`,`id_tuan`,`id_buoi`,`id_thu`,`id_giaovien`,`so_gio`,`ngay`) VALUES('','$id_tuan','$id_buoi','$id_thu','$cns_them','$so_gio','$CN')";
             $insert_cns_run= mysqli_query($connection,$insert_cns);
            }
        }
        foreach($suacns as $cns_xoa){
            if(!in_array($cns_xoa, $chu_nhat)){
                $delete_cns="DELETE FROM tructuan WHERE id_tuan=$id_tuan AND id_buoi='4' AND id_thu='7' AND id_giaovien='$cns_xoa'";
                $delete_cns_run= mysqli_query($connection,$delete_cns);
            }
        }

        header("Location: sualichtuan.php?id_tuan=".$id_tuan);
    }
    ?>