<div class="col-md-{{$attributes['col'] ?? '6'}} {{isset($attributes['required'])?'required':''}}">
    {{ Form::label($name, isset($attributes['label'])?$attributes['label']:null, ['class' => 'control-label','for'=>$name]) }}    
    {{ Form::select($name, $items, $value, array_merge([
                'placeholder' => '-- selecione --',
                'id'=>$name,
                'class' => 'form-control border-input'], $attributes)) }}
</div>