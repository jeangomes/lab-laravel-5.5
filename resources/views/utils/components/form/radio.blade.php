@component('utils.components.form.partials._group')
    @slot('name', $name)
    @slot('label', $label)
    <br>
    @foreach($attributes as $attribute => $value)
        {{ Form::radio($name, $value, null, ['id' => "{$name}[{$loop->iteration}]"]) }}
        {{ Form::label("{$name}[{$loop->iteration}]", $attribute) }}
        <br>
    @endforeach
@endcomponent
