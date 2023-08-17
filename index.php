
<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

require "header.php" ?> 

<div class="sky">
    <?php include 'svg/sky_1.svg' ?>
    <?php include 'svg/sky_2.svg' ?>
    <?php include 'svg/sky_3.svg' ?>
    <?php include 'svg/sky_4.svg' ?>
</div>

<h1 class="visibly-hidden">Acceuil</h1>

<div class="container">
    <div class="block__acceuil">
        <h2>Qui est le vrai monstre ?</h2>
        <div class="connecteur">
            <div class="connecteur__ligne">
                <?php include 'svg/ligne.svg' ?>
            </div>
        </div>
        <div class="rectangle--central corners">
            <p>Dans la culture moderne, Médusa est devenue célèbre pour être un être méchant et cruel qui transforme quiconque rencontrant son regard en pierre. Mais beaucoup de mystères trainent autour de l’histoire de la Gorgone. Si elle est souvent dépeinte comme étant un être fondamentalement mauvais, d’autres versions de son histoire affirment qu’elle est en fait la victime des vicissitudes et du mauvais jugement d’êtres plus puissants qu’elle. </p>
            <div class="etoile etoile--TL"><?php include 'svg/etoile.svg' ?></div>
            <div class="etoile etoile--TR"><?php include 'svg/etoile.svg' ?></div>
            <div class="etoile etoile--BL"><?php include 'svg/etoile.svg' ?></div>
            <div class="etoile etoile--BR"><?php include 'svg/etoile.svg' ?></div>
        </div>
    </div>

    <ul class="story">
        <li class="connecteur--T">
            <div class="story__ligne">
                <?php include 'svg/ligne.svg' ?>
            </div>
        </li>
        <li class="right">
            <div class="story__ligne">
                <?php include 'svg/ligne.svg' ?>
            </div>
            <div class="story__etoile">
                <?php include 'svg/etoile.svg' ?>
            </div>
            <div class="story__img story__img--A" id="medusa1">
                <?php include 'svg/medusa.svg' ?>
            </div>
            <div class="story__text">
                <h3>Médusa est l’une des trois gorgones. À l’instar de ces sœurs Sthéno et Euryale, est une belle jeune femme, mortelle à la magnifique chevelure.</h3>
            </div>
        </li>

        <li class="left">
            <div class="story__ligne">
                <?php include 'svg/ligne.svg' ?>
            </div>
            <div class="story__etoile">
                <?php include 'svg/etoile.svg' ?>
            </div>
            <div class="story__img story__img--A" id="poseidon">
                <?php include 'svg/poseidon.svg' ?>
            </div>
            <div class="story__text">
                <h3>Sa beauté lui valut d’être courtisée par Poséidon le dieu marin, mais elle refusa ses avances. Cependant, Poséidon n’est guère un dieu qui abandonne celles sur qui il a jeté son dévolu. </h3>
            </div>
        </li>

        <li class="right">
            <div class="story__ligne">
                <?php include 'svg/ligne.svg' ?>
            </div>
            <div class="story__etoile">
                <?php include 'svg/etoile.svg' ?>
            </div>
            <div class="story__img">
                <?php include 'svg/temple.svg' ?>
            </div>
            <div class="story__text">
                <h3>Sous la forme d’un oiseau, il la poursuit et Méduse n’eut d’autre choix que de fuir jusqu’où elle le pouvait. Sa course l’amena jusque dans un temple d’Athéna où elle trouva refuge. </h3>
            </div>
        </li>

        <li class="left">
            <div class="story__ligne">
                <?php include 'svg/ligne.svg' ?>
            </div>
            <div class="story__etoile">
                <?php include 'svg/etoile.svg' ?>
            </div>
            <div class="story__img">
                <?php include 'svg/attaque.svg' ?>
            </div>
            <div class="story__text">
                <h3>Elle se pensait alors en sécurité, mais cela n’arrête pas Poséidon qui entre dans le temple et la viole.</h3>
            </div>
        </li>

        <li class="right">
            <div class="story__ligne">
                <?php include 'svg/ligne.svg' ?>
            </div>
            <div class="story__etoile">
                <?php include 'svg/etoile.svg' ?>
            </div>
            <div class="story__img story__img--athena">
                <?php include 'svg/athena.svg' ?>
            </div>
            <div class="story__text">
                <h3>Athéna devint furieuse devant cette insulte qui lui avait été faite. Sa colère aurait pu se tourner vers Poséidon, mais ce fut Méduse qui en fit les frais.</h3>
            </div>
        </li>

        <li class="left">
            <div class="story__ligne">
                <?php include 'svg/ligne.svg' ?>
            </div>
            <div class="story__etoile">
                <?php include 'svg/etoile.svg' ?>
            </div>
            <div class="story__img story__img--B">
                <?php include 'svg/medusa2.svg' ?>
            </div>
            <div class="story__text">
                <h3>Athéna la transforma en monstre comme ses sœurs, ajoutant que tous ceux qui croisent son regard seraient pétrifiés. Ainsi on la surnomma également Gorgone par son apparence et ses origines.</h3>
            </div>
        </li>
        <li class="connecteur--B">
            <div class="story__ligne">
                <?php include 'svg/ligne.svg' ?>
            </div>
        </li>
    </ul>

    <div class="block__acceuil">
        <h2>Pourquoi je vous raconte cette histoire?</h2>
        <div class="connecteur">
            <div class="connecteur__ligne">
                <?php include 'svg/ligne.svg' ?>
            </div>
        </div>
        <div class="rectangle--central corners">
            <p>Car Médusa à été victime d’une injustice qui est encore fort présente dans notre société actuel. Les mouvements féministes d'aujourd'hui, comme #MeToo, ont érigés Médusa entant que symbole des femmes agressées sexuellement et de leur colère envers ces injustices: qui sont normalisé/banalisé à cause de la culture du viol omniprésente dans notre société.</p>
            <div class="etoile etoile--TL"><?php include 'svg/etoile.svg' ?></div>
            <div class="etoile etoile--TR"><?php include 'svg/etoile.svg' ?></div>
            <div class="etoile etoile--BL"><?php include 'svg/etoile.svg' ?></div>
            <div class="etoile etoile--BR"><?php include 'svg/etoile.svg' ?></div>
        </div>
        <div class="connecteur">
            <div class="connecteur__ligne">
                <?php include 'svg/ligne.svg' ?>
            </div>
        </div>
    </div>

    <div class="block__acceuil">
        <h2>Qu'est-ce que la culture du viol ?</h2>
        <div class="connecteur">
            <div class="connecteur__ligne">
                <?php include 'svg/ligne.svg' ?>
            </div>
        </div>
        <div class="rectangle--central corners">
            <p>Ensemble de comportements qui banalisent, excusent et justifient les agressions sexuelles, ou les transforment en plaisanteries et divertissements. Le corps des femmes y est considéré comme un objet destiné à assouvir les besoins des hommes. Les commentaires sexistes abondent et ils créent un climat confortable pour les agresseurs. Dans une telle culture, la responsabilité de l’agression repose sur la victime, dont la parole est remise en cause.</p>
            <div class="etoile etoile--TL"><?php include 'svg/etoile.svg' ?></div>
            <div class="etoile etoile--TR"><?php include 'svg/etoile.svg' ?></div>
            <div class="etoile etoile--BL"><?php include 'svg/etoile.svg' ?></div>
            <div class="etoile etoile--BR"><?php include 'svg/etoile.svg' ?></div>
        </div>
        <div class="connecteur">
            <div class="connecteur__ligne">
                <?php include 'svg/ligne.svg' ?>
            </div>
        </div>
    </div>

    <div class="block__acceuil">
        <h2>Quel est notre mission?</h2>
        <div class="connecteur">
            <div class="connecteur__ligne">
                <?php include 'svg/ligne.svg' ?>
            </div>
        </div>
        <div class="rectangle--central corners">
            <p>
                <ul>
                    <li>Déconstruire les préjugés qui permettent à la culture du viol de perdurer. </li>
                    <li>Remettez en question les stéréotypes sexistes et les idéaux violents auxquels tout le monde est exposé dans les médias, dans la rue et même dans les écoles. </li>
                    <li>Donnez des moyens pour lutter contre la culture du viol.</li>
                </ul>
            </p>
            <div class="etoile etoile--TL"><?php include 'svg/etoile.svg' ?></div>
            <div class="etoile etoile--TR"><?php include 'svg/etoile.svg' ?></div>
            <div class="etoile etoile--BL"><?php include 'svg/etoile.svg' ?></div>
            <div class="etoile etoile--BR"><?php include 'svg/etoile.svg' ?></div>
        </div>
        <div class="connecteur">
            <div class="connecteur__ligne">
                <?php include 'svg/ligne.svg' ?>
            </div>
        </div>
    </div>

    <div class="block__acceuil">
        <h2>Quel sont ses stéréotype?</h2>
        <div class="connecteur">
            <div class="connecteur__ligne">
                <?php include 'svg/ligne.svg' ?>
            </div>
        </div>
        <div class="groupe"> 
            <a href="stereotype_inconnu.php" class="carre corners" >
                <h4>"Le viol a lieu dans une ruelle sombre et est commis par un inconnu."</h4>
                <div class="etoile etoile--TL"><?php include 'svg/etoile.svg' ?></div>
                <div class="etoile etoile--TR"><?php include 'svg/etoile.svg' ?></div>
                <div class="etoile etoile--BL"><?php include 'svg/etoile.svg' ?></div>
                <div class="etoile etoile--BR"><?php include 'svg/etoile.svg' ?></div>
            </a>
            <a href="stereotype_vengence.php" class="carre corners" >
                <h4>"Les femmes aiment se venger"</h4>
                <div class="etoile etoile--TL"><?php include 'svg/etoile.svg' ?></div>
                <div class="etoile etoile--TR"><?php include 'svg/etoile.svg' ?></div>
                <div class="etoile etoile--BL"><?php include 'svg/etoile.svg' ?></div>
                <div class="etoile etoile--BR"><?php include 'svg/etoile.svg' ?></div>
            </a>
            <a href="stereotype_rare.php" class=" carre corners" >
                <h4>"Les viols arrivent rarement"</h4>
                <div class="etoile etoile--TL"><?php include 'svg/etoile.svg' ?></div>
                <div class="etoile etoile--TR"><?php include 'svg/etoile.svg' ?></div>
                <div class="etoile etoile--BL"><?php include 'svg/etoile.svg' ?></div>
                <div class="etoile etoile--BR"><?php include 'svg/etoile.svg' ?></div>
            </a>
        </div>

        <div class="align-right">
            <a href="stereotype.php" class="btn mb-2">
                <span>Voir tout les stéréotypes</span>
            </a>
        </div>

        <div class="connecteur">
            <div class="connecteur__ligne">
                <?php include 'svg/ligne.svg' ?>
            </div>
        </div>
    </div>
    <div class="bottom"></div>

</div>

<?php require 'footer.php' ?> 
