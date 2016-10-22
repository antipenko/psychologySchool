var gulp = require('gulp');
var sass = require('gulp-sass');


gulp.task('sass', function () {
  return gulp.src('./development/styles/style.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('./'));
});

gulp.task('default', function() {

});







































// 'use strict';
//  /* * * Объявляем переменные * */ 
//  var gulp = require('gulp'), 
//  	sass = require('gulp-sass'), 
//  	watch = require('gulp-watch'), 
//  	sourcemaps = require('gulp-sourcemaps'), 
//  	autoprefixer = require('gulp-autoprefixer'), 
//  	spritesmith = require('gulp.spritesmith'),
//  	imagemin = require('gulp-imagemin'),
//  	livereload = require('livereload'),
// 	browserSync = require('browser-sync').create(),
// 	reload      = browserSync.reload,
//  	rename = require("gulp-rename");

// gulp.task('sass', function () {
//  return gulp.src('/scss/**/*.scss')
//   .pipe(sourcemaps.init())
//   .pipe(sass().on('error', sass.logError))
//   .pipe(sourcemaps.write())
//   .pipe(gulp.dest('/css'))
//   .pipe(browserSync.stream());
// });

// gulp.task('serve',function () {
//     // Serve files from the root of this project
//     browserSync({
//         notify: false,
//         ui: false,
//         proxy: 'http://localhost/psihoschool/'
//     });
// });

// gulp.task('default', ['serve', 'sass'], function() {
// 	gulp.watch('/scss/**/*.scss', ['sass']);
// 	gulp.watch("/*.php").on("change", reload);
//     // gulp.watch('js/**/*.js').on("change", reload); // Наблюдение за JS файлами в папке js
// });
