@extends('site.principal')

@section('conteudo-principal')
<div class="container">
    <div class="row">
        <h2>Please select the adresses to delete from the email list and click <strong>Remove</strong></h2>

    </div>

    <div class="row">
        <h3>Customer(s) removed.</h3>
        <form action="{{ route('deletar-email') }}" method="post">
            @csrf

            @foreach ($users as $user)
                <div class="form-check">
                    <input type="checkbox" id="check1" name="todelete[]" value="{{ $user->id }}" class="form-check-input">
                    <label class="form-check-label">{{ $user->first_name}} {{$user->last_name}}: {{ $user->email }}</label>
                </div>
            @endforeach

            <button class="btn btn-primary mt-3">Remover</button>
        </form>
    </div>
</div>
@endsection
