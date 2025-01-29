<?php 
$titre = "Contacts";
include_once "header.php";
?>
</header>

<div class="container screenSize">
    <h1>Contacts</h1>
    <form action="./action_page.php" method="post">
        <label for="name">Nom :</label>
        <input id="name" class="input-form" type="text" name="name" required>
        <label for="email">Email :</label>
        <input id="email" class="input-form" type="email" name="email" required>
        <label for="sujet">Sujet :</label>
        <select id="sujet" class="input-form" name="sujet">
            <option>Problème</option>
            <option>Question générale</option>
            <option>Autre</option>
        </select>
        <label for="message">Votre message :</label>
        <textarea id="message" class="input-form" type="text-area" name="message" required></textarea>
        <input id="submit" class="input-form" type="submit">
    </form>
    <?php if (isset($_GET["isValid"])) {
        if ($_GET['isValid']): ?>
            <p><?php echo "Votre message a bien été transmis."?></p>
        <?php else: ?>
            <p><?php echo "Désolé ! Votre message n'a pas été transmis car vous avez utilisé un ou plusieurs mots bannis."?></p>
        <?php endif ?>
    <?php } ?> 
</div>


<?php include_once "footer.php" ?>