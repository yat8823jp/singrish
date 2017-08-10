'use strict';

import gulp from 'gulp';
import rev from 'gulp-rev';

gulp.task( 'rev', () => {
  return gulp.src( [
		'./js/**/*.js',
		'./**/*.css',
		'./**/*png',
		'./**/*gif',
		'./**/*jpg',
		'./**/*jpeg',
		'./**/*svg',
		'./**/*woff',
		"!./node_modules/**/*.*"
	],
		{ base: './' }
	)
 //  	.pipe( gulp.src( './js/**/*.js' ) )
    .pipe( rev() )
    .pipe( gulp.dest( './' ) )
    .pipe( rev.manifest( './manifest.json' ) )
    .pipe( gulp.dest( './manifest/' ) );
} );
