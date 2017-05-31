var gulp = require('gulp');
var sass = require('gulp-sass');
var uglify = require('gulp-uglify');
var pump = require('pump');

// sass task
gulp.task('styles', function () {
  gulp.src('./src/styles/**/*.scss')
    .pipe(sass({
      //outputStyle: 'compressed'
    }).on('error', sass.logError))
    .pipe(gulp.dest('./dist/css'));
});

// js task
gulp.task('scripts', function (cb) {
  pump([
    gulp.src('src/scripts/*.js'),
    uglify(),
    gulp.dest('dist/js')
  ],
    cb
  );
});

// watch task
gulp.task('watch', function () {
  gulp.watch(['./src/styles/**/*.scss'], ['styles']);
});

// default task
gulp.task('default', ['styles', 'watch']);
