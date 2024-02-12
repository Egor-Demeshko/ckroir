// vite.config.js
import { defineConfig } from 'vite'

export default defineConfig({
    build: {
        minify: true,
        chunkFileNames: '[name].js',
        assetFileNames: '[name].[ext]',
        rollupOptions: {
            input: {
                index: 'index.html',
                home: 'home.html',
                archive: 'archive.html',
                gallery: 'gallery.html'
            },
            output: {
                entryFileNames: '[name].js',
                chunkFileNames: '[name].js',
                assetFileNames: '[name].[ext]',
            }
        }
    }
});
