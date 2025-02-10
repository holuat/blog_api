@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Cập nhật bài viết
                    <a href="{{ url('/home') }}">back</a>
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
                <form autocomplete="off" method="POST" action="{{ route('post.update',[$post->id]) }}"enctype="multipart/form-data">
                    @method('PUT')
                    <div class="form-group">
                        <label for="title">Tiêu đề bài viết</label>
                        <input type="text" value="{{ $post->title }}"class="form-control mb-3"name="title">
                        <label for="title">Hình ảnh</label>
                        <input type="file" class="form-control mb-3"name="image">
                        <p><img width="200px"src="{{ asset('./uploads/'.$post->image)}}"></p>
                        <label for="title">Mô tả ngắn</label>
                        <textarea name="short_desc"id="ckeditor_shortdesc"class="form-control mb-3">{{ $post->short_desc }}</textarea>
                        <label for="title">Nội dung bài viết</label>
                        <textarea name="desc"id="ckeditor_desc"placeholder="Nội dung bài viết"class="form-control">{{ $post->desc }}</textarea>
                        <label for="title">Thuộc danh mục bài viết</label>
                        <select name="post_category_id"class="form-control">
                            @foreach($category as $key => $cate)
                            <option {{ $cate->id == $post->post_category_id ? 'selected': '' }} value="{{ $cate->id }}">
                                {{ $cate->title }}
                            </option>
                            @endforeach
                        </select>
                        <input type="submit" name="capnhatbaiviet"class="btn btn-primary mt-2"value="Cập nhật bài viết">
                    </div>
                </form>
                
            </div>
        </div>
    </div>
</div>
@endsection
