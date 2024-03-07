/** @type {import('tailwindcss').Config} */

const plugin = require('tailwindcss/plugin');

const rotateY = plugin(({ addUtilities }) => {
  const newUtilities = {
    '.rotate-y-180': {
      transform: 'rotateY(180deg)',
    },
    '.-rotate-y-180': {
      transform: 'rotateY(-180deg)',
    },
  }

  addUtilities(newUtilities)
});
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors:{
        "color-primary": "#01051e",
        "color-primary-light": "#020726",
        "color-primary-dark": "#010417",
        "color-secondary": "#ff7d3b",
        "color-gray": "#3333",
        "color-white": "#fff",
        "color-blob": "#A427df",
      }
    },
    container:{
      center: true,
      padding:{
        DEFAULT:"20px",
        md:"50px",
      }
    }
  },
 
  plugins: [rotateY],
}

