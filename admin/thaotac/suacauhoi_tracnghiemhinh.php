<?php
if(isset($_POST['suacauhoi'])){
    $dapan_A=$_POST['dapan_A'];
    $dapan_B=$_POST['dapan_B'];
    $dapan_C=$_POST['dapan_C'];
    $dapan_D=$_POST['dapan_D'];       
    
    $noidung= $_FILES['noidung']['name'];
    move_uploaded_file($_FILES['noidung']['tmp_name'],"../admin/images/".$_FILES['noidung']['name']); 
    $noidungcu=$_POST['noidungcu'];

    $dapan_dung=$_POST['dapan_dung'];
    $id_de=$_GET['id_de'];
    $ngaycapnhat_ch=$_POST['ngaycapnhat_ch'];


    if($noidung != ""){
        $sql="UPDATE `cau_hoi`SET noidung='$noidung',dapan_A='$dapan_A',dapan_B='$dapan_B',dapan_C='$dapan_C',dapan_D='$dapan_D',dapan_dung='$dapan_dung', ngaycapnhat_ch='$ngaycapnhat_ch' WHERE id_cauhoi='$_GET[id_cauhoi]'";
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
        }else{
            $sql="UPDATE `cau_hoi`SET noidung='$noidungcu',dapan_A='$dapan_A',dapan_B='$dapan_B',dapan_C='$dapan_C',dapan_D='$dapan_D',dapan_dung='$dapan_dung', ngaycapnhat_ch='$ngaycapnhat_ch' WHERE id_cauhoi='$_GET[id_cauhoi]'";
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
        }
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
                                            <input data-title="A tooltip for the input" type="file" name="noidung" class="span8 tip">
                                            <input data-title="A tooltip for the input" type="hidden" name="noidungcu" class="span8 tip" value="<?php echo $row_sua_ch['noidung'] ?>"><img src="../admin/images/<?php echo $row_sua_ch['noidung'] ?>"width="100px">
                                            </div>
                                    </div>

                                    <div class="control-group">
                                        <label class="control-label" for="basicinput">Đáp án A</label>
                                            <div class="controls">
                                            <input data-title="A tooltip for the input" type="text" name="dapan_A" value="<?php echo $row_sua_ch['dapan_A']?>" data-original-title="" class="span8 tip" required>
                                            </div>
                                    </div>
                                    
                                    <div class="control-group">
                                        <label class="control-label" for="basicinput">Đáp án B</label>
                                            <div class="controls">
                                            <input data-title="A tooltip for the input" type="text" name="dapan_B" value="<?php echo $row_sua_ch['dapan_B']?>" data-original-title="" class="span8 tip" required>
                                            </div>
                                    </div>

                                    <div class="control-group">
                                        <label class="control-label" for="basicinput">Đáp án C</label>
                                            <div class="controls">
                                            <input data-title="A tooltip for the input" type="text" name="dapan_C" value="<?php echo $row_sua_ch['dapan_C']?>" data-original-title="" class="span8 tip" required>
                                            </div>
                                    </div>

                                    <div class="control-group">
                                        <label class="control-label" for="basicinput">Đáp án D</label>
                                            <div class="controls">
                                            <input data-title="A tooltip for the input" type="text" name="dapan_D" value="<?php echo $row_sua_ch['dapan_D']?>" data-original-title="" class="span8 tip" required>
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