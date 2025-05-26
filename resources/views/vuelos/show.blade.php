@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $vuelo->destino }}</h1>
    <img src="{{ asset('images/' . $vuelo->imagen) }}" class="img-fluid mb-4" alt="{{ $vuelo->destino }}">
    <ul class="list-group">
        <li class="list-group-item"><strong>Aerolínea:</strong> {{ $vuelo->aerolinea }}</li>
        <li class="list-group-item"><strong>Duración:</strong> {{ $vuelo->duracion }}</li>
        <li class="list-group-item"><strong>Clase:</strong> {{ $vuelo->clase }}</li>
        <li class="list-group-item"><strong>Precio:</strong> ${{ $vuelo->precio }}</li>
        <li class="list-group-item"><strong>Fecha de salida:</strong> {{ $vuelo->fecha_salida }}</li>
        <li class="list-group-item"><strong>Descripción:</strong> {{ $vuelo->descripcion }}</li>
    </ul>
    <a href="{{ url('/vuelos') }}" class="btn btn-secondary mt-3">← Volver a la lista</a>
</div>
@endsection
