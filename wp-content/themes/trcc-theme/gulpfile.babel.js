import { src, dest, watch, series, parallel } from 'gulp';
import yargs from 'yargs';
import sass from 'gulp-sass';
import cleanCss from 'gulp-clean-css';
import gulpif from 'gulp-if';
import postcss from 'gulp-postcss';
import imagemin from "gulp-imagemin";
import sourcemaps from 'gulp-sourcemaps';
import autoprefixer, { info } from 'autoprefixer';
import del from 'del';
import webpack from 'webpack-stream';
import browserSync from "browser-sync";
import wpPot from "gulp-wp-pot";

const PRODUCTION = yargs.argv.prod;
const server = browserSync.create();

export const styles = () => {
    //  Read file return a node stream
    return src('src/scss/bundle.scss')
        //  init -> pipe all plugins we are mapping below
        .pipe(gulpif(!PRODUCTION, sourcemaps.init()))
        //  convert SASS to CSS
        .pipe(sass().on('error', sass.logError))
        .pipe(gulpif(PRODUCTION, postcss([autoprefixer])))
        //  Minify CSS if in PROD mode
        .pipe(gulpif(PRODUCTION, cleanCss({ compatibility: 'ie8' })))
        .pipe(gulpif(!PRODUCTION, sourcemaps.write()))
        //  Pipe CSS file to dir
        .pipe(dest('src/css'))
        //  Browsersync allows us to inject CSS directly to the page without reloading page
        .pipe(server.stream());
}

export const watchForChanges = () => {

    watch('src/scss/**/*.scss', styles);
    watch('src/images/**/*.{jpg,jpeg,png,svg,gif}', series(images, reload));
    watch(['src/**/*', '!src/{images,js,scss}', '!src/{images,js,scss}/**/*'], series(copy, reload));
    watch('src/js/**/*.js', series(scripts, reload));
    watch("**/*.php", reload);
}

export const images = () => {

    return src('src/images/**/*.{jpg,jpeg,png,svg,gif}')
        .pipe(gulpif(PRODUCTION, imagemin()))
        .pipe(dest('dist/images'));

}

//  Telling GULP to match and copy all files and folders inside src EXCEPT  the images,js,scss folders
export const copy = () => {

    return src(['src/**/*', '!src/{js,scss}', '!src/{js,scss}/**/*'])
        .pipe(dest('dist'));

}

export const clean = () => del(['dist']);

export const scripts = () => {
    //  entry point
    return src('src/js/bundle.js')
        .pipe(webpack({
            module: {
                //transform JS files using babel-loader
                rules: [{
                    test: /\.js$/,
                    use: {
                        loader: 'babel-loader',
                        options: {
                            presets: []
                        }
                    }
                }]
            },
            mode: PRODUCTION ? 'production' : 'development',
            devtool: !PRODUCTION ? 'inline-source-map' : false,
            output: {
                filename: 'bundle.js'
            },
        }))
        .pipe(dest('dist/js'));
}


//  init a browsersync server
export const serve = done => {
    server.init({
        proxy: "http://127.0.0.1:5501/wp-content/themes/trcc-theme/src/index.html" // put your local website link here
    });
    done();
}

//  reload the browser
export const reload = done => {
    server.reload();
    done();
}

//  'series()' will take some tasks as arguments and run them in series (one after another)
//  'parallel()' will take tasks as arguments and run them all at once. 

export const dev = series(clean, parallel(styles, images, copy, scripts), serve, watchForChanges);
export const build = series(clean, parallel(styles, images, copy, scripts));
export default dev;