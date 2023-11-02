const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const sourcemaps = require('gulp-sourcemaps');
const browserSync = require('browser-sync').create();
const cleanCSS = require('gulp-clean-css');

gulp.task('sass', function(done){
    gulp.src('./sass/style.scss')
        .pipe(sourcemaps.init())
        .pipe(sass().on('error', sass.logError))
        .pipe(sourcemaps.write())
        .pipe(cleanCSS({compatibility: 'ie11'}))
        .pipe(gulp.dest('../'))
        .pipe(browserSync.stream())
    done();
});

gulp.task('watch', function(){
    gulp.watch('./sass/*', gulp.series('sass')).on(
        'change',
        browserSync.reload
    );
});