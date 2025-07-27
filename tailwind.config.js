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
            dark: {
                100: '#f0f1f2',
                200: '#d2d4d7',
                300: '#a7aaad',
                400: '#6c7075',
                500: '#4a4e53',
                600: '#33373c',
                700: '#262a2f',
                800: '#1C1F24',
                900: '#101114',
                950: '#0a0b0d'
            },
        },
        fontFamily: {
            bladewind: ['Inter', 'sans-serif'],
            bladewind2: ['Anonymous Pro', 'sans-serif'],
        },
    },
  },
  plugins: [ animations],
}
