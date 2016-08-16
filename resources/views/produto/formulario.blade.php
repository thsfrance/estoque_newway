@extends('layout.principal')
@section('conteudo')
@foreach($errors->all() as $error)
    {{ $error }}
@endforeach
<form action="/produtos/salva" method="POST">
    <input type='hidden' name='_token' value='{{{csrf_token()}}}'>
    <input type='hidden' name='{{empty($p) ? "" : "id"}}' value='{{empty($p) ? "" : $p->id}}'>
    <div class="form-group">
        <label>Nome:</label>
        <input type="text" class="form-control" name='nome' />
    </div>
    <div class="form-group">
        <label>Descrição:</label>
        <input type="text" class="form-control" name='descricao' />
    </div>
    <div class='form-group'>
        <button class='btn btn-primary form-control' type='submit'>Salvar</button>
    </div>
</form>
@stop