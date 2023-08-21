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



gsap.registerPlugin(ScrollTrigger);

const locomotiveScroll = new LocomotiveScroll();

let right = document.querySelectorAll(".right")

right.forEach( (element) => {
	let imgR = element.querySelector(".story__img");
	let texteR = element.querySelector(".story__text") ;

 gsap.
  timeline({
    scrollTrigger: {
      trigger: element,
      start: "top center",
      end: "center center",
      scrub: true,
      markers: true,
      onEnter: () => element.querySelector('.ani').classList.add('start')
    }
  })
  .from( imgR , {
    opacity: 0,
    x : -50,
  })
  .from( texteR , {
    opacity: 0,
    x : 50,
  })
  
});


let left = document.querySelectorAll(".left")

left.forEach( (element) => {
	let imgL = element.querySelector(".story__img");
	let texteL = element.querySelector(".story__text") ;

 gsap.
  timeline({
    scrollTrigger: {
      trigger: element,
      start: "top center",
      end: "center center",
      scrub: true,
      markers: true,
      // onEnter: () => element.querySelector('.story_img').classList.add('active')
    }
  })
  .from( imgL , {
    opacity: 0,
    x : 50,
  })
  .from( texteL , {
    opacity: 0,
    x : -50,
  })
  
});





