<?php

namespace App\Providers;
use Form;
use Illuminate\Support\ServiceProvider;

class FormServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        Form::component('bsText', 'utils.components.form.text', ['name', 'label' => null, 'value' => null, 'attributes' => []]);
        Form::component('bsTextarea', 'utils.components.form.textarea', ['name', 'label' => null, 'value' => null, 'attributes' => []]);
        Form::component('bsEmail', 'utils.components.form.email', ['name', 'label' => null, 'value' => null, 'attributes' => []]);        
        Form::component('bsPassword', 'utils.components.form.password', ['name', 'label' => null, 'attributes' => []]);        
        Form::component('bsDate', 'utils.components.form.date', ['name', 'label' => null, 'value' => null, 'attributes' => []]);        
        Form::component('bsDatetime', 'utils.components.form.datetime', ['name', 'label' => null, 'value' => null, 'attributes' => []]);        
        Form::component('bsTime', 'utils.components.form.time', ['name', 'label' => null, 'value' => null, 'attributes' => []]);        
        Form::component('bsSearch', 'utils.components.form.search', ['name', 'label' => null, 'value' => null, 'attributes' => []]);        
        Form::component('bsNumber', 'utils.components.form.number', ['name', 'label' => null, 'value' => null, 'attributes' => []]);        
        Form::component('bsSelect', 'utils.components.form.select', ['name', 'label' => null, 'items' => [], 'value' => null, 'attributes' => []]);
        Form::component('bsSelectMultiple', 'utils.components.form.select-multiple', ['name', 'label', 'items', 'model', 'properties']);
        Form::component('bsSubmit', 'utils.components.form.submit', ['label', 'attributes' => []]);
        Form::component('iCheckRadio', 'utils.components.form.radio', ['name', 'label', 'attributes' => []]);
        Form::component('iCheckCheckbox', 'utils.components.form.checkbox', ['name', 'label', 'attributes' => []]);
        Form::component('iCheckCheckboxOne', 'utils.components.form.checkboxone', ['name', 'label']);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
