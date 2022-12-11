<!DOCTYPE html>
<html lang="en">
<head>
    @include('Home/layout/head')
</head>
<body class="home">
<main>
    <div id="menu_wrapper"></div>
    <header id="header" class="home">
    @include('home/layout/top-header')
    @yield('menu')
    </header>
    <div id="mobile_top_menu_wrapper" class="hidden-lg hidden-md" style="display:none;">
        <div id="top_menu_closer">
            <i class="fa fa-close"></i>
        </div>
        <div class="js-top-menu mobile" id="_mobile_top_menu"></div>
    </div>
    <div id="spin-wrapper"></div>
    <div id="siteloader">
        <div class="loader loader-1"></div>
    </div>

    <!-- ======= Quick view JS ========= -->
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
    <div id="common-home">
         @yield('banner')
{{--        <div id="header">--}}
{{--            @yield('formSearch')--}}
{{--        </div>--}}
{{--        <hr>--}}
{{--        <hr>--}}
        <section id="ishiproductblock-793023252" class="ishiproductsblock container">
            <div class="row" style="display: block;">
            @yield('content')
            </div>
        </section>
        <footer>
            @include('home/layout/footer')
        </footer>
    </div>
</main>
</body>
</html>
