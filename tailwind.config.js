/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      'colors': {
        'primary': '#9D3C39',
        'edu-bg' : '#F6F6F6'
      },
    },
  },
  plugins: [],
}

