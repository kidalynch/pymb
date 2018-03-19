var gulp         = require('gulp'),
    sass         = require('gulp-sass'),
    cleanCSS     = require('gulp-clean-css'),
    sourcemaps   = require('gulp-sourcemaps'),
    autoprefixer = require('gulp-autoprefixer'),
    browserSync  = require('browser-sync').create();

var config = require('./src/etc/config.local.json');

gulp.task('browser-sync', function () {
  browserSync.init(config);
});

gulp.task('serve', ['browser-sync', 'styles', 'js'], function () {
  gulp.watch('./src/scss/*.scss', ['styles']);
  gulp.watch('./src/js/*.js', ['js-watch']);
  gulp.watch('./*.php').on('change', browserSync.reload);
});

gulp.task('js', function () {
  gulp.src([
    'node_modules/jquery/dist/jquery.min.js',
    'node_modules/bootstrap/dist/js/bootstrap.bundle.min.js',
    'node_modules/js-offcanvas/dist/_js/js-offcanvas.pkgd.min.js',
    'node_modules/tether/dist/js/tether.min.js',
    'node_modules/wow.js/dist/wow.min.js',
    'src/js/custom.js'
  ])
    .pipe(gulp.dest('./build/js'))
});

// create a task that ensures the `js` task is complete before
// reloading browsers
gulp.task('js-watch', ['js'], function (done) {
  browserSync.reload();
  done();
});

gulp.task('styles', function () {
  gulp.src([
    'node_modules/animate.css/animate.min.css',
    'node_modules/bootstrap/dist/css/bootstrap.min.css',
    'node_modules/js-offcanvas/dist/_css/minified/js-offcanvas.css',
    'src/css/fontawesome-all.min.css'
  ])
    .pipe(gulp.dest('./build/css'));

  gulp.src('./src/scss/**/*.scss')
    .pipe(sourcemaps.init())
    .pipe(sass().on('error', sass.logError))
    .pipe(autoprefixer({
      browsers : ['last 2 versions'],
      cascade  : false
    }))
    .pipe(cleanCSS({
      compatibility : 'ie9'
    }))
    .pipe(sourcemaps.write('./'))
    .pipe(gulp.dest('./build/css'))
    .pipe(browserSync.stream())
});

gulp.task('default', ['serve']);