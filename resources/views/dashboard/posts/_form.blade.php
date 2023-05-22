@extends('layouts.app')
@extends('dashboard.master')
@csrf
@section('content')
<div class="form-group">
    <label for="title">Título</label>
    <input class="form-control" type="text" name="title" id="title"
    value="{{ old('title'), $post->title   }}">
</div>

<div class="form-group">
    <label for="slug">Slug</label>
    <input class="form-control" type="text" name="slug" id="slug"
    
    value="{{ old('slug'), $post->slug  }}">
</div>

<div class="form-group">
    <label for="content">Contenido</label>
    <textarea class="form-control"   id="content" name="content" rows="3">
    
    {{ old('content'), $post->content  }}"
    </textarea>
</div>

<input type="submit" value="Enviar" Class="btn btn-primary">


    
   

           

</div>
@endsection
