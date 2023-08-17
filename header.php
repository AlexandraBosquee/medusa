<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceuil</title>
    <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.min.css">
</head>
<body>
    <div class="container">
        <header class="">
            <div class="burger">
                <span></span>
            </div>
            <?php $page = basename($_SERVER['PHP_SELF'], ".php"); ?>
            <nav>
                <ul>
                    <li <?php if($page == "index") {echo 'class="current"';} ?>><a href="index.php">Acceuil</a></li>
                    <li <?php if(strpos($page ,'stereotype') !== false) {echo 'class="current"';} ?>><a href="stereotype.php">Les stéréotypes toxiques</a></li>
                    <li <?php if($page == "ressources") {echo 'class="current"';} ?>><a href="ressources.php">Ressources</a></li>
                </ul>
            </nav>
        </header>
    </div>
    