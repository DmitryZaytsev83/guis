const {src, dest, series, parallel, watch} = require('gulp');
const del = require("del");
const sass = require("gulp-sass");
const concat = require("gulp-concat");
const sourceMap = require("gulp-sourcemaps");
const terser = require("gulp-terser");
sass.compiler = require('node-sass');

function clean() {
    return del(["dist/*", "!dist"]);

}

function html() {
    return src("html/**/*.html")
        .pipe(dest("dist/html/"));
}

function css() {
    return src("stylesheets/**/*.sass")
        .pipe(sass().on('error', sass.logError))
        .pipe(concat("all.css"))
        .pipe(dest("dist/stylesheets/"));
}

function php() {
    return src("index.php")
        .pipe(dest("dist/"));
}


exports.html = html;
exports.default = series(clean, parallel(php, html, css));