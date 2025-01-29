<?php 
$titre = 'Page de traitement';
include_once ("header.php");

// Test affichage données du formulaire.
// var_dump($_POST);

$forbiddenWords = ['sport', 'football', 'pierre', 'nul'];
$notIn = 0;
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['sujet']) && isset($_POST['message'])){
    foreach ($forbiddenWords as $words) {
        if (!str_contains(strtolower($_POST['message']), $words)) {
            $notIn++;
        }
    }
}

if ($notIn != count($forbiddenWords)) {
    $isValid = false;
} else {
    $isValid = true;
}

// Redirection vers page de contact
header("Location: ./contact.php?isValid=$isValid");
exit();

include_once ("footer.php");
?>