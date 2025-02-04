<?php
include_once("./db_con.php");
?>
<?php if ($conn) : ?>
    <?php


    $requete = "SELECT * FROM tasks";


    $exec = $conn->query($requete);
    $result = $exec->fetchAll(PDO::FETCH_ASSOC);
    ?>

    <?php
    foreach ($result as $index => $tasks) : ?>




        <p class="name"><?php echo $tasks['name']; ?></p>
        <p class="lastname"><?php echo $tasks['description']; ?></p>


        <div class="btn-group">
            <form class="delete" action="./delete.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $tasks["id"] ?>">
                <input type="submit" value="Delete your profile">
            </form>

            <form class="change" action="./modTask.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $tasks["id"] ?>">
                <input type="submit" value="Change your details">
            </form>
        </div>


        </div>


    <?php endforeach; ?>



<?php else: ?>
    <p>Error connection</p>
<?php endif; ?>