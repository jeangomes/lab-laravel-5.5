<div class="form-group">
    {{ Form::bsText('title',null,['required'=>true,'label'=>'Título']) }}
</div>
<div class="form-group">
    {{ Form::file('photo',['required'=>true,'label'=>'Título']) }}
</div>
<div class="form-group">
    {{ Form::bsNumber('vacancy',null,['required'=>true,'label'=>'Qtd de Vagas']) }}
</div>
<div class="form-group">
    {{ Form::bsText('price',null,['required'=>true,'label'=>'Valor Total']) }}
</div>
<div class="form-group">
    {{ Form::bsDate('start_date',null,['required'=>true,'col'=>4,'label'=>'Data Inicial']) }}
    {{ Form::bsDate('final_date',null,['required'=>true,'col'=>4,'label'=>'Data Final']) }}
</div>

<div class="form-group">
    {{ Form::bsTextarea('description',null,['required'=>true,'label'=>'Descrição']) }}
</div>

<div class="form-group">
    {{ Form::bsDate('payment_deadline',null,['required'=>true,'col'=>4,'label'=>'Prazo de Pagamento']) }}
</div>

<div class="form-group">
    {{ Form::bsText('meeting_point','Posto Shell próximo a Rodoviária Novo Rio',['required'=>true,'label'=>'Ponto de Encontro']) }}
</div>

<div class="form-group">
    {{ Form::bsTextarea('meeting_point_map',null,['required'=>true,'label'=>'Mapa do Ponto de Encontro']) }}
</div>
<div class="form-group">
    {{ Form::bsTextarea('equipment',null,['label'=>'Equipamentos']) }}
</div>
<div class="form-group">
    {{ Form::bsTextarea('food',null,['label'=>'Alimentação']) }}
</div>
<div class="form-group">
    {{ Form::bsTextarea('what_is_included',null,['label'=>'Está incluso']) }}
</div>
<div class="form-group">
    {{ Form::bsTextarea('what_is_not_included',null,['label'=>'Não está incluso']) }}
</div>
<div class="form-group">
    {{ Form::bsSelect('level',['L' => 'Leve', 'M' => 'Moderado','D'=>'Difícil'],null,['label'=>'Classificação/Esforço']) }}
</div>
<div class="form-group">
    {{ Form::iCheckRadio('status','Status',['Ativo'=>1,'Inativo'=>0]) }}
</div>

