<?php
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