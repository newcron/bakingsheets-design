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

        watch: {
            options: {
                spawn: false
            }, css: {
                files: ['assets/**', 'src/**'],
                tasks: ['less', 'copy', 'imageEmbed', 'kss', 'browserify']
            }
        }
    });

    grunt.loadNpmTasks('grunt-contrib-less');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-copy');
    grunt.loadNpmTasks('grunt-browserify');
    grunt.loadNpmTasks('grunt-kss');
    grunt.loadNpmTasks('grunt-image-embed');

    grunt.registerTask('default', ['less', 'copy', 'imageEmbed', 'kss', 'browserify']);

}