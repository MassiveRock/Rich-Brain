@extends('home.layout.index')

@section('comeon')
<div class="breadcumb-area overlay pos-rltv">
    <div class="bread-main">
        <div class="bred-hading text-center">
            <h5>Cart Details</h5> </div>
        <ol class="breadcrumb">
            <li class="home"><a title="Go to Home Page" href="index.html">Home</a></li>
            <li class="active">Cart</li>
        </ol>
    </div>
</div>
<!--breadcumb area end -->

<!--cart-checkout-area start -->
<div class="cart-checkout-area  pt-30">
    <div class="container">
        <div class="row">
            <div class="product-area">
                <div class="title-tab-product-category">
                    <div class="col-md-12 text-center pb-60">
                        <ul class="nav heading-style-3" role="tablist">
                            <li role="presentation" class="active shadow-box"><a href="#cart" aria-controls="cart" role="tab" data-toggle="tab"><span>01</span> Shopping cart</a></li>
                            <li role="presentation" class="shadow-box"><a href="#checkout" aria-controls="checkout" role="tab" data-toggle="tab"><span>02</span>Checkout</a></li>
                            <li role="presentation" class="shadow-box"><a href="#complete-order" aria-controls="complete-order" role="tab" data-toggle="tab"><span>03</span> complete-order</a></li>
                        </ul>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-sm-12">
                    <div class="content-tab-product-category pb-70">
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="cart">
                            <!-- cart are start-->
                            <div class="cart-page-area">
                               <form method="post" action="#">
                                           <div class="table-responsive mb-20">
                                            <table class="shop_table-2 cart table">
                                                <thead>
                                                    <tr>
                                                        <th class="product-thumbnail ">Image</th>
                                                        <th class="product-name ">Product Name</th>
                                                        <th class="product-price ">Unit Price</th>
                                                        <th class="product-quantity">Quantity</th>
                                                        <th class="product-subtotal ">Total</th>
                                                        <th class="product-remove">Remove</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="cart_item">
                                                        <td class="item-img">
                                                            <a href="#"><img src="/h/images/product/01.jpg" alt=""> </a>
                                                        </td>
                                                        <td class="item-title"> <a href="#">Fusce Laoreet Volutpat </a></td>
                                                        <td class="item-price"> $130.00 </td>
                                                        <td class="item-qty">
                                                            <div class="cart-quantity">
                                                                <div class="product-qty">
                                                                    <div class="cart-quantity">
                                                                        <div class="cart-plus-minus">
                                                                            <div class="dec qtybutton">-</div>
                                                                            <input value="1" name="qtybutton" class="cart-plus-minus-box" type="text">
                                                                            <div class="inc qtybutton">+</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="total-price"><strong> $130.00</strong></td>
                                                        <td class="remove-item"><a href="#"><i class="fa fa-trash-o"></i></a></td>
                                                    </tr>
                                                    <tr class="cart_item">
                                                        <td class="item-img">
                                                            <a href="#"><img src="/h/images/product/02.jpg" alt=""> </a>
                                                        </td>
                                                        <td class="item-title"> <a href="#">Fusce Laoreet Volutpat </a></td>
                                                        <td class="item-price"> $140.00 </td>
                                                        <td class="item-qty">
                                                            <div class="cart-quantity">
                                                                <div class="product-qty">
                                                                    <div class="cart-quantity">
                                                                        <div class="cart-plus-minus">
                                                                            <div class="dec qtybutton">-</div>
                                                                            <input value="1" name="qtybutton" class="cart-plus-minus-box" type="text">
                                                                            <div class="inc qtybutton">+</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="total-price"><strong> $140.00</strong></td>
                                                        <td class="remove-item"><a href="#"><i class="fa fa-trash-o"></i></a></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            </div>


                                            <div class="cart-bottom-area">
                                                <div class="row">
                                                    <div class="col-md-8 col-sm-7 col-xs-12">
                                                        <div class="update-coupne-area">
                                                            <div class="update-continue-btn text-right pb-20">
                                                                <a href="#" class="btn-def btn2">Update Cart</a>
                                                                <a href="#" class="btn-def btn2">Continue Shopping</a>
                                                            </div>
                                                            <div class="coupn-area">
                                                                <div class="catagory-title cat-tit-5 mb-20">
                                                                    <h3>Coupon</h3> 
                                                                    <p>Enter your coupon code if you have one.</p>
                                                                </div>                                           
                                                                    <div class="input-box input-box-2 mb-20">
                                                                        <input type="text" placeholder="Coupn" class="info" name="subject"> 
                                                                    </div>
                                                                    <a href="#" class="btn-def btn2">Apply Coupn</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-sm-5 col-xs-12">
                                                        <div class="cart-total-area">
                                                            <div class="catagory-title cat-tit-5 mb-20 text-right">
                                                                    <h3>Cart Totals</h3> 
                                                             </div>
                                                             <div class="sub-shipping">
                                                                 <p>Subtotal <span>$150.00</span></p>
                                                                 <p>Shipping <span>$3.00</span></p>
                                                             </div>
                                                             <div class="shipping-method text-right">
                                                                    <div class="shipp">
                                                                        <input type="radio" name="ship" id="pay-toggle1">
                                                                        <label for="pay-toggle1">Flat Rate</label>
                                                                    </div>
                                                                    <div class="shipp">
                                                                        <input type="radio" name="ship" id="pay-toggle3">
                                                                        <label for="pay-toggle3">Direct Bank Transfer</label>
                                                                    </div>
                                                                    <p><a href="#">Calculate Shipping</a></p>
                                                             </div>
                                                             <div class="process-cart-total">
                                                                 <p>Total <span>$150.00</span></p>
                                                             </div>
                                                             <div class="process-checkout-btn text-right">
                                                                 <a class="btn-def btn2" href="#">Process To Checkout</a>
                                                             </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                            </div>
                            <!-- cart are end-->
                        </div>
                        <div role="tabpanel" class="tab-pane  fade in " id="checkout">
                            <!-- Checkout are start-->
                            <div class="checkout-area">
                                <div class="">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <div class="coupne-customer-area mb50">
                                              <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                              <div class="panel panel-checkout">
                                                <div class="panel-heading" role="tab" id="headingTwo">
                                                  <h4 class="panel-title">
                                                  <img src="/h/images/icons/acc.jpg" alt="">
                                                   Returning customer? 
                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                       Click here to login
                                                    </a>
                                                  </h4>
                                                </div>
                                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                                  <div class="panel-body">
                                                    <div class="sm-des pb20">
                                                        If you have shopped with us before, please enter your details in the boxes below. If you are a new customer please proceed to the Billing & Shipping section.
                                                    </div>
                                                    <div class="first-last-area">
                                                        <div class="input-box mtb-20">
                                                            <label>User Name Or Email</label>
                                                            <input type="email" placeholder="Your Email" class="info" name="email">
                                                        </div>
                                                        <div class="input-box mb-20">
                                                            <label>Password</label>
                                                            <input type="password" placeholder="Password" class="info" name="padd">
                                                        </div>
                                                        <div class="frm-action cc-area">
                                                            <div class="input-box tci-box">
                                                               <a href="#" class="btn-def btn2">Login</a>
                                                            </div>
                                                            <span>
                                                        <input type="checkbox" class="remr"> Remember me 
                                                        </span>
                                                            <a class="forgotten forg" href="#">Forgotten Password</a>
                                                        </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="panel panel-checkout">
                                                <div class="panel-heading" role="tab" id="headingThree">
                                                  <h4 class="panel-title">
                                                  <img src="/h/images/icons/acc.jpg" alt="">
                                                   Have A Coupon? 
                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                       Click here to enter your code
                                                    </a>
                                                  </h4>
                                                </div>
                                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                                  <div class="panel-body coupon-body">

                                                    <div class="first-last-area">
                                                        <div class="input-box mtb-20">
                                                            <input type="text" placeholder="Coupon Code" class="info" name="code">
                                                        </div>
                                                        <div class="frm-action">
                                                            <div class="input-box tci-box">
                                                               <a href="#" class="btn-def btn2">Apply Coupon</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>  
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 col-xs-12">
                                                    <div class="billing-details">
                                                        <div class="contact-text right-side">
                                                              <h2>Billing Details</h2>
                                                    <form action="#">
                                                      <div class="row">
                                                           <div class="col-md-6 col-sm-6 col-xs-12">
                                                                <div class="input-box mb-20">
                                                                    <label>First Name <em>*</em></label>
                                                                    <input type="text" name="namm" class="info" placeholder="First Name">
                                                                </div>
                                                           </div>
                                                           <div class="col-md-6 col-sm-6 col-xs-12">
                                                            <div class="input-box mb-20">
                                                                <label>Last Name<em>*</em></label>
                                                                <input type="text" name="namm" class="info" placeholder="Last Name">
                                                            </div>
                                                            </div>
                                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                                <div class="input-box mb-20">
                                                                    <label>Company Name</label>
                                                                    <input type="text" name="cpany" class="info" placeholder="Company Name"> 
                                                                </div>
                                                            </div>

                                                       <div class="col-md-6 col-sm-6 col-xs-12">
                                                            <div class="input-box mb-20">
                                                                <label>Email Address<em>*</em></label>
                                                                <input type="email" name="email" class="info" placeholder="Your Email">
                                                            </div>
                                                            </div>
                                                             <div class="col-md-6 col-sm-6 col-xs-12">
                                                            <div class="input-box mb-20">
                                                                <label>Phone Number<em>*</em></label>
                                                                <input type="text" name="phone" class="info" placeholder="Phone Number">
                                                            </div>
                                                       </div>

                                                       <div class="col-md-12 col-sm-12 col-xs-12">
                                                        <div class="input-box mb-20">
                                                        <label>Country <em>*</em></label>
                                                            <select class="selectpicker select-custom" data-live-search="true">
                                                              <option data-tokens="Bangladesh">Bangladesh</option>
                                                              <option data-tokens="India">India</option>
                                                              <option data-tokens="Pakistan">Pakistan</option>
                                                              <option data-tokens="Pakistan">Pakistan</option>
                                                              <option data-tokens="Srilanka">Srilanka</option>
                                                              <option data-tokens="Nepal">Nepal</option>
                                                              <option data-tokens="Butan">Butan</option>
                                                              <option data-tokens="USA">USA</option>
                                                              <option data-tokens="England">England</option>
                                                              <option data-tokens="Brazil">Brazil</option>
                                                              <option data-tokens="Canada">Canada</option>
                                                              <option data-tokens="China">China</option>
                                                              <option data-tokens="Koeria">Koeria</option>
                                                              <option data-tokens="Soudi">Soudi Arabia</option>
                                                              <option data-tokens="Spain">Spain</option>
                                                              <option data-tokens="France">France</option>
                                                            </select>

                                                        </div>
                                                       </div>

                                                       <div class="col-md-12 col-sm-12 col-xs-12">
                                                        <div class="input-box mb-20">
                                                            <label>Address <em>*</em></label>
                                                            <input type="text" name="add1" class="info mb-10" placeholder="Street Address">
                                                            <input type="text" name="add2" class="info mt10" placeholder="Apartment, suite, unit etc. (optional)">
                                                        </div>
                                                        </div>
                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                            <div class="input-box mb-20">
                                                                <label>Town/City <em>*</em></label>
                                                                <input type="text" name="add1" class="info" placeholder="Town/City">
                                                            </div>
                                                        </div>

                                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                        <div class="input-box">
                                                        <label>State/Divison <em>*</em></label>
                                                            <select class="selectpicker select-custom" data-live-search="true">
                                                              <option data-tokens="Barisal">Barisal</option>
                                                              <option data-tokens="Dhaka">Dhaka</option>
                                                              <option data-tokens="Kulna">Kulna</option>
                                                              <option data-tokens="Rajshahi">Rajshahi</option>
                                                              <option data-tokens="Sylet">Sylet</option>
                                                              <option data-tokens="Chittagong">Chittagong</option>
                                                              <option data-tokens="Rangpur">Rangpur</option>
                                                              <option data-tokens="Maymanshing">Maymanshing</option>
                                                              <option data-tokens="Cox">Cox's Bazar</option>
                                                              <option data-tokens="Saint">Saint Martin</option>
                                                              <option data-tokens="Kuakata">Kuakata</option>
                                                              <option data-tokens="Sajeq">Sajeq</option>
                                                            </select>

                                                        </div>
                                                            </div>
                                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                                <div class="input-box">
                                                                    <label>Post Code/Zip Code<em>*</em></label>
                                                                    <input type="text" name="zipcode" class="info" placeholder="Zip Code">
                                                                </div>
                                                            </div>
                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                            <div class="create-acc clearfix mtb-20">
                                                                <div class="acc-toggle">
                                                                    <input type="checkbox" id="acc-toggle">
                                                                    <label for="acc-toggle">Create an Account ?</label>
                                                                </div>
                                                                <div class="create-acc-body">
                                                                   <div class="sm-des">
                                                                       Create an account by entering the information below. If you are a returning customer please login at the top of the page.
                                                                   </div>
                                                                    <div class="input-box">
                                                                        <label>Account password <em>*</em></label>
                                                                        <input type="password" name="pass" class="info" placeholder="Password">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        </div>
                                                    </form>
                                                    </div>
                                                </div>
                                                </div>
                                                <div class="col-md-6 col-xs-12">
                                                    <div class="billing-details">
                                                        <div class="right-side">
                                                            <div class="ship-acc clearfix">
                                                            <div class="ship-toggle pb20">
                                                                <input type="checkbox" id="ship-toggle">
                                                                <label for="ship-toggle">Ship to a different address?</label>
                                                            </div>
                                                            <div class="ship-acc-body">
                                                                <form action="#">
                                                                    <div class="row">
                                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                                            <div class="input-box mb-20">
                                                                                <label>First Name <em>*</em></label>
                                                                                <input type="text" name="namm" class="info" placeholder="First Name"> </div>
                                                                        </div>
                                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                                            <div class="input-box mb-20">
                                                                                <label>Last Name<em>*</em></label>
                                                                                <input type="text" name="namm" class="info" placeholder="Last Name"> </div>
                                                                        </div>
                                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                                            <div class="input-box mb-20">
                                                                                <label>Company Name</label>
                                                                                <input type="text" name="cpany" class="info" placeholder="Company Name"> </div>
                                                                        </div>
                                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                                            <div class="input-box mb-20">
                                                                                <label>Email Address<em>*</em></label>
                                                                                <input type="email" name="email" class="info" placeholder="Your Email"> </div>
                                                                        </div>
                                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                                            <div class="input-box mb-20">
                                                                                <label>Phone Number<em>*</em></label>
                                                                                <input type="text" name="phone" class="info" placeholder="Phone Number"> </div>
                                                                        </div>
                                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                                            <div class="input-box mb-20">
                                                                                <label>Country <em>*</em></label>
                                                                                <select class="selectpicker select-custom" data-live-search="true">
                                                                                    <option data-tokens="Bangladesh">Bangladesh</option>
                                                                                    <option data-tokens="India">India</option>
                                                                                    <option data-tokens="Pakistan">Pakistan</option>
                                                                                    <option data-tokens="Pakistan">Pakistan</option>
                                                                                    <option data-tokens="Srilanka">Srilanka</option>
                                                                                    <option data-tokens="Nepal">Nepal</option>
                                                                                    <option data-tokens="Butan">Butan</option>
                                                                                    <option data-tokens="USA">USA</option>
                                                                                    <option data-tokens="England">England</option>
                                                                                    <option data-tokens="Brazil">Brazil</option>
                                                                                    <option data-tokens="Canada">Canada</option>
                                                                                    <option data-tokens="China">China</option>
                                                                                    <option data-tokens="Koeria">Koeria</option>
                                                                                    <option data-tokens="Soudi">Soudi Arabia</option>
                                                                                    <option data-tokens="Spain">Spain</option>
                                                                                    <option data-tokens="France">France</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                                            <div class="input-box mb-20">
                                                                                <label>Address <em>*</em></label>
                                                                                <input type="text" name="add1" class="info mb-10" placeholder="Street Address">
                                                                                <input type="text" name="add2" class="info mt10" placeholder="Apartment, suite, unit etc. (optional)"> </div>
                                                                        </div>
                                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                                            <div class="input-box mb-20">
                                                                                <label>Town/City <em>*</em></label>
                                                                                <input type="text" name="add1" class="info" placeholder="Town/City"> </div>
                                                                        </div>
                                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                                            <div class="input-box mb-20">
                                                                                <label>State/Divison <em>*</em></label>
                                                                                <select class="selectpicker select-custom" data-live-search="true">
                                                                                    <option data-tokens="Barisal">Barisal</option>
                                                                                    <option data-tokens="Dhaka">Dhaka</option>
                                                                                    <option data-tokens="Kulna">Kulna</option>
                                                                                    <option data-tokens="Rajshahi">Rajshahi</option>
                                                                                    <option data-tokens="Sylet">Sylet</option>
                                                                                    <option data-tokens="Chittagong">Chittagong</option>
                                                                                    <option data-tokens="Rangpur">Rangpur</option>
                                                                                    <option data-tokens="Maymanshing">Maymanshing</option>
                                                                                    <option data-tokens="Cox">Cox's Bazar</option>
                                                                                    <option data-tokens="Saint">Saint Martin</option>
                                                                                    <option data-tokens="Kuakata">Kuakata</option>
                                                                                    <option data-tokens="Sajeq">Sajeq</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                                            <div class="input-box mb-20">
                                                                                <label>Post Code/Zip Code<em>*</em></label>
                                                                                <input type="text" name="zipcode" class="info" placeholder="Zip Code"> </div>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                            </div>
                                                        <div class="form">
                                                            <div class="input-box">
                                                                <label>Order Notes</label>
                                                                <textarea placeholder="Notes about your order, e.g. special notes for delivery." class="area-tex"></textarea>
                                                            </div>
                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Checkout are end-->
                        </div>
                        <div role="tabpanel" class="tab-pane  fade in" id="complete-order">
                            <div class="row">
                                <div class="col-xs-12">
                                <div class="checkout-payment-area">
                                    <div class="checkout-total mt20">
                                       <h3>Your order</h3>
                                   <form action="#" method="post">
                                   <div class="table-responsive">
                                        <table class="checkout-area table">
                                       <thead>
                                        <tr class="cart_item check-heading">
                                            <td class="ctg-type"> Product</td>
                                            <td class="cgt-des"> Total</td>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="cart_item check-item prd-name">
                                                <td class="ctg-type"> Aenean sagittis × <span>1</span></td>
                                                <td class="cgt-des"> $1,026.00</td>
                                            </tr>
                                            <tr class="cart_item check-item prd-name">
                                                <td class="ctg-type"> Aenean sagittis × <span>1</span></td>
                                                <td class="cgt-des"> $1,026.00</td>
                                            </tr>
                                            <tr class="cart_item">
                                                <td class="ctg-type"> Subtotal</td>
                                                <td class="cgt-des">$2,052.00</td>
                                            </tr>
                                            <tr class="cart_item">
                                                <td class="ctg-type">Shipping</td>
                                                    <td class="cgt-des ship-opt">
                                                        <div class="shipp">
                                                            <input type="radio" id="pay-toggle" name="ship">
                                                            <label for="pay-toggle">Flat Rate: <span>$03</span></label>
                                                        </div>
                                                        <div class="shipp">
                                                            <input type="radio" id="pay-toggle2" name="ship">
                                                            <label for="pay-toggle2">Free Shipping</label>
                                                        </div>
                                                 </td>
                                            </tr>
                                            <tr class="cart_item">
                                                <td class="ctg-type crt-total"> Total</td>
                                                <td class="cgt-des prc-total"> $ 2,055.00 </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                   </div>
                                </form>
                                </div>
                                    <div class="payment-section mt-20 clearfix">
                                        <div class="pay-toggle">
                                            <form action="#">
                                               <div class="pay-type-total">
                                                <div class="pay-type">
                                                    <input type="radio" id="pay-toggle01" name="pay">
                                                    <label for="pay-toggle01">Direct Bank Transfer</label>
                                                </div>
                                                <div class="pay-type">
                                                    <input type="radio" id="pay-toggle02" name="pay">
                                                    <label for="pay-toggle02">Cheque Payment</label>
                                                </div>
                                                <div class="pay-type">
                                                    <input type="radio" id="pay-toggle03" name="pay">
                                                    <label for="pay-toggle03">Cash on Delivery</label>
                                                </div>
                                                <div class="pay-type">
                                                    <input type="radio" id="pay-toggle04" name="pay">
                                                    <label for="pay-toggle04">Paypal</label>
                                                </div>
                                                </div>
                                                <div class="input-box mt-20">
                                                    <a class="btn-def btn2" href="#">Place order</a>
                                                </div>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>    

@endsection