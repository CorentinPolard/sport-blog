<?php 
$titre = 'Page de traitement';
include_once ("header.php");
$forbiddenWords = ['sport', 'football', 'pierre'];
$usedWords = [];
$notIn = 0;
foreach ($forbiddenWords as $words) {
    if (!str_contains(strtolower($_POST['message']), $words)) {
        $usedWords[] = $words;
        $notIn++;
    }
}

if ($notIn != count($forbiddenWords)) {
    $isValid = false;
} else {
    $isValid = true;
}

header("Location: ./contact.php?isValid=$isValid");
exit();

include_once ("footer.php");
?>