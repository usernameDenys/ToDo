<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suppression des tâches</title>
</head>
<body>
    


<?php

require_once("./db_con.php");

if (§conn):

    echo "Connected successfully";

    $idTask = $_POST["task"];

    $requete = "DELETE FROM tasks WHERE idTask = '$idTask'";

    $result = $conn ->query($requete);

    $donnees = $exec->fetch(PDO::FETCH_ASSOC); ?>

    <div>
        <p><?php echo "La tâche a été supprimée avec succès"; ?></p>
        <p><?php echo "Cette tâche est prévue </p>





    </div>






 endif ?>
</body>
</html>