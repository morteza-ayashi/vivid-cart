import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import { glob } from 'glob';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                ...glob.sync('Modules/*/resources/js/main.js'),
                ...glob.sync('Modules/*/resources/js/app.js'),

                ...glob.sync('Modules/*/resources/css/app.css'),
                ...glob.sync('Modules/*/resources/css/main.css'),

                ...glob.sync('resources/images/**/*.{jpg,jpeg,png,gif,svg,webp,ico}'),
                ...glob.sync('resources/images/favicon/**/*.{ico,png}'),

                'node_modules/@fortawesome/fontawesome-free/css/all.min.css',
            ],
            refresh: true,
        }),
    ],
});
