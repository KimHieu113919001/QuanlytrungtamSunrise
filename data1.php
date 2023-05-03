<option value="">--Chọn--</option>
<?php
    include("config.php");

    $key = $_POST['id'];
    if($key!=""){
    $key = $_POST['id'];
    $sql_lop="SELECT * FROM capbac WHERE capbac.id_doituong=$key";
    $res_lop=mysqli_query($connection,$sql_lop);
    
        while($row_lop = mysqli_fetch_assoc($res_lop)){
            ?>
            <option value="<?php echo $row_lop['id_cap']?>"><?php echo $row_lop['ten_cap']?></option>
        <?php
        }
    }
    
    
?>
