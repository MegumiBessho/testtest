const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .copy('node_modules/flatpickr/dist/flatpickr.min.css', 'public/css/flatpickr.css')
    .copy('node_modules/flatpickr/dist/flatpickr.min.js', 'public/js/flatpickr.js');
