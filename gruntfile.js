module.exports = function(grunt) {

    grunt.initConfig({

        sass: {
            dist: {
                options: {style:'compressed'},
                files: {
                    'src/style/css/style.css': 'src/style/sass/*.scss',
                }
            }
        },

      watch: {
            options: {livereload: true},
            php: {
                files:
                    ['**/*.php']
            },

            sass: {
                files:
                    ['src/style/sass/*.scss'],
                tasks: ['sass'],
                livereload: {
                  options: { livereload: true },
                  files: ['dest/**/*'],
                },
            },

        },

    });

    grunt.loadNpmTasks("grunt-contrib-sass");
    grunt.loadNpmTasks("grunt-contrib-watch");

};