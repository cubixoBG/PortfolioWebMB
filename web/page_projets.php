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
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">

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

                <!-- 🎯 FILTRE PAR CATÉGORIE -->
                <div class="filter-container">
                    <form method="GET" action="">
                        <label for="categorie">Filtrer par compétence :</label>
                        <select name="categorie" id="categorie" onchange="this.form.submit()">
                            <option value="">Toutes</option>
                            <option value="Développement Web" <?= (isset($_GET['categorie']) && $_GET['categorie'] == 'Développement Web') ? 'selected' : '' ?>>Développement Web</option>
                            <option value="Design Graphique" <?= (isset($_GET['categorie']) && $_GET['categorie'] == 'Design Graphique') ? 'selected' : '' ?>>Design Graphique</option>
                        </select>
                    </form>
                </div>

                <?php
                include 'data/projets.php';

                // ---- 1. TRI AUTOMATIQUE PAR CATÉGORIE ----
                usort($projets, function ($a, $b) {
                    return strcmp($a['categorie'], $b['categorie']);
                });

                // ---- 2. FILTRE (si une catégorie est choisie) ----
                if (isset($_GET['categorie']) && $_GET['categorie'] !== '') {
                    $categorieChoisie = $_GET['categorie'];
                    $projets = array_filter($projets, fn($p) => $p['categorie'] === $categorieChoisie);
                }

                // ---- 3. GROUPEMENT PAR CATÉGORIE ----
                $projetsParCategorie = [];
                foreach ($projets as $projet) {
                    $projetsParCategorie[$projet['categorie']][] = $projet;
                }

                // ---- 4. AFFICHAGE DES CATÉGORIES ET PROJETS ----
                foreach ($projetsParCategorie as $categorie => $listeProjets): ?>
                    <h2 class="categorie-titre"><?= htmlspecialchars($categorie) ?></h2>

                    <?php foreach ($listeProjets as $projet):
                        $isEven = ($projet['id'] % 2 == 0) ? 'left' : 'right'; ?>

                        <div class="projet-row <?= $isEven; ?>">
                            <div class="projet-card">
                                <h3><?= htmlspecialchars($projet['titre']); ?></h3>
                                <p><?= htmlspecialchars($projet['description1']); ?></p>
                                <?php if (!empty($projet['description2'])): ?>
                                    <p><?= htmlspecialchars($projet['description2']); ?></p>
                                <?php endif; ?>
                                <?php if (!empty($projet['lien'])): ?>
                                <a href="<?= htmlspecialchars($projet['lien']); ?>" target="_blank" class="btn">Voir le
                                    projet</a>
                                <?php endif; ?>
                            </div>
                            <img src="<?= htmlspecialchars($projet['img']); ?>"
                                alt="<?= htmlspecialchars($projet['titre']); ?>">
                        </div>
                    <?php endforeach; ?>

                <?php endforeach; ?>
            </div>
        </section>


    </main>

    <?php include 'php_parts/footer.php'; ?>
</body>

</html>