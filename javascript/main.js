/*$('index-button').click(function(){
    $("html, body").animate({
        scrollTop: $('child2').offset().top }, 'slow');
        return true;
    });*/ //nu merge

    

//WELCOME
// var messageArray = ["WELCOME!"];
// var testPosition = 0;
// var speed = 100;
// typewriter = () => {
//     document.querySelector("#index-title").
//     innerHTML = messageArray[0].substring(0, testPosition);
//     if(testPosition++ != messageArray[0].length)
//         setTimeout(typewriter, speed);
    
// }
// window.addEventListener("load", typewriter);


//EXPLORE BUTTON
function scrollDown(){
    document.getElementById('child2').scrollIntoView();
    console.log(1);
};

/*
const sign_in_btn = document.querySelector('#sign-in-button');
const sign_up_btn = document.querySelector('#sign-up-button');
const container = document.querySelector('.container');

sign_up_btn.addEventListener('click',()=>{
    container.classList.add('sign-up-mode');
});

sign_in_btn.addEventListener('click',()=>{
    container.classList.remove('sign-up-mode');
});*/

const inputs = document.querySelectorAll(".input-field");
const toggle_btn = document.querySelectorAll(".toggle");
const main = document.querySelector("main");
const bullets = document.querySelectorAll(".bullets span");
const images = document.querySelectorAll(".image");

inputs.forEach((inp) => {
  inp.addEventListener("focus", () => {
    inp.classList.add("active");
  });
  inp.addEventListener("blur", () => {
    if (inp.value != "") return;
    inp.classList.remove("active");
  });
});

toggle_btn.forEach((btn) => {
  btn.addEventListener("click", () => {
    main.classList.toggle("sign-up-mode");
  });
});

function moveSlider() {
  let index = this.dataset.value;

  let currentImage = document.querySelector(`.img-${index}`);
  images.forEach((img) => img.classList.remove("show"));
  currentImage.classList.add("show");

  const textSlider = document.querySelector(".text-group");
  textSlider.style.transform = `translateY(${-(index - 1) * 2.2}rem)`;

  bullets.forEach((bull) => bull.classList.remove("active"));
  this.classList.add("active");
}

bullets.forEach((bullet) => {
  bullet.addEventListener("click", moveSlider);
});

const tl = gsap.timeline({defaults: {ease:"power1.out"}});

tl.to(".text",{y:"0%",duration:1, stagger: 0.25});
tl.to(".slider", {y:"-100%", duration: 1.5, delay: 0.5});
tl.to(".intro", {y: "-100%", duration:1}, "-=1");
tl.fromTo("nav", {opacity:0}, {opacity:1, duration:1});
tl.fromTo(".child1-text", {opacity:0}, {opacity:1, duration:1}, "-=1");
tl.fromTo(".gallery-wrap", {opacity:0}, {opacity:1, duration:1}, "-=1");
tl.fromTo("hr", {opacity:0}, {opacity:1, duration:1}, "-=1");