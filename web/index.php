<?php
include 'data/parcours.php';
include 'data/sliderlogo.php';
include 'data/competences.php';
?>
<!doctype html>
<html lang="fr">

<head>
    <meta name="title" content="Portfolio Morgan Bonne Le Puy en Velay" />
    <meta name="description" content="Portfolio de Morgan Bonne, étudiant Développeur WEB au Puy-en-Velay, France" />
    <meta name="author" content="Morgan Bonne" />
    <meta name="keywords"
        content="Portfolio, Morgan Bonne, développeur, informatique, web, Puy en velay, Haute Loire, Auvergne Rhône-Alpes, France, BUT MMI, Métiers du Numérique, Métiers du Numérique et de la Communication" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>| BONNE Morgan | Développeur</title>
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="stylesheet" href="css/mobile.css" />
    <link rel="icon" type="image/x-icon" href="img/favicon.ico" />
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script src="js/particles.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.13.0/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.13.0/ScrollTrigger.min.js"></script>
    <script src="js/scripts.js" defer></script>
</head>

<body>
    <header><?php include 'php_parts/navbar.php'; ?>
        <div id="particles-js"></div>
        <div class="flex-center">
            <div id="titreHeader">
                <h1>BONNE Morgan</h1>
                <h2>Futur <span>Développeur</span>WEB & WEB <span>Designer</span></h2>
                <h3><span>Étudiant</span>en <span>2</span>ème année de BUT MMI au <span>Puy en Velay</span></h3><a
                    href="https://www.canva.com/design/DAGqBwKEhc8/E1AG648BkXQ-tv3guWF8Qw/view?utm_content=DAGqBwKEhc8&utm_campaign=designshare&utm_medium=link2&utm_source=uniquelinks&utlId=hf09202fae7"
                    target="_blank"><button>Mon CV</button></a>
                <h3>Recherche d'un <span>STAGE</span>autour du Puy-en-Velay, Biarritz, Vonnas ou Aix-les-Bains</h3>
            </div>
        </div><a id="gototimeline"></a>
    </header>
    <main>
        <section id="timeline">
            <h2>Mon <br />Parcours</h2>
            <div class="timeline-wrapper">
                <div class="timeline-line"></div>
                <?php foreach ($parcours as $etape): ?>     <?php $isEven = ($etape['id'] % 2 == 0) ? 'even' : 'odd'; ?>
                    <div class="timeline-card <?= $isEven ?>">
                        <div>
                            <p class="timeline-date"><?php echo $etape['date']; ?></p><img src="img/mouse-hover.gif"
                                alt="Gif de mouse Hover" />
                        </div>
                        <h3><?php echo $etape['titre']; ?></h3>
                        <p><?php echo $etape['description']; ?></p>
                    </div><?php endforeach; ?>
            </div>
        </section>
        <section id="logoSlider">
            <div id="logo-slide">
                <?php // Rajout des logos depuis le fichier sliderlogo.php 
                    foreach ($sliderImages as $image): ?><img
                    src="<?php echo htmlspecialchars($image); ?>" alt="Logo" /><?php endforeach; ?>
            </div>
        </section>
        <div id="competencesLink"></div>
        <section id="competences">
            <h2>Mes Compétences</h2>
            <div class="competences-wrapper"><?php foreach ($competences as $competence): ?>
                    <div class="competence">
                        <h3><?php echo $competence['titre']; ?></h3>
                        <p><strong>Logiciels/Technos :</strong><?php echo $competence['logiciels']; ?></p>
                        <p><?php echo $competence['description']; ?></p>
                    </div><?php endforeach; ?>
            </div>
        </section>
    </main><?php include 'php_parts/footer.php'; ?>
</body>

</html>