@extends('frontend.master.layout')
@section('content')
    <!-- MAIN-CONTENT-SECTION START -->
    <section class="main-content-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <!-- BSTORE-BREADCRUMB START -->
                    <div class="bstore-breadcrumb">
                        <a href="{{route('frontend.home')}}">HOMe</a>
                        <span><i class="fa fa-caret-right"></i></span>
                        <span>Danh mục</span>
                    </div>
                    <!-- BSTORE-BREADCRUMB END -->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <!-- PRODUCT-LEFT-SIDEBAR START -->
                    <div class="product-left-sidebar">
                        <h2 class="left-title pro-g-page-title">Catalog</h2>
                        <!-- SINGLE SIDEBAR ENABLED FILTERS START -->
                        <div class="product-single-sidebar">
                            <span class="sidebar-title">ENABLED FILTERS:</span>
                            <ul class="filtering-menu">
                                <li>
                                    Categories: Dresses
                                    <a href="#"><i class="fa fa-remove"></i></a>
                                </li>
                                <li>
                                    Avaiale: In stock
                                    <a href="#"><i class="fa fa-remove"></i></a>
                                </li>
                                <li>
                                    Categories: Dresses
                                    <a href="#"><i class="fa fa-remove"></i></a>
                                </li>
                            </ul>
                        </div>
                        <!-- SINGLE SIDEBAR ENABLED FILTERS END -->
                        <!-- SINGLE SIDEBAR CATEGORIES START -->
                        <div class="product-single-sidebar">
                            <span class="sidebar-title">Categories</span>
                            <ul>
                                <li>
                                    <label class="cheker">
                                        <input type="checkbox" name="categories"/>
                                        <span></span>
                                    </label>
                                    <a href="#">Tops<span> (12)</span></a>
                                </li>
                                <li>
                                    <label class="cheker">
                                        <input type="checkbox" name="categories"/>
                                        <span></span>
                                    </label>
                                    <a href="#">Dresses<span> (13)</span></a>
                                </li>
                            </ul>
                        </div>
                        <!-- SINGLE SIDEBAR CATEGORIES END -->
                        <!-- SINGLE SIDEBAR AVAILABILITY START -->
                        <div class="product-single-sidebar">
                            <span class="sidebar-title">Availability</span>
                            <ul>
                                <li>
                                    <label class="cheker">
                                        <input type="checkbox" name="availability"/>
                                        <span></span>
                                    </label>
                                    <a href="#">In stock<span> (13)</span></a>
                                </li>
                            </ul>
                        </div>
                        <!-- SINGLE SIDEBAR AVAILABILITY END -->
                        <!-- SINGLE SIDEBAR CONDITION START -->
                        <div class="product-single-sidebar">
                            <span class="sidebar-title">Condition</span>
                            <ul>
                                <li>
                                    <label class="cheker">
                                        <input type="checkbox" name="condition"/>
                                        <span></span>
                                    </label>
                                    <a href="#">new<span> (13)</span></a>
                                </li>
                            </ul>
                        </div>
                        <!-- SINGLE SIDEBAR CONDITION END -->
                        <!-- SINGLE SIDEBAR MANUFACTURER START -->
                        <div class="product-single-sidebar">
                            <span class="sidebar-title">Manufacturer</span>
                            <ul>
                                <li>
                                    <label class="cheker">
                                        <input type="checkbox" name="manufacturer"/>
                                        <span></span>
                                    </label>
                                    <a href="#">Fashion Manufacturer<span> (13)</span></a>
                                </li>
                            </ul>
                        </div>
                        <!-- SINGLE SIDEBAR MANUFACTURER END -->
                        <!-- SINGLE SIDEBAR PRICE START -->
                        <div class="product-single-sidebar">
                            <span class="sidebar-title">Price</span>
                            <ul>
                                <li>
                                    <label><strong>Range:</strong><input type="text" id="slidevalue" /></label>
                                </li>
                                <li>
                                    <div id="price-range"></div>
                                </li>
                            </ul>
                        </div>
                        <!-- SINGLE SIDEBAR PRICE END -->
                        <!-- SINGLE SIDEBAR SIZE START -->
                        <div class="product-single-sidebar">
                            <span class="sidebar-title">Size</span>
                            <ul>
                                <li>
                                    <label class="cheker">
                                        <input type="checkbox" name="Size"/>
                                        <span></span>
                                    </label>
                                    <a href="#">S<span> (10)</span></a>
                                </li>
                                <li>
                                    <label class="cheker">
                                        <input type="checkbox" name="Size"/>
                                        <span></span>
                                    </label>
                                    <a href="#">m<span> (10)</span></a>
                                </li>
                                <li>
                                    <label class="cheker">
                                        <input type="checkbox" name="Size"/>
                                        <span></span>
                                    </label>
                                    <a href="#">l<span> (10)</span></a>
                                </li>
                            </ul>
                        </div>
                        <!-- SINGLE SIDEBAR SIZE END -->
                        <!-- SINGLE SIDEBAR COLOR START -->
                        <div class="product-single-sidebar">
                            <span class="sidebar-title">Color</span>
                            <ul class="product-color-var">
                                <li>
                                    <i class="fa fa-square color-beige"></i>
                                    <a href="#">Beige<span> (1)</span></a>
                                </li>
                                <li>
                                    <i class="fa fa-square color-white"></i>
                                    <a href="#">white<span> (2)</span></a>
                                </li>
                                <li>
                                    <i class="fa fa-square color-black"></i>
                                    <a href="#">black<span> (2)</span></a>
                                </li>
                                <li>
                                    <i class="fa fa-square color-orange"></i>
                                    <a href="#">orange<span> (5)</span></a>
                                </li>
                                <li>
                                    <i class="fa fa-square color-blue"></i>
                                    <a href="#">blue<span> (8)</span></a>
                                </li>
                                <li>
                                    <i class="fa fa-square color-green"></i>
                                    <a href="#">green<span> (3)</span></a>
                                </li>
                                <li>
                                    <i class="fa fa-square color-yellow"></i>
                                    <a href="#">yellow<span> (4)</span></a>
                                </li>
                                <li>
                                    <i class="fa fa-square color-pink"></i>
                                    <a href="#">pink<span> (6)</span></a>
                                </li>
                            </ul>
                        </div>
                        <!-- SINGLE SIDEBAR COLOR END -->
                        <!-- SINGLE SIDEBAR COMPOSITIONS START -->
                        <!-- SINGLE SIDEBAR PROPERTIES END -->
                    </div>
                    <!-- PRODUCT-LEFT-SIDEBAR END -->
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <div class="right-all-product">
                        <!-- PRODUCT-CATEGORY-HEADER START -->
                        <div class="product-category-header">
                            <div class="category-header-image">
                                <img src={{asset('img/category-header.jpg')}} alt="category-header" />
                                <div class="category-header-text">
                                    <h2>Women </h2>
                                    <strong>You will find here all woman fashion collections.</strong>
                                    <p>This category includes all the basics of your wardrobe and much more:<br /> shoes, accessories, printed t-shirts, feminine dresses, women's jeans!</p>
                                </div>
                            </div>
                        </div>
                        <!-- PRODUCT-CATEGORY-HEADER END -->
                        <div class="product-category-title">
                            <!-- PRODUCT-CATEGORY-TITLE START -->
                            <h1>
                                <span class="cat-name"><?= $nameCategory->name ?></span>
                                <span class="count-product"><?= __('Tìm thấy '.$product->total().' sản phẩm') ?></span>
                            </h1>
                            <!-- PRODUCT-CATEGORY-TITLE END -->
                        </div>
                        <div class="product-shooting-area">
                            <div class="product-shooting-bar">
                                <!-- SHOORT-BY START -->
                                <div class="shoort-by">
                                    <label for="productShort">Sắp xếp</label>
                                    <div class="short-select-option">
                                        <select name="sortby" id="productShort">
                                            <option value="">--</option>
                                            <option value="">Price: Lowest first</option>
                                            <option value="">Price: Highest first</option>
                                            <option value="">Product Name: A to Z</option>
                                            <option value="">Product Name: Z to A</option>
                                            <option value="">In stock</option>
                                            <option value="">Reference: Lowest first</option>
                                            <option value="">Reference: Highest first</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- SHOORT-BY END -->
                                <!-- SHOW-PAGE START -->
                                <div class="show-page">
                                    <label for="perPage"><?= __('Hiện thị')?></label>
                                    <div class="s-page-select-option">
                                        <select name="show" id="perPage">
                                            <option selected>{{$product->count()}}</option>
                                            <option value="">12</option>
                                            <option value="">16</option>
                                        </select>
                                    </div>
                                    <span><?= __('sản phẩm')?></span>
                                </div>
                                <!-- SHOW-PAGE END -->
                                <!-- VIEW-SYSTEAM START -->
                                <div class="view-systeam">
                                    <label for="perPage">View:</label>
                                    <ul>
                                        <li class="active"><a href="shop-gird.html"><i class="fa fa-th-large"></i></a><br />Grid</li>
                                        <li><a href="shop-list.html"><i class="fa fa-th-list"></i></a><br />List</li>
                                    </ul>
                                </div>
                                <!-- VIEW-SYSTEAM END -->
                            </div>
                            <!-- PRODUCT-SHOOTING-RESULT END -->
                        </div>
                    </div>
                    <!-- ALL GATEGORY-PRODUCT START -->
                    <div class="all-gategory-product">
                        <div class="row">
                            <ul class="gategory-product">
                                <!-- SINGLE ITEM START -->
                                <?php foreach ($product as $list ) :?>
                                <li class="gategory-product-list col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <div class="single-product-item" style="float:left;width:200px; display:block;">
                                        <div class="product-image">
                                            <a href="{{route('home.detail-product',$list['id'])}}"><img style="height: 200px" src="{{asset('images/product/'. $list['image'])}}" alt="product-image" /></a>
                                            <a href="single-product.html" class="new-mark-box"><?= $list['new'] == 1 ? 'new' : 'sale'  ?></a>
                                            <div class="overlay-content">
                                                <ul>
                                                    <li><a href="#0" title="Quick view" ><i class="fa fa-search"></i></a></li>
                                                    <li><a href="#" title="Quick view"><i class="fa fa-shopping-cart"></i></a></li>
                                                    <li><a href="#" title="Quick view"><i class="fa fa-retweet"></i></a></li>
                                                    <li><a href="#" title="Quick view"><i class="fa fa-heart-o"></i></a></li>
                                                </ul>
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
                                            <a href="{{route('home.detail-product',$list['id'])}}"><?= $list['name'] ?></a>
                                            <div class="price-box">
                                                <?php $discount = getPriceSale($list['price'],$list['getSales']['value']); ?>
                                                <span class="price products-price-save_<?= $list['id'] ?>"><?= number_format($discount) ?> đồng</span>
                                                    <?php if($list['getSales']['value'] > 0) :?>
                                                <span class="old-price">{{number_format ($list['price'])}} đồng</span>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <?php endforeach ;?>
                                <!-- SINGLE ITEM END -->
                            </ul>
                        </div>
                    </div>
                    <!-- ALL GATEGORY-PRODUCT END -->
                    <!-- PRODUCT-SHOOTING-RESULT START -->
                        <div class="showing-item">
                            <span><?= __('Hiện thị '. $product->count().' trên ' .$product->total().' sản phẩm ')?></span>
                        </div>
                        <div class="pagination" style="display: initial;">
                            {{ $product->links('vendor.pagination.default') }}
                        </div>
                    <!-- PRODUCT-SHOOTING-RESULT END -->
                </div>
            </div>
        </div>
    </section>
    <!-- MAIN-CONTENT-SECTION END -->
@endsection