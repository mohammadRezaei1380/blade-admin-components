# Blade Admin Components

A collection of reusable Blade components for Laravel admin panels.  
These components help you build forms, inputs, and UI elements faster without writing repetitive HTML/JS code.

---

## 📦 Installation

Require the package via Composer:

```bash
composer require mohammadrezaei1380/blade-admin-components

Publish the views (optional, if you want to customize):
php artisan vendor:publish --provider="BladeAdminComponents\BladeAdminComponentsServiceProvider" --tag=views

Add the Service Provider to config/app.php (Laravel < 5.5, for auto-discovery it's not needed):

'providers' => [
    BladeAdminComponents\BladeAdminComponentsServiceProvider::class,
];


🛠 Usage

You can include components in your Blade files using aliases registered by the Service Provider.


Example: Text Input

@include('blade-admin::input-text', [
    'name' => 'title',
    'placeholder' => 'Enter the article title',
    'value' => old('title'),
])

@input-text(['name' => 'title', 'placeholder' => 'Enter the article title'])

Example: Select

@include('blade-admin::select', [
    'name' => 'category',
    'options' => [
        'tech' => 'Technology',
        'life' => 'Lifestyle',
        'news' => 'News'
    ],
    'value' => old('category')
])

@include('blade-admin::input-text', [
    'name' => 'price',
    'hastNumberFormatLabel' => true,
    'value' => 1234567
])


🔧 Available Components

ckeditor – Rich text editor

datepicker – Date picker input

horizontal-checkbox – Checkbox aligned horizontally

horizontal-radiobutton – Radio button aligned horizontally

image-input – Image file input

input-text – Text input

input-text-repeater – Repeater input for multiple text fields

jsTree – JavaScript tree view

label – Custom label component

leaflet-map – Leaflet map input

select – Standard select dropdown

select-2 – Select2 dropdown

select-2-ajax – Select2 with AJAX support

separator-dashed – Dashed separator line

textarea – Textarea input

timepicker – Time picker input

tooltip-i – Tooltip helper

vertical-checkbox – Checkbox aligned vertically

vertical-radiobutton – Radio button aligned vertically


