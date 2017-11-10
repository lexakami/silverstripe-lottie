const mix = require('laravel-mix');

mix
  .extract(['bodymovin'], 'dist/vendor.js')
  .js('src/app.js', 'dist/');
