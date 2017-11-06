<div class="form-group{{ $errors->has(nested_input($name)) ? ' has-error' : '' }}">
    @if($label)
        {{ Form::label($name, $label, ['class' => 'control-label']) }}        
    @endif
    {{ $slot }}
    
    @if ($errors->has(nested_input($name)))
        <span class="help-block">
            <strong>{{ $errors->first(nested_input($name)) }}</strong>
        </span>
    @endif
</div>
