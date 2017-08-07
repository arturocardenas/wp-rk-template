// gulp packages
var gulp = require('gulp'),
	  gutil = require('gulp-util');

// default task log message
gulp.task('default', function() {
	// code for default task
	return gutil.log('Gulp is running!');
});