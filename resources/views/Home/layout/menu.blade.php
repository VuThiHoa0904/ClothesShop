{{--<div id="menu">--}}
{{--    <nav class="navbar navbar-expand-lg navbar-light bg-light">--}}
{{--        <a class="navbar-brand" href="{{ route('home') }}">HungThinh Shop</a>--}}
{{--        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#my-nav-bar"--}}
{{--                aria-controls="my-nav-bar" aria-expanded="false" aria-label="Toggle navigation">--}}
{{--            <span class="navbar-toggler-icon"></span>--}}
{{--        </button>--}}
{{--        <div class="collapse navbar-collapse" id="my-nav-bar">--}}
{{--            <ul class="navbar-nav">--}}

{{--                <!--Kích hoạt phần tử-->--}}
{{--                <li class="nav-item active">--}}
{{--                    <a class="nav-link" href="{{ route('home') }}">Trang chủ</a>--}}
{{--                </li>--}}


{{--                @foreach ($menus as $menu)--}}
{{--                    @if ($menu->child->contains('parent_id', $menu->id))--}}
{{--                        <li class="nav-item dropdown">--}}
{{--                            <a class="nav-link dropdown-toggle"--}}
{{--                               href="{{ route('category', ['slug' => $menu->categorySlug]) }}" id="mydropdown"--}}
{{--                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                                {{ $menu->categoryName }}--}}
{{--                            </a>--}}

{{--                            <div class="dropdown-menu" aria-labelledby="mydropdown">--}}
{{--                                @foreach ($menu->child as $menuChild)--}}
{{--                                    <a class="dropdown-item"--}}
{{--                                       href="{{ route('category', ['slug' => $menuChild->categorySlug]) }}">--}}
{{--                                        {{ $menuChild->categoryName }}</a>--}}
{{--                                @endforeach--}}
{{--                                @if ($menu->child->count() > 1)--}}
{{--                                    <a class="dropdown-item"--}}
{{--                                       href="{{ route('category', ['slug' => $menu->categorySlug]) }}">--}}
{{--                                        All-{{ $menu->categoryName }} </a>--}}
{{--                                @endif--}}
{{--                            </div>--}}
{{--                        </li>--}}
{{--                    @else--}}
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link" href="{{ route('category', ['slug' => $menu->categorySlug]) }}">--}}
{{--                                {{ $menu->categoryName }}</a>--}}
{{--                        </li>--}}
{{--                    @endif--}}
{{--                @endforeach--}}

{{--                <div class="carts">--}}
{{--                    <a href="{{ route('cart') }}">--}}
{{--                        <ion-icon name="cart-outline"></ion-icon>--}}
{{--                    </a>--}}
{{--                    @if (count($cart->items)>0)--}}
{{--                        <div class="soProduct">--}}
{{--                            <span>{{ count($cart->items)}}</span>--}}
{{--                        </div>--}}
{{--                    @endif--}}
{{--                </div>--}}
{{--            </ul>--}}
{{--            <input type="checkbox" id="bg-menu" class="switch-toggle switch-bg">--}}
{{--            &nbsp; <span id="icon_bg" class="btn btn-outline-dark">--}}
{{--                <ion-icon name='partly-sunny-outline'></ion-icon>--}}
{{--            </span>--}}


{{--    </nav>--}}

{{--</div>--}}

<div class="header-top-height">
    <div class="header-top">
        <div class="container">
            <div class="row">

                <div id="_desktop_top_menu"
                     class="menu js-top-menu hidden-xs hidden-sm col-lg-5 col-md-5 col-sm-12 col-xs-12">

                    <ul id="top-menu" class="top-menu" data-depth="0">
                        @foreach ($menus as $menu)
                            @if ($menu->child->contains('parent_id', $menu->id))
                                <li class="top_level_category dropdown">
                                    <a class="dropdown-item"
                                       href="{{ route('category', ['slug' => $menu->categorySlug]) }}">{{ $menu->categoryName }}</a>
                                    <span class="pull-xs-right hidden-md hidden-lg">
                              <span data-target="#top_sub_menu_6975" data-toggle="collapse"
                                    class="navbar-toggler collapse-icons">
                                <i class="fa fa-angle-down add"></i>
                                <i class="fa fa-angle-up remove"></i>
                              </span>
                            </span>
                                    <div id="top_sub_menu_6975" class="dropdown-menu popover sub-menu collapse">
                                        <ul class="list-unstyled childs_1 category_dropdownmenu  multiple-dropdown-menu "
                                            data-depth="1">

                                            <li class="category dropdown sub-category">
                                                @if ($menu->child->count() > 1)
                                                    <a class="dropdown-item dropdown-submenu"
                                                       href="{{ route('category', ['slug' => $menu->categorySlug]) }}">All-{{ $menu->categoryName }}</a>
                                                    <span class="pull-xs-right hidden-md hidden-lg">
                                            <span data-target="#top_sub_menu_8699" data-toggle="collapse"
                                                  class="navbar-toggler collapse-icons">
                                              <i class="fa fa-angle-down add"></i>
                                              <i class="fa fa-angle-up remove"></i>
                                            </span>
                                        </span>
                                                @endif
                                                @foreach ($menu->child as $menuChild)
                                                    <div id="top_sub_menu_8699" class="dropdown-inner collapse">
                                                        <ul class="list-unstyled childs_2 top-menu" data-depth="2">
                                                            <li class="category">
                                                                <a class="dropdown-item"
                                                                   href="{{ route('category', ['slug' => $menuChild->categorySlug]) }}">
                                                                    {{ $menuChild->categoryName }}</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                @endforeach
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            @else
                                <li class="maintitle"><a
                                        href="{{ route('category', ['slug' => $menu->categorySlug]) }}">{{ $menu->categoryName }}</a>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                    </ul>
                </div>


                <div class="desktop-logo col-lg-2 col-md-2 col-sm-6 col-xs-6" id="_desktop_logo">
                    <div id="logo">
                        <a href="{{ route('home') }}"><img
                                src="https://demo.ishithemes.com/opencart/OPC140/OPC140L01/image/catalog/logo.png"
                                title="Your Store" alt="Your Store" class="img-responsive"/></a>
                    </div>
                </div>

                <div class="desktop-custominfo col-lg-5 col-md-4 col-sm-12 col-xs-12">
                    <div id="_desktop_seach_widget">
                        <div id="ishisearch_widget" class="search-widget dropdown">
                            <div class="searchtext hidden-sm hidden-xs dropdown-toggle" data-toggle="dropdown"
                                 aria-expanded="false">
                                <div class="search-logo">
                                    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                        <symbol id="magnifying-desktop1" viewBox="0 0 1200 1200">
                                            <path d="M606.209,578.714L448.198,423.228C489.576,378.272,515,318.817,515,253.393C514.98,113.439,399.704,0,257.493,0
													               C115.282,0,0.006,113.439,0.006,253.393s115.276,253.393,257.487,253.393c61.445,0,117.801-21.253,162.068-56.586
													               l158.624,156.099c7.729,7.614,20.277,7.614,28.006,0C613.938,598.686,613.938,586.328,606.209,578.714z M257.493,467.8
													               c-120.326,0-217.869-95.993-217.869-214.407S137.167,38.986,257.493,38.986c120.327,0,217.869,95.993,217.869,214.407
													               S377.82,467.8,257.493,467.8z"></path>
                                        </symbol>
                                    </svg>
                                    <svg class="icon" viewBox="0 0 40 40">
                                        <use xlink:href="#magnifying-desktop1" x="20%" y="22%"></use>
                                    </svg>
                                </div>
                                Tìm kiếm
                            </div>
                            <div class="search-logo hidden-lg hidden-md dropdown-toggle" data-toggle="dropdown"
                                 aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                    <symbol id="magnifying-desktop" viewBox="0 0 1200 1200"><title>
                                            magnifying-desktop</title>
                                        <path d="M606.209,578.714L448.198,423.228C489.576,378.272,515,318.817,515,253.393C514.98,113.439,399.704,0,257.493,0
																	C115.282,0,0.006,113.439,0.006,253.393s115.276,253.393,257.487,253.393c61.445,0,117.801-21.253,162.068-56.586
																	l158.624,156.099c7.729,7.614,20.277,7.614,28.006,0C613.938,598.686,613.938,586.328,606.209,578.714z M257.493,467.8
																	c-120.326,0-217.869-95.993-217.869-214.407S137.167,38.986,257.493,38.986c120.327,0,217.869,95.993,217.869,214.407
																	S377.82,467.8,257.493,467.8z"></path>
                                    </symbol>
                                </svg>
                                <svg class="icon" viewBox="0 0 40 40">
                                    <use xlink:href="#magnifying-desktop" x="20%" y="22%"></use>
                                </svg>
                            </div>
                            <form class="dropdown-menu" action="{{route('search')}}">
                                <div id="search" class="input-group">
                                    <input id="ajax-search-text" type="text" name="search" value=""
                                           placeholder="Nhập tên sản phẩm" class="form-control input-lg"/>
                                    <div class="ajaxishi-search" style="display: none;">
                                        <ul></ul>
                                    </div>
                                    <span class="input-group-btn">
                                        <button id="ajax-search-btn" type="button" class="btn btn-default btn-lg" style="top: 8px; right: 25px;">
{{--                                            <a href="{{route('search')}}" class="btn btn-success">--}}
                                                <i class="fa fa-search"></i>
{{--                                            </a>--}}
                                        </button>
                                      </span>
                                </div>
{{--                                <script>--}}
{{--                                    (function () {--}}
{{--                                        document.getElementById('ajax-search-text').addEventListener('keypress', function (event) {--}}
{{--                                            if (event.keyCode == 13) {--}}
{{--                                                event.preventDefault();--}}
{{--                                                document.getElementById('ajax-search-btn').click();--}}
{{--                                            }--}}
{{--                                        });--}}
{{--                                    }());--}}
{{--                                </script>--}}
                            </form>
                        </div>
                    </div>
                    <div id="_desktop_cart">
                        <div class="blockcart">
                            <div id="cart" class="btn-group btn-block dropdown">
                                <button type="button" data-loading-text="Loading..."
                                        class="btn btn-inverse btn-block btn-lg"
                                        >
                                    <span class="cart-link">
                                      <span class="cart-img hidden-sm hidden-xs">
                                          <svg aria-hidden="true" focusable="false" role="presentation" class="icon" viewBox="0 0 700 700">
                                            <svg x="15%" y="17%">
                                                  <path
                                                      d="m150.355469 322.332031c-30.046875 0-54.402344 24.355469-54.402344 54.402344 0 30.042969 24.355469 54.398437 54.402344 54.398437 30.042969 0 54.398437-24.355468 54.398437-54.398437-.03125-30.03125-24.367187-54.371094-54.398437-54.402344zm0 88.800781c-19 0-34.402344-15.402343-34.402344-34.398437 0-19 15.402344-34.402344 34.402344-34.402344 18.996093 0 34.398437 15.402344 34.398437 34.402344 0 18.996094-15.402344 34.398437-34.398437 34.398437zm0 0"></path>
                                                    <path
                                                        d="m446.855469 94.035156h-353.101563l-7.199218-40.300781c-4.4375-24.808594-23.882813-44.214844-48.699219-48.601563l-26.101563-4.597656c-5.441406-.96875-10.632812 2.660156-11.601562 8.097656-.964844 5.441407 2.660156 10.632813 8.101562 11.601563l26.199219 4.597656c16.53125 2.929688 29.472656 15.871094 32.402344 32.402344l35.398437 199.699219c4.179688 23.894531 24.941406 41.324218 49.199219 41.300781h210c22.0625.066406 41.546875-14.375 47.902344-35.5l47-155.800781c.871093-3.039063.320312-6.3125-1.5-8.898438-1.902344-2.503906-4.859375-3.980468-8-4zm-56.601563 162.796875c-3.773437 12.6875-15.464844 21.367188-28.699218 21.300781h-210c-14.566407.039063-27.035157-10.441406-29.5-24.800781l-24.699219-139.398437h336.097656zm0 0"></path>
                                                    <path
                                                        d="m360.355469 322.332031c-30.046875 0-54.402344 24.355469-54.402344 54.402344 0 30.042969 24.355469 54.398437 54.402344 54.398437 30.042969 0 54.398437-24.355468 54.398437-54.398437-.03125-30.03125-24.367187-54.371094-54.398437-54.402344zm0 88.800781c-19 0-34.402344-15.402343-34.402344-34.398437 0-19 15.402344-34.402344 34.402344-34.402344 18.996093 0 34.398437 15.402344 34.398437 34.402344 0 18.996094-15.402344 34.398437-34.398437 34.398437zm0 0"></path>
                                            </svg>
                                          </svg>
                                      </span>
                                      <span class="cart-img hidden-lg hidden-md">
                                          <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                            <symbol id="cart-responsive" viewBox="0 0 510 510"><title>cart-responsive</title>
                                                <path d="M306.4,313.2l-24-223.6c-0.4-3.6-3.6-6.4-7.2-6.4h-44.4V69.6c0-38.4-31.2-69.6-69.6-69.6c-38.4,0-69.6,31.2-69.6,69.6
                                                v13.6H46c-3.6,0-6.8,2.8-7.2,6.4l-24,223.6c-0.4,2,0.4,4,1.6,5.6c1.2,1.6,3.2,2.4,5.2,2.4h278c2,0,4-0.8,5.2-2.4
                                                C306,317.2,306.8,315.2,306.4,313.2z M223.6,123.6c3.6,0,6.4,2.8,6.4,6.4c0,3.6-2.8,6.4-6.4,6.4c-3.6,0-6.4-2.8-6.4-6.4
                                                C217.2,126.4,220,123.6,223.6,123.6z M106,69.6c0-30.4,24.8-55.2,55.2-55.2c30.4,0,55.2,24.8,55.2,55.2v13.6H106V69.6z
                                                 M98.8,123.6c3.6,0,6.4,2.8,6.4,6.4c0,3.6-2.8,6.4-6.4,6.4c-3.6,0-6.4-2.8-6.4-6.4C92.4,126.4,95.2,123.6,98.8,123.6z M30,306.4
                                                L52.4,97.2h39.2v13.2c-8,2.8-13.6,10.4-13.6,19.2c0,11.2,9.2,20.4,20.4,20.4c11.2,0,20.4-9.2,20.4-20.4c0-8.8-5.6-16.4-13.6-19.2
                                                V97.2h110.4v13.2c-8,2.8-13.6,10.4-13.6,19.2c0,11.2,9.2,20.4,20.4,20.4c11.2,0,20.4-9.2,20.4-20.4c0-8.8-5.6-16.4-13.6-19.2V97.2
                                                H270l22.4,209.2H30z"></path>
                                            </symbol>
                                        </svg>
                                        <a href="{{ route('cart') }}"><svg class="icon" viewBox="0 0 40 40"><use xlink:href="#cart-responsive" x="13%" y="13%"></use></svg></a>
                                      </span>
                                      <span class="cart-content">
                                          <a href="{{ route('cart') }}"><span class="cart-name">Giỏ hàng</span></a>
                                           @if (count($cart->items)>0)
                                            <span class="cart-products-count ">{{ count($cart->items)}}</span>
                                           @endif

                                      </span>
                                    </span>
                                </button>
                                <ul class="dropdown-menu cart-dropdown">
                                    <li>
                                        @if (count($cart->items)<=0)
                                            <p class="empty text-left">Giỏ hàng trống!</p>
                                        @else
                                            <p class="empty text-left">Bạn có {{ count($cart->items)}} sản phẩm trong giỏ hàng!</p>
                                        @endif
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="nav-full-height">
    <div class="nav-full-width">
        <div class="container">
            <div class="row">
                <div class="menu-left">
                    <div id="menu-icon" class="menu-icon hidden-md hidden-lg">
                        <div class="nav-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                <symbol id="menu" viewBox="0 0 750 750"><title>menu</title>
                                    <path d="M12.03,84.212h360.909c6.641,0,12.03-5.39,12.03-12.03c0-6.641-5.39-12.03-12.03-12.03H12.03
							              C5.39,60.152,0,65.541,0,72.182C0,78.823,5.39,84.212,12.03,84.212z"></path>
                                    <path d="M372.939,180.455H12.03c-6.641,0-12.03,5.39-12.03,12.03s5.39,12.03,12.03,12.03h360.909c6.641,0,12.03-5.39,12.03-12.03
							                  S379.58,180.455,372.939,180.455z"></path>
                                    <path d="M372.939,300.758H12.03c-6.641,0-12.03,5.39-12.03,12.03c0,6.641,5.39,12.03,12.03,12.03h360.909
							              c6.641,0,12.03-5.39,12.03-12.03C384.97,306.147,379.58,300.758,372.939,300.758z"></path>
                                </symbol>
                            </svg>
                            <svg class="icon" viewBox="0 0 30 30">
                                <use xlink:href="#menu" x="22%" y="25%"></use>
                            </svg>
                        </div>
                    </div>
                    <div id="_mobile_seach_widget"></div>
                </div>
                <div class="menu-center">
                    <div id="_mobile_logo"></div>
                </div>
                <div class="menu-right">
                    <div id="_mobile_user_info"></div>
                    <div id="_mobile_cart"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="nav-full-height">
    <div class="nav-full-width">
        <div class="container">
            <div class="row">
                <div class="menu-left">
                    <div id="menu-icon" class="menu-icon hidden-md hidden-lg">
                        <div class="nav-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                <symbol id="menu" viewBox="0 0 750 750"><title>menu</title>
                                    <path d="M12.03,84.212h360.909c6.641,0,12.03-5.39,12.03-12.03c0-6.641-5.39-12.03-12.03-12.03H12.03
							              C5.39,60.152,0,65.541,0,72.182C0,78.823,5.39,84.212,12.03,84.212z"></path>
                                    <path d="M372.939,180.455H12.03c-6.641,0-12.03,5.39-12.03,12.03s5.39,12.03,12.03,12.03h360.909c6.641,0,12.03-5.39,12.03-12.03
							                  S379.58,180.455,372.939,180.455z"></path>
                                    <path d="M372.939,300.758H12.03c-6.641,0-12.03,5.39-12.03,12.03c0,6.641,5.39,12.03,12.03,12.03h360.909
							              c6.641,0,12.03-5.39,12.03-12.03C384.97,306.147,379.58,300.758,372.939,300.758z"></path>
                                </symbol>
                            </svg>
                            <svg class="icon" viewBox="0 0 30 30">
                                <use xlink:href="#menu" x="22%" y="25%"></use>
                            </svg>
                        </div>
                    </div>
                    <div id="_mobile_seach_widget"></div>
                </div>
                <div class="menu-center">
                    <div id="_mobile_logo"></div>
                </div>
                <div class="menu-right">
                    <div id="_mobile_user_info"></div>
                    <div id="_mobile_cart"></div>
                </div>
            </div>
        </div>
    </div>
</div>
</header>

<div id="mobile_top_menu_wrapper" class="hidden-lg hidden-md" style="display:none;">
    <div id="top_menu_closer">
        <i class="fa fa-close"></i>
    </div>
    <div class="js-top-menu mobile" id="_mobile_top_menu"></div>
</div>
{{--<div id="spin-wrapper"></div>--}}
{{--<div id="siteloader">--}}
{{--    <div class="loader loader-1"></div>--}}
{{--</div>--}}
