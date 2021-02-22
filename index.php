<?php
    include('header.php');
?>


<main class="pagewidth" id="details">

    <div class="letitre">
        <img src="imagebio/abeillebio.png" alt="abeille bio">
        <h1> Issue de notre ferme bio!! Nous livrons vos légumes jusqu'à 30km autour de Vannes!! </h1>
    </div>


    <div id="slider" class="banner">
        <div class="banner-wrapper">
            <input type="radio" name="banner-list" id="banner_bt1" checked />
            <input type="radio" name="banner-list" id="banner_bt2" />
            <input type="radio" name="banner-list" id="banner_bt3" />
            <ul class="banner-list">
                <li class="item" id="item1"><a href="#"><img src="imagebio/slider1.png" alt=""></a></li>
                <li class="item" id="item2"><a href="recette.php"
                        class="<?php if($current=='recette.php'){echo'on';} ?> "><img src="imagebio/slider2.png"
                            alt=""></a></li>
                <li class="item" id="item3"><a href="blog.php"
                        class="<?php if($current=='blog.php'){echo'on';} ?> "><img src="imagebio/slider3.png"
                            alt=""></a></li>
                <li class="item" id="item1"><a href="#"><img src="imagebio/slider1.png" alt=""></a></li>
            </ul>
        </div>
    </div>
    <section class="nosproduits">
        <h2>Nos légumes du moment</h2>
        <article class="particles">
            <a href="produit.php"><img src="imagebio/panier-legume.png" alt="panier de légumes bio"></a>
            <h5>Panier préhiver</h5>
        </article>
        <article class="particles">
            <a href="produit.php"><img src="imagebio/panier_legumes_bis.png" alt="panier de légumes bio 2"></a>
            <h5>Panier dynamique</h5>
        </article>
        <article class="particles">
            <a href="produit.php"><img src="imagebio/potimarron.png" alt="potimarron bio"></a>
            <h5>Potimarron</h5>
        </article>
        <article class="particles">
            <a href="produit.php"><img src="imagebio/kale.png" alt="kale bio"></a>
            <h5>kale</h5>
        </article>
        <article class="particles">
            <a href="produit.php"><img src="imagebio/chouxrouge.png" alt="choux rouge bio"></a>
            <h5>Choux rouge</h5>
        </article>
        <article class="particles">
            <a href="produit.php"><img src="imagebio/choux.png" alt="choux frisé bio"></a>
            <h5>choux frisé</h5>
        </article>
    </section>
    <section class="nosrecettes">
        <div class="recette">
            <h2>Les idées de recettes</h2>
            <article>
                <a href="recetteconchiglionis.php"
                    class="<?php if($current=='recetteconchiglionis.php'){echo'on';} ?> "><img
                        src="imagebio/recetteconchiglionis.jpg" alt="recette conchiglionis"></a>
                <h5>Conchiglionis farcis épinards</h5>
            </article>
            <article>
                <a href="#"><img src="imagebio/recettetartines.jpg" alt="recette tartines"></a>
                <h5>Tartine de radis rouge</h5>
            </article>
            <article>
                <a href="#"><img src="imagebio/recettesalades.jpg" alt="recette salades"></a>
                <h5>Salade de légumes frais</h5>
            </article>
            <article>
                <a href="#"><img src="imagebio/recettesalades2.jpg" alt="recette salades"></a>
                <h5>Salade poulet royale</h5>
            </article>
        </div>
        <a href="recette.php" class="<?php if($current=='recette.php'){echo'on';} ?> ">
            <h4> Ma petite bibliothèque de recette bio <i class="fas fa-carrot" style="color: #ff6600"></i></h4>
        </a>
        <div class="bordure">~~~~~~~<i class="fab fa-pagelines"></i>~~~~~~~~</div>
        <h4><i class="fas fa-heart"></i> Recevoir chaque semaine les idées de <span>Bon repas</span> !!</h4>
        <form action="enregistrermail.php" method="POST">
            <input type="email" name="email" placeholder="Votre Email..."><br>
            <input type="submit" value="Je m'inscris">
        </form>
    </section>
    <section class="conseils">
        <h2>Nos conseils biobio la vie</h2>
        <article>
            <a href="blog2.php" class="<?php if($current=='blog2.php'){echo'on';} ?> "><img
                    src="imagebio/conseilbienetre.png" alt="conseil bien-etre"></a>
            <div class=textconseil>
                <h5>Conseils pour ses défenses naturelles en hiver</h5>
                <a href="blog2.php" class="<?php if($current=='blog2.php'){echo'on';} ?> ">
                    <p>Qu’on se le dise, nos mamies ont toujours eu une vitalité d’enfer ! Leur secret ? Des gestes
                        simples et des remèdes naturels capables de contrer les envahisseurs. </p>
                </a>
            </div>
        </article>
        <article>
            <a href="blog1.php" class="<?php if($current=='blog1.php'){echo'on';} ?> "><img
                    src="imagebio/conseilconserve.png" alt="conseil conserve"></a>
            <div class=textconseil>
                <h5>La lacto-fermentot</h5>
                <a href="blog1.php" class="<?php if($current=='blog1.php'){echo'on';} ?> ">
                    <p>Nos arrières grand-mères l’adoraient, nous la redécouvrons. Qu’est-ce que la nourriture fermentée
                        ? Des probiotiques 100% naturels. Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Error, dolor?</p>
                </a>
            </div>
        </article>
        <a href="blog.php" class="<?php if($current=='blog.php'){echo'on';} ?> ">
            <h4><i class="fas fa-heart"></i> Plus de conseils pour plus belle la vie <i class="fas fa-heart"></i></h4>
        </a>
</main>



<?php
    include('footer-reseaux.php');
?>

<?php
    include('footer.php');
?>
