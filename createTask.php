<?php include_once ("./db_con.php")
?>

<?php 
$nameTask = htmlspecialchars($_POST ["taskName"]);
$descTack = htmlspecialchars($_POST["taskDesc"]);
?>

<?php if ($conn):?>
    
    <?php
    $requete = "INSERT INTO tasks (name, description, status) 
                VALUES ('$nameTask','$descTack', false)";
              
    $exec = $conn->query($requete);
    header("Location: ./readTask.php");
    exit();
    ?>

<?php else: ?>
    <p>Error connection</p>
<?php endif; ?>