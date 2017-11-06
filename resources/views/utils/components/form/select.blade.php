@component('utils.components.form.partials._group')
    @slot('name', $name)
    @slot('label', $label)
    {{ Form::select($name, $items, $value, bs_form_attr($name, $attributes)) }}
@endcomponent
