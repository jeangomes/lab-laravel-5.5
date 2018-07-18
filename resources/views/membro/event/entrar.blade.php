@extends('adm.layouts.adm')
@section('content')
    <div class="page-header">
        <h1>Participar do Evento - {{$event->title}} {{$event->has_vacancy}}</h1>
    </div>
    @if(!$event->has_vacancy)
        <h4>Este evento tem {{$event->vacancy}} vagas e está lotado com as seguintes pessoas:</h4>
    @endif
    {!! Form::open(['route' => 'inscricao.store','class'=>'form-horizontal']) !!}
    {!! Form::hidden('event_id', $event->id) !!}
    {!! Form::hidden('participation_id', $participation_id) !!}
    @if(is_null($participation_id))
        <label>
            {!! Form::checkbox('participar', 1,false,['required'=>'true'])!!}
            Desejo participar do evento <strong>{{$event->title}}</strong>
        </label>
    @endif
    @if($participation_id)
        {!! Form::hidden('participar', 1) !!}
        <div class="alert alert-danger">
            <p>Você já está participando, se você não puder comparecer ao evento clique em desistir.</p>
        </div>
    @endif

    <div class="form-group">
        <div class="col-sm-offset-1 col-sm-10">
            <button type="submit" class="btn btn-warning">Participar</button>
        </div>
    </div>
    {!! Form::close() !!}
@endsection