var gulp = require('gulp'),
    sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer'); // CSS Autoprefix from Can I Use
var sourcemaps = require('gulp-sourcemaps');
var watch = require('gulp-watch'); // Watcher
var browserSync = require("browser-sync"); // Browser Sync
    // browserSync = require('browser-sync'); //Подключаем Sass пакет


const syncUrl = 'http://localhost/psihoschool';
var localFilesGlob = ['/scss/**/**/*.scss', 'assets/src/javascript/**/*.js', 'js/*.js','assets/dist/javascript/*.map', '**/*.php', '/css/*.css', '/css/*.map', '/img/*'];

// gulp.task('sass', function () {
//   return gulp.src('scss/**/*.scss')
//     .pipe(sass().on('error', sass.logError))
//     .pipe(gulp.dest('css/'))
//     // .pipe(browserSync.reload({stream: true})) // Обновляем CSS на странице при изменении
// });


gulp.task('sass', function () {
    watch('/**/**/*.scss', function () {
        return gulp.src('assets/src/scss/style.scss')
            .pipe(sourcemaps.init())
            .pipe(sass({
                errLogToConsole: true,
                style: 'compressed',
                precision: 10
            }).on('error', sass.logError))
            .pipe(autoprefixer(autoprefixerOptions))
            .pipe(sourcemaps.write('.'))
            .pipe(gulp.dest('css/'));
    })
});

gulp.task('browser-sync', function () {
    browserSync({
        notify: false,
        ui: false,
        proxy: syncUrl
    });
});

gulp.task('local-watch', function () {
    gulp.watch(localFilesGlob)
        .on('change', function (event) {
            process.stdout.write('File "' + event.path + '" changed\n');
            reload();
        })
});

// gulp.task('browserSync', function() { // Создаем таск browser-sync
//     browserSync({ // Выполняем browser Sync
//         server: { // Определяем параметры сервера
//             baseDir: './' // Директория для сервера
//         },
//         //notify: false // Отключаем уведомления
//     });
// });

// gulp.task('watch', ['sass'], function() {
//     gulp.watch('scss/**/*.scss', ['sass']); // Наблюдение за sass файлами
//     gulp.watch('*.php'); // Наблюдение за HTML файлами в корне проекта
//     gulp.watch('js/**/*.js'); // Наблюдение за JS файлами в папке js
// });

gulp.task('local', ['sass', 'local-watch', 'browser-sync'], function () {
    process.stdout.write('\n ----------------------------------\n Ready. Waiting for changes... \n ----------------------------------\n');
});
