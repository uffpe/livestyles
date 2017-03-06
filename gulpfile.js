/* gulpfile.js */
var
    gulp = require('gulp'),
    sass = require('gulp-sass');

// source and distribution folder
var
    source = 'src/',
    dest = 'dist/';

// Bootstrap scss source
var bootstrapSass = {
    in: './node_modules/bootstrap-sass/'
};

// FontAwesome fonts source
var fontAwesome = {
    in: './node_modules/font-awesome/'
};

// Bootstrap fonts source
var fonts = {
    // in: [source + 'fonts/*.*', bootstrapSass.in + 'assets/fonts/**/*'],
    in: [source + 'fonts/*.*', fontAwesome.in + 'fonts/**.*'],
    out: dest + 'fonts/'
};

// Our scss source folder: .scss files
var scss = {
    in: source + 'scss/main.scss',
    out: dest + 'css/',
    watch: source + 'scss/**/*',
    sassOpts: {
        outputStyle: 'nested',
        precison: 3,
        errLogToConsole: true,
        includePaths: [bootstrapSass.in + 'assets/stylesheets', fontAwesome.in + 'scss']
    }
};

// copy bootstrap required fonts to dest
gulp.task('fonts', function () {
    return gulp
        .src(fonts.in)
        .pipe(gulp.dest(fonts.out));
});

// compile scss
gulp.task('sass', ['fonts'], function () {
    return gulp.src(scss.in)
        .pipe(sass(scss.sassOpts))
        .pipe(gulp.dest(scss.out));
});

// default task
gulp.task('default', ['sass', 'fonts']);

// Rerun the task when a file changes
gulp.task('watch', function() {
    gulp.watch(scss.watch, ['sass']);
});