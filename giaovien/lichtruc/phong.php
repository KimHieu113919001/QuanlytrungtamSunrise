<?php 
    include("config1.php");
    $id_tuan=$_GET['id_tuan'];
    $sql = $connection->prepare("SELECT * FROM phong ");
    $sql->execute();

    echo json_encode($sql->fetchAll(PDO::FETCH_ASSOC));
?>
