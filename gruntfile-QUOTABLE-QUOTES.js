module.exports = function(grunt) {

    grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    uglify: {
      my_target: {
        files: {
          'quotable-quotes/js/scripts.js': ['quotable-quotes/components/javascript-to-compile/_scripts-staging.js']
        } //files
      } //my_target
    }, //uglify   

    /* Sass */
    sass: {
      dev: {
        options: {
          style: 'expanded',
          sourcemap: 'none'
        },
        files: {
          'quotable-quotes/style-expanded-quotable.css': 'quotable-quotes/components/sass/style.scss'
        }
      },
      dist: {
        options: {
          style: 'compressed',
          sourcemap: 'none'
        },
        files: {
          'quotable-quotes/style.css': 'quotable-quotes/components/sass/style.scss'
        }
      }
    },
    /* Autoprefixer */
    autoprefixer: {
      options: {
        browsers: ['last 5 versions']
      },
      // prefix all files
      multiple_files: {
        expanded: true, 
        flatten: true,
        src: '*.css',
        dest: ''
      }
    },

      /* Watch */
    watch: {
      options: { livereload: true },
      scripts: {
        files:  ['quotable-quotes/components/javascript-to-compile/_scripts-staging.js'],
        tasks: ['uglify']
      }, //scripts      
      css: {
        files: ['**/*.scss','**/**/*.scss'],
        tasks: ['sass','autoprefixer']
      }, // css
      hypertext: {
        files: ['quotable-quotes/*.php','quotable-quotes/*.htm','quotable-quotes/_includes/*.php']
      } //hypertext
    }, //watch

  });
  grunt.loadNpmTasks('grunt-contrib-uglify'); //uglify minifies js upon save
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-autoprefixer');
  grunt.registerTask('default','watch');
}