<?php

require_once __DIR__ . '/init/db.php';

// if pour la story 4
if (isset($_GET['username'])) {
    $search_username = $_GET['username'];
}

// Story 0: request to find all username
/*
$stmt = ... 
$stmt->execute();
$users = $stmt->fetchAll();
*/
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des utilisateurs</title>
</head>

<body>
    <!-- Input Search -->
    <div></div>

    <!-- Table des Utilisateurs -->
    <div>
        <form action="update_form.php" method="post">
            <table>
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>username</td>
                        <td>password</td>
                        <td>created_at</td>
                        <td>updated_at</td>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($allUsers as $user) { ?>
                        <tr>
                            <td><?= $user["id"] ?></td>
                            <td><?= $user["username"] ?></td>
                            <td><?= $user["password"] ?></td>
                            <td><?= $user["created_at"] ?></td>
                            <td><?= $user["updated_at"] ?></td>
                            <td><button type="submit" name="userId" value="<?= $user["id"] ?>">UPDATE</button></td>
                            <td><button type="submit" name="deleteUser">DELETE</button></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </form>
    </div>

    <div>
        <form action="actions/create_user.php" method="post">
            <label>
                Username :
                <input type="text" name="createusername">
            </label>
            <label>
                Password :
                <input type="password" name="createuserpassword">
            </label>
            <button type="submit" name="createuser">CREATE</button>

        </form>

    </div>
</body>

</html>