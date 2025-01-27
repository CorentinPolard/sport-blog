<?php 
$origine = $_GET['articleIndex'];
include_once "./asset/images/data.php";

$titre = $articles[$origine]['name'];
$imgPath = "./asset/images/" . $articles[$origine]['imagePath'];
$author = $articles[$origine]['createdBy'];
$date = $articles[$origine]['date'];
$articleContent = $articles[$origine]['article'];

include_once "header.php";
?>

<div class="container single">
    <h1><?php echo $titre ?></h1>
    <img class="img-article" src="<?php echo $imgPath ?>">
    <h6 class="author"><?php echo "Écrit par $author - Publié le $date" ?></h6>
    <p class="article-content"><?php echo $articleContent ?></p>
</div>

<?php include_once "footer.php";
?>