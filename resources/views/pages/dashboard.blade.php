@extends('base')

@section('mytitle', '| Dashboard')

@section('content')

@include('partials.info_msg')

@include('partials.create')
    <div class="float-right mt-2">
        <button class="btn btn-outline-primary" data-toggle="modal" data-target="#createPostModal">
            <i class="fa fa-plus" aria-hidden="true"></i> Create Post
        </button>
    </div>
    <h1 class="font-weight-light text-white"><i class="fas fa-th-large"></i> Recent Post</h1>
    <div class="container bg-white p-3 rounded dashcon mb-3">
        @foreach($posts as $post)
        @include('partials._post-card')
        @endforeach
    </div>
@endsection