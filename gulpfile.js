// Load dependencies
var gulp = require('gulp' ),
    sass = require('gulp-ruby-sass'),
    autoprefixer = require('gulp-autoprefixer'),
    livereload = require('gulp-livereload'),
    sourcemaps = require('gulp-sourcemaps');

// Config variables
var config = new (function(){
  this.package = 'wp-content/themes/julialandauer/',
  this.sass_dir = this.package + 'sass',
  this.css_dir = this.package,
  this.js_dir = this.package + 'js';
})();

// Register tasks
gulp.task('styles', function() {
    return sass(config.sass_dir,
        {
            sourcemap: true,
            style: 'expanded'
        })
        .on('error', function (err) {
            console.error('Error!', err.message);
        })
        .pipe(autoprefixer({
            browsers: ['last 2 version', 'ios 6', 'android 4'],
            cascade: false
        }))
        .on('error', function (err) {
          console.error('Error', err.message);
        })
        .pipe(sourcemaps.write('./', {
          includeContent: false,
          sourceRoot: config.sass_dir
        }))
        .pipe(gulp.dest(config.css_dir));
});

gulp.task('watch', function() {
    // Create a LiveReload server
    var lr = livereload;
    lr.listen();

    // Compile SCSS
    gulp.watch(config.sass_dir + '/*.scss', ['styles']);
      // Subfolder files
    gulp.watch(config.sass_dir + '/*/*.scss', ['styles']);
      // Sub Subfolders
    gulp.watch(config.sass_dir + '/*/*/*.scss', ['styles']);

    // Live Reload
    gulp.watch(config.css_dir + '/style.css', lr.changed);
    gulp.watch(config.package + '/*.php', lr.changed);
    gulp.watch(config.js_dir + '/*.js', lr.changed);
});

gulp.task('default', ['styles', 'watch']);