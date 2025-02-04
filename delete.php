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

if ($conn):
    $idTask = $_POST["id"];

    $requete = "DELETE FROM tasks WHERE id = '$idTask'";

    $result = $conn ->query($requete);

   

    if ($result):?>
        <p><?php echo  "La tâche a été supprimée avec succès"; ?></p>
    
    <?php else: ?>
        <p><?php echo  "Cette tâche est prévue";?> </p>

    
    <?php endif; ?>
<?php endif ?>
</body>
</html>