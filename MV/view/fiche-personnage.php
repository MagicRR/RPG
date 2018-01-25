<?php include("../model/Personnage.class.php");?>


<!DOCTYPE html>
<html>
    <head>
        <title>Personnage</title>
        <meta charset="utf-8">
    </head>

    <body>

        <?php $personnage1 = new Personnage("David", 60, 12); ?>
        <?php $personnage2 = new Personnage("Romain", 90, 5); ?>

        <?php $personnage1->fullDescription(); ?>
        <br/>
        <br/>
        <?php $personnage2->fullDescription(); ?>

        <br/><br/>
        <?php $personnage2->fight($personnage1, $personnage2); ?>
        <br/>
        <?php $personnage1->fight($personnage1, $personnage2); ?>
        <br/>
        <?php $personnage1->fight($personnage1, $personnage2); ?>
        <br/>
        <?php $personnage1->fight($personnage1, $personnage2); ?>
        <br/>
        <?php $personnage1->fight($personnage1, $personnage2); ?>
        <br/>
        <?php $personnage1->fight($personnage1, $personnage2); ?>
        <br/>
        <?php $personnage1->fight($personnage1, $personnage2); ?>
        <br/>
        <?php $personnage1->fight($personnage1, $personnage2); ?>


        <br/></br>

    </body>

</html>
