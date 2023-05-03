
<?php 
    include("config1.php");
    $id_de=$_GET['id_de'];
    $sql1 = $connection->prepare("SELECT * FROM cau_hoi WHERE id_de=$id_de AND id_kynang='3' ORDER BY RAND()");
    $sql1->execute();

    echo json_encode($sql1->fetchAll(PDO::FETCH_ASSOC));
?>
