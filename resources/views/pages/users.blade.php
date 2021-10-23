@extends('base')

@section('mytitle', "| Authors")

@section('content')
    <h1 class="font-weight-light text-white"><i class="fas fa-users"></i>Authors</h1>
    <div class="bg-white py-2 rounded dashcon mb-3">
        <div class="container d-flex flex-wrap align-items-center">
            @foreach($users as $user)
            @include('partials._user-card')
            @endforeach
        </div>
    </div>
@endsection