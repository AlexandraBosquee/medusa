console.log("it works !");


let btnsDoc = document.querySelectorAll(".btn--doc");

btnsDoc.forEach((btn) => {
  btn.addEventListener('click', function() {
      btn.nextElementSibling.classList.toggle("none");
  })
});


const burger = document.querySelector('.burger');

burger.addEventListener('click', () => {
  let header = document.querySelector("header");
  header.classList.toggle('active');
});

document.addEventListener( 'DOMContentLoaded', function() {

  var splide = new Splide( '.splide', {
    type   : 'loop',
    padding: 'auto',
    focus: 'center',
    speed: 0,
    clones: 1,
  } );
  
  splide.mount();
} );


