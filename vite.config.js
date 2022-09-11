import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
                'resources/js/golongan.js',
                'resources/cs-assets/js/sidebar-menu.js',
                'resources/cs-assets/js/config.js',
                'resources/cs-assets/js/script.js',
            ],
            refresh: false,
        }),
    ],
});
