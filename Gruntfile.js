module.exports = function (grunt) {

    grunt.initConfig({
        pkg: grunt.file.readJSON("package.json"),

        less: {
            development: {
                options: {
                    /* https://www.npmjs.org/package/grunt-css-url-embed --> data uri support  */

                    paths: ["app/style/"],
                    compress: true,
                    cleanCss: true,
                    sourceMap: true,
                    modifyVars: {
                        "image-url": "\"../../app/img\""
                    }
                },
                files: {
                    "app-optimized/style.css": "assets/bakingsheets.less"
                }
            }

        },

        browserify: {
            dist: {
                files: {
                    'app-optimized/app.js': ["src/js/**/*.js"]
                }
            }
        },

        copy: {
            assets: {
                expand: true,
                src: ['*', '!**/*.less', '!**/*.md'],
                dest: 'app-optimized/',
                cwd: "assets",
                filter: 'isFile'
            },
            sources: {
                expand: true,
                src: ['**/*'],
                cwd: "src/php/",
                dest: 'app-optimized/',
                filter: 'isFile'
            }
        },

        kss: {
            options: {
                includeType: 'less',
                template: "styleguide-template",
                css: "assets/bakingsheets.less"

            },
            dist: {
                files: {
                    'app-optimized/styleguide': 'assets/'
                }
            }
        },

        watch: {
            options: {
                spawn: false
            }, css: {
                files: ['assets/**', 'src/**'],
                tasks: ['less', 'copy', 'kss', 'browserify']
            }
        }
    });

    grunt.loadNpmTasks('grunt-contrib-less');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-copy');
    grunt.loadNpmTasks('grunt-browserify');
    grunt.loadNpmTasks('grunt-kss');

    grunt.registerTask('default', ['less', 'copy', 'kss', 'browserify']);

}