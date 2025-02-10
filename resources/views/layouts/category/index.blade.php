@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tất cả danh mục bài viết
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
                        <th scope="col">Quản lý</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php 
                        $i = 1;
                        @endphp
                        @foreach($category as $categories)
                        <tr>
                        <th scope="row">{{ $i++ }}</th>
                        <td>{{ $categories->title }}</td>
                        <td>
                            <form action="{{ route('category.destroy',[$categories->id]) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <input class="btn btn-danger"type="submit"value="Delete">
                            </form>
                            
                            <a class="btn btn-success"href="{{ route('category.show',[$categories->id]) }}">Edit</a>
                        </td>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
