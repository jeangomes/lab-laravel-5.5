@extends('layouts.app')
@section('title', 'Pedidos - Listar')
@section('content')
<div class="table-responsive">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Pedido</th>
                <th>Valor Total</th>
                <th>Data Pedido</th>
                <th>Ações</th>
            </tr>
        </thead>
        @foreach($purchases as $purchase)
        <tr class="{{$loop->index % 2 ? 'bg-warning':''}}">
            <td>{{$purchase->id}}</td>
            <td>R$ {{number_format($purchase->amount,2,',','')}}</td>  
            <td>{{Carbon\Carbon::parse($purchase->created_at)->format('d/m/Y H:i')}}</td>  
            <td>
                <a href="{{ route('pedido.show',$purchase->id) }}" class="btn btn-default">Visualizar</a>
                <a href="{{ route('pedido.edit',$purchase->id) }}" class="btn btn-default">Editar</a>
                {!! Form::open(['method' => 'DELETE','route' => ['pedido.destroy', $purchase->id],'style'=>'display:inline']) !!}
                <button type="submit" style="display: inline;" class="btn btn-default">Excluir</button>
                {!! Form::close() !!}
            </td>
        </tr>
        @endforeach
    </table>
</div>
@stop