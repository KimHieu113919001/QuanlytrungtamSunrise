<?php  
session_start();
include("config.php");	
	
?>
<style>
p.alignCenter {
    text-align: center;
}
</style>
<?php

//export.php  
 date_default_timezone_set("Asia/Ho_Chi_Minh");
 $date = getdate();
 $ngay = $date['mday'];
 $thang = $date['mon'];
 $nam = $date['year'];
//  if ($date['mon']==1 || $date['mon']==2 ) {$i1 = "0".$date['mon']."";} else {$i=$date['mon'];}
//  if ($date['mday']==1 || $date['mday']==2 || $date['mday']==3 || $date['mday']==4 || $date['mday']==5 || $date['mday']==6 || $date['mday']==7 || $date['mday']==8 || $date['mday']==9 ) {$i = "0".$date['mday']."";} else {$i=$date['mday']; }
 
$output = '';
if(isset($_POST["xuat"])){
  $id_danhsach=$_GET['id_danhsach'];
  $sql_ds = "SELECT * FROM danhsachlop WHERE danhsachlop.id_danhsach='$_GET[id_danhsach]'";
  $res_ds =mysqli_query($connection,$sql_ds);
	$row_ds =mysqli_fetch_assoc($res_ds);

 $query = "SELECT hocvien.ten_hv, hocvien.ngaysinh_hv, hocvien.gioitinh_hv, diemso.diemtong, diemso.xeploai, diemso.nhanqua, danhsachlop.ma_danhsach FROM hocvien, diemso, danhsachlop WHERE diemso.id_danhsach=danhsachlop.id_danhsach AND hocvien.id_hocvien=diemso.id_hocvien AND diemso.id_danhsach='$id_danhsach' ORDER BY hocvien.ten_hv ASC";
 $result = mysqli_query($connection, $query);
    
 if(mysqli_num_rows($result) > 0){
  $output .= '
  <table>
  <tr>
  <td colspan="3"><center> TRUNG TÂM NGOẠI NGỮ - TIN HỌC SUNRISE TV <br> ***</center></td>
  <td colspan="3" valign="bottom" style="text-align: right;"> Trà Vinh, ngày '.$ngay.', tháng '.$thang.', năm '.$nam.'</td>
  </tr>
  <br>
  <tr>
  <td colspan="6" width="200px"><center>
  <br>
  <b>
  DANH SÁCH LỚP '.$row_ds['ma_danhsach'].' <br>
  <b>
  <center><td>
  </tr>
  </table>
  <br>
   <table class="table" border="1">  
      <tr>  
             <th style="text-align: center;">STT</th>  
             <th style="text-align: center;">Họ tên</th>  
						 <th style="text-align: center;">Giới tính</th>
						 <th style="text-align: center;">Ngày sinh</th> 
						 <th style="text-align: center;">Điểm tổng</th> 
						 <th style="text-align: center;">Xếp loại</th> 
						 <th style="text-align: center;">Nhận quà</th> 
      </tr>';
  $STT=0;
  while($row_xuat = mysqli_fetch_array($result))
  {
   $odate = $row_xuat['ngaysinh_hv'];
   $newDate = date("d-m-Y", strtotime($odate));
	 $STT++;
   $output .= '
    <tr align="left">  
        <td style="text-align: center;">'.$STT.'</td>  
        <td style="text-align: center;">'.ucwords($row_xuat["ten_hv"]).'</td>  
        <td style="text-align: center;">'.$row_xuat["gioitinh_hv"].'</td> 	  
        <td style="text-align: center;">'.$newDate.'</td>  
        <td style="text-align: center;">'.$row_xuat["diemtong"].'</td>
        <td style="text-align: center;">'.$row_xuat["xeploai"].'</td>
        <td style="text-align: center;">'.$row_xuat["nhanqua"].'</td>
    </tr>';
  }
  $output .= '</table> <br> 
  <table>
  <tr>
  <td colspan="3">
  <center></center>
  </td>
  <td colspan="3" valign="top">
  <center>
  <b>CHỮ KÝ GIÁO VIÊN GIẢNG DẠY</b> <br> GIÁO VIÊN
  </center>
  </td>
  </tr>
  </table>';
  echo pack("CCC",0xef,0xbb,0xbf);
  header('Content-Type: application/xls; charset=UTF-8;');
  header('Expires: 0');
  header('Content-Disposition: attachment; filename='.$row_ds['ma_danhsach'].'.xls');
 
  echo $output;
 }

}
?>
