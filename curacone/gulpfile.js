
var gulp = require("gulp");
var sass = require("gulp-sass");
var browserSync = require("browser-sync");
var autoprefixer = require("gulp-autoprefixer");
var concat = require("gulp-concat");
var sourcemaps = require("gulp-sourcemaps");
var plumber = require('gulp-plumber');
var notify = require("gulp-notify");
var uglify = require("gulp-uglify");
var connect = require("gulp-connect-php");
// var cleanCSS = require('gulp-clean-css');


gulp.task("server", function () {
    connect.server({
        port: 8001,
        base: "./"
    }, function () {
        browserSync.init({
            proxy: "localhost:8001"
            // server: {
            //     baseDir: "./"
            // }
        });
    })
});
gulp.task("watch", function() {
    gulp.watch("src/js/*.js", function () {
        gulp.src("src/js/*.js")
            .pipe(concat("script.js"))
            .pipe(gulp.dest("js/"));
    });
    gulp.watch("src/sass/**/*.scss", function () {
        gulp.src("src/sass/**/*.scss")
            .pipe(plumber({
                errorHandler: notify.onError('Error:<% error.message %>')
            }))
            .pipe(sourcemaps.init())
            .pipe(sass())
            .pipe(autoprefixer({
                browsers: ['last 2 versions'],
                grid:true
            }))
            // .pipe(cleanCSS())
            .pipe(sourcemaps.write())
            .pipe(gulp.dest("css/"))
        browserSync.reload();
    });
    
});


gulp.task("default",["server","watch"]);



gulp.task("copy", function() {
    gulp.src("*.html")
    .pipe(gulp.dest("web"))
    gulp.src("*.php")
    .pipe(gulp.dest("web"))
    gulp.src("include_php/*.php")
    .pipe(gulp.dest("web/include_php"))
    gulp.src("css/*.css")
    .pipe(gulp.dest("web/css"))
    gulp.src("js/*.js")
    .pipe(gulp.dest("web/js"));
});

gulp.task("concat", function() {
    gulp.src(["src/js/*.js", "!src/js/script.js"]) // 操作の対象にしたくないものは ! を先頭に書く
    .pipe(concat("script.js")) 
    .pipe(gulp.dest("js/"));
});

gulp.task("js", function() {
    gulp.src('src/js/*.js')
    .pipe(gulp.dest('js'));
})


// 画像圧縮
var changed = require('gulp-changed');
var imagemin = require('gulp-imagemin');
var imageminJpg = require('imagemin-jpeg-recompress');
var imageminPng = require('imagemin-pngquant');
var imageminGif = require('imagemin-gifsicle');
var svgmin = require('gulp-svgmin');

var paths = {
    srcDir: 'img/**/',
    dstDir: 'img_dest/'
}

// jpg png gif画像の圧縮
gulp.task('imagemin', function() {
    var srcGlob = paths.srcDir + "/**/*.+(jpg|jpeg|png|gif)";
    var dstGlob = paths.dstDir;
    gulp.src( srcGlob )
    .pipe(changed(dstGlob))
    .pipe(imagemin([
        imageminPng(),
        imageminJpg(),
        imageminGif({
            interlaced: false,
            optimizationLevel: 3,
            colors: 180
        })
    ]))
    .pipe(gulp.dest(dstGlob));
});

// svg画像の圧縮
gulp.task('svgmin', function () {
    var srcGlob = paths.srcDir + "/**/*.+(svg)";
    var dstGlob = paths.dstDir;
    gulp.src(srcGlob)
        .pipe(changed(dstGlob))
        .pipe(svgmin())
        .pipe(gulp.dest(dstGlob));
});