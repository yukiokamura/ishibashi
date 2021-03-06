var gulp = require("gulp");
var sass = require("gulp-sass");
var config = require("../config").sass;
var autoprefixer = require("gulp-autoprefixer");
var sourcemaps = require("gulp-sourcemaps");
var cssmin = require("gulp-cssmin");
const sassGlob = require("gulp-sass-glob");

gulp.task("sass", function() {
  gulp
    .src(config.src)
    .pipe(sassGlob())
    .pipe(sourcemaps.init())
    .pipe(sass().on("error", sass.logError))
    .pipe(autoprefixer(config.prefixer))
    .pipe(sourcemaps.write())
    .pipe(gulp.dest(config.dest));
});

gulp.task("sass-min", function() {
  return gulp
    .src(config.src)
    .pipe(sassGlob())
    .pipe(sass().on("error", sass.logError))
    .pipe(autoprefixer(config.prefixer))
    .pipe(cssmin())
    .pipe(gulp.dest(config.dest));
});
