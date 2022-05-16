@extends('site.principal')

@section('conteudo-principal')
<div class="container">
<h2>Insira seu nome, sobrenome e email para ser adicionado a lista de mail: <strong>Quero Ser Elvis</strong></h2>


<form action="/" method="post">
@csrf
<div class="mb-3 mt-3">
    <label for="first_name" class="form-label">Insira seu primeiro nome:</label>
    <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Primeiro Nome">
</div>

<div class="mb-3 mt-3">
    <label for="last_name" class="form-label">Insira seu segundo nome:</label>
    <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Sobrenome">
</div>

<div class="mb-3 mt-3">
    <label for="email" class="form-label">Insera seu email:</label>
    <input type="text" class="form-control" id="email" name="email" placeholder="Email">
</div>

<button type="submit" class="btn btn-primary">Cadastrar</button>

</form>

</div>
@endsection
