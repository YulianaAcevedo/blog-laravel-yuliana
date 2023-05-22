@extends('layouts.dashboard')

@section('content')
    <h1>Detalles de la Categoría</h1>

    <p>ID: {{ $category->id }}</p>
    <p>Nombre: {{ $category->title }}</p>
    <p>Descripción: {{ $category->slug}}</p>

    <a href="{{ route('categories.index') }}">Volver al listado</a>
@endsection
