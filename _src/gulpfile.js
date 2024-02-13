var gulp = require('gulp');
var watch = require('gulp-watch');
var rename = require('gulp-rename');
var concatJS = require('gulp-concat');
var uglify = require ('gulp-uglify');

gulp.task('concat-minify-js', function() {
    return gulp.src('./js/**/*.js')
        .pipe(concatJS('../assets/js/sb-front.js'))
        .pipe(uglify())
        .pipe(rename({ suffix: ".min" }))
        .pipe(gulp.dest('.'));
});

gulp.task( 'compiler', gulp.series( 'concat-minify-js' ) );

gulp.task('watch', function() {
    gulp.watch('./js/**/*.js', gulp.series( 'concat-minify-js' ));
});

gulp.task('default', gulp.series('compiler','watch'));