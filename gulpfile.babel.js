//const GulpClient = require("gulp");

//function defaultTask(cb) {
  // place code for your default task here
  
  //cb();
//}

//exports.default = defaultTask;

import gulp from "gulp";
import yargs from "yargs";
import dartSass from "sass";
import gulpSass from "gulp-sass";
import cleanCSS from 'gulp-clean-css';
import gulpif from 'gulp-if';
import sourcemaps from 'gulp-sourcemaps';

const sass = gulpSass(dartSass);


const PRODUCTION = yargs.argv.prod;

export const styles = () => {
  return gulp
    .src(["src/assets/scss/bundle.scss", "src/assets/scss/admin.scss"])
    .pipe(gulpif(!PRODUCTION, sourcemaps.init()))
    .pipe(sass().on("error", sass.logError))
    .pipe(gulpif(PRODUCTION, cleanCSS({ compatibility: "ie8" })))
    .pipe(gulpif(!PRODUCTION, sourcemaps.write()))
    .pipe(gulp.dest("dist/assets/css"));
};

//export default hello;