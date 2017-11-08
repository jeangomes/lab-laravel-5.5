@extends('layouts.app')
@section('content')
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>N.:</th>
                <th>Name</th>
                <th>City/State</th>
                <th>Profissão</th>
                <th>Nascimento</th>
                <th>Nível</th>
                <th>Ações</th>
            </tr>
        </thead>
        @foreach($customers as $customer)
        <tr class="{{$loop->index % 2 ? 'bg-warning':''}}">
            <td>{{$loop->index + 1}}</td>
            <td>{{$customer->name}}</td>
            <td>{{$customer->city}}/{{$customer->state}}</td>
            <td></td>
            <td>{{$customer->birth_date->format('d/m/Y')}} - {{$customer->birth_date->diffForHumans()}}</td>
            <td>-</td>
            <td>
                <a href="{{ route('membros.edit',$customer->id) }}" class="btn btn-default">editar</a>
                <a href="#" class="btn btn-default">excluir</a>
            </td>
        </tr>
        @endforeach
    </table>
@stop