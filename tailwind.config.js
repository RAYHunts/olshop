module.exports = {
  content: [
            "./public/**/*.{php,js}"
          ],
  theme: {
    fontFamily: {
      monts: "Montserrat, sans-serif",
      hurry: "inspiration, cursive",
    },
  },
  extend: {},
  plugins: [require("@tailwindcss/forms"), require("@tailwindcss/line-clamp")],
};
