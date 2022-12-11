@extends('Home.layout.main')
@section('menu')
    @include('home/layout/menu')
@endsection
@section('banner')
    <div class="breadcrumb-container">
        <h1 class="page-title">{{ $product->productName }}</h1>
        <ul class="breadcrumb">
            <li><a href="https://demo.ishithemes.com/opencart/OPC140/OPC140L01/index.php?route=common/home"><i
                        class="fa fa-home"></i></a></li>
            <li>
                <a href="https://demo.ishithemes.com/opencart/OPC140/OPC140L01/index.php?route=product/product&amp;product_id=42">{{ $product->productName }}</a>
            </li>
        </ul>
    </div>
@endsection
@section('formSearch')
    @include('home/layout/formSearch')
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('assets\css\home\page-search.css') }}">
    <link rel="stylesheet" href="{{ asset('assets\css\home\detail.css') }}">
@endsection
@section('content')
{{--        <div class="row">--}}
{{--            <div class="col-md-3 col-lg-3 col-12 searchLeft">--}}
{{--                <form action="{{route('search')}}" method="get">--}}
{{--                    @csrf--}}
{{--                    <div class="form-group">--}}
{{--                        <input type="text" name="search" class="form-control" placeholder="Nhập tên sản phẩm">--}}
{{--                    </div>--}}

{{--                    <div class="form-group">--}}
{{--                        <select name="id" id="id" class="form-control">--}}
{{--                            <option value="" selected>Chọn Danh mục </option>--}}
{{--                           {!!$html!!}--}}
{{--                        </select>--}}
{{--                    </div>--}}
{{--                    <div class="form-group">--}}
{{--                        <input type="text" class="form-control" placeholder="Giá từ (mặc định là 0 VND)">--}}
{{--                        <input type="text" class="form-control" placeholder="Đến">--}}
{{--                    </div>--}}
{{--                    <button type="submit" class="btn btn-primary">Tìm</button>--}}
{{--                </form>--}}
{{--            </div>--}}
{{--            <div class="col-md-9 col-lg-9 col-12 searchRight">--}}
{{--                <div class="productInfo">--}}
{{--                    Sản phẩm : <b>{{ $product->productName }}</b>--}}
{{--                </div>--}}
{{--                <hr>--}}
{{--                <div class="row">--}}
{{--                    <div class="col-md-5 col-lg-5 col-12">--}}
{{--                        <div id="carouselExampleIndicators" class="carousel slide img-product" data-ride="carousel">--}}
{{--                            <ol class="carousel-indicators">--}}
{{--                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>--}}
{{--                                @php--}}
{{--                                    $list = explode('!', $product->imageList);--}}
{{--                                    $sl = count($list);--}}
{{--                                @endphp--}}
{{--                                @if ($sl > 1)--}}
{{--                                    @for ($i = 1; $i <= $sl; ++$i)--}}
{{--                                        <li data-target="#carouselExampleIndicators" data-slide-to="{{ $i }}"></li>--}}
{{--                                    @endfor--}}
{{--                                @endif--}}
{{--                            </ol>--}}
{{--                            <div class="carousel-inner">--}}
{{--                                <div class="carousel-item active">--}}
{{--                                    <img src="{{ asset('uploads/product/' . $product->image) }}" class="d-block w-100"--}}
{{--                                        alt="...">--}}
{{--                                </div>--}}
{{--                                @if ($product->imageList)--}}
{{--                                    @foreach ($list as $image)--}}
{{--                                        <div class="carousel-item">--}}
{{--                                            <img src="{{ asset('uploads/product/' . $image) }}" class="d-block w-100"--}}
{{--                                                alt="...">--}}
{{--                                        </div>--}}
{{--                                    @endforeach--}}
{{--                                @endif--}}
{{--                            </div>--}}
{{--                            @if ($product->imageList)--}}
{{--                                <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators"--}}
{{--                                    data-slide="prev">--}}
{{--                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>--}}
{{--                                    <span class="sr-only">Previous</span>--}}
{{--                                </button>--}}
{{--                                <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators"--}}
{{--                                    data-slide="next">--}}
{{--                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>--}}
{{--                                    <span class="sr-only">Next</span>--}}
{{--                                </button>--}}
{{--                            @endif--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                    <div class="col-md-7 col-lg-7 col-12">--}}
{{--                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">--}}
{{--                            <li class="nav-item" role="presentation">--}}
{{--                                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home"--}}
{{--                                    role="tab" aria-controls="pills-home" aria-selected="true"><b>Sản phẩm</b></a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item" role="presentation">--}}
{{--                                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile"--}}
{{--                                    role="tab" aria-controls="pills-profile" aria-selected="false"><b>Thông tin chi--}}
{{--                                        tiết</b></a>--}}
{{--                            </li>--}}

{{--                        </ul>--}}
{{--                        <div class="tab-content" id="pills-tabContent">--}}
{{--                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel"--}}
{{--                                aria-labelledby="pills-home-tab">--}}
{{--                                <div>--}}
{{--                                    @include('admin.layout.alert')--}}
{{--                                    <p>Tên sản phẩm:</p>--}}
{{--                                    <p>Giá sản phẩm: {{ number_format($product->price) }}VNĐ</p>--}}
{{--                                    <p>Khuyến mãi: {{ number_format($product->sale) }} %</p>--}}
{{--                                    <p>Giá sau khuyến mãi :--}}
{{--                                        {{ number_format($product->price - ($product->price / 100) * $product->sale) }} VNĐ--}}
{{--                                    </p>--}}
{{--                                    <form action="{{ route('cart.store') }}" method="post">--}}
{{--                                        @csrf--}}
{{--                                        @if (isset($cart->items[$product->id]))--}}
{{--                                            <p>Số lượng: <input type="number" name="quantity" max="100" min="0"--}}
{{--                                                    value="{{ $cart->items[$product->id]['quantity'] }}"> <a--}}
{{--                                                    href="{{ route('cart.store') }}">--}}
{{--                                                    <ion-icon style="color: green" name="checkbox-outline"></ion-icon>--}}
{{--                                                </a></p>--}}
{{--                                        @else--}}
{{--                                            <p> Số lượng: <input type="number" name="quantity" max="100"--}}
{{--                                                    min="0" value="1"></p>--}}
{{--                                        @endif--}}
{{--                                        <input type="hidden" name="id" value="{{ $product->id }}">--}}
{{--                                        <p>Thêm vào giỏ hàng <button style="border: none" type="submit">--}}
{{--                                                <ion-icon class="btn btn-outline-success" name="cart-outline"></ion-icon>--}}
{{--                                            </button></p>--}}
{{--                                    </form>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="tab-pane fade" id="pills-profile" role="tabpanel"--}}
{{--                                aria-labelledby="pills-profile-tab">--}}
{{--                                <p>--}}
{{--                                    {!! $product->description !!}--}}
{{--                                </p>--}}
{{--                            </div>--}}

{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--            </div>--}}

{{--        </div>--}}

    <script>
        function quickbox() {
            if ($(window).width() > 767) {
                $('.quickview-button').magnificPopup({
                    type: 'iframe',
                    delegate: 'a',
                    preloader: true,
                    tLoading: 'Loading image #%curr%...',
                });
            }
        }

        jQuery(document).ready(function () {
            quickbox();
        });
        jQuery(window).resize(function () {
            quickbox();
        });
        $("input[name=\'search\']").keyup(function (event) {
            $('input[name=\'search\']').autocomplete({
                'source': function (request, response) {
                    $.ajax({
                        url: 'index.php?route=product/search/autocomplete&filter_name=' + encodeURIComponent(request),
                        dataType: 'json',
                        success: function (result) {
                            var products = result.products;
                            $('.ajaxishi-search ul li').remove();
                            $.each(products, function (index, product) {
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
                            $('.ajaxishi-search').css('display', 'block');
                            return false;
                        }
                    });
                },
                'select': function (product) {
                    $('input[name=\'filter_name\']').val(product.name);
                }
            });
        });
    </script>

    <div id="product-product" class="container">
        <div class="wrapper_container">
            <div id="_desktop_column_left">
                <aside id="column-left" class="col-sm-3 hidden-xs">
                    <form action="{{route('search')}}" method="post">
                        @csrf @method('get')
                        <div class="filterbox">
                            <div class="page-title hidden-sm hidden-xs">Mức giá</div>
                            <div class="block-title clearfix  hidden-lg hidden-md collapsed"
                                 data-target="#filterbox-container" data-toggle="collapse">
                                <span class="page-title">Refine Search</span>
                                <span class="navbar-toggler collapse-icons">
                                  <i class="fa fa-angle-down add"></i>
                                  <i class="fa fa-angle-up remove"></i>
                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6" style="padding-right: 0px !important;">
                                    <input style="padding: 20px;" type="text" class="form-control" name="min" value="{{request()->min ? request()->min : ""}}" placeholder="Giá từ(0đ)">
                                </div>
                                <div class="col-md-6" style="padding-left: 0px !important;">
                                    <input style="padding: 20px;" type="text" class="form-control" name="max" value="{{request()->max ? request()->max : ""}}" placeholder="Đến">
                                </div>
                            </div>
                        </div>
                        {{--                        <button type="submit" class="btn btn-primary">Tìm</button>--}}
                    </form>
                    <div class="box">
                        <div class="block-title clearfix collapsed"
                             data-target="#box-container" data-toggle="collapse">
                            <span class="page-title">DANH MỤC</span>
                        </div>
                        <div id="box-container" class=" data-toggler">
                            <ul class="category-top-menu">
                                @foreach ($menus as $menu)
                                    <li>
                                        <a style="display: flex;" href="{{ route('category', ['slug' => $menu->categorySlug]) }}"
                                           class="list-group-item ">{{$menu->categoryName}}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <script type="text/javascript"><!--
                        $('#button-filter').on('click', function () {
                            filter = [];

                            $('input[name^=\'filter\']:checked').each(function (element) {
                                filter.push(this.value);
                            });

                            location = 'https://demo.ishithemes.com/opencart/OPC140/OPC140L01/index.php?route=product/category&path=20_26&filter=' + filter.join(',');
                        });
                        //--></script>

                    <section id="ishibannerblock-741145359" class="ishibannerblock clearfix">
                        <div class="container">
                            <div class="row">
                                <div class="bannerblock col-md-12 col-sm-12 col-xs-12">
                                    <div class="image-container">
                                        <a href="#" class="scale banner-scale">
                                            <img src="https://demo.ishithemes.com/opencart/OPC140/OPC140L01/image/cache/catalog/Left-banner-324x420.png"
                                                 alt="" class="img-responsive">

                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </aside>
            </div>

            <div id="content" class="col-sm-9">
                <div class="product_carousel">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 product-left">
                            <div class="product-left-title hidden-lg hidden-md hidden-sm">
                                <h2 class="product-title">{{ $product->productName }}</h2>
                                <ul class="list-unstyled price">
                                    <li>
                                        <h2 class="product-price">{{ number_format($product->price - ($product->price / 100) * $product->sale) }}đ</h2>
                                    </li>
                                </ul>
                            </div>
                            <div class="product-image thumbnails_horizontal">
                                <div class="carousel-container">
                                    <a class="thumbnail"
                                       href="{{ route('detail', ['slug' => $product->productSlug]) }}"
                                       title="{{ $product->productName }}">
                                        <img
                                            src="{{ asset('uploads/product/'.$product->image) }}"
                                            title="{{ $product->productName }}" alt="{{ $product->productName }}"/>
                                    </a>
                                </div>
                                <div class="image_show">
                                    <div id="slider_carousel" class="owl-carousel">
                                        @php
                                            $list = explode('!', $product->imageList);
                                            $sl = count($list);
                                        @endphp
                                        @if ($product->imageList)
                                            @foreach ($list as $image)
                                                <div class="image-additional item">
                                                    <a class="thumbnail"
                                                       href="#"
                                                       title="{{ $product->productName }}">
                                                        <img
                                                            src="{{ asset('uploads/product/' . $image) }}"
                                                            title="{{ $product->productName }}" alt="{{ $product->productName }}"/>
                                                    </a>
                                                </div>
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                            </div>


                            <div class="tabs_info clearfix">
                                <div id="accordion" class="panel-group" role="tablist">
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingOne">
                                            <a data-toggle="collapse" href="#tab-description" data-parent="#accordion"
                                               aria-expanded="true"> Mô tả sản phẩm </a>
                                        </div>
                                        <div id="tab-description" class="panel-collapse collapse in" role="tabpanel"
                                             aria-labelledby="headingOne">
                                            <div class="tab-description"><p>
                                                    {!! $product->description !!}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default tab_review">
                                        <div class="panel-heading" role="tab" id="headingTwo">
                                            <a data-toggle="collapse" href="#tab-review" data-parent="#accordion"
                                               aria-expanded="false">Đánh giá</a>
                                        </div>
                                        <div id="tab-review" class="panel-collapse collapse" role="tabpanel"
                                             aria-labelledby="headingTwo">
                                            <div class="panel-body">
                                                <form class="form-horizontal" id="form-review">
                                                    <div id="review"></div>
                                                    <h2>Viết đánh giá</h2>
                                                    <div class="form-group required">
                                                        <div class="col-sm-12">
                                                            <label class="control-label" for="input-name">Tên của bạn</label>
                                                            <input type="text" name="name" value="" id="input-name"
                                                                   class="form-control"/>
                                                        </div>
                                                    </div>
                                                    <div class="form-group required">
                                                        <div class="col-sm-12">
                                                            <label class="control-label" for="input-review">Nội dung</label>
                                                            <textarea name="text" rows="5" id="input-review"
                                                                      class="form-control"></textarea>

                                                        </div>
                                                    </div>
                                                    <div class="form-group required">
                                                        <div class="col-sm-12">
                                                            <label class="control-label radio-title">Rating</label>&nbsp;&nbsp;&nbsp;
                                                            <div class="form-radio">
                                                                <span>Bad</span>&nbsp;
                                                                <input type="radio" name="rating" value="1"/>
                                                                &nbsp;
                                                                <input type="radio" name="rating" value="2"/>
                                                                &nbsp;
                                                                <input type="radio" name="rating" value="3"/>
                                                                &nbsp;
                                                                <input type="radio" name="rating" value="4"/>
                                                                &nbsp;
                                                                <input type="radio" name="rating" value="5"/>
                                                                &nbsp;<span>Good</span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="buttons clearfix">
                                                        <div class="pull-right">
                                                            <button type="button" id="button-review"
                                                                    data-loading-text="Loading..."
                                                                    class="btn btn-primary">Continue
                                                            </button>
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
                                <h1 class="product-title">{{ $product->productName }}</h1>
                            </div>
                            <!-- AddThis Button BEGIN -->
                            <div class="social-toolbox">
                                <span>Share</span>
                                <div class="addthis_toolbox addthis_default_style"
                                     data-url="https://demo.ishithemes.com/opencart/OPC140/OPC140L01/index.php?route=product/product&amp;product_id=42">
                                    <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
                                    <a class="addthis_button_tweet"></a>
                                    <a class="addthis_button_pinterest_pinit"></a>
                                    <a class="addthis_counter addthis_pill_style"></a>
                                </div>
                                <script type="text/javascript"
                                        src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-515eeaf54693130e"></script>
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
                                <a class="review-count" href="" onclick="customclick(); return false;">Lượt đánh giá</a> /
                                <a class="write-review" href="" onclick="customclick(); return false;"><i
                                        class="fa fa-pencil"></i> Viết đánh giá</a>
                            </div>

                            <ul class="list-unstyled price">
                                <li>
                                    <h2 class="product-price hidden-xs">{{ number_format($product->price - ($product->price / 100) * $product->sale) }} đ</h2>
                                </li>
                            </ul>


                            <hr>
                            <ul class="list-unstyled price">
                                <li class="product-tax">Giảm giá: {{ $product->sale }}%</li>
                                <hr>
                            </ul>
                            <hr>
                            <div id="product">
                                <div class="alert alert-info col-lg-12 col-md-12 col-sm-12 col-xs-12"><i
                                        class="fa fa-info-circle"></i> Còn hàng
                                </div>
                            </div>
                            <br>
                            <form action="{{ route('cart.store') }}" method="post" class="form-group">
                                @csrf
{{--                            <div class="form-group">--}}
                                <div class="row">
                                    <div class="col-6">
                                        @if (isset($cart->items[$product->id]))
                                            <label class="control-label" for="input-quantity">Số lượng</label>
                                            <input type="number" name="quantity" max="100" min="0" size="2" class="form-control"
                                                                value="{{ $cart->items[$product->id]['quantity'] }}" style="width: unset;">
                                        @else
                                            <label class="control-label" for="input-quantity">Số lượng</label>
                                            <input type="number" name="quantity" max="100" min="0" class="form-control"
                                                   value="1" size="2"  style="padding: 19px; width: unset;">
        {{--                                    <p> Số lượng: <input type="number" name="quantity" max="100"--}}
        {{--                                                         min="0" value="1"></p>--}}
                                        @endif
                                        <input type="hidden" name="id" value="{{ $product->id }}">
                                    </div>
                                    <div class="col-6">
                                        <button type="submit" name="cart-outline"
                                                class="btn btn-default btn-lg btn-block" style="width: auto;">Thêm vào giỏ hàng
                                        </button>
                                    </div>
                                </div>
{{--                                <p>Thêm vào giỏ hàng <button style="border: none" type="submit">--}}
{{--                                        <ion-icon class="btn btn-outline-success" name="cart-outline"></ion-icon>--}}
{{--                                    </button></p>--}}
                            </form>
{{--                            </div>--}}
                            <ul class="list-unstyled attr">
                                <li><span>Tag:</span> {{ $product->tag }}</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <script type="text/javascript"><!--
        $('select[name=\'recurring_id\'], input[name="quantity"]').change(function () {
            $.ajax({
                url: 'index.php?route=product/product/getRecurringDescription',
                type: 'post',
                data: $('input[name=\'product_id\'], input[name=\'quantity\'], select[name=\'recurring_id\']'),
                dataType: 'json',
                beforeSend: function () {
                    $('#recurring-description').html('');
                },
                success: function (json) {
                    $('.alert-dismissible, .text-danger').remove();

                    if (json['success']) {
                        $('#recurring-description').html(json['success']);
                    }
                }
            });
        });
        //--></script>
    <script type="text/javascript"><!--
        $('#button-cart').on('click', function () {
            $.ajax({
                url: 'index.php?route=checkout/cart/add',
                type: 'post',
                data: $('input[type=\'text\'], input[type=\'hidden\'], input[type=\'radio\']:checked, input[type=\'checkbox\']:checked, select, textarea'),
                dataType: 'json',
                beforeSend: function () {
                    $('#button-cart').button('loading');
                },
                complete: function () {
                    $('#button-cart').button('reset');
                },
                success: function (json) {
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

                        $('#cart > button').html('<span class="cart-link"><span class="cart-img hidden-sm hidden-xs"><svg aria-hidden="true" focusable="false" role="presentation" class="icon" viewBox="0 0 700 700"><svg x="15%" y="17%"><path d="m150.355469 322.332031c-30.046875 0-54.402344 24.355469-54.402344 54.402344 0 30.042969 24.355469 54.398437 54.402344 54.398437 30.042969 0 54.398437-24.355468 54.398437-54.398437-.03125-30.03125-24.367187-54.371094-54.398437-54.402344zm0 88.800781c-19 0-34.402344-15.402343-34.402344-34.398437 0-19 15.402344-34.402344 34.402344-34.402344 18.996093 0 34.398437 15.402344 34.398437 34.402344 0 18.996094-15.402344 34.398437-34.398437 34.398437zm0 0"></path><path d="m446.855469 94.035156h-353.101563l-7.199218-40.300781c-4.4375-24.808594-23.882813-44.214844-48.699219-48.601563l-26.101563-4.597656c-5.441406-.96875-10.632812 2.660156-11.601562 8.097656-.964844 5.441407 2.660156 10.632813 8.101562 11.601563l26.199219 4.597656c16.53125 2.929688 29.472656 15.871094 32.402344 32.402344l35.398437 199.699219c4.179688 23.894531 24.941406 41.324218 49.199219 41.300781h210c22.0625.066406 41.546875-14.375 47.902344-35.5l47-155.800781c.871093-3.039063.320312-6.3125-1.5-8.898438-1.902344-2.503906-4.859375-3.980468-8-4zm-56.601563 162.796875c-3.773437 12.6875-15.464844 21.367188-28.699218 21.300781h-210c-14.566407.039063-27.035157-10.441406-29.5-24.800781l-24.699219-139.398437h336.097656zm0 0"></path><path d="m360.355469 322.332031c-30.046875 0-54.402344 24.355469-54.402344 54.402344 0 30.042969 24.355469 54.398437 54.402344 54.398437 30.042969 0 54.398437-24.355468 54.398437-54.398437-.03125-30.03125-24.367187-54.371094-54.398437-54.402344zm0 88.800781c-19 0-34.402344-15.402343-34.402344-34.398437 0-19 15.402344-34.402344 34.402344-34.402344 18.996093 0 34.398437 15.402344 34.398437 34.402344 0 18.996094-15.402344 34.398437-34.398437 34.398437zm0 0"></path></svg></svg></span><span class="cart-img hidden-lg hidden-md"><svg xmlns="http://www.w3.org/2000/svg" style="display: none;"><symbol id="cart-responsive" viewBox="0 0 510 510"><title>cart-responsive</title><path d="M306.4,313.2l-24-223.6c-0.4-3.6-3.6-6.4-7.2-6.4h-44.4V69.6c0-38.4-31.2-69.6-69.6-69.6c-38.4,0-69.6,31.2-69.6,69.6v13.6H46c-3.6,0-6.8,2.8-7.2,6.4l-24,223.6c-0.4,2,0.4,4,1.6,5.6c1.2,1.6,3.2,2.4,5.2,2.4h278c2,0,4-0.8,5.2-2.4C306,317.2,306.8,315.2,306.4,313.2z M223.6,123.6c3.6,0,6.4,2.8,6.4,6.4c0,3.6-2.8,6.4-6.4,6.4c-3.6,0-6.4-2.8-6.4-6.4C217.2,126.4,220,123.6,223.6,123.6z M106,69.6c0-30.4,24.8-55.2,55.2-55.2c30.4,0,55.2,24.8,55.2,55.2v13.6H106V69.6zM98.8,123.6c3.6,0,6.4,2.8,6.4,6.4c0,3.6-2.8,6.4-6.4,6.4c-3.6,0-6.4-2.8-6.4-6.4C92.4,126.4,95.2,123.6,98.8,123.6z M30,306.4L52.4,97.2h39.2v13.2c-8,2.8-13.6,10.4-13.6,19.2c0,11.2,9.2,20.4,20.4,20.4c11.2,0,20.4-9.2,20.4-20.4c0-8.8-5.6-16.4-13.6-19.2V97.2h110.4v13.2c-8,2.8-13.6,10.4-13.6,19.2c0,11.2,9.2,20.4,20.4,20.4c11.2,0,20.4-9.2,20.4-20.4c0-8.8-5.6-16.4-13.6-19.2V97.2H270l22.4,209.2H30z"></path></symbol></svg><svg class="icon" viewBox="0 0 40 40"><use xlink:href="#cart-responsive" x="13%" y="13%"></use></svg></span><span class="cart-content"><span class="cart-products-count hidden-sm hidden-xs">(' + json['text_items_small'] + ')</span><span class="cart-products-count hidden-lg hidden-md">' + json['text_items_small'] + '</span><span class="cart-name"> ' + $('#cart .cart-name').text() + ' </span></span></span>');

                        parent.$('#cart_wrapper').addClass('active');
                        parent.$('.cart-notification').addClass('active');
                        parent.$('body').addClass('cart-overlay');


                        $('#cart > ul').load('index.php?route=common/cart/info ul li');
                    }
                },
                error: function (xhr, ajaxOptions, thrownError) {
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

        $('button[id^=\'button-upload\']').on('click', function () {
            var node = this;

            $('#form-upload').remove();

            $('body').prepend('<form enctype="multipart/form-data" id="form-upload" style="display: none;"><input type="file" name="file" /></form>');

            $('#form-upload input[name=\'file\']').trigger('click');

            if (typeof timer != 'undefined') {
                clearInterval(timer);
            }

            timer = setInterval(function () {
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
                        beforeSend: function () {
                            $(node).button('loading');
                        },
                        complete: function () {
                            $(node).button('reset');
                        },
                        success: function (json) {
                            $('.text-danger').remove();

                            if (json['error']) {
                                $(node).parent().find('input').after('<div class="text-danger">' + json['error'] + '</div>');
                            }

                            if (json['success']) {
                                alert(json['success']);

                                $(node).parent().find('input').val(json['code']);
                            }
                        },
                        error: function (xhr, ajaxOptions, thrownError) {
                            alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
                        }
                    });
                }
            }, 500);
        });
        //--></script>
    <script type="text/javascript"><!--
        $('#review').delegate('.pagination a', 'click', function (e) {
            e.preventDefault();
            $('#review').fadeOut('slow');
            $('#review').load(this.href);
            $('#review').fadeIn('slow');
        });

        $('#review').load('index.php?route=product/product/review&product_id=42');

        $('#button-review').on('click', function () {
            $.ajax({
                url: 'index.php?route=product/product/write&product_id=42',
                type: 'post',
                dataType: 'json',
                data: $("#form-review").serialize(),
                beforeSend: function () {
                    $('#button-review').button('loading');
                },
                complete: function () {
                    $('#button-review').button('reset');
                },
                success: function (json) {
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

        $(document).ready(function () {
            $('.thumbnails').magnificPopup({
                type: 'image',
                delegate: '.image_popup',
                gallery: {
                    enabled: true
                }
            });
            $('.thumbnails_horizontal').magnificPopup({
                type: 'image',
                delegate: 'a',
                gallery: {
                    enabled: true
                }
            });
            $('.related-carousel').owlCarousel({
                loop: false,
                nav: true,
                dots: false,
                rewind: true,
                rtl: $('html').attr('dir') == 'rtl' ? true : false,
                navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
                responsive: {
                    0: {
                        items: 2
                    },
                    543: {
                        items: 2
                    },
                    767: {
                        items: 2
                    },
                    992: {
                        items: 2
                    },
                    1200: {
                        items: 3
                    }
                }
            });
            $('.additional-carousel .item').click(function () {
                var a = parseInt($('.additional-carousel .item').index(this)) + 1;
                var selector = ".number_" + a;
                $('html, body').animate({
                    scrollTop: $(selector).offset().top
                }, 500);
            });

            var positions = [];
            $(".item_image").each(function (counter) {
                positions[counter] = $(this).offset().top + $(".number_1").outerHeight();
            });

            $(window).scroll(function (event) {
                var scroll = $(window).scrollTop();
                $('.additional-carousel .item').removeClass('active');    // Do something
                for (var i = 0; i < positions.length; i++) { //console.log();
                    if (scroll < positions[i]) {
                        $('.additional-carousel .item:nth-child(' + (i + 1) + ')').addClass('active');
                        break;
                    }
                }
            });
        });
        //--></script>
    <script>
        $('.image_show').magnificPopup({
            type: 'image',
            delegate: 'a',
            gallery: {
                enabled: true
            }
        });
        $('#slider_carousel').owlCarousel({
            loop: false,
            nav: true,
            margin: 15,
            dots: false,
            rewind: true,
            rtl: $('html').attr('dir') == 'rtl' ? true : false,
            navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
            responsive: {
                0: {
                    items: 2
                },
                443: {
                    items: 3
                },
                767: {
                    items: 3
                },
                991: {
                    items: 3
                },
                1199: {
                    items: 4
                }
            }
        });
    </script>

@endsection
