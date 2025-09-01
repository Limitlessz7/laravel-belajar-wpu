/** @type {import('tailwindcss').Config} */
const defaultTheme = require('tailwindcss/defaultTheme')
export default {
  content: [],
  theme: {
    extend: {
      fontFamily: {
        inter: ['Inter', 'sans-serif'], // custom font 'inter'
      },
    },
  },
  plugins: [],
}

