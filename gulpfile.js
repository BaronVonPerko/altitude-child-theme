var gulp        = require("gulp"),
    browserSync = require("browser-sync");
    
    
gulp.task('sync', function() {
    var files = ['**/*.css', '**/**.php'];
    
    browserSync.init(files, {
        port: 8082, // c9.io only
        // injectChanges: true,
        notify: false
    });
});