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
            iphone: '390px',
            sm: '720px',
            md: '900px',
            lg: '1024px',
            xl: '1280px',
            xxl: '1440px',
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
                'gradient-radial': 'radial-gradient(var(--tw-gradient-stops))',
              },
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
