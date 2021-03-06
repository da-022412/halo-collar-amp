var gulp = require('gulp');
var sass = require('gulp-sass');

gulp.task('sass', function(){
    return gulp.src('./src/scss/**/*.scss')
      .pipe(sass({outputStyle: 'compressed'}))
      .pipe(gulp.dest('./dist/css'))
});

gulp.task('default', gulp.series('sass'));