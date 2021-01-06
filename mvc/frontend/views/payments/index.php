<?php
require_once 'helpers/Helper.php';
?>
<section class="page-banner">
    <h2 class="page-title">Checkout</h2>
</section>
<section id="main-container" class="main-container">
    <div class="section-checkout container ">
        <div class="row">
            <div class="col-md-6">
                <div class="nr-checkout-login">
                    <?php if (isset($_SESSION['user'])): ?>
                        <div class="woocommerce-info">Hello <?php echo $username ?></div>
                    <?php endif; ?>
                    <?php if (!isset($_SESSION['user'])): ?>
                        <div class="woocommerce-info">Returning customer? <a href="index.php?controller=user&action=login" class="showlogin">Click here to login</a></div>
                    <?php endif; ?>
                    <form method="post" class="login" style="display:none" >
                        <p>If you have shopped with us before, please enter your details in the boxes below. If you are a new customer please proceed to the Billing &amp; Shipping section.</p>
                        <p class="form-row form-row-first">
                            <label for="username">Username or email <span class="required">*</span></label>
                            <input type="text" class="input-text" name="username" id="username">
                        </p>
                        <p class="form-row form-row-last">
                            <label for="password">Password <span class="required">*</span></label>
                            <input class="input-text" type="password" name="password" id="password">
                        </p>
                        <div class="clear"></div>
                        <p class="form-row">
                            <input type="hidden" id="_wpnonce"  value="a6ce0f59f0">
                            <input type="hidden"  value="/checkout/">
                            <input type="submit" class="button"  value="Login">
                            <input type="hidden" name="redirect" value="">
                            <label  class="inline">
                                <input type="checkbox" id="rememberme" value="forever"> Remember me
                            </label>
                        </p>
                        <p class="lost_password">
                            <a href="">Lost your password?</a>
                        </p>
                        <div class="clear"></div>
                    </form>
                </div>
                <!-- nr-checkout-login -->
            </div>
            <!--  -->
            <div class="col-md-6">
                <div class="nr-coupon-checkout">
                    <div class="woocommerce-info">Have a coupon? <a href="#" class="showcoupon">Click here to enter your code</a></div>
                    <form class="checkout_coupon" method="post" style="display:none">
                        <p class="form-row form-row-first">
                            <input type="text"  class="input-text" placeholder="Coupon code" id="coupon_code" value="">
                        </p>
                        <p class="form-row form-row-last">
                            <input type="submit" class="button"  value="Apply Coupon">
                        </p>
                        <div class="clear"></div>
                    </form>
                </div>
                <!-- nr-coupon-checkout -->
            </div>
            <!--  -->
        </div>
        <div class="row">

            <div class="entry-content content-page">
                <div class="woocommerce">
                    <form name="checkout" method="post" class="checkout wc-checkout"  enctype="">
                        <div class="col-md-8" id="customer_details">
                            <div class="col-1">
                                <div class="nr-billing-fields">
                                    <h3>Billing Details</h3>
                                    <p class=" form-row form-row-first " id="billing_first_name_field">
                                        <label  class="">First Name <abbr class="required" >*</abbr></label>
                                        <input type="text" class="input-text "    placeholder="" value="">
                                    </p>
                                    <p class=" form-row form-row-last " id="billing_last_name_field">
                                        <label  class="">Last Name <abbr class="required" >*</abbr></label>
                                        <input type="text" class="input-text "   id="billing_last_name" placeholder="" value="">
                                    </p>
                                    <div class="clear"></div>
                                    <p class=" form-row form-row-wide" id="billing_company_field">
                                        <label  class="">Company Name</label>
                                        <input type="text" class="input-text "  id="billing_company" placeholder="" value="">
                                    </p>
                                    <p class=" form-row form-row-first  validate-email" id="billing_email_field">
                                        <label  class="">Email Address <abbr class="required" >*</abbr></label>
                                        <input type="text" class="input-text "  id="billing_email" placeholder="" value="">
                                    </p>
                                    <p class=" form-row form-row-last  validate-phone" id="billing_phone_field">
                                        <label  class="">Phone <abbr class="required" >*</abbr></label>
                                        <input type="text" class="input-text "  id="billing_phone" placeholder="" value="">
                                    </p>
                                    <div class="clear"></div>
                                    <p class=" form-row form-row-wide address-field update_totals_on_change  " id="billing_country_field">
                                        <label  class="">Country <abbr class="required" >*</abbr></label>
                                    <div class="variations">
                                        <div class="value">
                                            <select id="color" name="attribute_color">
                                                <option value="">United Kingdom(UK)</option>
                                                <option value="AX">Åland Islands</option>
                                                <option value="AF">Afghanistan</option>
                                                <option value="AL">Albania</option>
                                                <option value="DZ">Algeria</option>
                                                <option value="AD">Andorra</option>
                                                <option value="AO">Angola</option>
                                                <option value="AI">Anguilla</option>
                                                <option value="AQ">Antarctica</option>
                                                <option value="AG">Antigua and Barbuda</option>
                                                <option value="AR">Argentina</option>
                                                <option value="AM">Armenia</option>
                                                <option value="AW">Aruba</option>
                                                <option value="AU">Australia</option>
                                                <option value="AT">Austria</option>
                                                <option value="AZ">Azerbaijan</option>
                                                <option value="BS">Bahamas</option>
                                                <option value="BH">Bahrain</option>
                                                <option value="BD">Bangladesh</option>
                                                <option value="BB">Barbados</option>
                                                <option value="BY">Belarus</option>
                                                <option value="PW">Belau</option>
                                                <option value="BE">Belgium</option>
                                                <option value="BZ">Belize</option>
                                                <option value="BJ">Benin</option>
                                                <option value="BM">Bermuda</option>
                                                <option value="BT">Bhutan</option>
                                                <option value="BO">Bolivia</option>
                                                <option value="BQ">Bonaire, Saint Eustatius and Saba</option>
                                                <option value="BA">Bosnia and Herzegovina</option>
                                                <option value="BW">Botswana</option>
                                                <option value="BV">Bouvet Island</option>
                                                <option value="BR">Brazil</option>
                                                <option value="IO">British Indian Ocean Territory</option>
                                                <option value="VG">British Virgin Islands</option>
                                                <option value="BN">Brunei</option>
                                                <option value="BG">Bulgaria</option>
                                                <option value="BF">Burkina Faso</option>
                                                <option value="BI">Burundi</option>
                                                <option value="KH">Cambodia</option>
                                                <option value="CM">Cameroon</option>
                                                <option value="CA">Canada</option>
                                                <option value="CV">Cape Verde</option>
                                                <option value="KY">Cayman Islands</option>
                                                <option value="CF">Central African Republic</option>
                                                <option value="TD">Chad</option>
                                                <option value="CL">Chile</option>
                                                <option value="CN">China</option>
                                                <option value="CX">Christmas Island</option>
                                                <option value="CC">Cocos (Keeling) Islands</option>
                                                <option value="CO">Colombia</option>
                                                <option value="KM">Comoros</option>
                                                <option value="CG">Congo (Brazzaville)</option>
                                                <option value="CD">Congo (Kinshasa)</option>
                                                <option value="CK">Cook Islands</option>
                                                <option value="CR">Costa Rica</option>
                                                <option value="HR">Croatia</option>
                                                <option value="CU">Cuba</option>
                                                <option value="CW">CuraÇao</option>
                                                <option value="CY">Cyprus</option>
                                                <option value="CZ">Czech Republic</option>
                                                <option value="DK">Denmark</option>
                                                <option value="DJ">Djibouti</option>
                                                <option value="DM">Dominica</option>
                                                <option value="DO">Dominican Republic</option>
                                                <option value="EC">Ecuador</option>
                                                <option value="EG">Egypt</option>
                                                <option value="SV">El Salvador</option>
                                                <option value="GQ">Equatorial Guinea</option>
                                                <option value="ER">Eritrea</option>
                                                <option value="EE">Estonia</option>
                                                <option value="ET">Ethiopia</option>
                                                <option value="FK">Falkland Islands</option>
                                                <option value="FO">Faroe Islands</option>
                                                <option value="FJ">Fiji</option>
                                                <option value="FI">Finland</option>
                                                <option value="FR">France</option>
                                                <option value="GF">French Guiana</option>
                                                <option value="PF">French Polynesia</option>
                                                <option value="TF">French Southern Territories</option>
                                                <option value="GA">Gabon</option>
                                                <option value="GM">Gambia</option>
                                                <option value="GE">Georgia</option>
                                                <option value="DE">Germany</option>
                                                <option value="GH">Ghana</option>
                                                <option value="GI">Gibraltar</option>
                                                <option value="GR">Greece</option>
                                                <option value="GL">Greenland</option>
                                                <option value="GD">Grenada</option>
                                                <option value="GP">Guadeloupe</option>
                                                <option value="GT">Guatemala</option>
                                                <option value="GG">Guernsey</option>
                                                <option value="GN">Guinea</option>
                                                <option value="GW">Guinea-Bissau</option>
                                                <option value="GY">Guyana</option>
                                                <option value="HT">Haiti</option>
                                                <option value="HM">Heard Island and McDonald Islands</option>
                                                <option value="HN">Honduras</option>
                                                <option value="HK">Hong Kong</option>
                                                <option value="HU">Hungary</option>
                                                <option value="IS">Iceland</option>
                                                <option value="IN">India</option>
                                                <option value="ID">Indonesia</option>
                                                <option value="IR">Iran</option>
                                                <option value="IQ">Iraq</option>
                                                <option value="IM">Isle of Man</option>
                                                <option value="IL">Israel</option>
                                                <option value="IT">Italy</option>
                                                <option value="CI">Ivory Coast</option>
                                                <option value="JM">Jamaica</option>
                                                <option value="JP">Japan</option>
                                                <option value="JE">Jersey</option>
                                                <option value="JO">Jordan</option>
                                                <option value="KZ">Kazakhstan</option>
                                                <option value="KE">Kenya</option>
                                                <option value="KI">Kiribati</option>
                                                <option value="KW">Kuwait</option>
                                                <option value="KG">Kyrgyzstan</option>
                                                <option value="LA">Laos</option>
                                                <option value="LV">Latvia</option>
                                                <option value="LB">Lebanon</option>
                                                <option value="LS">Lesotho</option>
                                                <option value="LR">Liberia</option>
                                                <option value="LY">Libya</option>
                                                <option value="LI">Liechtenstein</option>
                                                <option value="LT">Lithuania</option>
                                                <option value="LU">Luxembourg</option>
                                                <option value="MO">Macao S.A.R., China</option>
                                                <option value="MK">Macedonia</option>
                                                <option value="MG">Madagascar</option>
                                                <option value="MW">Malawi</option>
                                                <option value="MY">Malaysia</option>
                                                <option value="MV">Maldives</option>
                                                <option value="ML">Mali</option>
                                                <option value="MT">Malta</option>
                                                <option value="MH">Marshall Islands</option>
                                                <option value="MQ">Martinique</option>
                                                <option value="MR">Mauritania</option>
                                                <option value="MU">Mauritius</option>
                                                <option value="YT">Mayotte</option>
                                                <option value="MX">Mexico</option>
                                                <option value="FM">Micronesia</option>
                                                <option value="MD">Moldova</option>
                                                <option value="MC">Monaco</option>
                                                <option value="MN">Mongolia</option>
                                                <option value="ME">Montenegro</option>
                                                <option value="MS">Montserrat</option>
                                                <option value="MA">Morocco</option>
                                                <option value="MZ">Mozambique</option>
                                                <option value="MM">Myanmar</option>
                                                <option value="NA">Namibia</option>
                                                <option value="NR">Nauru</option>
                                                <option value="NP">Nepal</option>
                                                <option value="NL">Netherlands</option>
                                                <option value="AN">Netherlands Antilles</option>
                                                <option value="NC">New Caledonia</option>
                                                <option value="NZ">New Zealand</option>
                                                <option value="NI">Nicaragua</option>
                                                <option value="NE">Niger</option>
                                                <option value="NG">Nigeria</option>
                                                <option value="NU">Niue</option>
                                                <option value="NF">Norfolk Island</option>
                                                <option value="KP">North Korea</option>
                                                <option value="NO">Norway</option>
                                                <option value="OM">Oman</option>
                                                <option value="PK">Pakistan</option>
                                                <option value="PS">Palestinian Territory</option>
                                                <option value="PA">Panama</option>
                                                <option value="PG">Papua New Guinea</option>
                                                <option value="PY">Paraguay</option>
                                                <option value="PE">Peru</option>
                                                <option value="PH">Philippines</option>
                                                <option value="PN">Pitcairn</option>
                                                <option value="PL">Poland</option>
                                                <option value="PT">Portugal</option>
                                                <option value="QA">Qatar</option>
                                                <option value="IE">Republic of Ireland</option>
                                                <option value="RE">Reunion</option>
                                                <option value="RO">Romania</option>
                                                <option value="RU">Russia</option>
                                                <option value="RW">Rwanda</option>
                                                <option value="ST">São Tomé and Príncipe</option>
                                                <option value="BL">Saint Barthélemy</option>
                                                <option value="SH">Saint Helena</option>
                                                <option value="KN">Saint Kitts and Nevis</option>
                                                <option value="LC">Saint Lucia</option>
                                                <option value="SX">Saint Martin (Dutch part)</option>
                                                <option value="MF">Saint Martin (French part)</option>
                                                <option value="PM">Saint Pierre and Miquelon</option>
                                                <option value="VC">Saint Vincent and the Grenadines</option>
                                                <option value="SM">San Marino</option>
                                                <option value="SA">Saudi Arabia</option>
                                                <option value="SN">Senegal</option>
                                                <option value="RS">Serbia</option>
                                                <option value="SC">Seychelles</option>
                                                <option value="SL">Sierra Leone</option>
                                                <option value="SG">Singapore</option>
                                                <option value="SK">Slovakia</option>
                                                <option value="SI">Slovenia</option>
                                                <option value="SB">Solomon Islands</option>
                                                <option value="SO">Somalia</option>
                                                <option value="ZA">South Africa</option>
                                                <option value="GS">South Georgia/Sandwich Islands</option>
                                                <option value="KR">South Korea</option>
                                                <option value="SS">South Sudan</option>
                                                <option value="ES">Spain</option>
                                                <option value="LK">Sri Lanka</option>
                                                <option value="SD">Sudan</option>
                                                <option value="SR">Suriname</option>
                                                <option value="SJ">Svalbard and Jan Mayen</option>
                                                <option value="SZ">Swaziland</option>
                                                <option value="SE">Sweden</option>
                                                <option value="CH">Switzerland</option>
                                                <option value="SY">Syria</option>
                                                <option value="TW">Taiwan</option>
                                                <option value="TJ">Tajikistan</option>
                                                <option value="TZ">Tanzania</option>
                                                <option value="TH">Thailand</option>
                                                <option value="TL">Timor-Leste</option>
                                                <option value="TG">Togo</option>
                                                <option value="TK">Tokelau</option>
                                                <option value="TO">Tonga</option>
                                                <option value="TT">Trinidad and Tobago</option>
                                                <option value="TN">Tunisia</option>
                                                <option value="TR">Turkey</option>
                                                <option value="TM">Turkmenistan</option>
                                                <option value="TC">Turks and Caicos Islands</option>
                                                <option value="TV">Tuvalu</option>
                                                <option value="UG">Uganda</option>
                                                <option value="UA">Ukraine</option>
                                                <option value="AE">United Arab Emirates</option>
                                                <option value="GB">United Kingdom (UK)</option>
                                                <option value="US">United States (US)</option>
                                                <option value="UY">Uruguay</option>
                                                <option value="UZ">Uzbekistan</option>
                                                <option value="VU">Vanuatu</option>
                                                <option value="VA">Vatican</option>
                                                <option value="VE">Venezuela</option>
                                                <option value="VN" selected="selected">Vietnam</option>
                                                <option value="WF">Wallis and Futuna</option>
                                                <option value="EH">Western Sahara</option>
                                                <option value="WS">Western Samoa</option>
                                                <option value="YE">Yemen</option>
                                                <option value="ZM">Zambia</option>
                                                <option value="ZW">Zimbabwe</option>
                                            </select>
                                        </div>
                                    </div>

                                    </p>
                                    <p class=" form-row form-row-wide address-field " id="billing_address_1_field">
                                        <label  class="">Address <abbr class="required" >*</abbr></label>
                                        <input type="text" class="input-text "  id="billing_address_1" placeholder="Street address" value=""></p>

                                    <p class=" form-row form-row-wide address-field" id="billing_address_2_field" style="display: none;"><input type="text" class="input-text "  id="billing_address_2" placeholder="Apartment, suite, unit etc. (optional)" value=""></p>

                                    <p class=" form-row address-field validate-postcode form-row-first" id="billing_postcode_field" >
                                        <label class="">Postcode / Zip</label>
                                        <input type="text" class="input-text "  id="billing_postcode" placeholder="Postcode / Zip" value=""></p>

                                    <p class=" form-row address-field  form-row-last" id="billing_city_field" >
                                        <label  class="">Town / City <abbr class="required" >*</abbr></label>
                                        <input type="text" class="input-text "  id="billing_city" placeholder="Town / City" value=""></p>

                                    <p class=" form-row address-field validate-state form-row-first" id="billing_state_field" style="display: none" >
                                        <label  class="">State / County</label>
                                        <input type="hidden" class="hidden"  id="billing_state" value="" placeholder=""></p>

                                    <div class="clear"></div>
                                    <p class="form-row form-row-wide create-account">
                                        <input class="input-checkbox" id="createaccount" type="checkbox"  value="1">
                                        <label  class="checkbox inline">Create an account?</label>
                                    </p>
                                    <div class="create-account" style="display: none;">
                                        <p>Create an account by entering the information below. If you are a returning customer please login at the top of the page.</p>
                                        <p class=" form-row " id="account_password_field">
                                            <label  class="">Account password <abbr class="required" >*</abbr></label>
                                            <input type="password" class="input-text " name="account_password" id="account_password" placeholder="Password" value=""></p>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="nr-shipping-fields">
                                    <h3>Additional Information</h3>
                                    <p class=" form-row notes" id="order_comments_field">
                                        <label  class="">Order Notes</label>
                                        <textarea name="order_comments" class="input-text " id="order_comments" placeholder="Notes about your order, e.g. special notes for delivery." rows="2" cols="5"></textarea>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 ">
                            <div class="nr-order-review">
                                <h3 id="order_review_heading">Your order</h3>
                                <div id="order_review" class="woocommerce-checkout-review-order">
                                    <table class="shop_table woocommerce-checkout-review-order-table">
                                        <thead>
                                        <tr>
                                            <th class="product-name">Product</th>
                                            <th class="product-total">Total</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr class="cart_item">
                                            <td class="product-name">
                                                Bailey sailen chair mumbo
                                                <strong class="product-quantity">× 1</strong>
                                            </td>
                                            <td class="product-total">
                                                <span class="amount">$299.99</span>
                                            </td>
                                        </tr>
                                        <tr class="cart_item">
                                            <td class="product-name">
                                                Bailey sailen chair mumbo
                                                <strong class="product-quantity">× 1</strong>
                                            </td>
                                            <td class="product-total">
                                                <span class="amount">$299.99</span>
                                            </td>
                                        </tr>
                                        </tbody>
                                        <tfoot>
                                        <tr class="cart-subtotal">
                                            <th>Subtotal</th>
                                            <td><span class="amount">$299.99</span></td>
                                        </tr>


                                        <tr class="order-total">
                                            <th>Total</th>
                                            <td><strong><span class="amount">$299.99</span></strong> </td>
                                        </tr>
                                        </tfoot>
                                    </table>
                                    <div id="payment" class="nr-checkout-payment">
                                        <ul class="payment_methods methods">
                                            <li class="payment_method_cheque">
                                                <input id="payment_method_cheque" type="radio" class="input-radio"  value="cheque"  checked="checked">
                                                <label class="inline"> Cash on delivery </label>
                                                <div class="payment_box payment_method_cheque">
                                                    <p>Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                                </div>
                                            </li>
                                            <li class="payment_method_paypal">
                                                <input id="payment_method_paypal" type="radio" class="input-radio"  value="paypal" >
                                                <label class="inline" >
                                                    PayPal <img src="assets/images/paypal.png" alt=""><a href="" class="about_paypal"  title="What is PayPal?">What is PayPal?</a>
                                                </label>
                                            </li>
                                        </ul>
                                        <div class="nr-accept">
                                            <input class="input-checkbox"  type="checkbox" name="createaccount" value="1">
                                            <label  class="checkbox inline">I’ve read and accept the <span>terms & conditions</span> </label>
                                        </div>

                                        <div class="form-row place-order">
                                            <input type="submit" class="button alt"  id="place_order" value="Place order" data-value="Place order">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.ts-order-review -->
                    </form>
                </div>
            </div>


        </div>
    </div>

</section>