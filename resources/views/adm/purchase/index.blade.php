@extends('layouts.app')
@section('title', 'Pedidos - Listar')
@section('content')
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Pedido</th>
                    <th>Nome</th>
                    <th>Data Pedido</th>
                    <th>Valor Total</th>
                    <th>Ações</th>
                </tr>
            </thead>
            @foreach($purchases as $purchase)
            <tr class="{{$loop->index % 2 ? 'bg-warning':''}}">
                <td>{{$purchase->id}}</td>
                <td>{{$purchase->user->name}}</td>  
                <td>{{Carbon\Carbon::parse($purchase->created_at)->format('d/m/Y H:i')}}</td>  
                <td>R$ {{number_format($purchase->amount,2,',','')}}</td> 
                <td>
                    <a href="{{ route('pedido.show',$purchase->id) }}" class="btn btn-default">Visualizar</a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
@stop