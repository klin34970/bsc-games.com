const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');

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
/*
 * ADMIN
 */
mix.copyDirectory('resources/assets/admin/webfonts', 'public/assets/admin/webfonts');
mix.js([
    'resources/assets/admin/js/app.js'
], 'public/assets/admin/js');
mix.postCss('resources/assets/admin/css/app.css', 'public/assets/admin/css', [
    require('postcss-import'),
    tailwindcss('./tailwind-admin.config.js'),
    require('autoprefixer'),
]);

/*
 * AIRDROP
 */
mix.copyDirectory('resources/assets/images', 'public/assets/images');

mix.js('resources/assets/js/app.js', 'public/assets/js');
mix.postCss('resources/assets/css/app.css', 'public/assets/css', [
    require('postcss-import'),
    tailwindcss('./tailwind.config.js'),
    require('autoprefixer'),
]);
