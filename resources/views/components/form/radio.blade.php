<div class="col-md-10">
    @if($label)
        {{ Form::label($name, $label, ['class' => 'control-label']) }}        
    @endif
    <br>
    @foreach($attributes as $attribute => $value)        
            <label class="radio-inline">
                {{ Form::radio($name, $value, null, ['id' => "{$name}[{$loop->iteration}]"]) }}   
                {{$attribute}}                
            </label>        
    @endforeach
</div>