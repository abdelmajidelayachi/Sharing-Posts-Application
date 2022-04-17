module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./resources/**/**/*.vue",

  ],
  theme: {
    extend: {
      animation: {
        scale: 'scale .5s ease-in-out',
      }, 
      keyframes: {
        scale: {
          from: { transform: 'scale(0)' },
          to: { transform: 'scale(1)' },
        }
      }
    },
  },
  plugins: [],
}
