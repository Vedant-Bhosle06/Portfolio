module.exports = {
  darkMode: 'class', // Use the 'class' strategy for dark mode
  content: ["./index.html", "./src/**/*.php", "./src/**/*.js"],
  theme: {
    extend: {height: {
      'screen': '100vh', // This will add 'h-screen' as a custom class
    },
    colors: {
      amber: '#ff9900',
    },
    keyframes: {
      disperse: {
        '0%': { transform: 'scale(1)', opacity: '0.4' },
        '50%': { transform: 'scale(2)', opacity: '0.2' },
        '100%': { transform: 'scale(1)', opacity: '0.4' },
      },
    },
    animation: {
      disperse: 'disperse 1s ease-out infinite',
    }},
  },
  plugins: [],
};
