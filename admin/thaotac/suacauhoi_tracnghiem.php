<?php
if(isset($_POST['suacauhoi'])){
    $noidung=$_POST['noidung'];
    $noidung1=str_replace("'", "\'", $noidung);

    $hinhanh= $_FILES['hinhanh']['name'];
    move_uploaded_file($_FILES['hinhanh']['tmp_name'],"../admin/images/".$_FILES['hinhanh']['name']);  
    $hinhanhcu=$_POST['hinhanhcu'];

    $hinhA= $_FILES['hinhA']['name'];
    move_uploaded_file($_FILES['hinhA']['tmp_name'],"../admin/images/".$_FILES['hinhA']['name']);  
    $hinhAcu=$_POST['hinhAcu'];

    $hinhB= $_FILES['hinhB']['name'];
    move_uploaded_file($_FILES['hinhB']['tmp_name'],"../admin/images/".$_FILES['hinhB']['name']);  
    $hinhBcu=$_POST['hinhBcu'];

    $hinhC= $_FILES['hinhC']['name'];
    move_uploaded_file($_FILES['hinhC']['tmp_name'],"../admin/images/".$_FILES['hinhC']['name']);  
    $hinhCcu=$_POST['hinhCcu'];

    $hinhD= $_FILES['hinhD']['name'];
    move_uploaded_file($_FILES['hinhD']['tmp_name'],"../admin/images/".$_FILES['hinhD']['name']);  
    $hinhDcu=$_POST['hinhDcu'];

    if($hinhanh == ""){
    $hinhanhmoi = $hinhanhcu;
    }else{
    $hinhanhmoi = $hinhanh;
    }

    if($hinhA == ""){
    $hinhAmoi = $hinhAcu;
    }else{
    $hinhAmoi = $hinhA;
    }

    if($hinhB == ""){
    $hinhBmoi = $hinhBcu;
    }else{
    $hinhBmoi = $hinhB;
    }

    if($hinhC == ""){
    $hinhCmoi = $hinhCcu;
    }else{
    $hinhCmoi = $hinhC;
    }

    if($hinhD == ""){
    $hinhDmoi = $hinhDcu;
    }else{
    $hinhDmoi = $hinhD;
    }

    $dapan_A=$_POST['dapan_A'];
    $dapan_B=$_POST['dapan_B'];
    $dapan_C=$_POST['dapan_C'];
    $dapan_D=$_POST['dapan_D'];
    $dapan_dung=$_POST['dapan_dung'];
    $ngaycapnhat_ch=$_POST['ngaycapnhat_ch'];

    // if(($dapan_A == "" && $hinhA == "" ) || ($dapan_B == "" && $hinhB == "") || ($dapan_C == ""  && $hinhC=="") || ($dapan_D == "" && $hinhD=="") ){
    //     $msg="<script language='javascript'>
    //     swal(
    //         'Cảnh báo!',
    //         'Đáp án không được để trống!',
    //         'error'      
    //         );
    //     </script>"; 
    // }else{
        $sql="UPDATE `cau_hoi`SET noidung='$noidung1',hinhanh='$hinhanhmoi',dapan_A='$dapan_A', hinhA='$hinhAmoi',dapan_B='$dapan_B', hinhB='$hinhBmoi',dapan_C='$dapan_C', hinhC='$hinhCmoi',dapan_D='$dapan_D', hinhD='$hinhDmoi',dapan_dung='$dapan_dung', ngaycapnhat_ch='$ngaycapnhat_ch' WHERE id_cauhoi='$_GET[id_cauhoi]'";
        mysqli_query($connection,$sql);
        if(mysqli_query($connection,$sql)){
            $msg="<script language='javascript'>
            swal(
                'Thành công!',
                'Sửa thành công!',
                'success'      
                );
                var timer = setTimeout(function() {
                window.location=('danhsachcauhoi.php?id_de=$id_de')
            }, 2000);
            </script>";   
    
        }else{
            echo "Sửa thất bại!";
        }
    // }
    
}
$sql_sua_ch="SELECT * FROM cau_hoi WHERE id_cauhoi='$_GET[id_cauhoi]' LIMIT 1";
$query_sua_ch= mysqli_query($connection,$sql_sua_ch);
?>
<div class="span9">
					<div class="content">
						<div class="module">
							<div class="module-head">
								<h3>Sửa câu hỏi</h3>
							</div>
							<div class="module-body">
                            <?php 
                                while($row_sua_ch= mysqli_fetch_assoc($query_sua_ch)){
                            ?>
                            <?php echo $msg;?>
                            <form action="" method="post" enctype="multipart/form-data"  >
                                <div class="control-group">
                                        <label class="control-label" for="basicinput">Nội dung câu hỏi</label>
                                            <div class="controls">
                                                <textarea data-title="A tooltip for the input" type="text" name="noidung" class="span8 tip"><?php echo $row_sua_ch['noidung']?> </textarea>
                                            </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="basicinput">Nội dung câu hỏi</label>
                                            <div class="controls">
                                            <input data-title="A tooltip for the input" type="file" name="hinhanh" class="span8 tip">
                                            <input data-title="A tooltip for the input" type="hidden" name="hinhanhcu" class="span8 tip" value="<?php echo $row_sua_ch['hinhanh'] ?>"><img src="../admin/images/<?php echo $row_sua_ch['hinhanh'] ?>"width="100px" alt="None">
                                            </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="basicinput">Đáp án A</label>
                                            <div class="controls">
                                            <input data-title="A tooltip for the input" type="text" name="dapan_A" value="<?php echo $row_sua_ch['dapan_A']?>" data-original-title="" class="span8 tip" >
                                            </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="basicinput">Hình câu A</label>
                                            <div class="controls">
                                            <input data-title="A tooltip for the input" type="file" name="hinhA" class="span8 tip">
                                            <input data-title="A tooltip for the input" type="hidden" name="hinhAcu" class="span8 tip" value="<?php echo $row_sua_ch['hinhA'] ?>"><img src="../admin/images/<?php echo $row_sua_ch['hinhA'] ?>"width="100px" alt="None">
                                            </div>
                                    </div>
                                    
                                    <div class="control-group">
                                        <label class="control-label" for="basicinput">Đáp án B</label>
                                            <div class="controls">
                                            <input data-title="A tooltip for the input" type="text" name="dapan_B" value="<?php echo $row_sua_ch['dapan_B']?>" data-original-title="" class="span8 tip" > 
                                            </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="basicinput">Hình câu B</label>
                                            <div class="controls">
                                            <input data-title="A tooltip for the input" type="file" name="hinhB" class="span8 tip">
                                            <input data-title="A tooltip for the input" type="hidden" name="hinhBcu" class="span8 tip" value="<?php echo $row_sua_ch['hinhB'] ?>"><img src="../admin/images/<?php echo $row_sua_ch['hinhB'] ?>"width="100px" alt="None">
                                            </div>
                                    </div>

                                    <div class="control-group">
                                        <label class="control-label" for="basicinput">Đáp án C</label>
                                            <div class="controls">
                                            <input data-title="A tooltip for the input" type="text" name="dapan_C" value="<?php echo $row_sua_ch['dapan_C']?>" data-original-title="" class="span8 tip" > 
                                            </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="basicinput">Hình câu C</label>
                                            <div class="controls">
                                            <input data-title="A tooltip for the input" type="file" name="hinhC" class="span8 tip">
                                            <input data-title="A tooltip for the input" type="hidden" name="hinhCcu" class="span8 tip" value="<?php echo $row_sua_ch['hinhC'] ?>"><img src="../admin/images/<?php echo $row_sua_ch['hinhC'] ?>"width="100px" alt="None">
                                            </div>
                                    </div>

                                    <div class="control-group">
                                        <label class="control-label" for="basicinput">Đáp án D</label>
                                            <div class="controls">
                                            <input data-title="A tooltip for the input" type="text" name="dapan_D" value="<?php echo $row_sua_ch['dapan_D']?>" data-original-title="" class="span8 tip" > 
                                            </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="basicinput">Hình câu D</label>
                                            <div class="controls">
                                            <input data-title="A tooltip for the input" type="file" name="hinhD" class="span8 tip">
                                            <input data-title="A tooltip for the input" type="hidden" name="hinhDcu" class="span8 tip" value="<?php echo $row_sua_ch['hinhD'] ?>"><img src="../admin/images/<?php echo $row_sua_ch['hinhD'] ?>"width="100px" alt="None">
                                            </div>
                                    </div>

                                    ĐÁP ÁN ĐÚNG
                                    <div class="control-group">
                                    <label class="radio inline">
                                        <input type="radio" name="dapan_dung" value="A" <?php echo ($row_sua_ch['dapan_dung']=='A')?'checked':'' ?>>A</label> 		
                                        &ensp;
                                    <label class="radio inline">
                                        <input type="radio" name="dapan_dung" value="B" <?php echo ($row_sua_ch['dapan_dung']=='B')?'checked':'' ?>>B</label> 
                                        &ensp;
                                    <label class="radio inline">
                                        <input type="radio" name="dapan_dung" value="C" <?php echo ($row_sua_ch['dapan_dung']=='C')?'checked':'' ?>>C</label> 
                                        &ensp;
                                    <label class="radio inline">
                                        <input type="radio" name="dapan_dung" value="D" <?php echo ($row_sua_ch['dapan_dung']=='D')?'checked':'' ?>>D</label> 			
                                    </div>

                                    <div class="control-group ">
                                        <label class="control-label" for="basicinput">Ngày cập nhật</label>
                                            <div class="controls">
                                                <input type="text" id="ngaycapnhat_ch"  class="form-control" name="ngaycapnhat_ch" value="<?php echo date('d/m/Y');?>" readonly>
                                            </div>
                                    </div>

                                    <div class="control-group"style="text-align:center;">
                                        <div class="controls">
                                            <button type="submit" class="btn btn-success" name="suacauhoi">Sửa</button>
                                        </div>
                                    </div>
							</form>
                                    <?php 
                                        }
                                        ?>
							</div>
						</div>
					</div>
</div>