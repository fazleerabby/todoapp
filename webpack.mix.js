const { mix } = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js(['resources/assets/js/app.js','resources/assets/js/datepicker.min.js'], 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');

mix.styles([
    'resources/assets/css/bootstrap.min.css',
    'resources/assets/css/datepicker.min.css',
    'resources/assets/css/font-awesome.min.css',
    'resources/assets/css/style.css'
],'public/css/style.css');

mix.js([
    'resources/assets/js/script.js'
], 'public/js/script.js');
