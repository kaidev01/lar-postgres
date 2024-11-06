import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
     plugins: [
          laravel({
               input: [
                    "resources/scss/test.scss",
                    "resources/scss/tennis.scss",
                    "resources/scss/football.scss",
                    "resources/scss/basketball.scss",

                    "resources/js/test.js",
                    "resources/js/tennis.js",
                    "resources/js/football.js",
                    "resources/js/basketball.js",
               ],
               refresh: true,
          }),
     ],
     server: {
          host: "0.0.0.0", // Bind to all network interfaces
          port: 5173, // You can set a different port if needed
          hmr: {
               host: "localhost",
          },
     },
});
