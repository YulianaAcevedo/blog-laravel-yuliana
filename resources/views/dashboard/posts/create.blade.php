
@extends('dashboard.master')
@extends('layouts.app')

@section('content')
<div class="container">
    
    <form action="{{ route('posts.index') }}" method="post">
        @csrf
        <div class="row">
            <div class="form group">
                <label for="name">Articulo</label><input class="form-control" type="text" name="name" id="name">
            </div>
        </div>
        <div class="row form group">
            <label for="description">Contenido</label><textarea class="form-control"  name="description" id="description" rows="10"></textarea>
            </div>

            <div class="row center">
                <div class="col s6">
                    <button class="btn btn-success btn-sm" type="submit">Publicar</button>
                    <button class="btn btn-danger btn-sm">Cancelar</button>
                </div>
            </div>
    </form>


</div>
@endsection
