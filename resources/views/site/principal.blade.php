<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Adicione seu email</title>

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    {{-- Topo --}}
<div class="container">
    <header>
        <h1>MAKEMEELVIS.COM</h1>
    </header>
</div>
    {{-- Conteudo Principal --}}
<div class="container">
    @if(session('msg'))
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        <p class="msg">{{ session('msg') }}</p>
    </div>
    @endif
    @yield('conteudo-principal')
</div>
</body>
</html>
