@extends('master')   
@section('content')   
<!-- Breadcrumbs -->
<div class="breadcrumbs bounceInUp animated">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <ul>
                    <li class="home">
                        <a title="Go to Home Page" href="index.html">{{ trans('messeage.home') }}</a>
                        <span>»</span>
                    </li>
                    <li class="">
                        <a title="Go to Home Page" href="grid.html">{{ trans('messeage.pizza') }}</a>
                        <span>»</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumbs End --> 
<!-- Main Container -->
<section class="main-container col2-left-layout bounceInUp animated">
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h2>Tops & Tees</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-main col-sm-9 col-sm-push-3">
                <article class="col-main">
                    <div class="category-description std">
                        <div class="slider-items-products">
                            <div id="category-desc-slider" class="product-flexslider hidden-buttons">
                                <div class="slider-items slider-width-col1 owl-carousel owl-theme"> 
                                    <!-- Item -->
                                    <div class="item">
                                        <a href="#"><img alt="" src="images/women_banner.png"></a>
                                        <div class="cat-img-title cat-bg cat-box">
                                            <h2 class="cat-heading"><strong>New Fashion 2015</strong><br></h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus diam arcu.</p>
                                        </div>
                                    </div>
                                    <!-- End Item --> 
                                    <!-- Item -->
                                    <div class="item"> 
                                        <a href="#x"><img alt="" src="images/women_banner1.png"></a>
                                    </div>
                                    <!-- End Item --> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="toolbar">
                        <div class="sorter">
                            <div class="view-mode"> 
                                <span title="Grid" class="button button-active button-grid">&nbsp;</span>
                                <a href="list" title="List" class="button-list">&nbsp;</a> 
                            </div>
                        </div>
                        <div class="pager">
                            <div id="limiter">
                                <label>View: </label>
                                <ul>
                                    <li><a href="#">15<span class="right-arrow"></span></a>
                                        <ul>
                                            <li><a href="#">20</a></li>
                                            <li><a href="#">30</a></li>
                                            <li><a href="#">35</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="pages">
                                <label>{{ trans('messeage.page') }}: </label>
                                <ul class="pagination">
                                    <li><a href="#">&laquo;</a></li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li><a href="#">&raquo;</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="category-products">
                        <ul class="products-grid">
                            <li class="item col-lg-4 col-md-3 col-sm-4 col-xs-6">
                                <div class="item-inner">
                                    <div class="item-img">
                                        <div class="item-img-info"> <a class="product-image" title="Sample Product" href="product_detail.html"> <img alt="Sample Product" src="products-images/01.jpg"> </a>
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
                                                    <div class="price-box"> 
                                                        <span  class="regular-price"> <span class="price">$125.00</span> </span> 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="item col-lg-4 col-md-3 col-sm-4 col-xs-6">
                                <div class="item-inner">
                                    <div class="item-img">
                                        <div class="item-img-info"> <a class="product-image" title="Sample Product" href="product_detail.html"> <img alt="Sample Product" src="products-images/01.jpg"> </a>
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
                                                    <div class="price-box"> 
                                                        <span  class="regular-price"> <span class="price">$125.00</span> </span> 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </article>
                <!--  ///*///======    End article  ========= //*/// --> 
            </div>
            <div class="col-left sidebar col-sm-3 col-xs-12 col-sm-pull-9">
                <aside class="col-left sidebar">
                    <div class="side-nav-categories">
                        <div class="block-title">{{ trans('messeage.category') }}</div>
                        <!--block-title--> 
                        <!-- BEGIN BOX-CATEGORY -->
                        <div class="box-content box-category">
                            <ul>
                                <li><a class="active" href="#">{{ trans('messeage.pizza') }}</a> </li>
                                <li><a href="#">{{ trans('messeage.cake') }}</a></li>
                                <li class="last"> <a href="#">{{ trans('messeage.snacks') }}</a> </li>
                            </ul>
                        </div>
                        <!--box-content box-category--> 
                    </div>     
                </aside>
            </div>
        </div>
    </div>
</div>
@endsection
