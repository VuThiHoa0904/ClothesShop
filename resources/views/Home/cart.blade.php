@extends('Home.layout.main')
@section('menu')
    @include('home/layout/menu')
@endsection
@section('banner')
    <div class="breadcrumb-container">
        <h2 class="page-title">Giỏ hàng</h2>
        <ul class="breadcrumb">
            <li><a href="#"><i
                        class="fa fa-home"></i></a></li>
            <li>
                <a href="#">Giỏ hàng</a>
            </li>
        </ul>
    </div>
@endsection
@section('formSearch')
    @include('home/layout/formSearch')
@endsection
@section('css')
    <style>
        #content{
            min-height: 100vh;
        }
    </style>
@endsection
@section('content')
{{--    <div id="content">--}}
{{--        <div class="find-cart">--}}
{{--            <form action="{{route('findOrder')}}" method="get">--}}
{{--                <input style="padding: 5px" name="code"  required type="text" placeholder="Nhập mã đơn hàng...">--}}
{{--                <button type="submit" class="btn btn-success">Tìm</button>--}}
{{--            </form>--}}
{{--        </div>--}}
{{--        <div >--}}
{{--            @include('admin.layout.alert')--}}
{{--            @if(count($cart->items) > 0 )--}}
{{--            <table class="table table-light table-hover">--}}
{{--                <thead class="thead-light">--}}
{{--                    <tr>--}}
{{--                        <th width="5%">STT</th>--}}
{{--                        <th >Tên Sản Phẩm</th>--}}
{{--                        <th width="20%">Hình ảnh</th>--}}
{{--                        <th >Đơn giá(VND - Sale)</th>--}}
{{--                        <th width="15%">Số lượng </th>--}}
{{--                        <th width="15%">Thành tiền(VND)</th>--}}
{{--                        <th width="15%">Action</th>--}}
{{--                    </tr>--}}
{{--                </thead>--}}
{{--                <tbody>--}}
{{--                  @php--}}
{{--                      $stt=1;--}}
{{--                  @endphp--}}
{{--                   @foreach($cart->items  as $item)--}}
{{--                    <tr>--}}
{{--                        <td>{{$stt}}</td>--}}
{{--                        <td>{{$item['name']}}</td>--}}
{{--                        <td><img width="100%" height="" src="{{asset('uploads/product/'.$item['image'])}}" alt=""></td>--}}
{{--                        <td>{{ number_format($item['priceSale']) }}</td>--}}
{{--                        <td>--}}
{{--                            <form action="{{ route('cart.update', $item['id']) }}" method="post">--}}
{{--                                @csrf--}}
{{--                                @method('put')--}}
{{--                                <input type="number" style="width:50%;" value="{{ $item['quantity'] }}" name="quantity" min="1" max="1000">--}}
{{--                                <button type="submit">Sửa</button>--}}
{{--                            </form>--}}

{{--                        </td>--}}
{{--                        <td>{{ number_format($item['priceSale'] * $item['quantity']) }}</td>--}}
{{--                        <td>--}}
{{--                                <a href="{{route('remove',$item['id'])  }}" onclick="confirm('Are you sure ?')"><ion-icon name="trash-outline"></ion-icon></a>--}}
{{--                        </td>--}}
{{--                    </tr>--}}
{{--                    @php--}}
{{--                      $stt++ ;--}}
{{--                  @endphp--}}
{{--                    @endforeach--}}

{{--                </tbody>--}}
{{--                <tfoot>--}}
{{--                    <tr>--}}
{{--                        <th colspan="4">Tổng sản phẩm</th>--}}
{{--                        <th>{{ $cart->total_quantity }}</th>--}}
{{--                    </tr>--}}
{{--                    <tr>--}}
{{--                        <th colspan="5">Thành tiền</th>--}}
{{--                        <th>{{ number_format($cart->total_price) }}</th>--}}
{{--                        <th>--}}
{{--                            <a href="{{route('pay')}}" class="btn btn-success"   >Thanh toán <ion-icon name="logo-paypal"></ion-icon></a> <br>--}}
{{--                            <a href="{{route('clear')}}" onclick="confirm('Bạn có chắc chắn muốn xóa giỏ hàng không ?')"  class="btn btn-danger"   >Xóa giỏ hàng <ion-icon name="close-circle-outline"></ion-icon></a>--}}
{{--                        </th>--}}
{{--                    </tr>--}}
{{--                </tfoot>--}}
{{--            </table>--}}
{{--        </div>--}}
{{--        @else--}}
{{--        <div>Bạn chưa mua sản phẩm nào. Quay lại mua hàng ngay. <a href="{{route('home')}}">Tại đây</a></div>--}}
{{--    @endif--}}
{{--    </div>--}}

    <div id="checkout-cart" class="container">
        <div class="find-cart">
            <form action="{{route('findOrder')}}" method="get">
                <input style="padding: 5px" name="code"  required type="text" placeholder="Nhập mã đơn hàng...">
                <button type="submit" class="btn btn-success">Tìm</button>
            </form>
        </div>
        <div class="wrapper_container row">
            @if(count($cart->items) > 0 )
            <div id="content" class="col-sm-12">

                <form enctype="multipart/form-data">
                    <div class="table-responsive">

                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <td class="text-left">STT</td>
                                <td class="text-center">Ảnh</td>
                                <td class="text-left">Tên sản phẩm</td>
                                <td class="text-left">Số lượng</td>
                                <td class="text-right">Giá sản phẩm</td>
                                <td class="text-right">Tổng tiền</td>
                                <td class="text-right">Action</td>
                            </tr>
                            </thead>
                            <tbody>
                            @php
                                $stt=1;
                            @endphp
                            @foreach($cart->items  as $item)
                            <tr>
                                <td class="text-left">{{$stt}}</td>
                                <td class="text-center"><a href="#">
                                        <img width="30%" height="auto" src="{{asset('uploads/product/'.$item['image'])}}" alt=""></a>
                                </td>
                                <td class="text-left"><a
                                        href="#">{{$item['name']}}</a></td>
                                <td class="text-left">
                                    <form action="{{ route('cart.update', $item['id']) }}" method="post">
                                        @csrf
                                        @method('put')
                                        <input type="number" style="width: 50%;
                                                            display: inline-flex;
                                                            padding: 20px;"
                                               value="{{ $item['quantity'] }}"
                                               name="quantity" min="1" max="1000" class="form-control">
                                        <button type="submit" data-toggle="tooltip" title="Update" class="btn btn-default"><i
                                                class="fa fa-refresh"></i></button>
                                    </form>
                                </td>
                                <td class="text-right unit-price">{{ number_format($item['priceSale']) }} đ</td>
                                <td class="text-right total-price">{{ number_format($item['priceSale'] * $item['quantity']) }} đ</td>
                                <td class="text-right "><a href="{{route('remove',$item['id'])  }}" onclick="confirm('Are you sure ?')"><ion-icon name="trash-outline"></ion-icon></a></td>
                            </tr>
                            </tbody>
                            @php
                                $stt++ ;
                            @endphp
                            @endforeach
                        </table>

                    </div>
                </form>
                <div class="row">
                    <div class="col-md-6">
                        <h2>Tổng:</h2>
{{--                        <p>Bạn còn muốn mua gì.</p>--}}
                    </div>
{{--                    --}}
                    <div class="col-sm-6 sub-total-table">
                        <table class="table table-bordered">
                            <tr>
                                <td class="text-right"><strong>Tổng sản phẩm:</strong></td>
                                <td class="text-right total-amount">{{ $cart->total_quantity }}</td>
                            </tr>
                            <tr>
                                <td class="text-right"><strong>Thành tiền:</strong></td>
                                <td class="text-right total-amount">{{ number_format($cart->total_price) }} đ</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="buttons clearfix">
                    <div class="pull-left"><a
                            href="{{route('home')}}"
                            class="btn btn-default">Tiếp tục mua sắm</a></div>
                    <div class="pull-right"><a
                            href="{{route('pay')}}"
                            class="btn btn-primary">Thanh toán</a></div>
                </div>
            </div>
            @else
                <div>Bạn chưa mua sản phẩm nào. Quay lại mua hàng ngay. <a href="{{route('home')}}">Tại đây</a></div>
            @endif
        </div>
    </div>
@endsection
