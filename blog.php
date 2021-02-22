<?php
    include('header.php');
?>


<main class="pagewidth" id="details">

    <section id="blog">

        <header id="headerblog">

            <h1> Nos Conseils et Naturopathie </h1>
            <nav id="nav-categories">
                <ul>
                    <li><a href="#" id="tout">Tout</a></li>
                    <li><a href="#" id="permaculture">permaculture</a></li>
                    <li><a href="#" id="bienetre">Bien être</a></li>
                    <li><a href="#" id="antigaspi">Anti gaspi</a></li>
                </ul>
                <input placeholder="Recherche en mot clé" type="text" name="search-text">
            </nav>
        </header>

        <!-- -----------Les articles du blog --------- -->
        <article class="postblog tout permaculture">
            <a href="blog1.php" class="<?php if($current=='blog1.php'){echo'on';} ?> "><img
                    src="imagebio/conseilbio-1.png" alt="conseilbio"></a>
            <div class="textblog">
                <h2>Lorem ipsum dolor</h2>
            </div>
            <a href="blog1.php" class="<?php if($current=='blog1.php'){echo'on';} ?> ">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quam autem recusandae necessitatibus
                    inventore minus culpa exce aperiam.</p>
            </a>
        </article>
        <article class="postblog tout bienetre">
            <a href="blog2.php" class="<?php if($current=='blog2.php'){echo'on';} ?> "><img
                    src="imagebio/conseilbienetre.png" alt="conseilbio"></a>
            <div class="textblog">
                <h2>Lorem ipsum dolor</h2>
            </div>
            <a href="blog2.php" class="<?php if($current=='blog2.php'){echo'on';} ?> ">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quam autem recusandae necessitatibus
                    inventore minus culpa exce aperiam.</p>
            </a>
        </article>
        <article class="postblog tout antigaspi">
            <a href="#"><img src="imagebio/conseilconserve.png" alt="conseilbio"></a>
            <div class="textblog">
                <h2>Lorem ipsum dolor</h2>
            </div>
            <a href="blog1.php" class="<?php if($current=='blog1.php'){echo'on';} ?> ">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quam autem recusandae necessitatibus
                    inventore minus culpa exce aperiam.</p>
            </a>
        </article>
        <article class="postblog tout antigaspi">
            <a href="#"><img src="imagebio/conseilbio-2.png" alt="conseilbio"></a>
            <div class="textblog">
                <h2>Lorem ipsum dolor</h2>
            </div>
            <a href="blog1.php" class="<?php if($current=='blog1.php'){echo'on';} ?> ">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quam autem recusandae necessitatibus
                    inventore minus culpa exce aperiam.</p>
            </a>
        </article>
        <article class="postblog tout antigaspi">
            <a href="#"><img src="imagebio/conseilbio-3.png" alt="conseilbio"></a>
            <div class="textblog">
                <h2>Lorem ipsum dolor</h2>
            </div>
            <a href="blog1.php" class="<?php if($current=='blog1.php'){echo'on';} ?> ">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quam autem recusandae necessitatibus
                    inventore minus culpa exce aperiam.</p>
            </a>
        </article>
        <article class="postblog tout bienetre">
            <a href="#"><img src="imagebio/conseilbio-4.png" alt="conseilbio"></a>
            <div class="textblog">
                <h2>Lorem ipsum dolor</h2>
            </div>
            <a href="blog1.php" class="<?php if($current=='blog1.php'){echo'on';} ?> ">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quam autem recusandae necessitatibus
                    inventore minus culpa exce aperiam.</p>
            </a>
        </article>
        <article class="postblog tout bienetre">
            <a href="#"><img src="imagebio/conseilbio-5.png" alt="conseilbio"></a>
            <div class="textblog">
                <h2>Lorem ipsum dolor</h2>
            </div>
            <a href="blog1.php" class="<?php if($current=='blog1.php'){echo'on';} ?> ">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quam autem recusandae necessitatibus
                    inventore minus culpa exce aperiam.</p>
            </a>
        </article>
        <article class="postblog tout permaculture">
            <a href="#"><img src="imagebio/conseilbio-6.png" alt="conseilbio"></a>
            <div class="textblog">
                <h2>Lorem ipsum dolor</h2>
            </div>
            <a href="blog1.php" class="<?php if($current=='blog1.php'){echo'on';} ?> ">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quam autem recusandae necessitatibus
                    inventore minus culpa exce aperiam.</p>
            </a>
        </article>
        <article class="postblog tout permaculture">
            <a href="#"><img src="imagebio/conseilbio-7.png" alt="conseilbio"></a>
            <div class="textblog">
                <h2>Lorem ipsum dolor</h2>
            </div>
            <a href="blog1.php" class="<?php if($current=='blog1.php'){echo'on';} ?> ">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quam autem recusandae necessitatibus
                    inventore minus culpa exce aperiam.</p>
            </a>
        </article>

        <footer id="footerblog">
            <p>Page précédente - <span class="activ-blue">1/6</span> - Page suivante</p>

            <!-- <a href="#">Page précédente</a>
    <strong>1/1</strong>
    <a href="#">Page suivante</a> -->
        </footer>

    </section>

</main>


<?php
    include('footer.php');
?>