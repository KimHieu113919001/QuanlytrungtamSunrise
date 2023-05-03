
<?php 
    include("config1.php");
    $id_de=$_GET['id_de'];
    $sql = $connection->prepare("SELECT * FROM cau_hoi WHERE id_de=$id_de AND id_kynang='1' ORDER BY RAND()");
    $sql->execute();

    echo json_encode($sql->fetchAll(PDO::FETCH_ASSOC));
?>
