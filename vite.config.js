import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    base: '/',
    plugins: [
        laravel({
            input: [
                'resources/css/filament.css',

                'resources/scss/app.scss',
                'resources/js/app.js'
            ],
            refresh: true,
        }),
    ],
    build: {
        manifest: true,
    },
});
