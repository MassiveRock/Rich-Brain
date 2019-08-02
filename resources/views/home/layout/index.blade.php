
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>阿迪达斯官方商城</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="/h/images/icons/favicon.ico">
    <link rel="icon" href="/h/images/icons/logo.ico" type="image/x-icon">
    <!-- Place favicon.ico in the root directory -->

    <!-- All css files are included here. -->
    <!-- Bootstrap fremwork main css -->
    <link rel="stylesheet" href="/h/css/bootstrap.min.css">
    <!-- This core.css file contents all plugings css file. -->
    <link rel="stylesheet" href="/h/css/core.css">
    <!-- Theme shortcodes/elements style -->
    <link rel="stylesheet" href="/h/css/shortcode/shortcodes.css">
    <!-- Theme main style -->
    <link rel="stylesheet" href="/h/style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="/h/css/responsive.css">
    <!-- User style -->
    <link rel="stylesheet" href="/h/css/custom.css">  <link rel="stylesheet" href="/h/css/color/skin-default.css">

    
    <!-- Modernizr JS -->
    <script src="/h/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->  

    <!-- Body main wrapper start -->
    <div class="wrapper home-one">
       
        <!-- Start of header area -->
        <header class="header-area header-wrapper">
            <div class="header-top-bar black-bg clearfix">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-3 col-xs-6">
                            <div class="login-register-area">
                                <ul>
                                    <li><a href="/home/login">登录</a></li>
                                    <li><a href="#">注册</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 hidden-xs">
                            <div class="social-search-area text-center">
                                <div class="social-icon socile-icon-style-2">
                                    <ul>
                                        <li><a href="#" title="facebook"><i class="fa fa-facebook"></i></a> </li>
                                        <li><a href="#" title="twitter"><i class="fa fa-twitter"></i></a> </li>
                                        <li> <a href="#" title="dribble"><i class="fa fa-dribbble"></i></a></li>
                                        <li> <a href="#" title="behance"><i class="fa fa-behance"></i></a> </li>
                                        <li> <a href="#" title="rss"><i class="fa fa-rss"></i></a> </li>
                                    </ul>
                                 </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-6">
                            <div class="cart-currency-area login-register-area text-right">
                                <ul>
                                    <li>
                                        <div class="header-currency">
                                            <select>
                                                <option value="1">USD</option>
                                                <option value="2">Pound</option>
                                                <option value="3">Euro</option>
                                                <option value="4">Dinar</option>
                                            </select>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="header-cart">
                                            <div class="cart-icon"> <a href="/home/cart">Cart<i class="zmdi zmdi-shopping-cart"></i></a> <span>2</span> </div>
                                            <div class="cart-content-wraper">
                                                <div class="cart-single-wraper">
                                                    <div class="cart-img">
                                                        <a href="#"><img src="/h/images/product/01.jpg" alt=""></a>
                                                    </div>
                                                    <div class="cart-content">
                                                        <div class="cart-name"> <a href="#">Aenean Eu Tristique</a> </div>
                                                        <div class="cart-price"> $70.00 </div>
                                                        <div class="cart-qty"> Qty: <span>1</span> </div>
                                                    </div>
                                                    <div class="remove"> <a href="#"><i class="zmdi zmdi-close"></i></a> </div>
                                                </div>
                                                <div class="cart-single-wraper">
                                                    <div class="cart-img">
                                                        <a href="#"><img src="/h/images/product/02.jpg" alt=""></a>
                                                    </div>
                                                    <div class="cart-content">
                                                        <div class="cart-name"> <a href="#">Aenean Eu Tristique</a> </div>
                                                        <div class="cart-price"> $70.00 </div>
                                                        <div class="cart-qty"> Qty: <span>1</span> </div>
                                                    </div>
                                                    <div class="remove"> <a href="#"><i class="zmdi zmdi-close"></i></a> </div>
                                                </div>
                                                <div class="cart-subtotal"> Subtotal: <span>$200.00</span> </div>
                                                <div class="cart-check-btn">
                                                    <div class="view-cart"> <a class="btn-def" href="cart.html">View Cart</a> </div>
                                                    <div class="check-btn"> <a class="btn-def" href="checkout.html">Checkout</a> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sticky-header"  class="header-middle-area">
                <div class="container">
                    <div class="full-width-mega-dropdown">
                        <div class="row">
                            <div class="col-md-2 col-sm-2">
                                <div class="logo ptb-20"><a href="index.html"> 
                                    <img src="/h/images/logo/logo.png" alt="main logo"></a>
                                </div>
                            </div>
                            <div class="col-md-7 col-sm-10 hidden-xs">
                                <nav id="primary-menu">
                                    <ul class="main-menu">
                                        <li class="current"><a class="active" href="/home">主页</a></li>
                                        @foreach($cates as $k=>$v)
                                       <li class="mega-parent"><a href="/home/list">{{ $v->cname }}</a>
                                            <div class="mega-menu-area mma-970">
                                                @foreach($v->list as $ke=>$va)
                                                <ul class="single-mega-item coloum-4">
                                                    <li class="menu-title uppercase">{{ $va->cname }}</li>
                                                    @foreach($va->list as $key=>$value)
                                                    <li><a href="about-us.html" target="_blank">{{ $value->cname }}</a></li>
                                                    @endforeach
                                                </ul>
                                                @endforeach
                                            </div>
                                        </li>            
                                        @endforeach         
                                        <li><a href="/home/list">精选</a></li>
                                        <li><a href="about-us.html">关于</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="col-md-3 hidden-sm hidden-xs">
                                <div class="search-box global-table">
                                    <div class="global-row">
                                        <div class="global-cell">
                                            <form action="#">
                                                <div class="input-box">
                                                    <input class="single-input" placeholder="Search anything" type="text">
                                                    <button class="src-btn"><i class="fa fa-search"></i></button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                        
                            <!-- mobile-menu-area start -->

                            <!--mobile menu area end-->
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div>
            @section('comeon')
            @show
        </div>
        <!-- End of header area -->
        
        <!--slider area start-->
       
        <!--slider area start-->
        
        <!--delivery service start-->
        
        <!--delivery service start-->
        
        <!--branding-section-area start-->
       
        <!--branding-section-area end-->
        
        <!--new arrival area start-->
        
        <!--new arrival area end-->
        
        <!--banner area start-->
        
        <!--banner area end-->  
        
        <!--discunt-featured-onsale-area start -->
        
        <!--discunt-featured-onsale-area end-->  
        
        <!--testimonial-area-start-->
     
        <!--testimonial-area-end-->
        
        <!--new-arrival on-sale Top-ratted area start-->
       
        <!--new-arrival on-sale Top-ratted area end-->
        
        <!--brand area are start-->
       
        <!--brand area are start-->
  
        <!--blog area are start-->
        
        <!--blog area are end-->
        
        <!-- footer area start-->
        <div class="footer-area ptb-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                        <div class="single-footer contact-us">
                            <div class="footer-title uppercase">
                                <h5>联系我们</h5> </div>
                            <ul>
                                <li>
                                    <div class="contact-icon"> <i class="zmdi zmdi-pin-drop"></i> </div>
                                    <div class="contact-text">
                                        <p><span>石家庄晋州市中兴路</span> <span>庞磐</span></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="contact-icon"> <i class="zmdi zmdi-email-open"></i> </div>
                                    <div class="contact-text">
                                        <p><span><a href="#">571451865@qq.com</a></span> <span><a href="#">MassiveRock0104@163.com</a></span></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="contact-icon"> <i class="zmdi zmdi-phone-paused"></i> </div>
                                    <div class="contact-text">
                                        <p><span>+86 17611130104</span> <span>+86 (0311)84466226</span></p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
                        <div class="single-footer informaton-area">
                            <div class="footer-title uppercase">
                                <h5>信息</h5> </div>
                            <div class="informatoin">
                                <ul>
                                    <li><a href="#">我的账户</a></li>
                                    <li><a href="#">历史订单</a></li>
                                    <li><a href="#">愿望</a></li>
                                    <li><a href="#">返回</a></li>
                                    <li><a href="#">私人定制</a></li>
                                    <li><a href="#">网点地图</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 hidden-sm col-xs-12">
                        <div class="single-footer instagrm-area">
                            <div class="footer-title uppercase">
                                <h5>友情</h5> 
                            </div>
                            <div class="instagrm">
                                <ul>
                                    <li><a href="#"><img src="/h/images/gallery/01.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="/h/images/gallery/02.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="/h/images/gallery/03.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="/h/images/gallery/04.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="/h/images/gallery/05.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="/h/images/gallery/06.jpg" alt=""></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-4 col-lg-offset-1 col-xs-12">
                        <div class="single-footer newslatter-area">
                            <div class="footer-title uppercase">
                                <h5>Get Newsletters</h5> 
                            </div>
                            <div class="newslatter">
                                <form action="#" method="post">
                                    <div class="input-box pos-rltv">
                                        <input placeholder="Type Your Email hear" type="text"> 
                                        <a href="#">
                                            <i class="zmdi zmdi-arrow-right"></i>
                                        </a>
                                    </div>
                                </form>
                                <div class="social-icon socile-icon-style-3 mt-40">
                                    <div class="footer-title uppercase">
                                        <h5>Social Network</h5> 
                                    </div>
                                    <ul>
                                        <li><a href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-linkedin"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-pinterest"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-google"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-twitter"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--footer area start-->
        
        <!--footer bottom area start-->
        <div class="footer-bottom global-table">
            <div class="global-row">
                <div class="global-cell">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="copyrigth">Copyright &copy; 2018.Company name All rights reserved.<a target="_blank" href="http://sc.chinaz.com/moban/">&#x7F51;&#x9875;&#x6A21;&#x677F;</a></div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <ul class="payment-support text-right">
                                    <li>
                                        <a href="#"><img src="/h/images/icons/pay1.png" alt="" /></a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="/h/images/icons/pay2.png" alt="" /></a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="/h/images/icons/pay3.png" alt="" /></a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="/h/images/icons/pay4.png" alt="" /></a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="/h/images/icons/pay5.png" alt="" /></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--footer bottom area end-->
        


        <!-- QUICKVIEW PRODUCT -->
        <div id="quickview-wrapper">
            <!-- Modal -->
            <div class="modal fade" id="productModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">
                            <div class="modal-product">
                              <div class="product-images"> 
                                   <!--modal tab start-->
                                    <div class="portfolio-thumbnil-area-2">
                                        <div class="tab-content active-portfolio-area-2">
                                            <div role="tabpanel" class="tab-pane active" id="view1">
                                                <div class="product-img">
                                                    <a href="#"><img src="/h/images/product/01.jpg" alt="Single portfolio" /></a>
                                                </div>
                                            </div>
                                            <div role="tabpanel" class="tab-pane" id="view2">
                                                <div class="product-img">
                                                    <a href="#"><img src="/h/images/product/02.jpg" alt="Single portfolio" /></a>
                                                </div>
                                            </div>
                                            <div role="tabpanel" class="tab-pane" id="view3">
                                                <div class="product-img">
                                                    <a href="#"><img src="/h/images/product/03.jpg" alt="Single portfolio" /></a>
                                                </div>
                                            </div>
                                            <div role="tabpanel" class="tab-pane" id="view4">
                                                <div class="product-img">
                                                    <a href="#"><img src="/h/images/product/04.jpg" alt="Single portfolio" /></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-more-views-2">
                                            <div class="thumbnail-carousel-modal-2" data-tabs="tabs">
                                                <a href="#view1" aria-controls="view1" data-toggle="tab"><img src="/h/images/product/01.jpg" alt="" /></a>
                                                <a href="#view2" aria-controls="view2" data-toggle="tab"><img src="/h/images/product/02.jpg" alt="" /></a>
                                                <a href="#view3" aria-controls="view3" data-toggle="tab"><img src="/h/images/product/03.jpg" alt="" /></a>
                                                <a href="#view4" aria-controls="view4" data-toggle="tab"><img src="/h/images/product/04.jpg" alt="" /></a>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                    <!--modal tab end-->
                                    <!-- .product-images -->
                                    <div class="product-info">
                                        <h1>Aenean eu tristique</h1>
                                        <div class="price-box-3">
                                            <div class="s-price-box"> <span class="new-price">$160.00</span> <span class="old-price">$190.00</span> </div>
                                        </div> <a href="shop.html" class="see-all">See all features</a>
                                        <div class="quick-add-to-cart">
                                            <form method="post" class="cart">
                                                <div class="numbers-row">
                                                    <input type="number" id="french-hens" value="3" min="1"> </div>
                                                <button class="single_add_to_cart_button" type="submit">Add to cart</button>
                                            </form>
                                        </div>
                                        <div class="quick-desc"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero.Nam fringilla tristique auctor. </div>
                                        <div class="social-sharing-modal">
                                            <div class="widget widget_socialsharing_widget">
                                                <h3 class="widget-title-modal">Share this product</h3>
                                                <ul class="social-icons-modal">
                                                    <li><a target="_blank" title="Facebook" href="#" class="facebook m-single-icon"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a target="_blank" title="Twitter" href="#" class="twitter m-single-icon"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a target="_blank" title="Pinterest" href="#" class="pinterest m-single-icon"><i class="fa fa-pinterest"></i></a></li>
                                                    <li><a target="_blank" title="Google +" href="#" class="gplus m-single-icon"><i class="fa fa-google-plus"></i></a></li>
                                                    <li><a target="_blank" title="LinkedIn" href="#" class="linkedin m-single-icon"><i class="fa fa-linkedin"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- .product-info -->
                                </div>
                                <!-- .modal-product -->
                            </div>
                            <!-- .modal-body -->
                        </div>
                        <!-- .modal-content -->
                    </div>
                    <!-- .modal-dialog -->
                </div>
                <!-- END Modal -->
            </div>
        <!-- END QUICKVIEW PRODUCT -->
    </div> 
    <!-- Body main wrapper end -->

    <!-- Placed js at the end of the document so the pages load faster -->

    <!-- jquery latest version -->
    <script src="/h/js/vendor/jquery-1.12.0.min.js"></script>
    <!-- Bootstrap framework js -->
    <script src="/h/js/bootstrap.min.js"></script>
    <!-- Slider js -->
    <script src="/h/js/slider/jquery.nivo.slider.pack.js"></script>
    <script src="/h/js/slider/nivo-active.js"></script>
    <!-- counterUp-->
    <script src="/h/js/jquery.countdown.min.js"></script>
    <!-- All js plugins included in this file. -->
    <script src="/h/js/plugins.js"></script>
    <!-- Main js file that contents all jQuery plugins activation. -->
    <script src="/h/js/main.js"></script>

</body>

</html>