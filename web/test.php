<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Portfolio Timeline Stylée</title>
<style>
:root {
  --primary-color: #4bff96;
  --secondary-color: #0ceb69;
  --background-color: #101014;
  --text-color: #fffdf5;
}

body {
  margin: 0;
  background-color: var(--background-color);
  color: var(--text-color);
  font-family: 'Eras-Demi', sans-serif;
  overflow-x: hidden;
}

/* Horizontal timeline section */
.horizontal-section {
  position: relative;
  height: 100vh;
  overflow: hidden;
}

/* Titre vertical */
.timeline-title-wrapper {
  position: absolute;
  left: 40px;
  top: 50%;
  transform: translateY(-50%) rotate(-90deg);
  transform-origin: left top;
}

.timeline-title-wrapper .timeline-subtitle {
  font-family: 'Eras-Bold';
  font-size: 1.5rem;
  color: #18c761;
  letter-spacing: 1px;
  margin-bottom: 8px;
}

.timeline-title-wrapper .timeline-title {
  font-family: 'Eras-Bold';
  font-size: 3rem;
  color: var(--primary-color);
  letter-spacing: 2px;
}

/* Timeline container sticky */
.timeline-container {
  position: sticky;
  top: 0;
  height: 100vh;
  display: flex;
  align-items: center;
  overflow: hidden;
}

/* Ligne centrale animée */
.timeline-line {
  position: absolute;
  top: 50%;
  left: 0;
  width: 100%;
  height: 4px;
  background: linear-gradient(90deg, #4bff96, #0ceb69, #4bff96);
  transform: translateY(-50%);
  z-index: 0;
  animation: glowLine 3s ease-in-out infinite;
}

@keyframes glowLine {
  0%, 100% { filter: blur(2px); }
  50% { filter: blur(6px); }
}

/* Timeline items */
.timeline-items {
  display: flex;
  gap: 250px;
  padding: 0 150px;
  transition: transform 0.1s ease-out;
}

/* Carte individuelle */
.timeline-item {
  flex: 0 0 300px;
  position: relative;
  text-align: center;
  opacity: 0;
  transform: translateY(60px);
  transition: opacity 0.6s ease, transform 0.6s ease;
}

/* Carte apparue */
.timeline-item.show {
  opacity: 1;
  transform: translateY(0);
}

/* Date au-dessus */
.timeline-item .date {
  position: absolute;
  top: -40px;
  left: 50%;
  transform: translateX(-50%);
  font-weight: bold;
  color: var(--primary-color);
}

/* Card style */
.timeline-item .card {
  background: rgba(255, 255, 255, 0.05);
  border: 2px solid var(--primary-color);
  border-radius: 20px;
  padding: 20px;
  height: 180px;
  display: flex;
  flex-direction: column;
  justify-content: center;
  box-shadow: 0 0 20px rgba(75, 255, 150, 0.2);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.timeline-item .card:hover {
  transform: translateY(-10px);
  box-shadow: 0 0 30px rgba(75, 255, 150, 0.6);
}

.espace {
  height: 100vh;
}
</style>
</head>
<body>

<section class="horizontal-section">
  <div class="timeline-title-wrapper">
    <h2 class="timeline-subtitle">Mon</h2>
    <h2 class="timeline-title">Parcours</h2>
  </div>
  <div class="timeline-container">
    <div class="timeline-line"></div>
    <div class="timeline-items">
      <div class="timeline-item"><span class="date">2020</span>
        <div class="card"><h3>Début</h3><p>Première année d’études</p></div>
      </div>
      <div class="timeline-item"><span class="date">2021</span>
        <div class="card"><h3>Stage</h3><p>Premier stage en dev web</p></div>
      </div>
      <div class="timeline-item"><span class="date">2022</span>
        <div class="card"><h3>Projet Data</h3><p>Expérience en data science</p></div>
      </div>
      <div class="timeline-item"><span class="date">2023</span>
        <div class="card"><h3>BUT 2ème année</h3><p>Développement avancé</p></div>
      </div>
      <div class="timeline-item"><span class="date">2024</span>
        <div class="card"><h3>Stage avancé</h3><p>Stage dans une grosse boîte</p></div>
      </div>
      <div class="timeline-item"><span class="date">2025</span>
        <div class="card"><h3>Diplôme 🎓</h3><p>Début de carrière</p></div>
      </div>
    </div>
  </div>
</section>

<div class="espace"></div>

<script>
document.addEventListener("DOMContentLoaded", () => {
  const section = document.querySelector(".horizontal-section");
  const timeline = document.querySelector(".timeline-items");
  const items = document.querySelectorAll(".timeline-item");
  let totalScroll = timeline.scrollWidth - window.innerWidth;
  let currentX = 0;
  let targetX = 0;
  const speed = 3;

  function animate() {
    currentX += (targetX - currentX) * 0.1;
    timeline.style.transform = `translateX(${currentX}px)`;
    requestAnimationFrame(animate);
  }
  animate();

  window.addEventListener("wheel", e => {
    const rect = section.getBoundingClientRect();
    const middleScreen = rect.top + rect.height / 2 - window.innerHeight / 2;

    if (Math.abs(middleScreen) < 50) {
      let newX = targetX - e.deltaY * speed;
      if (newX > 0) newX = 0;
      if (newX < -totalScroll) newX = -totalScroll;

      if ((e.deltaY > 0 && targetX > -totalScroll) || (e.deltaY < 0 && targetX < 0)) {
        e.preventDefault();
        targetX = newX;
      }

      items.forEach(item => {
        const rectItem = item.getBoundingClientRect();
        if (rectItem.left < window.innerWidth * 0.85) item.classList.add("show");
      });
    }
  }, { passive: false });

  window.addEventListener("resize", () => {
    totalScroll = timeline.scrollWidth - window.innerWidth;
  });
});
</script>
</body>
</html>