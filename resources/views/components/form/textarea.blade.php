<div class="col-md-12 {{isset($attributes['required'])?'required':''}}">
    {{ Form::label($name, isset($attributes['label'])?$attributes['label']:null, ['class' => 'control-label','for'=>$name]) }}
    {{ Form::textarea($name, $value, array_merge(['id'=>$name,'class' => 'form-control border-input','rows'=>3, 'cols'=>30], $attributes)) }}
</div>