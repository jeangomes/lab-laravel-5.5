{!! Form::open(['route' => 'inscricao.store','class'=>'']) !!}
{!! Form::hidden('event_id', $event->id) !!}
{!! Form::hidden('participation_id', count($participation)) !!}
@if(!count($participation))
    <div class="form-group">
        <div class="checkbox">
            {!! Form::checkbox('participar', 1,false,['required'=>'true'])!!}
            <label>
                Estou de acordo com o Termo de Responsabilidade, ciente das informações do evento
                e desejo participar!
            </label>
        </div>
    </div>
    <div class="form-group">
        <div class="">
            <button type="submit" class="btn btn-warning">Participar</button>
        </div>
    </div>
@else
    {!! Form::hidden('participar', 1) !!}
    <div class="alert alert-danger">
        <p>Você já está participando, se você não puder comparecer ao evento clique em desistir.</p>
    </div>
@endif
{!! Form::close() !!}