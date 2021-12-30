<?php
// Layout product theo chiều dọc
function product($product){
    echo '
            <article class="single_product">
                <figure>
                    <div class="product_thumb">
                        <a class="primary_img" href="variable-product.php?id='.$product["product_id"].'"><img src='.$product["img"].' alt=""></a>
                        <div class="label_product">
                            <span class="label_sale">Sale</span>
                        </div>
                        <div class="action_links">
                            <ul>
                                <li class="wishlist"><a href="cart.php" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                <li class="compare"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Compare"><i class="ion-ios-settings-strong"></i></a></li>
                                <li class="quick_button"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-bs-toggle="modal" data-bs-target="#modal_box" data-tippy="quick view"><i class="ion-ios-search-strong"></i></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="product_content grid_content">
                        <div class="product_content_inner">
                            <h4 class="product_name"><a href="variable-product.php?id='.$product["product_id"].'">'.$product["product_name"].'</a></h4>
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
                                <span class="current_price">'
                                .number_format($product["price_current"]).
                                ' VNĐ</span>
                            </div>
                        </div>
                        <div class="add_to_cart">
                            <a href="cart.php" title="Add to cart">Add to cart</a>
                        </div>
                    </div>
                    <div class="product_content list_content">
                        <h4 class="product_name"><a href="variable-product.php?id='.$product["product_id"].'">'.$product["product_name"].'</a></h4>
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
                            <span class="old_price">'.$product["price_current"].'</span>
                            <span class="current_price">$70.00</span>
                        </div>
                        <div class="product_desc">
                            <p>'.$product["product_desc"].'</p>
                        </div>
                        <div class="add_to_cart">
                            <a href="cart.php" title="Add to cart">Add to cart</a>
                        </div>
                        <div class="action_links">
                            <ul>
                                <li class="wishlist"><a href="cart.php" title="Add to Wishlist"><i class="ion-android-favorite-outline"></i> Add to Wishlist</a></li>
                                <li class="compare"><a href="#" title="Add to Compare"><i class="ion-ios-settings-strong"></i> Compare</a></li>
                                <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"><i class="ion-ios-search-strong"></i> quick view</a></li>
                            </ul>
                        </div>
                    </div>
                </figure>
            </article>';
}

// Layout product theo chiều ngang
function productFlexRow($product){
    echo '<figure class="single_product">
        <div class="product_thumb">
            <a class="primary_img" href="variable-product.php?id='.$product["product_id"].'"><img src="'.$product["img"].'" alt=""></a>
        </div>
        <div class="product_content">
            <h4 class="product_name"><a href="variable-product.php?id='.$product["product_id"].'">'.$product["product_name"].'</a></h4>
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
                <span class="current_price">'.number_format($product["price_current"]).' VNĐ</span>
            </div>
            <div class="product_cart_button">
                <a href="cart.php" title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
            </div>
        </div>
    </figure>';
}
?>