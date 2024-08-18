import { defineConfig } from 'vite';
import { resolve } from 'path';
import { svelte } from '@sveltejs/vite-plugin-svelte';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    base: '',
    build: {
        minify: true,
        manifest: false,
        outDir: 'public',
        emptyOutDir: false,
        chunkSizeWarningLimit: 1500,
        rollupOptions: {
            output: {
                chunkFileNames: 'js/[name].js',
                entryFileNames: 'js/[name].js',

                assetFileNames: ({ name }) => {
                    if (/\.(gif|jpe?g|png|svg)$/.test(name ?? '')) {
                        return 'images/[name][extname]';
                    }

                    if (/\.css$/.test(name ?? '')) {
                        return 'css/[name][extname]';
                    }
                    /** Return something. */
                    return 'assets/[name][extname]';
                },
            },
            external: [],
        },
    },
    plugins: [
        laravel({
            input: ['resources/css/app.scss', 'resources/js/main.js'],
            refresh: true,
        }),
        svelte(),
    ],
    resolve: {
        alias: {
            $components: '/resources/js/lib/components',
            $vendors: '/resources/js/lib/vendors',
        },
    },
});
