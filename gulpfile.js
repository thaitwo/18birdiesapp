var gulp = require('gulp');
var sass = require('gulp-sass');
var livereload = require('gulp-livereload');


// sass
gulp.task('sass', function () {
  return gulp.src('./sass/**/*.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('./'))
    .pipe(livereload());
});

// watches sass
gulp.task('watch', function() {
	console.log('working');
    gulp.watch('sass/**/*.scss', ['sass']);
    livereload.listen();
});


// default
gulp.task('default', function() {
  // place code here
});