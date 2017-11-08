<div class="row">
	<div class="col-md-6">
		{!! Form::label('name','Nome',array('class'=>'control-label')) !!}
		{!! Form::text('name',null,['class'=>'form-control']) !!}
	</div>
	<div class="col-md-6">
		{!! Form::label('city','Cidade',array('class'=>'control-label')) !!}
		{!! Form::text('city',null,['class'=>'form-control']) !!}
	</div>
</div>

<div class="row">
	<div class="col-md-6">
	
	</div>
	<div class="col-md-6">
		{!! Form::label('special_customer','Cliente especial',['class'=>'control-label']) !!}
		{!! Form::checkbox('special_customer',$customer->special_customer?$customer->special_customer:false,['class'=>'control-label']) !!}
	</div>
</div>
<br>
<div class="text-center">
	<button type="submit" class="btn btn-primary">Salvar</button>
</div>
