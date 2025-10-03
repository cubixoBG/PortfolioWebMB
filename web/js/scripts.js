// scroll timeline
document.addEventListener("DOMContentLoaded", () => {
  gsap.registerPlugin(ScrollTrigger);

  const timelineItems = document.querySelectorAll(".timeline-item");

  timelineItems.forEach((item, index) => {
    gsap.fromTo(item, {
      opacity: 0,
      y: 100,
    }, {
      opacity: 1,
      y: 0,
      scrollTrigger: {
        trigger: item,
        start: "top 80%",
        end: "bottom 20%",
        scrub: true,
        markers: false,
      },
    });
  });

  gsap.to(".timeline-content", {
    xPercent: -100 * (timelineItems.length - 1),
    ease: "none",
    scrollTrigger: {
      trigger: ".timeline",
      pin: true,
      scrub: 1,
      end: "+=" + document.querySelector(".timeline-content").scrollWidth,
    },
  });
});

// Particles JS configuration
particlesJS.load('particles-js', 'js/particles.js', function () {
  console.log('particles.js loaded - callback');
});