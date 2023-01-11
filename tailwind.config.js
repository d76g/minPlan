const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        screens: {
            'xs': '375px',
            ...defaultTheme.screens,
        },
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            height: {
                '130' : '70vh',
                '150' : '80vh',
                '160' : '90vh'
            },
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
