import {defineConfig} from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'chart.js/Chart.min.js',
                'jquery-easing/jquery.easing.min.js',
                'bootstrap/js/bootstrap.bundle.min.js',
                'jquery/jquery.min.js',
                'fontawesome-free/css/all.min.css',
                'resources/css/sb-admin-2.css',
                'resources/css/styles.css',
                'resources/js/app.js',
                'resources/js/sb-admin-2.js',
                'resources/js/demo/chart-area-demo.js',
                'resources/js/demo/chart-pie-demo.js',
                'resources/js/scripts.js',
            ],
        }),
    ],
    resolve: {
        alias: {
            '~bootstrap': path.resolve(__dirname, 'node_modules/bootstrap'),
        }
    },

});
