<section class="page-banner">
    <h2 class="page-title">Shopping cart</h2>
</section>
<?php if (isset($_SESSION['cart'])) : ?>
    <section id="main-container" class="main-container">
        <div class="container">
            <div class="section-shopping-cart">
                <div class="row">
                    <div class="col-md-12">
                        <div class="entry-content content-page">
                            <div class="woocommerce">
                                <form action="" method="post">
                                    <table class="shop_table cart" cellspacing="0">
                                        <thead>
                                        <tr>
                                            <th class="product-remove">&nbsp;</th>
                                            <th class="product-thumbnail">&nbsp;</th>
                                            <th class="product-name">Product</th>
                                            <th class="product-price">Price</th>
                                            <th class="product-quantity">Quantity</th>
                                            <th class="product-subtotal">Total</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $total_price = 0; foreach ($_SESSION['cart'] AS $product_id => $product): ?>
                                            <tr class="cart_item">
                                                <td data-title="Remove" class="product-remove">
                                                    <a href="delete-product/<?php echo $product_id ?>.html" class="remove" title="" data-product_id="68" data-product_sku="73253-61">×</a>
                                                </td>
                                                <td data-title="Thumbnail" class="product-thumbnail">
                                                    <a href=""><img width="73" height="84" src="../backend/assets/uploads/<?php echo $product['avatar'] ?>" class=" wp-post-image" alt="amofw-0302"></a>
                                                </td>
                                                <td data-title="Product" class="product-name">
                                                    <a href=""><?php echo $product['name'] ?></a>
                                                </td>
                                                <td data-title="Price" class="product-price">
                                                    <span class="amount">
                                                        <?php echo number_format($product['price']); ?>
                                                    </span>
                                                </td>
                                                <td data-title="Quantity" class="product-quantity">
                                                    <div class="quantity">
                                                        <input type="button" onclick="var qty_el = document.getElementById('qty'); var qty = qty_el.value; if( !isNaN( qty )) qty_el.value++;return false;" class="plus" value="+">
                                                        <input type="text" name="<?php echo $product_id?>" id="qty" maxlength="12" value="<?php echo $product['quantity'] ?>" title="Qty" class="input-text qty text">
                                                        <input type="button" onclick="var qty_el = document.getElementById('qty'); var qty = qty_el.value; if( !isNaN( qty ) &amp;&amp; qty > 0 ) qty_el.value--;return false;" class="minus" value="-">
                                                    </div>
                                                </td>
                                                <td data-title="Subtotal" class="product-subtotal">
                                                    <span class="amount">
                                                        <?php
                                                        $product_price = $product['price'] * $product['quantity'];
                                                        $total_price += $product_price;
                                                        echo number_format($product_price);
                                                        ?>
                                                    </span>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                        <tr>
                                            <td colspan="6" class="actions">
                                                <div class="coupon">
                                                    <label for="coupon_code"></label> <input type="text"  class="input-text" id="coupon_code" value="" placeholder="Coupon code"> <input type="submit" class="button" name="apply_coupon" value="Apply Coupon">
                                                </div>
                                                <input type="submit" class="button"  value="Update Cart">
                                                <input type="hidden" id="_wpnonce"  value="777b4f0312"><input type="hidden" name="_wp_http_referer" value="/cart/">
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-6 ">
                        <div class="cart-collaterals cart_totals shipping-calculator ">
                            <h2>Shipping calculator</h2>
                            <form action="shopping-cart_submit" method="get" accept-charset="utf-8">
                                <div class="variations">
                                    <div class="value">
                                        <select id="color" name="attribute_color">
                                            <option value="BD">Ba Đình</option>
                                            <option value="HK">Hoàn Kiếm</option>
                                            <option value="DD">Đống Đa</option>
                                            <option value="HBT">Hai Bà Trưng</option>
                                            <option value="CG">Cầu Giấy</option>
                                            <option value="TH">Tây Hồ</option>
                                            <option value="TX">Thanh Xuân</option>
                                            <option value="HM">Hoàng Mai</option>
                                            <option value="HD">Hà Đông</option>
                                            <option value="LB">Long Biên</option>
                                            <option value="BTL">Bắc Từ Liêm</option>
                                            <option value="NTL">Nam Từ Liêm</option>
                                            <option value="ST">Sơn Tây</option>
                                            <option value=""></option>
                                            <option value=""></option>
                                            <option value=""></option>
                                            <option value=""></option>
                                            <option value=""></option>
                                            <option value=""></option>
                                            <option value=""></option>
                                            <option value=""></option>
                                            <option value=""></option>
                                            <option value=""></option>
                                            <option value=""></option>
                                            <option value=""></option>
                                            <option value=""></option>
                                            <option value=""></option>
                                            <option value=""></option>
                                            <option value=""></option>
                                            <option value=""></option>
                                        </select>
                                    </div>
                                </div>
                                <p class=" form-row form-row-wide" id="billing_company_field">
                                    <input type="text" class="input-text " name="billing_company" id="billing_company" placeholder="State / Coutry" value="">
                                </p>
                                <p class=" form-row form-row-wide" id="billing_company_field">
                                    <input type="text" class="input-text " name="billing_company" id="billing_company" placeholder="Postcode" value="">
                                </p>
                                <div class="wc-update-shipping">
                                    <a href="" class="checkout-button button ">update total</a>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-5 col-md-offset-1">
                        <div class="cart-collaterals">
                            <div class="cart_totals ">
                                <h2>Cart Totals</h2>
                                <table cellspacing="0">
                                    <tbody>
                                    <tr class="cart-subtotal">
                                        <th>Subtotal</th>
                                        <td><span class="amount"><?php echo number_format($total_price); ?> VND</span></td>
                                    </tr>
                                    <tr class="cart-subtotal">
                                        <th>Shipping</th>
                                        <td>
                                            <span class="amount">Please use the shipping calculator to see available shipping</span>
                                        </td>
                                    </tr>
                                    <tr class="order-total">
                                        <th>Total</th>
                                        <td><strong>
                                            <span class="amount">
                                                <?php echo number_format($total_price); ?> VND
                                            </span>
                                            </strong>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <div class="wc-proceed-to-checkout">
                                    <a href="index.php?controller=payment&action=index" class="checkout-button button">Proceed to Checkout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
<?php else: ?>
    <h3>Cart empty</h3>
<?php endif; ?>
