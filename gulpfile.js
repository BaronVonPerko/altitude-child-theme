var gulp        = require("gulp"),
    browserSync = require("browser-sync"),
    concatCss   = require("gulp-concat-css"),
    cleanCss    = require("gulp-clean-css"),
    del         = require("del");
    
    
gulp.task('sync', function() {
    var files = ['**/*.css', '**/**.php'];
    
    browserSync.init(files, {
        port: 8082, // c9.io only
        injectChanges: true,
        notify: false
    });
});

gulp.task('css', function() {
    gulp.src('inc/**/*.css')
        .pipe(concatCss('custom.css'))
        .pipe(gulp.dest('inc/css/'));

    return gulp.src('inc/css/custom.css')
        .pipe(cleanCss({compatibility: 'ie8'}, function() {
            clean();
        }))
        .pipe(gulp.dest('dist'));
});


function clean() {
    setTimeout(function() {
        return del(['inc/css/custom.css']);
    }, 1000);
};