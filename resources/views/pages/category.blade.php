@extends('base')

@section('mytitle', "| ".e($category->category)." Category")

@section('content')
    <h1 class="font-weight-light text-white"><i class="fas fa-th-large"></i> {{$category->category}} Post</h1>
    <div class="container bg-white p-3 rounded dashcon mb-3">
        @if ($postsFromCategory->isEmpty())
            <div class="p-3 rounded"><div class="display-4"><i class="text-danger fal fa-times-circle"></i> NO POST</div></div>
        @endif
        @foreach($postsFromCategory as $post)
        @include('partials._post-card')
        @endforeach
    </div>
@endsection