let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 | mix.js('resources/assets/js/app.js', 'public/js')
 */
   mix.scripts([
     'resources/assets/plugins/bower_components/jquery/dist/jquery.js',
     'resources/assets/bootstrap/dist/js/bootstrap.min.js',
     'resources/assets/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js',
     'resources/assets/js/lib/jquery.slimscroll.js',
     'resources/assets/js/lib/waves.js',
     'resources/assets/js/lib/custom.min.js',
     'resources/assets/plugins/bower_components/styleswitcher/jQuery.style.switcher.js'
   ], 'public/js/libs.js');

   mix.less('resources/assets/less/style.less', 'public/css');
