module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    uglify: {
      my_target: {
        files: {
           'setup/js/build/setup.script.build.js':['setup/js/libs/*.js', 'setup/js/*.js'],
           'js/build/script.build.js':['js/libs/*.js', 'js/script.js']
        }
      }
    },

    concat: {
      basic_and_extras: {
        files: {
          'setup/js/build/setup.script.build.js': ['setup/js/libs/*.js', 'setup/js/*.js'],
          'js/build/script.build.js': ['js/libs/*.js', 'js/script.js'],
          'js/build/app.build.js': ['js/cart/*.js']
        },
      },
    },

    sass: {
      dist: {
        options: {
          style: 'expanded'
        },
        files: {
          'css/compiled/global.css': 'scss/global.scss',
          'css/compiled/setup.css': 'scss/setup.scss',
          'css/compiled/mobile.css': 'scss/mobile.scss'
        }
      }
    },

    autoprefixer: {
      options: {
        browsers: ['last 2 version']
      },
      dist: {
        files: {
          'css/prefixed/global.css': 'css/compiled/global.css',
          'css/prefixed/setup.css': 'css/compiled/setup.css', 
          'css/prefixed/mobile.css': 'css/compiled/mobile.css'
        }
      },
    },

    cssmin: {
      combine: {
        files: {
          'css/minified/global.min.css': ['css/prefixed/global.css'],
          'css/minified/setup.min.css': ['css/prefixed/setup.css'],
          'css/minified/mobile.min.css': ['css/prefixed/mobile.css']
        }
      }
    },

    watch: {
      options: {
        livereload: true,
      },
      scripts: {
        files: ['js/*.js', 'setup/js/*.js', 'js/cart/*.js'],
        tasks: ['concat'],
        options: {
          spawn: false,
        }
      },
      css: {
        files: ['**/*.scss'],
        tasks: ['sass', 'autoprefixer', 'cssmin'],
        options: {
          spawn: false,
        }
      }

    }


  });

  // Load grunt tasks
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-autoprefixer');
  grunt.loadNpmTasks('grunt-contrib-cssmin');
  grunt.loadNpmTasks('grunt-contrib-watch');


  // Default task(s).
  grunt.registerTask('default', ['uglify', 'sass', 'autoprefixer', 'cssmin']);
  grunt.registerTask('dev', ['concat', 'sass', 'autoprefixer', 'cssmin', 'watch']);

};