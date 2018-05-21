const gulp = require('gulp');
const concat = require('gulp-concat');
const browserSync = require('browser-sync').create();

/**
 * Copy all .PHP files
 */
gulp.task('php', () => {
    gulp.src('src/**/*.php')
        .pipe(gulp.dest('dist/'));
});

/**
 * Copy all CSS files
 */
gulp.task('css', () => {
    gulp.src('src/css/**/*.css')
        .pipe(concat('style.css'))
        .pipe(gulp.dest('dist/'))
        .pipe(browserSync.stream());
});

/**
 * Copy all JS files
 */
gulp.task('js', () => {
    gulp.src('src/js/*.js')
        .pipe(concat('main.js'))
        .pipe(gulp.dest('dist/'));
});

/**
 * Ensure that the js file is complete before reloading
 */
gulp.task('js-watch', ['js'], (done) => {
    browserSync.reload();
    done();
});

/**
 * Create the Developer server
 */
gulp.task('server', ['php', 'css'], () => {
    browserSync.init({
        proxy: 'http://localhost/Portfolio/playlana-website/'
    });

    gulp.watch('src/**/*.php', ['php']).on('change', browserSync.reload);
    gulp.watch('src/css/**/*.css', ['css']);
    gulp.watch('src/js/*.js', ['js-watch']);
});

gulp.task('default', ['server']);