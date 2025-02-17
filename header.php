<?php 
session_start();
if (!isset($_SESSION['visitedPages'])) {
    $_SESSION['visitedPages'] = [];
} ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="./asset/css/style.css" rel="stylesheet">
    <title><?php echo $titre ?></title>
</head>
<body>
    <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-color-grey">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link text-white" href="./">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="./contact.php">Contacts</span></a>
                </li>
            </ul>
        </div>
    </nav>
    </header>