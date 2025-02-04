<?php

$status = $_POST["status"];


require_once("./db_con.php");

if ($conn):

    $requete = "UPDATE tasks SET status = '$status' WHERE id = $status";
    $exec = $conn->query($requete);
?>
    <div class="upd">
        <h2>Your data has been successfully changed &#128521;</h2>
        <a class="btn" href="./index.php">Home</a>
    </div>

<?php endif; ?>