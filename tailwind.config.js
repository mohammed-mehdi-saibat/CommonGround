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
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'majorelle-blue': {
                    50: '#eef3fa',
                    100: '#d9e5f4',
                    200: '#bccfeb',
                    300: '#92b2dd',
                    400: '#648ecc',
                    500: '#446fb9',
                    600: '#2b5797',
                    700: '#2c4b81',
                    800: '#283f6a',
                    900: '#253759',
                    950: '#19233a',
                },
                'terracotta': {
                    50: '#fff7ed',
                    100: '#ffeed5',
                    200: '#ffd9ab',
                    300: '#ffbd75',
                    400: '#ff953f',
                    500: '#ff7416',
                    600: '#ea5a0c',
                    700: '#c2430b',
                    800: '#9a350f',
                    900: '#7c2e12',
                    950: '#431407',
                },
                'saharan-gold': {
                    50: '#fefce8',
                    100: '#fef9c3',
                    200: '#feef8a',
                    300: '#fde047',
                    400: '#fbbf24',
                    500: '#f59e0b',
                    600: '#d97706',
                    700: '#b45309',
                    800: '#92400e',
                    900: '#78350f',
                    950: '#451a03',
                },
            },
            animation: {
                'fade-in': 'fadeIn 1s ease-out forwards',
                'bounce-short': 'bounceShort 1s ease-in-out 3',
            },
            keyframes: {
                fadeIn: {
                    '0%': { opacity: '0', transform: 'translateY(20px)' },
                    '100%': { opacity: '1', transform: 'translateY(0)' },
                },
                bounceShort: {
                    '0%, 100%': { transform: 'translateY(0)' },
                    '50%': { transform: 'translateY(-10px)' },
                }
            },
            boxShadow: {
                '3xl': '0 35px 60px -15px rgba(0, 0, 0, 0.3)',
            }
        },
    },

    plugins: [forms],
};
