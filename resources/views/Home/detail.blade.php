@extends('Home.layout.main')
@section('menu')
    @include('home/layout/menu')
@endsection
@section('banner')
@endsection
@section('formSearch')
    @include('home/layout/formSearch')
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('assets\css\home\page-search.css') }}">
    <link rel="stylesheet" href="{{ asset('assets\css\home\detail.css') }}">
@endsection
@section('content')
{{--    <div class="row">--}}
{{--        <div class="col-md-3 col-lg-3 col-12 searchLeft">--}}
{{--            <form action="{{route('search')}}" method="get">--}}
{{--                @csrf--}}
{{--                <div class="form-group">--}}
{{--                    <input type="text" name="search" class="form-control" placeholder="Nhập tên sản phẩm">--}}
{{--                </div>--}}

{{--                <div class="form-group">--}}
{{--                    <select name="id" id="id" class="form-control">--}}
{{--                        <option value="" selected>Chọn Danh mục </option>--}}
{{--                       {!!$html!!}--}}
{{--                    </select>--}}
{{--                </div>--}}
{{--                <div class="form-group">--}}
{{--                    <input type="text" class="form-control" placeholder="Giá từ (mặc định là 0 VND)">--}}
{{--                    <input type="text" class="form-control" placeholder="Đến">--}}
{{--                </div>--}}
{{--                <button type="submit" class="btn btn-primary">Tìm</button>--}}
{{--            </form>--}}
{{--        </div>--}}
{{--        <div class="col-md-9 col-lg-9 col-12 searchRight">--}}
{{--            <div class="productInfo">--}}
{{--                Sản phẩm : <b>{{ $product->productName }}</b>--}}
{{--            </div>--}}
{{--            <hr>--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-5 col-lg-5 col-12">--}}
{{--                    <div id="carouselExampleIndicators" class="carousel slide img-product" data-ride="carousel">--}}
{{--                        <ol class="carousel-indicators">--}}
{{--                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>--}}
{{--                            @php--}}
{{--                                $list = explode('!', $product->imageList);--}}
{{--                                $sl = count($list);--}}
{{--                            @endphp--}}
{{--                            @if ($sl > 1)--}}
{{--                                @for ($i = 1; $i <= $sl; ++$i)--}}
{{--                                    <li data-target="#carouselExampleIndicators" data-slide-to="{{ $i }}"></li>--}}
{{--                                @endfor--}}
{{--                            @endif--}}
{{--                        </ol>--}}
{{--                        <div class="carousel-inner">--}}
{{--                            <div class="carousel-item active">--}}
{{--                                <img src="{{ asset('uploads/product/' . $product->image) }}" class="d-block w-100"--}}
{{--                                    alt="...">--}}
{{--                            </div>--}}
{{--                            @if ($product->imageList)--}}
{{--                                @foreach ($list as $image)--}}
{{--                                    <div class="carousel-item">--}}
{{--                                        <img src="{{ asset('uploads/product/' . $image) }}" class="d-block w-100"--}}
{{--                                            alt="...">--}}
{{--                                    </div>--}}
{{--                                @endforeach--}}
{{--                            @endif--}}
{{--                        </div>--}}
{{--                        @if ($product->imageList)--}}
{{--                            <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators"--}}
{{--                                data-slide="prev">--}}
{{--                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>--}}
{{--                                <span class="sr-only">Previous</span>--}}
{{--                            </button>--}}
{{--                            <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators"--}}
{{--                                data-slide="next">--}}
{{--                                <span class="carousel-control-next-icon" aria-hidden="true"></span>--}}
{{--                                <span class="sr-only">Next</span>--}}
{{--                            </button>--}}
{{--                        @endif--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--                <div class="col-md-7 col-lg-7 col-12">--}}
{{--                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">--}}
{{--                        <li class="nav-item" role="presentation">--}}
{{--                            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home"--}}
{{--                                role="tab" aria-controls="pills-home" aria-selected="true"><b>Sản phẩm</b></a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item" role="presentation">--}}
{{--                            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile"--}}
{{--                                role="tab" aria-controls="pills-profile" aria-selected="false"><b>Thông tin chi--}}
{{--                                    tiết</b></a>--}}
{{--                        </li>--}}

{{--                    </ul>--}}
{{--                    <div class="tab-content" id="pills-tabContent">--}}
{{--                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"--}}
{{--                            aria-labelledby="pills-home-tab">--}}
{{--                            <div>--}}
{{--                                @include('admin.layout.alert')--}}
{{--                                <p>Tên sản phẩm:</p>--}}
{{--                                <p>Giá sản phẩm: {{ number_format($product->price) }}VNĐ</p>--}}
{{--                                <p>Khuyến mãi: {{ number_format($product->sale) }} %</p>--}}
{{--                                <p>Giá sau khuyến mãi :--}}
{{--                                    {{ number_format($product->price - ($product->price / 100) * $product->sale) }} VNĐ--}}
{{--                                </p>--}}
{{--                                <form action="{{ route('cart.store') }}" method="post">--}}
{{--                                    @csrf--}}
{{--                                    @if (isset($cart->items[$product->id]))--}}
{{--                                        <p>Số lượng: <input type="number" name="quantity" max="100" min="0"--}}
{{--                                                value="{{ $cart->items[$product->id]['quantity'] }}"> <a--}}
{{--                                                href="{{ route('cart.store') }}">--}}
{{--                                                <ion-icon style="color: green" name="checkbox-outline"></ion-icon>--}}
{{--                                            </a></p>--}}
{{--                                    @else--}}
{{--                                        <p> Số lượng: <input type="number" name="quantity" max="100"--}}
{{--                                                min="0" value="1"></p>--}}
{{--                                    @endif--}}
{{--                                    <input type="hidden" name="id" value="{{ $product->id }}">--}}
{{--                                    <p>Thêm vào giỏ hàng <button style="border: none" type="submit">--}}
{{--                                            <ion-icon class="btn btn-outline-success" name="cart-outline"></ion-icon>--}}
{{--                                        </button></p>--}}
{{--                                </form>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="tab-pane fade" id="pills-profile" role="tabpanel"--}}
{{--                            aria-labelledby="pills-profile-tab">--}}
{{--                            <p>--}}
{{--                                {!! $product->description !!}--}}
{{--                            </p>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--        </div>--}}

{{--    </div>--}}

<script>
    function quickbox(){
        if ($(window).width() > 767) {
            $('.quickview-button').magnificPopup({
                type:'iframe',
                delegate: 'a',
                preloader: true,
                tLoading: 'Loading image #%curr%...',
            });
        }
    }
    jQuery(document).ready(function() {quickbox();});
    jQuery(window).resize(function() {quickbox();});
    $( "input[name=\'search\']" ).keyup(function( event ) {
        $('input[name=\'search\']').autocomplete({
            'source': function(request, response) {
                $.ajax({
                    url: 'index.php?route=product/search/autocomplete&filter_name=' +  encodeURIComponent(request),
                    dataType: 'json',
                    success: function(result) {
                        var products = result.products;
                        $('.ajaxishi-search ul li').remove();
                        $.each(products, function(index,product) {
                            var html = '<li>';
                            html += '<div>';
                            html += '<a href="' + product.url + '" title="' + product.name + '">';
                            html += '<div class="product-image"><img alt="' + product.name + '" src="' + product.image + '"></div>';
                            html += '<div class="product-desc">';
                            html += '<div class="product-name">' + product.name + '</div>';
                            if (product.special) {
                                html += '<div class="product-price"><span class="special">' + product.price + '</span><span class="price">' + product.special + '</span></div>';
                            } else {
                                html += '<div class="product-price"><span class="price">' + product.price + '</span></div>';
                            }
                            html += '</div>';
                            html += '</a>';
                            html += '</div>';
                            html += '</li>';
                            $('.ajaxishi-search ul').append(html);
                        });
                        $('.ajaxishi-search').css('display','block');
                        return false;
                    }
                });
            },
            'select': function(product) {
                $('input[name=\'filter_name\']').val(product.name);
            }
        });
    });
</script>
<div class="breadcrumb-container" style="background: url(https://demo.ishithemes.com/opencart/OPC140/OPC140L01/image/catalog/breadcrumb.png) no-repeat top !important;">
    <h1 class="page-title">Denim Jacket</h1>
    <ul class="breadcrumb">
        <li><a href="https://demo.ishithemes.com/opencart/OPC140/OPC140L01/index.php?route=common/home"><i class="fa fa-home"></i></a></li>
        <li><a href="https://demo.ishithemes.com/opencart/OPC140/OPC140L01/index.php?route=product/product&amp;product_id=42">Denim Jacket</a></li>
    </ul>
</div>
<div id="product-product" class="container">
    <div class="wrapper_container"><div id="_desktop_column_left">
            <aside id="column-left" class="col-sm-3 hidden-xs">
                <div class="box">
                    <h2 class="page-title hidden-sm hidden-xs">
                        Categories
                    </h2>
                    <div class="block-title clearfix  hidden-lg hidden-md collapsed" data-target="#box-container" data-toggle="collapse">
                        <span class="page-title">Categories</span>
                        <span class="navbar-toggler collapse-icons">
          <i class="fa fa-angle-down add"></i>
          <i class="fa fa-angle-up remove"></i>
        </span>
                    </div>
                    <div id="box-container" class="collapse data-toggler">
                        <ul class="category-top-menu">
                            <li>

                                <a href="https://demo.ishithemes.com/opencart/OPC140/OPC140L01/index.php?route=product/category&amp;path=20" class="list-group-item">Fashion (15)</a>
                            </li>
                            <li>

                                <a href="https://demo.ishithemes.com/opencart/OPC140/OPC140L01/index.php?route=product/category&amp;path=18" class="list-group-item">Category (12)</a>
                            </li>
                            <li>

                                <a href="https://demo.ishithemes.com/opencart/OPC140/OPC140L01/index.php?route=product/category&amp;path=33" class="list-group-item">Collection (3)</a>
                            </li>
                            <li>

                                <a href="https://demo.ishithemes.com/opencart/OPC140/OPC140L01/index.php?route=product/category&amp;path=87" class="list-group-item">Briefcase (0)</a>
                            </li>
                            <li>

                                <a href="https://demo.ishithemes.com/opencart/OPC140/OPC140L01/index.php?route=product/category&amp;path=88" class="list-group-item">T-shirts (0)</a>
                            </li>
                            <li>

                                <a href="https://demo.ishithemes.com/opencart/OPC140/OPC140L01/index.php?route=product/category&amp;path=89" class="list-group-item">Blogs (0)</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <section class="featured-products clearfix">
                    <h3 class="page-title hidden-sm hidden-xs">
                        Bestsellers
                    </h3>
                    <div class="block-title clearfix  hidden-lg hidden-md collapsed" data-target="#bestseller-container" data-toggle="collapse">
                        <span class="page-title">Bestsellers</span>
                        <span class="navbar-toggler collapse-icons">
      <i class="fa fa-angle-down add"></i>
      <i class="fa fa-angle-up remove"></i>
    </span>
                    </div>
                    <div id="bestseller-container" class="collapse data-toggler">
                        <div class="product-thumb transition">
                            <div class="image"><a href="https://demo.ishithemes.com/opencart/OPC140/OPC140L01/index.php?route=product/product&amp;product_id=36"><img src="https://demo.ishithemes.com/opencart/OPC140/OPC140L01/image/cache/catalog/productsimage/19-88x110.png" alt="Girls Formal wear" title="Girls Formal wear" class="img-responsive" /></a></div>
                            <div class="caption">
                                <h4><a href="https://demo.ishithemes.com/opencart/OPC140/OPC140L01/index.php?route=product/product&amp;product_id=36">Girls Formal wear</a></h4>
                                <p class="description">Video in your pocket.

                                    Its the small iPod with one very big idea: video. The worlds most popula..</p>
                                <p class="price">
                                    $122.00
                                    <span class="price-tax">Ex Tax: $100.00</span>
                                </p>
                            </div>
                        </div>
                        <div class="product-thumb transition">
                            <div class="image"><a href="https://demo.ishithemes.com/opencart/OPC140/OPC140L01/index.php?route=product/product&amp;product_id=34"><img src="https://demo.ishithemes.com/opencart/OPC140/OPC140L01/image/cache/catalog/productsimage/15-88x110.png" alt="Basic contrast sne" title="Basic contrast sne" class="img-responsive" /></a></div>
                            <div class="caption">
                                <h4><a href="https://demo.ishithemes.com/opencart/OPC140/OPC140L01/index.php?route=product/product&amp;product_id=34">Basic contrast sne</a></h4>
                                <p class="description">Born to be worn.

                                    Clip on the worlds most wearable music player and take up to 240 songs with y..</p>
                                <p class="price">
                                    $122.00
                                    <span class="price-tax">Ex Tax: $100.00</span>
                                </p>
                            </div>
                        </div>
                        <div class="product-thumb transition">
                            <div class="image"><a href="https://demo.ishithemes.com/opencart/OPC140/OPC140L01/index.php?route=product/product&amp;product_id=28"><img src="https://demo.ishithemes.com/opencart/OPC140/OPC140L01/image/cache/catalog/productsimage/5-88x110.png" alt="Simul dolorem vol" title="Simul dolorem vol" class="img-responsive" /></a></div>
                            <div class="caption">
                                <h4><a href="https://demo.ishithemes.com/opencart/OPC140/OPC140L01/index.php?route=product/product&amp;product_id=28">Simul dolorem vol</a></h4>
                                <p class="description">HTC Touch - in High Definition. Watch music videos and streaming content in awe-inspiring high defin..</p>
                                <p class="price">
                                    $122.00
                                    <span class="price-tax">Ex Tax: $100.00</span>
                                </p>
                            </div>
                        </div>
                        <div class="product-thumb transition">
                            <div class="image"><a href="https://demo.ishithemes.com/opencart/OPC140/OPC140L01/index.php?route=product/product&amp;product_id=42"><img src="https://demo.ishithemes.com/opencart/OPC140/OPC140L01/image/cache/catalog/productsimage/1-88x110.png" alt="Denim Jacket" title="Denim Jacket" class="img-responsive" /></a></div>
                            <div class="caption">
                                <h4><a href="https://demo.ishithemes.com/opencart/OPC140/OPC140L01/index.php?route=product/product&amp;product_id=42">Denim Jacket</a></h4>
                                <p class="description">The 30-inch Apple Cinema HD Display delivers an amazing 2560 x 1600 pixel resolution. Designed speci..</p>
                                <p class="price">
                                    $122.00
                                    <span class="price-tax">Ex Tax: $100.00</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="ishibannerblock-1757692569" class="ishibannerblock clearfix">
                    <div class="container">
                        <div class="row">
                            <div class="bannerblock col-md-12 col-sm-12 col-xs-12">
                                <div class="image-container">
                                    <a href="#" class="scale banner-scale">
                                        <img src="https://demo.ishithemes.com/opencart/OPC140/OPC140L01/image/cache/catalog/Left-banner-324x420.png" alt="" class="img-responsive">

                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="featured-products clearfix">
                    <h3 class="page-title hidden-sm hidden-xs">
                        Latest
                    </h3>
                    <div class="block-title clearfix  hidden-lg hidden-md collapsed" data-target="#latest-container" data-toggle="collapse">
                        <span class="page-title">Latest</span>
                        <span class="navbar-toggler collapse-icons">
      <i class="fa fa-angle-down add"></i>
      <i class="fa fa-angle-up remove"></i>
    </span>
                    </div>
                    <div id="latest-container" class="collapse data-toggler">
                        <div class="product-thumb transition">
                            <div class="image"><a href="https://demo.ishithemes.com/opencart/OPC140/OPC140L01/index.php?route=product/product&amp;product_id=49"><img src="https://demo.ishithemes.com/opencart/OPC140/OPC140L01/image/cache/catalog/productsimage/3-88x110.png" alt="Chico's Railroad" title="Chico's Railroad" class="img-responsive" /></a></div>
                            <div class="caption">
                                <h4><a href="https://demo.ishithemes.com/opencart/OPC140/OPC140L01/index.php?route=product/product&amp;product_id=49">Chico's Railroad</a></h4>
                                <p class="description">Samsung Galaxy Tab 10.1, is the world&rsquo;s thinnest tablet, measuring 8.6 mm thickness, running w..</p>
                                <p class="price">
                                    $241.99
                                    <span class="price-tax">Ex Tax: $199.99</span>
                                </p>
                            </div>
                        </div>
                        <div class="product-thumb transition">
                            <div class="image"><a href="https://demo.ishithemes.com/opencart/OPC140/OPC140L01/index.php?route=product/product&amp;product_id=48"><img src="https://demo.ishithemes.com/opencart/OPC140/OPC140L01/image/cache/catalog/productsimage/8-88x110.png" alt="Long Denim Shirt" title="Long Denim Shirt" class="img-responsive" /></a></div>
                            <div class="caption">
                                <h4><a href="https://demo.ishithemes.com/opencart/OPC140/OPC140L01/index.php?route=product/product&amp;product_id=48">Long Denim Shirt</a></h4>
                                <p class="description">More room to move.

                                    With 80GB or 160GB of storage and up to 40 hours of battery life, the new..</p>
                                <p class="price">
                                    $122.00
                                    <span class="price-tax">Ex Tax: $100.00</span>
                                </p>
                            </div>
                        </div>
                        <div class="product-thumb transition">
                            <div class="image"><a href="https://demo.ishithemes.com/opencart/OPC140/OPC140L01/index.php?route=product/product&amp;product_id=47"><img src="https://demo.ishithemes.com/opencart/OPC140/OPC140L01/image/cache/catalog/productsimage/17-88x110.png" alt="Phasellus vitae ell" title="Phasellus vitae ell" class="img-responsive" /></a></div>
                            <div class="caption">
                                <h4><a href="https://demo.ishithemes.com/opencart/OPC140/OPC140L01/index.php?route=product/product&amp;product_id=47">Phasellus vitae ell</a></h4>
                                <p class="description">Stop your co-workers in their tracks with the stunning new 30-inch diagonal HP LP3065 Flat Panel Mon..</p>
                                <p class="price">
                                    $122.00
                                    <span class="price-tax">Ex Tax: $100.00</span>
                                </p>
                            </div>
                        </div>
                        <div class="product-thumb transition">
                            <div class="image"><a href="https://demo.ishithemes.com/opencart/OPC140/OPC140L01/index.php?route=product/product&amp;product_id=46"><img src="https://demo.ishithemes.com/opencart/OPC140/OPC140L01/image/cache/catalog/productsimage/15-88x110.png" alt="Vebeto PU" title="Vebeto PU" class="img-responsive" /></a></div>
                            <div class="caption">
                                <h4><a href="https://demo.ishithemes.com/opencart/OPC140/OPC140L01/index.php?route=product/product&amp;product_id=46">Vebeto PU</a></h4>
                                <p class="description">Unprecedented power. The next generation of processing technology has arrived. Built into the newest..</p>
                                <p class="price">
                                    $1,202.00
                                    <span class="price-tax">Ex Tax: $1,000.00</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </section>
            </aside>
        </div>

        <div id="content" class="col-sm-9">
            <div class="product_carousel">
                <div class="row">                                     <div class="col-md-6 col-sm-6 product-left">
                        <div class="product-left-title hidden-lg hidden-md hidden-sm">
                            <h2 class="product-title">Denim Jacket</h2>
                            <ul class="list-unstyled price">
                                <li>
                                    <h2 class="product-price">$122.00</h2>
                                </li>
                            </ul>
                        </div>
                        <div class="product-image thumbnails_horizontal">
                            <div class="carousel-container">
                                <a class="thumbnail" href="https://demo.ishithemes.com/opencart/OPC140/OPC140L01/image/cache/catalog/productsimage/1-771x1000.png" title="Denim Jacket">
                                    <img src="https://demo.ishithemes.com/opencart/OPC140/OPC140L01/image/cache/catalog/productsimage/1-771x1000.png" title="Denim Jacket" alt="Denim Jacket" />
                                </a>
                            </div>
                            <div class="image_show">
                                <div id="slider_carousel" class="owl-carousel">
                                    <div class="image-additional item">
                                        <a class="thumbnail" href="https://demo.ishithemes.com/opencart/OPC140/OPC140L01/image/cache/catalog/productsimage/10-771x1000.png" title="Denim Jacket">
                                            <img src="https://demo.ishithemes.com/opencart/OPC140/OPC140L01/image/cache/catalog/productsimage/10-535x694.png" title="Denim Jacket" alt="Denim Jacket" />
                                        </a>
                                    </div>
                                    <div class="image-additional item">
                                        <a class="thumbnail" href="https://demo.ishithemes.com/opencart/OPC140/OPC140L01/image/cache/catalog/productsimage/11-771x1000.png" title="Denim Jacket">
                                            <img src="https://demo.ishithemes.com/opencart/OPC140/OPC140L01/image/cache/catalog/productsimage/11-535x694.png" title="Denim Jacket" alt="Denim Jacket" />
                                        </a>
                                    </div>
                                    <div class="image-additional item">
                                        <a class="thumbnail" href="https://demo.ishithemes.com/opencart/OPC140/OPC140L01/image/cache/catalog/productsimage/12-771x1000.png" title="Denim Jacket">
                                            <img src="https://demo.ishithemes.com/opencart/OPC140/OPC140L01/image/cache/catalog/productsimage/12-535x694.png" title="Denim Jacket" alt="Denim Jacket" />
                                        </a>
                                    </div>
                                    <div class="image-additional item">
                                        <a class="thumbnail" href="https://demo.ishithemes.com/opencart/OPC140/OPC140L01/image/cache/catalog/productsimage/13-771x1000.png" title="Denim Jacket">
                                            <img src="https://demo.ishithemes.com/opencart/OPC140/OPC140L01/image/cache/catalog/productsimage/13-535x694.png" title="Denim Jacket" alt="Denim Jacket" />
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="tabs_info clearfix">
                            <div id="accordion" class="panel-group" role="tablist">
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingOne">
                                        <a data-toggle="collapse" href="#tab-description" data-parent="#accordion" aria-expanded="true"> Description </a>
                                    </div>
                                    <div id="tab-description" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                        <div class="tab-description"><p>
                                                The 30-inch Apple Cinema HD Display delivers an amazing 2560 x 1600 pixel resolution. Designed specifically for the creative professional, this display provides more space for easier access to all the tools and palettes needed to edit, format and composite your work. Combine this display with a Mac Pro, MacBook Pro, or PowerMac G5 and there's no limit to what you can achieve. <br>
                                                <br>
                                                The Cinema HD features an active-matrix liquid crystal display that produces flicker-free images that deliver twice the brightness, twice the sharpness and twice the contrast ratio of a typical CRT display. Unlike other flat panels, it's designed with a pure digital interface to deliver distortion-free images that never need adjusting. With over 4 million digital pixels, the display is uniquely suited for scientific and technical applications such as visualizing molecular structures or analyzing geological data.</p><br><p>
                                                <b>System Requirements</b></p>
                                            <ul>
                                                <li>
                                                    Mac Pro, all graphic options</li>
                                                <li>
                                                    MacBook Pro</li>
                                                <li>
                                                    Power Mac G5 (PCI-X) with ATI Radeon 9650 or better or NVIDIA GeForce 6800 GT DDL or better</li>
                                                <li>
                                                    Power Mac G5 (PCI Express), all graphics options</li>
                                                <li>
                                                    PowerBook G4 with dual-link DVI support</li>
                                                <li>
                                                    Windows PC and graphics card that supports DVI ports with dual-link digital bandwidth and VESA DDC standard for plug-and-play setup</li>
                                            </ul></div>
                                    </div>
                                </div>
                                <div class="panel panel-default tab_review">
                                    <div class="panel-heading" role="tab" id="headingTwo">
                                        <a data-toggle="collapse" href="#tab-review" data-parent="#accordion" aria-expanded="false">Reviews (1)</a>
                                    </div>
                                    <div id="tab-review" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                        <div class="panel-body">
                                            <form class="form-horizontal" id="form-review">
                                                <div id="review"></div>
                                                <h2>Write a review</h2>
                                                <div class="form-group required">
                                                    <div class="col-sm-12">
                                                        <label class="control-label" for="input-name">Your Name</label>
                                                        <input type="text" name="name" value="" id="input-name" class="form-control" />
                                                    </div>
                                                </div>
                                                <div class="form-group required">
                                                    <div class="col-sm-12">
                                                        <label class="control-label" for="input-review">Your Review</label>
                                                        <textarea name="text" rows="5" id="input-review" class="form-control"></textarea>
                                                        <div class="help-block"><span class="text-danger">Note:</span> HTML is not translated!</div>
                                                    </div>
                                                </div>
                                                <div class="form-group required">
                                                    <div class="col-sm-12">
                                                        <label class="control-label radio-title">Rating</label>&nbsp;&nbsp;&nbsp;
                                                        <div class="form-radio">
                                                            <span>Bad</span>&nbsp;
                                                            <input type="radio" name="rating" value="1" />
                                                            &nbsp;
                                                            <input type="radio" name="rating" value="2" />
                                                            &nbsp;
                                                            <input type="radio" name="rating" value="3" />
                                                            &nbsp;
                                                            <input type="radio" name="rating" value="4" />
                                                            &nbsp;
                                                            <input type="radio" name="rating" value="5" />
                                                            &nbsp;<span>Good</span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="buttons clearfix">
                                                    <div class="pull-right">
                                                        <button type="button" id="button-review" data-loading-text="Loading..." class="btn btn-primary">Continue</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 product-right">
                        <div class="product-left-title hidden-xs">
                            <h1 class="product-title">Denim Jacket</h1>
                        </div>
                        <!-- AddThis Button BEGIN -->
                        <div class="social-toolbox">
                            <span>Share</span>
                            <div class="addthis_toolbox addthis_default_style" data-url="https://demo.ishithemes.com/opencart/OPC140/OPC140L01/index.php?route=product/product&amp;product_id=42">
                                <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
                                <a class="addthis_button_tweet"></a>
                                <a class="addthis_button_pinterest_pinit"></a>
                                <a class="addthis_counter addthis_pill_style"></a>
                            </div>
                            <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-515eeaf54693130e"></script>
                        </div>
                        <!-- AddThis Button END -->
                        <div class="rating-wrapper">

                    <span class="fa fa-stack">
                      <i class="fa fa-star yellow fa-stack-2x"></i>
                    </span>

                            <span class="fa fa-stack">
                      <i class="fa fa-star yellow fa-stack-2x"></i>
                    </span>

                            <span class="fa fa-stack">
                      <i class="fa fa-star yellow fa-stack-2x"></i>
                    </span>

                            <span class="fa fa-stack">
                      <i class="fa fa-star gray fa-stack-2x"></i>
                    </span>

                            <span class="fa fa-stack">
                      <i class="fa fa-star gray fa-stack-2x"></i>
                    </span>
                            <a class="review-count" href="" onclick="customclick(); return false;">1 reviews</a> / <a class="write-review" href="" onclick="customclick(); return false;"><i class="fa fa-pencil"></i> Write a review</a>
                        </div>

                        <ul class="list-unstyled price">
                            <li>
                                <h2 class="product-price hidden-xs">$122.00</h2>
                            </li>
                        </ul>


                        <hr>
                        <ul class="list-unstyled price">
                            <li class="product-tax">Ex Tax: $100.00</li>
                            <hr>
                        </ul>
                        <hr>
                        <div id="product">
                            <div class="alert alert-info col-lg-12 col-md-12 col-sm-12 col-xs-12"><i class="fa fa-info-circle"></i> This product has a minimum quantity of 2</div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="input-quantity">Qty</label>
                            <input type="text" name="quantity" value="2" size="2" id="input-quantity" class="form-control" />
                            <input type="hidden" name="product_id" value="42"/>
                            <button type="button" id="button-cart" data-loading-text="Loading..." class="btn btn-default btn-lg btn-block">Add to Cart</button>                <button type="button" data-toggle="tooltip" class="btn btn-primary wishlist" title="Add to Wish List" onclick="wishlist.add('42');">
                                <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                    <symbol id="heart-shape-outline1" viewBox="0 0 1400 1400"><title>heart-shape-outline1</title><path d="M492.719,166.008c0-73.486-59.573-133.056-133.059-133.056c-47.985,0-89.891,25.484-113.302,63.569c-23.408-38.085-65.332-63.569-113.316-63.569C59.556,32.952,0,92.522,0,166.008c0,40.009,17.729,75.803,45.671,100.178l188.545,188.553c3.22,3.22,7.587,5.029,12.142,5.029c4.555,0,8.922-1.809,12.142-5.029l188.545-188.553C474.988,241.811,492.719,206.017,492.719,166.008z"/></symbol>
                                </svg>
                                <svg class="icon" viewBox="0 0 30 30"><use xlink:href="#heart-shape-outline1" x="33%" y="33%"></use></svg>
                                <i class="fa fa-heart"></i>
                            </button>
                            <button type="button" data-toggle="tooltip" class="btn btn-primary compare" title="Compare this Product" onclick="compare.add('42');">
                                <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                    <symbol id="report1" viewBox="0 0 1490 1490"><title>report1</title><path d="m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/><path d="m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/><path d="m480 258.667969h60v220h-60zm0 0"/><path d="m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/><path d="m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/><path d="m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/><path d="m200 118.667969h60v360h-60zm0 0"/><path d="m340-1.332031h60v480h-60zm0 0"/><path d="m60 358.667969h60v120h-60zm0 0"/><path d="m60 548.667969c.035156-3.414063.65625-6.796875 1.839844-10h-51.839844c-5.523438 0-10 4.476562-10 10 0 5.519531 4.476562 10 10 10h51.839844c-1.183594-3.203125-1.804688-6.589844-1.839844-10zm0 0"/><path d="m118.160156 538.667969c2.457032 6.4375 2.457032 13.558593 0 20h83.679688c-2.457032-6.441407-2.457032-13.5625 0-20zm0 0"/><path d="m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/><path d="m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/><path d="m341.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0"/><path d="m481.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0"/><path d="m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/><path d="m590 538.667969h-51.839844c2.457032 6.4375 2.457032 13.558593 0 20h51.839844c5.523438 0 10-4.480469 10-10 0-5.523438-4.476562-10-10-10zm0 0"/></symbol>
                                </svg>
                                <svg class="icon" viewBox="0 0 30 30"><use xlink:href="#report1" x="30%" y="31%"></use></svg>
                                <i class="fa fa-exchange"></i>
                            </button>
                        </div>
                        <ul class="list-unstyled attr">
                            <li><span>Brand:</span> <a href="https://demo.ishithemes.com/opencart/OPC140/OPC140L01/index.php?route=product/manufacturer/info&amp;manufacturer_id=8">Apple</a></li>
                            <li><span>Product Code:</span> Product 15</li>
                            <li><span>Availability:</span> In Stock</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="related-product row">
                <p class="sub-title">CÖUTURE</p>
                <h3 class="home-title">Related Products</h3>
                <div class="related-carousel owl-carousel">
                    <div class="item" >
                        <div class="product-container transition">
                            <div class="product-thumb">
                                <div class="image">
                                    <a href="https://demo.ishithemes.com/opencart/OPC140/OPC140L01/index.php?route=product/product&amp;product_id=28">
                                        <img src="https://demo.ishithemes.com/opencart/OPC140/OPC140L01/image/cache/catalog/productsimage/5-535x694.png" alt="Simul dolorem vol" title="Simul dolorem vol" class="img-responsive" />
                                        <img class="product-img-extra img-responsive" alt="Simul dolorem vol" title="Simul dolorem vol" src= "https://demo.ishithemes.com/opencart/OPC140/OPC140L01/image/cache/catalog/productsimage/7-535x694.png"/>
                                    </a>

                                    <div class="button-group">
                                        <div class="btn-quickview">
                                            <div class="quickview-button button" data-toggle="tooltip" title=" Quick View">
                                                <a class="quickbox" href="https://demo.ishithemes.com/opencart/OPC140/OPC140L01/index.php?route=product/quick_view&amp;product_id=28">
                                                    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                        <symbol id="eye-open" viewBox="0 0 1050 1050"><title>eye-open</title>
                                                            <path d="M505.918,236.117c-26.651-43.587-62.485-78.609-107.497-105.065c-45.015-26.457-92.549-39.687-142.608-39.687
                                    c-50.059,0-97.595,13.225-142.61,39.687C68.187,157.508,32.355,192.53,5.708,236.117C1.903,242.778,0,249.345,0,255.818
                                    c0,6.473,1.903,13.04,5.708,19.699c26.647,43.589,62.479,78.614,107.495,105.064c45.015,26.46,92.551,39.68,142.61,39.68
                                    c50.06,0,97.594-13.176,142.608-39.536c45.012-26.361,80.852-61.432,107.497-105.208c3.806-6.659,5.708-13.223,5.708-19.699
                                    C511.626,249.345,509.724,242.778,505.918,236.117z M194.568,158.03c17.034-17.034,37.447-25.554,61.242-25.554
                                    c3.805,0,7.043,1.336,9.709,3.999c2.662,2.664,4,5.901,4,9.707c0,3.809-1.338,7.044-3.994,9.704
                                    c-2.662,2.667-5.902,3.999-9.708,3.999c-16.368,0-30.362,5.808-41.971,17.416c-11.613,11.615-17.416,25.603-17.416,41.971
                                    c0,3.811-1.336,7.044-3.999,9.71c-2.667,2.668-5.901,3.999-9.707,3.999c-3.809,0-7.044-1.334-9.71-3.999
                                    c-2.667-2.666-3.999-5.903-3.999-9.71C169.015,195.482,177.535,175.065,194.568,158.03z M379.867,349.04
                                    c-38.164,23.12-79.514,34.687-124.054,34.687c-44.539,0-85.889-11.56-124.051-34.687s-69.901-54.2-95.215-93.222
                                    c28.931-44.921,65.19-78.518,108.777-100.783c-11.61,19.792-17.417,41.207-17.417,64.236c0,35.216,12.517,65.329,37.544,90.362
                                    s55.151,37.544,90.362,37.544c35.214,0,65.329-12.518,90.362-37.544s37.545-55.146,37.545-90.362
                                    c0-23.029-5.808-44.447-17.419-64.236c43.585,22.265,79.846,55.865,108.776,100.783C449.767,294.84,418.031,325.913,379.867,349.04
                                    z"></path>
                                                        </symbol>
                                                    </svg>
                                                    <svg class="icon" viewBox="0 0 30 30"><use xlink:href="#eye-open" x="26%" y="26%"></use></svg>
                                                    <i class="fa fa-eye" aria-hidden="true"></i><span class="lblcart">Quick View</span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="btn-wishlist">
                                            <button type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('28');"><i class="fa fa-heart"></i>
                                                <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                    <symbol id="heart-shape-outline" viewBox="0 0 1200 1200"><title>heart-shape-outline</title>
                                                        <path d="M511.825,170.191c-0.14-1.786-0.298-3.155-0.44-4.095C504.22,84.955,444.691,20.73,367.434,20.73
                                  c-44.758,0-85.66,21.18-112.442,55.516C228.835,41.679,189.491,20.73,144.97,20.73C67.976,20.73,8.584,84.52,0.937,166.557
                                  c-0.147,0.956-0.295,2.12-0.43,3.489C-0.8,183.3,0.287,200.862,5.338,222.26c10.732,45.463,35.828,86.871,71.224,118.958
                                  l164.828,144.92c8.028,7.059,20.042,7.085,28.101,0.062l166.037-144.683c39.134-40.728,62.393-77.366,71.616-119.584
                                  C511.771,200.731,512.848,183.284,511.825,170.191z M465.46,212.833c-7.254,33.204-26.552,63.603-59.352,97.843L255.545,441.771
                                  l-150.569-132.38c-28.881-26.184-49.406-60.051-58.113-96.933c-3.953-16.747-4.747-29.585-3.895-38.225
                                  c0.075-0.764,0.393-3.072,0.393-3.072C48.849,109.384,91.478,63.397,144.97,63.397c39.823,0,73.704,24.287,90.17,63.294
                                  c7.338,17.382,31.97,17.382,39.308,0c16.136-38.225,52.419-63.294,92.986-63.294c53.494,0,96.121,45.99,101.609,107.786
                                  c0.147,1.242,0.187,1.586,0.245,2.333C469.993,182.541,469.174,195.811,465.46,212.833z"></path>
                                                    </symbol>
                                                </svg>
                                                <svg class="icon" viewBox="0 0 30 30"><use xlink:href="#heart-shape-outline" x="28%" y="30%"></use></svg>
                                            </button>
                                        </div>
                                        <div class="btn-compare">
                                            <button type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('28');"><i class="fa fa-exchange"></i>
                                                <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                    <symbol id="report" viewBox="0 0 1450 1450"><title>report</title><path d="m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path><path d="m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path><path d="m480 258.667969h60v220h-60zm0 0"></path><path d="m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path><path d="m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path><path d="m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path><path d="m200 118.667969h60v360h-60zm0 0"></path><path d="m340-1.332031h60v480h-60zm0 0"></path><path d="m60 358.667969h60v120h-60zm0 0"></path><path d="m60 548.667969c.035156-3.414063.65625-6.796875 1.839844-10h-51.839844c-5.523438 0-10 4.476562-10 10 0 5.519531 4.476562 10 10 10h51.839844c-1.183594-3.203125-1.804688-6.589844-1.839844-10zm0 0"></path><path d="m118.160156 538.667969c2.457032 6.4375 2.457032 13.558593 0 20h83.679688c-2.457032-6.441407-2.457032-13.5625 0-20zm0 0"></path><path d="m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path><path d="m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path><path d="m341.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0"></path><path d="m481.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0"></path><path d="m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path><path d="m590 538.667969h-51.839844c2.457032 6.4375 2.457032 13.558593 0 20h51.839844c5.523438 0 10-4.480469 10-10 0-5.523438-4.476562-10-10-10zm0 0"></path></symbol>
                                                </svg>
                                                <svg class="icon" viewBox="0 0 40 40"><use xlink:href="#report" x="28%" y="30%"></use></svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="caption">
                                    <div class="rating">

                                  <span class="fa fa-stack">
                                    <i class="fa fa-star yellow fa-stack-2x"></i>
                                  </span>

                                        <span class="fa fa-stack">
                                    <i class="fa fa-star yellow fa-stack-2x"></i>
                                  </span>

                                        <span class="fa fa-stack">
                                    <i class="fa fa-star gray fa-stack-2x"></i>
                                  </span>

                                        <span class="fa fa-stack">
                                    <i class="fa fa-star gray fa-stack-2x"></i>
                                  </span>

                                        <span class="fa fa-stack">
                                    <i class="fa fa-star gray fa-stack-2x"></i>
                                  </span>
                                    </div>

                                    <h4><a href="https://demo.ishithemes.com/opencart/OPC140/OPC140L01/index.php?route=product/product&amp;product_id=28">Simul dolorem vol</a></h4>
                                    <p class="description">HTC Touch - in High Definition. Watch music videos and streaming content in awe-inspiring high defin..</p>
                                    <p class="price">                             $122.00
                                        <span class="price-tax">Ex Tax: $100.00</span>
                                    </p>
                                    <div class="btn-cart">
                                        <button type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('28');" >
                                            <i class="fa fa-shopping-cart"></i>
                                            <span class="lblcart">Add to Cart</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item" >
                        <div class="product-container transition">
                            <div class="product-thumb">
                                <div class="image">
                                    <a href="https://demo.ishithemes.com/opencart/OPC140/OPC140L01/index.php?route=product/product&amp;product_id=30">
                                        <img src="https://demo.ishithemes.com/opencart/OPC140/OPC140L01/image/cache/catalog/productsimage/14-535x694.png" alt="Floral Print Top" title="Floral Print Top" class="img-responsive" />
                                        <img class="product-img-extra img-responsive" alt="Floral Print Top" title="Floral Print Top" src= "https://demo.ishithemes.com/opencart/OPC140/OPC140L01/image/cache/catalog/productsimage/15-535x694.png"/>
                                    </a>

                                    <div class="button-group">
                                        <div class="btn-quickview">
                                            <div class="quickview-button button" data-toggle="tooltip" title=" Quick View">
                                                <a class="quickbox" href="https://demo.ishithemes.com/opencart/OPC140/OPC140L01/index.php?route=product/quick_view&amp;product_id=30">
                                                    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                        <symbol id="eye-open" viewBox="0 0 1050 1050"><title>eye-open</title>
                                                            <path d="M505.918,236.117c-26.651-43.587-62.485-78.609-107.497-105.065c-45.015-26.457-92.549-39.687-142.608-39.687
                                    c-50.059,0-97.595,13.225-142.61,39.687C68.187,157.508,32.355,192.53,5.708,236.117C1.903,242.778,0,249.345,0,255.818
                                    c0,6.473,1.903,13.04,5.708,19.699c26.647,43.589,62.479,78.614,107.495,105.064c45.015,26.46,92.551,39.68,142.61,39.68
                                    c50.06,0,97.594-13.176,142.608-39.536c45.012-26.361,80.852-61.432,107.497-105.208c3.806-6.659,5.708-13.223,5.708-19.699
                                    C511.626,249.345,509.724,242.778,505.918,236.117z M194.568,158.03c17.034-17.034,37.447-25.554,61.242-25.554
                                    c3.805,0,7.043,1.336,9.709,3.999c2.662,2.664,4,5.901,4,9.707c0,3.809-1.338,7.044-3.994,9.704
                                    c-2.662,2.667-5.902,3.999-9.708,3.999c-16.368,0-30.362,5.808-41.971,17.416c-11.613,11.615-17.416,25.603-17.416,41.971
                                    c0,3.811-1.336,7.044-3.999,9.71c-2.667,2.668-5.901,3.999-9.707,3.999c-3.809,0-7.044-1.334-9.71-3.999
                                    c-2.667-2.666-3.999-5.903-3.999-9.71C169.015,195.482,177.535,175.065,194.568,158.03z M379.867,349.04
                                    c-38.164,23.12-79.514,34.687-124.054,34.687c-44.539,0-85.889-11.56-124.051-34.687s-69.901-54.2-95.215-93.222
                                    c28.931-44.921,65.19-78.518,108.777-100.783c-11.61,19.792-17.417,41.207-17.417,64.236c0,35.216,12.517,65.329,37.544,90.362
                                    s55.151,37.544,90.362,37.544c35.214,0,65.329-12.518,90.362-37.544s37.545-55.146,37.545-90.362
                                    c0-23.029-5.808-44.447-17.419-64.236c43.585,22.265,79.846,55.865,108.776,100.783C449.767,294.84,418.031,325.913,379.867,349.04
                                    z"></path>
                                                        </symbol>
                                                    </svg>
                                                    <svg class="icon" viewBox="0 0 30 30"><use xlink:href="#eye-open" x="26%" y="26%"></use></svg>
                                                    <i class="fa fa-eye" aria-hidden="true"></i><span class="lblcart">Quick View</span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="btn-wishlist">
                                            <button type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('30');"><i class="fa fa-heart"></i>
                                                <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                    <symbol id="heart-shape-outline" viewBox="0 0 1200 1200"><title>heart-shape-outline</title>
                                                        <path d="M511.825,170.191c-0.14-1.786-0.298-3.155-0.44-4.095C504.22,84.955,444.691,20.73,367.434,20.73
                                  c-44.758,0-85.66,21.18-112.442,55.516C228.835,41.679,189.491,20.73,144.97,20.73C67.976,20.73,8.584,84.52,0.937,166.557
                                  c-0.147,0.956-0.295,2.12-0.43,3.489C-0.8,183.3,0.287,200.862,5.338,222.26c10.732,45.463,35.828,86.871,71.224,118.958
                                  l164.828,144.92c8.028,7.059,20.042,7.085,28.101,0.062l166.037-144.683c39.134-40.728,62.393-77.366,71.616-119.584
                                  C511.771,200.731,512.848,183.284,511.825,170.191z M465.46,212.833c-7.254,33.204-26.552,63.603-59.352,97.843L255.545,441.771
                                  l-150.569-132.38c-28.881-26.184-49.406-60.051-58.113-96.933c-3.953-16.747-4.747-29.585-3.895-38.225
                                  c0.075-0.764,0.393-3.072,0.393-3.072C48.849,109.384,91.478,63.397,144.97,63.397c39.823,0,73.704,24.287,90.17,63.294
                                  c7.338,17.382,31.97,17.382,39.308,0c16.136-38.225,52.419-63.294,92.986-63.294c53.494,0,96.121,45.99,101.609,107.786
                                  c0.147,1.242,0.187,1.586,0.245,2.333C469.993,182.541,469.174,195.811,465.46,212.833z"></path>
                                                    </symbol>
                                                </svg>
                                                <svg class="icon" viewBox="0 0 30 30"><use xlink:href="#heart-shape-outline" x="28%" y="30%"></use></svg>
                                            </button>
                                        </div>
                                        <div class="btn-compare">
                                            <button type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('30');"><i class="fa fa-exchange"></i>
                                                <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                    <symbol id="report" viewBox="0 0 1450 1450"><title>report</title><path d="m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path><path d="m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path><path d="m480 258.667969h60v220h-60zm0 0"></path><path d="m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path><path d="m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path><path d="m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path><path d="m200 118.667969h60v360h-60zm0 0"></path><path d="m340-1.332031h60v480h-60zm0 0"></path><path d="m60 358.667969h60v120h-60zm0 0"></path><path d="m60 548.667969c.035156-3.414063.65625-6.796875 1.839844-10h-51.839844c-5.523438 0-10 4.476562-10 10 0 5.519531 4.476562 10 10 10h51.839844c-1.183594-3.203125-1.804688-6.589844-1.839844-10zm0 0"></path><path d="m118.160156 538.667969c2.457032 6.4375 2.457032 13.558593 0 20h83.679688c-2.457032-6.441407-2.457032-13.5625 0-20zm0 0"></path><path d="m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path><path d="m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path><path d="m341.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0"></path><path d="m481.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0"></path><path d="m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path><path d="m590 538.667969h-51.839844c2.457032 6.4375 2.457032 13.558593 0 20h51.839844c5.523438 0 10-4.480469 10-10 0-5.523438-4.476562-10-10-10zm0 0"></path></symbol>
                                                </svg>
                                                <svg class="icon" viewBox="0 0 40 40"><use xlink:href="#report" x="28%" y="30%"></use></svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="caption">
                                    <div class="rating">

                                  <span class="fa fa-stack">
                                    <i class="fa fa-star yellow fa-stack-2x"></i>
                                  </span>

                                        <span class="fa fa-stack">
                                    <i class="fa fa-star yellow fa-stack-2x"></i>
                                  </span>

                                        <span class="fa fa-stack">
                                    <i class="fa fa-star yellow fa-stack-2x"></i>
                                  </span>

                                        <span class="fa fa-stack">
                                    <i class="fa fa-star yellow fa-stack-2x"></i>
                                  </span>

                                        <span class="fa fa-stack">
                                    <i class="fa fa-star gray fa-stack-2x"></i>
                                  </span>
                                    </div>

                                    <h4><a href="https://demo.ishithemes.com/opencart/OPC140/OPC140L01/index.php?route=product/product&amp;product_id=30">Floral Print Top</a></h4>
                                    <p class="description">Canon's press material for the EOS 5D states that it 'defines (a) new D-SLR category', while we're n..</p>
                                    <p class="price">                             $122.00
                                        <span class="price-tax">Ex Tax: $100.00</span>
                                    </p>
                                    <div class="btn-cart">
                                        <button type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('30');" >
                                            <i class="fa fa-shopping-cart"></i>
                                            <span class="lblcart">Add to Cart</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item" >
                        <div class="product-container transition">
                            <div class="product-thumb">
                                <div class="image">
                                    <a href="https://demo.ishithemes.com/opencart/OPC140/OPC140L01/index.php?route=product/product&amp;product_id=32">
                                        <img src="https://demo.ishithemes.com/opencart/OPC140/OPC140L01/image/cache/catalog/productsimage/2-535x694.png" alt="Long Gowns" title="Long Gowns" class="img-responsive" />
                                        <img class="product-img-extra img-responsive" alt="Long Gowns" title="Long Gowns" src= "https://demo.ishithemes.com/opencart/OPC140/OPC140L01/image/cache/catalog/productsimage/20-535x694.png"/>
                                    </a>

                                    <div class="button-group">
                                        <div class="btn-quickview">
                                            <div class="quickview-button button" data-toggle="tooltip" title=" Quick View">
                                                <a class="quickbox" href="https://demo.ishithemes.com/opencart/OPC140/OPC140L01/index.php?route=product/quick_view&amp;product_id=32">
                                                    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                        <symbol id="eye-open" viewBox="0 0 1050 1050"><title>eye-open</title>
                                                            <path d="M505.918,236.117c-26.651-43.587-62.485-78.609-107.497-105.065c-45.015-26.457-92.549-39.687-142.608-39.687
                                    c-50.059,0-97.595,13.225-142.61,39.687C68.187,157.508,32.355,192.53,5.708,236.117C1.903,242.778,0,249.345,0,255.818
                                    c0,6.473,1.903,13.04,5.708,19.699c26.647,43.589,62.479,78.614,107.495,105.064c45.015,26.46,92.551,39.68,142.61,39.68
                                    c50.06,0,97.594-13.176,142.608-39.536c45.012-26.361,80.852-61.432,107.497-105.208c3.806-6.659,5.708-13.223,5.708-19.699
                                    C511.626,249.345,509.724,242.778,505.918,236.117z M194.568,158.03c17.034-17.034,37.447-25.554,61.242-25.554
                                    c3.805,0,7.043,1.336,9.709,3.999c2.662,2.664,4,5.901,4,9.707c0,3.809-1.338,7.044-3.994,9.704
                                    c-2.662,2.667-5.902,3.999-9.708,3.999c-16.368,0-30.362,5.808-41.971,17.416c-11.613,11.615-17.416,25.603-17.416,41.971
                                    c0,3.811-1.336,7.044-3.999,9.71c-2.667,2.668-5.901,3.999-9.707,3.999c-3.809,0-7.044-1.334-9.71-3.999
                                    c-2.667-2.666-3.999-5.903-3.999-9.71C169.015,195.482,177.535,175.065,194.568,158.03z M379.867,349.04
                                    c-38.164,23.12-79.514,34.687-124.054,34.687c-44.539,0-85.889-11.56-124.051-34.687s-69.901-54.2-95.215-93.222
                                    c28.931-44.921,65.19-78.518,108.777-100.783c-11.61,19.792-17.417,41.207-17.417,64.236c0,35.216,12.517,65.329,37.544,90.362
                                    s55.151,37.544,90.362,37.544c35.214,0,65.329-12.518,90.362-37.544s37.545-55.146,37.545-90.362
                                    c0-23.029-5.808-44.447-17.419-64.236c43.585,22.265,79.846,55.865,108.776,100.783C449.767,294.84,418.031,325.913,379.867,349.04
                                    z"></path>
                                                        </symbol>
                                                    </svg>
                                                    <svg class="icon" viewBox="0 0 30 30"><use xlink:href="#eye-open" x="26%" y="26%"></use></svg>
                                                    <i class="fa fa-eye" aria-hidden="true"></i><span class="lblcart">Quick View</span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="btn-wishlist">
                                            <button type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('32');"><i class="fa fa-heart"></i>
                                                <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                    <symbol id="heart-shape-outline" viewBox="0 0 1200 1200"><title>heart-shape-outline</title>
                                                        <path d="M511.825,170.191c-0.14-1.786-0.298-3.155-0.44-4.095C504.22,84.955,444.691,20.73,367.434,20.73
                                  c-44.758,0-85.66,21.18-112.442,55.516C228.835,41.679,189.491,20.73,144.97,20.73C67.976,20.73,8.584,84.52,0.937,166.557
                                  c-0.147,0.956-0.295,2.12-0.43,3.489C-0.8,183.3,0.287,200.862,5.338,222.26c10.732,45.463,35.828,86.871,71.224,118.958
                                  l164.828,144.92c8.028,7.059,20.042,7.085,28.101,0.062l166.037-144.683c39.134-40.728,62.393-77.366,71.616-119.584
                                  C511.771,200.731,512.848,183.284,511.825,170.191z M465.46,212.833c-7.254,33.204-26.552,63.603-59.352,97.843L255.545,441.771
                                  l-150.569-132.38c-28.881-26.184-49.406-60.051-58.113-96.933c-3.953-16.747-4.747-29.585-3.895-38.225
                                  c0.075-0.764,0.393-3.072,0.393-3.072C48.849,109.384,91.478,63.397,144.97,63.397c39.823,0,73.704,24.287,90.17,63.294
                                  c7.338,17.382,31.97,17.382,39.308,0c16.136-38.225,52.419-63.294,92.986-63.294c53.494,0,96.121,45.99,101.609,107.786
                                  c0.147,1.242,0.187,1.586,0.245,2.333C469.993,182.541,469.174,195.811,465.46,212.833z"></path>
                                                    </symbol>
                                                </svg>
                                                <svg class="icon" viewBox="0 0 30 30"><use xlink:href="#heart-shape-outline" x="28%" y="30%"></use></svg>
                                            </button>
                                        </div>
                                        <div class="btn-compare">
                                            <button type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('32');"><i class="fa fa-exchange"></i>
                                                <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                    <symbol id="report" viewBox="0 0 1450 1450"><title>report</title><path d="m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path><path d="m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path><path d="m480 258.667969h60v220h-60zm0 0"></path><path d="m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path><path d="m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path><path d="m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path><path d="m200 118.667969h60v360h-60zm0 0"></path><path d="m340-1.332031h60v480h-60zm0 0"></path><path d="m60 358.667969h60v120h-60zm0 0"></path><path d="m60 548.667969c.035156-3.414063.65625-6.796875 1.839844-10h-51.839844c-5.523438 0-10 4.476562-10 10 0 5.519531 4.476562 10 10 10h51.839844c-1.183594-3.203125-1.804688-6.589844-1.839844-10zm0 0"></path><path d="m118.160156 538.667969c2.457032 6.4375 2.457032 13.558593 0 20h83.679688c-2.457032-6.441407-2.457032-13.5625 0-20zm0 0"></path><path d="m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path><path d="m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path><path d="m341.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0"></path><path d="m481.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0"></path><path d="m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path><path d="m590 538.667969h-51.839844c2.457032 6.4375 2.457032 13.558593 0 20h51.839844c5.523438 0 10-4.480469 10-10 0-5.523438-4.476562-10-10-10zm0 0"></path></symbol>
                                                </svg>
                                                <svg class="icon" viewBox="0 0 40 40"><use xlink:href="#report" x="28%" y="30%"></use></svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="caption">
                                    <div class="rating">

                                  <span class="fa fa-stack">
                                    <i class="fa fa-star yellow fa-stack-2x"></i>
                                  </span>

                                        <span class="fa fa-stack">
                                    <i class="fa fa-star yellow fa-stack-2x"></i>
                                  </span>

                                        <span class="fa fa-stack">
                                    <i class="fa fa-star yellow fa-stack-2x"></i>
                                  </span>

                                        <span class="fa fa-stack">
                                    <i class="fa fa-star gray fa-stack-2x"></i>
                                  </span>

                                        <span class="fa fa-stack">
                                    <i class="fa fa-star gray fa-stack-2x"></i>
                                  </span>
                                    </div>

                                    <h4><a href="https://demo.ishithemes.com/opencart/OPC140/OPC140L01/index.php?route=product/product&amp;product_id=32">Long Gowns</a></h4>
                                    <p class="description">Revolutionary multi-touch interface.
                                        iPod touch features the same multi-touch screen technology as..</p>
                                    <p class="price">  <span class="price-new">$62.00</span> <span class="price-old">$122.00</span>                              <span class="price-tax">Ex Tax: $50.00</span>
                                    </p>
                                    <div class="btn-cart">
                                        <button type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('32');" >
                                            <i class="fa fa-shopping-cart"></i>
                                            <span class="lblcart">Add to Cart</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item" >
                        <div class="product-container transition">
                            <div class="product-thumb">
                                <div class="image">
                                    <a href="https://demo.ishithemes.com/opencart/OPC140/OPC140L01/index.php?route=product/product&amp;product_id=33">
                                        <img src="https://demo.ishithemes.com/opencart/OPC140/OPC140L01/image/cache/catalog/productsimage/10-535x694.png" alt="Basic style coat" title="Basic style coat" class="img-responsive" />
                                        <img class="product-img-extra img-responsive" alt="Basic style coat" title="Basic style coat" src= "https://demo.ishithemes.com/opencart/OPC140/OPC140L01/image/cache/catalog/productsimage/11-535x694.png"/>
                                    </a>

                                    <div class="button-group">
                                        <div class="btn-quickview">
                                            <div class="quickview-button button" data-toggle="tooltip" title=" Quick View">
                                                <a class="quickbox" href="https://demo.ishithemes.com/opencart/OPC140/OPC140L01/index.php?route=product/quick_view&amp;product_id=33">
                                                    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                        <symbol id="eye-open" viewBox="0 0 1050 1050"><title>eye-open</title>
                                                            <path d="M505.918,236.117c-26.651-43.587-62.485-78.609-107.497-105.065c-45.015-26.457-92.549-39.687-142.608-39.687
                                    c-50.059,0-97.595,13.225-142.61,39.687C68.187,157.508,32.355,192.53,5.708,236.117C1.903,242.778,0,249.345,0,255.818
                                    c0,6.473,1.903,13.04,5.708,19.699c26.647,43.589,62.479,78.614,107.495,105.064c45.015,26.46,92.551,39.68,142.61,39.68
                                    c50.06,0,97.594-13.176,142.608-39.536c45.012-26.361,80.852-61.432,107.497-105.208c3.806-6.659,5.708-13.223,5.708-19.699
                                    C511.626,249.345,509.724,242.778,505.918,236.117z M194.568,158.03c17.034-17.034,37.447-25.554,61.242-25.554
                                    c3.805,0,7.043,1.336,9.709,3.999c2.662,2.664,4,5.901,4,9.707c0,3.809-1.338,7.044-3.994,9.704
                                    c-2.662,2.667-5.902,3.999-9.708,3.999c-16.368,0-30.362,5.808-41.971,17.416c-11.613,11.615-17.416,25.603-17.416,41.971
                                    c0,3.811-1.336,7.044-3.999,9.71c-2.667,2.668-5.901,3.999-9.707,3.999c-3.809,0-7.044-1.334-9.71-3.999
                                    c-2.667-2.666-3.999-5.903-3.999-9.71C169.015,195.482,177.535,175.065,194.568,158.03z M379.867,349.04
                                    c-38.164,23.12-79.514,34.687-124.054,34.687c-44.539,0-85.889-11.56-124.051-34.687s-69.901-54.2-95.215-93.222
                                    c28.931-44.921,65.19-78.518,108.777-100.783c-11.61,19.792-17.417,41.207-17.417,64.236c0,35.216,12.517,65.329,37.544,90.362
                                    s55.151,37.544,90.362,37.544c35.214,0,65.329-12.518,90.362-37.544s37.545-55.146,37.545-90.362
                                    c0-23.029-5.808-44.447-17.419-64.236c43.585,22.265,79.846,55.865,108.776,100.783C449.767,294.84,418.031,325.913,379.867,349.04
                                    z"></path>
                                                        </symbol>
                                                    </svg>
                                                    <svg class="icon" viewBox="0 0 30 30"><use xlink:href="#eye-open" x="26%" y="26%"></use></svg>
                                                    <i class="fa fa-eye" aria-hidden="true"></i><span class="lblcart">Quick View</span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="btn-wishlist">
                                            <button type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('33');"><i class="fa fa-heart"></i>
                                                <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                    <symbol id="heart-shape-outline" viewBox="0 0 1200 1200"><title>heart-shape-outline</title>
                                                        <path d="M511.825,170.191c-0.14-1.786-0.298-3.155-0.44-4.095C504.22,84.955,444.691,20.73,367.434,20.73
                                  c-44.758,0-85.66,21.18-112.442,55.516C228.835,41.679,189.491,20.73,144.97,20.73C67.976,20.73,8.584,84.52,0.937,166.557
                                  c-0.147,0.956-0.295,2.12-0.43,3.489C-0.8,183.3,0.287,200.862,5.338,222.26c10.732,45.463,35.828,86.871,71.224,118.958
                                  l164.828,144.92c8.028,7.059,20.042,7.085,28.101,0.062l166.037-144.683c39.134-40.728,62.393-77.366,71.616-119.584
                                  C511.771,200.731,512.848,183.284,511.825,170.191z M465.46,212.833c-7.254,33.204-26.552,63.603-59.352,97.843L255.545,441.771
                                  l-150.569-132.38c-28.881-26.184-49.406-60.051-58.113-96.933c-3.953-16.747-4.747-29.585-3.895-38.225
                                  c0.075-0.764,0.393-3.072,0.393-3.072C48.849,109.384,91.478,63.397,144.97,63.397c39.823,0,73.704,24.287,90.17,63.294
                                  c7.338,17.382,31.97,17.382,39.308,0c16.136-38.225,52.419-63.294,92.986-63.294c53.494,0,96.121,45.99,101.609,107.786
                                  c0.147,1.242,0.187,1.586,0.245,2.333C469.993,182.541,469.174,195.811,465.46,212.833z"></path>
                                                    </symbol>
                                                </svg>
                                                <svg class="icon" viewBox="0 0 30 30"><use xlink:href="#heart-shape-outline" x="28%" y="30%"></use></svg>
                                            </button>
                                        </div>
                                        <div class="btn-compare">
                                            <button type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('33');"><i class="fa fa-exchange"></i>
                                                <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                    <symbol id="report" viewBox="0 0 1450 1450"><title>report</title><path d="m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path><path d="m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path><path d="m480 258.667969h60v220h-60zm0 0"></path><path d="m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path><path d="m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path><path d="m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path><path d="m200 118.667969h60v360h-60zm0 0"></path><path d="m340-1.332031h60v480h-60zm0 0"></path><path d="m60 358.667969h60v120h-60zm0 0"></path><path d="m60 548.667969c.035156-3.414063.65625-6.796875 1.839844-10h-51.839844c-5.523438 0-10 4.476562-10 10 0 5.519531 4.476562 10 10 10h51.839844c-1.183594-3.203125-1.804688-6.589844-1.839844-10zm0 0"></path><path d="m118.160156 538.667969c2.457032 6.4375 2.457032 13.558593 0 20h83.679688c-2.457032-6.441407-2.457032-13.5625 0-20zm0 0"></path><path d="m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path><path d="m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path><path d="m341.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0"></path><path d="m481.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0"></path><path d="m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path><path d="m590 538.667969h-51.839844c2.457032 6.4375 2.457032 13.558593 0 20h51.839844c5.523438 0 10-4.480469 10-10 0-5.523438-4.476562-10-10-10zm0 0"></path></symbol>
                                                </svg>
                                                <svg class="icon" viewBox="0 0 40 40"><use xlink:href="#report" x="28%" y="30%"></use></svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="caption">
                                    <div class="rating">
                                                            <span class="fa fa-stack">
                                <i class="fa fa-star gray fa-stack-2x"></i>
                                </span>
                                        <span class="fa fa-stack">
                                <i class="fa fa-star gray fa-stack-2x"></i>
                                </span>
                                        <span class="fa fa-stack">
                                <i class="fa fa-star gray fa-stack-2x"></i>
                                </span>
                                        <span class="fa fa-stack">
                                <i class="fa fa-star gray fa-stack-2x"></i>
                                </span>
                                        <span class="fa fa-stack">
                                <i class="fa fa-star gray fa-stack-2x"></i>
                                </span>
                                    </div>

                                    <h4><a href="https://demo.ishithemes.com/opencart/OPC140/OPC140L01/index.php?route=product/product&amp;product_id=33">Basic style coat</a></h4>
                                    <p class="description">Imagine the advantages of going big without slowing down. The big 19&quot; 941BW monitor combines wi..</p>
                                    <p class="price">  <span class="price-new">$26.00</span> <span class="price-old">$242.00</span>                              <span class="price-tax">Ex Tax: $20.00</span>
                                    </p>
                                    <div class="btn-cart">
                                        <button type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('33');" >
                                            <i class="fa fa-shopping-cart"></i>
                                            <span class="lblcart">Add to Cart</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item" >
                        <div class="product-container transition">
                            <div class="product-thumb">
                                <div class="image">
                                    <a href="https://demo.ishithemes.com/opencart/OPC140/OPC140L01/index.php?route=product/product&amp;product_id=34">
                                        <img src="https://demo.ishithemes.com/opencart/OPC140/OPC140L01/image/cache/catalog/productsimage/15-535x694.png" alt="Basic contrast sne" title="Basic contrast sne" class="img-responsive" />
                                        <img class="product-img-extra img-responsive" alt="Basic contrast sne" title="Basic contrast sne" src= "https://demo.ishithemes.com/opencart/OPC140/OPC140L01/image/cache/catalog/productsimage/16-535x694.png"/>
                                    </a>

                                    <div class="button-group">
                                        <div class="btn-quickview">
                                            <div class="quickview-button button" data-toggle="tooltip" title=" Quick View">
                                                <a class="quickbox" href="https://demo.ishithemes.com/opencart/OPC140/OPC140L01/index.php?route=product/quick_view&amp;product_id=34">
                                                    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                        <symbol id="eye-open" viewBox="0 0 1050 1050"><title>eye-open</title>
                                                            <path d="M505.918,236.117c-26.651-43.587-62.485-78.609-107.497-105.065c-45.015-26.457-92.549-39.687-142.608-39.687
                                    c-50.059,0-97.595,13.225-142.61,39.687C68.187,157.508,32.355,192.53,5.708,236.117C1.903,242.778,0,249.345,0,255.818
                                    c0,6.473,1.903,13.04,5.708,19.699c26.647,43.589,62.479,78.614,107.495,105.064c45.015,26.46,92.551,39.68,142.61,39.68
                                    c50.06,0,97.594-13.176,142.608-39.536c45.012-26.361,80.852-61.432,107.497-105.208c3.806-6.659,5.708-13.223,5.708-19.699
                                    C511.626,249.345,509.724,242.778,505.918,236.117z M194.568,158.03c17.034-17.034,37.447-25.554,61.242-25.554
                                    c3.805,0,7.043,1.336,9.709,3.999c2.662,2.664,4,5.901,4,9.707c0,3.809-1.338,7.044-3.994,9.704
                                    c-2.662,2.667-5.902,3.999-9.708,3.999c-16.368,0-30.362,5.808-41.971,17.416c-11.613,11.615-17.416,25.603-17.416,41.971
                                    c0,3.811-1.336,7.044-3.999,9.71c-2.667,2.668-5.901,3.999-9.707,3.999c-3.809,0-7.044-1.334-9.71-3.999
                                    c-2.667-2.666-3.999-5.903-3.999-9.71C169.015,195.482,177.535,175.065,194.568,158.03z M379.867,349.04
                                    c-38.164,23.12-79.514,34.687-124.054,34.687c-44.539,0-85.889-11.56-124.051-34.687s-69.901-54.2-95.215-93.222
                                    c28.931-44.921,65.19-78.518,108.777-100.783c-11.61,19.792-17.417,41.207-17.417,64.236c0,35.216,12.517,65.329,37.544,90.362
                                    s55.151,37.544,90.362,37.544c35.214,0,65.329-12.518,90.362-37.544s37.545-55.146,37.545-90.362
                                    c0-23.029-5.808-44.447-17.419-64.236c43.585,22.265,79.846,55.865,108.776,100.783C449.767,294.84,418.031,325.913,379.867,349.04
                                    z"></path>
                                                        </symbol>
                                                    </svg>
                                                    <svg class="icon" viewBox="0 0 30 30"><use xlink:href="#eye-open" x="26%" y="26%"></use></svg>
                                                    <i class="fa fa-eye" aria-hidden="true"></i><span class="lblcart">Quick View</span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="btn-wishlist">
                                            <button type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('34');"><i class="fa fa-heart"></i>
                                                <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                    <symbol id="heart-shape-outline" viewBox="0 0 1200 1200"><title>heart-shape-outline</title>
                                                        <path d="M511.825,170.191c-0.14-1.786-0.298-3.155-0.44-4.095C504.22,84.955,444.691,20.73,367.434,20.73
                                  c-44.758,0-85.66,21.18-112.442,55.516C228.835,41.679,189.491,20.73,144.97,20.73C67.976,20.73,8.584,84.52,0.937,166.557
                                  c-0.147,0.956-0.295,2.12-0.43,3.489C-0.8,183.3,0.287,200.862,5.338,222.26c10.732,45.463,35.828,86.871,71.224,118.958
                                  l164.828,144.92c8.028,7.059,20.042,7.085,28.101,0.062l166.037-144.683c39.134-40.728,62.393-77.366,71.616-119.584
                                  C511.771,200.731,512.848,183.284,511.825,170.191z M465.46,212.833c-7.254,33.204-26.552,63.603-59.352,97.843L255.545,441.771
                                  l-150.569-132.38c-28.881-26.184-49.406-60.051-58.113-96.933c-3.953-16.747-4.747-29.585-3.895-38.225
                                  c0.075-0.764,0.393-3.072,0.393-3.072C48.849,109.384,91.478,63.397,144.97,63.397c39.823,0,73.704,24.287,90.17,63.294
                                  c7.338,17.382,31.97,17.382,39.308,0c16.136-38.225,52.419-63.294,92.986-63.294c53.494,0,96.121,45.99,101.609,107.786
                                  c0.147,1.242,0.187,1.586,0.245,2.333C469.993,182.541,469.174,195.811,465.46,212.833z"></path>
                                                    </symbol>
                                                </svg>
                                                <svg class="icon" viewBox="0 0 30 30"><use xlink:href="#heart-shape-outline" x="28%" y="30%"></use></svg>
                                            </button>
                                        </div>
                                        <div class="btn-compare">
                                            <button type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('34');"><i class="fa fa-exchange"></i>
                                                <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                    <symbol id="report" viewBox="0 0 1450 1450"><title>report</title><path d="m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path><path d="m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path><path d="m480 258.667969h60v220h-60zm0 0"></path><path d="m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path><path d="m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path><path d="m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path><path d="m200 118.667969h60v360h-60zm0 0"></path><path d="m340-1.332031h60v480h-60zm0 0"></path><path d="m60 358.667969h60v120h-60zm0 0"></path><path d="m60 548.667969c.035156-3.414063.65625-6.796875 1.839844-10h-51.839844c-5.523438 0-10 4.476562-10 10 0 5.519531 4.476562 10 10 10h51.839844c-1.183594-3.203125-1.804688-6.589844-1.839844-10zm0 0"></path><path d="m118.160156 538.667969c2.457032 6.4375 2.457032 13.558593 0 20h83.679688c-2.457032-6.441407-2.457032-13.5625 0-20zm0 0"></path><path d="m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path><path d="m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path><path d="m341.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0"></path><path d="m481.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0"></path><path d="m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path><path d="m590 538.667969h-51.839844c2.457032 6.4375 2.457032 13.558593 0 20h51.839844c5.523438 0 10-4.480469 10-10 0-5.523438-4.476562-10-10-10zm0 0"></path></symbol>
                                                </svg>
                                                <svg class="icon" viewBox="0 0 40 40"><use xlink:href="#report" x="28%" y="30%"></use></svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="caption">
                                    <div class="rating">

                                  <span class="fa fa-stack">
                                    <i class="fa fa-star yellow fa-stack-2x"></i>
                                  </span>

                                        <span class="fa fa-stack">
                                    <i class="fa fa-star yellow fa-stack-2x"></i>
                                  </span>

                                        <span class="fa fa-stack">
                                    <i class="fa fa-star yellow fa-stack-2x"></i>
                                  </span>

                                        <span class="fa fa-stack">
                                    <i class="fa fa-star gray fa-stack-2x"></i>
                                  </span>

                                        <span class="fa fa-stack">
                                    <i class="fa fa-star gray fa-stack-2x"></i>
                                  </span>
                                    </div>

                                    <h4><a href="https://demo.ishithemes.com/opencart/OPC140/OPC140L01/index.php?route=product/product&amp;product_id=34">Basic contrast sne</a></h4>
                                    <p class="description">Born to be worn.

                                        Clip on the worlds most wearable music player and take up to 240 songs with y..</p>
                                    <p class="price">                             $122.00
                                        <span class="price-tax">Ex Tax: $100.00</span>
                                    </p>
                                    <div class="btn-cart">
                                        <button type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('34');" >
                                            <i class="fa fa-shopping-cart"></i>
                                            <span class="lblcart">Add to Cart</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item" >
                        <div class="product-container transition">
                            <div class="product-thumb">
                                <div class="image">
                                    <a href="https://demo.ishithemes.com/opencart/OPC140/OPC140L01/index.php?route=product/product&amp;product_id=36">
                                        <img src="https://demo.ishithemes.com/opencart/OPC140/OPC140L01/image/cache/catalog/productsimage/19-535x694.png" alt="Girls Formal wear" title="Girls Formal wear" class="img-responsive" />
                                        <img class="product-img-extra img-responsive" alt="Girls Formal wear" title="Girls Formal wear" src= "https://demo.ishithemes.com/opencart/OPC140/OPC140L01/image/cache/catalog/productsimage/11-535x694.png"/>
                                    </a>

                                    <div class="button-group">
                                        <div class="btn-quickview">
                                            <div class="quickview-button button" data-toggle="tooltip" title=" Quick View">
                                                <a class="quickbox" href="https://demo.ishithemes.com/opencart/OPC140/OPC140L01/index.php?route=product/quick_view&amp;product_id=36">
                                                    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                        <symbol id="eye-open" viewBox="0 0 1050 1050"><title>eye-open</title>
                                                            <path d="M505.918,236.117c-26.651-43.587-62.485-78.609-107.497-105.065c-45.015-26.457-92.549-39.687-142.608-39.687
                                    c-50.059,0-97.595,13.225-142.61,39.687C68.187,157.508,32.355,192.53,5.708,236.117C1.903,242.778,0,249.345,0,255.818
                                    c0,6.473,1.903,13.04,5.708,19.699c26.647,43.589,62.479,78.614,107.495,105.064c45.015,26.46,92.551,39.68,142.61,39.68
                                    c50.06,0,97.594-13.176,142.608-39.536c45.012-26.361,80.852-61.432,107.497-105.208c3.806-6.659,5.708-13.223,5.708-19.699
                                    C511.626,249.345,509.724,242.778,505.918,236.117z M194.568,158.03c17.034-17.034,37.447-25.554,61.242-25.554
                                    c3.805,0,7.043,1.336,9.709,3.999c2.662,2.664,4,5.901,4,9.707c0,3.809-1.338,7.044-3.994,9.704
                                    c-2.662,2.667-5.902,3.999-9.708,3.999c-16.368,0-30.362,5.808-41.971,17.416c-11.613,11.615-17.416,25.603-17.416,41.971
                                    c0,3.811-1.336,7.044-3.999,9.71c-2.667,2.668-5.901,3.999-9.707,3.999c-3.809,0-7.044-1.334-9.71-3.999
                                    c-2.667-2.666-3.999-5.903-3.999-9.71C169.015,195.482,177.535,175.065,194.568,158.03z M379.867,349.04
                                    c-38.164,23.12-79.514,34.687-124.054,34.687c-44.539,0-85.889-11.56-124.051-34.687s-69.901-54.2-95.215-93.222
                                    c28.931-44.921,65.19-78.518,108.777-100.783c-11.61,19.792-17.417,41.207-17.417,64.236c0,35.216,12.517,65.329,37.544,90.362
                                    s55.151,37.544,90.362,37.544c35.214,0,65.329-12.518,90.362-37.544s37.545-55.146,37.545-90.362
                                    c0-23.029-5.808-44.447-17.419-64.236c43.585,22.265,79.846,55.865,108.776,100.783C449.767,294.84,418.031,325.913,379.867,349.04
                                    z"></path>
                                                        </symbol>
                                                    </svg>
                                                    <svg class="icon" viewBox="0 0 30 30"><use xlink:href="#eye-open" x="26%" y="26%"></use></svg>
                                                    <i class="fa fa-eye" aria-hidden="true"></i><span class="lblcart">Quick View</span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="btn-wishlist">
                                            <button type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('36');"><i class="fa fa-heart"></i>
                                                <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                    <symbol id="heart-shape-outline" viewBox="0 0 1200 1200"><title>heart-shape-outline</title>
                                                        <path d="M511.825,170.191c-0.14-1.786-0.298-3.155-0.44-4.095C504.22,84.955,444.691,20.73,367.434,20.73
                                  c-44.758,0-85.66,21.18-112.442,55.516C228.835,41.679,189.491,20.73,144.97,20.73C67.976,20.73,8.584,84.52,0.937,166.557
                                  c-0.147,0.956-0.295,2.12-0.43,3.489C-0.8,183.3,0.287,200.862,5.338,222.26c10.732,45.463,35.828,86.871,71.224,118.958
                                  l164.828,144.92c8.028,7.059,20.042,7.085,28.101,0.062l166.037-144.683c39.134-40.728,62.393-77.366,71.616-119.584
                                  C511.771,200.731,512.848,183.284,511.825,170.191z M465.46,212.833c-7.254,33.204-26.552,63.603-59.352,97.843L255.545,441.771
                                  l-150.569-132.38c-28.881-26.184-49.406-60.051-58.113-96.933c-3.953-16.747-4.747-29.585-3.895-38.225
                                  c0.075-0.764,0.393-3.072,0.393-3.072C48.849,109.384,91.478,63.397,144.97,63.397c39.823,0,73.704,24.287,90.17,63.294
                                  c7.338,17.382,31.97,17.382,39.308,0c16.136-38.225,52.419-63.294,92.986-63.294c53.494,0,96.121,45.99,101.609,107.786
                                  c0.147,1.242,0.187,1.586,0.245,2.333C469.993,182.541,469.174,195.811,465.46,212.833z"></path>
                                                    </symbol>
                                                </svg>
                                                <svg class="icon" viewBox="0 0 30 30"><use xlink:href="#heart-shape-outline" x="28%" y="30%"></use></svg>
                                            </button>
                                        </div>
                                        <div class="btn-compare">
                                            <button type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('36');"><i class="fa fa-exchange"></i>
                                                <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                    <symbol id="report" viewBox="0 0 1450 1450"><title>report</title><path d="m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path><path d="m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path><path d="m480 258.667969h60v220h-60zm0 0"></path><path d="m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path><path d="m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path><path d="m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path><path d="m200 118.667969h60v360h-60zm0 0"></path><path d="m340-1.332031h60v480h-60zm0 0"></path><path d="m60 358.667969h60v120h-60zm0 0"></path><path d="m60 548.667969c.035156-3.414063.65625-6.796875 1.839844-10h-51.839844c-5.523438 0-10 4.476562-10 10 0 5.519531 4.476562 10 10 10h51.839844c-1.183594-3.203125-1.804688-6.589844-1.839844-10zm0 0"></path><path d="m118.160156 538.667969c2.457032 6.4375 2.457032 13.558593 0 20h83.679688c-2.457032-6.441407-2.457032-13.5625 0-20zm0 0"></path><path d="m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path><path d="m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path><path d="m341.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0"></path><path d="m481.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0"></path><path d="m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path><path d="m590 538.667969h-51.839844c2.457032 6.4375 2.457032 13.558593 0 20h51.839844c5.523438 0 10-4.480469 10-10 0-5.523438-4.476562-10-10-10zm0 0"></path></symbol>
                                                </svg>
                                                <svg class="icon" viewBox="0 0 40 40"><use xlink:href="#report" x="28%" y="30%"></use></svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="caption">
                                    <div class="rating">

                                  <span class="fa fa-stack">
                                    <i class="fa fa-star yellow fa-stack-2x"></i>
                                  </span>

                                        <span class="fa fa-stack">
                                    <i class="fa fa-star yellow fa-stack-2x"></i>
                                  </span>

                                        <span class="fa fa-stack">
                                    <i class="fa fa-star yellow fa-stack-2x"></i>
                                  </span>

                                        <span class="fa fa-stack">
                                    <i class="fa fa-star yellow fa-stack-2x"></i>
                                  </span>

                                        <span class="fa fa-stack">
                                    <i class="fa fa-star yellow fa-stack-2x"></i>
                                  </span>
                                    </div>

                                    <h4><a href="https://demo.ishithemes.com/opencart/OPC140/OPC140L01/index.php?route=product/product&amp;product_id=36">Girls Formal wear</a></h4>
                                    <p class="description">Video in your pocket.

                                        Its the small iPod with one very big idea: video. The worlds most popula..</p>
                                    <p class="price">                             $122.00
                                        <span class="price-tax">Ex Tax: $100.00</span>
                                    </p>
                                    <div class="btn-cart">
                                        <button type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('36');" >
                                            <i class="fa fa-shopping-cart"></i>
                                            <span class="lblcart">Add to Cart</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item" >
                        <div class="product-container transition">
                            <div class="product-thumb">
                                <div class="image">
                                    <a href="https://demo.ishithemes.com/opencart/OPC140/OPC140L01/index.php?route=product/product&amp;product_id=40">
                                        <img src="https://demo.ishithemes.com/opencart/OPC140/OPC140L01/image/cache/catalog/productsimage/20-535x694.png" alt="Full Sleeve T-shirt" title="Full Sleeve T-shirt" class="img-responsive" />
                                        <img class="product-img-extra img-responsive" alt="Full Sleeve T-shirt" title="Full Sleeve T-shirt" src= "https://demo.ishithemes.com/opencart/OPC140/OPC140L01/image/cache/catalog/productsimage/18-535x694.png"/>
                                    </a>

                                    <div class="button-group">
                                        <div class="btn-quickview">
                                            <div class="quickview-button button" data-toggle="tooltip" title=" Quick View">
                                                <a class="quickbox" href="https://demo.ishithemes.com/opencart/OPC140/OPC140L01/index.php?route=product/quick_view&amp;product_id=40">
                                                    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                        <symbol id="eye-open" viewBox="0 0 1050 1050"><title>eye-open</title>
                                                            <path d="M505.918,236.117c-26.651-43.587-62.485-78.609-107.497-105.065c-45.015-26.457-92.549-39.687-142.608-39.687
                                    c-50.059,0-97.595,13.225-142.61,39.687C68.187,157.508,32.355,192.53,5.708,236.117C1.903,242.778,0,249.345,0,255.818
                                    c0,6.473,1.903,13.04,5.708,19.699c26.647,43.589,62.479,78.614,107.495,105.064c45.015,26.46,92.551,39.68,142.61,39.68
                                    c50.06,0,97.594-13.176,142.608-39.536c45.012-26.361,80.852-61.432,107.497-105.208c3.806-6.659,5.708-13.223,5.708-19.699
                                    C511.626,249.345,509.724,242.778,505.918,236.117z M194.568,158.03c17.034-17.034,37.447-25.554,61.242-25.554
                                    c3.805,0,7.043,1.336,9.709,3.999c2.662,2.664,4,5.901,4,9.707c0,3.809-1.338,7.044-3.994,9.704
                                    c-2.662,2.667-5.902,3.999-9.708,3.999c-16.368,0-30.362,5.808-41.971,17.416c-11.613,11.615-17.416,25.603-17.416,41.971
                                    c0,3.811-1.336,7.044-3.999,9.71c-2.667,2.668-5.901,3.999-9.707,3.999c-3.809,0-7.044-1.334-9.71-3.999
                                    c-2.667-2.666-3.999-5.903-3.999-9.71C169.015,195.482,177.535,175.065,194.568,158.03z M379.867,349.04
                                    c-38.164,23.12-79.514,34.687-124.054,34.687c-44.539,0-85.889-11.56-124.051-34.687s-69.901-54.2-95.215-93.222
                                    c28.931-44.921,65.19-78.518,108.777-100.783c-11.61,19.792-17.417,41.207-17.417,64.236c0,35.216,12.517,65.329,37.544,90.362
                                    s55.151,37.544,90.362,37.544c35.214,0,65.329-12.518,90.362-37.544s37.545-55.146,37.545-90.362
                                    c0-23.029-5.808-44.447-17.419-64.236c43.585,22.265,79.846,55.865,108.776,100.783C449.767,294.84,418.031,325.913,379.867,349.04
                                    z"></path>
                                                        </symbol>
                                                    </svg>
                                                    <svg class="icon" viewBox="0 0 30 30"><use xlink:href="#eye-open" x="26%" y="26%"></use></svg>
                                                    <i class="fa fa-eye" aria-hidden="true"></i><span class="lblcart">Quick View</span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="btn-wishlist">
                                            <button type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('40');"><i class="fa fa-heart"></i>
                                                <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                    <symbol id="heart-shape-outline" viewBox="0 0 1200 1200"><title>heart-shape-outline</title>
                                                        <path d="M511.825,170.191c-0.14-1.786-0.298-3.155-0.44-4.095C504.22,84.955,444.691,20.73,367.434,20.73
                                  c-44.758,0-85.66,21.18-112.442,55.516C228.835,41.679,189.491,20.73,144.97,20.73C67.976,20.73,8.584,84.52,0.937,166.557
                                  c-0.147,0.956-0.295,2.12-0.43,3.489C-0.8,183.3,0.287,200.862,5.338,222.26c10.732,45.463,35.828,86.871,71.224,118.958
                                  l164.828,144.92c8.028,7.059,20.042,7.085,28.101,0.062l166.037-144.683c39.134-40.728,62.393-77.366,71.616-119.584
                                  C511.771,200.731,512.848,183.284,511.825,170.191z M465.46,212.833c-7.254,33.204-26.552,63.603-59.352,97.843L255.545,441.771
                                  l-150.569-132.38c-28.881-26.184-49.406-60.051-58.113-96.933c-3.953-16.747-4.747-29.585-3.895-38.225
                                  c0.075-0.764,0.393-3.072,0.393-3.072C48.849,109.384,91.478,63.397,144.97,63.397c39.823,0,73.704,24.287,90.17,63.294
                                  c7.338,17.382,31.97,17.382,39.308,0c16.136-38.225,52.419-63.294,92.986-63.294c53.494,0,96.121,45.99,101.609,107.786
                                  c0.147,1.242,0.187,1.586,0.245,2.333C469.993,182.541,469.174,195.811,465.46,212.833z"></path>
                                                    </symbol>
                                                </svg>
                                                <svg class="icon" viewBox="0 0 30 30"><use xlink:href="#heart-shape-outline" x="28%" y="30%"></use></svg>
                                            </button>
                                        </div>
                                        <div class="btn-compare">
                                            <button type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('40');"><i class="fa fa-exchange"></i>
                                                <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                    <symbol id="report" viewBox="0 0 1450 1450"><title>report</title><path d="m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path><path d="m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path><path d="m480 258.667969h60v220h-60zm0 0"></path><path d="m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path><path d="m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path><path d="m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path><path d="m200 118.667969h60v360h-60zm0 0"></path><path d="m340-1.332031h60v480h-60zm0 0"></path><path d="m60 358.667969h60v120h-60zm0 0"></path><path d="m60 548.667969c.035156-3.414063.65625-6.796875 1.839844-10h-51.839844c-5.523438 0-10 4.476562-10 10 0 5.519531 4.476562 10 10 10h51.839844c-1.183594-3.203125-1.804688-6.589844-1.839844-10zm0 0"></path><path d="m118.160156 538.667969c2.457032 6.4375 2.457032 13.558593 0 20h83.679688c-2.457032-6.441407-2.457032-13.5625 0-20zm0 0"></path><path d="m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path><path d="m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path><path d="m341.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0"></path><path d="m481.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0"></path><path d="m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path><path d="m590 538.667969h-51.839844c2.457032 6.4375 2.457032 13.558593 0 20h51.839844c5.523438 0 10-4.480469 10-10 0-5.523438-4.476562-10-10-10zm0 0"></path></symbol>
                                                </svg>
                                                <svg class="icon" viewBox="0 0 40 40"><use xlink:href="#report" x="28%" y="30%"></use></svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="caption">
                                    <div class="rating">

                                  <span class="fa fa-stack">
                                    <i class="fa fa-star yellow fa-stack-2x"></i>
                                  </span>

                                        <span class="fa fa-stack">
                                    <i class="fa fa-star yellow fa-stack-2x"></i>
                                  </span>

                                        <span class="fa fa-stack">
                                    <i class="fa fa-star yellow fa-stack-2x"></i>
                                  </span>

                                        <span class="fa fa-stack">
                                    <i class="fa fa-star yellow fa-stack-2x"></i>
                                  </span>

                                        <span class="fa fa-stack">
                                    <i class="fa fa-star gray fa-stack-2x"></i>
                                  </span>
                                    </div>

                                    <h4><a href="https://demo.ishithemes.com/opencart/OPC140/OPC140L01/index.php?route=product/product&amp;product_id=40">Full Sleeve T-shirt</a></h4>
                                    <p class="description">iPhone is a revolutionary new mobile phone that allows you to make a call by simply tapping a name o..</p>
                                    <p class="price">                             $123.20
                                        <span class="price-tax">Ex Tax: $101.00</span>
                                    </p>
                                    <div class="btn-cart">
                                        <button type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('40');" >
                                            <i class="fa fa-shopping-cart"></i>
                                            <span class="lblcart">Add to Cart</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item" >
                        <div class="product-container transition">
                            <div class="product-thumb">
                                <div class="image">
                                    <a href="https://demo.ishithemes.com/opencart/OPC140/OPC140L01/index.php?route=product/product&amp;product_id=41">
                                        <img src="https://demo.ishithemes.com/opencart/OPC140/OPC140L01/image/cache/catalog/productsimage/9-535x694.png" alt="Date Night Outfit" title="Date Night Outfit" class="img-responsive" />
                                        <img class="product-img-extra img-responsive" alt="Date Night Outfit" title="Date Night Outfit" src= "https://demo.ishithemes.com/opencart/OPC140/OPC140L01/image/cache/catalog/productsimage/13-535x694.png"/>
                                    </a>

                                    <div class="button-group">
                                        <div class="btn-quickview">
                                            <div class="quickview-button button" data-toggle="tooltip" title=" Quick View">
                                                <a class="quickbox" href="https://demo.ishithemes.com/opencart/OPC140/OPC140L01/index.php?route=product/quick_view&amp;product_id=41">
                                                    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                        <symbol id="eye-open" viewBox="0 0 1050 1050"><title>eye-open</title>
                                                            <path d="M505.918,236.117c-26.651-43.587-62.485-78.609-107.497-105.065c-45.015-26.457-92.549-39.687-142.608-39.687
                                    c-50.059,0-97.595,13.225-142.61,39.687C68.187,157.508,32.355,192.53,5.708,236.117C1.903,242.778,0,249.345,0,255.818
                                    c0,6.473,1.903,13.04,5.708,19.699c26.647,43.589,62.479,78.614,107.495,105.064c45.015,26.46,92.551,39.68,142.61,39.68
                                    c50.06,0,97.594-13.176,142.608-39.536c45.012-26.361,80.852-61.432,107.497-105.208c3.806-6.659,5.708-13.223,5.708-19.699
                                    C511.626,249.345,509.724,242.778,505.918,236.117z M194.568,158.03c17.034-17.034,37.447-25.554,61.242-25.554
                                    c3.805,0,7.043,1.336,9.709,3.999c2.662,2.664,4,5.901,4,9.707c0,3.809-1.338,7.044-3.994,9.704
                                    c-2.662,2.667-5.902,3.999-9.708,3.999c-16.368,0-30.362,5.808-41.971,17.416c-11.613,11.615-17.416,25.603-17.416,41.971
                                    c0,3.811-1.336,7.044-3.999,9.71c-2.667,2.668-5.901,3.999-9.707,3.999c-3.809,0-7.044-1.334-9.71-3.999
                                    c-2.667-2.666-3.999-5.903-3.999-9.71C169.015,195.482,177.535,175.065,194.568,158.03z M379.867,349.04
                                    c-38.164,23.12-79.514,34.687-124.054,34.687c-44.539,0-85.889-11.56-124.051-34.687s-69.901-54.2-95.215-93.222
                                    c28.931-44.921,65.19-78.518,108.777-100.783c-11.61,19.792-17.417,41.207-17.417,64.236c0,35.216,12.517,65.329,37.544,90.362
                                    s55.151,37.544,90.362,37.544c35.214,0,65.329-12.518,90.362-37.544s37.545-55.146,37.545-90.362
                                    c0-23.029-5.808-44.447-17.419-64.236c43.585,22.265,79.846,55.865,108.776,100.783C449.767,294.84,418.031,325.913,379.867,349.04
                                    z"></path>
                                                        </symbol>
                                                    </svg>
                                                    <svg class="icon" viewBox="0 0 30 30"><use xlink:href="#eye-open" x="26%" y="26%"></use></svg>
                                                    <i class="fa fa-eye" aria-hidden="true"></i><span class="lblcart">Quick View</span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="btn-wishlist">
                                            <button type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('41');"><i class="fa fa-heart"></i>
                                                <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                    <symbol id="heart-shape-outline" viewBox="0 0 1200 1200"><title>heart-shape-outline</title>
                                                        <path d="M511.825,170.191c-0.14-1.786-0.298-3.155-0.44-4.095C504.22,84.955,444.691,20.73,367.434,20.73
                                  c-44.758,0-85.66,21.18-112.442,55.516C228.835,41.679,189.491,20.73,144.97,20.73C67.976,20.73,8.584,84.52,0.937,166.557
                                  c-0.147,0.956-0.295,2.12-0.43,3.489C-0.8,183.3,0.287,200.862,5.338,222.26c10.732,45.463,35.828,86.871,71.224,118.958
                                  l164.828,144.92c8.028,7.059,20.042,7.085,28.101,0.062l166.037-144.683c39.134-40.728,62.393-77.366,71.616-119.584
                                  C511.771,200.731,512.848,183.284,511.825,170.191z M465.46,212.833c-7.254,33.204-26.552,63.603-59.352,97.843L255.545,441.771
                                  l-150.569-132.38c-28.881-26.184-49.406-60.051-58.113-96.933c-3.953-16.747-4.747-29.585-3.895-38.225
                                  c0.075-0.764,0.393-3.072,0.393-3.072C48.849,109.384,91.478,63.397,144.97,63.397c39.823,0,73.704,24.287,90.17,63.294
                                  c7.338,17.382,31.97,17.382,39.308,0c16.136-38.225,52.419-63.294,92.986-63.294c53.494,0,96.121,45.99,101.609,107.786
                                  c0.147,1.242,0.187,1.586,0.245,2.333C469.993,182.541,469.174,195.811,465.46,212.833z"></path>
                                                    </symbol>
                                                </svg>
                                                <svg class="icon" viewBox="0 0 30 30"><use xlink:href="#heart-shape-outline" x="28%" y="30%"></use></svg>
                                            </button>
                                        </div>
                                        <div class="btn-compare">
                                            <button type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('41');"><i class="fa fa-exchange"></i>
                                                <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                    <symbol id="report" viewBox="0 0 1450 1450"><title>report</title><path d="m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path><path d="m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path><path d="m480 258.667969h60v220h-60zm0 0"></path><path d="m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path><path d="m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path><path d="m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path><path d="m200 118.667969h60v360h-60zm0 0"></path><path d="m340-1.332031h60v480h-60zm0 0"></path><path d="m60 358.667969h60v120h-60zm0 0"></path><path d="m60 548.667969c.035156-3.414063.65625-6.796875 1.839844-10h-51.839844c-5.523438 0-10 4.476562-10 10 0 5.519531 4.476562 10 10 10h51.839844c-1.183594-3.203125-1.804688-6.589844-1.839844-10zm0 0"></path><path d="m118.160156 538.667969c2.457032 6.4375 2.457032 13.558593 0 20h83.679688c-2.457032-6.441407-2.457032-13.5625 0-20zm0 0"></path><path d="m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path><path d="m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path><path d="m341.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0"></path><path d="m481.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0"></path><path d="m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path><path d="m590 538.667969h-51.839844c2.457032 6.4375 2.457032 13.558593 0 20h51.839844c5.523438 0 10-4.480469 10-10 0-5.523438-4.476562-10-10-10zm0 0"></path></symbol>
                                                </svg>
                                                <svg class="icon" viewBox="0 0 40 40"><use xlink:href="#report" x="28%" y="30%"></use></svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="caption">
                                    <div class="rating">

                                  <span class="fa fa-stack">
                                    <i class="fa fa-star yellow fa-stack-2x"></i>
                                  </span>

                                        <span class="fa fa-stack">
                                    <i class="fa fa-star yellow fa-stack-2x"></i>
                                  </span>

                                        <span class="fa fa-stack">
                                    <i class="fa fa-star yellow fa-stack-2x"></i>
                                  </span>

                                        <span class="fa fa-stack">
                                    <i class="fa fa-star gray fa-stack-2x"></i>
                                  </span>

                                        <span class="fa fa-stack">
                                    <i class="fa fa-star gray fa-stack-2x"></i>
                                  </span>
                                    </div>

                                    <h4><a href="https://demo.ishithemes.com/opencart/OPC140/OPC140L01/index.php?route=product/product&amp;product_id=41">Date Night Outfit</a></h4>
                                    <p class="description">Just when you thought iMac had everything, now there´s even more. More powerful Intel Core 2 Duo pro..</p>
                                    <p class="price">  <span class="price-new">$98.00</span> <span class="price-old">$122.00</span>                              <span class="price-tax">Ex Tax: $80.00</span>
                                    </p>
                                    <div class="btn-cart">
                                        <button type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('41');" >
                                            <i class="fa fa-shopping-cart"></i>
                                            <span class="lblcart">Add to Cart</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item" >
                        <div class="product-container transition">
                            <div class="product-thumb">
                                <div class="image">
                                    <a href="https://demo.ishithemes.com/opencart/OPC140/OPC140L01/index.php?route=product/product&amp;product_id=46">
                                        <img src="https://demo.ishithemes.com/opencart/OPC140/OPC140L01/image/cache/catalog/productsimage/15-535x694.png" alt="Vebeto PU" title="Vebeto PU" class="img-responsive" />
                                        <img class="product-img-extra img-responsive" alt="Vebeto PU" title="Vebeto PU" src= "https://demo.ishithemes.com/opencart/OPC140/OPC140L01/image/cache/catalog/productsimage/16-535x694.png"/>
                                    </a>

                                    <div class="button-group">
                                        <div class="btn-quickview">
                                            <div class="quickview-button button" data-toggle="tooltip" title=" Quick View">
                                                <a class="quickbox" href="https://demo.ishithemes.com/opencart/OPC140/OPC140L01/index.php?route=product/quick_view&amp;product_id=46">
                                                    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                        <symbol id="eye-open" viewBox="0 0 1050 1050"><title>eye-open</title>
                                                            <path d="M505.918,236.117c-26.651-43.587-62.485-78.609-107.497-105.065c-45.015-26.457-92.549-39.687-142.608-39.687
                                    c-50.059,0-97.595,13.225-142.61,39.687C68.187,157.508,32.355,192.53,5.708,236.117C1.903,242.778,0,249.345,0,255.818
                                    c0,6.473,1.903,13.04,5.708,19.699c26.647,43.589,62.479,78.614,107.495,105.064c45.015,26.46,92.551,39.68,142.61,39.68
                                    c50.06,0,97.594-13.176,142.608-39.536c45.012-26.361,80.852-61.432,107.497-105.208c3.806-6.659,5.708-13.223,5.708-19.699
                                    C511.626,249.345,509.724,242.778,505.918,236.117z M194.568,158.03c17.034-17.034,37.447-25.554,61.242-25.554
                                    c3.805,0,7.043,1.336,9.709,3.999c2.662,2.664,4,5.901,4,9.707c0,3.809-1.338,7.044-3.994,9.704
                                    c-2.662,2.667-5.902,3.999-9.708,3.999c-16.368,0-30.362,5.808-41.971,17.416c-11.613,11.615-17.416,25.603-17.416,41.971
                                    c0,3.811-1.336,7.044-3.999,9.71c-2.667,2.668-5.901,3.999-9.707,3.999c-3.809,0-7.044-1.334-9.71-3.999
                                    c-2.667-2.666-3.999-5.903-3.999-9.71C169.015,195.482,177.535,175.065,194.568,158.03z M379.867,349.04
                                    c-38.164,23.12-79.514,34.687-124.054,34.687c-44.539,0-85.889-11.56-124.051-34.687s-69.901-54.2-95.215-93.222
                                    c28.931-44.921,65.19-78.518,108.777-100.783c-11.61,19.792-17.417,41.207-17.417,64.236c0,35.216,12.517,65.329,37.544,90.362
                                    s55.151,37.544,90.362,37.544c35.214,0,65.329-12.518,90.362-37.544s37.545-55.146,37.545-90.362
                                    c0-23.029-5.808-44.447-17.419-64.236c43.585,22.265,79.846,55.865,108.776,100.783C449.767,294.84,418.031,325.913,379.867,349.04
                                    z"></path>
                                                        </symbol>
                                                    </svg>
                                                    <svg class="icon" viewBox="0 0 30 30"><use xlink:href="#eye-open" x="26%" y="26%"></use></svg>
                                                    <i class="fa fa-eye" aria-hidden="true"></i><span class="lblcart">Quick View</span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="btn-wishlist">
                                            <button type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('46');"><i class="fa fa-heart"></i>
                                                <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                    <symbol id="heart-shape-outline" viewBox="0 0 1200 1200"><title>heart-shape-outline</title>
                                                        <path d="M511.825,170.191c-0.14-1.786-0.298-3.155-0.44-4.095C504.22,84.955,444.691,20.73,367.434,20.73
                                  c-44.758,0-85.66,21.18-112.442,55.516C228.835,41.679,189.491,20.73,144.97,20.73C67.976,20.73,8.584,84.52,0.937,166.557
                                  c-0.147,0.956-0.295,2.12-0.43,3.489C-0.8,183.3,0.287,200.862,5.338,222.26c10.732,45.463,35.828,86.871,71.224,118.958
                                  l164.828,144.92c8.028,7.059,20.042,7.085,28.101,0.062l166.037-144.683c39.134-40.728,62.393-77.366,71.616-119.584
                                  C511.771,200.731,512.848,183.284,511.825,170.191z M465.46,212.833c-7.254,33.204-26.552,63.603-59.352,97.843L255.545,441.771
                                  l-150.569-132.38c-28.881-26.184-49.406-60.051-58.113-96.933c-3.953-16.747-4.747-29.585-3.895-38.225
                                  c0.075-0.764,0.393-3.072,0.393-3.072C48.849,109.384,91.478,63.397,144.97,63.397c39.823,0,73.704,24.287,90.17,63.294
                                  c7.338,17.382,31.97,17.382,39.308,0c16.136-38.225,52.419-63.294,92.986-63.294c53.494,0,96.121,45.99,101.609,107.786
                                  c0.147,1.242,0.187,1.586,0.245,2.333C469.993,182.541,469.174,195.811,465.46,212.833z"></path>
                                                    </symbol>
                                                </svg>
                                                <svg class="icon" viewBox="0 0 30 30"><use xlink:href="#heart-shape-outline" x="28%" y="30%"></use></svg>
                                            </button>
                                        </div>
                                        <div class="btn-compare">
                                            <button type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('46');"><i class="fa fa-exchange"></i>
                                                <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                    <symbol id="report" viewBox="0 0 1450 1450"><title>report</title><path d="m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path><path d="m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path><path d="m480 258.667969h60v220h-60zm0 0"></path><path d="m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path><path d="m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path><path d="m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path><path d="m200 118.667969h60v360h-60zm0 0"></path><path d="m340-1.332031h60v480h-60zm0 0"></path><path d="m60 358.667969h60v120h-60zm0 0"></path><path d="m60 548.667969c.035156-3.414063.65625-6.796875 1.839844-10h-51.839844c-5.523438 0-10 4.476562-10 10 0 5.519531 4.476562 10 10 10h51.839844c-1.183594-3.203125-1.804688-6.589844-1.839844-10zm0 0"></path><path d="m118.160156 538.667969c2.457032 6.4375 2.457032 13.558593 0 20h83.679688c-2.457032-6.441407-2.457032-13.5625 0-20zm0 0"></path><path d="m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path><path d="m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path><path d="m341.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0"></path><path d="m481.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0"></path><path d="m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path><path d="m590 538.667969h-51.839844c2.457032 6.4375 2.457032 13.558593 0 20h51.839844c5.523438 0 10-4.480469 10-10 0-5.523438-4.476562-10-10-10zm0 0"></path></symbol>
                                                </svg>
                                                <svg class="icon" viewBox="0 0 40 40"><use xlink:href="#report" x="28%" y="30%"></use></svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="caption">
                                    <div class="rating">

                                  <span class="fa fa-stack">
                                    <i class="fa fa-star yellow fa-stack-2x"></i>
                                  </span>

                                        <span class="fa fa-stack">
                                    <i class="fa fa-star yellow fa-stack-2x"></i>
                                  </span>

                                        <span class="fa fa-stack">
                                    <i class="fa fa-star yellow fa-stack-2x"></i>
                                  </span>

                                        <span class="fa fa-stack">
                                    <i class="fa fa-star yellow fa-stack-2x"></i>
                                  </span>

                                        <span class="fa fa-stack">
                                    <i class="fa fa-star gray fa-stack-2x"></i>
                                  </span>
                                    </div>

                                    <h4><a href="https://demo.ishithemes.com/opencart/OPC140/OPC140L01/index.php?route=product/product&amp;product_id=46">Vebeto PU</a></h4>
                                    <p class="description">Unprecedented power. The next generation of processing technology has arrived. Built into the newest..</p>
                                    <p class="price">                             $1,202.00
                                        <span class="price-tax">Ex Tax: $1,000.00</span>
                                    </p>
                                    <div class="btn-cart">
                                        <button type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('46');" >
                                            <i class="fa fa-shopping-cart"></i>
                                            <span class="lblcart">Add to Cart</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item" >
                        <div class="product-container transition">
                            <div class="product-thumb">
                                <div class="image">
                                    <a href="https://demo.ishithemes.com/opencart/OPC140/OPC140L01/index.php?route=product/product&amp;product_id=47">
                                        <img src="https://demo.ishithemes.com/opencart/OPC140/OPC140L01/image/cache/catalog/productsimage/17-535x694.png" alt="Phasellus vitae ell" title="Phasellus vitae ell" class="img-responsive" />
                                        <img class="product-img-extra img-responsive" alt="Phasellus vitae ell" title="Phasellus vitae ell" src= "https://demo.ishithemes.com/opencart/OPC140/OPC140L01/image/cache/catalog/productsimage/2-535x694.png"/>
                                    </a>

                                    <div class="button-group">
                                        <div class="btn-quickview">
                                            <div class="quickview-button button" data-toggle="tooltip" title=" Quick View">
                                                <a class="quickbox" href="https://demo.ishithemes.com/opencart/OPC140/OPC140L01/index.php?route=product/quick_view&amp;product_id=47">
                                                    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                        <symbol id="eye-open" viewBox="0 0 1050 1050"><title>eye-open</title>
                                                            <path d="M505.918,236.117c-26.651-43.587-62.485-78.609-107.497-105.065c-45.015-26.457-92.549-39.687-142.608-39.687
                                    c-50.059,0-97.595,13.225-142.61,39.687C68.187,157.508,32.355,192.53,5.708,236.117C1.903,242.778,0,249.345,0,255.818
                                    c0,6.473,1.903,13.04,5.708,19.699c26.647,43.589,62.479,78.614,107.495,105.064c45.015,26.46,92.551,39.68,142.61,39.68
                                    c50.06,0,97.594-13.176,142.608-39.536c45.012-26.361,80.852-61.432,107.497-105.208c3.806-6.659,5.708-13.223,5.708-19.699
                                    C511.626,249.345,509.724,242.778,505.918,236.117z M194.568,158.03c17.034-17.034,37.447-25.554,61.242-25.554
                                    c3.805,0,7.043,1.336,9.709,3.999c2.662,2.664,4,5.901,4,9.707c0,3.809-1.338,7.044-3.994,9.704
                                    c-2.662,2.667-5.902,3.999-9.708,3.999c-16.368,0-30.362,5.808-41.971,17.416c-11.613,11.615-17.416,25.603-17.416,41.971
                                    c0,3.811-1.336,7.044-3.999,9.71c-2.667,2.668-5.901,3.999-9.707,3.999c-3.809,0-7.044-1.334-9.71-3.999
                                    c-2.667-2.666-3.999-5.903-3.999-9.71C169.015,195.482,177.535,175.065,194.568,158.03z M379.867,349.04
                                    c-38.164,23.12-79.514,34.687-124.054,34.687c-44.539,0-85.889-11.56-124.051-34.687s-69.901-54.2-95.215-93.222
                                    c28.931-44.921,65.19-78.518,108.777-100.783c-11.61,19.792-17.417,41.207-17.417,64.236c0,35.216,12.517,65.329,37.544,90.362
                                    s55.151,37.544,90.362,37.544c35.214,0,65.329-12.518,90.362-37.544s37.545-55.146,37.545-90.362
                                    c0-23.029-5.808-44.447-17.419-64.236c43.585,22.265,79.846,55.865,108.776,100.783C449.767,294.84,418.031,325.913,379.867,349.04
                                    z"></path>
                                                        </symbol>
                                                    </svg>
                                                    <svg class="icon" viewBox="0 0 30 30"><use xlink:href="#eye-open" x="26%" y="26%"></use></svg>
                                                    <i class="fa fa-eye" aria-hidden="true"></i><span class="lblcart">Quick View</span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="btn-wishlist">
                                            <button type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('47');"><i class="fa fa-heart"></i>
                                                <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                    <symbol id="heart-shape-outline" viewBox="0 0 1200 1200"><title>heart-shape-outline</title>
                                                        <path d="M511.825,170.191c-0.14-1.786-0.298-3.155-0.44-4.095C504.22,84.955,444.691,20.73,367.434,20.73
                                  c-44.758,0-85.66,21.18-112.442,55.516C228.835,41.679,189.491,20.73,144.97,20.73C67.976,20.73,8.584,84.52,0.937,166.557
                                  c-0.147,0.956-0.295,2.12-0.43,3.489C-0.8,183.3,0.287,200.862,5.338,222.26c10.732,45.463,35.828,86.871,71.224,118.958
                                  l164.828,144.92c8.028,7.059,20.042,7.085,28.101,0.062l166.037-144.683c39.134-40.728,62.393-77.366,71.616-119.584
                                  C511.771,200.731,512.848,183.284,511.825,170.191z M465.46,212.833c-7.254,33.204-26.552,63.603-59.352,97.843L255.545,441.771
                                  l-150.569-132.38c-28.881-26.184-49.406-60.051-58.113-96.933c-3.953-16.747-4.747-29.585-3.895-38.225
                                  c0.075-0.764,0.393-3.072,0.393-3.072C48.849,109.384,91.478,63.397,144.97,63.397c39.823,0,73.704,24.287,90.17,63.294
                                  c7.338,17.382,31.97,17.382,39.308,0c16.136-38.225,52.419-63.294,92.986-63.294c53.494,0,96.121,45.99,101.609,107.786
                                  c0.147,1.242,0.187,1.586,0.245,2.333C469.993,182.541,469.174,195.811,465.46,212.833z"></path>
                                                    </symbol>
                                                </svg>
                                                <svg class="icon" viewBox="0 0 30 30"><use xlink:href="#heart-shape-outline" x="28%" y="30%"></use></svg>
                                            </button>
                                        </div>
                                        <div class="btn-compare">
                                            <button type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('47');"><i class="fa fa-exchange"></i>
                                                <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                    <symbol id="report" viewBox="0 0 1450 1450"><title>report</title><path d="m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path><path d="m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path><path d="m480 258.667969h60v220h-60zm0 0"></path><path d="m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path><path d="m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path><path d="m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path><path d="m200 118.667969h60v360h-60zm0 0"></path><path d="m340-1.332031h60v480h-60zm0 0"></path><path d="m60 358.667969h60v120h-60zm0 0"></path><path d="m60 548.667969c.035156-3.414063.65625-6.796875 1.839844-10h-51.839844c-5.523438 0-10 4.476562-10 10 0 5.519531 4.476562 10 10 10h51.839844c-1.183594-3.203125-1.804688-6.589844-1.839844-10zm0 0"></path><path d="m118.160156 538.667969c2.457032 6.4375 2.457032 13.558593 0 20h83.679688c-2.457032-6.441407-2.457032-13.5625 0-20zm0 0"></path><path d="m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path><path d="m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path><path d="m341.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0"></path><path d="m481.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0"></path><path d="m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path><path d="m590 538.667969h-51.839844c2.457032 6.4375 2.457032 13.558593 0 20h51.839844c5.523438 0 10-4.480469 10-10 0-5.523438-4.476562-10-10-10zm0 0"></path></symbol>
                                                </svg>
                                                <svg class="icon" viewBox="0 0 40 40"><use xlink:href="#report" x="28%" y="30%"></use></svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="caption">
                                    <div class="rating">

                                  <span class="fa fa-stack">
                                    <i class="fa fa-star yellow fa-stack-2x"></i>
                                  </span>

                                        <span class="fa fa-stack">
                                    <i class="fa fa-star yellow fa-stack-2x"></i>
                                  </span>

                                        <span class="fa fa-stack">
                                    <i class="fa fa-star gray fa-stack-2x"></i>
                                  </span>

                                        <span class="fa fa-stack">
                                    <i class="fa fa-star gray fa-stack-2x"></i>
                                  </span>

                                        <span class="fa fa-stack">
                                    <i class="fa fa-star gray fa-stack-2x"></i>
                                  </span>
                                    </div>

                                    <h4><a href="https://demo.ishithemes.com/opencart/OPC140/OPC140L01/index.php?route=product/product&amp;product_id=47">Phasellus vitae ell</a></h4>
                                    <p class="description">Stop your co-workers in their tracks with the stunning new 30-inch diagonal HP LP3065 Flat Panel Mon..</p>
                                    <p class="price">                             $122.00
                                        <span class="price-tax">Ex Tax: $100.00</span>
                                    </p>
                                    <div class="btn-cart">
                                        <button type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('47');" >
                                            <i class="fa fa-shopping-cart"></i>
                                            <span class="lblcart">Add to Cart</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item" >
                        <div class="product-container transition">
                            <div class="product-thumb">
                                <div class="image">
                                    <a href="https://demo.ishithemes.com/opencart/OPC140/OPC140L01/index.php?route=product/product&amp;product_id=48">
                                        <img src="https://demo.ishithemes.com/opencart/OPC140/OPC140L01/image/cache/catalog/productsimage/8-535x694.png" alt="Long Denim Shirt" title="Long Denim Shirt" class="img-responsive" />
                                        <img class="product-img-extra img-responsive" alt="Long Denim Shirt" title="Long Denim Shirt" src= "https://demo.ishithemes.com/opencart/OPC140/OPC140L01/image/cache/catalog/productsimage/4-535x694.png"/>
                                    </a>

                                    <div class="button-group">
                                        <div class="btn-quickview">
                                            <div class="quickview-button button" data-toggle="tooltip" title=" Quick View">
                                                <a class="quickbox" href="https://demo.ishithemes.com/opencart/OPC140/OPC140L01/index.php?route=product/quick_view&amp;product_id=48">
                                                    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                        <symbol id="eye-open" viewBox="0 0 1050 1050"><title>eye-open</title>
                                                            <path d="M505.918,236.117c-26.651-43.587-62.485-78.609-107.497-105.065c-45.015-26.457-92.549-39.687-142.608-39.687
                                    c-50.059,0-97.595,13.225-142.61,39.687C68.187,157.508,32.355,192.53,5.708,236.117C1.903,242.778,0,249.345,0,255.818
                                    c0,6.473,1.903,13.04,5.708,19.699c26.647,43.589,62.479,78.614,107.495,105.064c45.015,26.46,92.551,39.68,142.61,39.68
                                    c50.06,0,97.594-13.176,142.608-39.536c45.012-26.361,80.852-61.432,107.497-105.208c3.806-6.659,5.708-13.223,5.708-19.699
                                    C511.626,249.345,509.724,242.778,505.918,236.117z M194.568,158.03c17.034-17.034,37.447-25.554,61.242-25.554
                                    c3.805,0,7.043,1.336,9.709,3.999c2.662,2.664,4,5.901,4,9.707c0,3.809-1.338,7.044-3.994,9.704
                                    c-2.662,2.667-5.902,3.999-9.708,3.999c-16.368,0-30.362,5.808-41.971,17.416c-11.613,11.615-17.416,25.603-17.416,41.971
                                    c0,3.811-1.336,7.044-3.999,9.71c-2.667,2.668-5.901,3.999-9.707,3.999c-3.809,0-7.044-1.334-9.71-3.999
                                    c-2.667-2.666-3.999-5.903-3.999-9.71C169.015,195.482,177.535,175.065,194.568,158.03z M379.867,349.04
                                    c-38.164,23.12-79.514,34.687-124.054,34.687c-44.539,0-85.889-11.56-124.051-34.687s-69.901-54.2-95.215-93.222
                                    c28.931-44.921,65.19-78.518,108.777-100.783c-11.61,19.792-17.417,41.207-17.417,64.236c0,35.216,12.517,65.329,37.544,90.362
                                    s55.151,37.544,90.362,37.544c35.214,0,65.329-12.518,90.362-37.544s37.545-55.146,37.545-90.362
                                    c0-23.029-5.808-44.447-17.419-64.236c43.585,22.265,79.846,55.865,108.776,100.783C449.767,294.84,418.031,325.913,379.867,349.04
                                    z"></path>
                                                        </symbol>
                                                    </svg>
                                                    <svg class="icon" viewBox="0 0 30 30"><use xlink:href="#eye-open" x="26%" y="26%"></use></svg>
                                                    <i class="fa fa-eye" aria-hidden="true"></i><span class="lblcart">Quick View</span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="btn-wishlist">
                                            <button type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('48');"><i class="fa fa-heart"></i>
                                                <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                    <symbol id="heart-shape-outline" viewBox="0 0 1200 1200"><title>heart-shape-outline</title>
                                                        <path d="M511.825,170.191c-0.14-1.786-0.298-3.155-0.44-4.095C504.22,84.955,444.691,20.73,367.434,20.73
                                  c-44.758,0-85.66,21.18-112.442,55.516C228.835,41.679,189.491,20.73,144.97,20.73C67.976,20.73,8.584,84.52,0.937,166.557
                                  c-0.147,0.956-0.295,2.12-0.43,3.489C-0.8,183.3,0.287,200.862,5.338,222.26c10.732,45.463,35.828,86.871,71.224,118.958
                                  l164.828,144.92c8.028,7.059,20.042,7.085,28.101,0.062l166.037-144.683c39.134-40.728,62.393-77.366,71.616-119.584
                                  C511.771,200.731,512.848,183.284,511.825,170.191z M465.46,212.833c-7.254,33.204-26.552,63.603-59.352,97.843L255.545,441.771
                                  l-150.569-132.38c-28.881-26.184-49.406-60.051-58.113-96.933c-3.953-16.747-4.747-29.585-3.895-38.225
                                  c0.075-0.764,0.393-3.072,0.393-3.072C48.849,109.384,91.478,63.397,144.97,63.397c39.823,0,73.704,24.287,90.17,63.294
                                  c7.338,17.382,31.97,17.382,39.308,0c16.136-38.225,52.419-63.294,92.986-63.294c53.494,0,96.121,45.99,101.609,107.786
                                  c0.147,1.242,0.187,1.586,0.245,2.333C469.993,182.541,469.174,195.811,465.46,212.833z"></path>
                                                    </symbol>
                                                </svg>
                                                <svg class="icon" viewBox="0 0 30 30"><use xlink:href="#heart-shape-outline" x="28%" y="30%"></use></svg>
                                            </button>
                                        </div>
                                        <div class="btn-compare">
                                            <button type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('48');"><i class="fa fa-exchange"></i>
                                                <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                    <symbol id="report" viewBox="0 0 1450 1450"><title>report</title><path d="m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path><path d="m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path><path d="m480 258.667969h60v220h-60zm0 0"></path><path d="m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path><path d="m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path><path d="m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path><path d="m200 118.667969h60v360h-60zm0 0"></path><path d="m340-1.332031h60v480h-60zm0 0"></path><path d="m60 358.667969h60v120h-60zm0 0"></path><path d="m60 548.667969c.035156-3.414063.65625-6.796875 1.839844-10h-51.839844c-5.523438 0-10 4.476562-10 10 0 5.519531 4.476562 10 10 10h51.839844c-1.183594-3.203125-1.804688-6.589844-1.839844-10zm0 0"></path><path d="m118.160156 538.667969c2.457032 6.4375 2.457032 13.558593 0 20h83.679688c-2.457032-6.441407-2.457032-13.5625 0-20zm0 0"></path><path d="m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path><path d="m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path><path d="m341.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0"></path><path d="m481.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0"></path><path d="m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path><path d="m590 538.667969h-51.839844c2.457032 6.4375 2.457032 13.558593 0 20h51.839844c5.523438 0 10-4.480469 10-10 0-5.523438-4.476562-10-10-10zm0 0"></path></symbol>
                                                </svg>
                                                <svg class="icon" viewBox="0 0 40 40"><use xlink:href="#report" x="28%" y="30%"></use></svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="caption">
                                    <div class="rating">

                                  <span class="fa fa-stack">
                                    <i class="fa fa-star yellow fa-stack-2x"></i>
                                  </span>

                                        <span class="fa fa-stack">
                                    <i class="fa fa-star yellow fa-stack-2x"></i>
                                  </span>

                                        <span class="fa fa-stack">
                                    <i class="fa fa-star gray fa-stack-2x"></i>
                                  </span>

                                        <span class="fa fa-stack">
                                    <i class="fa fa-star gray fa-stack-2x"></i>
                                  </span>

                                        <span class="fa fa-stack">
                                    <i class="fa fa-star gray fa-stack-2x"></i>
                                  </span>
                                    </div>

                                    <h4><a href="https://demo.ishithemes.com/opencart/OPC140/OPC140L01/index.php?route=product/product&amp;product_id=48">Long Denim Shirt</a></h4>
                                    <p class="description">More room to move.

                                        With 80GB or 160GB of storage and up to 40 hours of battery life, the new..</p>
                                    <p class="price">                             $122.00
                                        <span class="price-tax">Ex Tax: $100.00</span>
                                    </p>
                                    <div class="btn-cart">
                                        <button type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('48');" >
                                            <i class="fa fa-shopping-cart"></i>
                                            <span class="lblcart">Add to Cart</span>
                                        </button>
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
<script type="text/javascript"><!--
    $('select[name=\'recurring_id\'], input[name="quantity"]').change(function(){
        $.ajax({
            url: 'index.php?route=product/product/getRecurringDescription',
            type: 'post',
            data: $('input[name=\'product_id\'], input[name=\'quantity\'], select[name=\'recurring_id\']'),
            dataType: 'json',
            beforeSend: function() {
                $('#recurring-description').html('');
            },
            success: function(json) {
                $('.alert-dismissible, .text-danger').remove();

                if (json['success']) {
                    $('#recurring-description').html(json['success']);
                }
            }
        });
    });
    //--></script>
<script type="text/javascript"><!--
    $('#button-cart').on('click', function() {
        $.ajax({
            url: 'index.php?route=checkout/cart/add',
            type: 'post',
            data: $('input[type=\'text\'], input[type=\'hidden\'], input[type=\'radio\']:checked, input[type=\'checkbox\']:checked, select, textarea'),
            dataType: 'json',
            beforeSend: function() {
                $('#button-cart').button('loading');
            },
            complete: function() {
                $('#button-cart').button('reset');
            },
            success: function(json) {
                $('.alert-dismissible, .text-danger').remove();
                $('.form-group').removeClass('has-error');

                if (json['error']) {
                    if (json['error']['option']) {
                        for (i in json['error']['option']) {
                            var element = $('#input-option' + i.replace('_', '-'));

                            if (element.parent().hasClass('input-group')) {
                                element.parent().after('<div class="text-danger">' + json['error']['option'][i] + '</div>');
                            } else {
                                element.after('<div class="text-danger">' + json['error']['option'][i] + '</div>');
                            }
                        }
                    }

                    if (json['error']['recurring']) {
                        $('select[name=\'recurring_id\']').after('<div class="text-danger">' + json['error']['recurring'] + '</div>');
                    }

                    // Highlight any found errors
                    $('.text-danger').parent().addClass('has-error');
                }

                if (json['success']) {

                    $('#cart > button').html('<span class="cart-link"><span class="cart-img hidden-sm hidden-xs"><svg aria-hidden="true" focusable="false" role="presentation" class="icon" viewBox="0 0 700 700"><svg x="15%" y="17%"><path d="m150.355469 322.332031c-30.046875 0-54.402344 24.355469-54.402344 54.402344 0 30.042969 24.355469 54.398437 54.402344 54.398437 30.042969 0 54.398437-24.355468 54.398437-54.398437-.03125-30.03125-24.367187-54.371094-54.398437-54.402344zm0 88.800781c-19 0-34.402344-15.402343-34.402344-34.398437 0-19 15.402344-34.402344 34.402344-34.402344 18.996093 0 34.398437 15.402344 34.398437 34.402344 0 18.996094-15.402344 34.398437-34.398437 34.398437zm0 0"></path><path d="m446.855469 94.035156h-353.101563l-7.199218-40.300781c-4.4375-24.808594-23.882813-44.214844-48.699219-48.601563l-26.101563-4.597656c-5.441406-.96875-10.632812 2.660156-11.601562 8.097656-.964844 5.441407 2.660156 10.632813 8.101562 11.601563l26.199219 4.597656c16.53125 2.929688 29.472656 15.871094 32.402344 32.402344l35.398437 199.699219c4.179688 23.894531 24.941406 41.324218 49.199219 41.300781h210c22.0625.066406 41.546875-14.375 47.902344-35.5l47-155.800781c.871093-3.039063.320312-6.3125-1.5-8.898438-1.902344-2.503906-4.859375-3.980468-8-4zm-56.601563 162.796875c-3.773437 12.6875-15.464844 21.367188-28.699218 21.300781h-210c-14.566407.039063-27.035157-10.441406-29.5-24.800781l-24.699219-139.398437h336.097656zm0 0"></path><path d="m360.355469 322.332031c-30.046875 0-54.402344 24.355469-54.402344 54.402344 0 30.042969 24.355469 54.398437 54.402344 54.398437 30.042969 0 54.398437-24.355468 54.398437-54.398437-.03125-30.03125-24.367187-54.371094-54.398437-54.402344zm0 88.800781c-19 0-34.402344-15.402343-34.402344-34.398437 0-19 15.402344-34.402344 34.402344-34.402344 18.996093 0 34.398437 15.402344 34.398437 34.402344 0 18.996094-15.402344 34.398437-34.398437 34.398437zm0 0"></path></svg></svg></span><span class="cart-img hidden-lg hidden-md"><svg xmlns="http://www.w3.org/2000/svg" style="display: none;"><symbol id="cart-responsive" viewBox="0 0 510 510"><title>cart-responsive</title><path d="M306.4,313.2l-24-223.6c-0.4-3.6-3.6-6.4-7.2-6.4h-44.4V69.6c0-38.4-31.2-69.6-69.6-69.6c-38.4,0-69.6,31.2-69.6,69.6v13.6H46c-3.6,0-6.8,2.8-7.2,6.4l-24,223.6c-0.4,2,0.4,4,1.6,5.6c1.2,1.6,3.2,2.4,5.2,2.4h278c2,0,4-0.8,5.2-2.4C306,317.2,306.8,315.2,306.4,313.2z M223.6,123.6c3.6,0,6.4,2.8,6.4,6.4c0,3.6-2.8,6.4-6.4,6.4c-3.6,0-6.4-2.8-6.4-6.4C217.2,126.4,220,123.6,223.6,123.6z M106,69.6c0-30.4,24.8-55.2,55.2-55.2c30.4,0,55.2,24.8,55.2,55.2v13.6H106V69.6zM98.8,123.6c3.6,0,6.4,2.8,6.4,6.4c0,3.6-2.8,6.4-6.4,6.4c-3.6,0-6.4-2.8-6.4-6.4C92.4,126.4,95.2,123.6,98.8,123.6z M30,306.4L52.4,97.2h39.2v13.2c-8,2.8-13.6,10.4-13.6,19.2c0,11.2,9.2,20.4,20.4,20.4c11.2,0,20.4-9.2,20.4-20.4c0-8.8-5.6-16.4-13.6-19.2V97.2h110.4v13.2c-8,2.8-13.6,10.4-13.6,19.2c0,11.2,9.2,20.4,20.4,20.4c11.2,0,20.4-9.2,20.4-20.4c0-8.8-5.6-16.4-13.6-19.2V97.2H270l22.4,209.2H30z"></path></symbol></svg><svg class="icon" viewBox="0 0 40 40"><use xlink:href="#cart-responsive" x="13%" y="13%"></use></svg></span><span class="cart-content"><span class="cart-products-count hidden-sm hidden-xs">(' + json['text_items_small'] + ')</span><span class="cart-products-count hidden-lg hidden-md">' + json['text_items_small'] + '</span><span class="cart-name"> '+ $('#cart .cart-name').text() +' </span></span></span>');

                    parent.$('#cart_wrapper').addClass('active');
                    parent.$('.cart-notification').addClass('active');
                    parent.$('body').addClass('cart-overlay');


                    $('#cart > ul').load('index.php?route=common/cart/info ul li');
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
            }
        });
    });
    //--></script>
<script type="text/javascript"><!--
    $('.date').datetimepicker({
        language: 'en-gb',
        pickTime: false
    });

    $('.datetime').datetimepicker({
        language: 'en-gb',
        pickDate: true,
        pickTime: true
    });

    $('.time').datetimepicker({
        language: 'en-gb',
        pickDate: false
    });

    $('button[id^=\'button-upload\']').on('click', function() {
        var node = this;

        $('#form-upload').remove();

        $('body').prepend('<form enctype="multipart/form-data" id="form-upload" style="display: none;"><input type="file" name="file" /></form>');

        $('#form-upload input[name=\'file\']').trigger('click');

        if (typeof timer != 'undefined') {
            clearInterval(timer);
        }

        timer = setInterval(function() {
            if ($('#form-upload input[name=\'file\']').val() != '') {
                clearInterval(timer);

                $.ajax({
                    url: 'index.php?route=tool/upload',
                    type: 'post',
                    dataType: 'json',
                    data: new FormData($('#form-upload')[0]),
                    cache: false,
                    contentType: false,
                    processData: false,
                    beforeSend: function() {
                        $(node).button('loading');
                    },
                    complete: function() {
                        $(node).button('reset');
                    },
                    success: function(json) {
                        $('.text-danger').remove();

                        if (json['error']) {
                            $(node).parent().find('input').after('<div class="text-danger">' + json['error'] + '</div>');
                        }

                        if (json['success']) {
                            alert(json['success']);

                            $(node).parent().find('input').val(json['code']);
                        }
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
                    }
                });
            }
        }, 500);
    });
    //--></script>
<script type="text/javascript"><!--
    $('#review').delegate('.pagination a', 'click', function(e) {
        e.preventDefault();
        $('#review').fadeOut('slow');
        $('#review').load(this.href);
        $('#review').fadeIn('slow');
    });

    $('#review').load('index.php?route=product/product/review&product_id=42');

    $('#button-review').on('click', function() {
        $.ajax({
            url: 'index.php?route=product/product/write&product_id=42',
            type: 'post',
            dataType: 'json',
            data: $("#form-review").serialize(),
            beforeSend: function() {
                $('#button-review').button('loading');
            },
            complete: function() {
                $('#button-review').button('reset');
            },
            success: function(json) {
                $('.alert-dismissible').remove();

                if (json['error']) {
                    $('#review').after('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + '</div>');
                }

                if (json['success']) {
                    $('#review').after('<div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> ' + json['success'] + '</div>');

                    $('input[name=\'name\']').val('');
                    $('textarea[name=\'text\']').val('');
                    $('input[name=\'rating\']:checked').prop('checked', false);
                }
            }
        });
    });
    function customclick() {
        $('a[href=\'#tab-review .panel-default\']').trigger('click');
        $('html, body').animate({scrollTop: $(".tab_review").offset().top}, 2000);
        $('.tab_review .collapse').removeClass('in');
        $('#tab-review').addClass('in');
    }
    $(document).ready(function() {
        $('.thumbnails').magnificPopup({
            type:'image',
            delegate: '.image_popup',
            gallery: {
                enabled: true
            }
        });
        $('.thumbnails_horizontal').magnificPopup({
            type:'image',
            delegate: 'a',
            gallery: {
                enabled: true
            }
        });
        $('.related-carousel').owlCarousel({
            loop:false,
            nav:true,
            dots: false,
            rewind: true,
            rtl: $('html').attr('dir') == 'rtl'? true : false,
            navText: ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
            responsive:{
                0:{
                    items:2
                },
                543:{
                    items:2
                },
                767:{
                    items:2
                },
                992:{
                    items:2
                },
                1200:{
                    items:3
                }
            }
        });
        $('.additional-carousel .item').click(function(){
            var a = parseInt($('.additional-carousel .item').index(this))+1;
            var selector = ".number_"+a;
            $('html, body').animate({
                scrollTop: $(selector).offset().top
            }, 500);
        });

        var positions= [];
        $(".item_image").each(function(counter) {
            positions[counter] = $(this).offset().top + $(".number_1").outerHeight();
        });

        $(window).scroll(function (event) {
            var scroll = $(window).scrollTop();
            $('.additional-carousel .item').removeClass('active');    // Do something
            for (var i = 0; i < positions.length; i++) { //console.log();
                if(scroll < positions[i]) {
                    $('.additional-carousel .item:nth-child(' + (i+1) +')').addClass('active');
                    break;
                }
            }
        });
    });
    //--></script>
<script>
    $('.image_show').magnificPopup({
        type:'image',
        delegate: 'a',
        gallery: {
            enabled: true
        }
    });
    $('#slider_carousel').owlCarousel({
        loop:false,
        nav:true,
        margin: 15,
        dots: false,
        rewind: true,
        rtl: $('html').attr('dir') == 'rtl'? true : false,
        navText: ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
        responsive:{
            0:{
                items:2
            },
            443:{
                items:3
            },
            767:{
                items:3
            },
            991:{
                items:3
            },
            1199:{
                items:4
            }
        }
    });
</script>

@endsection
