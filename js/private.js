$(document).ready(function(){

    const lenis = new Lenis({
        duration: 1,
    })

    function raf(time) {
        lenis.raf(time);
        ScrollTrigger.update();
        requestAnimationFrame(raf)
    }
    requestAnimationFrame(raf)

    new WOW().init();

    $(".head-quesstion").click(function(){
        $(this).next().slideToggle(300);
        $(this).parent('.item-quesstion').toggleClass('active');
    });

    const controller = new ScrollMagic.Controller();
    const tween = new TimelineMax();
    tween
        .to(".why-cart-4", 1, {
            bottom: 1000,
        }, '-=1') 
        .to(".why-cart-5", 1, {
            bottom: 1000,
        }, '-=1.5')
        .to(".why-cart-1", 1, {
            bottom: 1000,
        }, '-=0.5')
        .to(".why-cart-3", 1, {
            bottom: 1000,
        }, '-=1.25')
        .to(".why-cart-2", 1, {
            bottom: 1000,
        }, '-=1.75')
        .to(".why-cart-6", 1, {
            bottom: 1000,
        }, '-=0.7')

    const scene = new ScrollMagic.Scene ({
        triggerElement: '#container',
        duration: 2500,
        triggerHook: 0
    })
        .setTween(tween)
        .setPin('#container')
        .setClassToggle('.item-cart-why', 'show-opacity')
        .addTo(controller);
})


gsap.registerPlugin(ScrollTrigger);
const cards = gsap.utils.toArray(".item-we");
const cardsWrapper = document.querySelector(".list-we");
let timeout = 1;
gsap.to(cardsWrapper, {
    x: () => -(cardsWrapper.scrollWidth - document.documentElement.clientWidth)  + "px",
    ease: "none",
    scrollTrigger: {
        trigger: ".box-we_work",
        triggerHook: 'onLeave',
        start: "top top",
        scrub: true,
        end: () => "+=" + cardsWrapper.offsetWidth * timeout,
        duration: 6000,
        pin: true,
        markers: true,
        toggleClass: {targets: ".box-we_work", className: "active-scroll"},
        onUpdate: self => updateHandler(self.progress),
        // onEnter: () => {
        //     $('.circle-work').toggleClass('active')
        // },
    },
    duration: 3,
});


const scrollbar = document.querySelector('.scrollbar');
const handler = document.querySelector('.scrollbar__handler');
const scrollbarLength = scrollbar.offsetWidth - handler.offsetWidth;
function updateHandler(progress) {
    const range = gsap.utils.mapRange(0, 1, 0, scrollbarLength, progress);
    gsap.set(handler, { x: range });

    var lastScrollLeft  = $(window).scrollTop();
    $(window).scroll(function(event){
        var st = $(this).scrollTop();
        
        if (st > lastScrollLeft){
            $('.item-we').addClass('scr-right').removeClass('scr-left').removeClass('scr-center');
        }
        if (st < lastScrollLeft){
            $('.item-we').addClass('scr-left').removeClass('scr-right').removeClass('scr-center');
        }
        scrollTimeout = setTimeout(function() {
            $('.item-we').addClass('scr-center').removeClass('scr-left scr-right')
        }, 200);

        lastScrollLeft = st;
    });
}

// footer 

gsap.set('.content-footer-top, .content-footer-info', { yPercent: -100 })
const uncover = gsap.timeline({ paused:true })
uncover
.to('.content-footer-top, .content-footer-info', { yPercent: 0, ease: 'none' });
ScrollTrigger.create({  
  trigger: '.box-become',
  start: 'bottom bottom',
  end: '+=50%',
  animation: uncover,
  scrub: true,  
})

const quotes = document.querySelectorAll(".quote");
function setupSplits() {
  quotes.forEach(quote => {
    // Reset if needed
    if(quote.anim) {
      quote.anim.progress(1).kill();
      quote.split.revert();
    }

    quote.split = new SplitText(quote, { 
      type: "lines,words,chars",
      linesClass: "split-line"
    });

    // Set up the anim
    quote.anim = gsap.from(quote.split.chars, {
      scrollTrigger: {
        trigger: quote,
        toggleActions: "restart pause resume reverse",
        start: "top 85%",
      },
      duration: 0.4, 
      ease: "circ.out", 
      y: 80, 
      stagger: 0.04,
    });
  });
}

ScrollTrigger.addEventListener("refresh", setupSplits);
setupSplits();