var gulp = require("gulp");
var sass = require("gulp-sass")(require("sass"));
// var notify = require("gulp-notify");
var sourcemaps = require("gulp-sourcemaps");
const babel = require("gulp-babel");
var concat = require("gulp-concat");
var uglify = require("gulp-uglify");
var imagemin = require("gulp-imagemin");
var cleanCSS = require("gulp-clean-css");

gulp.task(
  "sass",
  gulp.series(function () {
    return (
      gulp
        .src([
          "../wp-content/themes/atratis/assets/css/owl.carousel.scss",
          "../wp-content/themes/atratis/assets/css/owl.theme.default.min.scss",
          "../wp-content/themes/atratis/assets/css/animate.scss",
          "../wp-content/themes/atratis/assets/css/bootstrap.scss",
          "../wp-content/themes/atratis/assets/css/sweetalert2.min.scss",
          "../wp-content/themes/atratis/assets/css/touchTouch.scss",
          "../wp-content/themes/atratis/assets/css/aos.scss",
          "../wp-content/themes/atratis/assets/css/estilo.scss",
        ])
        // .pipe(sourcemaps.init())
        .pipe(sass({ outputStyle: "compressed" }))
        .pipe(cleanCSS())
        .pipe(concat("all.css"))
        // .pipe(sourcemaps.write())
        .pipe(gulp.dest("../wp-content/themes/atratis/build/css"))
      // .pipe(notify({ message: "CSS concluído", onLast: true }))
    );
  })
);

gulp.task(
  "imagem",
  gulp.series(function () {
    return gulp
      .src("../wp-content/themes/atratis/assets/images/*")
      .pipe(imagemin())
      .pipe(gulp.dest("../wp-content/themes/atratis/build/images"));
  })
);

gulp.task(
  "js",
  gulp.series(function () {
    return gulp
      .src([
        "../wp-content/themes/atratis/assets/js/jquery-migrate-1.4.1.min.js",
        /* "../wp-content/themes/atratis/assets/js/popper.min.js", */
        "../wp-content/themes/atratis/assets/js/bootstrap.min.js",
        "../wp-content/themes/atratis/assets/js/owl.carousel.min.js",
        /* "../wp-content/themes/atratis/assets/js/touchTouch.jquery.js", */
        "../wp-content/themes/atratis/assets/js/jquery.maskedinput.js",
        /* "../wp-content/themes/atratis/assets/js/modal-video.min.js", */
       /*  "../wp-content/themes/atratis/assets/js/jquery.chained.min.js", */
       "../wp-content/themes/atratis/assets/js/jquery.waypoints.min.js",
        "../wp-content/themes/atratis/assets/js/jquery.counterup.js",
        "../wp-content/themes/atratis/assets/js/aos.js",
        "../wp-content/themes/atratis/assets/js/site.js",
      ])
      .pipe(concat("scripts.min.js"))
      .pipe(uglify())
      .pipe(gulp.dest("../wp-content/themes/atratis/build/js"));
    // .pipe(notify({ message: "Scripts concluídos", onLast: true }));
  })
);

gulp.task(
  "watch",
  gulp.series(function () {
    gulp.watch(
      ["../wp-content/themes/atratis/assets/css/*.scss"],
      gulp.parallel(["sass"])
    );
    gulp.watch(
      ["../wp-content/themes/atratis/assets/images/*"],
      gulp.parallel(["imagem"])
    );
    gulp.watch(
      ["../wp-content/themes/atratis/assets/js/*.js"],
      gulp.parallel(["js"])
    );
  })
);

gulp.task("default", gulp.series(["sass", "js", "imagem", "watch"]));
