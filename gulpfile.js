var gulp = require('gulp');
var sass = require('gulp-sass');

// sass task
gulp.task('sass', function () {
  gulp.src('./src/styles/**/*.scss')
    .pipe(sass({
      //outputStyle: 'compressed'
    }).on('error', sass.logError))
    .pipe(gulp.dest('./dist/css'));
});

// watch task
gulp.task('watch', function () {
  gulp.watch(['./src/styles/**/*.scss'], ['sass']);
});

// default task
gulp.task('default', ['sass', 'watch']);
