import { defineConfig } from 'vite';


import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
                'resources/sass/login.css',
                'resources/js/login.js',



                'resources/sass/dash.css',
                'resources/js/dash.js',
              'resources/css/form.css',
                'resources/js/form.js',
              'resources/js/jquery.min.js',

                'resources/sass/dataTable.css',
                'resources/sass/script_dossier.js',
                'resources/sass/style_dossier.css'
            ],

            refresh: true
        }),]


});
