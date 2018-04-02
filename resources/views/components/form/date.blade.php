<div class="col-md-{{$attributes['col'] ?? '6'}} {{isset($attributes['required'])?'required':''}}">
    {{ Form::label($name, isset($attributes['label'])?$attributes['label']:null, ['class' => 'control-label','for'=>$name]) }}
    {{ Form::date($name, $value, array_merge(['id'=>$name,'class' => 'form-control border-input'], $attributes)) }}
</div>