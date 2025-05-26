@extends('layouts.app')

@section('content')
<div class="container">
<h1 class="mb-4">Lista de Vuelos</h1>

<form method="GET" action="{{ url('/vuelos') }}" class="mb-4">
    <div class="input-group">
        <input type="text" name="buscar" class="form-control" placeholder="Buscar por destino..." value="{{ request('buscar') }}">
        <select name="continente" class="form-select">
    <option value="">Todos los continentes</option>
    <option value="América" {{ request('continente') == 'América' ? 'selected' : '' }}>América</option>
    <option value="Europa" {{ request('continente') == 'Europa' ? 'selected' : '' }}>Europa</option>
    <option value="Asia" {{ request('continente') == 'Asia' ? 'selected' : '' }}>Asia</option>
    <option value="África" {{ request('continente') == 'África' ? 'selected' : '' }}>África</option>
    <option value="Oceanía" {{ request('continente') == 'Oceanía' ? 'selected' : '' }}>Oceanía</option>
</select>

        <button class="btn btn-outline-secondary" type="submit">Buscar</button>
    </div>
</form>

<div class="row">
    @foreach ($vuelos as $vuelo)
    <div class="col-md-4 mb-4">
        <div class="card h-100 d-flex flex-column shadow-sm">
            <img src="{{ asset('images/' . $vuelo->imagen) }}" class="card-img-top" style="height: 200px; object-fit: cover;" alt="{{ $vuelo->destino }}">
            <div class="card-body d-flex flex-column">
                <h5 class="card-title">{{ $vuelo->destino }}</h5>
                <p class="card-text">Aerolínea: {{ $vuelo->aerolinea }}</p>
                <div class="mt-auto">
                    <a href="{{ url('/vuelos/' . $vuelo->id) }}" class="btn btn-primary">Ver más</a>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>


