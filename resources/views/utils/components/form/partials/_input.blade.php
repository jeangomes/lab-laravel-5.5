@component('utils.components.form.partials._group')
    @slot('name', $name)
    @slot('label', $label)
    {{ Form::$type($name, $value, bs_form_attr($name, $attributes)) }}
@endcomponent
