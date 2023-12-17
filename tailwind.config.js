/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        extend: {
            colors: {
                primary: "#9D3C39",
                "primary-light": "#a64f4c",
                "edu-bg": "#F6F6F6",
                "edu-black": "#1A1A1A",
                'abu-abu': '#D9D9D9',
                'abu-abu-second' : '#F0F0F0'
            },
        },
    },
    plugins: [require("flowbite/plugin")],
};
