const gulp = require('gulp');
const watch = require('gulp-watch');
const rename = require('gulp-rename');
const concatCSS = require('gulp-concat-css');
const cleanCSS = require('gulp-clean-css');
const scss = require('gulp-sass')(require('node-sass'));
const concatJS = require('gulp-concat');
const uglify = require ('gulp-uglify');


// Compile admin styles
gulp.task('scss-admin', function () {
    return gulp.src('./scss/admin/**/*.scss', { allowEmpty: true }) // Add allowEmpty here
        .pipe(scss().on('error', scss.logError))
        .pipe(gulp.dest('./css/admin/'));
});

// Compile front styles
gulp.task('scss-front', function () {
    return gulp.src('./scss/front/**/*.scss', { allowEmpty: true }) // Add allowEmpty here
        .pipe(scss().on('error', scss.logError))
        .pipe(gulp.dest('./css/front/'));
});

// Concatenate admin styles into a singular CSS file
gulp.task('concat-css-admin', function() {
    return gulp.src('./css/admin/**/*.css', { allowEmpty: true }) // Add allowEmpty here
        .pipe(concatCSS('../assets/css/dev/sb-admin.css'))
        .pipe(gulp.dest('.'));
});

// Concatenate front styles into a singular CSS file
gulp.task('concat-css-front', function() {
    return gulp.src('./css/front/**/*.css', { allowEmpty: true }) // Add allowEmpty here
        .pipe(concatCSS('../assets/css/dev/sb-front.css'))
        .pipe(gulp.dest('.'));
});

// Minify admin CSS file
gulp.task('minify-css-admin', function() {
    return gulp.src('../assets/css/dev/sb-admin.css', { allowEmpty: true }) // Add allowEmpty here
        .pipe(cleanCSS({ compatibility: 'ie8' }))
        .pipe(rename({ suffix: ".min" }))
        .pipe(gulp.dest('../assets/css/production'));
});

// Minify front CSS file
gulp.task('minify-css-front', function() {
    return gulp.src('../assets/css/dev/sb-front.css', { allowEmpty: true }) // Add allowEmpty here
        .pipe(cleanCSS({ compatibility: 'ie8' }))
        .pipe(rename({ suffix: ".min" }))
        .pipe(gulp.dest('../assets/css/production'));
});

// Concatenate & minify JS
gulp.task('concat-minify-js', function() {
    return gulp.src('./js/**/*.js')
        .pipe(concatJS('../assets/js/sb-front.js'))
        .pipe(uglify())
        .pipe(rename({ suffix: ".min" }))
        .pipe(gulp.dest('.'));
});


// Compiler task for admin and front
gulp.task('compiler', gulp.series(
    // 'scss-admin', 
    // 'concat-css-admin', 
    // 'minify-css-admin', 
    // 'scss-front', 
    // 'concat-css-front', 
    // 'minify-css-front',
    'concat-minify-js'
));

gulp.task('watch', function() {
    // gulp.watch('./scss/admin/**/*.scss', gulp.series(
    //     'scss-admin', 
    //     'concat-css-admin', 
    //     'minify-css-admin'
    // ));
    // gulp.watch('./scss/front/**/*.scss', gulp.series(
    //     'scss-front', 
    //     'concat-css-front', 
    //     'minify-css-front'
    // ));
    gulp.watch('./js/**/*.js', gulp.series( 'concat-minify-js' ));
});

gulp.task('default', gulp.series(
    'compiler', 
    'watch'
));