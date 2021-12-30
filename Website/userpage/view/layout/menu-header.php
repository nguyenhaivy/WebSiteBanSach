<header>
    <div class="main_header">
        <div class="container">
            <!--header middel start-->
            <div class="header_middle sticky-header">
                <div class="row align-items-center">
                    <div class="col-lg-2 col-md-3 col-4">
                        <div class="logo">
                            <a href="index.php"><img src="assets/img/logo/logo.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-12">
                        <div class="main_menu menu_position text-center">
                            <nav>
                                <ul>
                                    <li><a class="active" href="index.php">Trang chủ</a></li>
                                    <li class="mega_items"><a href="shop.php">shop</a></li>
                                    <li><a href="blog.php">Blog</a></li>
                                    <li><a href="about.php">About Us</a></li>
                                    <li><a href="contact.php"> Contact Us</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-7 col-6">
                            <?php
                                if(isset($_SESSION["username"])){
                                    echo '
                                        <div class="header_configure_area">
                                        <div class="dropdown me-5 my-auto">
                                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                            Hello '.$_SESSION["username"].'
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                            <li><a class="dropdown-item" href="my-account.php">Profile</a></li>
                                            <li><a class="dropdown-item" href="../controller/logout-controller.php">Log out</a></li>
                                            </ul>
                                        </div>
                                            <div class="mini_cart_wrapper">
                                                <a href="javascript:void(0)">
                                                    <i class="fa fa-shopping-bag"></i>
                                                    <span class="cart_count">2</span>
                                                </a>
                                            </div>
                                        </div>';
                                }else{
                                    echo '<div class="header_configure_area">
                                            <div class="main_menu menu_position text-center mx-5">
                                                <nav>
                                                    <ul>
                                                        <li><a href="login.php"><i class="fa fa-user"></i> Login</a></li>
                                                    </ul>
                                                </nav>
                                            </div>
                                        </div>';
                                }
                            ?>
                        </div>
                </div>
            </div>
            <!--header middel end-->
            
                <!--mini cart-->
            <div class="mini_cart">
                <div class="cart_close">
                    <div class="cart_text">
                        <h3>cart</h3>
                    </div>
                    <div class="mini_cart_close">
                        <a href="javascript:void(0)"><i class="ion-android-close"></i></a>
                    </div>
                </div>
                <div class="cart_item">
                    <div class="cart_img">
                        <a href="#"><img src="assets/img/s-product/product.jpg" alt=""></a>
                    </div>
                    <div class="cart_info">
                        <a href="#">Primis In Faucibus</a>
                        <p>Qty: 1 X <span> $60.00 </span></p>
                    </div>
                    <div class="cart_remove">
                        <a href="#"><i class="ion-android-close"></i></a>
                    </div>
                </div>
                <div class="cart_item">
                    <div class="cart_img">
                        <a href="#"><img src="assets/img/s-product/product2.jpg" alt=""></a>
                    </div>
                    <div class="cart_info">
                        <a href="#">Letraset Sheets</a>
                        <p>Qty: 1 X <span> $60.00 </span></p>
                    </div>
                    <div class="cart_remove">
                        <a href="#"><i class="ion-android-close"></i></a>
                    </div>
                </div>
                <div class="mini_cart_table">
                    <div class="cart_total">
                        <span>Sub total:</span>
                        <span class="price">$138.00</span>
                    </div>
                    <div class="cart_total mt-10">
                        <span>total:</span>
                        <span class="price">$138.00</span>
                    </div>
                </div>
                <div class="mini_cart_footer">
                    <div class="cart_button">
                        <a href="cart.php">View cart</a>
                    </div>
                    <div class="cart_button">
                        <a class="active" href="checkout.php">Checkout</a>
                    </div>

                </div>
            </div>
            <!--mini cart end-->

            <!--header bottom satrt-->
            <div class="header_bottom">
                <div class="row align-items-center">
                    <div class="column1 col-lg-3 col-md-6">
                        <div class="categories_menu categories_three">
                            <div class="categories_title">
                                <h2 class="categori_toggle">Danh mục sản phẩm</h2>
                            </div>
                            <div class="categories_menu_toggle">
                                <ul>
                                    <li class="menu_item_children"><a href="#">Tivi</a>
                                    </li>
                                    <li class="menu_item_children"><a href="#"> Laptop</a>
                                    </li>
                                    <li class="menu_item_children"><a href="#"> Điện thoại</a>
                                    </li>
                                    <li><a href="#"> Loa</a></li>
                                    <li><a href="#"> Tủ lạnh</a></li>
                                    <li><a href="#">Máy lạnh</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="column2 col-lg-6 ">
                        <div class="search_container">
                            <form action="#">
                                <div class="hover_category">
                                    <select class="select_option" name="select" id="categori2">
                                        <option selected value="1">Tất cả danh mục</option>
                                        <option value="2">Laptops</option>
                                        <option value="3">TV</option>
                                        <option value="4">Điện thoại</option>
                                        <option value="5">Loa </option>
                                        <option value="6">Tủ lạnh</option>
                                        <option value="7">Máy lạnh</option>
                                    </select>
                                </div>
                                <div class="search_box">
                                    <input placeholder="Tìm sản phẩm..." type="text">
                                    <button type="submit">Tìm kiếm</button>
                                </div>
                            </form>
                        </div>

                    </div>
                    <div class="column3 col-lg-3 col-md-6">
                        <div class="header_bigsale">
                            <a href="#">BIG SALE BLACK FRIDAY</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--header bottom end-->
        </div>
    </div>
</header>