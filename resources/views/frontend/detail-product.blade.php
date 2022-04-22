@extends('frontend.master.layout')
@section('content')
    <!-- MAIN-CONTENT-SECTION START -->
    <section class="main-content-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <!-- BSTORE-BREADCRUMB START -->
                    <div class="bstore-breadcrumb">
                        <a href="index.html">HOMe<span><i class="fa fa-caret-right"></i> </span> </a>
                        <span> <i class="fa fa-caret-right"> </i> </span>
                        <a href="shop-gird.html"> women </a>
                        <span> Faded Short Sleeves T-shirt </span>
                    </div>
                    <!-- BSTORE-BREADCRUMB END -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <!-- SINGLE-PRODUCT-DESCRIPTION START -->
                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-sm-4 col-xs-12">
                            <div class="single-product-view">
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div class="tab-pane active" id="thumbnail_1">
                                        <div class="single-product-image">
                                            <img style="height: 324px; width: 324px;" src={{asset('images/product/'.$detail->image)}} alt="single-product-image" />
                                            <a class="new-mark-box" href="#">new</a>
                                            <a class="fancybox"  href={{asset('images/product/'.$detail->image)}} data-fancybox-group="gallery"><span class="btn large-btn">View larger <i class="fa fa-search-plus"></i></span></a>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="thumbnail_2">
                                        <div class="single-product-image">
                                            <img src={{asset('img/product/sale/3.jpg')}} alt="single-product-image" />
                                            <a class="new-mark-box" href="#">new</a>
                                            <a class="fancybox" href={{asset('img/product/sale/3.jpg')}} data-fancybox-group="gallery"><span class="btn large-btn">View larger <i class="fa fa-search-plus"></i></span></a>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="thumbnail_3">
                                        <div class="single-product-image">
                                            <img src={{asset('img/product/sale/9.jpg')}} alt="single-product-image" />
                                            <a class="new-mark-box" href="#">new</a>
                                            <a class="fancybox" href={{asset('img/product/sale/9.jpg')}} data-fancybox-group="gallery"><span class="btn large-btn">View larger <i class="fa fa-search-plus"></i></span></a>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="thumbnail_4">
                                        <div class="single-product-image">
                                            <img src={{asset('img/product/sale/13.jpg')}} alt="single-product-image" />
                                            <a class="new-mark-box" href="#">new</a>
                                            <a class="fancybox" href={{asset('img/product/sale/13.jpg')}} data-fancybox-group="gallery"><span class="btn large-btn">View larger <i class="fa fa-search-plus"></i></span></a>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="thumbnail_5">
                                        <div class="single-product-image">
                                            <img src={{asset('img/product/sale/7.jpg')}} alt="single-product-image" />
                                            <a class="new-mark-box" href="#">new</a>
                                            <a class="fancybox" href={{asset('img/product/sale/7.jpg')}} data-fancybox-group="gallery"><span class="btn large-btn">View larger <i class="fa fa-search-plus"></i></span></a>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="thumbnail_6">
                                        <div class="single-product-image">
                                            <img src={{asset('img/product/sale/12.jpg')}} alt="single-product-image" />
                                            <a class="new-mark-box" href="#">new</a>
                                            <a class="fancybox" href={{asset('img/product/sale/12.jpg')}} data-fancybox-group="gallery"><span class="btn large-btn">View larger <i class="fa fa-search-plus"></i></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="select-product">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs select-product-tab bxslider">
                                    <li class="active">
                                        <a href="#thumbnail_1" data-toggle="tab"><img  src={{asset('images/product/'.$detail->image)}} alt="pro-thumbnail" /></a>
                                    </li>
                                    <li>
                                        <a href="#thumbnail_2" data-toggle="tab"><img src={{asset('img/product/sidebar_product/2.jpg')}} alt="pro-thumbnail" /></a>
                                    </li>
                                    <li>
                                        <a href="#thumbnail_3" data-toggle="tab"><img src={{asset('img/product/sidebar_product/3.jpg')}} alt="pro-thumbnail" /></a>
                                    </li>
                                    <li>
                                        <a href="#thumbnail_4" data-toggle="tab"><img src={{asset('img/product/sidebar_product/4.jpg')}} alt="pro-thumbnail" /></a>
                                    </li>
                                    <li>
                                        <a href="#thumbnail_5" data-toggle="tab"><img src={{asset('img/product/sidebar_product/5.jpg')}} alt="pro-thumbnail" /></a>
                                    </li>
                                    <li>
                                        <a href="#thumbnail_6" data-toggle="tab"><img src={{asset('img/product/sidebar_product/6.jpg')}} alt="pro-thumbnail" /></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-8 col-xs-12">
                            <div class="single-product-descirption">
                                <h2><?= $detail->name ?></h2>
                                <div class="single-product-social-share">
                                    <ul>
                                        <li><a href="#" class="twi-link"><i class="fa fa-twitter"></i>Tweet</a></li>
                                        <li><a href="#" class="fb-link"><i class="fa fa-facebook"></i>Share</a></li>
                                        <li><a href="#" class="g-plus-link"><i class="fa fa-google-plus"></i>Google+</a></li>
                                        <li><a href="#" class="pin-link"><i class="fa fa-pinterest"></i>Pinterest</a></li>
                                    </ul>
                                </div>
                                <div class="single-product-review-box">
                                    <div class="rating-box">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-empty"></i>
                                    </div>
                                    <div class="read-reviews">
                                        <a href="#">Read reviews (1)</a>
                                    </div>
                                    <div class="write-review">
                                        <a href="#">Write a review</a>
                                    </div>
                                </div>
                                <div class="single-product-condition">
                                    <p>Trạng thái: <span>Sản phẩm <?= ($detail->new === 1) ? 'mới':'giảm giá' ?></span></p>
                                </div>
                                @php
                                    if($detail->new == 2){
                                        $discount = getPriceSale($detail->price,$detail->getSales->value);
                                        $price = $detail->price;
                                    }else{
                                        $discount = $detail->price;
                                        $price = 0;
                                    }
                                @endphp
                                <div class="single-product-price ">
                                    <h2 class="products-price"><?= number_format($discount) ?> đồng</h2>
                                </div>
                                <div class="price-box">
                                    <span class="old-price"><?= ($price != 0) ? number_format($price).' đồng':'' ?></span>
                                </div>
                                <div class="single-product-desc">
                                    <p><?= $detail->description ?></p>
                                    <div class="product-in-stock">
                                        <?php $amount = $detail->amount;?>
                                        <p><?= $amount ?> Items<span><?= ($amount >0) ?  'In stock':'Out stock'?></span></p>
                                    </div>
                                </div>
                                <div class="single-product-info">
                                    <a href="#"><i class="fa fa-envelope"></i></a>
                                    <a href="#"><i class="fa fa-print"></i></a>
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                </div>
                                <div class="single-product-quantity">
                                    <p class="small-title">Quantity</p>
                                    <div class="cart-quantity">
                                        <div class="cart-plus-minus-button single-qty-btn">
                                            <input class="cart-plus-minus sing-pro-qty" id="quantity"  type="number"  value="1" min="1" max="10" name="quantity" >
                                        </div>
                                    </div>
                                </div>
{{--                                <div class="single-product-size">--}}
{{--                                    <p class="small-title">Size </p>--}}
{{--                                    <select name="product-size" id="product-size">--}}
{{--                                        <option value="">S</option>--}}
{{--                                        <option value="">M</option>--}}
{{--                                        <option value="">L</option>--}}
{{--                                    </select>--}}
{{--                                </div>--}}
                                <div class="single-product-add-cart">
                                    <button type="button" class="add-cart-text"  data-url="{{route('addToCart',['id'=>$detail->id])}}"  title="Thêm giỏ hàng">Thêm giỏ hàng</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- SINGLE-PRODUCT-DESCRIPTION END -->
                    <!-- SINGLE-PRODUCT INFO TAB START -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="product-more-info-tab">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs more-info-tab">
                                    <li class="active"><a href="#moreinfo" data-toggle="tab">Mô tả</a></li>
                                    <li><a href="#datasheet" data-toggle="tab">Chi tiết</a></li>
                                    <li><a href="#review" data-toggle="tab">Đánh giá</a></li>
                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div class="tab-pane active" id="moreinfo">
                                        <div class="tab-description">
                                            <p><?= $detail->description ?></p>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="datasheet">
                                        <div class="deta-sheet">
                                            <table class="table-data-sheet">
                                                <tbody>
                                                <tr class="odd">
                                                    <td>Compositions</td>
                                                    <td>Cotton</td>
                                                </tr>
                                                <tr class="even">
                                                    <td class="td-bg">Styles</td>
                                                    <td class="td-bg">Casual</td>
                                                </tr>
                                                <tr class="odd">
                                                    <td>Properties</td>
                                                    <td>Short Sleeve</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="review">
                                        <div class="row tab-review-row">
                                            <div class="col-xs-5 col-sm-4 col-md-4 col-lg-3 padding-5">
                                                <div class="tab-rating-box">
                                                    <span>Grade</span>
                                                    <div id="rateYo"></div>
                                                    <div class="review-author-info">
                                                        <strong>write A REVIEW</strong>
                                                        <span>06/22/2015</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-7 col-sm-8 col-md-8 col-lg-9 padding-5">
                                                <div class="write-your-review">
                                                    <p><strong>write A REVIEW</strong></p>
                                                    <p>write A REVIEW</p>
                                                    <span class="usefull-comment">Was this comment useful to you? <span>Yes</span><span>No</span></span>
                                                    <a href="#">Report abuse </a>
                                                </div>
                                            </div>
                                            <a href="#" class="write-review-btn">Write your review!</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- SINGLE-PRODUCT INFO TAB END -->
                    <!-- RELATED-PRODUCTS-AREA START -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="left-title-area">
                                <h2 class="left-title">related products</h2>
                            </div>
                        </div>
                        <div class="related-product-area featured-products-area">
                            <div class="col-sm-12">
                                <div class=" row">
                                    <!-- RELATED-CAROUSEL START -->
                                    <div class="related-product">
                                        <!-- SINGLE-PRODUCT-ITEM START -->
                                        <div class="item">
                                            <div class="single-product-item">
                                                <div class="product-image">
                                                    <a href="#"><img src={{asset('img/product/sale/3.jpg')}} alt="product-image" /></a>
                                                </div>
                                                <div class="product-info">
                                                    <div class="customar-comments-box">
                                                        <div class="rating-box">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-empty"></i>
                                                        </div>
                                                        <div class="review-box">
                                                            <span>1 Review(s)</span>
                                                        </div>
                                                    </div>
                                                    <a href="#">Faded Short T-sh...</a>
                                                    <div class="price-box">
                                                        <span class="price">$16.51</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- SINGLE-PRODUCT-ITEM END -->
                                        <!-- SINGLE-PRODUCT-ITEM START -->
                                        <div class="item">
                                            <div class="single-product-item">
                                                <div class="product-image">
                                                    <a href="#"><img src={{asset('img/product/sale/1.jpg')}} alt="product-image" /></a>
                                                </div>
                                                <div class="product-info">
                                                    <div class="customar-comments-box">
                                                        <div class="rating-box">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <div class="review-box">
                                                            <span>1 Review(s)</span>
                                                        </div>
                                                    </div>
                                                    <a href="#">Blouse</a>
                                                    <div class="price-box">
                                                        <span class="price">$22.95</span>
                                                        <span class="old-price">$27.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- SINGLE-PRODUCT-ITEM END -->
                                        <!-- SINGLE-PRODUCT-ITEM START -->
                                        <div class="item">
                                            <div class="single-product-item">
                                                <div class="product-image">
                                                    <a href="#"><img src={{asset('img/product/sale/9.jpg')}} alt="product-image" /></a>
                                                </div>
                                                <div class="product-info">
                                                    <div class="customar-comments-box">
                                                        <div class="rating-box">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-empty"></i>
                                                            <i class="fa fa-star-half-empty"></i>
                                                        </div>
                                                        <div class="review-box">
                                                            <span>1 Review(s)</span>
                                                        </div>
                                                    </div>
                                                    <a href="#">Printed Dress</a>
                                                    <div class="price-box">
                                                        <span class="price">$23.40</span>
                                                        <span class="old-price">$26.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- SINGLE-PRODUCT-ITEM END -->
                                        <!-- SINGLE-PRODUCT-ITEM START -->
                                        <div class="item">
                                            <div class="single-product-item">
                                                <div class="product-image">
                                                    <a href="#"><img src={{asset('img/product/sale/5.jpg')}} alt="product-image" /></a>
                                                    <div class="overlay-content">
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="customar-comments-box">
                                                        <div class="rating-box">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-empty"></i>
                                                        </div>
                                                        <div class="review-box">
                                                            <span>1 Review(s)</span>
                                                        </div>
                                                    </div>
                                                    <a href="#">Printed Dress</a>
                                                    <div class="price-box">
                                                        <span class="price">$50.99</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- SINGLE-PRODUCT-ITEM END -->
                                        <!-- SINGLE-PRODUCT-ITEM START -->
                                        <div class="item">
                                            <div class="single-product-item">
                                                <div class="product-image">
                                                    <a href="#"><img src={{asset('img/product/sale/12.jpg')}} alt="product-image" /></a>
                                                </div>
                                                <div class="product-info">
                                                    <div class="customar-comments-box">
                                                        <div class="rating-box">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-empty"></i>
                                                            <i class="fa fa-star-half-empty"></i>
                                                        </div>
                                                        <div class="review-box">
                                                            <span>1 Review(s)</span>
                                                        </div>
                                                    </div>
                                                    <a href="#">Printed Summer Dr...</a>
                                                    <div class="price-box">
                                                        <span class="price">$28.98</span>
                                                        <span class="old-price">$30.51</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- SINGLE-PRODUCT-ITEM END -->
                                        <!-- SINGLE-PRODUCT-ITEM START -->
                                        <div class="item">
                                            <div class="single-product-item">
                                                <div class="product-image">
                                                    <a href="#"><img src={{asset('img/product/sale/13.jpg')}} alt="product-image" /></a>
                                                </div>
                                                <div class="product-info">
                                                    <div class="customar-comments-box">
                                                        <div class="rating-box">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <div class="review-box">
                                                            <span>1 Review(s)</span>
                                                        </div>
                                                    </div>
                                                    <a href="#">Printed Summer</a>
                                                    <div class="price-box">
                                                        <span class="price">$30.50</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- SINGLE-PRODUCT-ITEM END -->
                                        <!-- SINGLE-PRODUCT-ITEM START -->
                                        <div class="item">
                                            <div class="single-product-item">
                                                <div class="product-image">
                                                    <a href="#"><img src={{asset('img/product/sale/7.jpg')}} alt="product-image" /></a>
                                                </div>
                                                <div class="product-info">
                                                    <div class="customar-comments-box">
                                                        <div class="rating-box">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-empty"></i>
                                                            <i class="fa fa-star-half-empty"></i>
                                                        </div>
                                                        <div class="review-box">
                                                            <span>1 Review(s)</span>
                                                        </div>
                                                    </div>
                                                    <a href="#">Printed Chiffon Dr...</a>
                                                    <div class="price-box">
                                                        <span class="price">$16.40</span>
                                                        <span class="old-price">$20.50</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- SINGLE-PRODUCT-ITEM END -->
                                        <!-- SINGLE-PRODUCT-ITEM START -->
                                        <div class="item">
                                            <div class="single-product-item">
                                                <div class="product-image">
                                                    <a href="#"><img src={{asset('img/product/sale/11.jpg')}} alt="product-image" /></a>
                                                </div>
                                                <div class="product-info">
                                                    <div class="customar-comments-box">
                                                        <div class="rating-box">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <div class="review-box">
                                                            <span>1 Review(s)</span>
                                                        </div>
                                                    </div>
                                                    <a href="#">Printed Dress</a>
                                                    <div class="price-box">
                                                        <span class="price">$26.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- SINGLE-PRODUCT-ITEM END -->
                                        <!-- SINGLE-PRODUCT-ITEM START -->
                                        <div class="item">
                                            <div class="single-product-item">
                                                <div class="product-image">
                                                    <a href="#"><img src={{asset('img/product/sale/10.jpg')}} alt="product-image" /></a>
                                                </div>
                                                <div class="product-info">
                                                    <div class="customar-comments-box">
                                                        <div class="rating-box">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-empty"></i>
                                                            <i class="fa fa-star-half-empty"></i>
                                                        </div>
                                                        <div class="review-box">
                                                            <span>1 Review(s)</span>
                                                        </div>
                                                    </div>
                                                    <a href="#">Printed Dress</a>
                                                    <div class="price-box">
                                                        <span class="price">$26.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- SINGLE-PRODUCT-ITEM END -->
                                        <!-- SINGLE-PRODUCT-ITEM START -->
                                        <div class="item">
                                            <div class="single-product-item">
                                                <div class="product-image">
                                                    <a href="#"><img src={{asset('img/product/sale/2.jpg')}} alt="product-image" /></a>
                                                </div>
                                                <div class="product-info">
                                                    <div class="customar-comments-box">
                                                        <div class="rating-box">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <div class="review-box">
                                                            <span>1 Review(s)</span>
                                                        </div>
                                                    </div>
                                                    <a href="#">Blouse</a>
                                                    <div class="price-box">
                                                        <span class="price">$27.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- SINGLE-PRODUCT-ITEM END -->
                                        <!-- SINGLE-PRODUCT-ITEM START -->
                                        <div class="item">
                                            <div class="single-product-item">
                                                <div class="product-image">
                                                    <a href="#"><img src={{asset('img/product/sale/4.jpg')}} alt="product-image" /></a>
                                                </div>
                                                <div class="product-info">
                                                    <div class="customar-comments-box">
                                                        <div class="rating-box">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-empty"></i>
                                                        </div>
                                                        <div class="review-box">
                                                            <span>1 Review(s)</span>
                                                        </div>
                                                    </div>
                                                    <a href="#">Faded Short Sle...</a>
                                                    <div class="price-box">
                                                        <span class="price">$16.51</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- SINGLE-PRODUCT-ITEM END -->
                                        <!-- SINGLE-PRODUCT-ITEM START -->
                                        <div class="item">
                                            <div class="single-product-item">
                                                <div class="product-image">
                                                    <a href="#"><img src={{asset('img/product/sale/6.jpg')}} alt="product-image" /></a>
                                                </div>
                                                <div class="product-info">
                                                    <div class="customar-comments-box">
                                                        <div class="rating-box">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <div class="review-box">
                                                            <span>1 Review(s)</span>
                                                        </div>
                                                    </div>
                                                    <a href="#">Printed Chiffon Dr...</a>
                                                    <div class="price-box">
                                                        <span class="price">$16.40</span>
                                                        <span class="old-price">$20.50</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- SINGLE-PRODUCT-ITEM END -->
                                        <!-- SINGLE-PRODUCT-ITEM START -->
                                        <div class="item">
                                            <div class="single-product-item">
                                                <div class="product-image">
                                                    <a href="#"><img src={{asset('img/product/sale/8.jpg')}} alt="product-image" /></a>
                                                </div>
                                                <div class="product-info">
                                                    <div class="customar-comments-box">
                                                        <div class="rating-box">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-empty"></i>
                                                        </div>
                                                        <div class="review-box">
                                                            <span>1 Review(s)</span>
                                                        </div>
                                                    </div>
                                                    <a href="#">Printed Dress</a>
                                                    <div class="price-box">
                                                        <span class="price">$26.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- SINGLE-PRODUCT-ITEM END -->
                                        <!-- SINGLE-PRODUCT-ITEM START -->
                                    </div>
                                    <!-- RELATED-CAROUSEL END -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- RELATED-PRODUCTS-AREA END -->
                </div>
                <!-- RIGHT SIDE BAR START -->
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <!-- SINGLE SIDE BAR START -->
                    <div class="single-product-right-sidebar">
                        <h2 class="left-title">Sản phẩm đã xem</h2>
                        <ul >
                            @if(session('view'))
                            <?php foreach (session('view') as $view) : ?>
                            <li>
                                <a href="{{route('home.detail-product',$view['id'])}}"><img style="height: 80px ; width: 80px" src={{asset('images/product/'.$view['image'])}} alt="" /></a>
                                <div class="r-sidebar-pro-content">
                                    <h5><a href="{{route('home.detail-product',$view['id'])}}"><?= $view['name'] ?></a></h5>
                                    <p><?= $view['description'] ?></p>
                                </div>
                            </li>
                                <?php endforeach?>
                            @else
                            <li>Không có sản phẩm</li>
                            @endif
                        </ul>
                    </div>
                    <!-- SINGLE SIDE BAR END -->
                    <!-- SINGLE SIDE BAR START -->
                    <div class="single-product-right-sidebar clearfix">
                        <h2 class="left-title">Tags </h2>
                        <div class="category-tag">
                            <a href="#">fashion</a>
                            <a href="#">handbags</a>
                            <a href="#">women</a>
                            <a href="#">men</a>
                            <a href="#">kids</a>
                            <a href="#">New</a>
                            <a href="#">Accessories</a>
                            <a href="#">clothing</a>
                            <a href="#">New</a>
                        </div>
                    </div>
                    <!-- SINGLE SIDE BAR END -->
                    <!-- SINGLE SIDE BAR START -->
                    <div class="single-product-right-sidebar">
                        <div class="slider-right zoom-img">
                            <a href="#"><img class="img-responsive" src={{asset('img/product/cms11.jpg')}} alt="sidebar left" /></a>
                        </div>
                    </div>
                </div>
                <!-- SINGLE SIDE BAR END -->
            </div>
        </div>
    </section>
    <!-- MAIN-CONTENT-SECTION END -->
    <script>
        $(".add-cart-text").click(function (event) {
            event.preventDefault();
            let urls = $(this).data('url');
            let qty = $("#quantity").val();
            let price = ($(".products-price").text());
            $.ajax({
                type : "POST",
                url : urls,
                dataType : 'json',
                data : {
                    _token: '{{ csrf_token() }}',
                    'quantity': qty,
                    'price' : price
                },
                success : function (item) {
                    alertify.success(item.message);
                    $(".shopping-cart").load($(location).attr('href') +" .shopping-cart");
                },
                error : function () {

                }
            })
        })
        var stock = $(".product-in-stock span").text();
                if (stock === 'Out stock') {
                    $(".product-in-stock span").css("background-color", "red","pointer-events","none");
                    $(".add-cart-text").css("pointer-events","none").text('Hết hàng');
                }
    </script>

@endsection