import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    daisyui: {
      },
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            colors: {
                "kuning": {
                    "50": "#faf5ea",
                    "100": "#f5ebd5",
                    "200": "#ebd8ac",
                    "300": "#e0c482",
                    "400": "#d6b159",
                    "500": "#cc9d2f",
                    "600": "#a37e26",
                    "700": "#7a5e1c",
                    "800": "#523f13",
                    "900": "#291f09"
                  },
                   "merah": {
                    "50": "#efe6e8",
                    "100": "#deccd1",
                    "200": "#bd99a2",
                    "300": "#9d6674",
                    "400": "#7c3345",
                    "500": "#5b0017",
                    "600": "#490012",
                    "700": "#37000e",
                    "800": "#240009",
                    "900": "#120005"
                  },
                  "biru": {
                    "50": "#e9eaee",
                    "100": "#d3d6dd",
                    "200": "#a7acbb",
                    "300": "#7c8398",
                    "400": "#505976",
                    "500": "#243054",
                    "600": "#1d2643",
                    "700": "#161d32",
                    "800": "#0e1322",
                    "900": "#070a11"
                  },
            },
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [forms, require("daisyui")],
    darkMode: 'class',
};
