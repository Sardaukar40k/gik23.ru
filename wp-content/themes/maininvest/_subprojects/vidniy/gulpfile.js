var gulp = require('gulp'),
    sass = require('gulp-sass'),
    concat = require('gulp-concat'),
    uglify = require('gulp-uglify'),
    autoprefixer = require('gulp-autoprefixer'),
    imagemin = require('gulp-imagemin'),
    rename = require('gulp-rename'),
    notify = require('gulp-notify');


gulp.task('sass', function () {
  return gulp.src(['scss/states/_variables.scss', 'scss/utilities/_*.scss', 'scss/states/_*.scss', 'scss/base/_*.scss', 'scss/layouts/_*.scss', 'scss/modules/_*.scss'])
    .pipe(concat('style.scss'))
    .pipe(autoprefixer({
      "browsers": ["firefox >= 15", "ios >= 8", "android >= 4.0", "and_uc >= 9.9", "ie >= 9"]
    }))
    .pipe(sass({ outputStyle : 'compressed' }).on('error', sass.logError))
    .pipe(gulp.dest('./css/'))
    .pipe(notify('Sass Done!'));
});


gulp.task('scripts', function () {
  return gulp.src('js/_*.js')
    .pipe(concat('main.js'))
    .pipe(uglify())
    .pipe(gulp.dest('./js/'))
    .pipe(notify('Scripts Done!'));
});


gulp.task('watch', function() {
  gulp.watch('scss/*/_*.scss', ['sass']);
  gulp.watch('js/_*.js', ['scripts']);
});

gulp.task('default', ['sass', 'scripts', 'watch']);