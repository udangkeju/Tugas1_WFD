module.exports = {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
    ],
    theme: {
      extend: {
        colors: {
          'primary': '#E50914', // Warna merah khas LK21
          'dark': '#0F0F0F',   // Warna background gelap
        },
        fontFamily: {
          'sans': ['"Open Sans"', 'sans-serif'],
        },
      },
    },
    plugins: [
      require('@tailwindcss/line-clamp'),
    ],
  }