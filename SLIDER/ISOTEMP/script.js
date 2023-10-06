$(document).ready(function() {
  var isometricLayout = new IsometricGrid($('.isometric-layout'), 200, 82, 30);
  $('.isometric-layout .showExpandedView').on('click touch', function(e) {
    e.preventDefault();
    isometricLayout.showExpandedView();
  });
  $('.isometric-layout .showHomeView').on('click touch', function(e) {
    e.preventDefault();
    isometricLayout.showHomeView();
  });
  $(window).resize(function() {
    isometricLayout.reCenter();
  });
});