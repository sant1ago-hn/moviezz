<?php
require_once 'helpers/Helper.php';
?>

<section id="main-container" class="main-container">
    <div class="product">
        <div class="ts-infoproduct">
            <div class="left-infoproduct">
                <span class="onsale">Sale</span>
                <div class="images">
                    <a href="" itemprop="image" class="woocommerce-main-image" itemprop="image" class="woocommerce-main-image zoom" title="" data-rel="prettyPhoto[product-gallery]">
                        <?php if (!empty($product['avatar'])): ?>
                            <img height="80" src="../backend/assets/uploads/<?php echo $product['avatar'] ?>"  class="attachment-shop_single wp-post-image" alt="" title=""/>
                        <?php endif; ?>
                    </a>
                    <!--  -->
                    <a href="" itemprop="image" class="woocommerce-main-image" itemprop="image" class="woocommerce-main-image zoom" title="" data-rel="prettyPhoto[product-gallery]">
                        <?php if (!empty($product['avatar'])): ?>
                            <img height="80" src="../backend/assets/uploads/<?php echo $product['avatar'] ?>"  class="attachment-shop_single wp-post-image" alt="" title=""/>
                        <?php endif; ?>
                    </a>
                    <!--  -->
                    <a href="" itemprop="image" class="woocommerce-main-image" itemprop="image" class="woocommerce-main-image zoom" title="" data-rel="prettyPhoto[product-gallery]">
                        <?php if (!empty($product['avatar'])): ?>
                            <img height="80" src="../backend/assets/uploads/<?php echo $product['avatar'] ?>"  class="attachment-shop_single wp-post-image" alt="" title=""/>
                        <?php endif; ?>
                    </a>
                </div>
            </div>
            <div class="right-infoproduct">
                <div class="summary entry-summary">
                    <h3 class="product_title entry-title" itemprop="name"><?php echo $product['title'] ?></h3>
                    <h6 class="name-category"><?php echo $product['category_name']?></h6>
                    <div class="product-addtocart">
                        <form  class="variations_form cart">
                            <div class="variations">
                                <div class="value">
                                    <select id="color" name="attribute_color">
                                        <option value="">Choose an option...</option>
                                        <option value="white">White</option>
                                        <option value="black">Black</option>
                                    </select>
                                </div>
                                <div class="value">
                                    <select id="size" name="attribute_size">
                                        <option value="">Choose an optiont...</option>
                                        <option value="small" >Small</option>
                                        <option value="medium" >Medium</option>
                                        <option value="large" >Large</option>
                                    </select>
                                </div>
                            </div>
                            <div class="quantity">
                                <span>Qty</span>
                                <input type="text" value="1">
                            </div>
                            <p class="price"><span class="amount"><?php echo number_format($product['price']) ?></span></p>
                            <div class="single-product-button ts-product-button">
                                <div class="variations_button">
                                    <button class="single_add_to_cart_button button alt" type="submit">Add to cart</button>
                                </div>
                                <div class="yith-wcwl-add-to-wishlist">
                                    <div style="display:block" class="yith-wcwl-add-button show">
                                        <a class="add_to_wishlist" rel="nofollow" href="#">Add to Wishlist</a>
                                        <img width="16" height="16" style="visibility:hidden" alt="loading" class="ajax-loading" src="#">
                                    </div>
                                    <div style="display:none;" class="yith-wcwl-wishlistaddedbrowse hide">
                                        <span class="feedback">Product added!</span>
                                        <a href="#">Browse Wishlist</a>
                                    </div>

                                    <div style="display:none" class="yith-wcwl-wishlistexistsbrowse hide">
                                        <span class="feedback">The product is already in the wishlist!</span>
                                        <a href="#">Browse Wishlist</a>
                                    </div>
                                    <div style="clear:both"></div>
                                    <div class="yith-wcwl-wishlistaddresponse"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="woocommerce-tab-accordion">
                        <h6 class="tab-title">Description</h6>
                        <div id="tab-description" class="panel entry-content product-descript">
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                        </div>
                        <h6 class="tab-title">Additional Information</h6>
                        <div id="tab-additional_information">
                            <table class="shop_attributes">
                                <tbody>
                                <tr class="">
                                    <th>Year</th>
                                    <td><p>936</p></td>
                                </tr>
                                <tr class="">
                                    <th>Dimensions</th>
                                    <td><p>936 H:6.25" x W: 6.0" x D: 8.0"</p></td>
                                </tr>
                                <tr class="">
                                    <th>Materials</th>
                                    <td><p>Glass</p></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <h6 class="tab-title">Reviews (1)</h6>
                        <div id="tab-reviews" class="product-reviews">
                            <div id="reviews">
                                <div id="comments">
                                    <ol class="commentlist">
                                        <li class="comment">
                                            <div class="comment_container">
                                                <img width="60" height="60" class="avatar avatar-60 photo" src="http://0.gravatar.com/avatar/f0cde930b42c79145194679d5b6e3b1d?s=60&amp;d=mm&amp;r=g" alt="Cobus Bester">
                                                <div class="comment-text">
                                                    <div title="Rated 4 out of 5" class="star-rating" itemtype="http://schema.org/Rating" itemscope="" itemprop="reviewRating">
                                                        <span style="width:80%"><strong itemprop="ratingValue">4</strong> out of 5</span>
                                                    </div>
                                                    <p class="meta">
                                                        <strong itemprop="author">Cobus Bester</strong> &ndash; <time datetime="2013-06-07T11:56:32+00:00" itemprop="datePublished">June 7, 2013</time>:
                                                    </p>
                                                    <div class="description" itemprop="description"><p>Wonderful collection of WooThemes classics! A must buy for all Woo fans.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ol>
                                </div>
                                <div id="review_form_wrapper">
                                    <div id="review_form">
                                        <div id="respond" class="comment-respond">
                                            <h5 class="comment-reply-title" id="reply-title">Review</h5>
                                            <form  id="commentform" class="comment-form">
                                                <p class="comment-form-author">
                                                    <label for="author">Name <span class="required">*</span></label>
                                                    <input type="text" aria-required="true" size="30" value="" name="author" id="author">
                                                </p>
                                                <p class="comment-form-email">
                                                    <label for="email">Email <span class="required">*</span></label>
                                                    <input type="text" aria-required="true" size="30" value="" name="email" id="email">
                                                </p>
                                                <p class="comment-form-rating">
                                                    <label for="rating">Your Rating</label>
                                                    <span class="stars">
															<span>
																<a href="#" class="star-1">1</a>
																<a href="#" class="star-2">2</a>
																<a href="#" class="star-3">3</a>
																<a href="#" class="star-4">4</a>
																<a href="#" class="star-5">5</a>
															</span>
														</span>
                                                </p>
                                                <p class="comment-form-comment">
                                                    <label for="comment">Your Review</label>
                                                    <textarea aria-required="true" rows="5" cols="45" name="comment" id="comment"></textarea>
                                                </p>
                                                <p class="form-submit">
                                                    <input type="submit" value="Submit" class="submit" id="submit" name="submit">
                                                </p>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                    <div class="product_meta">
                        <span class="sku_wrapper">SKU: <span itemprop="sku" class="sku">73253-55</span></span>
                        <span class="posted_in">Category: <a rel="tag" href="#">Furniture</a></span>
                        <span class="tagged_as">Tags: <a rel="tag" href="#">Classic</a>,<a rel="tag" href="#">Interior</a>,<a rel="tag" href="#">Leather</a></span>
                    </div>
                    <div class="product-share">
                        <span>Share this product</span>
                        <ul>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            <li><a href="#"><i class="fa fa-envelope-o"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="relate-product">
            <h4 class="title-relate">Related Products</h4>
            <div class="products">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12 product">
                        <div class="product-innercotent">
                            <a href="#">
                                <figure><img src="images/460x467.png" alt=""></figure>
                            </a>
                            <div class="info-product">
                                <h3 class="title-product"><a href="#">Manami by takumikohgei</a></h3>
                                <span class="price-product">$103.00</span>
                                <a class="ts-viewdetail" href="#"><span class="icon icon-arrows-slim-right"></span></a>
                            </div>
                            <div class="ts-product-button">
                                <div class="yith-wcwl-add-to-wishlist">
                                    <div class="yith-wcwl-add-button show" style="display:block">
                                        <a href="#" rel="nofollow" class="add_to_wishlist">Add to Wishlist</a>
                                        <img src="#" class="ajax-loading" alt="loading" width="16" height="16" style="visibility:hidden" />
                                    </div>
                                    <div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;">
                                        <span class="feedback">Product added!</span>
                                        <a href="#">Browse Wishlist</a>
                                    </div>

                                    <div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none">
                                        <span class="feedback">The product is already in the wishlist!</span>
                                        <a href="#">Browse Wishlist</a>
                                    </div>
                                    <div style="clear:both"></div>
                                    <div class="yith-wcwl-wishlistaddresponse"></div>
                                </div>
                                <a href="#" class="button yith-wcqv-button">Quick View</a>
                                <a href="#" class="btn-add-to-cart button add_to_cart_button product_type_simple">Add to cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 product">
                        <div class="product-innercotent">
                            <a href="#">
                                <figure><img src="images/460x467.png" alt=""></figure>
                            </a>
                            <div class="info-product">
                                <h3 class="title-product"><a href="#">Manami by takumikohgei</a></h3>
                                <span class="price-product">$103.00</span>
                                <a class="ts-viewdetail" href="#"><span class="icon icon-arrows-slim-right"></span></a>
                            </div>
                            <div class="ts-product-button">
                                <div class="yith-wcwl-add-to-wishlist">
                                    <div class="yith-wcwl-add-button show" style="display:block">
                                        <a href="#" rel="nofollow" class="add_to_wishlist">Add to Wishlist</a>
                                        <img src="#" class="ajax-loading" alt="loading" width="16" height="16" style="visibility:hidden" />
                                    </div>
                                    <div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;">
                                        <span class="feedback">Product added!</span>
                                        <a href="#">Browse Wishlist</a>
                                    </div>

                                    <div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none">
                                        <span class="feedback">The product is already in the wishlist!</span>
                                        <a href="#">Browse Wishlist</a>
                                    </div>
                                    <div style="clear:both"></div>
                                    <div class="yith-wcwl-wishlistaddresponse"></div>
                                </div>
                                <a href="#" class="button yith-wcqv-button">Quick View</a>
                                <a href="#" class="btn-add-to-cart button add_to_cart_button product_type_simple">Add to cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 product">
                        <div class="product-innercotent">
                            <a href="#">
                                <figure><img src="images/460x467.png" alt=""></figure>
                            </a>
                            <div class="info-product">
                                <h3 class="title-product"><a href="#">Manami by takumikohgei</a></h3>
                                <span class="price-product">$103.00</span>
                                <a class="ts-viewdetail" href="#"><span class="icon icon-arrows-slim-right"></span></a>
                            </div>
                            <div class="ts-product-button">
                                <div class="yith-wcwl-add-to-wishlist">
                                    <div class="yith-wcwl-add-button show" style="display:block">
                                        <a href="#" rel="nofollow" class="add_to_wishlist">Add to Wishlist</a>
                                        <img src="#" class="ajax-loading" alt="loading" width="16" height="16" style="visibility:hidden" />
                                    </div>
                                    <div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;">
                                        <span class="feedback">Product added!</span>
                                        <a href="#">Browse Wishlist</a>
                                    </div>

                                    <div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none">
                                        <span class="feedback">The product is already in the wishlist!</span>
                                        <a href="#">Browse Wishlist</a>
                                    </div>
                                    <div style="clear:both"></div>
                                    <div class="yith-wcwl-wishlistaddresponse"></div>
                                </div>
                                <a href="#" class="button yith-wcqv-button">Quick View</a>
                                <a href="#" class="btn-add-to-cart button add_to_cart_button product_type_simple">Add to cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 product">
                        <div class="product-innercotent">
                            <a href="#">
                                <figure><img src="images/460x467.png" alt=""></figure>
                            </a>
                            <div class="info-product">
                                <h3 class="title-product"><a href="#">Manami by takumikohgei</a></h3>
                                <span class="price-product">$103.00</span>
                                <a class="ts-viewdetail" href="#"><span class="icon icon-arrows-slim-right"></span></a>
                            </div>
                            <div class="ts-product-button">
                                <div class="yith-wcwl-add-to-wishlist">
                                    <div class="yith-wcwl-add-button show" style="display:block">
                                        <a href="#" rel="nofollow" class="add_to_wishlist">Add to Wishlist</a>
                                        <img src="#" class="ajax-loading" alt="loading" width="16" height="16" style="visibility:hidden" />
                                    </div>
                                    <div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;">
                                        <span class="feedback">Product added!</span>
                                        <a href="#">Browse Wishlist</a>
                                    </div>

                                    <div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none">
                                        <span class="feedback">The product is already in the wishlist!</span>
                                        <a href="#">Browse Wishlist</a>
                                    </div>
                                    <div style="clear:both"></div>
                                    <div class="yith-wcwl-wishlistaddresponse"></div>
                                </div>
                                <a href="#" class="button yith-wcqv-button">Quick View</a>
                                <a href="#" class="btn-add-to-cart button add_to_cart_button product_type_simple">Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
