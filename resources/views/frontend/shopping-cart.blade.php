@extends('frontend.master.layout')
@section('content')
    <!-- MAIN-CONTENT-SECTION START -->
    <section class="main-content-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <!-- BSTORE-BREADCRUMB START -->
                    <div class="bstore-breadcrumb">
                        <a href="index.html">HOMe</a>
                        <span><i class="fa fa-caret-right	"></i></span>
                        <span>Your shopping cart</span>
                    </div>
                    <!-- BSTORE-BREADCRUMB END -->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <!-- SHOPPING-CART SUMMARY START -->
                    <h2 class="page-title">Shopping-cart summary <span class="shop-pro-item">Your shopping cart contains: 2 products</span></h2>
                    <!-- SHOPPING-CART SUMMARY END -->
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <!-- SHOPING-CART-MENU START -->
                    <div class="shoping-cart-menu">
                        <ul class="step">
                            <li class="step-current first">
                                <span>01. Summary</span>
                            </li>
                            <li class="step-todo second">
                                <span>02. Sign in</span>
                            </li>
                            <li class="step-todo third">
                                <span>03. Address</span>
                            </li>
                            <li class="step-todo four">
                                <span>04. Shipping</span>
                            </li>
                            <li class="step-todo last" id="step_end">
                                <span>05. Payment</span>
                            </li>
                        </ul>
                    </div>
                    <!-- SHOPING-CART-MENU END -->
                    <!-- CART TABLE_BLOCK START -->
                    <div class="table-responsive">
                        <!-- TABLE START -->
                        <!-- SINGLE CART_ITEM START -->
                        <?php if(session('cart')): ?>
                        @php $totals = 0;@endphp
                        <table class="table table-bordered" id="cart-summary">
                            <!-- TABLE HEADER START -->
                            <thead>
                            <tr>
                                <th class="cart-product">{{__('Sản Phẩm')}}</th>
                                <th class="cart-description">{{__('Thông tin sản phẩm')}}</th>
                                <th class="cart-avail text-center">{{__('Trạng thái')}}</th>
                                <th class="cart-unit text-right">{{__('Giá')}}</th>
                                <th class="cart_quantity text-center">{{__('Số lượng')}}</th>
                                <th class="cart-delete">&nbsp;</th>
                                <th class="cart-total text-right">{{__('Tổng tiền')}}</th>
                            </tr>
                            </thead>
                            <!-- TABLE HEADER END -->
                            <!-- TABLE BODY START -->
                            <tbody>
                            <?php foreach (session('cart') as $key => $order) : ?>
                            @php $totals += (int) $order['quantity'] * (int) $order['price'] @endphp
                            <tr>
                                <td class="cart-product">
                                    <a href="{{route('home.detail-product',['id'=>$key])}}"><img alt="Blouse" src="{{asset('images/product/'.$order['image'])}}"></a>
                                </td>
                                <td class="cart-description">
                                    <p class="product-name"><a href="#">{{__($order['name'])}}</a></p>
                                    <small>SKU : demo_1</small>
                                    <small><a href="#">Size : S, Color : Orange</a></small>
                                </td>
                                <td class="cart-avail"><span class="label label-success">In stock</span></td>
                                <td class="cart-unit">
                                    <ul class="price text-right">
                                        <li class="price">{{__(currency_format($totals))}}</li>
                                    </ul>
                                </td>
                                <td class="cart_quantity text-center">
                                    <div class="cart-plus-minus-button">
                                        <input class="cart-plus-minus" type="text" name="qtybutton" value="{{$order['quantity']}}">
                                    </div>
                                </td>
                                <td class="cart-delete text-center">
											<span>
												<a href="#" class="cart_quantity_delete" title="Delete"><i class="fa fa-trash-o"></i></a>
											</span>
                                </td>
                                <td class="cart-total">
                                    <span class="price">{{__(currency_format($totals))}}</span>
                                </td>
                            </tr>
                            <?php endforeach ?>

                            <!-- SINGLE CART_ITEM END -->
                            <!-- SINGLE CART_ITEM END -->
                            </tbody>
                            <!-- TABLE BODY END -->
                            <!-- TABLE FOOTER START -->
                            <tfoot>
                            <tr class="cart-total-price">
                                <td class="cart_voucher" colspan="3" rowspan="4"></td>
                                <td class="text-right" colspan="3">Total products (tax excl.)</td>
                                <td id="total_product" class="price" colspan="1">{{__(currency_format($totals))}}</td>
                            </tr>
                            <tr>
                                <td class="text-right" colspan="3">Total shipping</td>
                                <td id="total_shipping" class="price" colspan="1">$5.00</td>
                            </tr>
                            <tr>
                                <td class="text-right" colspan="3">Total vouchers (tax excl.)</td>
                                <td class="price" colspan="1">$0.00</td>
                            </tr>
                            <tr>
                                <td class="total-price-container text-right" colspan="3">
                                    <span>Total</span>
                                </td>
                                <td id="total-price-container" class="price" colspan="1">
                                    <span id="total-price">$76.46</span>
                                </td>
                            </tr>
                            </tfoot>
                            <!-- TABLE FOOTER END -->
                        </table>
                        <?php else :?>
                        <p>Không có sản phẩm nào</p>
                    <?php endif ?>
                        <!-- TABLE END -->
                    </div>
                    <!-- CART TABLE_BLOCK END -->
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="first_item primari-box mycartaddress-info">
                        <!-- SINGLE ADDRESS START -->
                        <ul class="address">
                            <li>
                                <h3 class="page-subheading box-subheading">
                                    Delivery address (BootExperts Office)
                                </h3>
                            </li>
                            <li><span class="address_name">BootExperts</span></li>
                            <li><span class="address_company">Web development Company</span></li>
                            <li><span class="address_address1">Bonossri</span></li>
                            <li><span class="address_address2">D-Block</span></li>
                            <li><span class="">Rampura</span></li>
                            <li><span class="">Dhaka</span></li>
                            <li><span class="address_phone">+880 1735161598</span></li>
                            <li><span class="address_phone_mobile">+880 1975161598</span></li>
                        </ul>
                        <!-- SINGLE ADDRESS END -->
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="second_item primari-box mycartaddress-info">
                        <!-- SINGLE ADDRESS START -->
                        <ul class="address">
                            <li>
                                <h3 class="page-subheading box-subheading">
                                    Invoice address (BootExperts Home)
                                </h3>
                            </li>
                            <li><span class="address_name">BootExperts</span></li>
                            <li><span class="address_company">Web development Company</span></li>
                            <li><span class="address_address1">Dhaka</span></li>
                            <li><span class="address_address2">Bonossri</span></li>
                            <li><span class="">Dhaka-1205</span></li>
                            <li><span class="">Rampura</span></li>
                            <li><span class="address_phone">+880 1735161598</span></li>
                            <li><span class="address_phone_mobile">+880 1975161598</span></li>
                        </ul>
                        <!-- SINGLE ADDRESS END -->
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <!-- RETURNE-CONTINUE-SHOP START -->
                    <div class="returne-continue-shop">
                        <a href="index.html" class="continueshoping"><i class="fa fa-chevron-left"></i>Continue shopping</a>
                        <a href="checkout-signin.html" class="procedtocheckout">Proceed to checkout<i class="fa fa-chevron-right"></i></a>
                    </div>
                    <!-- RETURNE-CONTINUE-SHOP END -->
                </div>
            </div>
        </div>
    </section>
    <!-- MAIN-CONTENT-SECTION END -->
@endsection