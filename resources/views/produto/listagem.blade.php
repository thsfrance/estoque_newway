@extends('layout.principal')
@section('conteudo')
@if(!empty($produtos->id))
<table class="table table-hover table-striped table-bordered">
    <thead>
        <tr>
            <td>Nome</td>
            <td>Descrição</td>
            <td>Fotos</td>
            <td></td>
        </tr>
    </thead>
    <tbody>
        @foreach($produtos as $p)
        <tr>
            <td>{{$p->nome}}</td>
            <td>{{$p->descricao}}</td>
            <td></td>
            <td></td>
        </tr>
        @endforeach
    </tbody>
</table>
@else
<div class="alert alert-danger">Não há produtos cadastrados!</div>
@endif
@stop