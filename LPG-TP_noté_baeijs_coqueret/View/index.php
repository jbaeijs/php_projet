<!DOCTYPE html>
<html>
    <head>
        <title>Index</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php

            require_once(__DIR__."./../Controller/Display/display.php");
            require_once(__DIR__."./../Controller/data/data.php");

            session_start();
            echo "Id session = ".session_id()."<br/>";
            echo "<br/>";


        ?>
    </body>
</html>