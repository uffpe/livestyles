var gulp        = require('gulp'),
    sass        = require('gulp-sass');
    browserSync = require('browser-sync').create(),

// Static server
gulp.task('browser-sync', function() {
    browserSync.init({
        server: {
            baseDir: "./"
        }
    });
    // browserSync.init({
    //     proxy: "localhost:9000"
    // });
});

gulp.task('styles', function() {
    gulp.src('src/sass/**/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('./dist/css/'))
});

//Watch task
gulp.task('default',function() {
    gulp.watch('src/sass/**/*.scss',['styles']);
});