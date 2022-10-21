<?php

require_once __DIR__ . '/../init/db.php';

// id de l'utilisateur a supprimer
$id_to_delete = $_POST['deleteUser'];

$deleteUser = $db->prepare(
    "
    DELETE 
    FROM users
    WHERE id = " . $_POST['deleteUser']
);

$deleteUser->execute();
