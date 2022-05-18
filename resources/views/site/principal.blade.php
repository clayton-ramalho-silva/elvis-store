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
        <nav class="navbar navbar-expand-sm bg-light navbar-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">MakeMeElvis</a>
            </div>
            <div class="container-fluid">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link active" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('cliente-remover-email') }}">Quero Remover Email</a>
                </li>
                @auth
                <li class="nav-item">
                   <a class="nav-link" href="{{ route('formSendmail') }}">Enviar Promoção</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" href="{{ route('listar-email') }}">Deletar Emails</a>
                 </li>

                @endauth
                @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                </li>

                @endguest
                @auth
                <li class="nav-item">
                    <form action="{{ route('logout') }}" method="post">
                        @csrf

                        <button type="submit" class="btn btn-primary">Sair</button>
                      </form>
                </li>

                @endauth
              </ul>
            </div>
          </nav>
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
