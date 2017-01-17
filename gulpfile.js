var gulp = require('gulp'),
	autoprefixer = require('gulp-autoprefixer'),
    sass = require('gulp-sass'),
    rename = require('gulp-rename'),
    cleanCSS = require('gulp-clean-css'),
    concat = require('gulp-concat'),
    uglify = require('gulp-uglify'),
    pump = require('pump'),
    imagemin = require('gulp-imagemin'),
    livereload = require('gulp-livereload'),
    connect = require('gulp-connect'),
    watch = require('gulp-watch');

gulp.task('html', function () {
    return gulp.src(['./index.html/index.html'])
    .pipe(connect.reload());
});

gulp.task('css', function() {
   return gulp.src('./css/src/main.scss')
   .pipe(sass().on('error', sass.logError))
   .pipe(autoprefixer({
            browsers: ['last 5 versions', 'IE >= 9']
    }))
   .pipe(gulp.dest('./css/dist'))
   // .pipe(concatCSS('main.css'))
   // .pipe(uncss({
   //      html: ['index.html']
   //  }))
   .pipe( cleanCSS() )
   .pipe(rename ('main.min.css') )
   .pipe(gulp.dest('./css/dist'));
   // .pipe(connect.reload());
});

gulp.task('scripts', function() {
  return gulp.src('./js/src/main.js')
    // .pipe(concat('main.js'))
    .pipe(uglify())
    .pipe(rename('main.min.js'))
    .pipe(gulp.dest('./js/dist'));
    // .pipe(connect.reload());
});

gulp.task('imagemin', function() {
    gulp.src('./img/*.*')
        .pipe(imagemin())
        .pipe(gulp.dest('./img/dist'));
});

gulp.task('connect', function() {
  connect.server({
    // root: 'app',
    livereload: true,
    port: 7070
  });
});

gulp.task('watch', function () {
        gulp.watch(['./index.html/index.html', './css/src/main.scss'], ['html', 'css']);
});

gulp.task('default', ['connect', 'html', 'css', 'scripts', 'watch']);
