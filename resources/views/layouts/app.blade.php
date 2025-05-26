<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Vuelos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="{{ session('tema') === 'oscuro' ? 'bg-dark text-light' : 'bg-white text-dark' }}">

    <nav class="navbar {{ session('tema') === 'oscuro' ? 'navbar-dark bg-dark' : 'navbar-light bg-light' }} mb-4">
        <div class="container d-flex justify-content-between align-items-center">
            <a class="navbar-brand" href="{{ url('/vuelos') }}">🌍 Lista de Vuelos</a>
            <form method="POST" action="{{ url('/tema') }}">
                @csrf
                <button type="submit" class="btn btn-sm {{ session('tema') === 'oscuro' ? 'btn-outline-light' : 'btn-outline-dark' }}">
                    {{ session('tema') === 'oscuro' ? '☀ Modo Claro' : '🌙 Modo Oscuro' }}
                </button>
            </form>
        </div>
    </nav>

    <div class="container mb-5">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

