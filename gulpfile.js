var gulp = require('gulp'),
    livereload = require('gulp-livereload'),
    watch = require('gulp-watch');
    
gulp.task('default', function() {
  
});

gulp.task('watch', function() {
  var server = livereload();
  gulp.watch('./**').on('change', function(file) {
      server.changed(file.path);
  });
});
