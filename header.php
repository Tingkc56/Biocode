<?php
/*Récupération*/
$path='http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
$current=basename($path);
?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon petit biocode</title>
    <!-- link google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Imprima&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&display=swap" rel="stylesheet">
    <!-- link icon -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!-- <link rel="stylesheet" href="style.scss"> -->
</head>

<body>

    <header id="nav-main">
        <div id="navcontainer" class="pagewidth">
            <div id="telephone">
            <a href="tel:+33268686868"><i class="fas fa-phone-alt"></i>+ 33 02 68 68 68 68</a>
            </div>
            <a class="mescours" href="panier.php">
                <span class="textcours">Mes cours en ligne</span>
                <span class="iconcours"><i class="fas fa-shopping-basket"></i></span>
                <span id="cartQt"></span>
                <span id="cartPx"></span>
            </a>
            <div id="logo-bio">
                <a class="nav-logo" href="index.php" class="<?php if($current=='index.php'){echo'on';} ?> ">
                <img src="imagebio/logo.png" alt="biocode">
                </a>
                <form>
                    <!-- RECHERCHE -->
                    <div class="searchbar">
                        <input placeholder="Rechercher" type="text" name="search-text">
                        <button type="submit"><i class="fas fa-search"></i></button>
                    </div>
                </form>
            </div>
            <div id="burger"><i class="fas fa-bars"></i>
            </div>
            <nav id="navbar">
                <ul class="ulnavbar">
                    <li class="textnavbar"><a href="index.php" class="<?php if($current=='index.php'){echo'on';} ?> "><i class="fas fa-home"></i></a></li>
                    <li class="textnavbar"><a href="biocode.php" class="<?php if($current=='biocode.php'){echo'on';} ?> ">Biocode</a></li>
                    <li class="textnavbar"><a href="recette.php" class="<?php if($current=='recette.php'){echo'on';} ?> ">Recette</a></li>
                    <li class="textnavbar"><a href="blog.php" class="<?php if($current=='blog.php'){echo'on';} ?> ">Blog</a></li>
                    <li class="textnavbar"><a href="produit.php" class="<?php if($current=='produit.php'){echo'on';} ?> ">Produit</a></li>
                    <li class="textnavbar"><a href="contact.php" class="<?php if($current=='contact.php'){echo'on';} ?> ">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>