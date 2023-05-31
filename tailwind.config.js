const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],

    theme: {
        screens: {
            xs: '510px',
            xmd: '900px',
            ...defaultTheme.screens,
        },

        fontFamily: {
            sans: ['Figtree', ...defaultTheme.fontFamily.sans],
        },

        extend: {
            colors: {
                primary: '#0E5ECC',
                secondary: '#111849',
                tertiary: '#0DBBFC',
                title: '#111849',
            },
            fontFamily: {
                main: ['Poppins'],
            },
            backgroundImage: {
                whiteCard: "url('/img/white_card.svg')",
              },
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
