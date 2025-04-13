import colors from "tailwindcss/colors";

export default {
  darkMode: 'class',
  content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./vendor/mkocansey/bladewind/resources/views/components/**/*.blade.php",
      "./public/vendor/bladewind/js/*.js",
  ],
  theme: {
    extend: {
        colors: {
            primary: colors.indigo,
            secondary: colors.slate,
            dark: colors.gray
        }
    },
  },
  plugins: [],
}
