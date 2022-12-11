@extends('Home.layout.main')
@section('menu')
    @include('home/layout/menu')
@endsection
@section('banner')
    <div class="breadcrumb-container">
        <h2 class="page-title">{{$cateName->categoryName}}</h2>
        <ul class="breadcrumb">
            <li><a href="#"><i
                        class="fa fa-home"></i></a></li>
            <li>
                <a href="#">{{$cateName->categoryName}}</a>
            </li>
        </ul>
    </div>
@endsection
@section('formSearch')
    @include('home/layout/formSearch')
@endsection
@section('css')
<link rel="stylesheet" href="{{asset('assets\css\home\page-search.css')}}">
<link rel="stylesheet" href="{{ asset('assets\css\home\detail.css') }}">
@endsection
@section('content')
{{--    <div class="row">--}}
{{--        <div class="col-md-3 col-lg-3 col-12 searchLeft">--}}
{{--            <form action="{{route('search')}}" method="post">--}}
{{--                @csrf @method('get')--}}
{{--                <div class="form-group">--}}
{{--                    <input type="text" name="search" class="form-control" value="{{request()->search ? request()->search : ""}}" placeholder="Nhập tên sản phẩm">--}}
{{--                </div>--}}

{{--                <div class="form-group">--}}
{{--                    <select name="id" id="id" class="form-control">--}}
{{--                        <option value="0" name="search" selected>Chọn Danh mục </option>--}}
{{--                        {!!$html!!}--}}
{{--                    </select>--}}
{{--                </div>--}}
{{--                <div class="form-group">--}}
{{--                    <input type="text" class="form-control" name="min" value="{{request()->min ? request()->min : ""}}" placeholder="Giá từ (mặc định là 0 VND)">--}}
{{--                    <input type="text" class="form-control" name="max" value="{{request()->max ? request()->max : ""}}" placeholder="Đến">--}}
{{--                </div>--}}
{{--                <button type="submit" class="btn btn-primary">Tìm</button>--}}
{{--            </form>--}}
{{--        </div>--}}
{{--        <div class="col-md-9 col-lg-9 col-12 searchRight">--}}
{{--            <x-title-product :title="$cateName->categoryName" />--}}
{{--            <hr>--}}
{{--            <x-product :products="$products" />--}}
{{--            <hr>--}}
{{--            <div>--}}
{{--                {{ $products->appends(request()->all())->links() }}--}}
{{--            </div>--}}
{{--        </div>--}}

{{--    </div>--}}

<div id="product-category" class="container">
    <div class="row" style="display: contents;">
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
                <div class="products">
                    <div class="category_banner">
                        <div class="row">
                            <div class="col-sm-12 category-title">{{$cateName->categoryName}}</div>
                        </div>
                    </div>

                    <div class="refine-search">
                        <div class="row">
                            <div class="col-sm-12 category-list">
                                <ul class="row">
                                    @foreach ($products as $product)
                                    <li class="item col-md-3 col-sm-3 col-xs-4">
                                        <a href="{{ route('detail', ['slug' => $product->productSlug]) }}">
                                            <img src="{{ asset('uploads/product/'.$product->image) }}"/>
                                            <span class="subcategory-title">{{ $product->productName }}</span><br>
                                            <span class="subcategory-title" style="margin-top: -15px;"><b>{{ number_format($product->price) }}đ</b></span>
                                        </a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
                @if ($products->count()==0)
                <p class="alert alert-info">Sản phẩm đã hết hàng.</p>
                @else
                <div class="buttons">
                    <div class="pull-right"><a
                            href="#"
                            class="btn btn-primary">Tiếp</a></div>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
<div id="_mobile_column_left" class="container"></div>
<div id="_mobile_column_right" class="container"></div>
@endsection
