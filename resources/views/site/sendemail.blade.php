@extends('site.principal')

@section('conteudo-principal')
<div class="container">
    <p><strong>Private:</strong>For Elmer's use ONLY</p>
    <p>Write and send an email to mailling list members.</p>
</div>


@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('formSendmail') }}" method="post">
@csrf
    <div class="mb-3 mt-3">
        <label for="subject" class="form-label">Subject of email:</label>
        <input type="text" name="subject" class="form-control" id="subject" value="{{ old('subject') }}">
    </div>

    <div class="mb-3 mt-3">
        <label for="elvismail">Body of email:</label>
        <textarea name="elvismail" id="elvismail" cols="30" rows="10" class="form-control">{{ old('elvismail') }}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
