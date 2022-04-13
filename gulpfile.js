const { src, dest, watch, gulp } = require('gulp');
//const sass = require('gulp-sass')(require('node-sass'));
const sass = require('gulp-sass')(require('sass'));
const postcss = require('gulp-postcss');
const autoprefixer = require('autoprefixer');
const sourcemaps = require('gulp-sourcemaps');
const concat = require('gulp-concat');
const gutil = require('gulp-util');
const ftp = require('vinyl-ftp');
const debug = require('gulp-debug');

const paths = {
	styles: {
		src: 'scss/**/*.scss',
		dest: 'css/',
	},
	scripts: {
		src: 'js/**/*.js',
		dest: 'js/',
	},
};

function css() {
	// debug({ title: 'unicorn:' });
	return src('scss/**/*.{scss,sass}')
		.pipe(sourcemaps.init())
		.pipe(sass({ outputStyle: 'compressed' }).on('error', sass.logError))
		.pipe(postcss([autoprefixer()]))
		.pipe(sourcemaps.write('.'))
		.pipe(dest('css'));
}

function scripts() {
	return gulp.src(paths.scripts.src).pipe(concat('main.min.js')).pipe(gulp.dest(paths.scripts.dest));
}

function deploy() {
	var conn = ftp.create({
		user: '******************',
		password: '******************',
		host: '******************',
		dest: '******************',
		newer: './',
		// newerOrDifferentSize: '/themes/efamol/',
		port: 2222,
		parallel: 10,
		secure: true,
	});
	var globs = ['templates/*', 'inc/*', 'css/**', 'js/**', 'images_local/**', 'scss/**', '*.php'];
	return src(globs, {
		base: './',
		buffer: false,
	})
		.pipe(debug({ title: 'deploy:' }))
		.pipe(conn.newer('./'))
		.pipe(conn.dest('/themes/efamol/'));
}

function watcher(e) {
	watch('scss/**/*.{scss,sass}', css, () => {
		debug({ title: 'all done:' });
	});
}

exports.css = css;
// exports.deploy = deploy;
exports.watch = watcher;
