@extends('adm.layouts.adm')
@section('content')
    <div class="page-header">
        <h1>{{$evento->title}} - Participantes</h1>
    </div>

    <div class="col-md-3">
        <ul class="list-group">
            <li class="list-group-item">
                <span class="badge">{{$evento->start_date->format('d/m/Y H:i')}}</span>
                Data Inicial
            </li>
            <li class="list-group-item">
                <span class="badge">{{$evento->final_date->format('d/m/Y')}}</span>
                Data Final
            </li>
            <li class="list-group-item">
                <span class="badge">R$ {{number_format($evento->price,2,',','')}}</span>
                Valor por pessoa
            </li>
        </ul>
    </div>
    <div class="col-md-3">
        <ul class="list-group">
            <li class="list-group-item">
                <span class="badge">{{$evento->vacancy}}</span>
                Capacidade
            </li>
            <li class="list-group-item">
                <span class="badge">{{count($evento->customers)}}</span>
                Vagas reservadas
            </li>
            <li class="list-group-item">
                <span class="badge">{{count($evento->customers)}}</span>
                Vagas pagas
            </li>
            <li class="list-group-item">
                <span class="badge">{{$evento->vacancy - count($evento->customers)}}</span>
                Vagas livres
            </li>
        </ul>
    </div>


    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Participante</th>
                <th>Entrada</th>
                <th>Pago</th>
                <th>Documento</th>
            </tr>
            </thead>
            @foreach($evento->customers as $customer)
                <tr>
                    <td>{{$customer->name}}</td>
                    <td>{{$customer->pivot->subscribe_date->format('d/m/Y H:i')}}</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
            @endforeach
        </table>
    </div>
@stop
