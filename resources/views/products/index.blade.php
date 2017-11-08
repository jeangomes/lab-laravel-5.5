@extends('layouts.app')
@section('title', 'Produtos - Listar')
@section('content')
    <div>Mostrando {{($products->currentpage()-1)*$products->perpage()+1}} 
        a {{$products->currentpage()*$products->perpage()}}
        de  {{$products->total()}} registros
    </div>
    <a href="{{ route('produto.create') }}">Incluir novo</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>N.:</th>
                <th>Name</th>
                <th>City/State</th>
                <th>Ações</th>
            </tr>
        </thead>
        @foreach($products as $product)
        <tr class="{{$loop->index % 2 ? 'bg-warning':''}}">
            <td>{{$product->id}}</td>
            <td>{{$product->name}}</td>
            <td>{{$product->price}}}}</td>
            <td>
                <a href="{{ route('produto.edit',$product->id) }}" class="btn btn-default">editar</a>
                <a href="#" class="btn btn-default">excluir</a>
            </td>
        </tr>
        @endforeach
    </table>
    <div class="text-center">
        {{$products->links()}}
    </div>
@stop