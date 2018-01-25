<?php include("../controller/PersonnageController.php"); ?>
<?php $controller = new PersonnageController(); ?>

<!DOCTYPE html>
<html>
    <head>
        <title>Personnage</title>
        <meta charset="utf-8">
    </head>

    <body>

        <?php

            $controller->rapportPersonnages();

        ?>

    </body>

</html>
