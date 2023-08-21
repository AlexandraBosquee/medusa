document.addEventListener( 'DOMContentLoaded', function() {

  var splide = new Splide( '.splide', {
    type   : 'loop',
    padding: 'auto',
    focus: 'center',
    speed: 0,
    clones: 1,
  } );
  
  splide.mount();
});