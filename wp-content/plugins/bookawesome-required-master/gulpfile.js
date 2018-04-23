var gulp        = require('gulp');
var browserSync = require('browser-sync');
var sass        = require('gulp-sass');
var php         = require('gulp-connect-php');
var minify      = require('gulp-minify');

gulp.task('js-complie', function() {
  gulp.src('src/backend/js/*.js')
    .pipe(minify({
        ext:{
            src:'-debug.js',
            min:'.min.js'
        },
        exclude: ['tasks'],
        ignoreFiles: ['.combo.js', '-min.js']
    }))
    .pipe(gulp.dest('assets/backend/js/'));

    gulp.src('src/frontend/js/*.js')
    .pipe(minify({
        ext:{
            src:'-debug.js',
            min:'.min.js'
        },
        exclude: ['tasks'],
        ignoreFiles: ['.combo.js', '-min.js']
    }))
    .pipe(gulp.dest('assets/frontend/js/'))
});
gulp.task('js-watch', ['js-complie'], browserSync.reload);

gulp.task('scss-complie', function() {
    gulp.src('src/backend/sass/*.scss')
        .pipe(sass())
        .pipe(gulp.dest('assets/backend/css/'));

    gulp.src('src/frontend/sass/*.scss')
        .pipe(sass())
        .pipe(gulp.dest('assets/frontend/css/'));

});

    // gulp.src('src/frontend/sass/*.scss')
    //     .pipe(sass())
    //     .pipe(gulp.dest('assets/frontend/css/'));

gulp.task('scss-watch', ['scss-complie'], browserSync.reload);

gulp.task('watch',[], function () {
    browserSync.init({
        proxy: 'http://localhost/bookawesome',
        files: ['{bookawesome,include,includes,inc,templates}/**/*.php', '*.php'],
        snippetOptions: {
            whitelist: ['/wp-admin/admin-ajax.php'],
          // blacklist: ['/wp-admin/**']
        }
      });
     gulp.watch(['*.php'], browserSync.reload);
     gulp.watch('src/backend/sass/**/*.scss', ['scss-watch']);
     gulp.watch('src/frontend/sass/**/*.scss', ['scss-watch']);
     gulp.watch('src/backend/js/*.js', ['js-watch']);
     gulp.watch('src/frontend/js/*.js', ['js-watch']);
});