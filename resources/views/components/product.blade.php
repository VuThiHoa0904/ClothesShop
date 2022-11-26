<div>
    <ul class="products">
        @if ($products->count()>0)
            @foreach ($products as $product)
                <li>
                    <div class="product-item">
                        <div class="product-top">
                            <a href="{{ route('detail', ['slug' => $product->productSlug]) }}" class="product-thumb">
                                <img src="{{ asset('uploads/product/'.$product->image) }}" alt="product one">
                            </a>
                            <a href="{{ route('detail', ['slug' => $product->productSlug]) }}" class="buy-now">Mua ngay</a>
                            @if ($product->sale && $product->sale >0 && $product->sale <= 100)
                                <span class="sale">{{ $product->sale }}%</span>
                            @endif

                        </div>
                        <div class="product-info">
                            <div class="product-cat">
                                @foreach ($product->category as $cate)
                                     <span> {{$cate->categoryName}} / </span>
                                @endforeach

                            </div>
                            <a href="{{ route('detail', ['slug' => $product->productSlug]) }}"
                                class="product-name">{{ $product->productName }} </a>
                            <div class="product-price ">
                                @if ($product->sale && $product->sale >0 && $product->sale <= 100)
                                    <span class="gach">{{  number_format($product->price) }}</span>
                                    <span class="red">->
                                        {{ number_format($product->price - ($product->price / 100) * $product->sale) }}
                                        VNĐ</span>
                                @else
                                    <span class="">{{ number_format($product->price) }} VNĐ</span>
                                @endif

                            </div>
                        </div>
                    </div>
                </li>
            @endforeach
        @else
            <div class="">
                <p>Không tìm thấy sản phẩm phù hợp . Vui lòng quay lại sau.....</p>
            </div>
        @endif

    </ul>
</div>
<section id="ishiproductblock-793023252" class="ishiproductsblock container">
    <div class="row">



    <section id="ishiproductblock-793023252" class="ishiproductsblock container">
    <div class="row">
        <div class="sub-title">CÖUTURE</div>
        <h3 class="home-title">Sản phẩm hot</h3>
        <ul class="ishiproductstab nav nav-tabs clearfix">
            <li class="nav-item active">
                <a class="nav-link" href="#featured-products-block1174802410" data-toggle="tab">featured</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#bestseller-products-block1174802410" data-toggle="tab">best
                    sellers</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#new-products-block1174802410" data-toggle="tab">new Arrivals</a>
            </li>
        </ul>

        <div class="tab-content">
            <div class="tab-pane active" id="featured-products-block1174802410">
                <div class="block_content container">
                    <div class="owl-carousel">

                        <div class="item product-container" data-countdowntime="">
                            <div class="product-thumb">
                                <div class="image">
                                    <a href="https://demo.ishithemes.com/opencart/OPC140/OPC140L01/index.php?route=product/product&amp;product_id=42">
                                        <img src="https://demo.ishithemes.com/opencart/OPC140/OPC140L01/image/cache/catalog/productsimage/1-535x694.png"
                                             alt="Denim Jacket" title="Denim Jacket" class="img-responsive"/>
                                        <img class="product-img-extra img-responsive" alt="Denim Jacket"
                                             title="Denim Jacket"
                                             src="https://demo.ishithemes.com/opencart/OPC140/OPC140L01/image/cache/catalog/productsimage/10-535x694.png"/>
                                    </a>

                                    <div class="button-group">
                                        <div class="btn-quickview">
                                            <div class="quickview-button button" data-toggle="tooltip"
                                                 title=" Quick View">
                                                <a class="quickbox"
                                                   href="https://demo.ishithemes.com/opencart/OPC140/OPC140L01/index.php?route=product/quick_view&amp;product_id=42">

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
                                                        <path ></path>
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
                                        <a href="https://demo.ishithemes.com/opencart/OPC140/OPC140L01/index.php?route=product/product&amp;product_id=42">Denim
                                            Jacket</a></h4>
                                    <p class="description">
                                        The 30-inch Apple Cinema HD Display delivers an amazing 2560 x 1600
                                        pixel resolution. Designed sp..</p>
                                    <p class="price">
                                        $122.00
                                        <span class="price-tax">Ex Tax: $100.00</span>
                                    </p>

                                    <div class="btn-cart">
                                        <button type="button" data-toggle="tooltip" title="Add to Cart"
                                                onclick="cart.add('42');">
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
    <script type="text/javascript">
        $('#ishiproductblock-793023252 .owl-carousel').owlCarousel({
            loop: true,
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
                    items: 3
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

