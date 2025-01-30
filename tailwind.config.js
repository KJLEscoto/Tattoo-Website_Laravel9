/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    screens: {
      'sm': '640px',
      'md': '768px',
      'lg': '1024px',
      'xl': '1280px',
      '2xl': '1536px',
    },
    fontFamily: {
      'megrim': ['Megrim', 'sans-serif'],
      'dosis': ['Dosis', 'sans-serif'],
    },
    extend: {
      colors: {
        'custom-green': '#7b7f5d',
        'custom-blue': '#405060'
      },
    },
  },
  plugins: [],
}

