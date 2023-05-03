<?php
    header('Content-Type: application/json');
    include("config.php");
    $data = array();
    $query = "SELECT id_giaovien, COUNT(id_giaovien) AS size_status FROM tructuan WHERE id_de ='5'GROUP BY id_giaovien";
    $stmt = mysqli_query($connection,$query);
    if($row=mysqli_fetch_assoc($stmt)){
        if($row[rowCount()]>0){
            $result = $row;
        }
    }
    foreach($result as $row){
        $data[] = $row;
    }
    echo $data;
?>