@extends('layouts.app')
@section('content')
    <div class="page-header">
        <h1>{{$evento->title}} - Participantes</h1>
    </div>    
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
            <td>{{$customer->pivot->subscribe_date}}</td>
            <td>-</td>
            <td>-</td>
        </tr>
        @endforeach        
    </table>
@stop