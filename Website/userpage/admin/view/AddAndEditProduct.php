<!-- View modal-->
<div class="modal fade bd-example-modal-lg" id="view" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-center" id="myModalLabel">Thông tin sản phẩm</h4>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-5">
                            <img id="vprodimg" width="400px" class="img-fluid " src="vendors/images/img/áo thun man.jpg">
                        </div>
                        <div class="col-7">
                            <div class="form-group input-group">
                                <span class="input-group-addon" style="width:150px;">ID:</span>
                                <span id="vprodid" class="input-group-addon" ></span>
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon" style="width:150px;">Tên:</span>
                                <span id="vprodname" class="input-group-addon" style="width:250px;"></span>
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon" style="width:150px;">Bảo hành:</span>
                                <span id="vprodwrt" class="input-group-addon" ></span>
                            </div>   
                            <div class="form-group input-group">
                                <span class="input-group-addon" style="width:150px;">Giá:</span>
                                <span id="vprodprice" class="input-group-addon" ></span>
                            </div>   
                            <div class="form-group input-group">
                                <span class="input-group-addon" style="width:150px;">Giá giảm:</span>
                                <span id="vproddiscount" class="input-group-addon" ></span>
                            </div>  
                            <div class="form-group input-group">
                                <span class="input-group-addon" style="width:150px;">Loại:</span>
                                <span id="vprodgenre" class="input-group-addon" ></span>
                            </div>
                        </div> 
                    </div>  
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>Đóng</button>
            </div>
        </div>
    </div>
</div>

<!-- Edit Modal-->
<?php
$categories = array("TV", "Tủ lạnh", "Laptop", "Điện thoại", "Loa", "Máy lạnh");
$checkgenre;
?>

<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="controller/ProductController.php" method="post" enctype="multipart/form-data">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title text-center" id="myModalLabel">Chỉnh thông tin sản phẩm</h4>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="form-group input-group">
                            <span class="input-group-addon" style="width:150px;">ID:</span>
                            <input type="text" name="txt_id" class="form-control" id="eprodid">
                        </div>
                        <div class="form-group input-group">
                            <span class="input-group-addon" style="width:150px;">Tên:</span>
                            <input type="text" name="txt_name" class="form-control" id="eprodname">
                        </div>
                        <div class="form-group input-group">
                            <span class="input-group-addon" style="width:150px;">Tên:</span>
                            <input type="text" name="txt_warranty" class="form-control" id="eprodwrt">
                        </div>
                        <div class="form-group input-group">
                            <span class="input-group-addon" style="width:150px;">Giá:</span>
                            <input type="text" name="txt_price" class="form-control" id="eprodprice">
                        </div>   
                        <div class="form-group input-group">
                            <span class="input-group-addon" style="width:150px;">Giá giảm:</span>
                            <input type="text" name="txt_discount" class="form-control" id="eproddiscount">
                        </div>
                        <div class="form-group input-group">
                            <span class="input-group-addon" style="width:150px;">Hình ảnh:</span>
                            <input type="file" name="prod_img" name="img" accept="image/*" id="eprodimg">
                        </div> 
                        <div class="form-group input-group">
                            <span class="input-group-addon" style="width:150px;">Loại:</span>
                            <select name="genre" id="vprodgenre">
                                <?php for ($i = 0; $i < count($categories); $i++) { ?>
                                    <option value="<?php echo $i; ?>" ><?php echo $categories[$i]; ?></option>
                                <?php } ?>   
                            </select>
                        </div>        
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Bỏ</button>
                    <button type="submit" name="edit" class="btn btn-success"><span class="glyphicon glyphicon-edit"></span> </i> Cập nhật</button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- Add Modal-->
<?php
$categories = array("TV", "Tủ lạnh", "Laptop", "Điện thoại", "Loa", "Máy lạnh");
?>

<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="controller/ProductController.php" method="post" enctype="multipart/form-data">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title text-center" id="myModalLabel">Chỉnh thông tin sản phẩm</h4>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="form-group input-group">
                            <span class="input-group-addon" style="width:150px;">ID:</span>
                            <input type="text" name="txt_id" style="width:350px;" class="form-control" id="eprodid">
                        </div>
                        <div class="form-group input-group">
                            <span class="input-group-addon" style="width:150px;">Tên:</span>
                            <input type="text" name="txt_name" style="width:350px;" class="form-control" id="eprodname">
                        </div>
                        <div class="form-group input-group">
                            <span class="input-group-addon" style="width:150px;">Tên:</span>
                            <input type="text" name="txt_warranty" style="width:350px;" class="form-control" id="eprodwrt">
                        </div>
                        <div class="form-group input-group">
                            <span class="input-group-addon" style="width:150px;">Giá:</span>
                            <input type="text" name="txt_price" style="width:350px;" class="form-control" id="eprodprice">
                        </div>   
                        <div class="form-group input-group">
                            <span class="input-group-addon" style="width:150px;">Giá giảm:</span>
                            <input type="text" name="txt_discount" style="width:350px;" class="form-control" id="eproddiscount">
                        </div>
                        <div class="form-group input-group">
                            <span class="input-group-addon" style="width:150px;">Hình ảnh:</span>
                            <input type="file" name="prod_img" name="img" accept="image/*" id="eprodimg">
                        </div> 
                        <div class="form-group input-group">
                            <span class="input-group-addon" style="width:150px;">Loại:</span>
                            <select name="genre" id="vprodgenre">
                                <?php for ($i = 0; $i < count($categories); $i++) { ?>
                                    <option value="<?php echo $i; ?>" ><?php echo $categories[$i]; ?></option>
                                <?php } ?>   
                            </select>
                        </div>        
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Bỏ</button>
                    <button type="submit" name="add" class="btn btn-success"><span class="glyphicon glyphicon-edit"></span> </i>Thêm</button>
                </div>
            </div>
        </form>
    </div>
</div>
