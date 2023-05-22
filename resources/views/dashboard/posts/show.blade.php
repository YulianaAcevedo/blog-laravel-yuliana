@extends('layouts.app')
@extends('dashboard.master')

@section('content')
<div class="form-group">
    <label for="title">Titulo</label>
    <input readonly class="form-control" type="text" name="title" id="title" value="{{ $post->title }}">
    </div>

    <div class="form-group">
        <label for="slug">Url limpia</label>
        <input readonly class="form-control" type="text" name="slug" id="slug" value="{{ $post->slug}}">
        </div>

       

        <div class="form-group">
            <label for="content">Contenido</label>
            <textarea readonly class="form-control" type="text" name="Content" id="Content" value="{{ $post->content}}"</textarea>
            </div>


@endsection
