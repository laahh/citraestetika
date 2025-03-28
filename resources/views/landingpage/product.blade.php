@extends('landingpage.app')

@section('content')
<div class="page-content">
        
    <!-- INNER PAGE BANNER -->
    <div class="wt-bnr-inr overlay-wraper" style="background-image:url(images/banner/product-banner.jpg);">
        <div class="overlay-main bg-black opacity-07"></div>
        <div class="container">
            <div class="wt-bnr-inr-entry">
                <h1 class="text-white">Product</h1>
            </div>
        </div>
    </div>
    <!-- INNER PAGE BANNER END -->
    
    <!-- BREADCRUMB ROW -->                            
    <div class="bg-gray-light p-tb20">
        <div class="container">
            <ul class="wt-breadcrumb breadcrumb-style-2">
                <li><a href="javascript:void(0);"><i class="fa fa-home"></i> Home</a></li>
                <li>Product</li>
            </ul>
        </div>
    </div>
    <!-- BREADCRUMB ROW END -->
    
    <!-- SECTION CONTENT START -->
    <div class="section-full p-t80 p-b50">
        <div class="container">
            <div class="section-content">
                <div class="row">
                    <!-- SIDE BAR START -->
                    <div class="col-lg-4 col-md-12">
                    
                        <aside  class="side-bar">
                        
                            <!-- 13. SEARCH -->
                            <div class="widget bg-white ">
                                <h4 class="widget-title">Search</h4>
                                <div class="search-bx">
                                    <form role="search" method="post">
                                        <div class="input-group">
                                            <input name="news-letter" type="text" class="form-control" placeholder="Write your text">
                                            <span class="input-group-btn">
                                                <button type="submit" class="site-button"><i class="fa fa-search"></i></button>
                                            </span>
                                        </div>
                                    </form>
                                </div>
                            </div> 
                            
                            <!-- 7. OUR CLIENT -->
                            <div class="widget">
                                <h4 class="widget-title">Our Client</h4>
                                <div class="owl-carousel widget-client p-t10">
                                
                                    <!-- COLUMNS 1 --> 
                                    <div class="item">
                                        <div class="ow-client-logo">
                                            <div class="client-logo wt-img-effect on-color">
                                                <a href="about-1.html"><img src="images/client-logo/logo1.png" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- COLUMNS 2 --> 
                                    <div class="item">
                                        <div class="ow-client-logo">
                                            <div class="client-logo wt-img-effect on-color">
                                                <a href="about-1.html"><img src="images/client-logo/logo2.png" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- COLUMNS 3 --> 
                                    <div class="item">
                                        <div class="ow-client-logo">
                                            <div class="client-logo wt-img-effect on-color">
                                                <a href="about-1.html"><img src="images/client-logo/logo3.png" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                    
                                </div>
                            </div>  
                            
                                <!-- 6. NEWSLETTER -->
                            <div class="widget widget_newsletter-2 bg-white  ">
                                <h4 class="widget-title">Newsletter</h4>
                                <div class="newsletter-bx p-a30">
                                    <div class="newsletter-icon">
                                        <i class="fa fa-envelope-o"></i>
                                    </div>
                                    
                                    <div class="newsletter-content">
                                        <i>Enter your e-mail and subscribe to our newsletter. Sit amet of em Ipsum. Proin gravida nibh velone velit auctor aliquet.</i>
                                        </div>
                                        <div class="m-t20">
                                        <form role="search" method="post">
                                        <div class="input-group">
                                            <input name="news-letter" class="form-control" placeholder="ENTER YOUR EMAIL" type="text">
                                            <span class="input-group-btn">
                                                <button type="submit" class="site-button"><i class="fa fa-paper-plane-o"></i></button>
                                            </span>
                                        </div>
                                    </form>
                                    </div>
                                </div>
                            </div>  
                            
                            <!-- 12. TAGS -->
                            <div class="widget bg-white  widget_tag_cloud">
                                <h4 class="widget-title">Tags</h4>
                                <div class="tagcloud">
                                    <a href="about-1.html">Trouble </a>
                                    <a href="about-1.html">Programmers</a>
                                    <a href="about-1.html">Never</a>
                                    <a href="about-1.html">Tell</a>
                                    <a href="about-1.html">Doing</a>
                                    <a href="about-1.html">Person</a>
                                    <a href="about-1.html">Inventors Tag</a>
                                    <a href="about-1.html">Between </a>
                                    <a href="about-1.html">Abilities</a>
                                    <a href="about-1.html">Fault </a>
                                    <a href="about-1.html">Gets </a>
                                    <a href="about-1.html">Macho</a>
                                </div>
                            </div>  
                                                                                                                                                                                    
                            <!-- 2. RECENT POSTS -->
                            <div class="widget bg-white  recent-posts-entry">
                                <h4 class="widget-title">Posts</h4>
                                <div class="section-content">
                                    <div class="wt-tabs tabs-default border">
                                        <ul class="nav nav-tabs">
                                            <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#web-design-1">Recent</a></li>
                                            <li class="nav-item"><a class="nav-link " data-bs-toggle="tab" href="#graphic-design-1">Popular</a></li>
                                        </ul>
                                        <div class="tab-content">
                                        
                                            <div id="web-design-1" class="tab-pane active ">
                                                <div class="widget-post-bx">
                                                    <div class="widget-post clearfix bg-gray">
                                                        <div class="wt-post-media">
                                                            <img src="images/blog/recent-blog/pic1.jpg"  alt="" class="radius-bx">
                                                        </div>
                                                        <div class="wt-post-info">
                                                            <div class="wt-post-header">
                                                                <h6 class="post-title">Lorem ipsum dolor sit </h6>
                                                            </div>
                                                            <div class="wt-post-meta">
                                                                <ul>
                                                                    <li class="post-author">25 Dec</li>
                                                                    <li class="post-comment"><i class="fa fa-comments"></i> 20 comment</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="widget-post clearfix bg-gray">
                                                        <div class="wt-post-media">
                                                            <img src="images/blog/recent-blog/pic2.jpg" alt=""  class="radius-bx">
                                                        </div>
                                                        <div class="wt-post-info">
                                                            <div class="wt-post-header">
                                                                <h6 class="post-title">Debitis nihil placeat, illum</h6>
                                                            </div>
                                                            <div class="wt-post-meta">
                                                                <ul>
                                                                    <li class="post-author">25 Dec</li>
                                                                    <li class="post-comment"><i class="fa fa-comments"></i> 15 comment</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="widget-post clearfix bg-gray">
                                                        <div class="wt-post-media">
                                                            <img src="images/blog/recent-blog/pic3.jpg" alt=""  class="radius-bx">
                                                        </div>
                                                        <div class="wt-post-info">
                                                            <div class="wt-post-header">
                                                                <h6 class="post-title">Elit Assumenda vel amet </h6>
                                                            </div>
                                                            <div class="wt-post-meta">
                                                                <ul>
                                                                    <li class="post-author">25 Dec</li>
                                                                    <li class="post-comment"><i class="fa fa-comments"></i> 07 comment</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div id="graphic-design-1" class="tab-pane">
                                                <div class="widget-post-bx">
                                                    <div class="widget-post clearfix bg-gray">
                                                        <div class="wt-post-media">
                                                            <img src="images/blog/recent-blog/pic3.jpg" alt=""  class="radius-bx">
                                                        </div>
                                                        <div class="wt-post-info">
                                                            <div class="wt-post-header">
                                                                <h6 class="post-title">Blog post title doler sit</h6>
                                                            </div>
                                                            <div class="wt-post-meta">
                                                                <ul>
                                                                    <li class="post-author">25 Dec</li>
                                                                    <li class="post-comment"><i class="fa fa-comments"></i> 10 comment</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="widget-post clearfix bg-gray">
                                                        <div class="wt-post-media">
                                                            <img src="images/blog/recent-blog/pic1.jpg"  alt=""  class="radius-bx">
                                                        </div>
                                                        <div class="wt-post-info">
                                                            <div class="wt-post-header">
                                                                <h6 class="post-title">Blog post title lorem </h6>
                                                            </div>
                                                            <div class="wt-post-meta">
                                                                <ul>
                                                                    <li class="post-author">25 Dec</li>
                                                                    <li class="post-comment"><i class="fa fa-comments"></i> 29 comment</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="widget-post clearfix bg-gray">
                                                        <div class="wt-post-media">
                                                            <img src="images/blog/recent-blog/pic2.jpg" alt=""  class="radius-bx">
                                                        </div>
                                                        <div class="wt-post-info">
                                                            <div class="wt-post-header">
                                                                <h6 class="post-title">Blog post title a dummy</h6>
                                                            </div>
                                                            <div class="wt-post-meta">
                                                                <ul>
                                                                    <li class="post-author">25 Dec</li>
                                                                    <li class="post-comment"><i class="fa fa-comments"></i> 05 comment</li>
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
                            
                            <!-- 4. OUR GALLERY  -->
                            <div class="widget widget_gallery mfp-gallery">
                                <h4 class="widget-title">Our Gallery</h4>
                                <ul>
                                    <li>
                                        <div class="wt-post-thum">
                                            <a href="images/gallery/pic1.jpg" class="mfp-link" ><img src="images/gallery/thumb/pic1.jpg" alt=""></a>
                                        </div>
                                    </li>
                                    
                                    <li>
                                        <div class="wt-post-thum ">
                                            <a href="images/gallery/pic2.jpg" class="mfp-link"><img src="images/gallery/thumb/pic2.jpg" alt=""></a>
                                        </div>
                                    </li>
                                    
                                    <li>
                                        <div class="wt-post-thum  ">
                                            <a href="images/gallery/pic3.jpg" class="mfp-link"><img src="images/gallery/thumb/pic3.jpg" alt=""></a>
                                        </div>
                                    </li>
                                    
                                    <li>
                                        <div class="wt-post-thum ">
                                            <a href="images/gallery/pic4.jpg" class="mfp-link"><img src="images/gallery/thumb/pic4.jpg" alt=""></a>
                                        </div>
                                    </li>
                                    
                                    <li>
                                        <div class="wt-post-thum ">
                                            <a href="images/gallery/pic5.jpg" class="mfp-link"><img src="images/gallery/thumb/pic5.jpg" alt=""></a>
                                        </div>
                                    </li>
                                    
                                    <li>
                                        <div class="wt-post-thum ">
                                            <a href="images/gallery/pic6.jpg" class="mfp-link"><img src="images/gallery/thumb/pic6.jpg" alt=""></a>
                                        </div>
                                    </li>
                                    
                                    <li>
                                        <div class="wt-post-thum">
                                            <a href="images/gallery/pic7.jpg" class="mfp-link" ><img src="images/gallery/thumb/pic7.jpg" alt=""></a>
                                        </div>
                                    </li>
                                    
                                    <li>
                                        <div class="wt-post-thum ">
                                            <a href="images/gallery/pic8.jpg" class="mfp-link"><img src="images/gallery/thumb/pic8.jpg" alt=""></a>
                                        </div>
                                    </li>
                                    
                                    <li>
                                        <div class="wt-post-thum  ">
                                            <a href="images/gallery/pic7.jpg" class="mfp-link"><img src="images/gallery/thumb/pic7.jpg" alt=""></a>
                                        </div>
                                    </li>
                                    
                                    <li>
                                        <div class="wt-post-thum ">
                                            <a href="images/gallery/pic6.jpg" class="mfp-link"><img src="images/gallery/thumb/pic6.jpg" alt=""></a>
                                        </div>
                                    </li>
                                    
                                    <li>
                                        <div class="wt-post-thum ">
                                            <a href="images/gallery/pic5.jpg" class="mfp-link"><img src="images/gallery/thumb/pic5.jpg" alt=""></a>
                                        </div>
                                    </li>
                                    
                                    <li>
                                        <div class="wt-post-thum ">
                                            <a href="images/gallery/pic4.jpg" class="mfp-link"><img src="images/gallery/thumb/pic4.jpg" alt=""></a>
                                        </div>
                                    </li>
                                </ul>
                                
                            </div> 
                        
                        </aside>

                    </div>
                    <!-- SIDE BAR END --> 
                    <div class="col-lg-8 col-md-12"> 
                                                  
                                      
                        <!-- TITLE START -->
                        <div class="p-b10">
                            <h3 class="text-uppercase">Our Products</h3>
                            <div class="wt-separator-outer m-b30">
                                <div class="wt-separator style-icon">
                                    <i class="fa fa-leaf text-black"></i>
                                    <span class="separator-left site-bg-primary"></span>
                                    <span class="separator-right site-bg-primary"></span>
                                </div>
                            </div>
                        </div>
                        <!-- TITLE END -->
                        
                        <div class="row">
                            <!-- COLUMNS 1 -->
                            <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                                <div class="wt-box wt-product-box">
                                    <div class="wt-thum-bx wt-img-overlay1 wt-img-effect zoom">
                                        <img src="images/products/pic-1.jpg" alt="">
                                        <div class="overlay-bx">
                                            <div class="overlay-icon">
                                                <a href="product-detail.html">
                                                    <i class="fa fa-cart-plus wt-icon-box-xs"></i>
                                                </a>
                                                <a class="mfp-link" href="product-detail.html">
                                                    <i class="fa fa-heart wt-icon-box-xs"></i>
                                                </a>
                                          </div>
                                        </div>
                                    </div>
                                    <div class="wt-info  text-center">
                                         <div class="p-a10 bg-white">
                                            <h4 class="wt-title">
                                                <a href="javascript:;">One Martines</a>
                                            </h4>
                                            <span class="price">
                                                <del>
                                                     <span><span class="Price-currencySymbol">£</span>3.00</span>
                                                </del> 
                                                <ins>
                                                    <span><span class="Price-currencySymbol">£</span>2.00</span>
                                                </ins>
                                            </span>
                                            <div class="rating-bx">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="p-t10">
                                                <a href="product-detail.html" class="site-button  m-r15">ADD TO CART  <i class="fa fa-angle-double-right"></i></a>
                                            </div>
                                         </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 2 -->
                            <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                                <div class="wt-box wt-product-box">
                                    <div class="wt-thum-bx wt-img-overlay1 wt-img-effect zoom">
                                        <img src="images/products/pic-2.jpg" alt="">
                                        <div class="overlay-bx">
                                            <div class="overlay-icon">
                                                <a href="product-detail.html">
                                                    <i class="fa fa-cart-plus wt-icon-box-xs"></i>
                                                </a>
                                                <a class="mfp-link" href="product-detail.html">
                                                    <i class="fa fa-heart wt-icon-box-xs"></i>
                                                </a>
                                          </div>
                                        </div>
                                    </div>
                                    <div class="wt-info  text-center">
                                         <div class="p-a10 bg-white">
                                            <h4 class="wt-title">
                                                <a href="javascript:;">Two Martines </a>
                                            </h4>
                                            <span class="price">
                                                <del>
                                                     <span><span class="Price-currencySymbol">£</span>3.00</span>
                                                </del> 
                                                <ins>
                                                    <span><span class="Price-currencySymbol">£</span>2.00</span>
                                                </ins>
                                            </span>
                                            <div class="rating-bx">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="p-t10">
                                                <a href="product-detail.html" class="site-button  m-r15">ADD TO CART  <i class="fa fa-angle-double-right"></i></a>
                                            </div>
                                         </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 3 -->
                            <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                                <div class="wt-box wt-product-box">
                                    <div class="wt-thum-bx wt-img-overlay1 wt-img-effect zoom">
                                        <img src="images/products/pic-3.jpg" alt="">
                                        <div class="overlay-bx">
                                            <div class="overlay-icon">
                                                <a href="product-detail.html">
                                                    <i class="fa fa-cart-plus wt-icon-box-xs"></i>
                                                </a>
                                                <a class="mfp-link" href="product-detail.html">
                                                    <i class="fa fa-heart wt-icon-box-xs"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wt-info  text-center">
                                         <div class="p-a10 bg-white">
                                            <h4 class="wt-title">
                                                <a href="javascript:;">Three Martines</a>
                                            </h4>
                                            <span class="price">
                                                <del>
                                                     <span><span class="Price-currencySymbol">£</span>3.00</span>
                                                </del> 
                                                <ins>
                                                    <span><span class="Price-currencySymbol">£</span>2.00</span>
                                                </ins>
                                            </span>
                                            <div class="rating-bx">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="p-t10">
                                                <a href="product-detail.html" class="site-button  m-r15">ADD TO CART  <i class="fa fa-angle-double-right"></i></a>
                                            </div>
                                         </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 4 -->
                            <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                                <div class="wt-box wt-product-box">
                                    <div class="wt-thum-bx wt-img-overlay1 wt-img-effect zoom">
                                        <img src="images/products/pic-4.jpg" alt="">
                                        <div class="overlay-bx">
                                            <div class="overlay-icon">
                                                <a href="product-detail.html">
                                                    <i class="fa fa-cart-plus wt-icon-box-xs"></i>
                                                </a>
                                                <a class="mfp-link" href="product-detail.html">
                                                    <i class="fa fa-heart wt-icon-box-xs"></i>
                                                </a>
                                          </div>
                                        </div>
                                    </div>
                                    <div class="wt-info  text-center">
                                         <div class="p-a10 bg-white">
                                            <h4 class="wt-title">
                                                <a href="javascript:;">Four Martines</a>
                                            </h4>
                                            <span class="price">
                                                <del>
                                                     <span><span class="Price-currencySymbol">£</span>3.00</span>
                                                </del> 
                                                <ins>
                                                    <span><span class="Price-currencySymbol">£</span>2.00</span>
                                                </ins>
                                            </span>
                                            <div class="rating-bx">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="p-t10">
                                                <a href="product-detail.html" class="site-button  m-r15">ADD TO CART  <i class="fa fa-angle-double-right"></i></a>
                                            </div>
                                         </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 5 -->
                            <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                                <div class="wt-box wt-product-box">
                                    <div class="wt-thum-bx wt-img-overlay1 wt-img-effect zoom">
                                        <img src="images/products/pic-5.jpg" alt="">
                                        <div class="overlay-bx">
                                            <div class="overlay-icon">
                                                <a href="product-detail.html">
                                                    <i class="fa fa-cart-plus wt-icon-box-xs"></i>
                                                </a>
                                                <a class="mfp-link" href="product-detail.html">
                                                    <i class="fa fa-heart wt-icon-box-xs"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wt-info  text-center">
                                         <div class="p-a10 bg-white">
                                            <h4 class="wt-title">
                                                <a href="javascript:;">Five Martines</a>
                                            </h4>
                                            <span class="price">
                                                <del>
                                                     <span><span class="Price-currencySymbol">£</span>3.00</span>
                                                </del> 
                                                <ins>
                                                    <span><span class="Price-currencySymbol">£</span>2.00</span>
                                                </ins>
                                            </span>
                                            <div class="rating-bx">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="p-t10">
                                                <a href="product-detail.html" class="site-button  m-r15">ADD TO CART  <i class="fa fa-angle-double-right"></i></a>
                                            </div>
                                         </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 6 -->
                            <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                                <div class="wt-box wt-product-box">
                                    <div class="wt-thum-bx wt-img-overlay1 wt-img-effect zoom">
                                        <img src="images/products/pic-6.jpg" alt="">
                                        <div class="overlay-bx">
                                            <div class="overlay-icon">
                                                <a href="product-detail.html">
                                                    <i class="fa fa-cart-plus wt-icon-box-xs"></i>
                                                </a>
                                                <a class="mfp-link" href="product-detail.html">
                                                    <i class="fa fa-heart wt-icon-box-xs"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wt-info  text-center">
                                        <div class="p-a10 bg-white">
                                            <h4 class="wt-title">
                                                <a href="javascript:;">Six Martines</a>
                                            </h4>
                                            <span class="price">
                                                <del>
                                                     <span><span class="Price-currencySymbol">£</span>3.00</span>
                                                </del> 
                                                <ins>
                                                    <span><span class="Price-currencySymbol">£</span>2.00</span>
                                                </ins>
                                            </span>
                                            <div class="rating-bx">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="p-t10">
                                                <a href="product-detail.html" class="site-button  m-r15">ADD TO CART  <i class="fa fa-angle-double-right"></i></a>
                                            </div>
                                         </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 7 -->
                            <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                                <div class="wt-box wt-product-box">
                                    <div class="wt-thum-bx wt-img-overlay1 wt-img-effect zoom">
                                        <img src="images/products/pic-7.jpg" alt="">
                                        <div class="overlay-bx">
                                            <div class="overlay-icon">
                                                <a href="product-detail.html">
                                                    <i class="fa fa-cart-plus wt-icon-box-xs"></i>
                                                </a>
                                                <a class="mfp-link" href="product-detail.html">
                                                    <i class="fa fa-heart wt-icon-box-xs"></i>
                                                </a>
                                          </div>
                                        </div>
                                    </div>
                                    <div class="wt-info  text-center">
                                         <div class="p-a10 bg-white">
                                            <h4 class="wt-title">
                                                <a href="javascript:;">Seven Martines</a>
                                            </h4>
                                            <span class="price">
                                                <del>
                                                     <span><span class="Price-currencySymbol">£</span>3.00</span>
                                                </del> 
                                                <ins>
                                                    <span><span class="Price-currencySymbol">£</span>2.00</span>
                                                </ins>
                                            </span>
                                            <div class="rating-bx">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="p-t10">
                                                <a href="product-detail.html" class="site-button  m-r15">ADD TO CART  <i class="fa fa-angle-double-right"></i></a>
                                            </div>
                                         </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 8 -->
                            <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                                <div class="wt-box wt-product-box">
                                    <div class="wt-thum-bx wt-img-overlay1 wt-img-effect zoom">
                                        <img src="images/products/pic-8.jpg" alt="">
                                        <div class="overlay-bx">
                                            <div class="overlay-icon">
                                                <a href="product-detail.html">
                                                    <i class="fa fa-cart-plus wt-icon-box-xs"></i>
                                                </a>
                                                <a class="mfp-link" href="product-detail.html">
                                                    <i class="fa fa-heart wt-icon-box-xs"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wt-info  text-center">
                                         <div class="p-a10 bg-white">
                                            <h4 class="wt-title">
                                                <a href="javascript:;">Eight Martines</a>
                                            </h4>
                                            <span class="price">
                                                <del>
                                                     <span><span class="Price-currencySymbol">£</span>3.00</span>
                                                </del> 
                                                <ins>
                                                    <span><span class="Price-currencySymbol">£</span>2.00</span>
                                                </ins>
                                            </span>
                                            <div class="rating-bx">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="p-t10">
                                                <a href="product-detail.html" class="site-button  m-r15">ADD TO CART  <i class="fa fa-angle-double-right"></i></a>
                                            </div>
                                         </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 9 -->
                            <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                                <div class="wt-box wt-product-box">
                                    <div class="wt-thum-bx wt-img-overlay1 wt-img-effect zoom">
                                        <img src="images/products/pic-5.jpg" alt="">
                                        <div class="overlay-bx">
                                            <div class="overlay-icon">
                                                <a href="product-detail.html">
                                                    <i class="fa fa-cart-plus wt-icon-box-xs"></i>
                                                </a>
                                                <a class="mfp-link" href="product-detail.html">
                                                    <i class="fa fa-heart wt-icon-box-xs"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wt-info  text-center">
                                         <div class="p-a10 bg-white">
                                            <h4 class="wt-title">
                                                <a href="javascript:;">Five Martines</a>
                                            </h4>
                                            <span class="price">
                                                <del>
                                                     <span><span class="Price-currencySymbol">£</span>3.00</span>
                                                </del> 
                                                <ins>
                                                    <span><span class="Price-currencySymbol">£</span>2.00</span>
                                                </ins>
                                            </span>
                                            <div class="rating-bx">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="p-t10">
                                                <a href="product-detail.html" class="site-button  m-r15">ADD TO CART  <i class="fa fa-angle-double-right"></i></a>
                                            </div>
                                         </div>
                                    </div>
                                </div>
                            </div>                                    
                        </div>

                        <!-- ADD BLOCK -->
                        <div class="tw-ad-section">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 m-b30">
                                    <div class="wt-box pro-banner bg-cover" style="background-image: url(images/add/pic1.jpg);">
                                        <div class="pro-banner-disc p-a20 text-white">
                                            <h3 class="text-uppercase m-a0 m-b10">Best time to buy</h3>
                                            <h4 class="m-a0 m-b10">Our Product</h4>
                                            <h3 class="text-uppercase m-a0 m-b10">UP TO</h3>
                                            <h5 class="text-uppercase m-a0 m-b10">10% Cashback</h5>
                                            <a href="#" class="site-button ">ADD TO CART <i class="fa fa-angle-double-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 m-b30">
                                    <div class="wt-box pro-banner bg-cover" style="background-image: url(images/add/pic2.jpg);">
                                        <div class="pro-banner-disc p-a20 text-white">
                                            <h3 class="text-uppercase m-a0 m-b10">Best time to buy</h3>
                                            <h4 class="m-a0 m-b10">Our Product</h4>
                                            <h3 class="text-uppercase m-a0 m-b10">UP TO</h3>
                                            <h5 class="text-uppercase m-a0 m-b10">10% Cashback</h5>
                                            <a href="#" class="site-button ">ADD TO CART <i class="fa fa-angle-double-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ADD BLOCK -->  
                        
                        <!-- TITLE START -->
                        <div class="p-b10">
                            <h3 class="text-uppercase">Featured products</h3>
                            <div class="wt-separator-outer  m-b30">
                                <div class="wt-separator style-icon">
                                    <i class="fa fa-leaf text-black"></i>
                                    <span class="separator-left site-bg-primary"></span>
                                    <span class="separator-right site-bg-primary"></span>
                                </div>
                            </div>
                        </div>
                        <!-- TITLE END -->
                    
                        <div class="row">
                        
                            <!-- COLUMNS 1 -->
                            <div class="col-lg-4 col-md-6 m-b30">
                                <div class="wt-box wt-product-box">
                                    <div class="wt-thum-bx wt-img-overlay1 wt-img-effect zoom">
                                        <img src="images/products/pic-1.jpg" alt="">
                                        <div class="overlay-bx">
                                            <div class="overlay-icon">
                                                <a href="product-detail.html">
                                                    <i class="fa fa-cart-plus wt-icon-box-xs"></i>
                                                </a>
                                                <a class="mfp-link" href="product-detail.html">
                                                    <i class="fa fa-heart wt-icon-box-xs"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wt-info  text-center">
                                         <div class="p-a10 bg-white">
                                            <h4 class="wt-title">
                                                <a href="javascript:;">One Martines</a>
                                            </h4>
                                            <span class="price">
                                                <del>
                                                     <span><span class="Price-currencySymbol">£</span>3.00</span>
                                                </del> 
                                                <ins>
                                                    <span><span class="Price-currencySymbol">£</span>2.00</span>
                                                </ins>
                                            </span>
                                            <div class="rating-bx">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="p-t10">
                                                <a href="product-detail.html" class="site-button  m-r15">ADD TO CART  <i class="fa fa-angle-double-right"></i></a>
                                            </div>
                                         </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 2 -->
                            <div class="col-lg-4 col-md-6 m-b30">
                                <div class="wt-box wt-product-box">
                                    <div class="wt-thum-bx wt-img-overlay1 wt-img-effect zoom">
                                        <img src="images/products/pic-2.jpg" alt="">
                                        <div class="overlay-bx">
                                            <div class="overlay-icon">
                                                <a href="product-detail.html">
                                                    <i class="fa fa-cart-plus wt-icon-box-xs"></i>
                                                </a>
                                                <a class="mfp-link" href="product-detail.html">
                                                    <i class="fa fa-heart wt-icon-box-xs"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wt-info  text-center">
                                         <div class="p-a10 bg-white">
                                            <h4 class="wt-title">
                                                <a href="javascript:;">Two Martines </a>
                                            </h4>
                                            <span class="price">
                                                <del>
                                                     <span><span class="Price-currencySymbol">£</span>3.00</span>
                                                </del> 
                                                <ins>
                                                    <span><span class="Price-currencySymbol">£</span>2.00</span>
                                                </ins>
                                            </span>
                                            <div class="rating-bx">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="p-t10">
                                                <a href="product-detail.html" class="site-button  m-r15">ADD TO CART  <i class="fa fa-angle-double-right"></i></a>
                                            </div>
                                         </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 3 -->
                            <div class="col-lg-4 col-md-6 m-b30">
                                <div class="wt-box wt-product-box">
                                    <div class="wt-thum-bx wt-img-overlay1 wt-img-effect zoom">
                                        <img src="images/products/pic-3.jpg" alt="">
                                        <div class="overlay-bx">
                                            <div class="overlay-icon">
                                                <a href="product-detail.html">
                                                    <i class="fa fa-cart-plus wt-icon-box-xs"></i>
                                                </a>
                                                <a class="mfp-link" href="product-detail.html">
                                                    <i class="fa fa-heart wt-icon-box-xs"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wt-info  text-center">
                                         <div class="p-a10 bg-white">
                                            <h4 class="wt-title">
                                                <a href="javascript:;">Three Martines</a>
                                            </h4>
                                            <span class="price">
                                                <del>
                                                     <span><span class="Price-currencySymbol">£</span>3.00</span>
                                                </del> 
                                                <ins>
                                                    <span><span class="Price-currencySymbol">£</span>2.00</span>
                                                </ins>
                                            </span>
                                            <div class="rating-bx">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="p-t10">
                                                <a href="product-detail.html" class="site-button  m-r15">ADD TO CART  <i class="fa fa-angle-double-right"></i></a>
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
     <!-- SECTION CONTENT END -->

</div>



@endsection