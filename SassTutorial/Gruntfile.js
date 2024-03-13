module.exports = function(grunt) {
   
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
  
    sass: {
      dist: {
        files: {
          'css/styles.css': 'final/styles.scss' // Compile all SCSS files to a single CSS file
        }
      }
    },
  
    watch: {
      css: {
        files: 'final/**/*.scss', // Watch all SCSS files within 'final' directory and its subdirectories
        tasks: ['sass'],
        options: {
          livereload: true,
        },
      },
    },
  });
  
  // Load plugins
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-watch');
  
  // Default task
  // grunt.registerTask('default', ['sass', 'watch']); // task to be run
  grunt.registerTask('run', function(){
    console.log("I am running")
  })
  grunt.registerTask('sleep', function(){
    console.log("I am sleeping")
  })
};
