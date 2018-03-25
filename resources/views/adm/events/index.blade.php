@extends('adm.layouts.adm')
@section('title', 'Eventos - Listar')
@section('content')
    <div class="card">
        <a href="{{ route('evento.create') }}">Cadastrar novo evento</a>
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
                        <td>{{
                     Carbon\Carbon::parse($event->start_date)->format('d/m/Y H:i')
            }} <br>até<br>
                            {{
                     Carbon\Carbon::parse($event->final_date)->format('d/m/Y')
            }}
                        </td>

                        <td>
                            <div class="dropdown">
                                <a href="#" class="btn dropdown-toggle" data-toggle="dropdown">
                                    Ação
                                    <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu" style="min-width: 140px;">
                                    <li><a href="{{ route('evento.show',$event->id) }}">Detalhe</a></li>
                                    <li><a href="#paper">d</a></li>
                                    <li><a href="#paper">s s</a></li>
                                    <li><a href="#paper">d d f</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#paper">c b</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#paper">f f f f</a></li>
                                </ul>
                            </div>
                            {{--                        <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="dropdown-toggle">Opções
                                                        <span class="caret"></span></a>
                                                    <ul role="menu" class="dropdown-menu">
                                                        <li><a href="{{ route('evento.show',$event->id) }}" class="btn btn-default">Detalhe</a></li>
                                                        <li><a href="{{ route('evento.edit',$event->id) }}" class="btn btn-default">editar</a></li>
                                                        <li>
                                                            {!! Form::open(['method' => 'DELETE','route' => ['evento.destroy', $event->id],'style'=>'display:inline']) !!}
                                                            <button type="submit" style="display: inline;" class="btn btn-danger btn-sm"><span
                                                                        class="glyphicon glyphicon-trash"></span></button>
                                                            {!! Form::close() !!}
                                                        </li>
                                                    </ul>--}}
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@stop