const mix = require('laravel-mix');
mix.options({
  cssNano: {
      discardComments: {
          removeAll: true,
      },
  },
})
 mix.js("resources/js/app.js", "public/assets/js").postCss("resources/css/app.css", "public/assets/css", [
   require("tailwindcss"),
 ]);