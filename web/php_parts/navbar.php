<nav>
    <a href=""><img src="img/logo_long.png" alt="Logo personnel"></a>

    <ul>
        <li><a href="#gototimeline">Parcours</a></li>
        <li><a href="#competences">Compétences</a></li>
        <li><a href="#">Projets</a></li>
        <li><a href="https://www.canva.com/design/DAGqBwKEhc8/E1AG648BkXQ-tv3guWF8Qw/view?utm_content=DAGqBwKEhc8&utm_campaign=designshare&utm_medium=link2&utm_source=uniquelinks&utlId=hf09202fae7"
                target="_blank">CV</a></li>
        <li><a href="#footer">Contact</a></li>
    </ul>

    <div class="burger">
        <span></span>
        <span></span>
        <span></span>
    </div>
</nav>

<script>
    // 👉 Ce code ne s'exécute que sur mobile/tablette
    if (window.matchMedia("(max-width: 768px)").matches) {        
        const burger = document.querySelector('.burger');
        const navLinks = document.querySelector('nav ul');

        burger.addEventListener('click', () => {
            burger.classList.toggle('active');
            navLinks.classList.toggle('active');
        });
    }
</script>