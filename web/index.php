<?php 
  include 'data/parcours.php'; 
  include 'data/sliderlogo.php';
  include 'data/competences.php';
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta name="description" content="Portfolio de Morgan Bonne, Développeur informatique">
    <meta name="author" content="Morgan Bonne">
    <meta name="keywords"
        content="Portfolio, Morgan Bonne, Développeur, Informatique, dev, developer, web, webdev, web developer, web development, développeur, développeur web, développement web, ia, intelligence artificielle, machine learning, deep learning, data science, data analyst, data engineer, Puy en velay, Haute Loire, Auvergne, France, BUT MMI, Métiers du Numérique, Métiers du Numérique et de la Communication, Bachelor, Bachelor Développeur, Bachelor Développeur Web, Bachelor Web, Bachelor Web Dev, Bachelor Web Developer, lyon1, Lyon 1, Université Lyon 1, Université Claude Bernard Lyon 1">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>| BONNE Morgan | Développeur</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script src="js/particles.js"></script>
    <!-- GSAP Core + ScrollTrigger -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.13.0/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.13.0/ScrollTrigger.min.js"></script>
    <script src="js/scripts.js" defer></script>

</head>

<body>

    <header>
        <?php include 'php_parts/navbar.php'; ?>
        <div id="particles-js"></div>
        <div class="flex-center">
            <div id="titreHeader">
                <h1>BONNE Morgan</h1>
                <h2>Futur <span>Développeur</span> WEB & WEB <span>Designer</span></h2>
                <h3><span>Étudiant</span> en <span>2</span>ème année de BUT MMI au <span>Puy en Velay</span></h3>
            </div>
        </div>
        <a id="gototimeline"></a>
    </header>


    <main>
        <!-- Timeline Section -->
        <div id="timeline">
          <h2>Mon <br> Parcours</h2>
          <div class="timeline-wrapper">
            <div class="timeline-line"></div>
            <?php foreach ($parcours as $etape): ?>
              <!-- Determine if the id is even or odd for styling purposes (Timeline card position) -->
              <?php $isEven = ($etape['id'] % 2 == 0) ? 'even' : 'odd'; ?>
              <div class="timeline-card <?= $isEven ?>">
                <div>
                  <date class="timeline-date"><?php echo $etape['date']; ?></date>
                  <img src="img/mouse-hover.gif" alt="Gif de mouse Hover">
                </div>  
                <h3><?php echo $etape['titre']; ?></h3>
                <p><?php echo $etape['description']; ?></p>
              </div>
            <?php endforeach; ?>
          </div>
        </div>

        <!-- Slider de logos  -->
        <div id="logoSlider">
            <div id="logo-slide">
                <?php
                // Rajout des logos depuis le fichier sliderlogo.php
                foreach ($sliderImages as $image): ?>
                    <img src="<?php echo htmlspecialchars($image); ?>" alt="Logo">
                <?php endforeach; ?>
            </div>
        </div>

        <!-- Compétences section -->
         <div id="competences">
            <h2>Mes <br> Compétences</h2>
            <div class="competences-wrapper">
              <?php foreach ($competences as $competence): ?>
                <div class="competence">
                  <img src="<?php echo htmlspecialchars($competence['img']); ?>" alt="img de <?php echo htmlspecialchars($competence['titre']); ?>">
                  <h3><?php echo $competence['titre']; ?></h3>
                  <p><strong>Logiciels :</strong> <?php echo $competence['logiciels']; ?></p>
                  <p><?php echo $competence['description']; ?></p>
                </div>
              <?php endforeach; ?>
            </div>
         </div>

    </main>

    <?php include 'php_parts/footer.php'; ?>

</body>

</html>