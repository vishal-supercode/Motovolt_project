import gulp from 'gulp';
import gulpSass from 'gulp-sass';
import dartSass from 'sass';
import rename from 'gulp-rename';
import cleanCSS from 'gulp-clean-css';
import autoprefixer from 'gulp-autoprefixer';
import sourcemaps from 'gulp-sourcemaps';
import concat from 'gulp-concat';
import terser from 'gulp-terser';  

// Initialize SASS Compiler (Dart Sass for speed)
const sass = gulpSass(dartSass);

// Paths 
const paths = {
  scss: './src/scss/app.scss',  // Entry file
  scssWatch: './src/scss/**/*.scss',
  js: './src/js/app.js',  // Entry; add more like ['./src/js/*.js'] for multi-file
  jsWatch: './src/js/*.js',
  cssDest: './dist/css/',
  jsDest: './dist/js/'
};

// CSS Task: Compile, prefix, minify + sourcemaps
export const minifycss = () => {
  return gulp.src(paths.scss)
    .pipe(sourcemaps.init())
    .pipe(sass().on('error', sass.logError))  // Compile SCSS, handle errors
    .pipe(autoprefixer())  // Prefix *before* minify
    .pipe(gulp.dest(paths.cssDest))  // Write expanded
    .pipe(cleanCSS())  // Minify
    .pipe(rename('app.min.css'))  // Rename *after* minify
    .pipe(sourcemaps.write('./'))
    .pipe(gulp.dest(paths.cssDest));  // Write minified + maps
};

// JS Task: Concat, minify + sourcemaps
export const minifyscripts = () => {
  return gulp.src(paths.js)
    .pipe(sourcemaps.init())  // Init *before* processing
    .pipe(concat('app.js'))  // Concat
    .pipe(gulp.dest(paths.jsDest))  // Write unminified
    .pipe(terser())  // Minify (added from your deps)
    .pipe(rename('app.min.js'))
    .pipe(sourcemaps.write('./'))
    .pipe(gulp.dest(paths.jsDest));  // Write minified + maps
};

// Watch Task
export const watch = () => {
  gulp.watch(paths.scssWatch, gulp.series(minifycss));
  gulp.watch(paths.jsWatch, minifyscripts);
};

// Build Task: Parallel
export const build = gulp.parallel(minifycss, minifyscripts);

// Default: Build + Watch
export default gulp.series(build, watch);