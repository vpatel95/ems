var elixir = require('laravel-elixir')

elixir(function(mix) {
    mix.js('assets/js/app.js', 'public/js/app.js');
});