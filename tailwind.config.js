/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      animation: {
        'fade' : 'fade 2s ease'
      },
      keyframes: {
        fade: {
          '0%' :{opacity: 0},
          '100%' :{opacity: 100},
        }
      },
      colors:{
        primary: '#38573e',
        secondary: '#F7F7F7',
      },
    },
  },
  plugins: [],
}
