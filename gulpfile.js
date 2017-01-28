var gulp        = require("gulp"),
    browserSync = require("browser-sync"),
    concatCss   = require("gulp-concat-css"),
    cleanCss    = require("gulp-clean-css"),
    del         = require("del");
    
    
gulp.task('sync', ['css'], function() {
    var files = ['**/*.css', '**/**.php', '**/**.js'];
    
    browserSync.init(files, {
        proxy: 'http://localhost/chrisperko', // WAMP local only
        port: 8082, // c9.io only
        injectChanges: true,
        notify: false
    });

    gulp.watch('./inc/css/*.css', ['css']);
    gulp.watch('./**/*.php').on('change', browserSync.reload);
});


gulp.task('css', function() {
    gulp.src('inc/**/*.css')
        .pipe(concatCss('custom.css'))
        .pipe(gulp.dest('inc/css/'));

    return gulp.src('inc/css/custom.css')
        .pipe(cleanCss({compatibility: 'ie8'}))
        .pipe(gulp.dest('dist'))
        .pipe(browserSync.stream());
});

function clean() {
    setTimeout(function() {
        return del(['inc/css/custom.css']);
    }, 1000);
};