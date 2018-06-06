@extends('adm.layouts.adm')
@section('title', 'Eventos - Cadastrar')
@section('content')
    <div class="content">
        {!! Form::open(['route' => 'evento.store','class'=>'form-horizontal','autocomplete'=>'off']) !!}
        @include('adm.events.partials.form')
        {{ Form::bsSubmit('Salvar') }}
        {!! Form::close() !!}
    </div>
@stop