@extends('site.principal')

@section('conteudo-principal')
<div class="container">
    <p><strong>Private:</strong>For Elmer's use ONLY</p>
    <p>Write and send an email to mailling list members.</p>
</div>

<form action="{{ route('formSendmail') }}" method="post">
@csrf
    <div class="mb-3 mt-3">
        <label for="subject" class="form-label">Subject of email:</label>
        <input type="text" name="subject" class="form-control" id="subject">
    </div>

    <div class="mb-3 mt-3">
        <label for="elvismail">Body of email:</label>
        <textarea name="elvismail" id="elvismail" cols="30" rows="10" class="form-control"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
