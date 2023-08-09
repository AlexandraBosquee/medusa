<?php $page = basename($_SERVER['PHP_SELF'], ".php"); ?>

<div class="container--color">
    <div class="container">
        <nav class="indicateur">
            <ul class="indicateur__list">
                <li class="indicateur__item">
                    <a href="stereotype_inconnu.php">
                        <?php if($page == "stereotype_inconnu") {  ?>
                            <div class="etoile"><?php include 'svg/etoile.svg' ?></div>
                        <?php } else  { ?>
                            <div class="cercle cercle--blanc"></div>

                        <?php }  ?>

                    </a>
                </li>
                <li class="indicateur__item">
                    <a href="stereotype_vengence.php">
                        <?php if($page == "stereotype_vengence") {  ?>
                            <div class="etoile"><?php include 'svg/etoile.svg' ?></div>
                        <?php } else if ($page == "stereotype_inconnu") { ?>
                            <div class="cercle cercle--jaune"></div>

                        <?php } else  { ?>
                            <div class="cercle cercle--blanc"></div>

                        <?php }  ?>
                    </a>
                </li>
                <li class="indicateur__item">
                    <a href="stereotype_rare.php">
                        <?php if($page == "stereotype_vengence") {  ?>
                            <div class="cercle cercle--jaune"></div>

                        <?php } else if ($page == "stereotype_rare") { ?>
                            <div class="etoile"><?php include 'svg/etoile.svg' ?></div>

                        <?php } else  { ?>
                            <div class="cercle cercle--blanc"></div>

                        <?php }  ?>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>

