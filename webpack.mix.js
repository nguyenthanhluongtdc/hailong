let mix = require('laravel-mix');
let glob = require('glob');

mix.options({
    processCssUrls: false,
    clearConsole: true,
    terser: {
        extractComments: false,
    }
})
.copy('platform/themes/hailongglass/public/images', 'public/themes/hailongglass/images')
.copy('platform/themes/hailongglass/public/fonts', 'public/themes/hailongglass/fonts')
.js('platform/themes/hailongglass/assets/js/main.js', 'public/themes/hailongglass/js/main.js')
.sass('platform/themes/hailongglass/assets/sass/main.scss', 'public/themes/hailongglass/css/main.css');

// Run all webpack.mix.js in app

// Run only for a package, replace [package] by the name of package you want to compile assets
// require('./platform/packages/[package]/webpack.mix.js');

// Run only for a plugin, replace [plugin] by the name of plugin you want to compile assets
// require('./platform/plugins/[plugin]/webpack.mix.js');

// Run only for themes, you shouldn't modify below config, just uncomment if you want to compile only theme's assets
// glob.sync('./platform/themes/**/webpack.mix.js').forEach(item => require(item));

