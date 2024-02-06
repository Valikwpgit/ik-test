const mix = require('laravel-mix');
mix.setPublicPath('/');
mix.sass('assets/scss/styles.scss', 'assets/css/style.min.css')
    .options({
        processCssUrls: false,
    })
    .version().disableNotifications();
