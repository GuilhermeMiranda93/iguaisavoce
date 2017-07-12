var gulp = require('gulp');
var browserSync = require('browser-sync');
var $ = require('gulp-load-plugins')();

gulp.task('uglify',function(){
	return gulp.src('./js/*.js')
	.pipe($.uglify())
	.pipe(gulp.dest('./js/min'));
});

gulp.task('sass',function(){
	return gulp.src('./css/*.scss')
	.pipe($.sass.sync().on('error',$.sass.logError))
	.pipe(gulp.dest('./css'));
});

gulp.task('minifycss',function(){
	return gulp.src('./css/*.css')
	.pipe($.csso())
	.pipe(gulp.dest('./css/min'));
});

gulp.task('browser-sync', function() {
    browserSync.init({
        server: {
            baseDir: ""
        }
    });
});

gulp.task('finish', ['uglify','sass','minifycss']);

gulp.task('dev',['sass','browser-sync'],function(){
	gulp.watch('css/*.scss',['sass']);
	gulp.watch('*',browserSync.reload);
	gulp.watch('js/*.js',browserSync.reload);
	gulp.watch('css/*.scss',browserSync.reload);
});