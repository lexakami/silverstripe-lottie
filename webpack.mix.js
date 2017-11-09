const mix = require('laravel-mix');

mix
  .extract(['vue', 'bodymovin'], 'dist/vendor.js')
  .js('src/app.js', 'dist/');
