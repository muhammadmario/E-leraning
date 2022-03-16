module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily: {
        'inter': ["Inter", "sans-serif"],
      },
      colors:{
        'bsamar':"#1fdf64",
      },
      height: {
        '128': '32rem',
      }
    },
  },
  plugins: [],
  variants: {
    extend: {
      backgroundColor: ['active'],
    }
  },
}
