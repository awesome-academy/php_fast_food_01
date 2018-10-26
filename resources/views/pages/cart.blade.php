@extends('master')   
@section('content') 
<section class="main-container col1-layout wow bounceInUp animated">
    <div class="main container">
        <div class="col-main">
            <div class="cart">
                <div class="page-title">
                    <h2>{{  trans('messeage.cart') }}</h2>
                </div>
                <div class="table-responsive">
                    <form method="post" action="#">
                        <input type="hidden" value="Vwww7itR3zQFe86m" name="form_key">
                        <fieldset>
                            <table class="data-table cart-table" id="shopping-cart-table">
                                <thead>
                                    <tr class="first last">
                                        <th rowspan="1">&nbsp;</th>
                                        <th rowspan="1"><span class="nobr">{{  trans('messeage.product_name') }}</span></th>
                                        <th colspan="1" class="a-center"><span class="nobr">{{  trans('messeage.price') }}</span></th>
                                        <th class="a-center " rowspan="1">{{  trans('messeage.quantity') }}</th>
                                        <th colspan="1" class="a-center">{{  trans('messeage.total') }}</th>
                                        <th class="a-center" rowspan="1">&nbsp;</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr class="first last">
                                        <td class="a-right last" colspan="8">
                                            <a href="index"><button onclick="setLocation('http://magento.magikthemes.com/magikClassic/womens.html')" class="button btn-continue" title="Continue Shopping" type="button"><span>{{  trans('messeage.continue_shopping') }}</span></button></a>
                                            <a href="payment"><button class="button btn-update" title="Payment" title="Payment" value="payment" name="update_cart_action" type="button"><span>{{  trans('messeage.payment') }}</span></button></a>
                                            <a href="#t"><button class="button btn-update" title="Update Cart" value="update_qty" name="update_cart_action" type="submit"><span>{{  trans('messeage.update_cart') }}</span></button></a>
                                            <a href="#"><button  id="empty_cart_button" class="button" title="Clear Cart" value="empty_cart" name="update_cart_action" type="submit"><span>{{  trans('messeage.clear_cart') }}</span></button></a>    
                                        </td>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <tr class="first odd">
                                        <td class="image"><a class="product-image" title="Sample Product" href="food_details"><img width="75" alt="Sample Product" src="products-images/01.jpg"></a></td>
                                        <td><h2 class="product-name"> <a href="product_detail.html">Sample Product</a> </h2></td>
                                        <td class="a-center hidden-table"><span class="cart-price"> <span class="price">$29.95</span> </span></td>
                                        <td class="a-center movewishlist"><input maxlength="12" class="input-text qty" title="Qty" size="4" value="1" name="cart[10522][qty]"></td>
                                        <td class="a-center movewishlist"><span class="cart-price"> <span class="price">$29.95</span> </span></td>
                                        <td class="a-center last"><a class="button remove-item" title="Remove item" href="#"><span><span>Remove item</span></span></a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
