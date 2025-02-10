@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tất cả bài viết
                    <a href="{{ url('/home') }}">back</a>
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">STT</th>
                        <th scope="col">Tiêu đề</th>
                        <th scope="col">Hình ảnh</th>
                        <th scope="col">Mô tả ngắn</th>
                        <th scope="col">Thuộc danh mục</th>
                        <th scope="col">Quản lý</th>

                        </tr>
                    </thead>
                    <tbody>
                        @php 
                        $i = 1;
                        @endphp
                        @foreach($post as $posts)
                        <tr>
                        <th scope="row">{{ $i++ }}</th>
                        <td>{{ $posts->title }}</td>
                        <td><img src="{{ asset('uploads/'.$posts->image) }}"width="100px"></td>
                        <td>{!! $posts->short_desc !!}</td>
                        <td>{{ $posts->category->title }}</td>
                        <td>
                            <form action="{{ route('post.destroy',[$posts->id]) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <input class="btn btn-danger"type="submit"value="Delete">
                            </form>
                            
                            <a class="btn btn-success"href="{{ route('post.show',[$posts->id]) }}">Edit</a>
                        </td>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
