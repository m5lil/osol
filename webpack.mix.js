// let mix = require('laravel-mix');

// /*
//  |--------------------------------------------------------------------------
//  | Mix Asset Management
//  |--------------------------------------------------------------------------
//  |
//  | Mix provides a clean, fluent API for defining some Webpack build steps
//  | for your Laravel application. By default, we are compiling the Sass
//  | file for the application as well as bundling up all the JS files.
//  |
//  */
// let config = {
//     host:     '192.168.1.3',
//     base_url: 'osol.dev'
// };


// mix.js('resources/assets/js/app.js', 'public/js')
//    .sass('resources/assets/sass/app.scss', 'public/css')
   
// mix.browserSync({
// 	files: [
// 	    'resources/views/**/*.*',
// 	    'public/css/*.*',
// 	    'public/js/*.*'
// 	],
// 	host: config.host,
// 	proxy: config.base_url,
// 	port: 3000,
// 	online: true,
// 	logConnections: false,
// 	reloadOnRestart: false,
// 	notify: false,
// 	open: false //false, local, external, ui, tunnel
// 	// injectChanges: true,
// });


// mix.copyDirectory('resources/assets/images', 'public/images');




// if (mix.config.inProduction) {
//     mix.options({
// 	    cleanCss: {
// 	        level: {
// 	            1: {
// 	                specialComments: 'none'
// 	            }
// 	        }
// 	    },
// 	});
// }
