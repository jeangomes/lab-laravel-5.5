@extends('adm.layouts.adm')
@section('title', 'Membros - Listar')
@section('content')
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>N.:</th>
                <th>Nome</th>
                <th>RG</th>
                <th>Nascimento</th>
                <th>Nível</th>
                <th>Ações</th>
            </tr>
            </thead>
            @foreach($results as $result)
                <tr class="{{$loop->index % 2 ? 'bg':''}}">
                    <td>{{$loop->index + 1}}</td>
                    <td>{{$result->id}} - {{$result->name}}</td>
                    <td></td>
                    <td></td>
                    {{--<td>{{$result->birth_date->format('d/m/Y')}} - {{$result->birth_date->diffForHumans()}}</td>--}}
                    <td>-</td>
                    <td>
                        <a hidden href="{{ route('membros.edit',$result->id) }}" class="btn btn-default">editar</a>
                        <a hidden href="#" class="btn btn-default">excluir</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@stop