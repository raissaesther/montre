module.exports = function(grunt) {

    // Project configuration.
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        // CONFIG ===================================/
        watch: {
            sass: {
                files: ['../css/**/*.scss'],
                tasks: ['sass:dev']
            },
            cssmin:{
                files: ['../css/**/*.css'],
                tasks: ['cssmin']
            },
            uglify:{
                files: ['../js/**/*.js'],
                tasks: ['uglify']
            }
        },
        sass: {
            dev: {
                files: [{
                    expand: true,
                    cwd: '../css/scss',
                    src: ['*.scss'],
                    dest: '../css',
                    ext: '.css'
                }],
                options: {
                    sourceMap: true,
                    outputStyle: 'expanded',
                    imagePath: "../img"
                }
            }
        },
        uglify: {
            all: {
                files: {
                    '../js/qode-restaurant.min.js': ['../js/qode-restaurant.js']
                }
            }
        },
        cssmin: {
            options: {
                shorthandCompacting: false,
                roundingPrecision: -1
            },
            target: {
                files: {
                    '../css/qode-restaurant.min.css': ['../css/qode-restaurant.css'],
                    '../css/qode-restaurant-responsive.min.css': ['../css/qode-restaurant-responsive.css']
                }
            }
        }
    });

    grunt.util.linefeed = '\n';
    grunt.util.normalizelf('\n');

    // DEPENDENT PLUGINS =========================/

    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-sass');
    grunt.loadNpmTasks('grunt-contrib-cssmin');

    // TASKS =====================================/

    grunt.registerTask('default', ['sass:dev']);
    grunt.registerTask('js', ['concat', 'uglify']);
    grunt.registerTask('css', ['sass', 'cssmin']);
    grunt.registerTask('minify', ['sass', 'cssmin', 'uglify']);
};