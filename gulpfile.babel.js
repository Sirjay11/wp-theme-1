//const GulpClient = require("gulp");

//function defaultTask(cb) {
  // place code for your default task here
  
  //cb();
//}

//exports.default = defaultTask;

import gulp from "gulp";
import yargs from "yargs";

const sass = require("gulp-sass")(require("node-sass"));

const PRODUCTION = yargs.argv.prod;

export const styles = () => {
  return gulp
    .src("src/assets/scss/bundle.scss")
    .pipe(sass().on("error", sass.logError))
    .pipe(gulp.dest("dist/assets/css"));
};

//export default hello;