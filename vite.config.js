import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css', 
                'resources/js/app.js',
                'node_modules/@ckeditor/ckeditor5-build-classic/build/ckeditor.js',
                'public/back-end/assets/js/ckeditor'                          
            ],
            refresh: true,
        }),
    ],
});
