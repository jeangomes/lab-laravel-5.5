@extends('layouts.app')

@section('content')
    <div class="page-header">
        <h1>Pedido #{{$purchased->id}} - Detalhe</h1>
    </div>
    <table class="table table-bordered">
        <tr>
            <th>Nome: {{$purchased->user->name}}</th>
        </tr>
            <tr>
            <th>Data encomenda: {{Carbon\Carbon::parse($purchased->created_at)->format('d/m/Y H:i')}}</th>
        </tr>
    </table>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Produto</th>
                <th>Valor</th>
                <th>Qtd</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            @foreach($purchased->products as $p)
                <tr>
                    <td>{{$p->name}}</td>
                    <td>R$ {{$p->price}}</td>
                    <td>{{$p->pivot->qtd}}</td>
                    <td>R$ </td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr class="text-right">
                <td colspan="4">Valor total: R$ 1.667,50</td>
            </tr>
        </tfoot>
    </table>
@stop