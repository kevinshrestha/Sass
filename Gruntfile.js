module.exports = function(grunt) {

   grunt.initConfig({
      pkg: grunt.file.readJSON('package.json'),

      /**
      * Sass task
      */
      sass: {
         dev: {
            options: {
               style: 'expanded',
               sourcemap: 'none',
            },
            files: {
               'compiled/style-human.css': 'sass/style.scss'
            }
         }
      },
         dist: {
            options: {
               style: 'compressed',
               sourcemap: 'none',
            },
            files: {
               'compiled/style.css': 'sass/style.scss'
            }
      },

      /**
      * Watch task
      */
      watch: {
         css: {
            files: '**/*.scss',
            tasks: ['sass', 'autoprefixer']
         }
      }

   });

   grunt.loadNpmTask('grunt-contrib-sass');
   grunt.loadNpmTask('grunt-contrib-watch');
   grunt.registerTask('default',['watch']);

}
