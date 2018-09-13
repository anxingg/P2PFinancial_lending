var gulp = require("gulp")
var path = require('path');

//引入less插件
var less = require("gulp-less");
//引入压缩css插件
var cleanCSS = require("gulp-clean-css");
//引入修改文件名插件
var rename = require("gulp-rename");
//引入压缩js模块
var uglify = require("gulp-uglify");
//引入观察者
var watch = require("gulp-watch");
//sass
var sass = require("gulp-sass");
//livereload热刷新
var livereload = require("gulp-livereload");
//del删除文件
var del = require("del");
//合并文件
var concat=require("gulp-concat");
//图片压缩
var imagemin=require("gulp-imagemin");


//配置解析less文件的任务
gulp.task('less', function () {
  return gulp.src('./src/less/*.less')
    .pipe(less({    //解析less文件
      paths: [path.join(__dirname, 'less', 'includes')]
    }))
    .pipe(cleanCSS())    //压缩css文件
    .pipe(rename(function (path) { //修改文件名称
      //path.dirname += "/ciao";
      path.basename += ".min";
      //path.extname = ".md";
    }))
    .pipe(gulp.dest('./dist/css'))
    .pipe(livereload());
});

//js
gulp.task("uglify", () => {
  return gulp.src("./src/js/*.js")
    .pipe(uglify())
    .pipe(gulp.dest("./dist/js"))
    .pipe(rename(function (path) { //修改文件名称
      //path.dirname += "/ciao";
      path.basename += ".min";
      //path.extname = ".md";
    }))
    .pipe(livereload());
})

//sass
gulp.task('sass', function () {
  return gulp.src('./src/sass/*.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(cleanCSS())    //压缩css文件
    .pipe(rename(function (path) { //修改文件名称
      //path.dirname += "/ciao";
      path.basename += ".min";
      //path.extname = ".md";
    }))
    .pipe(gulp.dest('./dist/css'))
    .pipe(livereload());
});

//监听事件
/* gulp.task("default",()=>{
  livereload.listen();
gulp.watch("./src/less/*.less",["less"])
gulp.watch("./src/js/*.js",["uglify"])
gulp.watch("./src/sass/*.scss",["sass"])

}) */

//热刷新
gulp.task("default", () => {
  livereload.listen();
  gulp.watch("./src/less/*.less", ["less"])
  gulp.watch("./src/js/*.js",["uglify"])
  gulp.watch("./src/sass/*.scss",["sass"])
})

//删除js文件
gulp.task("del", () => {
  del(['./dist/deletefile/*.js']).then(paths => {
    console.log('js文件删除成功啦', paths.join('\n'));
  })
})

//合并文件
gulp.task('concatFile', function() {
  return gulp.src('./dist/js/*.js')
    .pipe(concat('new.js'))
    .pipe(gulp.dest('./dist/js'));
});


//图片压缩
gulp.task('imagemin', () =>
    gulp.src('./src/img/*.jpg')
        .pipe(imagemin())
        .pipe(gulp.dest('./dist/images'))
);


