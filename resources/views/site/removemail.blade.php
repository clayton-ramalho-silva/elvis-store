@extends('site.principal')

@section('conteudo-principal')
<div class="container">
<h2>Enter an email address to: <strong>remove</strong></h2>


<form action="{{ route('remover-email') }}" method="post">
@csrf
@method('DELETE')

<div class="mb-3 mt-3">
    <label for="email" class="form-label">Email address:</label>
    <input type="text" class="form-control" id="email" name="email" placeholder="Email">
</div>

<button type="submit" class="btn btn-primary">Remove</button>

</form>

</div>
@endsection
