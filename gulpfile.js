require('dotenv').config()

const gulp = require('gulp')
const sass = require('gulp-dart-sass')
const sourcemaps = require('gulp-sourcemaps')
const browserSync = require('browser-sync').create()
const stylelint = require('gulp-stylelint')

//File Paths
const sassPartials = 'src/scss/**/*.scss'
const compileFiles = ['src/scss/style.scss', 'src/scss/editor.scss']
const cssFiles = '.'
const sourceMaps = '/src/maps'
const themeFiles = [
	'./*.php',
	'./**/*.php',
]

gulp.task('sass', () => {
	return gulp.src(compileFiles)
		.pipe(stylelint({
			failAfterError: false,
			reportOutputDir: false,
			fix: true,
			reporters: [
				{
					formatter: 'verbose',
					console: true
				}
			]
		}))
		.pipe(sourcemaps.init())
		.pipe(sass().on('error', sass.logError))
		.pipe(sourcemaps.write(sourceMaps))
		.pipe(gulp.dest(cssFiles))
		.pipe(browserSync.stream())
})

gulp.task('serve', () => {
	browserSync.init({
		port: process.env.PORT || 3000,
		proxy: process.env.WP_URL,
		notify: false,
		injectChanges: true,
		open: false,
	})

	gulp.watch(sassPartials, gulp.series('sass'))
	gulp.watch(themeFiles).on('change', browserSync.reload)
})

gulp.task('default', gulp.series('serve'))