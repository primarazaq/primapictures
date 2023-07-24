/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js",
    "./node_modules/tw-elements/dist/js/**/*.js"
  ],
  theme: {
    extend: {
      animation: {
        'fade' : 'fade 2s ease',
        'fade3' : 'fade 3.5s ease'
      },
      keyframes: {
        fade: {
          '0%' :{opacity: 0},
          '100%' :{opacity: 100},
        }
      },
      colors:{
        primary: '#38573e',
        secondary: '#4d6953',
        red: '#e01414',
        success: '#5fe35f',
      },
    },
  },
  plugins: [
    require('flowbite/plugin')
  ]
}
