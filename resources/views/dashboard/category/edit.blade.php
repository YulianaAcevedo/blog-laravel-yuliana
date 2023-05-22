@extends('layouts.dashboard')

@section('content')
    <h1>Editar Categoría</h1>

    <form action="{{ route('categories.update', $category) }}" method="POST">
        @csrf
        @method('PUT')
        @include('dashboard.category._form')
        <button type="submit">Actualizar</button>
    </form>
@endsection
