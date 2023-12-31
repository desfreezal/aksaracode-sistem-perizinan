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
                'abu-abu-second' : '#F0F0F0',
                'putih-dasar': '#FFFFFF',
                'for-icon': '#868E96',
                'underline': '#B7605D',
                'font-abu': '#45484F',
                'font-kuning': '#D4AA2E',
                'header-table': '#FDC8C7',
                'font-hijau': '#50C319',
                'bg-hijau': '#CEFED5',
                'font-merah': '#D41E1E',
                'bg-merah': '#F5AFAF',
            },
        },
    },
    plugins: [require("flowbite/plugin")],
};
