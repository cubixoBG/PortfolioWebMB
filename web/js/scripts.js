if (window.matchMedia("(min-width: 1000px)").matches) {
  // scroll timeline
  gsap.registerPlugin(ScrollTrigger);

  document.addEventListener('DOMContentLoaded', () => {
    const timeline = document.querySelector('#timeline');
    const wrapper = timeline.querySelector('.timeline-wrapper');
    const totalScrollWidth = wrapper.scrollWidth - window.innerWidth;

    gsap.to(wrapper, {
      x: -totalScrollWidth, // déplacement horizontal négatif
      ease: "none",
      scrollTrigger: {
        trigger: timeline,
        start: "top top",
        end: () => `+=${totalScrollWidth}`, // durée du scroll = largeur du contenu
        scrub: true, // synchronise le scroll et l'animation
        pin: true,   // fixe la section pendant le scroll
        anticipatePin: 1,
      }
    });
  });

  // Ajuste la largeur de la ligne de temps en fonction du contenu
  document.addEventListener('DOMContentLoaded', () => {
    const wrapper = document.querySelector('.timeline-wrapper');
    const line = document.querySelector('.timeline-line');

    // Largeur totale de la ligne = largeur totale du contenu de la timeline
    line.style.width = `${wrapper.scrollWidth}px`;
  });
}

// Particles JS configuration
particlesJS.load('particles-js', 'js/particles.js', function () {
  console.log('particles.js loaded - callback');
});

// Clonage des logos pour un défilement infini
var copy = document.querySelector('#logo-slide').cloneNode(true);
document.querySelector('#logoSlider').appendChild(copy);