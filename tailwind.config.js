module.exports = {
  content: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
    './public/**/*.html'
  ],
  theme: {
    extend: {
      colors: {
        primary: '#1a202c', // Custom primary color
      },
    },
  },
  plugins: [require('@tailwindcss/forms'),],
}
