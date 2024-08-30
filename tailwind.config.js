import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                mplus: ['"M PLUS 1p"', ...defaultTheme.fontFamily.sans],
                zen: ['"Zen Kaku Gothic New"', ...defaultTheme.fontFamily.sans],
                sans: ['"Zen Kaku Gothic New"','Noto Sans JP', 'Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [forms],
};
