import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import * as path from 'path';
// path = require('path');

export default defineConfig({
    root: path.resolve(__dirname, 'resources'),
    resolve: {
        alias: {
            "~bootstrap": path.resolve(__dirname, "node_modules/bootstrap"),
        },
    },
    plugins: [
        laravel({
            input: ["resources/css/app.css", "resources/js/app.js", "resources/scss/app.scss"],
            refresh: true,
        }),
    ],
});
