/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./*.php", // <-- Esto detectará index.php, pacientes.php, editar_paciente.php, etc.
    "./src/**/*.{js,css}", // <-- Esto detectará tu main.js o input.css dentro de src
  ],
  theme: {
    extend: {},
  },
  plugins: [],
};
