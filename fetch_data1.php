<?php
include('config.php');
if(isset($_POST["id"]))
{
    $result = $connection->query("SELECT * FROM lichhoc, danhsachlop, phong, buoi, giaovien, thu, gio WHERE lichhoc.id_gio=gio.id_gio AND lichhoc.id_thu=thu.id_thu AND danhsachlop.id_giaovien=giaovien.id_giaovien AND lichhoc.id_buoi=buoi.id_buoi AND lichhoc.id_phong=phong.id_phong AND lichhoc.id_lop=danhsachlop.id_danhsach AND lichhoc.id_lichhoc= '".$_POST["id"]."'");
    $output = '';
    foreach($result as $row)
    {
      $output .= '
      <p>Lớp: '.$row["ma_danhsach"].'</p>
      <p>'.$row["thu"].'</p>
      <p>'.$row["ten_phong"].'</p>
      <p>'.$row["ten_buoi"].': '.$row["gio"].'</p>
      <p>'.$row["ten_gv"].'</p>
      ';

    }
    echo $output;
}
?>