module.exports = function(grunt) {

    /*
     * Variables globales para ruta del tema para tours
     */
    var theme = 'wp-content/themes/themeChild/';

    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        browserSync: {
            dev: {
                bsFiles: { 
                    src : [
                        theme+'*.php',
                        theme+'**/*.php',
                        theme+'js/*.js', 
                        theme+'*.css',
                    ] 
                },
                options: {
                    // https: true,
                    // proxy: '/ciab/',
                    proxy: 'localhost:8888/hogarsinenredos/', //our IIS server
                    port: 8888,
                    files: [theme+'style.css', theme+'js/*.js', theme+'**/*.php'],
                    open: true,
                    watchTask: true, 
                }
            }
        }, /* browserSync */
        sass: {
            options: {
                sourceMap: true,
                outputStyle: 'compressed'
            },
            dist: {
                files: {
                    'wp-content/themes/themeChild/style.css' : 'wp-content/themes/themeChild/components/sass/style.scss'
                }
            }
        }, /* sass */
        uglify: {
            dist: {
                files: { 
                    'wp-content/themes/themeChild/js/script.min.js': ['wp-content/themes/themeChild/components/js/script.js'],
                    '/localhost/htdocs/www/tours/wp-content/themes/themeChild/js/plugins.min.js': [
                        'components/plugins/js/jquery.easing.min.js'
                    ]
                }
            }
        }, /* uglify */

        /*======== watch ========*/
        watch: {
            css: {
                files: '**/**/**/**/*.scss',
                tasks: ['sass']
            }, /* css */

            js: {
                files: '**/**/**/js/*.js',
                tasks: ['uglify']
            }, /* js */

            pluginsJs: {
                files: '**/**/**/js/*.js',
                tasks: ['plugin']
            },
        } /* watch */
    });

    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-newer');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-sass');
    grunt.loadNpmTasks('grunt-browser-sync');
    grunt.loadNpmTasks('grunt-contrib-compress');

    grunt.registerTask('dev', ['sass', 'uglify', 'browserSync', 'watch']);
}