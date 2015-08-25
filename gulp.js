var penthouse = require('penthouse');
...

var criticalPages = [{
  url: 'http://local.dev/',
  name: 'index'
}, {
  url: 'http://local.dev/projects',
  name: 'projects'
}, {
  url: 'http://local.dev/about',
  name: 'about'
}];

gulp.task('criticalCSS', function() {
  criticalPages.map(function(page) {
    penthouse({
      url: page.url,
      css: 'dist/css/main.css',
      width: 1280,
      height: 1280
    }, function(err, data) {
      require('fs').writeFile('dist/css/critical/' + page.name + '.css', data);
    });
  });
});
