@extends('admin.layout.main')
@section('css')
<link rel="stylesheet" href="{{asset('assets\css\checkbox\checkbox-toggle.css')}}">
<link rel="stylesheet" href="{{asset('assets\plugins\summernote\summernote-bs4.min.css')}}">
<link rel="stylesheet" href="{{asset('assets\js\admin\select2\select2.min.css')}}" />
@endsection
@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{route('product.index')}}">Products</a></li>
    <li class="breadcrumb-item active">Add  Product</li>
@endsection
@section('js')
@endsection

@section('content')
    @include('admin.layout.alert')
    <form action="{{ route('product.update',$product->id) }}" method="post" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="formAdd row justify-content-center ">
            <div class="col-md-9 col-lg-9 col-12">
                <div class="form-group">
                    <label for="name">Tên Sản phẩm</label>
                    <input type="hidden" value="{{$product->id}}" name="id">
                    <input type="text" name="name" id="id" value="{{$product->productName}}"class="form-control" placeholder="Nhập tên danh mục">
                    @error('name')
                        <div class="help-block">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="category">Danh mục</label>
                    <select name="category[]" id="category" class="form-control select2-cate" multiple>
                        {!!$html!!}
                    </select>
                    @error('categorys')
                    <div class="help-block">{{ $message }}</div>
                @enderror
                </div>

                <div class="form-group">
                    <label for="description">Mô tả sản phẩm</label>
                    <textarea name="description"  class="form-control" id="description" cols="30" rows="10">{!!$product->description!!}</textarea>
                    @error('description')
                        <div class="help-block">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="tag">Thẻ Tag</label>
                    <select class="form-control select2-tag"  name="tag[]" multiple>
                    </select>
                    @error('tag')
                        <div class="help-block">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="image">Ảnh</label>
                    <input type="file" name="image" id="image" class="form-control-flie" placeholder="">
                    <img src="{{asset('upload/product/'.$product->image)}}" alt="">
                    @error('image')
                        <div class="help-block">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="imageList">List Ảnh</label>
                    <input type="file" name="imageList[]" multiple id="imageList" class="form-control-flie" placeholder="">
                    @error('tag')
                        <div class="help-block">{{ $message }}</div>
                    @enderror
                </div>

            </div>


            <div class="col-md-3 col-lg-3 col-12">
                <div class="form-group">
                    <label for="price">Giá sản phẩm</label>
                    <input type="number" name="price" value={{$product->price}} id="id" class="form-control" placeholder="Nhập tên giá sản phẩm (VNĐ)">
                    @error('price')
                        <div class="help-block">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="sale">Giá sale</label>
                    <input type="number" name="sale" value="{{$product->sale}}" min="1" max="100" id="sale" class="form-control" placeholder="%">
                    @error('sale')
                        <div class="help-block">{{ $message }}</div>
                    @enderror
                </div>
                <div id="wapper" class="form-group">
                    Hiển thị : &emsp; <input type="checkbox" value="1" name="status" {{$product->status==1?"checked":""}} class='switch-toggle'>
                    </td>
                </div>

                <div id="wapper" class="form-group">
                    Còn hàng :  &emsp; <input type="checkbox" value="1" name="active" {{$product->active==1?"checked":""}} class='switch-toggle'>
                    </td>
                </div>
                <div id="wapper" class="form-group">
                    Sản phẩm hot :  &emsp; <input type="checkbox" value="1" name="hot" {{$product->hot==1?"checked":""}} class='switch-toggle'>
                    </td>
                    <?php var_dump($product->hot);?>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary btn-lg" style="margin: 20px">Lưu</button>
    </form>
@endsection
@section('jquery')
<script src="{{asset('assets\plugins\summernote\summernote-bs4.min.js')}}"></script>
<script src="{{asset('assets\js\admin\summernot.js')}}">  </script>
<script src="{{asset('assets\js\admin\select2\select2.min.js')}}"></script>
<script src="{{asset('assets\js\admin\select2\product_js.js')}}"></script>
@endsection
