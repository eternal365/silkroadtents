module.exports = function (grunt) {

  // Initialise Grunt
  grunt.initConfig({

    // Core SCSS compiling
    sass: {                              // Task
      dist: {                            // Target
        options: {                       // Target options
          style: 'compressed',
        },
        files: {                         // Dictionary of files
          'style.css': 'style.scss',     // 'destination': 'source'
        },
      },
    },

    // ensures that any basic javascript syntax errors are picked up before compiling
    jshint: {
      // define the files to lint
      files: ['GruntFile.js', 'src/js/*.js'],
      // configure JSHint (documented at http://www.jshint.com/docs/)
      options: {
        // more options here if you want to override JSHint defaults
        reporterOutput: '',
        globals: {
          jQuery: true,
          console: true,
          module: true,
        },
      },
    },

    // Our main watch task - keeping an eye on files and folders and compiling them on any changes
    watch: {
      files: ['./scss/*'],
      tasks: ['jshint', 'sass'],
    },
  });

  // Load the various grunt libraries needed
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-jshint');
  grunt.loadNpmTasks('grunt-contrib-watch');

  grunt.registerTask('default', ['sass']);
};
