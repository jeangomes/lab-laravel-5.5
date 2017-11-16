@extends('layouts.app')
@section('title', "Pedido #$purchased->id  - Detalhe")
@section('content')
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
                    <td>R$ {{number_format($p->price,2,',','')}}</td>
                    <td>{{$p->pivot->qtd}}</td>
                    <td>R$ {{number_format($p->pivot->total_price,2,',','')}}</td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr class="text-right">
                <td colspan="4">Valor total: R$ {{number_format($purchased->amount,2,',','')}}</td>
            </tr>
        </tfoot>
    </table>
@stop