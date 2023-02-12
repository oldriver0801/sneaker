const mix = require('laravel-mix');
mix.js("resources/js/app.js", "public/js")
.sass('resources/sass/app.sass', "public/css")
.options({
    postCss:[
        require("postcss-import"),
        require("tailwindcss"),
        ]
});