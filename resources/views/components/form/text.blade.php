<div class="col-md-6 {{isset($attributes['required'])?'required':''}}">
    {{ Form::label($name, isset($attributes['label'])?$attributes['label']:null, ['class' => 'control-label','for'=>$name,'autocomplete'=>'off']) }}
    {{ Form::text($name, $value, array_merge(['id'=>$name,'class' => 'form-control border-input'], $attributes)) }}
</div>