// FOR SASS
const sass = require('gulp-sass');
const autoprefixer = require('autoprefixer');
const cssnano = require('cssnano');
const postcss = require('gulp-postcss');
const sassGlob = require('gulp-sass-glob');
const mqpacker = require('css-mqpacker');
const normalize = require('postcss-normalize');
const postcssPresetEnv = require('postcss-preset-env');
const sortCSSmq = require('sort-css-media-queries');
// const sassImporter = require('sass-module-importer');
const packageImporter = require('node-sass-package-importer');
const size = require('gulp-size');

// FOR CSS
const cleanCSS = require('gulp-clean-css');

// FOR JS
const concat = require('gulp-concat');
const terser = require('gulp-terser');

// FOR IMAGE COMPRESSING
const mozjpeg = require('imagemin-mozjpeg')
const pngquant = require('imagemin-pngquant');
const imagemin = require('gulp-imagemin');

// FOR SOURCEMAPPING
const sourcemaps = require('gulp-sourcemaps');

// FOR CLEAN AND DELETE FILES
const clean = require('gulp-clean');

// FOR PATH
const path = require('path');

// CHECK FILE IF NEW
const newer = require('gulp-newer');

const {
    src,
    dest,
    watch,
    parallel,
    series,
    gulp
} = require('gulp');

const browserSync = require('browser-sync').create();
// ROOT PATH
const SRC_ROOT_PATH = "./";
const SRC_JS_PATH = path.resolve(SRC_ROOT_PATH, 'js/**/*.js');
const SRC_SCSS_PATH = path.resolve(SRC_ROOT_PATH, 'scss/**/*.scss');
const SRC_IMG_PATH = path.resolve(SRC_ROOT_PATH, "image/**/*");
// DESTINATION PATH
const DEST_ROOT_PATH = "../public/release";
const DEST_SCSS_PATH = path.resolve(DEST_ROOT_PATH, 'minified');
const DEST_JS_PATH = path.resolve(DEST_ROOT_PATH, 'uglified');
const DEST_IMG_PATH = path.resolve(DEST_ROOT_PATH, 'tinified');
// WATCH PATH
const WATCH_ROOT_PATH = "./";
const WATCH_JS_PATH = WATCH_ROOT_PATH + 'js/**/**';
const WATCH_SCSS_PATH = WATCH_ROOT_PATH + 'scss/**/**';
const WATCH_IMG_PATH = WATCH_ROOT_PATH + 'image/**/**';

function clean_files() {
    return src(DEST_ROOT_PATH, {
            read: false
        })
        .pipe(clean({
            force: true
        }));
}

function minify_scss() {
    return src(SRC_SCSS_PATH)
        .pipe(sassGlob())
        .pipe(sass({
            importer: packageImporter(),
            outputStyle: 'compressed',
            precision: 10
        }))
        .on("error", sass.logError)
        .pipe(postcss([normalize(), autoprefixer(), cssnano(), postcssPresetEnv(), mqpacker({
            sort: sortCSSmq
        })]))
        .pipe(size({
            showFiles: true
        }))
        .pipe(dest(DEST_SCSS_PATH))
        .pipe(browserSync.stream());
}

function minify_css() {
    return src(cssPath)
        .pipe(sourcemaps.init())
        .pipe(concat('style.css'))
        .pipe(postcss([autoprefixer(), cssnano()]))
        .pipe(sourcemaps.write('.'))
        .pipe(dest('dist/assets/css'));
}

function minify_js() {
    return src(SRC_JS_PATH)
        .pipe(terser())
        .pipe(concat('all.js'))
        .pipe(size({
            showFiles: true
        }))
        .pipe(dest(DEST_JS_PATH))
        .pipe(browserSync.stream());
}

function minify_image() {
    return src(SRC_IMG_PATH)
        .pipe(newer(DEST_IMG_PATH))
        .pipe(imagemin([
            pngquant({
                quality: [0.5, 0.5]
            }),
            mozjpeg({
                quality: 50
            })
        ]))
        .pipe(size({
            showFiles: true
        }))
        .pipe(dest(DEST_IMG_PATH))
        .pipe(browserSync.stream());
}

function broswer_watch() {
    browserSync.init({
        server: {
            baseDir: '../'
        }
    });

    watch(WATCH_SCSS_PATH, minify_scss);
    watch(WATCH_JS_PATH, minify_js);
    watch('../*.html').on('change', browserSync.reload);

}

function compile() {
    watch(WATCH_SCSS_PATH, minify_scss);
    watch(WATCH_JS_PATH, minify_js);
    watch(WATCH_IMG_PATH, minify_image);
}

// REMOVE DIST | DESTINATION FOLDER
exports.clean = clean_files;
// COMPILE AND BUILD DIST | DESTINATION FOLDER
exports.build = series(minify_scss, minify_js, minify_image);
// COMPILE AND REBUILD DIST | DESTINATION FOLDER
exports.rebuild = series(clean_files, series(parallel(minify_scss, minify_js), minify_image));
// COMPILE AND WATCH CHANGES FOR SCSS JS IMG
exports.watch = compile;
// COMPILE, WATCH AND SYNC CHANGES FOR SCSS JS IMG
exports.sync = broswer_watch;
