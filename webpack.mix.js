const mix = require('laravel-mix');
let path = require("path")

mix.webpackConfig({
    resolve: {
        alias: {
            '@': path.resolve(__dirname, 'resources/js')
        }
    }
})

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');

mix.browserSync({
    proxy: '172.23.0.3',
    host: 'nginx',
    open: true
});