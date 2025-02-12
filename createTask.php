<?php 
include_once("./db_con.php");

$nameTask = htmlspecialchars($_POST["taskName"]);
$descTack = htmlspecialchars($_POST["taskDesc"]);

$pattern = "/^[A-Z]{1}[a-z]*$/";

$nameValide = false;
$descValide = false;

if ($conn):

    if (isset($nameTask) && !empty(trim($nameTask)) && preg_match($pattern, $nameTask) && strlen($nameTask) > 2 && strlen($nameTask) <= 255):
        $nameValide = true;
    else:
        echo "<p>Vérifiez le format du texte.</p>";
    endif;

    if (isset($descTack) && !empty(trim($descTack))):
        $descValide = true;
    else:
        echo "<p>Vérifiez le format du texte.</p>";
    endif;

    if ($nameValide === true && $descValide === true):

        $requete = "INSERT INTO tasks (name, description, status) 
                    VALUES (:taskName, :desc, 0)";

        $etat = $conn->prepare($requete);

        $etat->bindParam(':taskName', $nameTask, PDO::PARAM_STR);
        $etat->bindParam(':desc', $descTack, PDO::PARAM_STR);

        if ($etat->execute()):
            header("Location: ./readTask.php");
            exit();
        else:
            echo "<p>Erreur lors de l'insertion.</p>";
        endif;

    endif; // Fin du test des valeurs

else:
    echo "<p>Erreur de connexion.</p>";
endif; 
?>
