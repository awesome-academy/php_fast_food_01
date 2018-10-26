@extends('master')   
@section('content')  
<div id="magik-slideshow" class="magik-slideshow">
    <div id='rev_slider_4_wrapper' class='rev_slider_wrapper fullwidthbanner-container' >
        <div id='rev_slider_4' class='rev_slider fullwidthabanner'>
            <ul>
                <li data-transition='random' data-slotamount='7' data-masterspeed='1000' data-thumb='images/slider-1.jpg'>
                    <img src='images/slider-1.jpg' alt="slide-img" data-bgposition='left top'  data-bgfit='cover' data-bgrepeat='no-repeat' />
                </li>
                <li data-transition='random' data-slotamount='7' data-masterspeed='1000' data-thumb='images/slider-2a.jpg'>
                    <img src='images/slider-2a.jpg' alt="slide" data-bgposition='left top'  data-bgfit='cover' data-bgrepeat='no-repeat' />
                </li>
                <li data-transition='random' data-slotamount='7' data-masterspeed='1000' data-thumb='images/slider-3a.jpg'><img src='images/slider-3a.jpg' alt="slide" data-bgposition='left top'  data-bgfit='cover' data-bgrepeat='no-repeat' />
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- end banner -->
<div class="top-banner-section wow bounceInUp animated">
    <div>
        <div class="row">
            <div class="col-lg-3 col-sm-3 col-xs-6">
                <div class="col add-banner1">
                    <div class="top-b-text"><strong>Designer Shoes</strong> For Women</div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-3 col-xs-6">
                <div class="col free-shipping"><strong>Free Shipping</strong> on order over $199</div>
            </div>
            <div class="col-lg-3 col-sm-3 col-xs-6">
                <div class="col add-banner2">
                    <div class="top-b-text"><strong>Luxury Handbags</strong>2015 New Arrive</div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-3 col-xs-6">
              <div class="col last offer"><strong>New Collection</strong> Lorem ipsum dolor.</div>
          </div>
      </div>
  </div>
</div>
<!-- main container -->
<div class="main-col">
    <div class="container">
        <div class="row">
            <div class="01-grid-view">
                <div class="col-md-12">
                    <div class="std">
                        <div class="home-tabs wow bounceInUp animated">
                            <div class="producttabs">
                                <div id="magik_producttabs1" class="magik-producttabs"> 
                                    <div class="magik-pdt-container"> 
                                      <div class="magik-pdt-nav">
                                        <ul class="pdt-nav">
                                            <li class="item-nav tab-loaded tab-nav-actived" data-type="order" data-catid="" data-orderby="best_sales" data-href="pdt_best_sales">
                                                <span class="title-navi">{{ trans('messeage.pp') }}</span>
                                            </li>
                                            <li class="item-nav" data-type="order" data-catid="" data-orderby="new_arrivals" data-href="pdt_new_arrivals">
                                                <span class="title-navi">{{ trans('messeage.np') }}</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="magik-pdt-content wide-5">
                                        <div class="pdt-content is-loaded pdt_best_sales tab-content-actived">
                                            <ul class="pdt-list products-grid-home zoomOut play">
                                                <li class="item item-animate wide-first">
                                                    <div class="item-inner">
                                                        <div class="item-img">
                                                            <div class="item-img-info">
                                                                <a class="product-image" title="Sample Product" href="product_detail.html"> 
                                                                    <img alt="Sample Product" src="products-images/01.jpg">
                                                                </a>
                                                                <div class="sale-label sale-top-left">sale</div>
                                                                <div class="item-box-hover">
                                                                    <div class="box-inner">                                        
                                                                        <div class="actions">
                                                                            <div class="add_cart">
                                                                                <button class="button btn-cart" type="button"><span>Add to Cart</span></button>
                                                                            </div>
                                                                            <div class="product-detail-bnt">
                                                                                <a href="quick_view.html" class="button detail-bnt"><span>Quick View</span></a>
                                                                            </div> 
                                                                            <span class="add-to-links"> 
                                                                                <a href="compare.html" class="link-compare add_to_compare" title="Add to Compare"><span>Add to Compare</span></a>
                                                                            </span> 
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item-info">
                                                            <div class="info-inner">
                                                                <div class="item-title">
                                                                    <a title="Sample Product" href="product_detail.html"> Sample Product</a>
                                                                </div>
                                                                <div class="item-content">
                                                                    <div class="rating">
                                                                        <div class="ratings">
                                                                            <div class="rating-box">
                                                                                <div style="width:80%" class="rating"></div>
                                                                            </div>
                                                                            <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="item-price">
                                                                        <div class="price-box"> 
                                                                            <span  class="regular-price"> <span class="price">$125.00</span> </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="item item-animate">
                                                    <div class="item-inner">
                                                        <div class="item-img">
                                                            <div class="item-img-info">
                                                                <a class="product-image" title="Sample Product" href="product_detail.html"> <img alt="Sample Product" src="products-images/01.jpg">
                                                                </a>
                                                                <div class="sale-label sale-top-left">sale</div>
                                                                <div class="item-box-hover">
                                                                    <div class="box-inner">                                        
                                                                        <div class="actions">
                                                                            <div class="add_cart">
                                                                                <button class="button btn-cart" type="button"><span>Add to Cart</span></button>
                                                                            </div>
                                                                            <div class="product-detail-bnt">
                                                                                <a href="quick_view.html" class="button detail-bnt"><span>Quick View</span></a>
                                                                            </div> 
                                                                            <span class="add-to-links"> 
                                                                                <a href="compare.html" class="link-compare add_to_compare" title="Add to Compare"><span>Add to Compare</span></a>
                                                                            </span> 
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item-info">
                                                            <div class="info-inner">
                                                                <div class="item-title">
                                                                    <a title="Sample Product" href="product_detail.html"> Sample Product </a>
                                                                </div>
                                                                <div class="item-content">
                                                                    <div class="rating">
                                                                        <div class="ratings">
                                                                            <div class="rating-box">
                                                                                <div style="width:80%" class="rating"></div>
                                                                            </div>
                                                                            <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="item-price">
                                                                        <div class="price-box"> 
                                                                            <span  class="regular-price"> <span class="price">$125.00</span> </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="item item-animate">
                                                    <div class="item-inner">
                                                        <div class="item-img">
                                                            <div class="item-img-info">
                                                                <a href="product_detail.html" title="Sample Product" class="product-image"><img src="products-images/01.jpg" alt="Sample Product"></a>
                                                                <div class="sale-label sale-top-left">Sale</div>
                                                                <div class="item-box-hover">
                                                                    <div class="box-inner">
                                                                        <div class="actions">
                                                                            <div class="add_cart">
                                                                                <button class="button btn-cart" type="button"><span>Add to Cart</span></button>
                                                                            </div>
                                                                            <div class="product-detail-bnt"><a href="quick_view.html" class="button detail-bnt"><span>Quick View</span></a></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item-info">
                                                                <div class="info-inner">
                                                                    <div class="item-title">
                                                                        <a href="product_detail.html" title="Sample Product">Sample Product</a>
                                                                    </div>
                                                                    <div class="item-content">
                                                                        <div class="rating">
                                                                            <div class="ratings">
                                                                                <div class="rating-box">
                                                                                    <div class="rating" style="width:40%"></div>
                                                                                </div>
                                                                                <p class="rating-links"><a href="#">1 Review(s)</a>
                                                                                    <span class="separator">|</span> <a href="#">Add Review</a>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="item-price">
                                                                            <div class="price-box">
                                                                                <p class="old-price"><span class="price-label">Regular Price:</span> <span class="price">$100.00 </span> </p>
                                                                                <p class="special-price"><span class="price-label">Special Price</span> <span class="price">$90.00 </span> </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="pdt-content pdt_new_arrivals is-loaded">
                                            <ul class="pdt-list products-grid-home zoomOut play">
                                                <li class="item item-animate wide-first">
                                                    <div class="item-inner">
                                                        <div class="item-img">
                                                            <div class="item-img-info">
                                                                <a href="product_detail.html" title="Sample Product" class="product-image">
                                                                    <img src="products-images/product1.jpg" alt="Sample Product">
                                                                </a>
                                                                <div class="new-label new-top-left">New</div>
                                                                <div class="item-box-hover">
                                                                    <div class="box-inner">
                                                                        <div class="actions">
                                                                            <div class="add_cart">
                                                                                <button class="button btn-cart" type="button"><span>Add to Cart</span></button>
                                                                            </div>
                                                                            <div class="product-detail-bnt"><a href="quick_view.html" class="button detail-bnt"><span>Quick View</span></a>
                                                                            </div>
                                                                            <span class="add-to-links"> 
                                                                                <a href="compare.html" class="link-compare add_to_compare" title="Add to Compare"><span>Add to Compare</span></a>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item-info">
                                                            <div class="info-inner">
                                                                <div class="item-title">
                                                                    <a href="product_detail.html" title="Sample Product">Sample Product</a>
                                                                </div>
                                                                <div class="item-content">
                                                                    <div class="rating">
                                                                        <div class="ratings">
                                                                            <div class="rating-box">
                                                                                <div class="rating" style="width:80%"></div>
                                                                            </div>
                                                                            <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="item-price">
                                                                        <div class="price-box"><span class="regular-price"><span class="price">$125.00</span> </span> </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="item item-animate wide-first">
                                                    <div class="item-inner">
                                                        <div class="item-img">
                                                            <div class="item-img-info">
                                                                <a href="product_detail.html" title="Sample Product" class="product-image"><img src="products-images/product1.jpg" alt="Sample Product"></a>
                                                                <div class="new-label new-top-left">New</div>
                                                                <div class="item-box-hover">
                                                                    <div class="box-inner">
                                                                        <div class="actions">
                                                                            <div class="add_cart">
                                                                                <button class="button btn-cart" type="button"><span>Add to Cart</span></button>
                                                                            </div>
                                                                            <div class="product-detail-bnt"><a href="quick_view.html" class="button detail-bnt"><span>Quick View</span></a>
                                                                            </div>
                                                                            <span class="add-to-links"> 
                                                                                <a href="compare.html" class="link-compare add_to_compare" title="Add to Compare"><span>Add to Compare</span></a>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item-info">
                                                            <div class="info-inner">
                                                                <div class="item-title"><a href="product_detail.html" title="Sample Product">Sample Product</a> </div>
                                                                <div class="item-content">
                                                                    <div class="rating">
                                                                        <div class="ratings">
                                                                            <div class="rating-box">
                                                                                <div class="rating" style="width:80%"></div>
                                                                            </div>
                                                                            <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="item-price">
                                                                        <div class="price-box"><span class="regular-price"><span class="price">$125.00</span> </span> </div>
                                                                    </div>
                                                                </div>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="featured-pro container wow bounceInUp animated">
    <div class="slider-items-products">
        <div class="new_title center">
            <h2>{{ trans('messeage.fp') }}</h2>
        </div>
        <div id="featured-slider" class="product-flexslider hidden-buttons">
            <div class="slider-items slider-width-col4 products-grid">
                <div class="item">
                    <div class="item-inner">
                        <div class="item-img">
                            <div class="item-img-info">
                                <a class="product-image" title="Sample Product" href="product_detail.html"> <img alt="Sample Product" src="products-images/product10.jpg"></a>
                                <div class="sale-label sale-top-left">sale</div>
                                <div class="item-box-hover">
                                    <div class="box-inner">
                                        <div class="actions">
                                            <div class="add_cart">
                                                <button class="button btn-cart" type="button"><span>Add to Cart</span></button>
                                            </div>
                                            <div class="product-detail-bnt"><a href="quick_view.html" class="button detail-bnt"><span>Quick View</span></a>
                                            </div>
                                            <span class="add-to-links"> 
                                                <a href="compare.html" class="link-compare add_to_compare" title="Add to Compare"><span>Add to Compare</span></a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item-info">
                                <div class="info-inner">
                                    <div class="item-title">
                                        <a title="Sample Product" href="product_detail.html"> Sample Product </a>
                                    </div>
                                    <div class="item-content">
                                        <div class="rating">
                                            <div class="ratings">
                                                <div class="rating-box">
                                                    <div style="width:80%" class="rating"></div>
                                                </div>
                                                <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                            </div>
                                        </div>
                                        <div class="item-price">
                                            <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="item-inner">
                        <div class="item-img">
                            <div class="item-img-info">
                                <a class="product-image" title="Sample Product" href="product_detail.html">
                                    <img alt="Sample Product" src="products-images/product10.jpg">
                                </a>
                                <div class="sale-label sale-top-left">sale</div>
                                <div class="item-box-hover">
                                    <div class="box-inner">
                                        <div class="actions">
                                            <div class="add_cart">
                                                <button class="button btn-cart" type="button"><span>Add to Cart</span></button>
                                            </div>
                                            <div class="product-detail-bnt"><a href="quick_view.html" class="button detail-bnt"><span>Quick View</span></a>
                                            </div>
                                            <span class="add-to-links"> 
                                                <a href="compare.html" class="link-compare add_to_compare" title="Add to Compare"><span>Add to Compare</span></a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item-info">
                                <div class="info-inner">
                                    <div class="item-title">
                                        <a title="Sample Product" href="product_detail.html"> Sample Product</a>
                                    </div>
                                    <div class="item-content">
                                        <div class="rating">
                                            <div class="ratings">
                                                <div class="rating-box">
                                                    <div style="width:80%" class="rating"></div>
                                                </div>
                                                <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                            </div>
                                        </div>
                                        <div class="item-price">
                                            <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
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
</section>
<div class="offer-slider wow animated parallax parallax-2">
    <div class="container">
        <ul class="bxslider">
            <li>
                <h2>New Product</h2>
                <h1>Sale up to 30% </h1>
                <p><i><u>11/10/2018-21/10/2018</u></i> </p>
                <li>
                    <h2>Hello hotness!</h2>
                    <h1>Summer collection</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat. Pellentesque viverra vehicula sem ut volutpat. Integer sed arcu massa. </p>
                    <a class="shop-now" href="#">View More</a> 
                </li>
                <li>
                    <h2>New launch</h2>
                    <h1>Designer dresses on sale</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat. Pellentesque viverra vehicula sem ut volutpat. Integer sed arcu massa. </p>
                    <a class="shop-now" href="#">Learn More</a> 
                </li>
            </li>
        </ul>
    </div>
</div>
<section class="featured-pro container wow bounceInUp animated">
    <div class="slider-items-products">
        <div class="new_title center">
            <h2>{{ trans('messeage.pizza') }}</h2>
        </div>
        <div id="featured-slider" class="product-flexslider hidden-buttons">
            <div class="slider-items slider-width-col4 products-grid">
                <div class="item">
                    <div class="item-inner">
                        <div class="item-img">
                            <div class="item-img-info">
                                <a class="product-image" title="Sample Product" href="product_detail.html">
                                    <img alt="Sample Product" src="products-images/product10.jpg">
                                </a>
                                <div class="sale-label sale-top-left">sale</div>
                                <div class="item-box-hover">
                                    <div class="box-inner">
                                        <div class="actions">
                                            <div class="add_cart">
                                                <button class="button btn-cart" type="button"><span>Add to Cart</span></button>
                                            </div>
                                            <div class="product-detail-bnt"><a href="quick_view.html" class="button detail-bnt"><span>Quick View</span></a>
                                            </div>
                                            <span class="add-to-links"> 
                                                <a href="compare.html" class="link-compare add_to_compare" title="Add to Compare"><span>Add to Compare</span></a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item-info">
                                <div class="info-inner">
                                    <div class="item-title">
                                        <a title="Sample Product" href="product_detail.html"> Sample Product </a>
                                    </div>
                                    <div class="item-content">
                                        <div class="rating">
                                            <div class="ratings">
                                                <div class="rating-box">
                                                    <div style="width:80%" class="rating"></div>
                                                </div>
                                                <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                            </div>
                                        </div>
                                        <div class="item-price">
                                            <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="item-inner">
                        <div class="item-img">
                            <div class="item-img-info">
                                <a class="product-image" title="Sample Product" href="product_detail.html">
                                    <img alt="Sample Product" src="products-images/product10.jpg">
                                </a>
                                <div class="sale-label sale-top-left">sale</div>
                                <div class="item-box-hover">
                                    <div class="box-inner">
                                        <div class="actions">
                                            <div class="add_cart">
                                                <button class="button btn-cart" type="button"><span>Add to Cart</span></button>
                                            </div>
                                            <div class="product-detail-bnt"><a href="quick_view.html" class="button detail-bnt"><span>Quick View</span></a>
                                            </div>
                                            <span class="add-to-links"> 
                                                <a href="compare.html" class="link-compare add_to_compare" title="Add to Compare"><span>Add to Compare</span></a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item-info">
                                <div class="info-inner">
                                    <div class="item-title"> <a title="Sample Product" href="product_detail.html"> Sample Product </a> </div>
                                    <div class="item-content">
                                        <div class="rating">
                                            <div class="ratings">
                                                <div class="rating-box">
                                                    <div style="width:80%" class="rating"></div>
                                                </div>
                                                <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                            </div>
                                        </div>
                                        <div class="item-price">
                                            <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
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
    <div class="slider-items-products">
        <div class="new_title center">
            <h2>{{ trans('messeage.cake') }}</h2>
        </div>
        <div id="featured-slider" class="product-flexslider hidden-buttons">
            <div class="slider-items slider-width-col4 products-grid">
                <div class="item">
                    <div class="item-inner">
                        <div class="item-img">
                            <div class="item-img-info">
                                <a class="product-image" title="Sample Product" href="product_detail.html">
                                    <img alt="Sample Product" src="products-images/product10.jpg">
                                </a>
                                <div class="sale-label sale-top-left">sale</div>
                                <div class="item-box-hover">
                                    <div class="box-inner">
                                        <div class="actions">
                                            <div class="add_cart">
                                                <button class="button btn-cart" type="button"><span>Add to Cart</span></button>
                                            </div>
                                            <div class="product-detail-bnt"><a href="quick_view.html" class="button detail-bnt"><span>Quick View</span></a>
                                            </div>
                                            <span class="add-to-links"> 
                                                <a href="compare.html" class="link-compare add_to_compare" title="Add to Compare"><span>Add to Compare</span></a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item-info">
                                <div class="info-inner">
                                    <div class="item-title"> <a title="Sample Product" href="product_detail.html"> Sample Product </a> </div>
                                    <div class="item-content">
                                        <div class="rating">
                                            <div class="ratings">
                                                <div class="rating-box">
                                                    <div style="width:80%" class="rating"></div>
                                                </div>
                                                <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                            </div>
                                        </div>
                                        <div class="item-price">
                                            <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="item-inner">
                        <div class="item-img">
                            <div class="item-img-info">
                                <a class="product-image" title="Sample Product" href="product_detail.html">
                                    <img alt="Sample Product" src="products-images/product10.jpg">
                                </a>
                                <div class="sale-label sale-top-left">sale</div>
                                <div class="item-box-hover">
                                    <div class="box-inner">
                                        <div class="actions">
                                            <div class="add_cart">
                                                <button class="button btn-cart" type="button"><span>Add to Cart</span></button>
                                            </div>
                                            <div class="product-detail-bnt"><a href="quick_view.html" class="button detail-bnt"><span>Quick View</span></a>
                                            </div>
                                            <span class="add-to-links"> 
                                                <a href="compare.html" class="link-compare add_to_compare" title="Add to Compare"><span>Add to Compare</span></a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item-info">
                                <div class="info-inner">
                                    <div class="item-title"> <a title="Sample Product" href="product_detail.html"> Sample Product </a> </div>
                                    <div class="item-content">
                                        <div class="rating">
                                            <div class="ratings">
                                                <div class="rating-box">
                                                    <div style="width:80%" class="rating"></div>
                                                </div>
                                                <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                            </div>
                                        </div>
                                        <div class="item-price">
                                            <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
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
    <div class="slider-items-products">
        <div class="new_title center">
            <h2>{{ trans('messeage.snacks') }}</h2>
        </div>
        <div id="featured-slider" class="product-flexslider hidden-buttons">
            <div class="slider-items slider-width-col4 products-grid">
                <div class="item">
                    <div class="item-inner">
                        <div class="item-img">
                            <div class="item-img-info">
                                <a class="product-image" title="Sample Product" href="product_detail.html">
                                    <img alt="Sample Product" src="products-images/product10.jpg">
                                </a>
                                <div class="sale-label sale-top-left">sale</div>
                                <div class="item-box-hover">
                                    <div class="box-inner">
                                        <div class="actions">
                                            <div class="add_cart">
                                                <button class="button btn-cart" type="button"><span>Add to Cart</span></button>
                                            </div>
                                            <div class="product-detail-bnt"><a href="quick_view.html" class="button detail-bnt"><span>Quick View</span></a>
                                            </div>
                                            <span class="add-to-links"> 
                                                <a href="compare.html" class="link-compare add_to_compare" title="Add to Compare"><span>Add to Compare</span></a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item-info">
                                <div class="info-inner">
                                    <div class="item-title"> <a title="Sample Product" href="product_detail.html"> Sample Product </a> </div>
                                    <div class="item-content">
                                        <div class="rating">
                                            <div class="ratings">
                                                <div class="rating-box">
                                                    <div style="width:80%" class="rating"></div>
                                                </div>
                                                <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                            </div>
                                        </div>
                                        <div class="item-price">
                                            <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="item-inner">
                        <div class="item-img">
                            <div class="item-img-info">
                                <a class="product-image" title="Sample Product" href="product_detail.html">
                                    <img alt="Sample Product" src="products-images/product10.jpg">
                                </a>
                                <div class="sale-label sale-top-left">sale</div>
                                <div class="item-box-hover">
                                    <div class="box-inner">
                                        <div class="actions">
                                            <div class="add_cart">
                                                <button class="button btn-cart" type="button"><span>Add to Cart</span></button>
                                            </div>
                                            <div class="product-detail-bnt"><a href="quick_view.html" class="button detail-bnt"><span>Quick View</span></a>
                                            </div>
                                            <span class="add-to-links"> 
                                                <a href="compare.html" class="link-compare add_to_compare" title="Add to Compare"><span>Add to Compare</span></a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item-info">
                                <div class="info-inner">
                                    <div class="item-title"> <a title="Sample Product" href="product_detail.html"> Sample Product </a> </div>
                                    <div class="item-content">
                                        <div class="rating">
                                            <div class="ratings">
                                                <div class="rating-box">
                                                    <div style="width:80%" class="rating"></div>
                                                </div>
                                                <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                            </div>
                                        </div>
                                        <div class="item-price">
                                            <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
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
</section>
@endsection
