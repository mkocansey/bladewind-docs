export default function ({ addUtilities, theme, e }) {
    const keyframes = {
        '@keyframes slideInLeft': {
            '0%': { transform: 'translateX(calc(var(--slide-distance) * -1))', opacity: '0' },
            '100%': { transform: 'translateX(0)', opacity: '1' },
        },
        '@keyframes slideInRight': {
            '0%': { transform: 'translateX(var(--slide-distance))', opacity: '0' },
            '100%': { transform: 'translateX(0)', opacity: '1' },
        },
        '@keyframes slideInUp': {
            '0%': { transform: 'translateY(var(--slide-distance))', opacity: '0' },
            '100%': { transform: 'translateY(0)', opacity: '1' },
        },
        '@keyframes slideInDown': {
            '0%': { transform: 'translateY(calc(var(--slide-distance) * -1))', opacity: '0' },
            '100%': { transform: 'translateY(0)', opacity: '1' },
        },
        '@keyframes fadeInUp': {
            '0%': { opacity: '0', transform: 'translateY(var(--fade-distance))' },
            '100%': { opacity: '1', transform: 'translateY(0)' },
        },
        '@keyframes fadeInDown': {
            '0%': { opacity: '0', transform: 'translateY(calc(var(--fade-distance) * -1))' },
            '100%': { opacity: '1', transform: 'translateY(0)' },
        },
        '@keyframes fadeInLeft': {
            '0%': { opacity: '0', transform: 'translateX(calc(var(--fade-distance) * -1))' },
            '100%': { opacity: '1', transform: 'translateX(0)' },
        },
        '@keyframes fadeInRight': {
            '0%': { opacity: '0', transform: 'translateX(var(--fade-distance))' },
            '100%': { opacity: '1', transform: 'translateX(0)' },
        },
    }

    const animations = {
        '.animate-slideInLeft': { animation: 'slideInLeft var(--slide-duration) ease-out forwards' },
        '.animate-slideInRight': { animation: 'slideInRight var(--slide-duration) ease-out forwards' },
        '.animate-slideInUp': { animation: 'slideInUp var(--slide-duration) ease-out forwards' },
        '.animate-slideInDown': { animation: 'slideInDown var(--slide-duration) ease-out forwards' },
        '.animate-fadeInUp': { animation: 'fadeInUp var(--fade-duration) ease-out forwards' },
        '.animate-fadeInDown': { animation: 'fadeInDown var(--fade-duration) ease-out forwards' },
        '.animate-fadeInLeft': { animation: 'fadeInLeft var(--fade-duration) ease-out forwards' },
        '.animate-fadeInRight': { animation: 'fadeInRight var(--fade-duration) ease-out forwards' },
    }

    addUtilities(keyframes)
    addUtilities(animations)
}
