@extends('layouts.app')
@section('title', 'Eventos - Listar')
@section('content')
<table class="table table-bordered">
    <thead>
        <tr>
            <th rowspan="2">N.:</th>
            <th rowspan="2">Título</th>
            <th colspan="3" class="text-center">Vagas</th>                
            <th rowspan="2">Valor</th>
            <th rowspan="2">Data Inicial</th>
            <th rowspan="2">Data Final</th>
            <th rowspan="2">Nível</th>
            <th rowspan="2">Ações</th>
        </tr>
        <tr>
            <th>Total</th>
            <th>Ocupadas</th>
            <th>Restantes</th>
        </tr>
    </thead>
    @foreach($eventos as $evento)
    <tr class="{{$loop->index % 2 ? 'bg-warning':''}}">            
        <td>{{$evento->id}}</td>
        <td>{{$evento->title}}</td>
        <td>{{$evento->vacancy}}</td>
        <td>{{count($evento->customers)}}</td>
        <td>{{$evento->vacancy - count($evento->customers)}}</td>
        <td>R$ {{number_format($evento->price,2,',','')}}</td>
        <td>{{
                     Carbon\Carbon::parse($evento->start_date)->format('d/m/Y H:i')
            }}
        </td>
        <td>{{
                     Carbon\Carbon::parse($evento->final_date)->format('d/m/Y')
            }}
        </td>
        <td>Fácil</td>
        <td class="dropdown">
            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="dropdown-toggle">Opções <span class="caret"></span></a> 
            <ul role="menu" class="dropdown-menu">
                <li><a href="{{ route('evento.show',$evento->id) }}" class="btn btn-default">Detalhe</a></li>
                <li><a href="{{ route('clientes.edit',$evento->id) }}" class="btn btn-default">editar</a></li>
                <li>
                    {!! Form::open(['method' => 'DELETE','route' => ['evento.destroy', $evento->id],'style'=>'display:inline']) !!}
                    <button type="submit" style="display: inline;" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></button>
                    {!! Form::close() !!}
                </li>
            </ul>
        </td>
    </tr>
    @endforeach
</table>
<div class="text-center">
    {{$eventos->links()}}
</div>
@stop