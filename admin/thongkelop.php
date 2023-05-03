<?php

    session_start();
    if(!isset($_SESSION['username1'])){
     header('Location:admin_login.php');
    } 



?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../admin/images/logosunrise.png" rel="icon">
        <title>Trung tâm Ngoại ngữ - Tin học Sunrise</title>
        <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="css/theme.css" rel="stylesheet">
        <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
            rel='stylesheet'>
            <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
            <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
            
    </head>
    
    <style>

h3{
    color:#fff;
}
    </style>

<body >
    <?php
    include('../admin/navbar.php');
    ?>
<div class="wrapper">
    <div class="container">
        <div class="row">
    <?php
    include('../admin/thanhcongcu.php');
    ?>

                <div class="span9">
                    <div class="content">
                        <div class="module">
                            <div class="module-head">
                                <h3>Thống kê số lượng theo nhóm lớp</h3>
                            </div>
                                <div class="module-body">
                                </div>
                                    <div style="width:50%;" class="container">
                                        <canvas id="myChart"></canvas>
                                    </div>
                                    <div  style="text-align:center;background-color:#ffdf80;">Biểu đồ thống kê số lượng theo nhóm lớp.</div>
                                    <br>
                                    <?php
                                    include("config.php");
                                        $query=$connection->query("SELECT capbac.ma_cap AS ma_cap, COUNT(danhsachlop.id_cap) AS id_cap FROM danhsachlop, capbac WHERE danhsachlop.tt_hoatdong='0' AND danhsachlop.id_cap=capbac.id_cap GROUP BY danhsachlop.id_cap");
                                    foreach($query as $data){
                                        $ma_cap[] = $data['ma_cap'];
                                        $id_cap[] = $data['id_cap'];
                                    }
                                    ?>
                                <div>
                            
                        </div>
                    </div>
                </div>
 
        </div>
    </div>
</div>
        <script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.resize.js" type="text/javascript"></script>
        <script src="scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="scripts/common.js" type="text/javascript"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
            const labels = <?php echo json_encode($ma_cap)?>;
            const data = {
            labels: labels,
            datasets: [{
                label: 'Số lượng lớp trong một cấp bậc',
                data: <?php echo json_encode($id_cap)?>,
                backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(255, 205, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 179, 255, 0.2)'
                ],
                borderColor: [
                'rgb(255, 99, 132)',
                'rgb(255, 159, 64)',
                'rgb(255, 205, 86)',
                'rgb(75, 192, 192)',
                'rgb(54, 162, 235)',
                'rgb(153, 102, 255)',
                'rgb(255, 179, 255)'
                ],
                borderWidth: 1
            }]
            };
            const config = {
            type: 'bar',
            data: data,
            options: {
                scales: {
                y: {
                    beginAtZero: true
                }
                }
            },
            };
            var myChart = new Chart(document.getElementById('myChart'), config);
        </script>
    </body>
</html>