<?php

require_once __DIR__ . '/../init/db.php';

// verifier les champs recu avec $_POST
// Creer en BDD

$alreadyExist;

if (
    isset($_POST['createuser'])
    && !empty($_POST['createusername'])
    && !empty($_POST['createuserpassword'])
) {
    foreach ($allUsers as $users) {
        if ($users["username"] == $_POST["createusername"]) {
            echo "<h1> Erreur </h1>";
            $alreadyExist = true;
        }
    };
}

if (!$alreadyExist) {
    $createUser = $db->prepare("
    INSERT INTO users(username,password)
    VALUES(" . "'" . $_POST['createusername'] . "'" . "," . $_POST['createuserpassword'] . ")");
    $createUser->execute();
    header("Location: ../users.php");
}
