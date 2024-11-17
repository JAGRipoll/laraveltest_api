<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
</head>
<body>
    {{-- <header>
        <h1>Formulario de Post</h1>
    </header> --}}

    {{-- Haciendo uso de sesiones --}}
    @session('key')
        <h1>{{ $value }}</h1>
    @endsession

    {{-- Haciendo con un if --}}
    @if (session('status'))
        {{ session('status') }}
        
    @endif
    
    @yield('content')

    <section>
        @yield('morecontent')
    </section>
    
    <footer>
        <h5>Footer de prueba</h5>
    </footer>
</body>
</html>