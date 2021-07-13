let mix = require('laravel-mix');
let glob = require('glob');

mix.options({
    processCssUrls: false,
    clearConsole: true,
    terser: {
        extractComments: false,
    }
})
.setPublicPath('public')
    .copy('platform/themes/main/public/images', 'public/themes/main/images')
    .copy('platform/themes/main/public/fonts', 'public/themes/main/fonts')
    .js('platform/themes/main/assets/js/common.js', 'public/themes/main/js/common.js')
    .sass('platform/themes/main/assets/sass/common.scss', 'public/themes/main/css/common.css');

// Run all webpack.mix.js in app
// Run only for a package, replace [package] by the name of package you want to compile assets
// require('./platform/packages/[package]/webpack.mix.js');

// Run only for a plugin, replace [plugin] by the name of plugin you want to compile assets
// require('./platform/plugins/[plugin]/webpack.mix.js');

// Run only for themes, you shouldn't modify below config, just uncomment if you want to compile only theme's assets
// glob.sync('./platform/themes/**/webpack.mix.js').forEach(item => require(item));

