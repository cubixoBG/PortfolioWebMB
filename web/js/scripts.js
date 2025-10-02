// scroll timeline
document.addEventListener("DOMContentLoaded", () => {
  const timelineItems = document.querySelectorAll(".timeline-item");

  function handleScroll() {
    const windowHeight = window.innerHeight;

    timelineItems.forEach((item, index) => {
      const rect = item.getBoundingClientRect();
      const progress = 1 - rect.top / windowHeight; // proportion de la carte dans la fenêtre

      if (progress > 0.1) { // commence à apparaître
        item.style.opacity = Math.min(progress, 1);
        item.style.transform = `translateY(${60 * (1 - Math.min(progress, 1))}px)`;
      } else {
        item.style.opacity = 0;
        item.style.transform = `translateY(60px)`;
      }
    });
  }

  window.addEventListener("scroll", handleScroll);
  handleScroll();
});



// Particles JS configuration
particlesJS.load('particles-js', 'js/particles.js', function() {
  console.log('particles.js loaded - callback');
});