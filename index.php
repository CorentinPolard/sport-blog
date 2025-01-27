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
</div>
<?php include_once "footer.php" ?>