<?php
//views/homes/index.php
require_once 'helpers/Helper.php';
?>
<!--    PRODUCT-->
<section id="main-container" class="main-container">
        <div class="section-about wow fadeInUp" data-wow-delay="0.4s">
            <?php if (!empty($movies)): ?>
                <?php foreach ($movies as $movie): ?>
                    <div class="left-section ts-slide-product">
                        <div class="item-slide">
                            <figure>
                                <?php if (!empty($movie['image'])): ?>
                                    <img src="../backend/assets/posters/<?php echo $movie['image'] ?>" alt=""/>
                                <?php endif; ?>
                            </figure>
                            <div class="info-product">
                                <h4>
                                    <a href="index.php?controller=movie&action=detail&id=2">Converse Chuck Taylor All Star VLTG Chevron</a>
                                </h4>
                                <span class="price-product">
                                    <?php echo number_format($movie['price']) ?>
                                </span>
                                <a href="#" class="ts-viewdetail"><span class="icon icon-arrows-slim-right"></span></a>
                            </div>
                        </div>
                        <div class="item-slide">
                            <figure>
                                <?php if (!empty($movie['image'])): ?>
                                    <img src="../backend/assets/posters/<?php echo $movie['image'] ?>" alt=""/>
                                <?php endif; ?>
                            </figure>
                            <div class="info-product">
                                <h4>
                                    <a href="index.php?controller=movie&action=detail&id=7"><?php echo $movie['title'] ?></a>
                                </h4>
                                <span class="price-product">
                                    <?php echo number_format($movie['price']) ?>
                                </span>
                                <a href="#" class="ts-viewdetail"><span class="icon icon-arrows-slim-right"></span></a>
                            </div>
                        </div>
                        <div class="item-slide">
                            <figure>
                                <?php if (!empty($movie['image'])): ?>
                                    <img src="../backend/assets/posters/<?php echo $movie['image'] ?>" alt=""/>
                                <?php endif; ?>
                            </figure>
                            <div class="info-product">
                                <h4>
                                    <a href="index.php?controller=movie&action=detail&id=8"><?php echo $movie['title'] ?></a>
                                </h4>
                                <span class="price-product">
                                    <?php echo number_format($movie['price']) ?>
                                </span>
                                <a href="#" class="ts-viewdetail"><span class="icon icon-arrows-slim-right"></span></a>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            <?php endif; ?>

            <div class="right-section">
                <div class="about-text">
                    <div class="text-aboutcontent">
                        <h2>Hello. we are <strong>north store</strong> improvements with bricks-and-clicks growth <strong>strategies chains.</strong></h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="ts-shortcode-category">
            <div class="product-column1 width50">
                <div class="row-one">
                    <div class="width50 product-item wow fadeInUp animated" data-wow-duration="1s" data-wow-delay="1s">
                        <div class="product-innercotent">
                            <a href="#">
                                <figure><img src="assets/images/460x467.png" alt=""></figure>
                            </a>
                            <div class="info-product">
                                <h3 class="title-product"><a href="#">Manami by takumikohgei</a></h3>
                                <span class="price-product">$103.00</span>
                                <a class="ts-viewdetail" href="#"><span class="icon icon-arrows-slim-right"></span></a>
                            </div>
                            <div class="ts-product-button">
                                <div class="yith-wcwl-add-to-wishlist">
                                    <div class="yith-wcwl-add-button hide" style="display:block">
                                        <a href="#" rel="nofollow" class="add_to_wishlist">Add to Wishlist</a>
                                        <img src="" class="ajax-loading" alt="loading" width="16" height="16" style="visibility:hidden" />
                                    </div>
                                    <div class="yith-wcwl-wishlistaddedbrowse show" style="display:none;">
                                        <span class="feedback">Product added!</span>
                                        <a href="">Browse Wishlist</a>
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
                    <div class="width50 product-item wow fadeInUp animated" data-wow-duration="0.8s" data-wow-delay="0.8s">
                        <div class="product-innercotent">
                            <a href="#">
                                <figure><img src="assets/images/460x467.png" alt=""></figure>
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
                                        <img src="" class="ajax-loading" alt="loading" width="16" height="16" style="visibility:hidden" />
                                    </div>
                                    <div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;">
                                        <span class="feedback">Product added!</span>
                                        <a href="">Browse Wishlist</a>
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
                                <!-- <a class="added_to_cart wc-forward" title="View Cart" href="http://every.themestudio.net/cart/">View Cart</a> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row-two">
                    <div class="width50 product-catinfo">
                        <div class="inforcat">
                            <span class="icon-cat"><img src="assets/images/char.svg" alt=""></span>
                            <h4><a href="#">Furniture design</a></h4>
                            <p>Monotonectally recaptiualize leading-edge</p>
                        </div>
                    </div>
                    <div class="width50 product-item wow fadeInUp" data-wow-delay="0.6s">
                        <div class="product-innercotent">
                            <a href="#">
                                <figure><img src="assets/images/460x467.png" alt=""></figure>
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
                                        <img src="" class="ajax-loading" alt="loading" width="16" height="16" style="visibility:hidden" />
                                    </div>
                                    <div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;">
                                        <span class="feedback">Product added!</span>
                                        <a href="">Browse Wishlist</a>
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
            <div class="product-column2 width50">
                <div class="product-item">
                    <div class="product-innercotent wow fadeInUp animated"  data-wow-duration="0.4s" data-wow-delay="0.4s">
                        <a href="#">
                            <figure><img src="assets/images/920x933.png" alt=""></figure>
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
                                    <img src="" class="ajax-loading" alt="loading" width="16" height="16" style="visibility:hidden" />
                                </div>
                                <div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;">
                                    <span class="feedback">Product added!</span>
                                    <a href="">Browse Wishlist</a>
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
        <div class="ts-shortcode-category cat-right">
            <div class="product-column1 width50">
                <div class="row-one">
                    <div class="width50 product-item wow fadeInUp" data-wow-delay="0.6s">
                        <div class="product-innercotent">
                            <a href="#">
                                <figure><img src="assets/images/460x467.png" alt=""></figure>
                            </a>
                            <div class="info-product">
                                <h3 class="title-product"><a href="#">Manami by takumikohgei</a></h3>
                                <span class="price-product">$103.00</span>
                                <a class="ts-viewdetail" href="#"><span class="icon icon-arrows-slim-right"></span></a>
                            </div>
                            <div class="ts-product-button">
                                <div class="yith-wcwl-add-to-wishlist">
                                    <div class="yith-wcwl-add-button hide" style="display:block">
                                        <a href="#" rel="nofollow" class="add_to_wishlist">Add to Wishlist</a>
                                        <img src="" class="ajax-loading" alt="loading" width="16" height="16" style="visibility:hidden" />
                                    </div>
                                    <div class="yith-wcwl-wishlistaddedbrowse show" style="display:none;">
                                        <span class="feedback">Product added!</span>
                                        <a href="">Browse Wishlist</a>
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
                    <div class="width50 product-item wow fadeInUp" data-wow-delay="1s">
                        <div class="product-innercotent">
                            <a href="#">
                                <figure><img src="assets/images/460x467.png" alt=""></figure>
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
                                        <img src="" class="ajax-loading" alt="loading" width="16" height="16" style="visibility:hidden" />
                                    </div>
                                    <div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;">
                                        <span class="feedback">Product added!</span>
                                        <a href="">Browse Wishlist</a>
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
                <div class="row-two">
                    <div class="width50 product-catinfo">
                        <div class="inforcat">
                            <span class="icon-cat"><img src="assets/images/bag.svg" alt=""></span>
                            <h4><a href="#">Bags &amp; Backpacks</a></h4>
                            <p>Discover even more...</p>
                        </div>
                    </div>
                    <div class="width50 product-item wow fadeInUp" data-wow-delay="0.8s">
                        <div class="product-innercotent">
                            <a href="#">
                                <figure><img src="assets/images/460x467.png" alt=""></figure>
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
                                        <img src="" class="ajax-loading" alt="loading" width="16" height="16" style="visibility:hidden" />
                                    </div>
                                    <div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;">
                                        <span class="feedback">Product added!</span>
                                        <a href="">Browse Wishlist</a>
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
            <div class="product-column2 width50">
                <div class="product-item">
                    <div class="product-innercotent">
                        <a href="#">
                            <figure><img src="assets/images/920x933.png" alt=""></figure>
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
                                    <img src="" class="ajax-loading" alt="loading" width="16" height="16" style="visibility:hidden" />
                                </div>
                                <div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;">
                                    <span class="feedback">Product added!</span>
                                    <a href="">Browse Wishlist</a>
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
        <div class="section-feature">
            <div class="row">
                <div class="col-sm-4">
                    <div class="ts-feature feature-icon wow fadeInUp" data-wow-delay="0.4s">
                        <figure><img src="assets/images/594x382.png" alt=""></figure>
                        <div class="info-feature">
                            <span class="icon icon-basic-sheet-pen"></span>
                            <h4>Blog &amp; Ideas</h4>
                            <p>Discover even more...</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="ts-feature feature-newsletter wow fadeInUp" data-wow-delay="0.4s">
                        <figure><img src="assets/images/594x382.png" alt=""></figure>
                        <div class="info-feature">
                            <form  class="form-newsletter">
                                <input type="text" placeholder="Your email address...">
                                <span><button class="button_newletter">Submit</button></span>
                            </form>
                            <h4>Get 10% off</h4>
                            <p>by subscribing to our newsletter</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="ts-feature feature-icon wow fadeInUp" data-wow-delay="0.4s">
                        <figure><img src="assets/images/594x382.png" alt=""></figure>
                        <div class="info-feature">
                            <span class="icon icon-basic-question"></span>
                            <h4>Faqs</h4>
                            <p>Discover even more...</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>