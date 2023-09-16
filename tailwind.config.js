const colors = require('tailwindcss/colors')
module.exports = {
    purge: [
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php'
    ],

    theme: {
        fontFamily: {
            'sans': ['New Tegomin', 'Sans-serif']
        },
        colors: {
            transparent: 'transparent',
            white: colors.white,
            'sand-400': 'var(--sand-400)',
            'sand-800': 'var(--sand-800)',
            'tree-300': 'var(--tree-300)',
            'tree-600': 'var(--tree-600)',
            'tree-900': 'var(--tree-900)',
            'leaf-400': 'var(--leaf-400)',
            'leaf-800': 'var(--leaf-800)',
            'sky-400': 'var(--sky-400)',
            'sky-800': 'var(--sky-800)',
            'sun': 'var(--sun)',
        },
        extend: {
        },
    },

    variants: {
        extend: {
            opacity: ['disabled'],
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
