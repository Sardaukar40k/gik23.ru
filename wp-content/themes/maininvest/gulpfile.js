var gulp = require('gulp'),
    sass = require('gulp-sass'),
    concat = require('gulp-concat'),
    uglify = require('gulp-uglify'),
    jshint = require('gulp-jshint'),
    notify = require('gulp-notify'),
    rename = require('gulp-rename'),
    minifyCss = require('gulp-minify-css'),
    prefixer = require('gulp-autoprefixer');

/* --- Сборка файла style.css ---*/
gulp.task('sass', function () {
  gulp.src(['src/scss/states/_*.scss', 'src/scss/utilities/_*.scss', 'src/scss/base/_*.scss', 'src/scss/layout/_*.scss', 'src/scss/modules/_*.scss'])
    .pipe(concat('style.scss'))
    .pipe(sass({outputStyle : 'expended'}).on('error', sass.logError))
    .pipe(prefixer({ browsers: ['last 10 versions'] }))
    .pipe(minifyCss())
    .pipe(gulp.dest('./'))
    .pipe(notify('SASS done!'))
});
/* --- /Сборка файла style.css ---*/

/* --- Сборка файла main.js --- */
gulp.task('scripts', function () {
  gulp.src('src/js/*.js')
    .pipe(concat('main.js'))
    .pipe(uglify())
    .pipe(gulp.dest('./'))
    .pipe(notify('Scripts done!'))
});
/* --- /Сборка файла main.js --- */

/* ----- Подпроекты ----- */

/* - Старокубанский sass - */
gulp.task('star-sass', function () {
  gulp.src(['_subprojects/starokubanskiy/scss/states/_*.scss','_subprojects/starokubanskiy/scss/base/_*.scss', '_subprojects/starokubanskiy/scss/layouts/_*.scss', '_subprojects/starokubanskiy/scss/modules/_*.scss'])
    .pipe(concat('starokuban.scss'))
    .pipe(sass({outputStyle : 'expended'}).on('error', sass.logError))
    .pipe(prefixer({ browsers: ['last 10 versions'] }))
    .pipe(gulp.dest('_subprojects/starokubanskiy/css/'))
    .pipe(notify('Starokuban Sass Done!'))
});
/* - /Старокубанский sass - */

/* - Старокубанский scripts - */
gulp.task('star-scripts', function () {
  gulp.src('_subprojects/starokubanskiy/js/src/_*.js')
    .pipe(concat('starokuban.js'))
    .pipe(uglify())
    .pipe(gulp.dest('_subprojects/starokubanskiy/js/'))
    .pipe(notify('Starokuban Scripts Done!'))
});
/* - /Старокубанский scripts - */

/* - Подсолнухи sass - */
gulp.task('podsolnuhi-sass', function () {
  gulp.src(['_subprojects/podsolnuhi/scss/states/_*.scss', '_subprojects/podsolnuhi/scss/utilities/_*.scss','_subprojects/podsolnuhi/scss/base/_*.scss', '_subprojects/podsolnuhi/scss/layouts/_*.scss', '_subprojects/podsolnuhi/scss/modules/_*.scss'])
    .pipe(concat('podsolnuhi.scss'))
    .pipe(sass({outputStyle : 'expended'}).on('error', sass.logError))
    .pipe(prefixer({ browsers: ['last 10 versions'] }))
    .pipe(gulp.dest('_subprojects/podsolnuhi/css/'))
    .pipe(notify('Podsolnuhi Sass Done!'))
});
/* - /Подсолнухи sass - */

/* - Подсолнухи scripts - */
gulp.task('podsolnuhi-scripts', function () {
  gulp.src('_subprojects/podsolnuhi/js/src/_*.js')
    .pipe(concat('podsolnuhi.js'))
    .pipe(uglify())
    .pipe(gulp.dest('_subprojects/podsolnuhi/js/'))
    .pipe(notify('Podsolnuhi Scripts Done!'))
});
/* - /Подсолнухи scripts - */

/* - Времена года sass - */
gulp.task('vremena-sass', function () {
  gulp.src(['_subprojects/vremena_goda/scss/states/_*.scss','_subprojects/vremena_goda/scss/base/_*.scss', '_subprojects/vremena_goda/scss/layouts/_*.scss', '_subprojects/vremena_goda/scss/modules/_*.scss'])
    .pipe(concat('vremena.scss'))
    .pipe(sass({outputStyle : 'expended'}).on('error', sass.logError))
    .pipe(prefixer({ browsers: ['last 10 versions'] }))
    .pipe(gulp.dest('_subprojects/vremena_goda/css/'))
    .pipe(notify('Vremena goda Sass Done!'))
});
/* - /Времена года sass - */

/* - Времена года scripts - */
gulp.task('vremena-scripts', function () {
  gulp.src('_subprojects/vremena_goda/js/src/_*.js')
    .pipe(concat('vremena.js'))
    .pipe(uglify())
    .pipe(gulp.dest('_subprojects/vremena_goda/js/'))
    .pipe(notify('Vremena goda Scripts Done!'))
});
/* - /Времена года scripts - */

/* --- /Подпроекты --- */

/* --- Вотчеры --- */
gulp.task('watch', function () {
  gulp.watch(['src/scss/*/_*.scss', 'src/scss/index.scss'], ['sass']);
  gulp.watch('src/js/*.js', ['scripts']);
  gulp.watch('_subprojects/starokubanskiy/scss/*/_*.scss', ['star-sass']);
  gulp.watch('_subprojects/starokubanskiy/js/src/_*.js', ['star-scripts']);
  gulp.watch('_subprojects/podsolnuhi/scss/*/_*.scss', ['podsolnuhi-sass']);
  gulp.watch('_subprojects/podsolnuhi/js/src/_*.js', ['podsolnuhi-scripts']);
  gulp.watch('_subprojects/vremena_goda/scss/*/_*.scss', ['vremena-sass']);
  gulp.watch('_subprojects/vremena_goda/js/src/_*.js', ['vremena-scripts']);

});

gulp.task('default', ['sass', 'scripts', 'star-sass', 'star-scripts', 'podsolnuhi-sass', 'podsolnuhi-scripts', 'vremena-sass', 'vremena-scripts', 'watch']);


/* --- /Вотчеры --- */