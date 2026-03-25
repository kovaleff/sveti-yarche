import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import { resolve } from 'path'

export default defineConfig({
    // css: {
    //     preprocessorOptions: {
    //         scss: {
    //             silenceDeprecations: [
    //                 'import',
    //                 'mixed-decls',
    //                 'color-functions',
    //                 'global-builtin',
    //             ],
    //         },
    //     },
    // },
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    server: {
        watch: {
            ignored: ['**/storage/framework/views/**'],
        },
        cors: {
            origin: [
                'http://sveti-yarche',
            ],
        }
    },
});
