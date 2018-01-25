<?php

include("../model/Personnage.class.php");

class PersonnageController
{

    private $rapport;
    private $rapport2;

    public function rapportPersonnages()
    {
        $personnage1 = new Personnage("David", 60, 12);
        $personnage2 = new Personnage("Romain", 90, 5);

        $rapport    = $personnage1->fullDescription();
        $rapport2   = $personnage2->fullDescription();
    }
}

?>
