import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/js/api.js',
                'resources/assets/tinder.49154e1a.js',
                'resources/assets/modulepreload-polyfill.b7f2da20.js',
                'resources/assets/vendor.602a9696.js',
                'resources/assets/effect-tinder.f396dd4b.js',
            ],
            refresh: true,
        }),
    ],
});
