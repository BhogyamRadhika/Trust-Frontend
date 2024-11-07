const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');

mix.js('resources/js/app.js', 'public/assets/js')
   .sass('resources/sass/app.scss', 'public/assets/css')
   .postCss('resources/css/tailwind.css', 'public/assets/css', [
      tailwindcss('./tailwind.config.js'),
   ]);
