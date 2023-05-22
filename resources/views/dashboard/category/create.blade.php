@extends('layouts.app')

@section('content')
    <h1>Añadir Categoría</h1>

    <form action="{{ route('category.store') }}" method="POST">
        @csrf
        @include('dashboard.category._form')
        <button type="submit">Guardar</button>
    </form>
@endsection
