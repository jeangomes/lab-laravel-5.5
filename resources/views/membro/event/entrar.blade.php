@extends('adm.layouts.adm')
@section('title', 'Participar do Evento -'. $event->title. $event->has_vacancy)
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-3">
                <ul class="list-group">
                    <li class="list-group-item">
                        <span class="badge">{{$event->start_date->format('d/m/Y H:i')}}</span>
                        Data Inicial
                    </li>
                    <li class="list-group-item">
                        <span class="badge">{{$event->final_date->format('d/m/Y')}}</span>
                        Data Final
                    </li>
                    <li class="list-group-item">
                        <span class="badge">R$ {{number_format($event->price,2,',','')}}</span>
                        Valor por pessoa
                    </li>
                </ul>
            </div>
            <div class="col-md-3">
                <ul class="list-group">
                    <li class="list-group-item">
                        <span class="badge">{{$event->vacancy}}</span>
                        Capacidade
                    </li>
                    <li class="list-group-item">
                        <span class="badge">{{count($event->participants)}}</span>
                        Vagas reservadas
                    </li>
                    <li class="list-group-item">
                        <span class="badge">{{count($event->participants)}}</span>
                        Vagas pagas
                    </li>
                    <li class="list-group-item">
                        <span class="badge">{{$event->vacancy - count($event->participants)}}</span>
                        Vagas livres
                    </li>
                </ul>
            </div>
        </div>

        @if($event->is_over)
            <h4>Este evento não permite mais inscrições!</h4>
        @endif

        @if(!$event->has_vacancy)
            <h4>Este evento tem {{$event->vacancy}} vagas e está lotado com as seguintes pessoas:</h4>
        @endif

        @includeWhen($event->has_vacancy && !$event->is_over, 'membro.event.form-subscribe')
    </div>
@endsection