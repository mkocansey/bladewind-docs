const colors = require('tailwindcss/colors')

module.exports = {
  darkMode: 'media',
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
  ],
  theme: {
    extend: {
        colors: {
            primary: colors.blue,
            secondary: colors.slate,
            green: colors.emerald,
            dark: colors.gray,
            success: colors.emerald,
            error: colors.red,
            warning: colors.amber,
            info: colors.blue
        }
    },
  },
  plugins: [],
}
