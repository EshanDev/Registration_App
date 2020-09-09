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

mix.js('resources/js/app.js', 'public/js')
	.js('resources/js/registration.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .sass('resources/sass/registration.scss', 'public/css')
    .version()
    .sourceMaps()
    .options({
    	processCssUrls: false
    });



mix.browserSync({
	proxy: 'http://localhost:8000',
	notify: {
      styles: {
        top: 'auto',
        bottom: '20px'
    }
  }
});