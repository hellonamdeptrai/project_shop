@extends('backend.layouts.master')
@section('content-header')
<div class="row">
    <div class="col-md-12">
        <div class="overview-wrap">
            <h2 class="title-1">Cập nhật sản phẩm</h2>
        </div>
    </div>
</div>
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <strong>Cập nhật</strong> điện thoại
            </div>
            <div class="card-body card-block">
                <form action="{{ route('backend.product.store', $product->id) }}" method="post" enctype="multipart/form-data" class="form-horizontal">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}

                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class=" form-control-label">Tên điện thoại</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="text-input" name="name" placeholder="Nhập tên điện thoại" class="form-control" value="{{ $product->name }}">
                            @error('name')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="select" class=" form-control-label">Danh mục điện thoại</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <select name="category_id" id="select" class="form-control">
                                <option>Chọn danh mục</option>
                                @foreach($categories as $category)
                                    <option {{ $category->id == $product->category_id ? 'selected':'' }} value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class=" form-control-label">Thương hiệu điện thoại</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="text-input" name="brand" placeholder="Nhập thương hiệu điện thoại" value="{{ $product->brand }}" class="form-control">
                            @error('brand')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class=" form-control-label">Giá gốc</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="number" id="text-input" name="origin_price" placeholder="Nhập giá gốc" value="{{ $product->origin_price }}" class="form-control">
                            @error('origin_price')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class=" form-control-label">Giá bán</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="number" id="text-input" name="sale_price" placeholder="Nhập giá bán" value="{{ $product->sale_price }}" class="form-control">
                            @error('sale_price')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="file-multiple-input" class=" form-control-label">Hình ảnh điện thoại</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="file" id="file-multiple-input" name="images[]" multiple="" class="form-control-file">
                            @error('images')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="textarea-input" class=" form-control-label">Mô tả điện thoại</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <div id="summernote" name="content">{{ $product->content }}</div>
                            @error('content')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="select" class=" form-control-label">Trạng thái</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <select name="status" id="select" class="form-control">
                                <option>Chọn trạng thái</option>
                                <option {{ $product->status == 1  ? 'selected':'' }} value="1">Đang nhập</option>
                                <option {{ $product->status == 2  ? 'selected':'' }} value="2">Mở bán</option>
                                <option {{ $product->status == 3  ? 'selected':'' }} value="3">Hết hàng</option>
                            </select>
                            @error('status')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-sm">
                            <i class="fa fa-dot-circle-o"></i> Sửa
                        </button>
                        <button type="reset" class="btn btn-danger btn-sm">
                            <i class="fa fa-ban"></i> Xóa
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
