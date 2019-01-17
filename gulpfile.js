var elixir = require('laravel-elixir'),
        bowerDir = "vendor/bower_components/";
elixir(function (mix) {
    mix.copy(bowerDir + 'bootstrap/fonts', 'public/fonts')
            .copy(bowerDir + 'fontawesome/fonts', 'public/fonts')
    
            .copy(bowerDir + 'bootstrap/dist/js/bootstrap.js', 'resources/assets/js')
            .copy(bowerDir + 'jquery/dist/jquery.js', 'resources/assets/js')
            .scripts([
                'jquery.js',
                'bootstrap.js'
            ], 'public/js/scripts.js')
            .less('app.less');
});