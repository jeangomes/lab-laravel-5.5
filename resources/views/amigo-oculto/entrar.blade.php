@extends('adm.layouts.adm')
@section('content')
    Participar do Caveira Oculto (Sorteio Dia 27/11)
    {!! Form::open(['route' => 'amigo-oculto.store','class'=>'form-horizontal']) !!}    
        {!! Form::hidden('event_id', 9) !!} 
        {!! Form::hidden('participation_id', $participation_id) !!} 
        @if(is_null($participation_id))
            <div class="">
                <div class="">
                    <div class="">
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

        <div class="form-group">
            <div class="col-sm-offset-1 col-sm-10">
                <button type="submit" class="btn btn-warning">Participar</button>
            </div>
        </div>
    {!! Form::close() !!}
@endsection