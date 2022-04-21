const mix = require('laravel-mix');

 mix.js("resources/js/app.js", "public/assets/js").postCss("resources/css/app.css", "public/assets/css", [
   require("tailwindcss"),
 ]);