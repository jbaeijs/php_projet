<?php

require_once(__DIR__."./../Model/Entreprise.php");
require_once(__DIR__."./../Model/Association.php");

use POO\Model\Entreprise;
use POO\Model\Association;

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Index</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
        session_start();
        echo "Id session = ".session_id()."<br/>";
        echo "<br/>";

        $e1 = new Entreprise("Hardis", "Place de la résistance", 38000, "Grenoble", false, 500);
        $a1 = new Association("Yetis de grenoble", "Rue du hockey", 38000, "Grenoble", true, 120);

        echo "$e1 <br/>";
        echo "$a1 <br/>";

        ?>
    </body>
</html>