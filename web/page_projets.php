<!DOCTYPE html>
<html lang="fr">

<head>
    <meta name="title" content="Portfolio Morgan Bonne Le Puy en Velay Projets">
    <meta name="description"
        content="Découvrez les projets de Morgan Bonne, Développeur informatique le Puy-en-Velay, Bourg-en-Bresse, France">
    <meta name="author" content="Morgan Bonne">
    <meta name="keywords"
        content="Portfolio, Morgan Bonne, Développeur, Informatique, dev, developer, web, webdev, web developer, web development, développeur, développeur web, développement web, ia, intelligence artificielle, machine learning, deep learning, data science, data analyst, data engineer, Puy en velay, Haute Loire, Auvergne, France, BUT MMI, Métiers du Numérique, Métiers du Numérique et de la Communication, Bachelor, Bachelor Développeur, Bachelor Développeur Web, Bachelor Web, Bachelor Web Dev, Bachelor Web Developer, lyon1, Lyon 1, Université Lyon 1, Université Claude Bernard Lyon 1">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>| BONNE Morgan | Projets</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/mobile.css">
</head>

<body>
    <header id="headerProjets">
        <div id="headerProjFilter">
            <?php include 'php_parts/navbar.php'; ?>
            <div class="flex-center">
                <div id="titreProjets">
                    <h2>Mes Projets</h2>
                </div>
            </div>
        </div>
    </header>

    <main>
        <section id="projets">
            <div class="projets-container">
                <?php
                include 'data/projets.php';
                foreach ($projets as $projet):
                    $isEven = ($projet['id'] % 2 == 0) ? 'right' : 'left';
                    ?>
                    <div class="projet-row <?php echo $isEven; ?>">
                        <div class="projet-card">
                            <h3><?php echo htmlspecialchars($projet['titre']); ?></h3>
                            <p><?php echo htmlspecialchars($projet['description1']); ?></p>
                            <p><?php echo htmlspecialchars($projet['description2']); ?></p>
                            <a href="<?php echo htmlspecialchars($projet['lien']); ?>" target="_blank" class="btn">Voir le projet</a>
                        </div>
                        <img src="<?php echo htmlspecialchars($projet['img']); ?>"
                            alt="<?php echo htmlspecialchars($projet['titre']); ?>">
                    </div>
                <?php endforeach; ?>
            </div>
        </section>

    </main>

    <?php include 'php_parts/footer.php'; ?>
</body>

</html>