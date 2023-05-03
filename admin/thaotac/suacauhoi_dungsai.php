<?php
if(isset($_POST['suacauhoi2'])){
    $noidung=$_POST['noidung'];
    $noidung1=str_replace("'", "\'", $noidung);

    $hinhanh= $_FILES['hinhanh']['name'];
    move_uploaded_file($_FILES['hinhanh']['tmp_name'],"../admin/images/".$_FILES['hinhanh']['name']);  
    $hinhanhcu=$_POST['hinhanhcu'];

    if($hinhanh == ""){
    $hinhanhmoi = $hinhanhcu;
    }else{
    $hinhanhmoi = $hinhanh;
    }
    $dapan_dung=$_POST['dapan_dung'];
    $ngaycapnhat_ch=$_POST['ngaycapnhat_ch'];
    $sql="UPDATE `cau_hoi`SET noidung='$noidung1',hinhanh='$hinhanhmoi',dapan_dung='$dapan_dung', ngaycapnhat_ch='$ngaycapnhat_ch' WHERE id_cauhoi='$_GET[id_cauhoi]'";
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
                                            <input data-title="A tooltip for the input" type="hidden" name="hinhanhcu" class="span8 tip" value="<?php echo $row_sua_ch['hinhanh'] ?>"><img src="../admin/images/<?php echo $row_sua_ch['hinhanh'] ?>"width="100px">
                                            </div>
                                    </div>

                                    ĐÁP ÁN ĐÚNG
                                    <div class="control-group">
                                            <div class="controls">
                                            <input data-title="A tooltip for the input" type="text" name="dapan_dung" value="<?php echo $row_sua_ch['dapan_dung']?>" data-original-title="" class="span8 tip" required>
                                            </div>
                                    </div>

                                    <div class="control-group ">
                                        <label class="control-label" for="basicinput">Ngày cập nhật</label>
                                            <div class="controls">
                                                <input type="text" id="ngaycapnhat_ch"  class="form-control" name="ngaycapnhat_ch" value="<?php echo date('d/m/Y');?>" readonly>
                                            </div>
                                    </div>

                                    <div class="control-group"style="text-align:center;">
                                        <div class="controls">
                                            <button type="submit" class="btn btn-success" name="suacauhoi2">Sửa</button>
                                        </div>
                                    </div>
							</form>
                                    <?php 
                                        }
                                        ?>
							</div>
						</div>

						
						
					</div><!--/.content-->
				</div>