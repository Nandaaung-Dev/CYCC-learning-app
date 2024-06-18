/** @type {import('tailwindcss').Config} */
export default {
content: [
  "./resources/**/*.blade.php",
  "./resources/**/*.js",
  "./resources/**/*.vue",
],
theme: {
    extend: {
      colors: {
        'text-color-01': 'var(--Text-color-01, #49505D)',
      },
      fontFamily: {
        'dm-sans': ['DM Sans', 'sans-serif'],
      },
      fontSize: {
        'body-2': ['18px', {
          lineHeight: '18px',
          letterSpacing: '0.72px',
        }],
      },
    },
  },
plugins: [],
}
