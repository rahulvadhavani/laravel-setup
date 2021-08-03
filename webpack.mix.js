const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.styles([
      "./resources/assets/css/bootstrap-tagsinput.css",
      "./resources/assets/css/mdicons.min.css",
      "./resources/assets/css/spectrum.css",
      "./resources/assets/css/date-picker.css",
      "./resources/assets/css/clockpicker.css",
      "./resources/assets/css/dropzone.css",
      "./resources/assets/css/bootstrap.min.css",
      "./resources/assets/css/app.min.css",
      "./resources/assets/css/theme.min.css",
      "./resources/assets/css/light-skin.css",
      "./resources/assets/css/dark-skin.css",
      "./resources/assets/css/demo.css",
  	], './public/assets/css/admin_app.min.css')
    
    .js([
      "./resources/assets/js/spectrum.min.js",
      "./resources/assets/js/jquery.min.js",
      "./resources/assets/js/jquery.mask.min.js",
      "./resources/assets/js/bootstrap.min.js",
      "./resources/assets/js/typeahead.jquery.js",
      "./resources/assets/js/bootstrap-tagsinput.min.js",
      "./resources/assets/js/app.js",
      // "./resources/assets/js/bower.min.js",
      "./resources/assets/js/smooth-scroll.min.js",
      "./resources/assets/js/dropzone.min.js",
      "./resources/assets/js/demo-formElements.js",
  	], './public/assets/js/admin_app.min.js')

    .js([
      "./resources/assets/js/common.js",
  	], './public/assets/js/common.min.js')
   