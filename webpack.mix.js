let mix = require('laravel-mix');

mix
	.sass('scss/style.scss', 'css/')
	.options({ processCssUrls: false });
