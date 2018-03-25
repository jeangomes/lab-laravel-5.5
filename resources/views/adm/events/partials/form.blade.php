<div class="form-group">
    {{ Form::bsText('title',null,['required'=>true,'label'=>'Título']) }}
</div>
<div class="form-group">
    {{ Form::bsText('vacancy',null,['required'=>true]) }}
</div>
<div class="form-group">
    {{ Form::bsText('price',null,['required'=>true]) }}
</div>
<div class="form-group">
    {{ Form::bsDate('start_date',null,['required'=>true,'col'=>4]) }}
    {{ Form::bsDate('final_date',null,['required'=>true,'col'=>4]) }}
</div>

<div class="form-group">
    {{ Form::bsTextarea('description',null,['required'=>true]) }}
</div>

<div class="form-group">
    {{ Form::bsText('meeting_point',null,['required'=>true]) }}
</div>

<div class="form-group">
    {{ Form::bsTextarea('meeting_point_map',null,['required'=>true]) }}
</div>
<div class="form-group">
    {{ Form::bsTextarea('equipment',null) }}
</div>
<div class="form-group">
    {{ Form::bsTextarea('food',null) }}
</div>
<div class="form-group">
    {{ Form::bsTextarea('what_is_included',null) }}
</div>
<div class="form-group">
    {{ Form::bsTextarea('what_is_not_included',null) }}
</div>
<div class="form-group">
    {{ Form::bsSelect('level',['L' => 'Large', 'S' => 'Small'],null,['label'=>'Classificação/Esforço']) }}
</div>
<div class="form-group">
    {{ Form::iCheckRadio('status','Status',['Ativa'=>1,'Inativa'=>0]) }}
</div>

