@extends('adm.layouts.adm')
@section('title', 'Produtos - Listar')
@section('content')
    <br>
    <div class="pull-right">
        <a class="btn btn-dark" href="{{ route('produto.create') }}">Cadastrar novo produto</a>
    </div>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>N.:</th>
                <th>Name</th>
                <th>Preço</th>
                <th>Ações</th>
            </tr>
        </thead>
        @foreach($results as $product)
        <tr class="{{$loop->index % 2 ? 'bg-warning':''}}">
            <td>{{$product->id}}</td>
            <td>{{$product->name}}</td>
            <td>{{number_format($product->price,2,',','')}}</td>
            <td>
                <a href="{{ route('produto.edit',$product->id) }}" class="btn btn-default">editar</a>
                <a href="#" class="btn btn-default">excluir</a>
            </td>
        </tr>
        @endforeach
    </table>
@stop