<?php 
$titre = "Accueil";
include_once "header.php";

include_once "./asset/images/data.php";
?>

<div class="container">
    <h1>Bienvenue sur notre blog dédié à l'univers du sport !</h1>
    <p class="introduction">
        Que vous soyez un athlète passionné, un amateur de sensations fortes, ou simplement curieux de découvrir les coulisses du monde sportif, vous êtes au bon endroit. 
        Ici, nous parlons de tout ce qui fait vibrer les sportifs : des conseils pour améliorer vos performances, des analyses sur les grands événements, des interviews exclusives avec des champions, mais aussi des astuces pour garder la motivation au quotidien. 
        Peu importe votre niveau ou votre discipline, notre objectif est de vous inspirer, vous informer et vous aider à repousser vos limites. 
        Préparez-vous à embarquer dans une aventure sportive riche en découvertes et en émotions.
    </p>
    <div class="row g-5 miniatures">
        <?php foreach ($articles as $key => $art): ?>
            <div class="col-lg-4 col-sm-6">
                <a class="article-link" href="./single.php?articleIndex=<?php echo $key ?>">
                    <div class="card resizing">
                        <img class="card-img-top thumbnail-article" src="./asset/images/<?php echo $art['imagePath'] ?>">
                        <div class="card-body card-description">
                            <h5 class="card-title"> <?php echo $art['name'] ?></h5>
                            <h6 class="card-subtitle mb-2 text-muted">Écrit par <?php echo $art['createdBy'] ?> - <?php echo $art['date'] ?></h6>
                            <p class="card-text"><?php echo substr($art['article'], 0, 25) ?>...</p>
                        </div>
                    </div>
                </a>
            </div>
        <?php endforeach; ?>
    </div>

    <!-- Affichage compteur du nombre d'articles lu(s) -->
    <div>
        <?php 
        if (count($_SESSION['visitedPages']) == 0) {
            $readenArticle = "Vous n'avez pas encore lu d'articles.";
        } else if (count($_SESSION['visitedPages']) == 1) {
            $readenArticle = "Vous avez lu un article : \"". $_SESSION['visitedPages'][0] . "\".";
        } else {
            $recap = "";
            foreach ($_SESSION['visitedPages'] as $article) {
                $recap .= "\"$article\", ";
                }
            $readenArticle = "Vous avez lu $_SESSION[compteur] articles : $recap.";
            $readenArticle = str_replace(", .", ".", $readenArticle);
        } ?>
        <p class="compteur"><?php echo $readenArticle ?></p>
    </div>
</div>
<?php 
// session_destroy();
include_once "footer.php" ?>