const mix = require('laravel-mix');

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

mix.styles([
    'resources/front/css/bootstrap.css',
    'resources/front/css/main.css'
], 'public/css/style.css');

mix.scripts([
    'resources/front/js/bootstrap.js'
], 'public/js/scripts.js');

mix.copyDirectory('resources/front/img', 'public/img');

mix.browserSync('http://localhost/lanew/public/');
