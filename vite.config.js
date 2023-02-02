import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import htmlPurge from 'vite-plugin-html-purgecss'

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        htmlPurge(),
    ],
});
