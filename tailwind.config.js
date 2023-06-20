/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js",
  ],
  theme: {
    fontFamily: {
      
    },
    extend: {
      colors: {
        'gris': {
          '900': '#4F4F4F',
          '800': '#5B5858',
          '700': '#686868',
          '600': '#747474',
          '500': '#808080',
          '400': '#B1B1B1',
          '300':'#C5C5C5',
          '200':'#D9D9D9',
          '100':'#DEDEDE',
          '50':'#EEEEEE',
        },
        'celeste': {
          '900': '#00292B',
          '800': '#005758',
          '700': '#1D6F70',
          '650': '#2e504d',
          '600': '#3C898A',
          '550': '#48D4C4',
          '500': '#58A3A4',
          '400': '#73BFBF',
          '300':'#8FDBDB',
          '200':'#ABF7F7',
          
        },
        'marron': {
          '100': '#CBAC8D',
          '300': '#C3A07D',
          '500': '#BC946C',
          '600': '#B18356',
          '700': '#9E7348',
          '800': '#7D5A3C',
          '900':'#644830'
        },
      }
    },
  },
  plugins: [
    require('@tailwindcss/forms'),
    require('flowbite/plugin')
  ],
}

