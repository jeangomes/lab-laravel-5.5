@component('utils.components.form.partials._group')
    @slot('name', $name)
    @slot('label', $label)
    {{ Form::password($name, bs_form_attr($name, $attributes)) }}
@endcomponent
