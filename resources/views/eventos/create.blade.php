@extends('layouts.app')
@section('content')
    {!! Form::open(['route' => 'eventos.store']) !!}
    	@include('eventos.partials.form')
    {!! Form::close() !!}
@stop