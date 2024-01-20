/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                'primary': '#f2d000',
                'text': '#343434',
                'bg': '#e9ecef',
            }
        },
    },
    plugins: [],
}
