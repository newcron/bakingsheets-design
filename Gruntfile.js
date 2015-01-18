module.exports = function (grunt) {

    const DEFAULT_TASKS = ['less', 'copy', 'imageEmbed', 'kss', 'browserify', "cache-busting"];

    grunt.initConfig({
        pkg: grunt.file.readJSON("package.json"),

        less: {
            development: {
                options: {
                    /* https://www.npmjs.org/package/grunt-css-url-embed --> data uri support  */

                    paths: ["app/style/"],
                    compress: true,
                    cleanCss: true,
                    sourceMap: false,
                    modifyVars: {
                        "image-url": "\"../../app/img\""
                    }
                },
                files: {
                    "app-optimized/style-intermediate.css": "assets/bakingsheets.less"
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
        imageEmbed: {
            dist: {
                src: [ "app-optimized/style-intermediate.css" ],
                dest: "app-optimized/style.css",
                options: {
                    deleteAfterEncoding : false,
                    preEncodeCallback: function (filename) { return true; }
                }
            }
        },
        'cache-busting': {
            js: {
                replace: ['app-optimized/footer.php'],
                replacement: 'app.js',
                file: 'app-optimized/app.js',
                get_param: true
            },
            css: {
                replace: ['app-optimized/header.php'],
                replacement: 'style.css',
                file: 'app-optimized/style.css',
                get_param: true
            }
        },

        watch: {
            options: {
                spawn: false
            }, css: {
                files: ['assets/**', 'src/**'],
                tasks: DEFAULT_TASKS
            }
        }
    });

    grunt.loadNpmTasks('grunt-contrib-less');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-copy');
    grunt.loadNpmTasks('grunt-browserify');
    grunt.loadNpmTasks('grunt-kss');
    grunt.loadNpmTasks('grunt-image-embed');
    grunt.loadNpmTasks('grunt-cache-busting');

    grunt.registerTask('default', DEFAULT_TASKS);

}