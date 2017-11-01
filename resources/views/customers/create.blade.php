@extends('layouts.main')
@section('content')
    {!! Form::open(['route' => 'clientes.store']) !!}
    	@include('customers.partials.form')
    {!! Form::close() !!}
@stop