/** @type {import('tailwindcss').Config} */
export default {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            boxShadow: {
              'right': '4px 0 2px -2px rgba(0, 0, 0, 0.1)', // Sombra en el lado derecho
            },
            height: {
              '1/12': '8.333333%', // Altura personalizada 1/12
              '11/12': '91.666667%', // Altura personalizada 11/12
              '40/41': '97.560976%', // Altura personalizada 40/41
            },
            screens: {
              'xs': '300px',     // Pantallas extra pequeñas// 
            },
            fontSize: {
              'xxs': '.6rem', // Tamaño de fuente extra extra pequeño
            },
          },
    },
    plugins: [],
  }