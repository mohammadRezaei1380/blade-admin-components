<?php

namespace BladeAdminComponents;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class BladeAdminComponentsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views/__components', 'blade-admin');

        Blade::component('blade-admin::ckeditor', 'ckeditor');
        Blade::component('blade-admin::datepicker', 'datepicker');
        Blade::component('blade-admin::horizontal-checkbox', 'horizontal-checkbox');
        Blade::component('blade-admin::horizontal-radiobutton', 'horizontal-radiobutton');
        Blade::component('blade-admin::image-input', 'image-input');
        Blade::component('blade-admin::input-text', 'input-text');
        Blade::component('blade-admin::input-text-repeater', 'input-text-repeater');
        Blade::component('blade-admin::jsTree', 'jsTree');
        Blade::component('blade-admin::label', 'label');
        Blade::component('blade-admin::leaflet-map', 'leaflet-map');
        Blade::component('blade-admin::select', 'select');
        Blade::component('blade-admin::select-2', 'select-2');
        Blade::component('blade-admin::select-2-ajax', 'select-2-ajax');
        Blade::component('blade-admin::separator-dashed', 'separator-dashed');
        Blade::component('blade-admin::textarea', 'textarea');
        Blade::component('blade-admin::timepicker', 'timepicker');
        Blade::component('blade-admin::tooltip-i', 'tooltip-i');
        Blade::component('blade-admin::vertical-checkbox', 'vertical-checkbox');
        Blade::component('blade-admin::vertical-radiobutton', 'vertical-radiobutton');
    }

    public function register()
    {
        //
    }
}
