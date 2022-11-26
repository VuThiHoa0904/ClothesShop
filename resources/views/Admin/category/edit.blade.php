@extends('admin.layout.main')
@section('css')
    <link rel="stylesheet" href="{{asset('assets\css\checkbox\checkbox-toggle.css')}}">
@endsection
@section('breadcrumb')
<li class="breadcrumb-item"><a href="{{route('category.index')}}">Category</a></li>
<li class="breadcrumb-item active">Edit Category</li>
@endsection
@section('js')
@endsection

@section('content')
    @include('admin.layout.alert')
    <div class="formAdd row justify-content-center " >
       <div class="col-8 ">
        <form action="{{route('category.update',$category->id)}}" method="post" enctype="multipart/form-data">
            @method('Put')
            @csrf
            <input type="hidden" name="id" value="{{$category->id}}">
            <div class="form-group">
                <label for="name">Tên danh mục</label>
                <input type="text" name="name" id="id" class="form-control" value="{{$category->categoryName}}"  placeholder="Nhập tên danh mục">
                @error('name')
                   <small class="help-block">{{$message}}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="parentId">Danh mục Cha</label>
                <select name="parent_id" id="parent_id" class="form-control">
                    <option value="0">---Chọn danh mục cha---</option>
                    {!!$html!!}
                </select>
            </div>
            <div class="form-group">
                <label for="prioty">Vị trí</label>
                <input type="number" value="{{$category->prioty}}" class="form-control"  name="prioty" ></td>
            </div>
            <div class="form-group">
                <label for="image">Ảnh</label>
                <input type="file" name="image" id="image" class="form-control-flie" placeholder="">
                <img src="{{asset('upload/category/'.$category->image)}}" alt="">
                @error('image')
                <div class="help-block">{{ $message }}</div>
                @enderror
            </div>
            <div id="wapper" class="form-group">
                Hiển thị : &emsp; <input type="checkbox" value="1" name="status"  {{$category->status==1?"checked":""}} class='switch-toggle'></td>
            </div>
            <button type="submit">Sửa danh mục</button>
        </form>
       </div>
    </div>
@endsection
