<?php

class Personnage
{

    private $pseudo;
    private $life;
    private $lifeBeforeAttack;
    private $attack;

    public function __construct($pseudo, $life, $attack){
        $this->pseudo = $pseudo;
        $this->life = $life;
        $this->attack = $attack;
    }

    // Phase d'attaque
    public function fight($attaquant, $defenseur)
    {
        $attaquant->setLifeBeforeAttack($attaquant->getLife());
        $defenseur->setLifeBeforeAttack($defenseur->getLife());

        $defenseur->setLife(
            $defenseur->getLife() - $attaquant->getAttack()
        );

        $attaquant->setLife(
            $attaquant->getLife() - $defenseur->getAttack()
        );

        if($attaquant->getLife() <= 0)
        {
            $attaquant->setLife(0);
        }
        if($defenseur->getLife() <= 0)
        {
            $defenseur->setLife(0);
        }

        echo
        "
        Attaquant :<br/>
        Pseudo du personnage : " . $attaquant->pseudo . "<br/>
        Vie du personnage : (".$attaquant->getLifeBeforeAttack().") - " .$defenseur->getAttack(). " = " . $attaquant->getLife() . "<br/><br/>
        Défenseur :<br/>
        Pseudo du personnage : " . $defenseur->pseudo . "<br/>
        Vie du personnage : (".$defenseur->getLifeBeforeAttack().") - " .$attaquant->getAttack(). " = " . $defenseur->getLife() . "<br/>
        ";

        echo "<br/><br/>";

        if($attaquant->getLife() <= 0)
        {
            echo $attaquant->getPseudo() . " est mort...";
        }
        if($defenseur->getLife() <= 0)
        {
            echo $defenseur->getPseudo() . " est mort...";
        }

    }

    // Description totale
    public function fullDescription()
    {
        echo
        "
        Pseudo du personnage : " . $this->pseudo . "<br/>
        Vie du personnage : " . $this->life . "<br/>
        Attaque du personnage : " . $this->attack . "</br>
        ";
    }

    // Pseudo
    public function getPseudo()
    {
        return $this->pseudo;
    }

    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;
    }

    // Life
    public function getLife()
    {
        return $this->life;
    }

    public function setLife($life)
    {
        $this->life = $life;
    }

    // Life Before Attack
    public function getLifeBeforeAttack()
    {
        return $this->lifeBeforeAttack;
    }

    // Life Before Attack
    public function setLifeBeforeAttack($lifeBeforeAttack)
    {
        $this->lifeBeforeAttack = $lifeBeforeAttack;
    }

    // Attack
    public function getAttack()
    {
        return $this->attack;
    }

    public function setAttack($attack)
    {
        $this->attack = $attack;
    }

}

?>
