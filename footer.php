<div id="footer-buttom-backcolor">
    <asider id="footer-bottom" class="pagewidth">
        <div class="column" >
            <ul>
                <h3>Menu</h3>
                <li><a href="biocode.php" class="<?php if($current=='biocode.php'){echo'on';} ?> ">Le Biocode</a></li>
                <li><a href="#">Nos Produits</a></li>
                <li><a href="recette.php" class="<?php if($current=='recette.php'){echo'on';} ?> ">Les Recettes</a></li>
                <li><a href="blog.php" class="<?php if($current=='blog.php'){echo'on';} ?> ">Nos Blog</a></li>
                <li><a href="#">Notre Agenda</a></li>
                <li><a href="contact.php" class="<?php if($current=='contact.php'){echo'on';} ?> ">Nous Contacter</a></li>
            </ul>
            <ul>
                <h3>Mon...</h3>
                <li><a href="#">Votre Compte</a></li>
                <li><a href="#">Votre Abonnement</a></li>
                <h3>Espace Pro</h3>
                <li><a href="#">Nos Partenaires</a></li>
                <li><a href="#">Nous soutenir</a></li>
            </ul>
        </div>
        <div class="column">
            <img src="imagebio/logo.png" alt="maraicher bio">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Perferendis in ab vitae,
                quis molestiae nobis commodi obcaecati!</p>
            <p>Phone:<a href="tel:+33268686868">+ 33 2 68 68 68 68</a></p>
            <p>Email: info@biocode.com</p>
        </div>
        <div class="column">
            <h3>Ma newsletter</h3>
            <p>Retrouvez tous les mois nos infos, articles, recettes et nouveautés. Produits 100% BIO !</p>
            <form action="enregistrermail.php" method="POST">
                <input type="email" name="email" placeholder="Votre Email..."><br>
                <input type="submit" value="Je m'inscris">
            </form>
        </div>
    </asider>
    <div class="jesuisuneligne"></div>
    <div id="copyright" class="pagewidth">
        <p class="pagewidth">&copy; Biocode 2020. Conditions générales d’utilisation et <a href="mentions.php"
                class="<?php if($current=='mentions.php'){echo'on';} ?> ">mentions légales.</a></p>
        <a class="pagewidth" href="#">Plan du site</a>
    </div>
</div>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="script/burger.js"></script>
<script src="script/indexblog.js"></script>
<script src="dist/bundle.min.js"></script>
<script src="script/contact.js"></script>

</body>

</html>