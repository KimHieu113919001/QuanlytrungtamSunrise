<?php
    include("config.php");

    $key1 = $_POST['id_cap'];
    if($key1!=""){
        $key1 = $_POST['id_cap'];
        $sql3 = "SELECT * FROM capbac WHERE testdauvao='1' AND capbac.id_cap=$key1"; 
        $res3 = mysqli_query($connection,$sql3);
        $row3 = mysqli_fetch_assoc($res3);
        if($row3 == true){?>
        <button type="submit" name="test" class="btn buttonsua">Test đầu vào</button>
        <?php
        }elseif($row3 == false){?>
        <button type="submit" name="submit" class="btn buttonsua">Đăng ký</button>
        <?php
        }
    }else{?>
        <div class="test">Vui lòng chọn lớp muốn đăng ký học!
        </div>
   <?php }
?>
