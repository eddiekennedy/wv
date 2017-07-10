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
    gulp.dest('./dist/js')
  ],
    cb
  );
});

// copy images task
gulp.task('copy-images', function() {
  gulp.src('./src/images/*.{gif,jpg,png,svg}')
    .pipe(gulp.dest('./dist/images'));
});

// copy templates task
gulp.task('copy-templates', function() {
  gulp.src('./src/templates/**/*')
    .pipe(gulp.dest('./dist'));
});

// watch task
gulp.task('watch', function () {
  gulp.watch(['./src/styles/**/*.scss'], ['styles']);
  gulp.watch(['./src/scripts/*.js'], ['scripts']);
  gulp.watch(['./src/images/*.{gif,jpg,png,svg}'], ['copy-images']);
  gulp.watch(['./src/templates/**/*'], ['copy-templates']);
});

// default task
gulp.task('default', [
  'styles',
  'scripts',
  'copy-images',
  'copy-templates',
  'watch'
]);
