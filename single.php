<?php 
$origine = $_GET['articleIndex'];
include_once "./asset/images/data.php";

foreach ($articles as $key => $art) {
    if ($key == $origine) {
        $titre = $art['name'];
        $imgPath = "./asset/images/$art[imagePath]";
        $articleContent = $art['article'];
    }
}

include_once "header.php";
?>

<div class="container">
    <h1><?php echo $titre ?></h1>
    <img class="" src="<?php echo $imgPath ?>">
</div>



<?php include_once "footer.php";
?>