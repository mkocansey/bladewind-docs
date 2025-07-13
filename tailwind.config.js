import colors from "tailwindcss/colors";
import animations from './resources/js/bladewind.animations.js';

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
        },
        fontFamily: {
            bladewind: ['Inter', 'sans-serif'],
            bladewind2: ['Anonymous Pro', 'sans-serif'],
        },
    },
  },
  plugins: [ animations],
}
