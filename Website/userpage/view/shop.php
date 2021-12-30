<?php
include '../config.php';
function loadClass($classname){
  include "../model/$classname.php";
}
spl_autoload_register('loadClass');

$product = new Product();
$data = $product->getAll();
// var_dump($data);
// exit();
?>
<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from template.hasthemes.com/antomi/antomi/shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Oct 2021 10:28:37 GMT -->
<head>
    <?php include "layout/header.php"; ?>
</head>

<body>

    <!--Offcanvas menu area start-->
        <?php include 'layout/menu-mobile.php'; ?>
    <!--Offcanvas menu area end-->

    <!--header area start-->
    <?php include "layout/menu-header.php"; ?>
    <!--header area end-->

    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="index.php">home</a></li>
                            <li>shop</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!--shop  area start-->
    <div class="shop_area shop_reverse">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12">
                    <!--sidebar widget start-->
                    <aside class="sidebar_widget">
                        <div class="widget_list widget_categories">
                            <h3>Danh mục sản phẩm</h3>
                            <ul>
                                <li><a href="#">TV</a></li>
                                <li><a href="#">Laptops</a></li>
                                <li><a href="#">Điện thoại</a></li>
                                <li><a href="#">Loa</a> </li>
                                <li><a href="#">Máy Lạnh</a></li>
                                <li><a href="#">Tủ Lạnh</a></li>
                            </ul>
                        </div>
                        <div class="widget_list widget_filter">
                            <h3>Filter by price</h3>
                            <form action="#">
                                <div id="slider-range"></div>
                                <button type="submit">Filter</button>
                                <input type="text" name="text" id="amount" />

                            </form>
                        </div>
                        <div class="widget_list">
                            <h3>Compare Products</h3>
                            <div class="recent_product_container">
                                <?php
                                    for($i = 0; $i < 3; $i++){
                                        echo '<article class="recent_product_list">
                                                <figure>
                                                    <div class="product_thumb">
                                                        <a class="primary_img" href="product-details.html"><img src="assets/img/product/product'.($i+9).'.jpg" alt=""></a>
                                                        <a class="secondary_img" href="product-details.html"><img src="assets/img/product/product'.($i+10).'.jpg" alt=""></a>
                                                    </div>
                                                    <div class="product_content">
                                                        <h4><a href="variable-product.php">Aliquam lobortis pellentesque</a></h4>
                                                        <div class="product_rating">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="price_box">
                                                            <span class="old_price">$70.00</span>
                                                            <span class="current_price">$65.00</span>
                                                        </div>
                                                    </div>
                                                </figure>
                                            </article>';
                                    }
                                ?>
                            </div>
                        </div>
                        <div class="widget_list tags_widget">
                            <h3>Product tags</h3>
                            <div class="tag_cloud">
                                <a href="#">TV</a>
                                <a href="#">phone</a>
                                <a href="#">Loa</a>
                                <a href="#">handbag</a>
                                <a href="#">laptop</a>
                            </div>
                        </div>
                    </aside>
                    <!--sidebar widget end-->
                </div>
                <div class="col-lg-9 col-md-12">

                    <!--shop banner area start-->
                    <div class="shop_banner_area mb-30">
                        <div class="row">
                            <div class="col-12">
                                <div class="shop_banner_thumb">
                                    <img src="assets/img/bg/banner16.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--shop banner area end-->
                    <!--shop toolbar start-->
                    <div class="shop_toolbar_wrapper">
                        <div class="shop_toolbar_btn">
                            <button data-role="grid_4" type="button" class=" active btn-grid-4" data-toggle="tooltip" title="4"></button>
                            <button data-role="grid_list" type="button" class="btn-list" data-toggle="tooltip" title="List"></button>
                        </div>
                        <div class=" niceselect_option">
                            <form class="select_option" action="#">
                                <select name="orderby" id="short">
                                    <option selected value="1">Sort by average rating</option>
                                    <option value="2">Sort by popularity</option>
                                    <option value="3">Sort by newness</option>
                                    <option value="4">Sort by price: low to high</option>
                                    <option value="5">Sort by price: high to low</option>
                                    <option value="6">Product Name: Z</option>
                                </select>
                            </form>
                        </div>
                        <div class="page_amount">
                            <p>Showing 1–9 of 21 results</p>
                        </div>
                    </div>
                    <!--shop toolbar end-->

                    <!--shop wrapper start-->
                    <div class="row no-gutters shop_wrapper">
                        <?php
                            include 'layout/product-cart.php';
                            for($i = 0; $i < 10; $i++){
                                echo '<div class="col-lg-3 col-md-4 col-12">';
                                product($data[$i]);
                                echo '</div>';
                            }
                        ?>
                    </div>

                    <div class="shop_toolbar t_bottom">
                        <div class="pagination">
                            <ul>
                                <li class="current">1</li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li class="next"><a href="#">next</a></li>
                                <li><a href="#">>></a></li>
                            </ul>
                        </div>
                    </div>
                    <!--shop toolbar end-->
                    <!--shop wrapper end-->
                </div>
            </div>
        </div>
    </div>
    <!--shop  area end-->

    <!--footer area start-->
    <?php include "layout/footer.php"; ?>
    <!--footer area end-->

    <!-- modal area start-->
    <div class="modal fade" id="modal_box" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="modal_body">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5 col-md-5 col-sm-12">
                                <div class="modal_tab">
                                    <div class="tab-content product-details-large">
                                        <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="assets/img/product/productbig2.jpg" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab2" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="assets/img/product/productbig3.jpg" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab3" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="assets/img/product/productbig4.jpg" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab4" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="assets/img/product/productbig5.jpg" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal_tab_button">
                                        <ul class="nav product_navactive owl-carousel" role="tablist">
                                            <li>
                                                <a class="nav-link active" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="false"><img src="assets/img/product/product1.jpg" alt=""></a>
                                            </li>
                                            <li>
                                                <a class="nav-link" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false"><img src="assets/img/product/product6.jpg" alt=""></a>
                                            </li>
                                            <li>
                                                <a class="nav-link button_three" data-toggle="tab" href="#tab3" role="tab" aria-controls="tab3" aria-selected="false"><img src="assets/img/product/product9.jpg" alt=""></a>
                                            </li>
                                            <li>
                                                <a class="nav-link" data-toggle="tab" href="#tab4" role="tab" aria-controls="tab4" aria-selected="false"><img src="assets/img/product/product14.jpg" alt=""></a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-7 col-sm-12">
                                <div class="modal_right">
                                    <div class="modal_title mb-10">
                                        <h2>Sit voluptatem rhoncus sem lectus</h2>
                                    </div>
                                    <div class="modal_price mb-10">
                                        <span class="new_price">$64.99</span>
                                        <span class="old_price" >$78.99</span>
                                    </div>
                                    <div class="modal_description mb-15">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia iste laborum ad impedit pariatur esse optio tempora sint ullam autem deleniti nam in quos qui nemo ipsum numquam, reiciendis maiores quidem aperiam, rerum vel recusandae </p>
                                    </div>
                                    <div class="variants_selects">
                                        <div class="variants_size">
                                            <h2>size</h2>
                                            <select class="select_option">
                                                <option selected value="1">s</option>
                                                <option value="1">m</option>
                                                <option value="1">l</option>
                                                <option value="1">xl</option>
                                                <option value="1">xxl</option>
                                            </select>
                                        </div>
                                        <div class="variants_color">
                                            <h2>color</h2>
                                            <select class="select_option">
                                                <option selected value="1">purple</option>
                                                <option value="1">violet</option>
                                                <option value="1">black</option>
                                                <option value="1">pink</option>
                                                <option value="1">orange</option>
                                            </select>
                                        </div>
                                        <div class="modal_add_to_cart">
                                            <form action="#">
                                                <input min="1" max="100" step="2" value="1" type="number">
                                                <button type="submit">add to cart</button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="modal_social">
                                        <h2>Share this product</h2>
                                        <ul>
                                            <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li class="pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                            <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                            <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- modal area end-->

</body>


<!-- Mirrored from template.hasthemes.com/antomi/antomi/shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Oct 2021 10:28:38 GMT -->
</html>