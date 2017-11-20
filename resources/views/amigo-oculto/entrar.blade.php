@extends('layouts.app')
@section('title', 'Participar do Caveira Oculto (Sorteio Dia 27/11)')

@section('content')
    
    {!! Form::open(['route' => 'amigo-oculto.store','class'=>'form-horizontal']) !!}    
        {!! Form::hidden('event_id', 9) !!} 
        {!! Form::hidden('participation_id', $participation_id) !!} 
        @if(is_null($participation_id))
            <div class="form-group">
                <div class="col-sm-10">
                    <div class="checkbox">
                        <label>
                            {!! Form::checkbox('participar', 1,false,['required'=>'true'])!!} 
                            Desejo participar do amigo oculto na festa de fim de ano em Alagoa.
                        </label>                    
                    </div>
                </div>
            </div>
        @endif
        @if($participation_id)
            {!! Form::hidden('participar', 1) !!} 
            <div class="alert alert-danger">
                <p>Você já está participando, caso deseje editar as sugestões informe novamente abaixo.</p>
            </div>
        @endif
        <div class="alert alert-info">
            <p>Opcionalmente indique até 3 itens que gostaria de receber (por prioridade)</p>
        </div>
        @for ($i = 1; $i <= 3; $i++)
            <div class="form-group">
                <div class="col-md-6">
                    {!! Form::label('dica[' . $i . ']',$i.'ª Dica de presente',array('class'=>'control-label')) !!}
                    {!! Form::text('dica[' . $i . ']',null,['class'=>'form-control','maxlength'=>150]) !!}
                </div>
            </div>
        @endfor
        <div class="form-group">
            <div class="col-sm-offset-1 col-sm-10">
                <button type="submit" class="btn btn-warning">Salvar</button>
            </div>
        </div>
    {!! Form::close() !!}
@stop