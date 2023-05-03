<option value="">--Chọn tuần--</option>  
                      <?php 
                        include("config.php");
                        $key = $_POST['id'];
                      $sql_t="SELECT * FROM tuan WHERE id_namhoc=$key ORDER BY id_tuan ASC";
                      $query_t= mysqli_query($connection,$sql_t);
                      while($row_t= mysqli_fetch_assoc($query_t)){
                        $T2=$row_t['ngaybatdau'];
                        $CN = strtotime ( '+6 day' , strtotime ($T2) );
                        $CN = date ( 'Y-m-d' , $CN );
                        ?>
                        <option value="<?php echo $row_t['id_tuan']?>"><?php echo $row_t['ten_tuan']?> 
                            [Từ ngày 
                            <?php    
                                 $odate = $row_t['ngaybatdau'];
                                 $newDate = date("d/m/Y", strtotime($odate));
                                 echo $newDate."\n";
                            ?> 
                            đến ngày 
                            <?php    
                                $odate = $CN;
                                $newDate = date("d/m/Y", strtotime($odate));
                                echo $newDate;
                            ?>]
                            </option>
                        <?php
                      }
                      ?>