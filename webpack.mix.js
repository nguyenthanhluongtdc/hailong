let mix = require("laravel-mix");

mix.options({
    processCssUrls: false,
    clearConsole: true,
    terser: {
        extractComments: false,
    },
})
    .setPublicPath("public")
    .copy("platform/themes/main/public/images", "public/themes/main/images")
    .copy("platform/themes/main/public/fonts", "public/themes/main/fonts")
    .js(
        "platform/themes/main/assets/js/common.js",
        "public/themes/main/js/common.js"
    )
    .sass(
        "platform/themes/main/assets/sass/common.scss",
        "public/themes/main/css/common.css"
    );
