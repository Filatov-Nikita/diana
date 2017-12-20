let mix = require('laravel-mix');

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

mix
  .less('resources/assets/less/style.less', 'public/css');
    mix.browserSync('localhost/diana/public');



// mix.styles([
//     'public/css/app.css',
//     'public/css/admin.css'
// ], 'public/css/admin.css');
