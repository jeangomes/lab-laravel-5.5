@extends('adm.layouts.adm')
@section('title', 'Eventos - Listar')
@section('content')
    <br>
    <div class="pull-left">
        <a class="btn btn-dark" href="{{ route('evento.create') }}">Cadastrar novo evento</a>
    </div>
    <div class="content table-responsive table-full-width">
        <table class="table">
            <thead>
            <tr>
                <th rowspan="2">Título</th>
                <th colspan="4" class="text-center">Vagas</th>
                <th rowspan="2">Fila de<br>Espera</th>
                <th rowspan="2">Valor</th>
                <th rowspan="2">Quando</th>
                <!--            <th rowspan="2">Nível</th>-->
                <th rowspan="2">Ações</th>
            </tr>
            <tr>
                <th>Tot.</th>
                <th>Pré</th>
                <th>Ocu</th>
                <th>Resta</th>
            </tr>
            </thead>
            @foreach($results as $event)
                <tr>
                    <td>{{$event->id}} - {{$event->title}}</td>
                    <td>{{$event->vacancy}}</td>
                    <td>?</td>
                    <td>{{count($event->customers)}}</td>
                    <td>{{$event->vacancy - count($event->customers)}}</td>
                    <td>?</td>
                    <td>R$ {{number_format($event->price,2,',','')}}</td>
                    <td>{{$event->start_date->format('d/m/Y H:i')}}
                        <br>até<br>
                        {{$event->final_date->format('d/m/Y')}}
                    </td>

                    <td>
                        <div class="dropdown">
                            <a href="#" class="btn dropdown-toggle" data-toggle="dropdown">
                                Ação
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu" style="min-width: 140px;">
                                <li><a href="{{ route('evento.show',$event->id) }}" class="btn btn-default">Detalhe</a>
                                </li>
                                <li><a href="{{ route('evento.edit',$event->id) }}" class="btn btn-default">editar</a>
                                </li>
                                <li>
                                    {!! Form::open(['method' => 'DELETE','route' => ['evento.destroy', $event->id],'style'=>'display:inline']) !!}
                                    <button type="submit" class="btn btn-danger btn-block"><span
                                                class="glyphicon glyphicon-trash"></span>Excluir
                                    </button>
                                    {!! Form::close() !!}
                                </li>
                            </ul>
                        </div>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@stop