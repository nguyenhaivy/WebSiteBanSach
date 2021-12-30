<!DOCTYPE html>
<html>
    <head>
        <?php include('Layout/Header.php'); ?>
    </head>
    <body>

        <!-- Title Bar -->
        <?php include('Layout/TitleBar.php'); ?>

        <!-- Menu -->
        <?php include('Layout/Menu.php'); ?>

        <div class="mobile-menu-overlay"></div>

        <div class="main-container">
            <div class="pd-ltr-20 xs-pd-20-10">
                <div class="min-height-200px">
                    <?php
                    $prodID = array("P00001", "P000002", "P000003", "P000004", "P000005", "P000006");
                    $prodName = array("Máy lạnh Sharp Inverter 1.5 HP AH-X12XEW", "Laptop HP 14-CF2033WM 3V7G4UA", "Tủ Lạnh Inverter PANASONIC 234 Lít NR-TV261BPAV", "Android Tivi 4K TCL 50 Inch 50P618", "OPPO Reno 5 5G(8GB+128GB), Bạc", "Điện thoại Samsung Galaxy A52s 5G");
                    $prodWarranty = array("1 năm", "1 năm", "1 năm", "1 năm", "6 tháng", "6 tháng");
                    $prodPrice = array("8200000", "24000000", "20000000", "11000000", "4000000", "8500000");
                    $prodDiscount = array("0", "0", "0", "0", "3800000", "83000000");
                    $prodGenre = array("Máy lạnh", "Laptop", "Tủ lạnh", "Tivi", "Điện thoại", "Điện thoại");
                    $prodImg = array("vendors/images/img/máy lạnh.png", "vendors/images/img/Laptop.jpg", "vendors/images/img/tủ lạnh.png", "vendors/images/img/Tivi.png", "vendors/images/img/điện thoại.png", "vendors/images/img/điện thoại 2.png")
                    ?>
                    <!-- Simple Datatable start -->
                    <div class="card-box mb-30">
                        <div class="pd-20">
                            <h4 class="text-blue h4 text-center">Sản phẩm</h4>
                            <!-- Thêm Danh mục mới -->
                            <div>
                                <a href="#" class="btn-block" data-toggle="modal" data-target="#add" type="button">
                                    <button type="button" class="btn btn-primary">Thêm sản phảm</button>
                                </a>
                            </div>
                        </div>
                        <div class="pb-20">
                            <table class="data-table table stripe hover nowrap">
                                <thead>
                                    <tr>
                                        <th class="table-plus datatable-nosort">ID</th>
                                        <th>Hình ảnh</th>
                                        <th>Tên sản phẩm</th>
                                        <th>Thời gian bảo hành</th>
                                        <th>Giá</th>
                                        <th>Giá sau giảm</th>
                                        <th>Loại</th>
                                        <th class="datatable-nosort">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- loop load data -->
                                    <?php for ($i = 0; $i < count($prodID); $i++) { ?>
                                        <tr>
                                            <td id="prodid<?php echo $i; ?>" class="table-plus"><?php echo $prodID[$i] ?></td>
                                            <td >
                                                <img id="prodimg<?php echo $i; ?>" src="<?php echo $prodImg[$i] ?>" width="70" height="70" alt="">
                                            </td>
                                            <td id="prodname<?php echo $i; ?>"><?php echo $prodName[$i] ?></td>
                                            <td id="prodwarranty<?php echo $i; ?>"><?php echo $prodWarranty[$i] ?> </td>
                                            <td id="prodprice<?php echo $i; ?>"><?php echo number_format($prodPrice[$i]) ?><sup>đ</sup></td>
                                            <td id="proddiscount<?php echo $i; ?>"><?php echo number_format($prodDiscount[$i]) ?><sup>đ</sup></td>
                                            <td id="prodgenre<?php echo $i; ?>"><?php echo $prodGenre[$i] ?></td>
                                            <td>
                                                <div class="dropdown">
                                                    <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                                        <i class="dw dw-more"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                                        <a id="view<?php echo $i; ?>" class="dropdown-item" href="#"><i class="dw dw-eye"></i> Chi tiết</a>
                                                        <a id="edit<?php echo $i; ?>" class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Chỉnh sửa</a>
                                                        <a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Xóa</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- click chỉnh sửa và thêm -->
    <?php include('AddAndEditProduct.php'); ?>

    <!-- JS -->
    <?php include('Layout/js/tablejs.php'); ?>
    <script type="text/javascript">
        <?php for ($i = 0; $i < count($prodID); $i++) { ?>
            // load edit modals
            $(document).ready(function () {
                $(document).on('click', '#edit<?php echo $i; ?>', function () {
                    var id = $('#prodid<?php echo $i; ?>').text();// get product id
                    var name = $('#prodname<?php echo $i; ?>').text();// get product name
                    var img = $('#prodimg<?php echo $i; ?>').attr('src');// get product image
                    var wrt = $('#prodwarranty<?php echo $i; ?>').text();// get product image
                    var price = $('#prodprice<?php echo $i; ?>').text();// get product price
                    var discount = $('#proddiscount<?php echo $i; ?>').text();// get product discount
                    var genre = $('#prodgenre<?php echo $i; ?>').text();// get product genre
                    // alert(id +"\n" + name +"\n" + img +"\n" + wrt +"\n" + price +"\n" + discount +"\n" + genre);
                    $('#edit').modal('show');//load modal
                    $('#eprodid').val(id);
                    $('#eprodname').val(name);
                    $('#eprodwrt').val(wrt);
                    $('#eprodprice').val(price);
                    $('#eproddiscount').val(discount);
                    // $('#vprodgenre').val(3).change();
                });
            });

            //load view modals 
            $(document).ready(function () {
                $(document).on('click', '#view<?php echo $i; ?>', function () {
                    var id = $('#prodid<?php echo $i; ?>').text();// get product id
                    var name = $('#prodname<?php echo $i; ?>').text();// get product name
                    var img = $('#prodimg<?php echo $i; ?>').attr('src');// get product image
                    var wrt = $('#prodwarranty<?php echo $i; ?>').text();// get product image
                    var price = $('#prodprice<?php echo $i; ?>').text();// get product price
                    var discount = $('#proddiscount<?php echo $i; ?>').text();// get product discount
                    var genre = $('#prodgenre<?php echo $i; ?>').text();// get product genre
                    $('#view').modal('show');//load modal
                    $('#vprodid').text(id);
                    $('#vprodimg').attr("src", img);
                    $('#vprodname').text(name);
                    $('#vprodwrt').text(wrt);
                    $('#vprodprice').text(price);
                    $('#vproddiscount').text(discount);
                    $('#vprodgenre').text(genre);
                });
            });
        <?php } ?>
    </script>
</html>