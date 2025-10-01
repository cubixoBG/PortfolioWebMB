document.addEventListener("DOMContentLoaded", function () {
  particlesJS("particles-js", {
    "particles": {
      "number": { "value": 120 },
      "color": { "value": "#2ecc71" },
      "shape": { "type": "circle" },
      "opacity": { "value": 0.69 },
      "size": { "value": 3 },
      "line_linked": {
        "enable": true,
        "distance": 169,
        "color": "#ffffff",
        "opacity": 0.4,
        "width": 1
      },
      "move": { "enable": true, "speed": 3 }
    },
    "interactivity": {
      "events": {
        "onhover": {
          "enable": true,
          "mode": "repulse"
        }
      },
      "modes": {
        "repulse": {
          "distance": 82,
          "duration": 0.4
        }
      }
    },
    "retina_detect": true
  });
});