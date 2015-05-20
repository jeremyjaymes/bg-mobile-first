module.exports = function (grunt) {
  require('jit-grunt')(grunt);

  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    cssmin: {
      target: {
        files: [{
          expand: true,
          cwd: 'css',
          src: ['*.css', '!*.min.css'],
          dest: 'css',
          ext: '.min.css'
        }]
      }
    },
    uglify: {
      options: {
        mangle: false,
        banner: '/*! <%= pkg.name %> - v<%= pkg.version %> - ' +
        '<%= grunt.template.today("yyyy-mm-dd") %> */'
      },
      dist: {
        files: [{
          expand: true,
          cwd: 'js',
          src: ['*.js', '!*.min.js'],
          dest: 'js',
          ext: '.min.js'
        }]
      }
    },
    watch: {
      css: {
        files: ['css/*.css', '!css/*.min.css'],
        tasks: ['cssmin'],
      },
      scripts: {
        files: ['js/*.js', '!js/*.min.js'],
        tasks: ['newer:uglify:dist']
      }
    }
  });

  grunt.registerTask('default', ['watch']);
} 