const mix = require('laravel-mix');



mix.styles([
    'resources/front/css/bootstrap.css',
    'resources/front/css/main.css',
], 'public/css/style.css');


mix.scripts(['resources/front/js/bootstrap.js',], 'public/js/scripts.js');


mix.copyDirectory('resources/front/img', 'public/img');
