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
                "edu-bg": "#F6F6F6",
                "edu-black": "1A1A1A",
            },
        },
    },
    plugins: [require("flowbite/plugin")],
};
