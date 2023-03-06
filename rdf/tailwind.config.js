const defaultTheme = require("tailwindcss/defaultTheme");

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Poppins", ...defaultTheme.fontFamily.sans],
                mono: ["Montserrat", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: "#ff0000",
            },
        },
    },

    plugins: [require("@tailwindcss/forms")],
};
