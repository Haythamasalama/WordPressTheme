const mix = require("laravel-mix");
const tailwindcss = require("tailwindcss");

mix.postCss("./css/main.css", "./resources/css/main.css", [
  tailwindcss("./tailwind.config.js"),
]);
mix.js("./js/main.js", "./resources/js/main.js");
