@extends('layouts.app')
@extends('dashboard.master')

@section('content')
@include('dashboard.partials.validation-error')

    
    <form action="{{ route('posts.update',$post->id) }}" method="post">
        @method('PUT')
        @include('dashboard.posts._form')
    </form>
       
      
@endsection
