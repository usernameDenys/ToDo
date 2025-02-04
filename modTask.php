<?php
require_once("./db_con.php");


$taskId = $_POST["id"];

if ($conn):

    $requeteFind = "SELECT * FROM tasks WHERE id = '$taskId'";
    $exec = $conn->query($requeteFind);

    $result = $exec->fetch(PDO::FETCH_ASSOC);
?>

    <form action="./update.php" method="POST">
        <div>
            <h2></h2>
            <label for="status">Change your status</label>
            <input type="nomber" name="status" value="<?php echo $result["status"]; ?>">
        </div>

        <input type="hidden" name="status" value="<?php echo $result["status"]; ?>">
        <input class="btn" type="submit" value="Update your status">
    </form>




<?php endif; ?>