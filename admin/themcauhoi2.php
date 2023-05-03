<?php 
include("config.php");
$id_dangcauhoi=$_POST['id_dangcauhoi'];
if($id_dangcauhoi == 1){ ?> <!-- Trắc nghiệm -->
<form action="" method="post" enctype="multipart/form-data" >
							<label class="control-label" for="basicinput">Chọn dạng kỹ năng</label>
						<select data-title="A tooltip for the input"data-original-title="" class="span8 tip" name="id_kynang" required> 
						<option value="">--Chọn--</option>
						<?php
						$sql_kn="SELECT * FROM kynang ORDER BY id_kynang ASC";
						$query_kn= mysqli_query($connection,$sql_kn);
						while($row_kn= mysqli_fetch_assoc($query_kn)){
							?>
							<option value="<?php echo $row_kn['id_kynang']?>"><?php echo ucwords($row_kn['ten_kynang'])?></option>
							<?php
						}
						?>
						</select>

                        <div class="control-group">
							<label class="control-label" for="basicinput">Nội dung câu hỏi</label>
								<div class="controls">
									<textarea data-title="A tooltip for the input" type="text" name="noidung" placeholder="Nhập nội dung câu hỏi" data-original-title="" class="span8 tip" ></textarea>
								</div>
						</div>

						<div class="control-group">
								<div class="controls">
									<input data-title="A tooltip for the input" type="file" name="hinhanh" placeholder="Nhập nội dung câu hỏi" data-original-title="" class="span8 tip" >
								</div>
						</div>

                        <div class="control-group">
							<label class="control-label" for="basicinput">Đáp án A</label>
								<div class="controls">
									<input data-title="A tooltip for the input" type="text" name="dapan_A" placeholder="Nhập đáp án A" data-original-title="" class="span8 tip" >
								</div>
						</div>

                        <div class="control-group">
							<label class="control-label" for="basicinput">Đáp án B</label>
								<div class="controls">
									<input data-title="A tooltip for the input" type="text" name="dapan_B" placeholder="Nhập đáp án B" data-original-title="" class="span8 tip" >
								</div>
						</div>


                        <div class="control-group">
							<label class="control-label" for="basicinput">Đáp án C</label>
								<div class="controls">
									<input data-title="A tooltip for the input" type="text" name="dapan_C" placeholder="Nhập đáp án C" data-original-title="" class="span8 tip" >
								</div>
						</div>

                        <div class="control-group">
							<label class="control-label" for="basicinput">Đáp án D</label>
								<div class="controls">
									<input data-title="A tooltip for the input" type="text" name="dapan_D" placeholder="Nhập đáp án D" data-original-title="" class="span8 tip" >
								</div>
						</div>

			

                        ĐÁP ÁN ĐÚNG
                        <div class="control-group">
							<label class="radio inline">
								<input type="radio" name="dapan_dung" value="A" required>
									A
							</label> 
                            &ensp;&ensp;
							<label class="radio inline">
								<input type="radio" name="dapan_dung" value="B">
									B
							</label> 
                            &ensp;&ensp;
							<label class="radio inline">
								<input type="radio" name="dapan_dung" value="C">
									C
							</label> 
                            &ensp;&ensp;
							<label class="radio inline">
								<input type="radio" name="dapan_dung" value="D">
									D
							</label> 
						</div>                        
                        <div class="control-group">
							<label class="control-label" for="basicinput">Ngày cập nhật</label>
								<div class="controls">
                                    <input type="text" id="ngaycapnhat_ch"  class="form-control" name="ngaycapnhat_ch" value="<?php echo date('d/m/Y');?>" readonly>
								</div>
						</div>
						<div class="control-group hidden">
								<div class="controls">
                                    <input type="text" id="id_dangcauhoi"  class="form-control" name="id_dangcauhoi" value="<?php echo $id_dangcauhoi;?>" readonly>
								</div>
						</div>
						<div class="control-group"style="text-align:center;">
							<div class="controls">
								<button type="submit" class="btn btn-success"  name="them1">Thêm mới</button>
							</div>
						</div>
			</form>

            
    <?php }elseif($id_dangcauhoi==2){ ?> <!-- Điền từ-->
<form action="" method="post" enctype="multipart/form-data" >
						<label class="control-label" for="basicinput">Chọn dạng kỹ năng</label>
					<select data-title="A tooltip for the input"data-original-title="" class="span8 tip" name="id_kynang" required> 
						<option value="">--Chọn--</option>
						<?php
						$sql_kn="SELECT * FROM kynang ORDER BY id_kynang ASC";
						$query_kn= mysqli_query($connection,$sql_kn);
						while($row_kn= mysqli_fetch_assoc($query_kn)){
							?>
							<option value="<?php echo $row_kn['id_kynang']?>"><?php echo ucwords($row_kn['ten_kynang'])?></option>
							<?php
						}
						?>
					</select>
                    <div class="control-group">
                        <label class="control-label" for="basicinput">Nội dung câu hỏi</label>
                            <div class="controls">
                                <textarea data-title="A tooltip for the input" type="text" name="noidung" placeholder="Nhập nội dung câu hỏi" data-original-title="" class="span8 tip"></textarea>
                            </div>
                    </div>
					<div class="control-group">
							<div class="controls">
								<input data-title="A tooltip for the input" type="file" name="hinhanh" placeholder="Nhập nội dung câu hỏi" data-original-title="" class="span8 tip" >
							</div>
					</div>

                    ĐÁP ÁN ĐÚNG
                    <div class="control-group">
                            <div class="controls">
                                <input data-title="A tooltip for the input" type="text" name="dapan_dung" placeholder="Nhập đáp án đúng" data-original-title="" class="span8 tip" required>
                            </div>
                    </div> 

                    <div class="control-group">
                        <label class="control-label" for="basicinput">Ngày cập nhật</label>
                            <div class="controls">
                                <input type="text" id="ngaycapnhat_ch"  class="form-control" name="ngaycapnhat_ch" value="<?php echo date('d/m/Y');?>" readonly>
                            </div>
                    </div>
					<div class="control-group hidden">
							<div class="controls">
                                    <input type="text" id="id_dangcauhoi"  class="form-control" name="id_dangcauhoi" value="<?php echo $id_dangcauhoi;?>" readonly>
							</div>
					</div>
                    <div class="control-group"style="text-align:center;">
                        <div class="controls">
                            <button type="submit" class="btn btn-success"  name="them2">Thêm mới</button>
                        </div>
                    </div>
    </form>
    
    <?php }elseif($id_dangcauhoi==3){ ?> <!-- Đúng sai-->
        
 <form action="" method="post" enctype="multipart/form-data" >
 					<label class="control-label" for="basicinput">Chọn dạng kỹ năng</label>
				<select data-title="A tooltip for the input"data-original-title="" class="span8 tip" name="id_kynang" required> 
						<option value="">--Chọn--</option>
						<?php
						$sql_kn="SELECT * FROM kynang ORDER BY id_kynang ASC";
						$query_kn= mysqli_query($connection,$sql_kn);
						while($row_kn= mysqli_fetch_assoc($query_kn)){
							?>
							<option value="<?php echo $row_kn['id_kynang']?>"><?php echo ucwords($row_kn['ten_kynang'])?></option>
							<?php
						}
						?>
				</select>
                <div class="control-group">
                    <label class="control-label" for="basicinput">Nội dung câu hỏi</label>
                        <div class="controls">
                            <textarea data-title="A tooltip for the input" type="text" name="noidung" placeholder="Nhập nội dung câu hỏi" data-original-title="" class="span8 tip" ></textarea>
                        </div>
                </div>
				<div class="control-group">
						<div class="controls">
							<input data-title="A tooltip for the input" type="file" name="hinhanh" placeholder="Nhập nội dung câu hỏi" data-original-title="" class="span8 tip" >
						</div>
				</div>
                ĐÁP ÁN ĐÚNG
                <div class="control-group">
							<label class="radio inline">
								<input type="radio" name="dapan_dung" value="true" required>
									True
							</label> 
                            &ensp;&ensp;
							<label class="radio inline">
								<input type="radio" name="dapan_dung" value="false">
									False
							</label> 
                </div> 

                <div class="control-group">
                    <label class="control-label" for="basicinput">Ngày cập nhật</label>
                        <div class="controls">
                            <input type="text" id="ngaycapnhat_ch"  class="form-control" name="ngaycapnhat_ch" value="<?php echo date('d/m/Y');?>" readonly>
                        </div>
                </div>
				<div class="control-group hidden">
						<div class="controls">
                            <input type="text" id="id_dangcauhoi"  class="form-control" name="id_dangcauhoi" value="<?php echo $id_dangcauhoi;?>" readonly>
						</div>
				</div>
                <div class="control-group"style="text-align:center;">
                    <div class="controls">
                        <button type="submit" class="btn btn-success"  name="them3">Thêm mới</button>
                    </div>
                </div>
    </form>
 <?php } ?>