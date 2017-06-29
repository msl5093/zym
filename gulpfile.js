var gulp = require('gulp');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var cleanCSS = require('gulp-clean-css');

var vendorCss = [
	'node_modules/bootstrap/dist/css/bootstrap.css',
	'node_modules/fullcalendar/dist/fullcalendar.css'
];

var vendorJs = [
	'node_modules/jquery/dist/jquery.js',
	'node_modules/bootstrap/dist/js/bootstrap.js',
	'node_modules/moment/moment.js',
	'node_modules/jquery.easing/jquery.easing.js',
	'node_modules/fittext/dist/jquery.fittext.js',
	'node_modules/wowjs/dist/wow.js',
	'node_modules/fullcalendar/dist/fullcalendar.js'
];

var vendorFonts = [
	'node_modules/bootstrap/dist/fonts/glyphicons-halflings-regular.eot',
    'node_modules/bootstrap/dist/fonts/glyphicons-halflings-regular.svg',
    'node_modules/bootstrap/dist/fonts/glyphicons-halflings-regular.ttf',
    'node_modules/bootstrap/dist/fonts/glyphicons-halflings-regular.woff',
    'node_modules/bootstrap/dist/fonts/glyphicons-halflings-regular.woff2'
];

gulp.task('utils-js', function () {
	gulp.src(vendorJs)
		.pipe(concat('utils.js'))
		.pipe(uglify())
		.pipe(gulp.dest('./dist/js/'))
});

gulp.task('app-js', function () {
	gulp.src(['js/**/*.js'])
		.pipe(concat('app.js'))
		.pipe(uglify())
		.pipe(gulp.dest('./dist/js/'))
});

gulp.task('utils-css', function () {
	gulp.src(vendorCss)
		.pipe(concat('utils.css'))
		.pipe(cleanCSS({ compatibility: 'ie8' }))
		.pipe(gulp.dest('./dist/css/'))
});

gulp.task('app-css', function () {
	gulp.src(['css/**/*.css'])
		.pipe(concat('app.css'))
		.pipe(cleanCSS({ compatibility: 'ie8' }))
		.pipe(gulp.dest('./dist/css/'))
});

gulp.task('populateFonts', function () {
    gulp.src(vendorFonts)
        .pipe(gulp.dest('./dist/fonts/'));
});

//watch
gulp.task('watch', function () {
    gulp.watch('./css/**/*.{css}', ['app-css']);
    gulp.watch('js/**/*.js', ['app-js']);
});

gulp.task('build', ['utils-css', 'app-css', 'utils-js', 'app-js', 'populateFonts']);