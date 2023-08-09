<?php require "header.php" ?> 

<div class="container ">
<h1 class="visibly-hidden">Liste des stéréotypes toxiques</h1>
    <div class="block__acceuil">
        <h2>Déconstruisons ses stéréotipe toxique !</h2>
        <div class="connecteur">
            <div class="connecteur__ligne">
                <?php include 'svg/ligne.svg' ?>
            </div>
        </div>
    </div>

    <section class="splide" >

        <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide">
                        <a href="stereotype_inconnu.php">"Le viol a lieu dans une ruelle sombre et est commis par un inconnu."</a>
                    </li>
                    <li class="splide__slide">
                        <a href="stereotype_vengence.php">"Les femmes aiment se venger"</a>
                    </li>
                    <li class="splide__slide">
                        <a href="stereotype_rare.php">"Les viols arrivent rarement"</a>
                    </li>
                </ul>
        </div>
    </section>
    
</div>

<?php include 'footer.php' ?> 