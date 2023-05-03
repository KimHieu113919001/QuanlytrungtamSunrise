<?php 
    include("config1.php");
    $id_de=$_GET['id_de'];
    $sql3 = $connection->prepare("SELECT * FROM cau_hoi WHERE id_de=$id_de AND id_kynang='2' ORDER BY RAND()");
    $sql3->execute();

    echo json_encode($sql3->fetchAll(PDO::FETCH_ASSOC));
?>
