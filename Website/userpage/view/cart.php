<!doctype html>
<html class="no-js" lang="en">
<!-- Mirrored from template.hasthemes.com/antomi/antomi/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Oct 2021 10:28:38 GMT -->
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
                            <li>Shopping Cart</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!--shopping cart area start -->
    <div class="cart_page_bg">
        <div class="container">
            <div class="shopping_cart_area">
                <form action="#">
                    <div class="row">
                        <div class="col-12">
                            <div class="table_desc">
                                <div class="cart_page table-responsive">
                                    
                                    <table>
                                        <thead>
                                            <tr>
                                                <th class="product_remove">Delete</th>
                                                <th class="product_thumb">Image</th>
                                                <th class="product_name">Product</th>
                                                <th class="product-price">Price</th>
                                                <th class="product_quantity">Quantity</th>
                                                <th class="product_total">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                        $shop = array(
                                            "Handbag fringilla",
                                            "Handbags justo",
                                            "Handbag elit"
                                         ); 
                                         $money = array(
                                        65.00,
                                        90.00,
                                        80.00
                                         );
                                         $arrImg3 = array(
                                        "assets/img/s-product/product.jpg",
                                        "assets/img/s-product/product2.jpg",
                                        "assets/img/s-product/product3.jpg"
                                        );
                                        for($i =0 ; $i < 3;$i++){
                                            echo'
                                            <tr>
                                            <td class="product_remove"><a href="#"><i class="fa fa-trash-o"></i></a></td>
                                            <td class="product_thumb"><a href="#"><img src='.$arrImg3[$i].' alt=""></a></td>
                                            <td class="product_name"><a href="#">'.$shop[$i].'</a></td>
                                            <td class="product-price">£'.$money[$i].'</td>
                                            <td class="product_quantity"><label>Quantity</label> <input min="1" max="100" value="1" type="number"></td>
                                            <td class="product_total">£'.$money[$i].'</td>
                                            </tr>';
                                        }
                                        ?>
                                         
                                        </tbody>
                                    </table>
                                </div>
                                <div class="cart_submit">
                                    <button type="submit">update cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--coupon code area start-->
                    <div class="coupon_area">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="coupon_code left">
                                    <h3>Coupon</h3>
                                    <div class="coupon_inner">
                                        <p>Enter your coupon code if you have one.</p>
                                        <input placeholder="Coupon code" type="text">
                                        <button type="submit">Apply coupon</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="coupon_code right">
                                    <h3>Cart Totals</h3>
                                    <div class="coupon_inner">
                                        <div class="cart_subtotal">
                                            <p>Subtotal</p>
                                            <p class="cart_amount">£215.00</p>
                                        </div>
                                        <div class="cart_subtotal ">
                                            <p>Shipping</p>
                                            <p class="cart_amount">
                                            <span>Flat Rate:</span> £255.00</p>
                                        </div>
                                        <a href="#">Calculate shipping</a>

                                        <div class="cart_subtotal">
                                            <p>Total</p>
                                            <p class="cart_amount">£215.00</p>
                                        </div>
                                        <div class="checkout_btn">
                                            <a href="checkout.php">Proceed to Checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--coupon code area end-->
                </form>
            </div>
        </div>
    </div>
    <!--shopping cart area end -->

    <!--footer area start-->
    <?php include "layout/footer.php"; ?>
</body>


<!-- Mirrored from template.hasthemes.com/antomi/antomi/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Oct 2021 10:28:38 GMT -->
</html>