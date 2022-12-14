@extends('Home.layout.main')
@section('menu')
    @include('home/layout/menu')
@endsection
@section('banner')
    @include('home/layout/banner')
@endsection
@section('formSearch')
    @include('home/layout/formSearch')
@endsection
@section('css')
    <style>
        #content {
            box-shadow: 5px 5px 10px rgba(45, 199, 6, 0.5)
        }
    </style>
@endsection
@section('content')

    {{--    <div id="content">--}}
    <section id="ishicategory-366661127" class="ishicategoryblock container">
        <div class="row">
            <div class="sub-title">CÖUTURE</div>
            <h3 class="home-title">Bộ sưu tập</h3>
            <div class="owl-carousel">
                @if ($categories->count()>0)
                    @foreach ($categories as $category)
                <div class="ishicategoryblock-container">
                    <div class="image-container">
                        <div class="item">
                            <a href="{{ route('category', ['slug' => $category->categorySlug]) }}">
                                <img
                                    src="{{asset('uploads/category/'.$category->image) }}"
                                    alt="{{$category->categoryName}}" class="img-responsive"/>
                            </a>
                            <a href="{{ route('category', ['slug' => $category->categorySlug]) }}" class="menu-container">
                                <span class="heading">{{$category->categoryName}}</span>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
                @else
                    <div class="">
                        <p>Không tìm thấy sản phẩm phù hợp . Vui lòng quay lại sau.....</p>
                    </div>
                @endif

            </div>
            <script type="text/javascript">
                $('#ishicategory-366661127 .owl-carousel').owlCarousel({
                    loop: true,
                    nav: true,
                    dots: false,
                    navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
                    rtl: $('html').attr('dir') == 'rtl' ? true : false,
                    rewind: true,
                    responsive: {
                        0: {
                            items: 2
                        },
                        544: {
                            items: 3
                        },
                        768: {
                            items: 3
                        },
                        992: {
                            items: 4
                        },
                        1200: {
                            items: 4
                        }
                    }
                });
            </script>
        </div>
    </section>
    <section id="ishiproductblock-793023252" class="ishiproductsblock container">
        <div class="row">
            <div class="sub-title">CÖUTURE</div>
            <h3 class="home-title">Sản phẩm hot</h3>
            <ul class="ishiproductstab nav nav-tabs clearfix">
                <li class="nav-item active">
                    <a class="nav-link" href="#featured-products-block1174802410" data-toggle="tab">featured</a>
                </li>

            </ul>

            <div class="tab-content">
                <div class="tab-pane active" id="featured-products-block1174802410">

                    <div class="block_content container">

                        <div class="owl-carousel">
                            @if ($productHot->count()>0)
                                @foreach ($productHot as $product)
                            <div class="item product-container" data-countdowntime="">
                                <div class="product-thumb">
                                    <div class="image">
                                        <a href="{{ route('detail', ['slug' => $product->productSlug]) }}">
                                            <img src="{{ asset('uploads/product/'.$product->image) }}"
                                                 alt="{{ $product->productName }}" title="{{ $product->productName }}" class="img-responsive"/>
                                            <img class="product-img-extra img-responsive" alt="{{ $product->productName }}"
                                                 title="{{ $product->productName }}"
                                                 src="{{ asset('uploads/product/'.$product->image) }}"/>
                                        </a>

                                        <div class="button-group">
                                            <div class="btn-quickview">
                                                <div class="quickview-button button" data-toggle="tooltip"
                                                     title=" Quick View">
                                                    <a class="quickbox"
                                                       href="https://demo.ishithemes.com/opencart/OPC140/OPC140L01/index.php?route=product/quick_view&amp;product_id=42">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                             style="display: none;">
                                                            <symbol id="eye-open" viewBox="0 0 1050 1050"><title>
                                                                    eye-open</title>
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
                                                        <svg class="icon" viewBox="0 0 30 30">
                                                            <use xlink:href="#eye-open" x="26%" y="26%"></use>
                                                        </svg>
                                                        <i class="fa fa-eye" aria-hidden="true"></i><span
                                                            class="lblcart">Quick View</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="btn-wishlist">
                                                <button type="button" data-toggle="tooltip" title="Add to Wish List"
                                                        onclick="wishlist.add('42');"><i class="fa fa-heart"></i>
                                                    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                        <symbol id="heart-shape-outline" viewBox="0 0 1200 1200">
                                                            <title>heart-shape-outline</title>
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
                                                    <svg class="icon" viewBox="0 0 30 30">
                                                        <use xlink:href="#heart-shape-outline" x="28%"
                                                             y="30%"></use>
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="btn-compare">
                                                <button type="button" data-toggle="tooltip"
                                                        title="Compare this Product" onclick="compare.add('42');"><i
                                                        class="fa fa-exchange"></i>
                                                    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                        <symbol id="report" viewBox="0 0 1450 1450"><title>
                                                                report</title>
                                                            <path d="m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path>
                                                            <path d="m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path>
                                                            <path d="m480 258.667969h60v220h-60zm0 0"></path>
                                                            <path d="m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path>
                                                            <path d="m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path>
                                                            <path d="m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path>
                                                            <path d="m200 118.667969h60v360h-60zm0 0"></path>
                                                            <path d="m340-1.332031h60v480h-60zm0 0"></path>
                                                            <path d="m60 358.667969h60v120h-60zm0 0"></path>
                                                            <path d="m60 548.667969c.035156-3.414063.65625-6.796875 1.839844-10h-51.839844c-5.523438 0-10 4.476562-10 10 0 5.519531 4.476562 10 10 10h51.839844c-1.183594-3.203125-1.804688-6.589844-1.839844-10zm0 0"></path>
                                                            <path d="m118.160156 538.667969c2.457032 6.4375 2.457032 13.558593 0 20h83.679688c-2.457032-6.441407-2.457032-13.5625 0-20zm0 0"></path>
                                                            <path d="m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path>
                                                            <path d="m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path>
                                                            <path d="m341.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0"></path>
                                                            <path d="m481.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0"></path>
                                                            <path d="m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path>
                                                            <path d="m590 538.667969h-51.839844c2.457032 6.4375 2.457032 13.558593 0 20h51.839844c5.523438 0 10-4.480469 10-10 0-5.523438-4.476562-10-10-10zm0 0"></path>
                                                        </symbol>
                                                    </svg>
                                                    <svg class="icon" viewBox="0 0 40 40">
                                                        <use xlink:href="#report" x="28%" y="30%"></use>
                                                    </svg>
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
                                        <h4>
                                            <a href="{{ route('detail', ['slug' => $product->productSlug]) }}">{{ $product->productName }}</a></h4>
                                        <p class="description">
                                            {{ $product->tag }}</p>
                                        <p class="price">
                                            {{ number_format($product->price) }} đ
                                            <span class="price-tax"></span>
                                        </p>
                                        <form action="{{ route('cart.store') }}" method="post" class="form-group">
                                            @csrf
                                            @if (isset($cart->items[$product->id]))
                                                <input type="number" name="quantity" max="100" min="0" size="2" class="form-control hidden"
                                                       value="{{ $cart->items[$product->id]['quantity'] + 1}}" style="width: unset;">
                                            @else
                                                <input type="number" name="quantity" max="100" min="0" class="form-control hidden"
                                                       value="1" size="2"  style="padding: 19px; width: unset;">
                                                {{--                                    <p> Số lượng: <input type="number" name="quantity" max="100"--}}
                                                {{--                                                         min="0" value="1"></p>--}}
                                            @endif
                                            <input type="hidden" name="id" value="{{ $product->id }}">
                                            <div class="btn-cart">
                                                <button type="submit" name="cart-outline" data-toggle="tooltip" title="Add to Cart">
                                                    <i class="fa fa-shopping-cart"></i>
                                                    <span class="lblcart">Thêm vào giỏ hàng</span>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                                @endforeach
                            @else
                                <div class="">
                                    <p>Không tìm thấy sản phẩm phù hợp . Vui lòng quay lại sau.....</p>
                                </div>
                            @endif
                        </div>

                    </div>

                </div>

            </div>
        </div>
        <script type="text/javascript">
            $('#ishiproductblock-793023252 .owl-carousel').owlCarousel({
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
                    544: {
                        items: 2
                    },
                    768: {
                        items: 2
                    },
                    992: {
                        items: 3
                    },
                    1200: {
                        items: 4
                    }
                }
            });
        </script>
        <script type="text/javascript">
            $('#ishiproductblock-793023252 li a:first').tab('show');
            //--></script>
    </section>
    <section id="ishibannerwithtimerblock-1891836618" class="ishibannerwithtimerblock" data-counter=""
             data-deal="0">
        <div class="container">
            <div class="row">
                <div class="bannerblock1 bannerblock col-lg-4 col-md-4 col-sm-6 col-xs-6">
                    <div class="image-container">
                        <a href="#" class="ishi-customhover-fadeinoutcorner ">
                            <img src="https://assets.vogue.com/photos/63137e911326a4fefbc72f25/master/w_1280,c_limit/00001-kudos-soduk-spring-2023-ready-to-wear-tokyo-credit-brand.jpg"
                                 alt="" class="img-responsive">

                        </a>
                    </div>
                </div>
                <div class="bannerblock2 bannerblock col-lg-4 col-md-4 col-sm-6 col-xs-6">
                    <div class="image-container">
                        <a href="#" class="ishi-customhover-fadeinoutcorner ">
                            <img src="https://assets.vogue.com/photos/607723a350dd698624f0b236/master/w_1280,c_limit/00003-GUCCI-FALL-21.gif"
                                 alt="" class="img-responsive">
                        </a>
                    </div>
                </div>
                <div class="timer-text-block col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="top-title">Take An Extra</div>
                    <div class="offer-title">50% OFF</div>
                    <div class="sub-title">Everything</div>
                    <div class="description">Lorem Ipsum is simply dummy text of the typesetting industry standard
                        dummy text ever since the 1500s.
                    </div>
                    <div id="bannercountdown">
                        <div class="countdown-days countdown">
                            <div class="data"></div>
                            <div class="text">Days</div>
                        </div>
                        <div class="countdown-hours countdown">
                            <div class="data"></div>
                            <div class="text">Hours</div>
                        </div>
                        <div class="countdown-minutes countdown">
                            <div class="data"></div>
                            <div class="text">Mins</div>
                        </div>
                        <div class="countdown-seconds countdown">
                            <div class="data"></div>
                            <div class="text">Secs</div>
                        </div>
                    </div>
                    <div class="banner-btn">
                        <a href="#" class="btn-default">VIEW MORE</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ishispecial container clearfix">
        <div class="row">
            <div class="product-section col-lg-8 col-md-8 col-sm-12 cok-xs-12">
                <div class="sub-title">CÖUTURE</div>
                <h2 class="home-title">Sản phẩm mới</h2>
                <div id="ishispecialblock-1273650762" class="ishispecialblock owl-carousel">
                    @if ($productHot->count()>0)
                        @foreach ($productHot as $product)
                    <div class="product-layout item product-container" data-countdowntime="">
                        <div class="product-thumb">
                            <div class="image">
                                <a href="{{ route('detail', ['slug' => $product->productSlug]) }}">
                                    <img
                                        src="{{ asset('uploads/product/'.$product->image) }}"
                                        alt="{{ $product->productName }}" title="{{ $product->productName }}" class="img-responsive"/>
                                    <img class="product-img-extra img-responsive" alt="Basic style coat"
                                         title="Basic style coat"
                                         src="{{ asset('uploads/product/'.$product->image) }}"/>
                                </a>

                                <div class="button-group">
                                    <div class="btn-quickview">
                                        <div class="quickview-button button" data-toggle="tooltip"
                                             title=" Quick View">
                                            <a class="quickbox"
                                               href="https://demo.ishithemes.com/opencart/OPC140/OPC140L01/index.php?route=product/quick_view&amp;product_id=33">
                                                <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                    <symbol id="eye-open" viewBox="0 0 1050 1050"><title>
                                                            eye-open</title>
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
                                                <svg class="icon" viewBox="0 0 30 30">
                                                    <use xlink:href="#eye-open" x="26%" y="26%"></use>
                                                </svg>
                                                <i class="fa fa-eye" aria-hidden="true"></i><span class="lblcart">Quick View</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="btn-wishlist">
                                        <button type="button" data-toggle="tooltip" title="Add to Wish List"
                                                onclick="wishlist.add('33');"><i class="fa fa-heart"></i>
                                            <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                <symbol id="heart-shape-outline" viewBox="0 0 1200 1200"><title>
                                                        heart-shape-outline</title>
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
                                            <svg class="icon" viewBox="0 0 30 30">
                                                <use xlink:href="#heart-shape-outline" x="28%" y="30%"></use>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="btn-compare">
                                        <button type="button" data-toggle="tooltip" title="Compare this Product"
                                                onclick="compare.add('33');"><i class="fa fa-exchange"></i>
                                            <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                <symbol id="report" viewBox="0 0 1450 1450"><title>report</title>
                                                    <path
                                                        d="m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path>
                                                    <path
                                                        d="m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path>
                                                    <path d="m480 258.667969h60v220h-60zm0 0"></path>
                                                    <path
                                                        d="m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path>
                                                    <path
                                                        d="m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path>
                                                    <path
                                                        d="m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path>
                                                    <path d="m200 118.667969h60v360h-60zm0 0"></path>
                                                    <path d="m340-1.332031h60v480h-60zm0 0"></path>
                                                    <path d="m60 358.667969h60v120h-60zm0 0"></path>
                                                    <path
                                                        d="m60 548.667969c.035156-3.414063.65625-6.796875 1.839844-10h-51.839844c-5.523438 0-10 4.476562-10 10 0 5.519531 4.476562 10 10 10h51.839844c-1.183594-3.203125-1.804688-6.589844-1.839844-10zm0 0"></path>
                                                    <path
                                                        d="m118.160156 538.667969c2.457032 6.4375 2.457032 13.558593 0 20h83.679688c-2.457032-6.441407-2.457032-13.5625 0-20zm0 0"></path>
                                                    <path
                                                        d="m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path>
                                                    <path
                                                        d="m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path>
                                                    <path
                                                        d="m341.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0"></path>
                                                    <path
                                                        d="m481.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0"></path>
                                                    <path
                                                        d="m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"></path>
                                                    <path
                                                        d="m590 538.667969h-51.839844c2.457032 6.4375 2.457032 13.558593 0 20h51.839844c5.523438 0 10-4.480469 10-10 0-5.523438-4.476562-10-10-10zm0 0"></path>
                                                </symbol>
                                            </svg>
                                            <svg class="icon" viewBox="0 0 40 40">
                                                <use xlink:href="#report" x="28%" y="30%"></use>
                                            </svg>
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

                                <h4>
                                    <a href="{{ route('detail', ['slug' => $product->productSlug]) }}">{{ $product->productName }}</a></h4>
                                <p class="description">{{ $product->tag}}</p>
                                <p class="price">
                                    <span class="price-new">{{ number_format($product->price - ($product->price * $product->sale)/100) }} đ</span> <span class="price-old">{{ number_format($product->price) }} đ</span>
                                    <span class="price-tax"></span>
                                </p>

                                <form action="{{ route('cart.store') }}" method="post" class="form-group">
                                    @csrf
                                    @if (isset($cart->items[$product->id]))
                                        <input type="number" name="quantity" max="100" min="0" size="2" class="form-control hidden"
                                               value="{{ $cart->items[$product->id]['quantity'] + 1}}" style="width: unset;">
                                    @else
                                        <input type="number" name="quantity" max="100" min="0" class="form-control hidden"
                                               value="1" size="2"  style="padding: 19px; width: unset;">
                                        {{--                                    <p> Số lượng: <input type="number" name="quantity" max="100"--}}
                                        {{--                                                         min="0" value="1"></p>--}}
                                    @endif
                                    <input type="hidden" name="id" value="{{ $product->id }}">
                                    <div class="btn-cart">
                                        <button type="submit" name="cart-outline" data-toggle="tooltip" title="Add to Cart">
                                            <i class="fa fa-shopping-cart"></i>
                                            <span class="lblcart">Thêm vào giỏ hàng</span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                        @endforeach
                    @else
                        <div class="">
                            <p>Không tìm thấy sản phẩm phù hợp . Vui lòng quay lại sau.....</p>
                        </div>
                    @endif
                </div>
            </div>
            <div class="special-banner col-lg-4 col-md-4 col-sm-12 cok-xs-12">
                <div class="image-container">
                    <a href="#">
                        <img src="https://assets.vogue.com/photos/6331c8679d3129e329e8f931/master/w_1280,c_limit/00001-longchamp-spring-2023-ready-to-wear-credit-brand.jpg"
                             alt="banner" class="img-responsive">
                    </a>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $('#ishispecialblock-1273650762').owlCarousel({
                loop: false,
                nav: true,
                dots: false,
                margin: 30,
                rewind: true,
                rtl: $('html').attr('dir') == 'rtl' ? true : false,
                navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
                responsive: {
                    0: {
                        items: 2,
                        margin: 10
                    },
                    544: {
                        items: 2
                    },
                    768: {
                        items: 2
                    },
                    992: {
                        items: 2
                    },
                    1200: {
                        items: 2
                    },
                    1500: {
                        items: 3
                    }
                }
            });
        </script>
    </section>

    <script type="text/javascript">
        $('#ishiproductblock-793023252 .owl-carousel').owlCarousel({
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
                544: {
                    items: 2
                },
                768: {
                    items: 2
                },
                992: {
                    items: 3
                },
                1200: {
                    items: 4
                }
            }
        });
        $('#ishiproductblock-793023252 li a:first').tab('show');
    </script>
    {{--        <x-title-product :title="'Sản phẩm Hot'" />--}}
    {{--        <x-product :products="$productHot"/>--}}
    {{--        <hr>--}}
    {{--        <x-title-product :title="'Sản phẩm Mới'" />--}}
    {{--        <x-product :products="$productNew"/>--}}
    {{--    </div>--}}
@endsection
